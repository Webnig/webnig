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
                            <h2 class="cyan_text">Nigerian</h2>
                            <br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Would you consider being or having a second wife?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="secondwife" value="Yes"> Yes
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="secondwife" value="No"> No
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="secondwife" value="Maybe"> Maybe
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Is it compulsory to have a legal/registry/court wedding or other forms 
                                                like traditional/church/nikai or wedding ceremony is sufficient enough?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="courtWedding" value="Yes"> Yes, it is compulsory
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="courtWedding" value="No"> No, it is not compulsory
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Do you believe a wife should knee/curtsy when she&rsquo;s serving her 
                                                husband/in-laws their food?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($curtsies as $curtsy)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="curtsy" value="{{ $curtsy }}"> {{ $curtsy }}
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
                                                Do you think it is compulsory to have a male child?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($haveMaleChild as $male)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="haveMaleChild" value="{{ $male }}"> {{ $male }}
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
                                                Does your family dedicate children to your family&rsquo;s deity/idol?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($familyidol as $idol)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="familyidol" value="{{ $idol }}"> {{ $idol }}
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
                                                If your parents insist that you should not marry your intended spouse, what will 
                                                you do?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($spouse as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="parent_spouse" value="{{ $option }}"> {{ $option }}
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
                                                Do you think it is okay for your partner&rsquo;s family to live with 
                                                you in the first year of marriage?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($partnersFamily as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="partner_family" value="{{ $option }}"> {{ $option }}
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
                                                How should your future spouse greet your parents?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($spouseGreetParents as $key => $value)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="spouse_greet_parents" value="{{ $key }}"> {{ $key . " (" . $value . ")" }}
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
                                                Do you think a woman should call her spouse&rsquo;s younger siblings 
                                                Aunty or Uncle?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($spouseSiblings as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="spouse_siblings" value="{{ $option }}"> {{ $option }}
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
                                                Do you believe in helping your partner pay for extended 
                                                family expenses e.g. Wedding expenses of spouse's siblings?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($extendedFamilyExpenses as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="extendedFamilyExpenses" value="{{ $option }}"> {{ $option }}
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
                                                If your prophet/pastor/imam/religious leader prophesies that your 
                                                partner is bad for you, will you still marry him or her?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($religiousProphecies as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="religiousProphecies" value="{{ $option }}"> {{ $option }}
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
                            <h3 class="cyan_text">Domesticated</h3>
                            <br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Do you believe that cooking and domestic jobs are solely 
                                                roles of the wife?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($domesticJobs as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="domesticJobs" value="{{ $option }}"> {{ $option }}
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
                                                When you get married, who will wash the clothes?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($clothesWasher as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="clothesWasher" value="{{ $option }}"> {{ $option }}
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
                                                Must a woman enjoy cooking?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($enjoyCooking as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="enjoyCooking" value="{{ $option }}"> {{ $option }}
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
                                                Must a woman enjoy cleaning and housekeeping?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($enjoyHousekeeping as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="enjoyHousekeeping" value="{{ $option }}"> {{ $option }}
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
                                                How tidy are you?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($tidyness as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="tidyness" value="{{ $option }}"> {{ $option }}
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
                            <h3 class="cyan_text">Relationship</h3>
                            <br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                What are you like when you don&rsquo;t get 
                                                what you want from your partner?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($unsatisfiedFeeling as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="unsatisfiedFeeling" value="{{ $option }}"> {{ $option }}
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
                                                Do you have a car?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($hasCar as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="hasCar" value="{{ $option }}"> {{ $option }}
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
                                                Can you date someone who does not have a car?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($partnerHasCar as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="partnerHasCar" value="{{ $option }}"> {{ $option }}
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
                                                Do you live in the family house or on your own?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($liveInFamilyHouse as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="liveInFamilyHouse" value="{{ $option }}"> {{ $option }}
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
                                                What is most appealing?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($mostAppealing as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="mostAppealing" value="{{ $option }}"> {{ $option }}
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
                                                Who should call more at the start of the relationship?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($whoCallsMore as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="whoCallsMore" value="{{ $option }}"> {{ $option }}
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
                                                When you feel disconnected from your partner, what do you 
                                                usually do to get back together?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($getBackTogetherActivity as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="getBackTogetherActivity" value="{{ $option }}"> {{ $option }}
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
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>