<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Besofty\Web\Attendance\Model\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login(Request $request)
    {
        $postData = $_POST;
        try {
            $user = User::authentication($request);
            if (!$user) {
                Log::error('There has no user with this credential', ['credential' => $postData]);
                \Session::flash('error', "Oh No! Credential is mismatched");
                return redirect('/');
            }

            //$userDetails = User::details($user['uuid']);
            Log::info('User has been successfully login in dashboard', ['user_details' => $user]);
            \Session::put('authinfo', $user['uuid']);
            return redirect('/dashboard');
        } catch (\Exception $exception) {
            throw $exception;
        }

        return redirect('/');
    }

    /**
     * Log the user out of the application.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
       \Session::invalidate();
        return redirect('/');
    }
}
