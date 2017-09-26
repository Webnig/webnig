<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LostRib">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="alternative icon" type="icon" href="{{  asset('images/logo.png') }}">

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
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
                    <h3 class="cyan_text">My Account</h3>
                </li>
                <!-- <li>
                    <i class="icon fa fa-bell fa-2x text-info"></i>
                </li>
                <li>
                    <i class="icon fa fa-user fa-2x text-info"></i>
                </li> -->
            </ul>
          </div>
      </div>
    </nav>

    <div class="cyan"></div>

    <div class="fullwidth top_margin">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-lg-9">
                        <form action="#" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            <h2 class="cyan_text">Life and Death</h2>
                            <br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Death is 
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($viewOnDeath as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="viewOnDeath" value="{{ $option }}"> {{ $option }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                To you, is abortion an option in case of an unwanted 
                                                accidental pregnancy? 
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($abortion as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="abortion" value="{{ $option }}"> {{ $option }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                If you had to name your greatest motivation in life thus 
                                                far, what would it be? 
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($greatestMotivation as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="greatestMotivation" value="{{ $option }}"> {{ $option }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                What is difficult about dating you? 
                                            </div>
                                            <div class="panel-body">
                                                <input type="text" name="datingDifficulty" placeholder="Please enter" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Do you stop to enjoy simple things in nature? 
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($stopEnjoyingNature as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="stopEnjoyingNature" value="{{ $option }}"> {{ $option }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Are you happy with your life? 
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($happyWithYourLife as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="happyWithYourLife" value="{{ $option }}"> {{ $option }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Would it bother you if a date made gender-biased remarks? 
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($genderBiasedRemarks as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="genderBiasedRemarks" value="{{ $option }}"> {{ $option }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                How much do you go &ldquo;clubbing&rdquo; (out 
                                                dancing in bars, owambes etc)?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($genderBiasedRemarks as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="genderBiasedRemarks" value="{{ $option }}"> {{ $option }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                    {{-- remember to change the anchor tag to button, 
                                    this is just for test purpose --}}
                                    {{-- <button class="btn btn-info medium_button" type="submit">
                                        Proceed
                                    </button> --}}
                                    <a class="btn btn-info medium_button" href="/basicinfo/3/life-and-death">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h2 class="fine">Search by ID</h2>
                    <form action="#" method="post">
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
            <p class="lead">
                &copy; Copyright 2017. All rights reserved
            </p>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>