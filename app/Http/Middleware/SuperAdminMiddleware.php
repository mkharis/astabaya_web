<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdminMiddleware
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
        if (auth()->user()) {
            if (auth()->user()->role == 'super_admin') {
                return $next($request);
            }
            return redirect()->route('beranda', ['token' => $request->token]);
        }
        return redirect()->route('login');
    }
}
