<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="author" content="LostRib"/>
    <meta name="keywords" content=""/>
    <meta http-equiv="robots" content="no index, no follow"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
    {{-- <script type="text/javascript" src="{{ asset('js/script.js') }}"></script> --}}
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <link rel="alternative icon" type="icon" href="{{  asset('images/logo.png') }}">
    <title>Dashboard | LostRib</title>
    <script type="text/javascript">

    </script>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</head>
<body>
{{-- <header></header> --}}
<nav class="navbar navbar-default login_nav">
    <div class="container-fluid">
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
                {{-- <li>
                    <i class="icon fa fa-search fa-2x text-info"></i>
                </li>
                <li>
                    <i class="icon fa fa-bell fa-2x text-info"></i>
                </li> --}}
                <li>
                    <h3 class="cyan_text">My Account</h3>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="darkrose">
    Over 1,200,203 genuine users since 2006
</div>
<div id="desktkop-content">
    <div class="dash-head">
        <div class="container">
            <div class="dash-head-child">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                            <div class="dash-pp">
                                <img src="{{ asset('images/profile-pic-3x.png') }}" class="img img-circle"
                                     height="200px" width="200px" alt="Profile Picture" title="Your Profile Picture"/>
                            </div>
                        </div>
                        <div class="col-xs-hidden col-sm-hidden col-md-5 col-lg-5 col-xl-5">
                            <div class="dash-head-child-1">
                                <h3>{{ $user->city .", ". $user->state }}</h3>
                                <span class="name">{{ $user->first_name." ". $user->last_name }}</span>
                                <div>
                                    <span class="gender">{{ $user->gender .", ". $user->age }}</span>
                                    <span class="height">{{ $user->height }}cm</span>
                                </div>
                                <span><hr style="color:#d8d8d8"></span>
                                <span class="mind">What's on your mind</span><br><br>
                                <span class="mind-child">I am attracted to so many things</span>
                            </div>
                        </div>
                        <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                            <div class="dash-head-child-2">
                                <p class="pull-right"
                                   style="color:#868686;font-size:15px;font-weight:bolder;margin-right:-90px">Mat
                                    ID: {{ $user->mat_id }}</p><br>
                                <span style="color:#868686;font-weight:lighter;font-size:28px">{{ $user->occupation }}</span><br>
                                <span style="color:#868686;font-weight:lighter;font-size:28px">University of Lagos</span><br>
                                <span style="color:#868686;font-weight:lighter;font-size:28px">{{ $user->religion }}</span><br><br>
                                <span><a href="{{ route('edit_profile_1') }}" class="pull-left" style="font-size:12px;color:#38c7da">Edit Profile</a><a
                                            href="#" style="font-size:12px;color:#38c7da;" class="pull-right">Edit
                                        Preferences</a></span><br>
                                <span><a href="{{ route('upgrade') }}" style="font-size:12px;color:#cdad76">Upgrade Membership</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="stats" style="padding-top:10px;padding-bottom:10px">
        <center><span style="color:#38c7da;font-weight: bold;font-size: 12px;text-transform: uppercase;">activity stats in the last one month</span>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                    <div class="container">
                        <center>
                            <span class="number"> {{ $profile_views }} </span> <br>
                            <span class="number-detail">viewed your profile</span><br>
                        </center>
                    </div>
                </div>
                <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                    <div class="stats-number">
                        <div class="container">
                            <center>
                                <span class="number"> {{ $admiredBy }} </span> <br>
                                <span class="number-detail">admire you</span><br>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                    <div class="stats-number">
                        <div class="container">
                            <center>
                                <span class="number"> {{ $matches }} </span> <br>
                                <span class="number-detail">match your preference</span><br>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                    <div class="stats-number">
                        <div class="container">
                            <center>
                                <span class="number"> {{ $admired }} </span> <br>
                                <span class="number-detail">you admire</span><br>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-hidden col-sm-hidden col-md-8 col-lg-8 col-xl-8"
                     style="border-right:solid 1px #ccd1d9">
                    <div class="latest-activity">
                        <h3>Latest Activities</h3><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-hidden col-xs-hidden col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{ asset('images/bitmap@3x.jpg') }}" class="img img-circle" alt=""
                                         title="" height="50px" width="50px"/>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-7 col-lg-7 col-xl-7">
                                    <p><a href="" style="color:#52c9d8;font-size:15px ;">Dele Asiwaju,</a> <span
                                                style="color:#848484;font-size: 15px">(34 yrs, 178cm) accepted to view your <br>profile</span>
                                        <span><a href="" style="color:#ec9f00;font-size:13px;"> Send interest |</a><a
                                                    href="" style="color:#ec9f00;font-size:13px;"> View Profile |</a> <a
                                                    href="" style="color:#ec9f00;font-size:13px;">Upgrade to view
                                                profile</a></span></p>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-3 col-lg-3 col-xl-3"
                                     style="font-size:15px;color:#848c8d;font-weight:bolder">
                                    35 mins
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-hidden col-xs-hidden col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{ asset('images/bitmap@3x.jpg') }}" class="img img-circle" alt=""
                                         title="" height="50px" width="50px"/>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-7 col-lg-7 col-xl-7">
                                    <p><a href="" style="color:#f26aa8;font-size:15px ;">Debo Faranjeunku,</a> <span
                                                style="color:#848484;font-size: 15px">(34 yrs, 178cm) accepted to view your <br>profile</span>
                                        <span><a href="" style="color:#ec9f00;font-size:13px;"> Send interest |</a><a
                                                    href="" style="color:#ec9f00;font-size:13px;"> View Profile |</a> <a
                                                    href="" style="color:#ec9f00;font-size:13px;">Upgrade to view
                                                profile</a></span></p>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-3 col-lg-3 col-xl-3"
                                     style="font-size:15px;color:#848c8d;font-weight:bolder">
                                    36 mins
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-hidden col-xs-hidden col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{ asset('images/bitmap@3x.jpg') }}" class="img img-circle" alt=""
                                         title="" height="50px" width="50px"/>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-7 col-lg-7 col-xl-7">
                                    <p><a href="" style="color:#52c9d8;font-size:15px ;">Dele Asiwaju,</a> <span
                                                style="color:#848484;font-size: 15px">(34 yrs, 178cm) accepted to view your <br>profile</span>
                                        <span><a href="" style="color:#ec9f00;font-size:13px;"> Send interest |</a><a
                                                    href="" style="color:#ec9f00;font-size:13px;"> View Profile |</a> <a
                                                    href="" style="color:#ec9f00;font-size:13px;">Upgrade to view
                                                profile</a></span></p>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-3 col-lg-3 col-xl-3"
                                     style="font-size:15px;color:#848c8d;font-weight:bolder">
                                    35 mins
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-hidden col-xs-hidden col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{ asset('images/bitmap@3x.jpg') }}" class="img img-circle" alt=""
                                         title="" height="50px" width="50px"/>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-7 col-lg-7 col-xl-7">
                                    <p><a href="" style="color:#f26aa8;font-size:15px ;">Debo Faranjeunku,</a> <span
                                                style="color:#848484;font-size: 15px">(34 yrs, 178cm) accepted to view your <br>profile</span>
                                        <span><a href="" style="color:#ec9f00;font-size:13px;"> Send interest |</a><a
                                                    href="" style="color:#ec9f00;font-size:13px;"> View Profile |</a> <a
                                                    href="" style="color:#ec9f00;font-size:13px;">Upgrade to view
                                                profile</a></span></p>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-3 col-lg-3 col-xl-3"
                                     style="font-size:15px;color:#848c8d;font-weight:bolder">
                                    36 mins
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-hidden col-xs-hidden col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{ asset('images/bitmap@3x.jpg') }}" class="img img-circle" alt=""
                                         title="" height="50px" width="50px"/>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-7 col-lg-7 col-xl-7">
                                    <p><a href="" style="color:#52c9d8;font-size:15px ;">Dele Asiwaju,</a> <span
                                                style="color:#848484;font-size: 15px">(34 yrs, 178cm) accepted to view your <br>profile</span>
                                        <span><a href="" style="color:#ec9f00;font-size:13px;"> Send interest |</a><a
                                                    href="" style="color:#ec9f00;font-size:13px;"> View Profile |</a> <a
                                                    href="" style="color:#ec9f00;font-size:13px;">Upgrade to view
                                                profile</a></span></p>
                                </div>
                                <div class="col-sm-hidden col-xs-hidden col-md-3 col-lg-3 col-xl-3"
                                     style="font-size:15px;color:#848c8d;font-weight:bolder">
                                    35 mins
                                </div>

                            </div>
                        </div>
                        <br><br>
                        <center><a href="" style="color:#848c8d;font-size:22px ;font-weight: bolder">View All</a>
                        </center>
                        <br><br>
                    </div>
                </div>
                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                    <h3 style="color:#848484;font-weight:lighter;text-align: center">New Matches</h3>
                    <center><p style="font-size:13px;color:#848484">We found <a href="" style="color:#f26aa8">12</a> new
                            matches you might be interested in</p></center>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-hidden col-sm-hidden col-md-6 col-lg-6 col-xl-6">
                                <div class="view-profile" style="width:100%">
                                    <center>
                                        <img src="{{ asset('assets/img/blurred.jpg') }}" class="img img-circle"
                                             alt="Male" title=""
                                             style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:9px;">Mat ID: 13609####</b><br>
                                        <span style="font-size:19px;color:#00b7cf">Male, 28</span><br>
                                        <span style="font-size:8px;">Christian | Abuja</span><br>
                                        <span style="font-size:8px;">I am attracted to so many things</span><br>
                                        <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                                style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </div>
                                    </center>
                                </div>
                                <br>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-hidden col-sm-hidden col-md-6 col-lg-6 col-xl-6">
                                <div class="view-profile" style="width:100%">
                                    <center>
                                        <img src="{{ asset('assets/img/blurred.jpg') }}" class="img img-circle"
                                             alt="Male" title=""
                                             style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:9px;">Mat ID: 13609####</b><br>
                                        <span style="font-size:19px; color:#00b7cf">Male, 28</span><br>
                                        <span style="font-size:8px;">Christian | Abuja</span><br>
                                        <span style="font-size:8px;">I am attracted to so many things</span><br>
                                        <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                                style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h3 style="color:#848484;font-weight:lighter;text-align: center">Daily Matches</h3>
                        <center>
                            <p style="font-size:13px;color:#848484">We found <a href="" style="color:#f26aa8">3</a> you
                                might be interested in</p>
                        </center>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-hidden col-sm-hidden col-md-6 col-lg-6 col-xl-6">
                                    <div class="view-profile" style="width:100%">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" class="img img-circle"
                                                 alt="Male" title=""
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:9px;">Mat ID: 13609####</b><br>
                                            <span style="font-size:19px;color:#00b7cf">Male, 28</span><br>
                                            <span style="font-size:8px;">Christian | Abuja</span><br>
                                            <span style="font-size:8px;">I am attracted to so many things</span><br>
                                            <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                                    style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                            </div>
                                        </center>
                                    </div>
                                    <br>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-hidden col-sm-hidden col-md-6 col-lg-6 col-xl-6">
                                    <div class="view-profile" style="width:100%">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" class="img img-circle"
                                                 alt="Male" title=""
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:9px;">Mat ID: 13609####</b><br>
                                            <span style="font-size:19px;color:#00b7cf">Male, 28</span><br>
                                            <span style="font-size:8px;">Christian | Abuja</span><br>
                                            <span style="font-size:8px;">I am attracted to so many things</span><br>
                                            <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                                    style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row" style="border-top: 1px solid #848484">
                <div class="col-xs-hidden col-sm-hidden col-md-9 col-lg-9 col-xl-9 top_margin">
                    <h3 style="color:#848484;font-weight:lighter;text-align: center">Trending recommendations</h3>
                    <div class="row">
                        @foreach($randomUsers as $randomUser)
                            <div class="col-md-4 col-lg-4 col-xl-4">
                                <div class="view-profile" style="width:100%">
                                    <center>
                                        <img src="{{ asset('assets/img/blurred.jpg') }}" class="img img-circle"
                                             alt="Male" title=""
                                             style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:15px;">{{ $randomUser->mat_id }}</b><br>
                                        <span style="font-size:19px;color:#00b7cf">{{ $randomUser->gender. ", ". $randomUser->age }}</span><br>
                                        <span style="font-size:14px;">{{ $randomUser->religion. " | ". $randomUser->state }}</span><br>
                                        <span style="font-size:14px;">I am attracted to so many things</span><br>
                                        <div>
                                            <a href="{{ route('view_user_profile', ['user' => $randomUser->id]) }}"><input
                                                        type="submit" class="button" value="View Profile"
                                                        style="border-radius: 12px;
                                                                background-color: #00b7cf;border-color:#f26aa8;
                                                                cursor:pointer;
                                                                border:solid #00b7cf;color:white"/>
                                            </a>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <center><a href="" style="color:#848c8d;font-size:22px ;font-weight: bolder">View All (12)</a>
                    </center>
                    <br><br>
                    <div>
                        <h3 style="color:#848484;font-weight:lighter;text-align: center">Viewed your profile in the last
                            month</h3>
                        <div class="row">
                            @if(!empty($profile_viewed_by))
                                @for($i = 0; $i < count($profile_viewed_by); $i++)
                                    <div class="col-md-4 col-lg-4 col-xl-4">
                                        <div class="view-profile" style="width:100%">
                                            <center>
                                                <img src="{{ asset('assets/img/blurred.jpg') }}" class="img img-circle"
                                                     alt="Male" title=""
                                                     style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                                <b style="font-size:9px;">Mat
                                                    ID: {{ $profile_viewed_by[$i]->mat_id }}</b><br>
                                                <span style="font-size:19px;color:#00b7cf">{{ $profile_viewed_by[$i]->gender. ',' . $profile_viewed_by[$i]->age }}</span><br>
                                                <span style="font-size:8px;">Christian | Abuja</span><br>
                                                <span style="font-size:8px;">I am attracted to so many things</span><br>
                                                <div><a href="#"><input type="submit" class="button"
                                                                        value="View Profile"
                                                                        style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </div>
                    <div>
                        <center><a href="" style="color:#848c8d;font-size:22px ;font-weight: bolder">View All (43)</a>
                        </center>
                        <br><br>
                    </div>
                </div>
                <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3 top_margin">
                    <form role="form" method="post" action="#">
                        <h3 style="font-size: 40px;text-align:left;color: #848484;font-weight:lighter;">
                            Search</h3><br>
                        <p style="font-size: 15px;text-align: left;color: #848c8d;font-weight:bold;">I am
                            a</p>
                        <select class="form-control selectpicker show-menu-arrow" name="gender" data-live-search="true">
                            <option value="">Choose...</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                        <br>
                        <center style="font-size:12px;color:#848484">wishing to meet a</center>
                        <br>
                        <select class=" form-control selectpicker show-menu-arrow" title=""
                                data-live-search="true">
                            <option value="">Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <br>
                        <p style="font-size: 15px;text-align: left;color: #848c8d;font-weight:bold;">
                            Age</p>
                        <div class="container">
                            <div class="row">
                                <select class="form-control" name="">
                                    <option value="">Choose...</option>
                                    @for ($num = 18; $num <= 40; $num++)
                                        <option value="{{ $num }}">{{ $num }}</option>
                                    @endfor
                                </select>
                                <p style="padding:10px;padding-top:10px;padding-left:25px;padding-right:25px"> to </p>
                                <select class="form-control" name="">
                                    <option value="">Choose...</option>
                                    @for ($num = 18; $num <= 40; $num++)
                                        <option value="{{ $num }}">{{ $num }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <p style="font-size: 15px;text-align: left;color: #848c8d;font-weight:bold;">
                            Religion</p>
                        <select class=" form-control">
                            <option value="">Choose One</option>
                            <option value="Christianity">Christianity</option>
                            <option value="Islam">Islam</option>
                        </select>
                        <br>
                        <p style="font-size: 15px;text-align: left;color: #848c8d;font-weight:bold;">State
                            of Origin</p>
                        <select class=" form-control" name="state_of_origin">
                            <option value="">Choose One...</option>
                            <option value="Abia">Abia</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Osun">Osun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Delta">Delta</option>
                        </select>
                        <br><br>
                        <div>
                            <center>
                                <a href="#">
                                    <button type="button" class="search">Search</button>
                                </a>
                            </center>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>