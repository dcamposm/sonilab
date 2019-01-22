<?php

namespace App\Http\Middleware;

use Closure;

class AuthUsuari
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (isset($_SESSION["usuari"])){           
            return redirect('/');            
        }
        
        return $next($request);
    }
}
