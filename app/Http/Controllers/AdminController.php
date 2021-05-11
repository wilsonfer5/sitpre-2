<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\RegisterEmail;
use App\Mail\VerificacionEmail;
use App\Http\Requests\AdminCreateRequest;
use App\Http\Requests\AdminUpdateRequest;

class AdminController extends Controller
{
    //


    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
        return view('Admin/index');
    }

     //listado de docentes
     public function listado_docentes($filtro='id',$orden='asc'){
        //Solo lista los docentes que son tipo de usuario 2 en la base de datos
        $listado=User::where('tipo_usuario','=',2)->orderBy($filtro,$orden)->paginate(10000); 
        if($orden=='asc'){ $orden='desc'; }else{ $orden='asc';  }
       return view('Admin.listado')->with('listado',$listado)->with('orden',$orden);
       
    }


    //Editar docente
    public function editar_docente(Request $request){
        $id_docente=$request->input('id_docente');
        $docente=User::find($id_docente);
        $existingUser = User::where('email', $request->input('email'))->first();

        if($docente->email!=$request->input('email')){
            if($existingUser){
                $request->session()->flash('alert-danger', 'Error: Usuario con correo '.$request->input('email').' ya existe!!');
                return   redirect()->to('/listado_docentes');
            }
         }
        $docente->name=$request->input('name');
        $docente->email=$request->input('email');

     
       if($docente->save()) {
         $request->session()->flash('alert-info', 'Actualización exitosa!!');
         return   redirect()->to('/listado_docentes');
        }
        else
        {
         return redirect()->to('/listado_docentes');
        }
    
    
    }



     //Crear docente
     public function crear_docente(Request $request){
        $existingUser = User::where('email', $request->input('email'))->first();
        
        if($existingUser){
            $request->session()->flash('alert-danger', 'Error: Usuario con correo '.$request->input('email').' ya existe!!');
            return redirect()->to('/listado_docentes');
        }else{
        $newUser                  = new User;
        $newUser->name            = $request->input('name');
        $newUser->email           = $request->input('email');
        $newUser->google_id       = null;
        $newUser->avatar          = null;
        $newUser->tipo_usuario    = 2;
        if($newUser->save()){
            Mail::to($newUser->email)->send(new RegisterEmail($newUser));
            $request->session()->flash('alert-success', 'Docente creado de manera exitosa!!');
            return redirect()->to('/listado_docentes');
           
        }else{
            $request->session()->flash('alert-danger', 'Ocurrio un error!!');
            return redirect()->to('/listado_docentes');
        }
        }
       
     
    }


    //Inhabilitar docente
    public function inhabilitar_docente($id_docente,Request $request){
        //Se realiza la busqueda del docente por el id
        $docente=User::find($id_docente);
        //Se le asigna 0, false en el estado para inhabilitarlo
        $docente->estado=0;

        //Si se logra guardar se envia un mensaje de exito con el docente que se inhabilito
        if($docente->save()){
        $request->session()->flash('alert-success', 'Se inhabilito el docente '.$docente->name.' con exito!!');
        return redirect()->to('/listado_docentes');
        }else{
            $request->session()->flash('alert-danger', 'Ocurrio un error!!');
            return redirect()->to('/listado_docentes');
               
        }
    }


    //habilitar docente
    public function habilitar_docente($id_docente,Request $request){
        //Se realiza la busqueda del docente por el id
        $docente=User::find($id_docente);
        //Se le asigna 1, true en el estado para habilitarlo
        $docente->estado=1;

        //Si se logra guardar se envia un mensaje de exito con el docente que se habilito
        if($docente->save()){
        Mail::to($docente->email)->send(new VerificacionEmail($docente));
        $request->session()->flash('alert-info', 'Se habilito el docente '.$docente->name.' con exito!!');
        return redirect()->to('/listado_docentes');
        }else{
            $request->session()->flash('alert-danger', 'Ocurrio un error!!');
            return redirect()->to('/listado_docentes');
               
        }
    }
     

     //Metodo para eliminar el docente 
     public function eliminar_docente($id,Request $request ){
        //Se realiza la busqueda del docente por el id
       $subject = User::find($id);
       //Se realiza la eliminación del registro y se redirecciona un mensaje de exito de la eliminación
       $subject->delete();

       $request->session()->flash('alert-success', 'Aviso: Docente eliminado de manera exitosa!!');
       return redirect()->to('/listado_docentes');
     }

}
