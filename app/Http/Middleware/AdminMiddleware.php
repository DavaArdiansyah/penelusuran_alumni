<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(auth()->user()->role == 'Admin'){
        //     return $next($request);
        // }
        // return response()->json(['You do not have access for this page']);
        if (Auth::user()->id_role == 3) {
            return $next($request);
        }
        return redirect('/');
    }
}
