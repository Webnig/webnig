<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<title>Home | LostRib</title>--}}
    <title>@yield('title')</title>
    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    {{-- favicon --}}
    <link rel="alternative icon" type="icon" href="{{ asset('images/logo.png') }}">
</head>

<body>
<header role="banner">
    <nav role="navigation">
        <div class="container">
            <div class="navbar">
                <div class="brand">
                    <a href="#">
                        <img src="{{ asset('images/logo-3x.png') }}" alt="">
                    </a>
                </div>
                <div class="nav">
                    <ul class="navbar">
                        <li><a href="#" class="nav-link">Search</a></li>
                        <li><a href="#" class="nav-link">Matches</a></li>
                        <li><a href="#" class="nav-link">Daily Matches</a></li>
                        <li><a href="#" class="nav-link">Premium</a></li>
                        <li><a href="#" class="nav-link">Upgrading</a></li>
                        <li><a href="#" class="nav-link">Help to the top</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="mini-activities">
        <div class="container">
            <div class="content">
                <p>Over 1,200,203 genuine <span></span> users since 2006</p>
                <p>
                    YESIMAMA
                    <span>just joined</span>
                </p>
                <div class="activity_views">
                    Recent Activites <span>In the last one hour</span>
                    <ul>
                        <li>1392 Messages Sent</li>
                        <li>1392 Profile Views</li>
                        <li>1392 Searches</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
