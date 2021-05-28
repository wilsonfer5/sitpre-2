<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Subject;
use App\User;

use Google_Client;
use Google_Service_Drive;
use League\Csv\Reader;
use League\Csv\Statement;

class TeacherController extends Controller {
    //Constructor de la clase
    public function __construct(){
        $this->middleware('docente');
     }
    //redireccion a la vista inicio
    public function index(){
        return view('Teacher/index');
    }
    //redireccion a la vista video tutorial
    public function video_player(){
        return view('Teacher/video');
    }
  


      //listado de materias 
    //obtener la lista de las materias ordenandolas por grupo y nombre
    public function listado_materias($filtro='id',$orden='asc'){
        //Solo lista las materias del docente que se encuentra logueado
        $id_user=auth()->user()->id;
        $listado=Subject::where('user_id','=',$id_user)->orderBy($filtro,$orden)->paginate(10000); 
        if($orden=='asc'){ $orden='desc'; }else{ $orden='asc';  }
       return view('Teacher.listado')->with('listado',$listado)->with('orden',$orden);
       
    }


    
    //Editar materia
    //editar una materia
    public function editar_materia(Request $request){
        $id_subject=$request->input('id_materia');
        $codigo=$request->input('code').'-'.$request->input('group');
        $materia=Subject::find($id_subject);
        $existingCode = Subject::where('code',$codigo )->first();
        $existingUrl = Subject::where('url_drive', $request->input('url_drive'))->first();

        if($materia->code!=$codigo){
            if($existingCode){
                $request->session()->flash('alert-danger', 'Error: Ya existe una materia con el siguiente codigo '.$codigo.' !!');
                return   redirect()->to('/listado_materias');
            }
         }

         if($materia->url_drive!=$request->input('url_drive')){
            if($existingUrl){
                $request->session()->flash('alert-danger', 'Error: Ya existe una materia con el siguiente url'.$request->input('url_drive').' !!');
                return   redirect()->to('/listado_materias');
            }
         }

        $materia->name=$request->input('name');
        $materia->code=$request->input('code').'-'.$request->input('group');
        $materia->url_drive=$request->input('url_drive');


        //Si retorna en 1 quiere decir que la url no coincide con la necesaria
       
       if($this->validar_estructura($request->input('url_drive'))){
            if($materia->save()) {
         $request->session()->flash('alert-info', 'Actualización exitosa!!');
         return   redirect()->to('/listado_materias');
        } else{
         return redirect()->to('/listado_materias');
        }
         }else{
        $request->session()->flash('alert-danger', 'Error: El archivo no concuerda con la estructura establecida');
        return redirect()->to('/listado_materias');
        }

    }



     //Crear materia
     //crear una materia
    public function crear_materia(Request $request){
        $codigo=$request->input('code').'-'.$request->input('group');
        $existingSubject = Subject::where('code', $codigo)->first();
        $existingUrl=Subject::where('url_drive', $request->input('url_drive'))->first();
       if($existingSubject){
            $request->session()->flash('alert-danger', 'Error: Materia con codigo '.$codigo.' ya existe!!');
            return redirect()->to('/listado_materias');
        }
        if($existingUrl){
            $request->session()->flash('alert-danger', 'Error: Url drive '.$request->input('url_drive').' ya existe!!');
            return redirect()->to('/listado_materias');
        }

        
        if($this->validar_estructura($request->input('url_drive'))){
       
        $newSubject                  = new Subject;
        $newSubject->name            = $request->input('name');
        $newSubject->code            = $request->input('code').'-'.$request->input('group');
        $newSubject->url_drive       = $request->input('url_drive');
        $newSubject->user_id         = auth()->user()->id;
        if($newSubject->save()){
            $request->session()->flash('alert-success', 'Materia creada de manera exitosa!!');
            return redirect()->to('/listado_materias');
            }else{
            $newSubject->session()->flash('alert-danger', 'Ocurrio un error!!');
            return redirect()->to('/listado_materias');
                 }
        }else{
            $request->session()->flash('alert-danger', 'Error: Recuerde el archivo debe contener la estructura establecida y no puede tener datos sin encabezado '
            ."\n \n \n".
            '     *Revise el video que se encunetra en la pagina principal si lo cree necesario.');
            return redirect()->to('/listado_materias');
            }  
    }

    //Valida la estructura del archivo compartido por url
    //validar la estructura del archivo de google sheet
    public function validar_estructura($urldrive){
      

        try{
        //Se valida que la url el host sea docs.google si no se retorna url no valida
        if(parse_url($urldrive, PHP_URL_HOST)!="docs.google.com"){
           var_dump('elseiftry');
            return false;
        }
      
      //Divido el url 
      $arrayurl = explode("/", $urldrive);
      
      //Llave se encuentra en la posicion numero 5
     if(!isset($arrayurl[5])){
        var_dump('else isset');
        return false;
     }
      $keydrvie=$arrayurl[5];
     
      $client = new Google_Client();
      putenv('GOOGLE_APPLICATION_CREDENTIALS=../public_html/googledrive.json');
      $client->useApplicationDefaultCredentials();
      $client->addScope(Google_Service_Drive::DRIVE);
     

     
      $driveService = new Google_Service_Drive($client);
      $fileID = $keydrvie;
      
      $response = $driveService->files->export($fileID, 'text/csv', array(
            'alt' => 'media'));
      
      $content = $response->getBody()->getContents();

      $reader = Reader::createFromString($content, 'r');
    
      
      //Se obtiene el encabezado en la fila 1 si no tiene dicho encabezado se envia un mensaje
    if($reader->setHeaderOffset(0)){

      $reader->skipEmptyRecords();
      $records = (new Statement())->process($reader);
     
      //Se recorre llena un array con el encabezado
      foreach($records->getHeader() as $value){
        $newarray [] =$value;
         }
         // se empieza a preguntar si el encabezado cumple con la estructura
         if(strcasecmp($newarray[0],"id")!=0){
           var_dump('elseid');
            return false;
            }
            

            if(strcasecmp($newarray[1],"codigo")!=0){
              var_dump('elsecodigo');
              return false;
          }
            
            if(strcasecmp($newarray[2],"nombres")!=0){
                var_dump('elsenombres');
                return false;
            }

            if(strcasecmp($newarray[3],"correo")!=0){
                var_dump('elsecorreo');
            } 
            
            $id=$newarray[0];
            $array = json_encode($records);
            $jsonarray=json_decode($array,true);
            foreach($jsonarray as $valor){
                if(strcasecmp($valor[$id],"observaciones")==0){
                    return true;
                 }
              }
              var_dump('else1');
              return false;   
               
    }else{
           var_dump('else2');
            return false;
        }

    }catch(\Exception $e){

        return false;
    }  
    } 

