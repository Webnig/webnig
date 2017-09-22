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
                            <h3 class="cyan_text">Your Lifestyle Info</h3>
                            <br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Eating Habit</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($eatingHabit as $habit)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="eatingHabit" value="{{ $habit }}"> {{ $habit }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Drinking Alcohol Habit</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($drinkingHabit as $habit)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="drinkingHabit" value="{{ $habit }}"> {{ $habit }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Smoking Habit</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($smokingHabit as $habit)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="smokingHabit" value="{{ $habit }}"> {{ $habit }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3 class="cyan_text">Physical Appearance</h3>
                            <br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Look</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($looks as $look)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="look" value="{{ $look }}"> {{ $look }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Height</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($heights as $height)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="height" value="{{ $height }}"> {{ $height }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Body Structure</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($bodyStructures as $structure)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="bodyStructure" value="{{ $structure }}"> {{ $structure }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Makeup style</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($makeups as $makeup)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="makeup" value="{{ $makeup }}"> {{ $makeup }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Beard</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($beard as $beard)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="beard" value="{{ $beard }}"> {{ $beard }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Belly</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($belly as $belly)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="belly" value="{{ $belly }}"> {{ $belly }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Feet</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($feet as $feet)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="feet" value="{{ $feet }}"> {{ $feet }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Boobs</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($boobs as $boobs)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="boobs" value="{{ $boobs }}"> {{ $boobs }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Butt size</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($butt as $butt)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="butt" value="{{ $butt }}"> {{ $butt }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Complexion</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($complexions as $complexion)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="complexion" value="{{ $complexion }}"> {{ $complexion }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Fingers type</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($fingers as $finger)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="fingers" value="{{ $finger }}"> {{ $finger }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Nose type</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($nosetype as $nose)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="nose" value="{{ $nose }}"> {{ $nose }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Legs</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($legs as $leg)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="leg" value="{{ $leg }}"> {{ $leg }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Shoulder</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($shoulder as $shoulder)
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="shoulder" value="{{ $shoulder }}"> {{ $shoulder }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">Personal Fashion Style <span class="gray_text">(Pick at least four)</span></label>
                                        <br>
                                        <div class="row">
                                            @foreach($fashionStyles as $style)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="fashionStyle" value="{{ $style }}"> {{ $style }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            Which celebrity&rsquo;s look best describes 
                                            the wife of your dreams ? <span class="gray_text">(Male only)</span>
                                        </label>
                                        <div class="row">
                                            @foreach($wifeLooks as $look)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="" class="radio-inline">
                                                        <input type="radio" name="wifeLook" value="{{ $look }}"> {{ $look }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            Which male celebrity look best describes the husband of your 
                                            dreams <span class="gray_text">(Female only)</span>
                                        </label>
                                        <div class="row">
                                            @foreach($husbandLooks as $look)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="" class="radio-inline">
                                                        <input type="radio" name="husbandLook" value="{{ $look }}"> {{ $look }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">
                                            Your favorite music
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <select name="favoriteMusic" id="favoriteMusic" class="form-control">
                                                <option value="">Select One</option>
                                                @foreach($musicGenres as $favMusic)
                                                    <option value="{{ $favMusic }}">{{ $favMusic }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">
                                            Sports/Fitness you love to do
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <select name="sport" id="sport" class="form-control">
                                                <option value="">Select One</option>
                                                @foreach($sports as $sport)
                                                    <option value="{{ $sport }}">{{ $sport }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">
                                            Travel Habits
                                        </label>
                                        <div class="col-md-9 col-sm-9">
                                            <select name="sport" id="sport" class="form-control">
                                                <option value="">Select One</option>
                                                @foreach($travelHabits as $travelHabit)
                                                    <option value="{{ $travelHabit }}">{{ $travelHabit }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            Describe yourself <span class="gray_text">(Choose at least 4)</span>
                                        </label>
                                        <br>
                                        <div class="row">
                                            @foreach($descriptions as $description)
                                                <div class="col-md-6 col-sm-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="about_self" value="{{ $description }}"> {{ $description }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            Which of these best describes you? <span class="gray_text">(Choose at least 4)</span>
                                        </label>
                                        <br>
                                        <div class="row">
                                            @foreach($moreDescriptions as $description)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="your_description" value="{{ $description }}"> {{ $description }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            Which of these qualitites do you possess? <span class="gray_text">(Choose at least 4)</span>
                                        </label>
                                        <br>
                                        <div class="row">
                                            @foreach($qualities as $quality)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="quality" value="{{ $quality }}"> {{ $quality }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            How would people describe you? <span class="gray_text">(Choose four)</span>
                                        </label>
                                        <br>
                                        <div class="row">
                                            @foreach($peopleDescriptions as $description)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="peopleDescription" value="{{ $description }}"> {{ $description }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            What imperfections do you possess? <span class="gray_text">(Choose four)</span>
                                        </label>
                                        <br>
                                        <div class="row">
                                            @foreach($imperfections as $imperfection)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="imperfection" value="{{ $imperfection }}"> {{ $imperfection }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            How well does the following statements apply to you? <span class="gray_text">(Choose at least four)</span>
                                        </label>
                                        <br>
                                        <div class="row">
                                            @foreach($lifeViews as $view)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="life_view" value="{{ $view }}"> {{ $view }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            To what extent have you felt the emotions below in the last 30 days?
                                        </label>
                                        <br>
                                        <span class="text-warning">1</span> is lowest while <span class="text-success">7</span> is highest
                                        <div class="row">
                                            @foreach($emotions as $emotion)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="">{{ $emotion }}</label>
                                                    <br>
                                                    <select name="{{ $emotion }}" id="{{ $emotion }}" class="form-control">
                                                        <option value="">Select One</option>
                                                        @for($a=1;$a<=7;$a++)
                                                            <option value="{{ $a }}">{{ $a }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            What interests do you have? <span class="gray_text">(At least five)</span>
                                        </label>
                                        <br>
                                        <div class="row">
                                            @foreach($interests as $interest)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="interest" value="{{ $interest }}"> {{ $interest }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            What Movie Platforms do you enjoy?
                                        </label>
                                        <br>
                                        <div class="row">
                                            @foreach($moviePlatforms as $moviePlatform)
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="moviePlatform" value="{{ $moviePlatform }}"> {{ $moviePlatform }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group container-fluid">
                                        <label for="">
                                            Which of these characteristics do you have? <span class="gray_text">(Choose at least five)</span>
                                        </label>
                                        <br>
                                        <div class="row">
                                            @foreach($characteristics as $characteristic)
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <label for="" class="checkbox-inline">
                                                        <input type="checkbox" name="characteristic" value="{{ $characteristic }}"> {{ $characteristic }}
                                                    </label>
                                                </div>
                                            @endforeach
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
                                    <a class="btn btn-info medium_button" href="/basicinfo/3">
                                        Proceed
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
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>