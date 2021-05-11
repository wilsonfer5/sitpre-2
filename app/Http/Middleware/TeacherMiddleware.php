<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        //Valida que se alla iniciado sesion y que el tipo de usuario sea docente
        if(Auth::check() && Auth::user()->tipo_usuario==2)
        return $next($request);

        return redirect('/');
    }
    
}
