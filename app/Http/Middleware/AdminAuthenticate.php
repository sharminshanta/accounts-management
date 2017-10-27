<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (User::isAdmin()) {
            return $next($request);
        }

        return redirect('/');
    }
}
