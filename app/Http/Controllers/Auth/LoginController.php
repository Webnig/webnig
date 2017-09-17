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

        var_dump($authUser); exit;
        $exists = User::query()->where('provider_id', '=', $authUser->id);
        if($exists){
            Auth::login($authUser, true);
        }else{
            $user = new User();
            $user->provider_id = $authUser->id;
            $user->provider = $provider;
            $user->original_image = $authUser->imageUrl; //please do something about this
            $user->email = $authUser->email;
        }
        $authUser = $this->findOrCreateUser($user, $provider);

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

            if ( Auth::attempt([ 'email' => $request->email, 'password' => $request->password ]) ) {
                return redirect($this->redirectTo);
            }
        }

        return back()->withErrors([ 'login_failed' => 'incorrect email and password combination' ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
