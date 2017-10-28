<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * @param $request
     * @param Closure $next
     * @param null $guard
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!\Session::get('authinfo')) {
            Log::info('There has no authinfo data', ['data' => $request]);
            return redirect('/');
        }

        return $next($request);
    }
}
