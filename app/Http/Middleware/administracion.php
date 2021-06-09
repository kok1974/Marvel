<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class administracion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(! $request->user()->administrador()){
            abort(401, 'Acceso no permitido');
        }

        return $next($request);
    }
}
