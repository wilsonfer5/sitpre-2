<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Subject;
use App\Favorite;
use App\Http\Requests\CreateMessageRequest;
use App\User;
use Google_Client;
use Google_Service_Drive;
use League\Csv\Reader;
use League\Csv\Statement;
use Illuminate\Mail\Mailable;
use App\Mail\EnviarComentario;
use Mail;


class StudentController extends Controller
{
    
    public function __construct(){
        $this->middleware('estudiante');
    }
    
      //listado de materias 
      public function listado_materias(){
        //Devuelve el listado de todas las materias creadas
       // $usuario = User::where('email', auth()->user()->email)->first();
        //var_dump($usuario->politicas);
        //
        $favoritas=Subject::rightJoin('favorites', 'favorites.id_materia', '=', 'subjects.id')->where('favorites.id_estudiante','=',auth()->user()->id)->select('subjects.id','subjects.code','subjects.name','subjects.type','subjects.url_drive','subjects.user_id')->orderBy('name','ASC')->get();

        $listado=Subject::whereNotIn('subjects.id',function ($query) { $query->select('id_materia')->from('favorites')->Where('id_estudiante', '=',auth()->user()->id);})->get();
        //$listado =Subject::orderBy('name', 'ASC')->get();
        return view('Student.index', ['listado' => $listado,'favoritas'=>$favoritas]);
       
    }

    public function video_player(){
      //Devuelve el listado de todas las materias creadas
      $listado =Subject::orderBy('name', 'ASC')->get();
        
      return view('Student.video',['listado' => $listado]);
    }


      //enviar comentario al docente
     public function enviar_comentario(Request $request)
     {      

     if (!($request->input('coment')=="")) {
           $comentario = new EnviarComentario($request->all());
    Mail::to($request->input('emailpro'))->send($comentario);
            $request->session()->flash('alert-success', 'Envio de Comentario Exitoso !!');
            
            return redirect()->to($request->input('userurl')."");       
     }else{
            $request->session()->flash('alert-danger', 'Ocurrio un error!! el comentario no puede estar vacio.');
            return redirect()->to($request->input('userurl')."");
        }

     }