     //validar la estructura del archivo de google sheet
    public function validar_estructura2($urldrive){
      

        try{
        //Se valida que la url el host sea docs.google si no se retorna url no valida
        if(parse_url($urldrive, PHP_URL_HOST)!="docs.google.com"){
           
            return false;
        }
      
      //Divido el url 
      $arrayurl = explode("/", $urldrive);
      
      //Llave se encuentra en la posicion numero 5
     if(!isset($arrayurl[5])){
        
        return false;
     }
      $keydrvie=$arrayurl[5];
     
      $client = new Google_Client();
      putenv('GOOGLE_APPLICATION_CREDENTIALS=../public_html/googledrive.json');
      $client->useApplicationDefaultCredentials();
      $client->addScope(Google_Service_Drive::DRIVE);
     

     
      $driveService = new Google_Service_Drive($client);
      $fileID = $keydrvie;
      
      $response = $driveService->files->export($fileID, 'text/csv', array(
            'alt' => 'media'));
      
      $content = $response->getBody()->getContents();

      $reader = Reader::createFromString($content, 'r');
    
      
      //Se obtiene el encabezado en la fila 1 si no tiene dicho encabezado se envia un mensaje
    if($reader->setHeaderOffset(0)){

      $reader->skipEmptyRecords();
      $records = (new Statement())->process($reader);
     
      //Se recorre llena un array con el encabezado
      foreach($records->getHeader() as $value){
        $newarray [] =$value;
         }
         // se empieza a preguntar si el encabezado cumple con la estructura
         if(strcasecmp($newarray[0],"id")!=0){
           
            return false;
            }
            

            if(strcasecmp($newarray[1],"codigo")!=0){
             
              return false;
          }
            
            if(strcasecmp($newarray[2],"nombres")!=0){
             
                return false;
            }

            if(strcasecmp($newarray[3],"correo")!=0){
                
            } 
            
            $id=$newarray[0];
            $array = json_encode($records);
            $jsonarray=json_decode($array,true);
            foreach($jsonarray as $valor){
                if(strcasecmp($valor[$id],"observaciones")==0){
                    return $jsonarray;
                 }
              }
              
              return false;   
               
    }else{
           
            return false;
        }

    }catch(\Exception $e){

        return false;
    }  
    } 


    //Metodo para eliminar la materia si el docente lo desea
     public function eliminar_materia($id,Request $request ){
        //Se realiza la busqueda de la materia por el id
       $subject = Subject::find($id);
       //Se realiza la eliminación del registro y se redirecciona un mensaje de exito de la eliminación
       $subject->delete();

       $request->session()->flash('alert-success', 'Aviso: Materia eliminada de manera exitosa!!');
       return redirect()->to('/listado_materias');
     }



