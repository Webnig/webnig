@extends('layouts.app')

@section('title')
Dashboard | LostRib
@endsection

@section('extra_page_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard.css') }}">
@endsection

@section('content')
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">

                <div class="img-bg p-t-0">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 bg-white m-t-20 p-t-20 p-b-20">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="img-preview p-t-10">
                                        <img class="img-circle img-responsive"
                                             src="{{ asset('assets/img/bmm.jpg') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 p-r-0">
                                    <div class="preview-details">
                                        <p class="address c-blue p-t-8">Lekki Lagos</p>
                                        <p class="preview-name f-30 c-grey">Aisha Majekodunmi</p>
                                        <p class="f-22 c-blue">Female, 26 <span class="c-pink f-16">176cm</span></p>
                                        <p class="preview_ask">
                                        <form action=" " method="post">
                                            <input class="mind_thoughts" type="text" placeholder="What's on your mind?"
                                                   required>
                                            <input class="mind_thoughts_submit" type="submit">
                                        </form>
                                        </p>
                                        <p class="preview-ans f-22 c-grey">I am attracted to many things</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 b-l-1 p-l-0">
                                    <h6 class="users_mat_id text-right">Mat ID: 133609####</h6>
                                    <div class="p-l-10">
                                        <p class="occupation f-18 c-grey">Student</p>
                                        <p class="alumni f-18 c-grey">University Of Lagos</p>
                                        <p class="religion c-grey f-18">Christian</p>
                                        <p class="preference"><span class="profile"><a class="c-blue a_link" href="#">Edit
                                                    profile</a></span> <span class="edit-pref"><a class="c-blue a_link"
                                                                                                  href="#">Edit
                                                    preferences</a></span>
                                        </p>
                                        <p><a class="c-pink a_link" href="#">Upgrade Membership</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="activity">
            <h5 class="activity text-center c-blue">ACTIVITY STATS IN THE LAST ONE MONTH</h5>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="heading_activity row">
                        <div class="col-md-3">
                            <h1 class="text-center">7</h1>
                            <p class="text-center c-grey">Viewed your profile</p>
                        </div>
                        <div class="col-md-3">
                            <h1 class="text-center">23</h1>
                            <p class="text-center c-grey">Admire you</p>
                        </div>
                        <div class="col-md-3">
                            <h1 class="text-center">12</h1>
                            <p class="text-center c-grey">Match you preference</p>
                        </div>
                        <div class="col-md-3">
                            <h1 class="text-center">3</h1>
                            <p class="text-center c-grey">You Admire</p>
                        </div>
                    </div>
                    <div class="latest b-b-1 p-b-10">
                        <div class="row">
                            <div class="latest_activities col-md-7 col-sm-7">
                                <div class="p-t-10">
                                    <h3 class="latest_heading">Latest activity</h3>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img class="img-circle img-responsive"
                                                     src="{{ asset('assets/img/black.png') }}"
                                                     width="50%">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div>
                                                <p><a class="c-blue" href="#">Dele Asiwaju</a> (34 yrs, 174cm) accepted
                                                    to view your profile</p>
                                                <p class="c-orange"><span><a class="c-orange" href="#">Send Interest</a></span>
                                                    | <span><a class="c-orange" href="#">view profile</a></span> |
                                                    <span><a class="c-orange" href="#">upgrade to view
                                                            profile</a></span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="f-b">34 mins</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img class="img-circle" src="{{ asset('assets/img/bmm.jpg') }}"
                                                     width="50%">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div>
                                                <p><a class="c-pink" href="#">Debo Faranjeunku</a> (34 yrs, 174cm)
                                                    accepted to view your profile</p>
                                                <p class="c-orange"><span><a class="c-orange" href="#">Send Interest</a></span>
                                                    | <span><a class="c-orange" href="#">view profile</a></span> |
                                                    <span><a class="c-orange" href="#">upgrade to view
                                                            profile</a></span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="f-b">34 mins</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img class="img-circle img-responsive"
                                                     src="{{ asset('assets/img/black.png') }}"
                                                     width="50%">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div>
                                                <p><a class="c-blue" href="#">Dele Asiwaju</a> (34 yrs, 174cm) accepted
                                                    to view your profile</p>
                                                <p class="c-orange"><span><a class="c-orange" href="#">Send Interest</a></span>
                                                    | <span><a class="c-orange" href="#">view profile</a></span> |
                                                    <span><a class="c-orange" href="#">upgrade to view
                                                            profile</a></span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="f-b">34 mins</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img class="img-circle" src="{{ asset('assets/img/bmm.jpg') }}"
                                                     width="50%">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div>
                                                <p><a class="c-pink" href="#">Debo Faranjeunku</a> (34 yrs, 174cm)
                                                    accepted to view your profile</p>
                                                <p class="c-orange"><span><a class="c-orange" href="#">Send Interest</a></span>
                                                    | <span><a class="c-orange" href="#">view profile</a></span> |
                                                    <span><a class="c-orange" href="#">upgrade to view
                                                            profile</a></span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="f-b">34 mins</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img class="img-circle" src="{{ asset('assets/img/black.png') }}"
                                                     width="50%">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div>
                                                <p><a class="c-blue" href="#">Dele Asiwaju</a> (34 yrs, 174cm) accepted
                                                    to view your profile</p>
                                                <p class="c-orange"><span><a class="c-orange" href="#">Send Interest</a></span>
                                                    | <span><a class="c-orange" href="#">view profile</a></span> |
                                                    <span><a class="c-orange" href="#">upgrade to view
                                                            profile</a></span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="f-b">34 mins</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img class="img-circle" src="{{ asset('assets/img/bmm.jpg') }}"
                                                     width="50%">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div>
                                                <p><a class="c-pink" href="#">Debo Faranjeunku</a> (34 yrs, 174cm)
                                                    accepted to view your profile</p>
                                                <p class="c-orange"><span><a class="c-orange" href="#">Send Interest</a></span>
                                                    | <span><a class="c-orange" href="#">view profile</a></span> |
                                                    <span><a class="c-orange" href="#">upgrade to view
                                                            profile</a></span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="f-b">34 mins</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="view_all text-center f-17 f-b"><a href="#">View all</a></p>
                            </div>
                            <div class="matches_update col-md-5 col-sm-5 b-l-1">
                                <div>
                                    <h3 class="new_matches text-center">New Matches</h3>
                                    <p class="text-center">We found <a class="c-pink a_link" href="#">12</a> you might
                                        be interested on</p>
                                    <div class="row">
                                        <div class="ld_matches col-sm-6">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/kiss.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ld_matches col-sm-6">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/black.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="text-center p-t-10">Daily Matches</h3>
                                    <p class="text-center">We found <a class="c-pink" href="#">3</a> you might be
                                        interested on</p>
                                    <div class="row">
                                        <div class="ld_matches col-sm-6">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/kiss.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ld_matches col-sm-6">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/black.png') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-md-10 col-md-offset-1 m-t-10">
            <div class="row">
                <div class="col-md-9 col-sm-10">
                    <h3 class="trending  text-center c-grey p-b-10 p-b-10">Trending Recommendations</h3>
                    <div id="Carousel" class="carousel slide">

                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!--.row-->
                            </div><!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                            </div>
                                            <div class="content">
                                                <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                <p class=""><span class="gender">Male, </span><span
                                                            class="age">26</span></p>
                                                <p><span class="religion">Muslim </span><span>|</span> <span
                                                            class="location">Kano</span></p>
                                                <p class="intro">I am attracted to so many things</p>
                                                <p>
                                                    <button type="button" class="btn view-profile2">View Profile
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                            </div>
                                            <div class="content">
                                                <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                <p class=""><span class="gender">Male, </span><span
                                                            class="age">26</span></p>
                                                <p><span class="religion">Muslim </span><span>|</span> <span
                                                            class="location">Kano</span></p>
                                                <p class="intro">I am attracted to so many things</p>
                                                <p>
                                                    <button type="button" class="btn view-profile2">View Profile
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                            </div>
                                            <div class="content">
                                                <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                <p class=""><span class="gender">Male, </span><span
                                                            class="age">26</span></p>
                                                <p><span class="religion">Muslim </span><span>|</span> <span
                                                            class="location">Kano</span></p>
                                                <p class="intro">I am attracted to so many things</p>
                                                <p>
                                                    <button type="button" class="btn view-profile2">View Profile
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--.row-->
                            </div><!--.item-->


                        </div><!--.carousel-inner-->
                    </div><!--.Carousel-->
                    <h4 class="text-center"><b><a href="#">View All (12)</a></b></h4>

                    <h3 class="viewed text-center">Viewed Your Profile in the last One Month</h3>
                    <div id="Carousel2" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#Carousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel2" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <canvas class="header-bg" width="250" height="70"
                                                        id="header-blur"></canvas>
                                                <div class="avatar">
                                                    <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                                </div>
                                                <div class="content">
                                                    <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                    <p class=""><span class="gender">Male, </span><span
                                                                class="age">26</span></p>
                                                    <p><span class="religion">Muslim </span><span>|</span> <span
                                                                class="location">Kano</span></p>
                                                    <p class="intro">I am attracted to so many things</p>
                                                    <p>
                                                        <button type="button" class="btn view-profile2">View Profile
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!--.row-->
                            </div><!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                            </div>
                                            <div class="content">
                                                <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                <p class=""><span class="gender">Male, </span><span
                                                            class="age">26</span></p>
                                                <p><span class="religion">Muslim </span><span>|</span> <span
                                                            class="location">Kano</span></p>
                                                <p class="intro">I am attracted to so many things</p>
                                                <p>
                                                    <button type="button" class="btn view-profile2">View Profile
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                            </div>
                                            <div class="content">
                                                <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                <p class=""><span class="gender">Male, </span><span
                                                            class="age">26</span></p>
                                                <p><span class="religion">Christian</span> <span
                                                            class="location">Abuja</span></p>
                                                <p class="intro">I am nice and a little bit...</p>
                                                <p>
                                                    <button type="button" class="btn view-profile2">View Profile
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt=""/>
                                            </div>
                                            <div class="content">
                                                <p class="mat-id"><b>Mat ID: 133609####</b></p>
                                                <p class=""><span class="gender">Male, </span><span
                                                            class="age">26</span></p>
                                                <p><span class="religion">Muslim </span><span>|</span> <span
                                                            class="location">Kano</span></p>
                                                <p class="intro">I am attracted to so many things</p>
                                                <p>
                                                    <button type="button" class="btn view-profile2">View Profile
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div><!--.row-->
                            </div><!--.item-->


                        </div><!--.carousel-inner-->
                    </div><!--.Carousel-->
                    <h4 class="text-center"><b><a href="#">View All (48)</a></b></h4>
                </div>
                <div class="col-md-3 search_area">
                    <div>
                        <h3 class="">Search</h3>
                        <div class="">
                            <h3 class="p-l-20 f-b f-17">I am</h3>
                            <select name="" class="ddList">
                                <option value="">Female</option>
                                <option class="lt" value="--">Male</option>

                            </select>
                            <p class="p-l-30 p-t-10">Wishing to meet</p>
                            <select name="" class="ddList">
                                <option value="">Male</option>
                                <option class="lt" value="--">Female</option>

                            </select>
                            <div>
                                <p class="p-l-30 p-t-10 f-17 f-b">Age</p>
                                <p class="p-t-5"><select name="" class="aged">
                                        <option value="">18</option>
                                        <option class="lt" value="--">19</option>
                                        <option value="">20</option>
                                        <option class="lt" value="--">21</option>
                                        <option value="">22</option>
                                        <option class="lt" value="--">23</option>
                                        <option value="">24</option>
                                        <option class="lt" value="--">25</option>
                                    </select>
                                    To
                                    <select name="" class="aged">
                                        <option value="">40</option>
                                        <option class="lt" value="--">41</option>
                                        <option value="">45</option>
                                        <option class="lt" value="--">50</option>
                                        <option value="">55</option>
                                        <option class="lt" value="--">60</option>
                                    </select>
                                </p>
                            </div>
                            <p class="p-l-30 p-t-10 f-b f-17">Religion</p>
                            <select name="" class="ddList">
                                <option value="">Select one</option>
                                <option class="lt" value="--">Islam</option>
                                <option class="lt" value="--">Christianity</option>
                                <option class="lt" value="--">Others</option>

                            </select>
                            <p class="p-l-30 p-t-10 f-b f-17">State of Origin</p>
                            <select name="" class="ddList">
                                <option value="">Select one</option>
                                <option class="lt" value="--">Abia</option>
                                <option class="lt" value="--">Adamawa</option>
                                <option class="lt" value="--">Akwa Ibom</option>
                                <option class="lt" value="--">Anambra</option>
                                <option class="lt" value="--">Bauchi</option>
                                <option class="lt" value="--">Bayelsa</option>
                                <option class="lt" value="--">Benue</option>
                                <option class="lt" value="--">Bornu</option>
                                <option class="lt" value="--">Cross river</option>
                                <option class="lt" value="--">Delta</option>
                                <option class="lt" value="--">Edo</option>
                                <option class="lt" value="--">Ekiti</option>
                                <option class="lt" value="--">Enugu</option>
                                <option class="lt" value="--">Gombe</option>
                                <option class="lt" value="--">Imo</option>
                                <option class="lt" value="--">Plateau</option>
                            </select>
                            <div class="p-l-40 m-t-20">
                                <a class="subscribe" href="#">
                                    <button>Search</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection