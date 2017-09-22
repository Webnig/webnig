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
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="eatingHabit"> {{ $habit }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Drinking Alcohol Habit</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($drinkingHabit as $habit)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="drinkingHabit"> {{ $habit }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Smoking Habit</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($smokingHabit as $habit)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="smokingHabit"> {{ $habit }}
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
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="look"> {{ $look }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Height</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($heights as $height)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="height"> {{ $height }}
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
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="bodyStructure"> {{ $structure }}
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
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="makeup"> {{ $makeup }}
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
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="beard"> {{ $beard }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Belly</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($belly as $belly)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="belly"> {{ $belly }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Feet</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($feet as $feet)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="feet"> {{ $feet }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Boobs</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($boobs as $boobs)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="boobs"> {{ $boobs }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Butt size</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($butt as $butt)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="butt"> {{ $butt }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Complexion</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($complexions as $complexion)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="complexion"> {{ $complexion }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Fingers type</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($fingers as $finger)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="fingers"> {{ $finger }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Nose type</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($nosetype as $nose)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="nose"> {{ $nose }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Legs</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($legs as $leg)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="leg"> {{ $leg }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 col-sm-3">Shoulder</label>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                                @foreach($shoulder as $shoulder)
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="" class="radio-inline">
                                                            <input type="radio" name="shoulder"> {{ $shoulder }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                    <button class="btn btn-info medium_button" type="submit">
                                        Proceed
                                    </button>
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