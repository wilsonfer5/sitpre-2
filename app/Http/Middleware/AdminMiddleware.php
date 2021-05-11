<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        //Valida que se alla iniciado sesion y que el tipo de usuario sea administrador
        if(Auth::check() && Auth::user()->tipo_usuario==1)
        return $next($request);

        return redirect('/');
    }
}
