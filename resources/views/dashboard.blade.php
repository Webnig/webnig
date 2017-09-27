<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="refresh" content=""/>
    <meta name="author" content=""/>
    <meta name="keywords" content=""/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
    <script type="text/javascript" src="js/script.js"></script>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="alternative icon" type="icon" href="{{  asset('images/logo.png') }}">
    <title>Dashboard | LostRib</title>

    <style>
        @media only screen and (max-width: 991px) {
            #desktop-content {
                display: none;
            }

            #mobile-content {
                display: inline;
            }

            .accepted-requests {
                background-color: #f4b2b2;
            }

            .img {
                transform: rotate(-4deg);
            }
        }

        @media only screen and (min-width: 992px) {
            #desktop-content {
                display: inline;
            }

            #mobile-content {
                display: none;
            }
        }

        @media only screen and (max-width: 768px) {
            #mobile-content {
                display: block;
            }

            #desktop-content {
                display: none;
            }
        }

        .dash-head {
            background-image: url({{ asset('assets/img/family.png') }});
            width: 100%;
            height: auto;
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 50px;
            padding-right: 10px;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .dash-head-child {
            background-color: #ffffff;
            height: auto;
            width: 100%;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
        }

        .dash-head-child-1 {
            border-right: solid 1px #d8d8d8;
        }

        .dash-head-child-1 > h3 {
            font-size: 15px;
            color: #358a96;
            font-weight: bold;
        }

        .dash-head-child-1 > .name {
            font-size: 28px;
            color: #848484;
            font-weight: lighter;
        }

        .dash-head-child-1 > div > .gender {
            font-size: 20px;
            color: #52c9d8;
            font-weight: lighter;
        }

        .dash-head-child-1 > div > .height {
            font-size: 12px;
            color: #d19595;
            font-weight: bold;
            padding-left: 10px;
        }

        .dash-head-child-1 > .mind {
            font-size: 15px;
            color: #d8d8d8;
            opacity: 1;
            font-weight: bold;
        }

        .dash-head-child-1 > .mind-child {
            font-size: 17px;
            color: #d8d8d8;
            opacity: 0.9;
            font-weight: lighter;
        }

        .number {
            color: #848484;
            font-size: 50px;
            text-align: center;
            font-weight: lighter;
        }

        .number-detail {
            font-size: 12px;
            color: #848484;
            text-align: center;
        }

        .latest-activity {
            padding-top: 10px;
            padding-bottom: 10px;
            width: 100%;
            height: auto;
        }

        .latest-activity > h3 {
            font-size: 18px;
            color: #848484;
            font-weight: lighter;
        }

        .view-profile {
            height: auto;
            background-color: #f5f5f5;
            width: 70%;
            margin-bottom: 20px;
            border-radius: 5%;
            padding-bottom: 20px;
        }

        .view-profile img {
            border-radius: 50%;
        }

        .editable-box {
            background: transparent;
            text-decoration: none;
            padding-left: 10px;
            padding-right: 3px;
            border: solid 1px #ccd1d9;
        }

        .editable-box:focus {
            background: transparent;
            text-decoration: none;
            padding-left: 10px;
            padding-right: 3px;
            border: solid 1px #ccd1d9;
        }

        .editable-box-1 {
            background: transparent;
            text-decoration: none;
            padding-left: 10px;
            padding-right: 3px;
            width: 37%;
            border: solid 1px #ccd1d9;
        }

        .editable-box-1:focus {
            background: transparent;
            text-decoration: none;
            padding-left: 10px;
            padding-right: 3px;
            width: 37%;
            border: solid 1px #ccd1d9;
        }

        .search {
            color: white;
            font-size: 25px;
            font-weight: lighter;
            letter-spacing: 2px;
            background-color: #f26aa8;
            border-radius: 20px;
            border-color: #f26aa8;
            padding-top: 7px;
            border: solid 0.5px;
            padding-bottom: 7px;
            padding-right: 40px;
            padding-left: 40px;
            transition: 0.3s all;
        }

        .search:hover {
            /*color:#f26aa8;*/
            font-size: 25px;
            font-weight: lighter;
            letter-spacing: 4px;
            /*background-color:white;*/
            /*border-radius:10%;*/
            border:1px solid white;
            padding-top: 7px;
            padding-bottom: 7px;
            text-decoration: none;
            color: #fff;
            /*padding-right:30px;*/
            /*padding-left:50px;*/
            /*transition:0.3s all;*/
        }

        .img {
            border-radius: 50%;
            border: solid 4px #ffffff;
        }

        .btn-pink {
            background-color: white;
            color: #f26aa8;
            font-size: 30px;
            border: solid 3px #f26aa8;
            border-radius: 5%;
            padding-top: 10px;
            padding-bottom: 10px;
            height: auto;
            width: 10%;
            transition: 0.5s all;
        }

        .btn-pink:hover {
            background-color: #f26aa8;
            color: #ffffff;
            border: solid 3px #ffffff;
            border-radius: 5%;
            font-size: 30px;
            padding-top: 15px;
            padding-bottom: 15px;
            height: auto;
            width: 10%;
            transition: 0.5s all;
        }

        .question {
            background-color: #01afc7;
            color: white;
            height: auto;
            width: 100%;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 10px;
            padding-bottom: 20px;
            border-top: solid 2px #686868;
            border-bottom: solid 2px #686868;
        }

        .question .btn-footer-1 {
            background-color: transparent;
            color: white;
            font-size: 30px;
            border: 2px solid white;
            border-radius: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 49%;
            transition: 0.5s all;
        }

        .question .btn-footer-1:hover {
            color: #00b7cf;
            font-size: 30px;
            border: 2px dashed #00b7cf;
            background-color: #ffffff;
            border-radius: 18px;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 50%;
            transition: 0.5s all;
        }

        .question .footer_button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            font-size: 20px;
            border-radius: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 45%;
            margin-right: 10px;
            transition: 0.5s all;
        }

        .question .footer_button:hover {
            color: #00b7cf;
            border: 2px dashed #00b7cf;
            background-color: #ffffff;
        }

        .question .btn-footer-1:active {
            color: #00b7cf;
            font-size: 30px;
            border: 2px solid #00b7cf;
            background-color: #ffffff;
            opacity: 0.2;
            border-radius: 18px;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 50%;
            transition: 0.5s all;
        }
    </style>
