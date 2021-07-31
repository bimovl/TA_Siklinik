<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NurseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('user')['level'] !== 'PERAWAT') {
            return redirect('/');
        }
        return $next($request);
    }
}
