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
                <h3 class="cyan_text">Basic Information</h3>
                <hr>
                <form action="#" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <label for="profileforwho" class="col-md-3 col-sm-3">Profile for</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="profileforwho" id="profileforwho" class="form-control inline_input">
                                        <option value="">Select Matrimony Profile for</option>
                                        <option value="father">Myself</option>
                                        <option value="father">Son</option>
                                        <option value="mother">Daughter</option>
                                        <option value="mother">Brother</option>
                                        <option value="mother">Relative</option>
                                        <option value="mother">Friend</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 col-sm-3">First name</label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" name="firstname" id="firstname" placeholder="First name"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-3 col-sm-3">Last name</label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" name="lastname" id="lastname"
                                           placeholder="Last name (Visible to the admin alone)" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender" class="col-md-3 col-sm-3">Gender</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <label class="radio-inline">
                                                <input type="radio" name="gender"> Male
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="radio-inline">
                                                <input type="radio" name="gender"> Female
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3"></div>
                                        <div class="col-md-3 col-sm-3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="height" class="col-md-3 col-sm-3">Height</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="height" id="height" class="form-control inline_input">
                                        <option value="">Select Height</option>
                                        <option value="5ft">5ft</option>
                                        <option value="6ft">6ft</option>
                                        <option value="8ft">8ft</option>
                                        <option value="10ft">10ft</option>
                                        <option value="12ft">12ft</option>
                                        <option value="14ft">14ft</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob" class="col-md-3 col-sm-3">Date of birth</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                            <select name="day" id="day" class="form-control">
                                                <option value="">Day</option>
                                                {{--@for($day = 1; $day <= 31; $day++)
                                                    <option value="{{ $day }}">{{ $day }}</option>
                                                @endfor--}}
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                                            <select name="month" id="month" class="form-control">
                                                <option value="">Month</option>
                                                {{--{{ $months = ['jan', 'feb'] }}
                                                @foreach($months as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach--}}
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                                            <select name="year" id="year" class="form-control">
                                                <option value="">Year</option>
                                                {{--@for($year = 1999; $year >= 1947; $year--)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endfor--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="genotype" class="col-md-3 col-sm-3">Genotype</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="genotype" id="genotype" class="form-control">
                                        <option value="">Choose Genotype</option>
                                        {{--@foreach($genotypes as $genotype)
                                            <option value="{{ $genotype }}">{{ $genotype }}</option>
                                        @endforeach--}}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hivstatus" class="col-md-3 col-sm-3">HIV Status</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="hivStatus"> Negative
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="hivStatus"> Positive
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="hivStatus"> I don&rsquo;t know
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row container-fluid">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                        <label for="weight">Weight</label>
                                        <br>
                                        <select name="weight" id="weight" class="form-control">
                                            <option value="">Choose weight</option>
                                            <option value="5 kilo">5 kilo</option>
                                            <option value="5 kilo">5 kilo</option>
                                            <option value="5 kilo">5 kilo</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                        <label for="religion">Religion</label>
                                        <br>
                                        <select name="religion" id="religion" class="form-control">
                                            <option value="">Choose Religion</option>
                                            {{--@foreach($religions as $religion)
                                                <option value="{{ $religion }}">{{ $religion }}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="cyan_text">Contact Details</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <div class="row container-fluid">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                        <label for="phone">Phone</label>
                                        <br>
                                        <input type="tel" name="phone" id="phone" placeholder="Phone"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                        <label for="email">Email</label>
                                        <br>
                                        <input type="email" name="email" id="email" placeholder="Email Address"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-3 col-sm-3">Password</label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="password" name="password" id="password" placeholder="Password"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="cyan_text">Ancestors&rsquo; Origin</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <div class="row container-fluid">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                        <label for="country">Country</label>
                                        <br>
                                        <select name="country" id="country" class="form-control">
                                            <option value="">Select Country</option>
                                            {{--@foreach($countries as $country)
                                                <option value="{{ $country }}">{{ $country }}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                        <label for="state">State <span class="gray_text">(Nigerians)</span></label>
                                        <br>
                                        <select name="nigerianState" id="nigerianState" class="form-control">
                                            <option value="">Select State</option>
                                            {{--@foreach($nigerianStates as $state)
                                                <option value="{{ $state }}">{{ $state }}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3">State <span
                                            class="gray_text">(International)</span></label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" name="internationalState" id="internationalState"
                                           placeholder="State (International)" maxlength="200" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3">My Spoken Languages</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        {{--@foreach($spokenLanguages as $language) --}}
                                        <div class="col-md-4 col-sm-4">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="">Language {{--{{ $language }}--}}
                                            </label>
                                        </div>
                                        {{--@endforeach--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3">Family Status</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        {{-- @foreach($familyStatus as $status)--}}
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="familyStatus">Status {{--{{ $status }}--}}
                                            </label>
                                        </div>
                                        {{--@endforeach--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="cyan_text">Family Information</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <label>Father Status</label>
                                        <br>
                                        <select name="fatherStatus" id="fatherStatus" class="form-control">
                                            <option value="">Choose Father Status</option>
                                            {{-- @foreach($fatherStatus as $fatherStatus)
                                                 <option value="{{ $fatherStatus }}">{{ $fatherStatus }}</option>
                                             @endforeach--}}
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <label>Mother Status</label>
                                        <br>
                                        <select name="motherStatus" id="motherStatus" class="form-control">
                                            <option value="">Choose Mother Status</option>
                                            {{--@foreach($motherStatus as $motherStatus)
                                                <option value="{{ $motherStatus }}">{{ $motherStatus }}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label>Brothers <span class="gray_text">(How many)</span></label>
                                        <br>
                                        <select name="num_of_brothers" id="num_of_brothers" class="form-control">
                                            <option value="">Please Choose</option>
                                            {{--@for($a = 1; $a <= 10; $a++)
                                                <option value="{{ $a }}">{{ $a }}</option>
                                            @endfor--}}
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>Living with you?</label>
                                        <br>
                                        <select name="brothers_live_with" id="brothers_live_with" class="form-control">
                                            <option value="">Please Choose</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label>Sisters <span class="gray_text">(How many)</span></label>
                                        <br>
                                        <select name="num_of_sisters" id="num_of_sisters" class="form-control">
                                            <option value="">Please Choose</option>
                                            {{--@for($a = 1; $a <= 10; $a++)
                                                <option value="{{ $a }}">{{ $a }}</option>
                                            @endfor--}}
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>Living with you?</label>
                                        <br>
                                        <select name="sisters_live_with" id="sisters_live_with" class="form-control">
                                            <option value="">Please Choose</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3">Family Location</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="family_location" id="family_location" class="form-control">
                                        <option value="">Choose one...</option>
                                        <option value="Same as my location">Same as my location</option>
                                        <option value="Different from my location">Different from my location</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="cyan_text">Religion Details</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                            <div class="form-group">
                                <label>How often in a week do you go to Church/Mosque</label>
                                <br>
                                <select name="worship_frequency" id="worship_frequency" class="form-control">
                                    <option>Choose one...</option>
                                    <option value="Once a week">Once a week</option>
                                    <option value="Twice a week">Twice a week</option>
                                    <option value="Everyday">Everyday</option>
                                    <option value="I worship on the internet">I worship on the internet.</option>
                                    <option value="I don&rsquo;t go anywhere to worship">I don&rsquo;t go anywhere to
                                        worship
                                    </option>
                                </select>
                            </div>
                            <div class="form-group container-fluid">
                                <label class="col-md-3 col-sm-3">Name of Church/Mosque</label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" name="name_of_worship_place" id="name_of_worship_place"
                                           placeholder="Church or Mosque name" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="cyan_text">Personal Details</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3">Marital Status</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="maritalStatus"> Never married
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="maritalStatus"> Widowed
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="maritalStatus"> Divorced
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="maritalStatus"> Awaiting Divorce
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="maritalStatus"> Married
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_of_children" class="col-md-3 col-sm-3"> How many children</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="no_of_children" id="no_of_children" class="form-control">
                                        <option value="">Choose...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4 and above</option>
                                        <option value="0">None</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="children_location" class="col-md-3 col-sm-3">Where are your
                                    children?</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="children_location"> Living with me
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="children_location"> Not living with me
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 col-sm-3">Want more children?</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="want_more_children" id="want_more_children" class="form-control">
                                        <option value="">Choose...</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="Maybe">Maybe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 col-sm-3">Disabilities?</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="disability"> Normal
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="disability"> Physically Challenged
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="cyan_text">Occupation</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            <h4 class="gray_text">Work Location</h4>
                            <br>
                            <div class="form-group">
                                <div class="row container-fluid">
                                    <div class="col-md-4 col-sm-4">
                                        <label for="">Country</label>
                                        <br>
                                        <select name="work_country" id="work_country" class="form-control">
                                            <option value="">Choose...</option>
                                            {{--@foreach($countries as $country)
                                                <option value="{{ $country }}">{{ $country }}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <label for="">State</label>
                                        <br>
                                        <select name="work_state" id="work_state" class="form-control">
                                            <option value="">Choose...</option>
                                            <option value="Chicago">Chicago</option>
                                            <option value="Miami">Miami</option>
                                            <option value="Freetown">Freetown</option>
                                            <option value="Cape town">Cape town</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <label for="">City</label>
                                        <br>
                                        <select name="work_city" id="work_city" class="form-control">
                                            <option value="">Choose...</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="New York">New York</option>
                                            <option value="Brooklyn">Brooklyn</option>
                                            <option value="Johannesburg">Johannesburg</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 col-sm-3">Citizenship</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="checkbox-inline">
                                                <input type="checkbox" name="citizenship"> Nigerian
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="checkbox-inline">
                                                <input type="checkbox" name="citizenship"> British
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="checkbox-inline">
                                                <input type="checkbox" name="citizenship"> French
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 col-sm-3">Resident Status</label>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        {{--@foreach($residentStatus as $residentStatus)--}}
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="radio-inline">
                                                <input type="radio" name="resident_status">Resident
                                                status {{--{{ $residentStatus }}--}}
                                            </label>
                                        </div>
                                        {{--@endforeach--}}
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4 class="gray_text">Education in Detail</h4>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-md-3 col-sm-3">Course Studied</label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" name="course_studied" id="course_studied"
                                           placeholder="Course Studied" class="form-control">
                                </div>
                            </div>
                            <div class="form-group container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label for="">Employed in</label>
                                        <br>
                                        <select name="employer" id="employer" class="form-control">
                                            <option value="">Choose...</option>
                                            {{--@foreach($employers as $employer)
                                                <option value="{{ $employer }}">{{ $employer }}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="">Occupation</label>
                                        <br>
                                        <select name="occupation" id="occupation" class="form-control">
                                            <option value="">Choose...</option>
                                            <option value="Banker">Banker</option>
                                            <option value="Therapist">Therapist</option>
                                            <option value="Medical Doctor">Medical Doctor</option>
                                            <option value="Software Developer">Software Developer</option>
                                            <!-- fill this loop with occupations supplied by Yeside -->
                                            {{-- @foreach($employers as $employer)
                                                <option value="{{ $employer }}">{{ $employer }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4 class="gray_text">Income</h4>
                            <br>
                            <div class="form-group container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label for="">Currency</label>
                                        <br>
                                        <select name="currency" id="currency" class="form-control">
                                            <option value="">Choose...</option>
                                            <option value="NGN">NGN</option>
                                            <option value="YEN">YEN</option>
                                            <option value="USD">USD</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="">Income</label>
                                        <br>
                                        <input type="number" placeholder="Income" name="income" id="income"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group container-fluid">
                                {{-- this label should be based on what was selected earlier
                                whether self or daughter or son :) --}}
                                <label for="">About Me/Daughter/Son</label>
                                <br>
                                <textarea name="about" id="about" rows="6" placeholder="About" maxlength="200"
                                          class="form-control"></textarea>
                            </div>
                            <div class="form-group container-fluid">
                                <label for="">People describe me as</label>
                                <br>
                                <div class="row">
                                    {{-- @foreach($descriptionTags as $tag)--}}
                                    <div class="col-md-4 col-sm-4">
                                        <label for="" class="checkbox-inline">
                                            <input type="checkbox" name="citizenship">Tag {{--{{ $tag }}--}}
                                        </label>
                                    </div>
                                    {{--@endforeach--}}
                                </div>
                            </div>
                            <div class="form-group container-fluid">
                                <label for="">Hobbies and Interests</label>
                                <br>
                                <div class="row">
                                    {{--@foreach($hobbies as $hobby)--}}
                                        <div class="col-md-4 col-sm-4">
                                            <label for="" class="checkbox-inline">
                                                <input type="checkbox" name="citizenship"> Hobby{{-- {{ $hobby }}--}}
                                            </label>
                                        </div>
                                    {{--@endforeach--}}
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