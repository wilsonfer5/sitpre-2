<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        //Valida que se alla iniciado sesion y que el tipo de usuario sea estudiante
        if(Auth::check() && Auth::user()->tipo_usuario==null)
        return $next($request);

        return redirect('/');
    }

    
}
