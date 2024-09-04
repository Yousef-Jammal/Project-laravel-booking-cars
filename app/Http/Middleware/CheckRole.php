<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $role_id
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role_id)
    {

        // if (Auth::check()) {
        //     if (Auth::user()->role_id == $role_id) {
        //         return $next($request);
        //     }
        // }

        if(Auth::user()->role->name == 'user'){
            return redirect()->route('home_index');
        }elseif(Auth::user()->role->name == 'admin'){
            return $next($request);
        }
    }
}