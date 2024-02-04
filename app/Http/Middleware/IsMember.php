<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::user() || Auth::user()->role != '2') {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
