<?php

namespace App\Http\Middleware;

use Besofty\Web\Attendance\Model\User;
use Besofty\Web\Attendance\Model\Role;
use Besofty\Web\Attendance\Model\UsersRole;
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
        try {
            $authinfo = \Besofty\Web\Attendance\Model\User::details(\Session::get('authinfo'));
            $roleID = \Besofty\Web\Attendance\Model\UsersRole::getRoleID($authinfo['id']);
            $userRole = \Besofty\Web\Attendance\Model\Role::getName($roleID['role_id']);
            $isAdmin = Role::isAdmin($userRole['slug']);

            if ($isAdmin['slug'] != 'super-administrator' && $isAdmin['slug'] != 'administrator' ) {
                return redirect('/logout');
            }
            return $next($request);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
