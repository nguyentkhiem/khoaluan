<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckLogout
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
        if(Auth::guest()){
            return redirect()->intended('admin/login'); 
        }
        // if(Auth::check()){
        //     if(Auth::user()->user_level > '1'){
        //         return redirect()->intended('/');
        //     }
        // }
        return $next($request);
    }
}
