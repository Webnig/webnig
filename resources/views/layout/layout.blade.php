<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    {{--<title>Home | LostRib</title>--}}
    <title>@yield('page_title')</title>


    <link href="{{ asset('assets/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }} " rel="stylesheet">
    <link href="{{ asset('css/lr-new/entry.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}" type="image/x-icon">

    {{--  extra css files to be loaded for a specific page  --}}
    @yield('extra_page_css')

</head>

<body>

<!--Top navbar -->
<section class="global-header">
    <nav class="global-nav global-nav--primary">
        <div class="navbar"> <!--bootstrap-->
            <div class="container lr-container">
                <div class="global-nav__left navbar-header">
                    <a href="" class="global-nav__logo navbar-brand">
                        <img class="img-responsive" src="{{asset('assets/img/mainlogo.png')}}">
                    </a>
                    <!--Mobile menu toggle-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#lr-main-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="global-nav__right collapse navbar-collapse" id="lr-main-menu">
                    <ul class="global-nav__menu nav navbar-nav navbar-right">
                        <li class="global-nav__menu-item"><a href="">Matches</a></li>
                        <li class="global-nav__menu-item"><a href="">Daily Matches</a></li>
                        <li class="global-nav__menu-item"><a href="">Premium</a></li>
                        <li class="global-nav__menu-item"><a href="">Upgrade</a></li>
                        <li class="global-nav__menu-item"><a href="">Help</a></li>
                        <li class="global-nav__menu-divider"></li>
                        <li class="global-nav__menu-item global-nav__menu-item--blue"><a href="">My Account</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div>
        </div>
    </nav>
    <nav class="global-nav global-nav--secondary">
        <div class="container lr-container">
            <ul class="global-nav-info grid--flex">
                <li class="global-nav-info__item global-nav-info__item--usercount">
                    <span>Over 1,200,203 genuine users since 2006</span>
                </li>
                <li class="global-nav-info__item global-nav-info__item--newuser text-center">
                    <span class="new_user_name">
                        YESIMAMA<p style="font-size: 10px;" class="mb--0">just joined</p>
                    </span>
                </li>
                <li class="global-nav-info__item global-nav-info__item--recent">
                    <div class="grid--flex">
                        <span class="new_user_name">
                            RECENT ACTIVITIES<p style="font-size: 10px;" class="mb--0">In the last one hour</p>
                        </span>
                        <div class="global-nav-progress global-nav-progress--green">
                            <span class=""></span>
                            1392 Messages Sent
                        </div>
                        <div class="global-nav-progress global-nav-progress--pink">1392 Profile Views</div>
                        <div class="global-nav-progress global-nav-progress--gold">1392 Searches</div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</section>



{{--The Content of the page goes here --}}
@yield('content')


<div style="clear: both;" class="well-sm well-white text-center">
    <h4>&copy; Copyright {{ date('Y') }}. All Rights Reserved.</h4>
</div>
        <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>



{{-- specific scripts for the particular page --}}
@yield('extra_page_js')

</body>
</html>