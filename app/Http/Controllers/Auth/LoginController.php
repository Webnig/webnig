<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        if ( Auth::check() ) {
            return redirect($this->redirectTo);
        } else {
            $this->validate($request, [
                'email' => 'bail|required|email',
                'password' => 'bail|required'
            ]);

            if ( Auth::attempt([ 'email' => $request->email, 'password' => $request->password ]) ) {
                return redirect($this->redirectTo);
            }
        }

        return back()->withErrors(['login_failed' => 'incorrect email and password combination']);
    }


    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
