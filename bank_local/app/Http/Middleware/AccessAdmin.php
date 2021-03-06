<?php

namespace WSB_BANK\Http\Middleware;

use Closure;
use Auth;
class AccessAdmin
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
        if(Auth::user()->hasAnyRole('admin')){

            return $next($request);
        }
        return redirect('home');
        
       // hasAnyRoles(['banker','admin'])
       //return $next($request);
       // }
       // return redirect('home');
    }
}