     //Metodo para realizar la vista en detalle del contenido de la materia seleccionada
     //debe mostrar todos los datos en un listado.
     //tomar el arciho de googe sheet y tpmas si contenido para 
     //la vista detalles
    public function detalle_materia( $id,Request $request ){
      
        $materia=Subject::find($id);
        if($materia==null){

          return redirect()->to('listado_materias');
        }
        //$docente=User::find($materia->user_id);
        
        $grupo = explode("-", $materia->code);
        //Primero se valida si el archivo sigue cumpliendo la estructura
        $listado2=$this->validar_estructura2($materia->url_drive);
        $encabezado=$this->obtenerencabezado($materia);
        $observaciones=$this->obtener_observaciones($materia);
        if($listado2&&$encabezado&&$observaciones){
         //$listado =Subject::orderBy('name', 'ASC')->get();
        return view('Teacher.detalles', ['observaciones'=>$observaciones,'nombre_materia'=>$materia->name.'-'.$grupo[1]],['listado2' => $listado2,'encabezado'=>$encabezado]);
        }
        
        if($listado2==0){
            var_dump('entro al if de listado 2');
        $request->session()->flash('alert-danger', 'Aviso: No se encontraron notas para mostrar al profesor'.count($listado2));
        return redirect()->to('listado_materias');
        }
        if($observaciones==0){
        $request->session()->flash('alert-danger', 'Error: Nocuenta con las observaciones.');
        return redirect()->to('listado_materias');
        }else{
        $request->session()->flash('alert-danger', 'Error: No se pueden mostrar notas por favor contacte al docente');
        return redirect()->to('listado_materias');
            }
     }
    // se obtiene un vector con las observaciones digitadas por el docente en la 
    // hoja de google Sheet
    public function obtenerencabezado(Subject $materia){
      
 try{
        if(parse_url($materia->url_drive , PHP_URL_HOST)!="docs.google.com"){
         return false;
       }
       
       //Divido el url 
       $arrayurl = explode("/", $materia->url_drive);
       
       //Llave se encuentra en la posicion numero 5
       if(!isset($arrayurl[5])){
        return false;
       }
      $keydrvie=$arrayurl[5];
      
       $client = new Google_Client();
       putenv('GOOGLE_APPLICATION_CREDENTIALS=../public_html/googledrive.json');
       $client->useApplicationDefaultCredentials();
       $client->addScope(Google_Service_Drive::DRIVE);
 
       $driveService = new Google_Service_Drive($client);
       $fileID = $keydrvie;
       
       $response = $driveService->files->export($fileID, 'text/csv', array(
             'alt' => 'media'));
        
       $content = $response->getBody()->getContents();
 
       $reader = Reader::createFromString($content, 'r');
       
       //Se obtiene el encabezado en la fila 1 si no tiene dicho encabezado se envia un mensaje
     if($reader->setHeaderOffset(0)){
 
       $reader->skipEmptyRecords();
       $records = (new Statement())->process($reader);
      
       //Se recorre llena un array con el encabezado
       foreach($records->getHeader() as $value){
         $newarray [] =$value;
          }
          if(strcasecmp($newarray[0],"id")!=0){
            return false;
            }

            if(strcasecmp($newarray[1],"codigo")!=0){
              return false;
          }
            
            if(strcasecmp($newarray[2],"nombres")!=0){
                return false;
            }

            if(strcasecmp($newarray[3],"correo")!=0){
                return false;
            }else{
        return $newarray;
      }

    }else{
      return false;
      }

      }
      catch(\Exception $e){
    return false;
        }
    }
    //Obtiene las observaciones
    public function obtener_observaciones(Subject $materia){
        
      try{
        if(parse_url($materia->url_drive , PHP_URL_HOST)!="docs.google.com"){
            return false;
          }
          
          //Divido el url 
          $arrayurl = explode("/", $materia->url_drive);
          
          if(!isset($arrayurl[5])){
            return false;
         }
          $keydrvie=$arrayurl[5];
          $client = new Google_Client();
          putenv('GOOGLE_APPLICATION_CREDENTIALS=../public_html/googledrive.json');
          $client->useApplicationDefaultCredentials();
          $client->addScope(Google_Service_Drive::DRIVE);
    
          $driveService = new Google_Service_Drive($client);
          $fileID = $keydrvie;
          
          $response = $driveService->files->export($fileID, 'text/csv', array(
                'alt' => 'media'));
           
          $content = $response->getBody()->getContents();
    
          $reader = Reader::createFromString($content, 'r');
          
          //Se obtiene el encabezado en la fila 1 si no tiene dicho encabezado se envia un mensaje
        if($reader->setHeaderOffset(0)){
          $reader->skipEmptyRecords();
          $records = (new Statement())->process($reader);

          foreach($records->getHeader() as $value){
            $newarray [] =$value;
             }
             // se empieza a preguntar si el encabezado cumple con la estructura
                if(strcasecmp($newarray[0],"id")!=0){
                return false;
                }
    
                if(strcasecmp($newarray[1],"codigo")!=0){
                  return false;
              }
                
                if(strcasecmp($newarray[2],"nombres")!=0){
                    return false;
                }
    
                if(strcasecmp($newarray[3],"correo")!=0){
                    return false;
                }else{
          
               $id=$newarray[0];
               $codigo=$newarray[1];
               $array = json_encode($records);
               $jsonarray=json_decode($array,true);
               foreach($jsonarray as $valor){
                  //Se relaiza la validacion para obtener lo que se encuentra en las columnas 0 y 1 
                  //para obtener las validaciones.
                if(strcasecmp($valor[$id],"observaciones")==0){
                  $datos2[]=$valor[$id];
                }else{
                  $datos2[]=$valor[$id]." : ".$valor[$codigo];
                }
                   }
                   //dd($datos2);
                 return $datos2;
                }
              }else{
                return false;
            }
          }catch(\Exception $e){
            return false;
        }
     
     } 

    public function prueba(){
       echo('hola mundo');
    }

    }