</head>
<body>
<header></header>
<div id="desktop-content">
    <div class="dash-head">
        <div class="container">
            <div class="dash-head-child">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                            <div class="dash-pp">
                                <img src="{{ asset('assets/img/profile_pic.jpg') }}" class="img img-circle"
                                     height="100%" width="100%" alt="Profile Picture" title="Your Profile Picture"/>
                            </div>
                        </div>
                        <div class="col-xs-hidden col-sm-hidden col-md-5 col-lg-5 col-xl-5">
                            <div class="dash-head-child-1">
                                <h3>Lekki, Lagos</h3>
                                <span class="name">Aisha Majekodunmi</span>
                                <div><span class="gender">Female, 26</span><span class="height">176cm</span></div>
                                <span><hr style="color:#d8d8d8"></span>
                                <span class="mind">What's on your mind</span><br><br>
                                <span class="mind-child">I am attracted to so many things</span>
                            </div>
                        </div>
                        <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                            <div class="dash-head-child-2">
                                <p class="pull-right"
                                   style="color:#868686;font-size:10px;font-weight:bolder;margin-right:-38%">Mat ID:
                                    13609####</p><br>
                                <span style="color:#868686;font-weight:lighter;font-size:28px">Student</span><br>
                                <span style="color:#868686;font-weight:lighter;font-size:28px">University of Lagos</span><br>
                                <span style="color:#868686;font-weight:lighter;font-size:28px">Christian</span><br><br>
                                        <span>
                                            <a href="" class="pull-left" style="font-size:15px;color:#38c7da">Edit
                                                Profile</a>
                                            <a href="" style="font-size:15px;color:#38c7da;" class="pull-right">Edit
                                                Preferences</a>
                                        </span>
                                <br>
                                <span><a href="" style="font-size:15px;color:#cdad76">Upgrade Membership</a></span>
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
                            <span class="number"> 7 </span> <br>
                            <span class="number-detail">viewed your profile</span><br>
                        </center>
                    </div>
                </div>
                <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                    <div class="stats-number">
                        <div class="container">
                            <center>
                                <span class="number"> 23 </span> <br>
                                <span class="number-detail">admire you</span><br>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                    <div class="stats-number">
                        <div class="container">
                            <center>
                                <span class="number"> 12 </span> <br>
                                <span class="number-detail">match your preference</span><br>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                    <div class="stats-number">
                        <div class="container">
                            <center>
                                <span class="number"> 3 </span> <br>
                                <span class="number-detail">you admire</span><br>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-hidden col-sm-hidden col-md-8 col-lg-8 col-xl-8" style="border-right:solid 1px #ccd1d9">
                <div class="latest-activity">
                    <h3>Latest Activities</h3><br>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-hidden col-xs-hidden col-md-2 col-lg-2 col-xl-2">
                                <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                     height="50px" width="50px"/>
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
                                <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                     height="50px" width="50px"/>
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
                                <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                     height="50px" width="50px"/>
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
                                <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                     height="50px" width="50px"/>
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
                                <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                     height="50px" width="50px"/>
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
                    <center><a href="" style="color:#848c8d;font-size:22px ;font-weight: bolder">View All</a></center>
                    <br><br>
                    <h3 style="color:#848484;font-weight:lighter;text-align: center">Trending recommendations</h3>
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
                                    <img src="{{ asset('assets/img/blurred.jpg') }}" class="img img-circle" alt="Male"
                                         title=""
                                         style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                    <b style="font-size:9px;color:">Mat ID: 13609####</b><br>
                                    <span style="font-size:19px;font-family:;color:#00b7cf">Male, 28</span><br>
                                    <span style="font-size:8px;color:;">Christian | Abuja</span><br>
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
                                    <img src="{{ asset('assets/img/blurred.jpg') }}" class="img img-circle" alt="Male"
                                         title=""
                                         style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                    <b style="font-size:9px;color:">Mat ID: 13609####</b><br>
                                    <span style="font-size:19px;font-family:;color:#00b7cf">Male, 28</span><br>
                                    <span style="font-size:8px;color:;">Christian | Abuja</span><br>
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
                    <center><p style="font-size:13px;color:#848484">We found <a href="" style="color:#f26aa8">3</a> you
                            might be interested in</p></center>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-hidden col-sm-hidden col-md-6 col-lg-6 col-xl-6">
                                <div class="view-profile" style="width:100%">
                                    <center>
                                        <img src="{{ asset('assets/img/blurred.jpg') }}" class="img img-circle"
                                             alt="Male" title=""
                                             style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:9px;color:">Mat ID: 13609####</b><br>
                                        <span style="font-size:19px;font-family:;color:#00b7cf">Male, 28</span><br>
                                        <span style="font-size:8px;color:;">Christian | Abuja</span><br>
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
                                        <b style="font-size:9px;color:">Mat ID: 13609####</b><br>
                                        <span style="font-size:19px;font-family:;color:#00b7cf">Male, 28</span><br>
                                        <span style="font-size:8px;color:;">Christian | Abuja</span><br>
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
    <div class="container">
        <div class="row">
            <div class="col-xs-hidden col-sm-hidden col-md-9 col-lg-9 col-xl-9">
                <div>
                    <center><a href="" style="color:#848c8d;font-size:20px ;font-weight: bolder">View All (12)</a>
                    </center>
                    <br><br>
                    <h3 style="color:#848484;font-weight:lighter;text-align: center">Viewed your profile in the last
                        month</h3>
                </div>
                <div>
                    <center><a href="" style="color:#848c8d;font-size:22px ;font-weight: bolder">View All(43)</a>
                    </center>
                    <br><br>
                </div>
            </div>
            <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3 col-xl-3">
                <form role="form">
                    <h3 style="font-family:;font-size: 40px;text-align:left;color: #848484;font-weight:lighter;">
                        Search</h3><br>
                    <p style="font-family:;font-size: 15px;text-align: left;color: #848c8d;font-weight:bold;">I am a</p>
                    <select class="form-control selectpicker show-menu-arrow" name="" title="" value=""
                            data-live-search="true">
                        <option value="">Select one...</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                    <br>
                    <center style="font-size:12px;color:#848484">wishing to meet a</center>
                    <br>
                    <select class=" form-control selectpicker show-menu-arrow" title="" value=""
                            data-live-search="true">
                        <option value="">Select one...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <br>
                    <p style="font-family:;font-size: 15px;text-align: left;color: #848c8d;font-weight:bold;">Age</p>
                    <div class="container">
                        <div class="row">
                            <select class="editable-box-1 form-control selectpicker show-menu-arrow" name="fromAge"
                                    data-live-search="true">
                                <option value="">Select age</option>
                                @for ($age = 18; $age <= 40; $age++)
                                    <option value="{{ $age }}">{{ $age }}</option>
                                @endfor
                            </select>
                            <p style="padding-top:7px;padding-left:25px;padding-right:25px"> to </p>
                            <select class="editable-box-1 form-control selectpicker show-tick show-menu-arrow"
                                    name="toAge" data-live-search="true">
                                <option value="">Select age</option>
                                @for ($age = 18; $age <= 40; $age++)
                                    <option value="{{ $age }}">{{ $age }}</option>
                                @endfor
                            </select>

                        </div>
                    </div>
                    <p style="font-family:;font-size: 15px;text-align: left;color: #848c8d;font-weight:bold;">
                        Religion</p>
                    <select class=" form-control selectpicker show-menu-arrow" name="religion" data-live-search="true">
                        <option value="">Select one</option>
                        <option value="Christianity">Christianity</option>
                        <option value="Islam">Islam</option>
                        <option value="Buddism">Buddism</option>
                    </select>
                    <br>
                    <p style="font-family:;font-size: 15px;text-align: left;color: #848c8d;font-weight:bold;">State of
                        Origin</p>
                    <select class=" form-control selectpicker show-menu-arrow" name="stateOfOrigin"
                            data-live-search="true">
                        <option value="">Select One</option>
                        <option value="Osun">Osun</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Abia">Abia</option>
                        <option value="Ondo">Ondo</option>
                    </select>
                    <br><br>
                    <div>
                        <center>
                            <a href="#" class="search">
                                Search
                            </a>
                        </center>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="mobile-content">
    <div class="dash-head" style="padding-bottom:0px;height:200px;padding-right:50px">
        <center><img src="{{ asset('assets/img/profile_pic.jpg') }}" class="img img-circle" width="150px" height="150px"
                     style="margin-top:70px"/></center>
    </div>
    <br><br><br>
    <center style="padding-left:30px;padding-right:30px">
        <br>
        <h3 style="font-size:15px;color:#358a96;font-weight:bold; ">Lekki, Lagos</h3>
        <span class="name" style="font-size:32px;color:#848484;font-weight:lighter;">Aisha Makanjuola</span>
        <div><span class="gender" style="font-size:24px;color:#52c9d8;font-weight:lighter;">Female, 26</span><span
                    class="height" style="font-size:15px;color:#d19595;font-weight:bold;padding-left:10px;">176cm</span>
        </div>
        <span style="color:#868686;font-weight:lighter;font-size:16px">Student | University of Lagos | Christian</span><br><br>
        <span style="font-size:18px;color:#d8d8d8;opacity:1;font-weight:bolder;">What's on your mind</span><br><br>
        <span class="mind-child" style="font-size:18px;color:#d8d8d8;opacity:0,9;font-weight:lighter;">I am attracted to so many things</span><br><br>
                <span style="margin-top: 3px">
                    <a href="" class="pull-left" style="font-size:10px;color:#38c7da">Edit Profile</a>
                    <a href="" style="font-size:10px;color:#38c7da;" class="pull-right">Edit Preferences</a>
                </span>
        <span style="margin-bottom: 6px"><a href="" style="font-size:10px;color:#cdad76">Upgrade Membership</a></span>
    </center>
    <div class="stats" style="padding-top:10px;padding-bottom:10px">
        <center><span style="color:#38c7da;font-weight: bold;font-size: 20px;text-transform: uppercase;">activity stats in the last one month</span>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="container">
                        <center>
                            <span class="number"> 7 </span> <br>
                            <span class="number-detail">viewed your profile</span><br>
                        </center>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="stats-number">
                        <div class="container">
                            <center>
                                <span class="number"> 23 </span> <br>
                                <span class="number-detail">admire you</span><br>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="stats-number">
                        <div class="container">
                            <center>
                                <span class="number"> 12 </span> <br>
                                <span class="number-detail">match your preference</span><br>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="stats-number">
                        <div class="container">
                            <center>
                                <span class="number"> 3 </span> <br>
                                <span class="number-detail">you admire</span><br>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="latest-activity text-center">
                    <h3>Latest Activity</h3>
                    <br>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 col-xl-2">
                            <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                 height="50px" width="50px"/>
                        </div>
                        <div class="col-sm-7 col-xs-7 col-md-7 col-lg-7 col-xl-7">
                            <p>
                                <a href="" style="color:#52c9d8;font-size:15px;">Dele Asiwaju,</a>
                                <span style="color:#848484;font-size: 15px">(34 yrs, 178cm)</span>
                                <br>
                                <span style="color:#848484;font-size: 15px">accepted to view your profile</span>
                                <br>
                            <div style="color: #ec9f00">
                                        <span>
                                            <a href="" style="color:#ec9f00;font-size:13px;"> Send interest </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;"> View Profile </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;">Upgrade to view profile</a>
                                        </span>
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 col-xl-3"
                             style="font-size:15px;color:#848c8d;font-weight:bolder">
                            35 mins
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 col-xl-2">
                            <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                 height="50px" width="50px"/>
                        </div>
                        <div class="col-sm-7 col-xs-7 col-md-7 col-lg-7 col-xl-7">
                            <p>
                                <a href="" style="color:#52c9d8;font-size:15px;">Dele Asiwaju,</a>
                                <span style="color:#848484;font-size: 15px">(34 yrs, 178cm)</span>
                                <br>
                                <span style="color:#848484;font-size: 15px">accepted to view your profile</span>
                                <br>
                            <div style="color: #ec9f00">
                                        <span>
                                            <a href="" style="color:#ec9f00;font-size:13px;"> Send interest </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;"> View Profile </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;">Upgrade to view profile</a>
                                        </span>
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 col-xl-3"
                             style="font-size:15px;color:#848c8d;font-weight:bolder">
                            35 mins
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 col-xl-2">
                            <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                 height="50px" width="50px"/>
                        </div>
                        <div class="col-sm-7 col-xs-7 col-md-7 col-lg-7 col-xl-7">
                            <p>
                                <a href="" style="color:#52c9d8;font-size:15px;">Dele Asiwaju,</a>
                                <span style="color:#848484;font-size: 15px">(34 yrs, 178cm)</span>
                                <br>
                                <span style="color:#848484;font-size: 15px">accepted to view your profile</span>
                                <br>
                            <div style="color: #ec9f00">
                                        <span>
                                            <a href="" style="color:#ec9f00;font-size:13px;"> Send interest </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;"> View Profile </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;">Upgrade to view profile</a>
                                        </span>
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 col-xl-3"
                             style="font-size:15px;color:#848c8d;font-weight:bolder">
                            35 mins
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 col-xl-2">
                            <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                 height="50px" width="50px"/>
                        </div>
                        <div class="col-sm-7 col-xs-7 col-md-7 col-lg-7 col-xl-7">
                            <p>
                                <a href="" style="color:#52c9d8;font-size:15px;">Dele Asiwaju,</a>
                                <span style="color:#848484;font-size: 15px">(34 yrs, 178cm)</span>
                                <br>
                                <span style="color:#848484;font-size: 15px">accepted to view your profile</span>
                                <br>
                            <div style="color: #ec9f00">
                                        <span>
                                            <a href="" style="color:#ec9f00;font-size:13px;"> Send interest </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;"> View Profile </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;">Upgrade to view profile</a>
                                        </span>
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 col-xl-3"
                             style="font-size:15px;color:#848c8d;font-weight:bolder">
                            35 mins
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 col-xl-2">
                            <img src="{{ asset('images/bitmap@2x.png') }}" class="img img-circle" alt="" title=""
                                 height="50px" width="50px"/>
                        </div>
                        <div class="col-sm-7 col-xs-7 col-md-7 col-lg-7 col-xl-7">
                            <p>
                                <a href="" style="color:#52c9d8;font-size:15px;">Dele Asiwaju,</a>
                                <span style="color:#848484;font-size: 15px">(34 yrs, 178cm)</span>
                                <br>
                                <span style="color:#848484;font-size: 15px">accepted to view your profile</span>
                                <br>
                            <div style="color: #ec9f00">
                                        <span>
                                            <a href="" style="color:#ec9f00;font-size:13px;"> Send interest </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;"> View Profile </a> |
                                            <a href="" style="color:#ec9f00;font-size:13px;">Upgrade to view profile</a>
                                        </span>
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 col-xl-3"
                             style="font-size:15px;color:#848c8d;font-weight:bolder">
                            35 mins
                        </div>

                    </div>
                </div>
                <br>

            </div>
        </div>
        <br><br>
        <div class="container">
            <center><h3 style="color:#848484;font-weight:bold;font-size:30px;">Trending Recommendations</h3></center>
            <br><br>
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <div class="view-profile">
                            <center>
                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                     style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                <b style="font-size:9px;color:">Mat ID: 13609####</b>
                                <p style="font-size:25px;font-family:;color:#00b7cf">Male, 28</p>
                                <p style="font-size:9px;color:;">181cm | Christian | Abuja</p>
                                {{--
                                <p style="font-size:8px;">I am a nice and easygoing lady</p>
                                <p style="color:#d1a55d;font-weight:lighter;font-size:10px">Teacher | Unversity of Lagos</p>
                                <div>
                                    <a href="#"><input type="submit" class="submit" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                </div>
                                --}}
                            </center>
                        </div>
                    </center>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <div class="view-profile">
                            <center>
                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                     style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                <b style="font-size:9px;color:">Mat ID: 13609####</b>
                                <p style="font-size:25px;font-family:;color:#00b7cf">Male, 28</p>
                                <p style="font-size:9px;color:;">181cm | Christian | Abuja</p>
                                {{--
                                <p style="font-size:8px;">I am a nice and easygoing lady</p>
                                <p style="color:#d1a55d;font-weight:lighter;font-size:10px">Teacher | Unversity of Lagos</p><div><a href="#"><input type="submit" class="submit" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div>
                                --}}
                            </center>
                        </div>
                    </center>
                </div>
            </div>
            <center>
                <div></div>
            </center>
            <br>
            <center>
                <style>
                    .view_all_button {
                        padding: 10px;
                        border: 2px solid pink;
                        color: pink;
                        width: 60%;
                        border-radius: 25px;
                    }

                    .view_all_button:hover {
                        text-decoration: none;
                        color: pink;
                    }
                </style>
                <a href="#" class="btn view_all_button">
                    View All
                </a>
            </center>
            <br><br>
        </div>
        <br><br>
        <div class="container">
            <center><h3 style="color:#848484;font-weight:bold;font-size:30px;">Newly Matches</h3></center>
            <br><br>
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <div class="view-profile">
                            <center>
                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                     style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                <b style="font-size:9px;color:">Mat ID: 13609####</b>
                                <p style="font-size:25px;font-family:;color:#00b7cf">Male, 28</p>
                                <p style="font-size:9px;color:;">181cm | Christian | Abuja</p>
                                {{-- <p style="font-size:8px;">I am a nice and easygoing lady</p>
                                <p style="color:#d1a55d;font-weight:lighter;font-size:10px">Teacher | Unversity of Lagos</p><div><a href="#"><input type="submit" class="submit" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div> --}}
                            </center>
                        </div>
                    </center>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <div class="view-profile">
                            <center>
                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                     style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                <b style="font-size:9px;color:">Mat ID: 13609####</b>
                                <p style="font-size:25px;font-family:;color:#00b7cf">Male, 28</p>
                                <p style="font-size:9px;color:;">181cm | Christian | Abuja</p>
                                {{-- <p style="font-size:8px;">I am a nice and easygoing lady</p>
                                <p style="color:#d1a55d;font-weight:lighter;font-size:10px">Teacher | Unversity of Lagos</p><div><a href="#"><input type="submit" class="submit" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div> --}}
                            </center>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <center>
                <a href="#" class="btn view_all_button">
                    View All
                </a>
            </center>
            <br><br>
        </div>
        <br><br><br><br>
        <div class="container">
            <center><h3 style="color:#848484;font-weight:bold;font-size:30px;">Daily Matches</h3></center>
            <br><br>
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <div class="view-profile">
                            <center>
                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                     style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                <b style="font-size:9px;color:">Mat ID: 13609####</b>
                                <p style="font-size:25px;font-family:;color:#00b7cf">Male, 28</p>
                                <p style="font-size:9px;color:;">181cm | Christian | Abuja</p>
                                {{-- <p style="font-size:8px;">I am a nice and easygoing lady</p>
                                <p style="color:#d1a55d;font-weight:lighter;font-size:10px">Teacher | Unversity of Lagos</p><div><a href="#"><input type="submit" class="submit" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div> --}}
                            </center>
                        </div>
                    </center>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <div class="view-profile">
                            <center>
                                <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                     style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                <b style="font-size:9px;color:">Mat ID: 13609####</b>
                                <p style="font-size:25px;font-family:;color:#00b7cf">Male, 28</p>
                                <p style="font-size:9px;color:;">181cm | Christian | Abuja</p>
                                {{-- <p style="font-size:8px;">I am a nice and easygoing lady</p>
                                <p style="color:#d1a55d;font-weight:lighter;font-size:10px">Teacher | Unversity of Lagos</p><div><a href="#"><input type="submit" class="submit" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div> --}}
                            </center>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <center>
                <a href="#" class="btn view_all_button">
                    View All
                </a>
            </center>
            <br><br>
        </div>
        <div class="question">
            <h3 style="color:#ffffff;font-size: 25px;text-align: center;font-weight:lighter;">Interested in Aisha?</h3>
            <br>
            {{-- <div class="container"> --}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-hidden col-lg-hidden col-xl-hidden">
                    <a href="#"">
                    <button type="button" value="" class="btn footer_button">Yes</button>
                    </a>
                    <a href="#">
                        <button type="button" value="" class="btn footer_button">No</button>
                    </a>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </div>
</div>
</body>
</html>
