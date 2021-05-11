<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class LoginController extends Controller 
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

   
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

  /*

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider,Request $request)
    {
       // console.log($request);
        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect('/');
        }
       
        $existingUser = User::where('email', $user->email)->first();


    
        if($existingUser){
			
		if($existingUser->estado==1){	
            //Si ya esta creado el usuario y tiene el tipo de usuario null lo redirecciona a la vista de estudiante
           if($existingUser->tipo_usuario==null){
            auth()->login($existingUser, true);
            return redirect()->to('/student');
           }

           //Si recibe tipo de usuario 1 el sistema lo redirecciona a la vista de administrador
           if($existingUser->tipo_usuario==1){
            if($existingUser->google_id==null){
                $existingUser->google_id  = $user->id;
                $existingUser->avatar     = $user->avatar;
               }
            auth()->login($existingUser, true);
            return redirect()->to('/admin');
           }

           //Si recibe tipo de usuario 2 el sistema lo redirecciona a la vista de docente
           if($existingUser->tipo_usuario==2){
               if($existingUser->google_id==null){
                $existingUser->google_id  = $user->id;
                $existingUser->avatar     = $user->avatar;
               }
            auth()->login($existingUser, true);
            return redirect()->to('/teacher');
           }
		   
		    }else{
        $request->session()->flash('alert-danger', 'Error: Usuario inhabilitado por favor contacte al administrador');
         return   redirect('/');
          }
 
        } else {
            //Si no existe el usuario lo crea con tipo de usuario nulo el cual equivale a tipo
            //estudiante
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->tipo_usuario    = null;
           
            auth()->login($newUser, true);

           
            return redirect()->to('/student');
        }
        
    }

    //Cierra la sesión del usuario
    public function logout(Request $request){
        session('g_token','');
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    //Redirecciona a la pagina de inicio de sesión de google
     public function getSocialAuth($provider=null)
       {
           if(!config("services.$provider")) abort('404');

           return Socialite::driver($provider)->redirect('/');
       }

}
