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
        // تحقق إذا كان المستخدم مسجل الدخول
        if (Auth::check()) {
            // تحقق من role_id للمستخدم
            if (Auth::user()->role_id == $role_id) {
                return $next($request);
            }
        }

        // إذا لم يكن المستخدم مصرحًا له

        return redirect('/home')->with('error', 'ليس لديك الصلاحية للدخول إلى هذه الصفحة.');
    }
}