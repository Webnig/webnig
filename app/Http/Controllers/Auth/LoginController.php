<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

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

    public function redirectToProvider($provider)
    {
        /*$authUser = User::where('provider_id', $user->id)->first();
        if ( $authUser ) {
            return $authUser;
        }
        return User::create([
            'name' => $user->name,
            'email' => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);*/
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $authUser = Socialite::driver($provider)->user();

        $user = User::where('provider_id', $authUser->id);

        if ( empty($user) ) {
            $user = new User();
            if ( $provider == 'google' ) {
                $user->first_name = $authUser->user[ 'name' ][ 'givenName' ];
                $user->last_name = $authUser->user[ 'name' ][ 'familyName' ];
            } elseif ( $provider == 'facebook' ) {
                $names = explode(" ", $authUser->user[ 'name' ]);
                $user->first_name = $names[ 0 ];
                $user->last_name = $names[ 1 ];

                $user->gender = ($authUser->user[ 'gender' ] == 'female') ? 'f' : 'm';
            }

            $user->provider_id = $authUser->id;
            $user->provider = $provider;
            $user->mat_id = substr(strval($authUser->id), 0, 6);
            $user->original_image = $authUser->avatar_original; //please do something about this: download and save
            $user->email = $authUser->email;

            $user->save();

        }

        Auth::login($user, true);

        //check if user has completed their profile

        return redirect($this->redirectTo);
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

            $remember = ($request->has('remember')) ? true : false;

            if ( Auth::attempt([ 'email' => $request->email, 'password' => $request->password ], $remember) ) {
                return redirect($this->redirectTo);
            }
        }

        return back()->withErrors([ 'login_failed' => 'Incorrect email and password combination' ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
