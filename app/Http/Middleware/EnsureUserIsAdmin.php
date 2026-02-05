<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next): Response
{
    // Check if the user is logged in AND has admin status
    if (!auth()->check() || !auth()->user()->is_admin) {
        // Redirect or abort if unauthorized
        return redirect('/dashboard')->with('error', 'Unauthorized access.');
    }

    return $next($request);
}
}
