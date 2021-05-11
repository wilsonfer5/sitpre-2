<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Google_Client;
use Google_Service_Drive;
use League\Csv\Reader;
use League\Csv\Statement;

class TeacherController extends Controller
{
    public function __construct(){
        $this->middleware('docente');
    }

    public function index(){
        return view('Teacher/index');
    }

    public function video_player(){
        return view('Teacher/video');
    }


      //listado de materias 
      public function listado_materias($filtro='id',$orden='asc'){
        //Solo lista las materias del docente que se encuentra logueado
        $id_user=auth()->user()->id;
        $listado=Subject::where('user_id','=',$id_user)->orderBy($filtro,$orden)->paginate(10000); 
        if($orden=='asc'){ $orden='desc'; }else{ $orden='asc';  }
       return view('Teacher.listado')->with('listado',$listado)->with('orden',$orden);
       
    }


    
    //Editar materia
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
        }
        else
        {
         return redirect()->to('/listado_materias');
        }
    }else{
        $request->session()->flash('alert-danger', 'Error: El archivo no concuerda con la estructura establecida');
        return redirect()->to('/listado_materias');
    }

    }



     //Crear materia
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
    public function validar_estructura($urldrive){
      
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
                return false;
            } 
            
            $id=$newarray[0];
            $array = json_encode($records);
            $jsonarray=json_decode($array,true);
            foreach($jsonarray as $valor){
                if(strcasecmp($valor[$id],"observaciones")==0){
                    return true;
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
      

}