    //Metodo para buscar las materias por division dependiendo del grupo seleccionadao
    public function notas_materias_grupo($grupo){
      $listado =Subject::orderBy('name', 'ASC')->get();
      $division="";
               
      if($grupo==1){
       $division="A-D";
        //Se realiza una consulta para obtener el nombre del docente dueño de la materia
        $lista = User::select('users.name as docente','subjects.name','subjects.code','subjects.id')
        ->join('subjects', 'subjects.user_id', '=', 'users.id')
        ->where('subjects.name', 'like', 'A%')
        ->orwhere('subjects.name', 'like', 'B%')
        ->orwhere('subjects.name', 'like', 'C%')
        ->orwhere('subjects.name', 'like', 'D%')->get();
        return view('Student.lista', ['lista' => $lista,'listado' => $listado,'division'=>$division]);
      }

      if($grupo==2){
        $division="E-H";
        $lista = User::select('users.name as docente','subjects.name','subjects.code','subjects.id')
        ->join('subjects', 'subjects.user_id', '=', 'users.id')
        ->where('subjects.name', 'like', 'E%')
        ->orwhere('subjects.name', 'like', 'F%')
        ->orwhere('subjects.name', 'like', 'G%')
        ->orwhere('subjects.name', 'like', 'H%')->get();
        return view('Student.lista', ['lista' => $lista,'listado' => $listado,'division'=>$division]);
      }

      if($grupo==3){
        $division="I-L";
        $lista = User::select('users.name as docente','subjects.name','subjects.code','subjects.id')
        ->join('subjects', 'subjects.user_id', '=', 'users.id')
        ->where('subjects.name', 'like', 'I%')
        ->orwhere('subjects.name', 'like', 'J%')
        ->orwhere('subjects.name', 'like', 'K%')
        ->orwhere('subjects.name', 'like', 'L%')->get();
        return view('Student.lista', ['lista' => $lista,'listado' => $listado,'division'=>$division]);
      }

      if($grupo==4){
        $division="M-O";
        $lista = User::select('users.name as docente','subjects.name','subjects.code','subjects.id')
        ->join('subjects', 'subjects.user_id', '=', 'users.id')
        ->where('subjects.name', 'like', 'M%')
        ->orwhere('subjects.name', 'like', 'N%')
        ->orwhere('subjects.name', 'like', 'Ñ%')
        ->orwhere('subjects.name', 'like', 'O%')->get();
        return view('Student.lista', ['lista' => $lista,'listado' => $listado,'division'=>$division]);
      }

      if($grupo==5){
        $division="P-S";
        $lista = User::select('users.name as docente','subjects.name','subjects.code','subjects.id')
        ->join('subjects', 'subjects.user_id', '=', 'users.id')
        ->where('subjects.name', 'like', 'P%')
        ->orwhere('subjects.name', 'like', 'Q%')
        ->orwhere('subjects.name', 'like', 'R%')
        ->orwhere('subjects.name', 'like', 'S%')->get();
        return view('Student.lista', ['lista' => $lista,'listado' => $listado,'division'=>$division]);
      }

      if($grupo==6){
        $division="T-W";
        $lista = User::select('users.name as docente','subjects.name','subjects.code','subjects.id')
        ->join('subjects', 'subjects.user_id', '=', 'users.id')
        ->where('subjects.name', 'like', 'T%')
        ->orwhere('subjects.name', 'like', 'U%')
        ->orwhere('subjects.name', 'like', 'V%')
        ->orwhere('subjects.name', 'like', 'W%')->get();
        return view('Student.lista', ['lista' => $lista,'listado' => $listado,'division'=>$division]);
      }

      if($grupo==7){
        $division="X-Z";
        $lista = User::select('users.name as docente','subjects.name','subjects.code','subjects.id')
        ->join('subjects', 'subjects.user_id', '=', 'users.id')
        ->where('subjects.name', 'like', 'X%')
        ->orwhere('subjects.name', 'like', 'Y%')
        ->orwhere('subjects.name', 'like', 'Z%')
        ->get();
        return view('Student.lista', ['lista' => $lista,'listado' => $listado,'division'=>$division]);
      }else{
        return redirect()->to('/student');
      }
        
    }
    public function notas_materia($id,Request $request){
        
        $materia=Subject::find($id);
        if($materia==null){
          return redirect()->to('/student');
        }
        $docente=User::find($materia->user_id);
        
        $grupo = explode("-", $materia->code);
        //Primero se valida si el archivo sigue cumpliendo la estructura
        $listado2=$this->validar_estructura($materia);
        $encabezado=$this->obtenerencabezado($materia);
        $observaciones=$this->obtener_observaciones($materia);
        if($listado2&&$encabezado&&$observaciones){
         $listado =Subject::orderBy('name', 'ASC')->get();
        return view('Student.listado', ['listado' => $listado,'observaciones'=>$observaciones,'nombre_materia'=>$materia->name.'-'.$grupo[1].'-'.$materia->type],['listado2' => $listado2,'encabezado'=>$encabezado,'nombre_docente'=>$docente->name,'email_docente'=>$docente->email]);
        }
        
        if($listado2==0){
        $request->session()->flash('alert-danger', 'Aviso: No se encontraron notas para mostrar para el estudiante');
        return redirect()->to('/student');
        }
        if($observaciones==0){
        $request->session()->flash('alert-danger', 'Error: No se pueden mostrar notas por favor contacte al docente');
        return redirect()->to('/student');
        }else{
        $request->session()->flash('alert-danger', 'Error: No se pueden mostrar notas por favor contacte al docente');
        return redirect()->to('/student');
            }
    }



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

  }catch(\Exception $e){
    return false;
}
}


    //Valida la estructura del archivo compartido por url
    public function validar_estructura(Subject $materia){
        

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
              
            $array = json_encode($records);
            $jsonarray=json_decode($array,true);
            $correo=$newarray[3];
            foreach($jsonarray as $valor){
               if(strcasecmp($valor[$correo],auth()->user()->email)==0){
                    $datos2[]=$valor;
                    $array2 = json_encode($datos2);
                    $jsonarray2=json_decode($array2,true);
                    return $jsonarray2;
                    }
              }
              //Retorna cero cuando no encuentre notas dentro del archivo para el estudiante
              return 0;
             }
           }else{
             return false;
         }

        }catch(\Exception $e){
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

 public function aceptar_politicas(Request $request){
      
      $id=auth()->user()->id;
      $estudiante=User::where('id', $id)->first();
      $estudiante->politicas=1;
      $estudiante->save();
   return redirect()->to('/student');
    }
    
    public function agregar_favorita($id,Request $request){
      $newfavorite                  = new Favorite;
      $newfavorite->id_materia      =(int)$id;
      $newfavorite->id_estudiante   =auth()->user()->id;
     if($newfavorite->save()){

      $request->session()->flash('alert-info', 'Materia agregada a Favoritos Exitosamente!!');
      return redirect()->to('/student');
    }else{
      $request->session()->flash('alert-danger', 'No es posible agregar a favoritos!!');
      return redirect()->to('/student');
    }
    }

    public function eliminar_favorita($id,Request $request){
      $elimFav= Favorite::where('id_materia', $id)->where('id_estudiante','=',auth()->user()->id)->first();
      //var_dump($elimFav);
     if($elimFav->delete()){

      $request->session()->flash('alert-info', 'Materia Eliminada de tus Favoritas Exitosamente!!');
      return redirect()->to('/student');
    }else{
      $request->session()->flash('alert-danger', 'No es posible eliminar de favoritos!!');
      return redirect()->to('/student');
    }
    }
 
}