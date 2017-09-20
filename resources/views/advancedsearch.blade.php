<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advanced Search</title>
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
      </div>
    </nav>

    <div class="darkrose">
        Over 1,200,203 genuine users since 2006
    </div>

    <div class="fullwidth top_margin">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-lg-9">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row top_margin">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <a href="#" class="gray_link no_decor">Regular Search</a>
                                    <br>
                                    <div class="gray_rule"></div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <a href="#" class="cyan_link no_decor">Advanced Search</a>
                                    <br>
                                    <div class="cyan_rule"></div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <a href="#" class="gray_link no_decor">Keyword Search</a>
                                    <br>
                                    <div class="gray_rule"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container fullwidth">
                        <form action="#" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="age" class="col-md-2 col-sm-2">Age</label>
                                <div class="col-md-10 col-sm-10">
                                    <div class="button-group">
                                        <select name="age" class="form-control inline_input" style="width: 80px">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>
                                        <span class="inline_input" style="padding-left: 10px; padding-right: 10px"> to </span>
                                        <select name="age" class="form-control inline_input" style="width: 100px">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="height" class="col-md-2 col-sm-2">Height</label>
                                <div class="col-md-10 col-sm-10">
                                    <div class="button-group">
                                        <select name="height" class="form-control inline_input" style="width: 170px">
                                            <option value="">5ft 7inch - 170cm</option>
                                            <option value="">5ft 7inch - 170cm</option>
                                            <option value="">5ft 7inch - 170cm</option>
                                            <option value="">5ft 7inch - 170cm</option>
                                        </select>
                                        <span class="inline_input" style="padding-left: 10px; padding-right: 10px"> to </span>
                                        <select name="height" class="form-control inline_input" style="width: 170px">
                                            <option value="">5ft 7inch - 170cm</option>
                                            <option value="">5ft 7inch - 170cm</option>
                                            <option value="">5ft 7inch - 170cm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-md-2 col-sm-2">Marital status</label>
                                <div class="col-md-10 col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value=""> Any
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value=""> Never married
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value=""> Widowed
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value=""> Awaiting Divorce
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-md-2 col-sm-2">Religion</label>
                                <div class="col-md-10 col-sm-10">
                                    <select name="religion" class="form-control inline_input" style="width: 170px;">
                                        <option value="">Freethinker</option>
                                        <option value="">Religion</option>
                                        <option value="">Moslem</option>
                                        <option value="">Buddhist</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item cyan_text lists">
                                    Education / Occupation / Annual Income Details <span class="pull-right"><i class="fa fa-chevron-circle-up"></i></span>
                                </li>
                                <li class="list-group-item cyan_text lists">
                                    Location Details <span class="pull-right"><i class="fa fa-chevron-circle-up"></i></span>
                                </li>
                                <li class="list-group-item cyan_text lists">
                                    Habits &amp; Hobbies <span class="pull-right"><i class="fa fa-chevron-circle-up"></i></span>
                                </li>
                                <li class="list-group-item cyan_text lists">
                                    Background, Personality &amp; Interests <span class="pull-right"><i class="fa fa-chevron-circle-down"></i></span>
                                    <br><br>
                                    <div class="row gray_text">
                                        <div class="col-md-3 col-sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Affluent
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Cheerful
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Spiritually inclined
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Warm &amp; Friendly
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row gray_text">
                                        <div class="col-md-3 col-sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Cares for pets
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Enjoys music
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Enjoys food
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Likes reading
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-group" style="padding-left: 20px">
                                <h2 class="cyan_text">Search using Keywords</h2>
                                <p class="gray_text">
                                    Enter keywords within quotes and for more than one keyword use a comma separator between words. <br>
                                    Example: "Good looking", "Well settled", etc. <br>
                                    Keywords are searched against the profile description of a member.
                                </p>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <input type="text" placeholder="Keywords" class="form-control" style="width: 60%">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-md-3 col-sm-3 gray_text" style="padding-top: 5px">Show Profile</label>
                                <div class="col-md-9 col-sm-9 gray_text">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <label class="radio-inline">
                                                <input type="radio" name="showprofile"> With Photo
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="radio-inline">
                                                <input type="radio" name="showprofile"> with Horoscope
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="radio-inline">
                                                <input type="radio" name="showprofile"> Premium Members
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="radio-inline">
                                                <input type="radio" name="showprofile"> Online
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-md-3 col-sm-3 gray_text" style="padding-top: 5px">Don&rsquo;t show</label>
                                <div class="col-md-9 col-sm-9 gray_text">
                                    <div class="row">
                                        <div class="col-md-3 col sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Ignored
                                            </label>
                                        </div>
                                        <div class="col-md-3 col sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Contacted
                                            </label>
                                        </div>
                                        <div class="col-md-3 col sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Viewed
                                            </label>
                                        </div>
                                        <div class="col-md-3 col sm-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value=""> Shortlisted
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top_margin"></div>
                            <div class="form-group">
                                <div class="panel lightblue text-center">
                                    <div class="panel-body">
                                        <h2 class="fine">Save Search</h2>
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-5">
                                                        <p class="fine">Save search as</p>
                                                        <input type="text" name="searchName" placeholder="e.g DesperateMe" class="form-control">
                                                    </div>
                                                    <div class="col-md-2 col-sm-2" style="padding-top: 35px"> OR </div>
                                                    <div class="col-md-5 col-sm-5">
                                                        <p class="fine">Overwrite existing</p>
                                                        <select name="existingSearch" class="form-control">
                                                            <option value="">Existing Search 1</option>
                                                            <option value="">Existing Search 2</option>
                                                            <option value="">Existing Search 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-info medium_button" type="submit" style="padding-top: 10px; padding-bottom: 10px;">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h2 class="fine">Search by ID</h2>
                    <form action="#" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="MatID" class="sr-only">MatID</label>
                            <input type="search" name="matID" placeholder="MatID" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger medium_button" type="submit">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid footer2">
        <br>
        <hr>
        <div class="text-center">
            <p class="lead gray_text">
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