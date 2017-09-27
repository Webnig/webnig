<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | LostRib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LostRib">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="alternative icon" type="icon" href="{{  asset('images/logo.png') }}">
</head>
<body>
<nav class="navbar navbar-default login_nav">
    <div class="container-fluid text-center">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-3x.png') }}" alt="LostRib Logo" width="150px">
            </a>
        </div>
        <div class="collapse navbar-collapse pull-right" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <i class="icon fa fa-search fa-2x text-info"></i>
                </li>
                <li>
                    <i class="icon fa fa-bell fa-2x text-info"></i>
                </li>
                <li>
                    <i class="icon fa fa-user fa-2x text-info"></i>
                </li>
            </ul>
        </div>
        {{-- <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul>
            </li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div> --}}
    </div>
</nav>

<div class="jumbotron login_background">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="panel big_padding">
                    <div class="panel-body">
                        <div class="row">
                            {{-- Socials --}}
                            <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12" style="margin-top: 20px;">
                                <a href="{{ route('social_login', ['provider' => 'facebook']) }}"
                                   class="btn btn-primary button_large">
                                    <i class="icon fa fa-facebook fa-2x fa-fw"></i> Login with Facebook
                                </a>
                                <br>
                                <a href="{{ route('social_login', ['provider' => 'twitter']) }}"
                                   class="btn btn-info button_large">
                                    <i class="icon fa fa-twitter fa-2x fa-fw"></i> Login with Twitter
                                </a>
                                <br>
                                <a href="{{ route('social_login', ['provider' => 'google']) }}"
                                   class="btn btn-danger button_large">
                                    <i class="icon fa fa-google-plus fa-2x fa-fw"></i> Login with Google+
                                </a>
                            </div>
                            {{-- Vertical Divider --}}

                            <div class="col-sm-1 hidden-xs vertical-divider">
                                <span class="vertical-divider-text">OR</span>
                            </div>

                            {{-- Horizonatal divider --}}
                            <div class="hidden-sm hidden-md hidden-lg horizontal-divider">
                                <span class="horizontal-divider-text">OR</span>
                            </div>

                            {{-- Manual Login --}}
                            <div class="col-md-5 col-sm-5 col-lg-6 col-xs-12">
                                <p class="text-center">Sign in Manually</p>
                                {{-- @include('partials.errors') --}}
                                <form action="{{ route('process_login') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="email" class="hidden">Email</label>
                                        <input type="email" name="email" placeholder="Email Address"
                                               class="form-control input_padding">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="hidden">Password</label>
                                        <input type="password" name="password" placeholder="Password"
                                               class="form-control input_padding">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label for="remember-me">
                                                        <input class="checkbox-inline checkbox" type="checkbox"
                                                               value=""> Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info long_button">
                                                    Login
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="links">
                                    <a href="{{ route('register') }}" class="register">Register now </a> |
                                    <a href="{{ route('forgot_password') }}" class="">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid footer2">
    <br>
    <hr>
    <div class="text-center">
        <p class="lead">
            &copy; Copyright 2017. All rights reserved
        </p>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>