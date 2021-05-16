<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

      //Crear docente
      public function crear_docente(Request $request){
        $existingUser = User::where('email', $request->input('email'))->first();
        
        if($existingUser){
            $request->session()->flash('alert-danger', 'Error: Usuario con correo '.$request->input('email').' ya existe!!');
            return redirect()->to('/');
        }else{
        $newUser                  = new User;
        $newUser->name            = $request->input('name');
        $newUser->email           = $request->input('email');
        $newUser->google_id       = null;
        $newUser->avatar          = null;
        $newUser->tipo_usuario    = 2;
        $newUser->estado          = 0;
        if($newUser->save()){
            $request->session()->flash('alert-success', 'Usuario creado de manera exitosa, espere la confirmación por correo electronico y activación de su usuario!!');
            return redirect()->to('/');
           
        }else{
            $request->session()->flash('alert-danger', 'Ocurrio un error!!');
            return redirect()->to('/');
        }
        }
       
     
    }

    public function prueba()
    {
        return view('index');
    }
}
