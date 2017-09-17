<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-signin-client_id"
          content="314746839991-vks7amsqof010dbpp17eil1i6vmrb2nl.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js?onload=start" async defer></script>
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="alternative icon" type="icon" href="{{  asset('images/logo.png') }}">
</head>

<body>
<div class="container-fluid">
    <header role="banner" class="login-page__header">
        <a href="#">
            <img src="{{ asset('images/logo-3x.png') }}" alt="">
        </a>
    </header>
    <main role="main">
        <div class="login login-bg">
            <div class="login-board">
                <div class="login-socials">
                    <div class="social">
                        <a href="{{ route('social_login', ['provider'=> 'facebook']) }}" class="social-btn large facebook">
                            <i class="fa fa-facebook fa-2x icon"></i> Login with Facebook</a>
                        <a href="{{ route('social_login', ['provider'=> 'twitter']) }}" class="social-btn large twitter">
                            <i class="fa fa-twitter fa-2x icon"></i>Login with Twitter</a>
                        <a href="{{ route('social_login', ['provider'=> 'google']) }}" class="social-btn large google">
                            <i class="fa fa-google-plus fa-2x icon"></i>Login with Google+</a>
                    </div>
                </div>
                <div class="vertical-divider">
                    <span class="vertical-divider-text has-ring">OR</span>
                </div>
                <div class="login-sign-in manual">
                    <p>Sign in manually</p>
                    <form action="{{ route('process_login') }}" name="login-form" method="POST" class="login-form">
                        {{ csrf_field() }}
                        <div class="login-input">
                            <label for="username" class="hidden">Email</label>
                            <input type="email" name="email" placeholder="Email" required="required">
                        </div>
                        <div class="login-input">
                            <label for="password" class="hidden">Password</label>
                            <input type="password" name="password" placeholder="Password" required="required">
                        </div>

                        <div class="alert alert-danger text-center">
                            @foreach($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>

                        <div class="login-control">
                            <div class="remember-me">
                                <input type="checkbox" id="checkbox" name="" class="hidden">
                                <label for="checkbox">
                                    <span class=""></span> Remember me
                                </label>
                            </div>
                            <button type="submit" class="login__btn">
                                login
                            </button>
                        </div>
                    </form>
                    <div class="links">
                        <a href="{{ route('register') }}" class="register">Register now</a>
                        <a href="{{ route('forgot_password') }}">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer role="complementary" class="login-page__footer">
        <div class="copyright"><p>&copy; Copyright 2017. All Rights Reserved.</p></div>
    </footer>
</div>
<script src="{{ asset('js/bundle.js') }}"></script>
</body>

<script type="text/javascript">
    function start() {
        gapi.load('auth2', function () {
            auth2 = gapi.auth2.init({
                client_id: '314746839991-vks7amsqof010dbpp17eil1i6vmrb2nl.apps.googleusercontent.com',
                // Scopes to request in addition to 'profile' and 'email'
                //scope: 'additional_scope'
            });
        });
    }
</script>

</html>
