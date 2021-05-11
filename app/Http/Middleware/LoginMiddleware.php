<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
    if(Auth::check() && Auth::user()->tipo_usuario==1)
    return $next($request);

    return redirect('/');
}
}
