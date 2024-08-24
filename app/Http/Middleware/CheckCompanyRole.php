<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCompanyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has a company associated
        if (auth()->check() && auth()->user()->company) {
            return $next($request);
        }

        // If the user does not have a company, redirect them with an error message
        return redirect('/index')->with('error', 'You do not have permission to access this page.');
    }
}
