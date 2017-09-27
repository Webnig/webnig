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
                            <h2 class="cyan_text">Relationship</h2>
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

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Are you able to communicate your emotional needs 
                                                to your partner?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($communicateEmotionalNeeds as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="communicateEmotionalNeeds" value="{{ $option }}"> {{ $option }}
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
                                                Do you hold on to resentment?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($holdOntoResentment as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="holdOntoResentment" value="{{ $option }}"> {{ $option }}
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
                                                How do you typically express your love to your partner?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($typicalLoveExpression as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="typicalLoveExpression" value="{{ $option }}"> {{ $option }}
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
                                                If you could change anything about the way you were raised 
                                                what would it be?
                                                <span class="gray_text"><strong>(200 characters)</strong></span>
                                            </div>
                                            <div class="panel-body">
                                                <input type="text" maxlength="200" class="form-control" 
                                                placeholder="What would you like to change" name="whatToChange">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Is there something that you have dreamed of doing 
                                                for a very long time? Why haven&rsquo;t you done it?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($whyNotDoSomething as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="whyNotDoSomething" value="{{ $option }}"> {{ $option }}
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
                                                Why haven&rsquo;t you gotten married yet?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($whyStillSingle as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="whyStillSingle" value="{{ $option }}"> {{ $option }}
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
                                                Would you like to be with a
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($likeToBeWith as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="likeToBeWith" value="{{ $option }}"> {{ $option }}
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
                                                What do you value most in a relationship?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($mostValued as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="mostValued" value="{{ $option }}"> {{ $option }}
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
                                                Imagine that you and your partner cannot agree on the 
                                                choice of music. If you were driving and your partner 
                                                &mdash; a passenger, how should the music be chosen?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($choiceOfMusic as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="choiceOfMusic" value="{{ $option }}"> {{ $option }}
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
                                                What is your take on domestic violence?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($domesticViolence as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="domesticViolence" value="{{ $option }}"> {{ $option }}
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
                                                Are you generally able to forgive and forget?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($forgiveForgetAbility as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="forgiveForgetAbility" value="{{ $option }}"> {{ $option }}
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
                                                How often do you find yourself annoyed because 
                                                other people don&rsquo;t seem to understand the 
                                                obvious?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($annoyanceFrequency as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="annoyanceFrequency" value="{{ $option }}"> {{ $option }}
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
                                                Why did you break up with your ex?
                                            </div>
                                            <div class="panel-body">
                                                <input type="text" name="breakupReason" placeholder="Reason for breakup" 
                                                class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                What is your disposition to having friends that are 
                                                promiscuous <span class="gray_text">(Sleep around)</span>?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($promiscuousFriendsView as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="promiscuousFriendsView" value="{{ $option }}"> {{ $option }}
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
                                                Do you mind if your partner keeps late nights?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($partnerKeepLateNights as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="partnerKeepLateNights" value="{{ $option }}"> {{ $option }}
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
                                                What is the one thing you cannot compromise with in 
                                                a relationship?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($cannotCompromise as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="cannotCompromise" value="{{ $option }}"> {{ $option }}
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
                                                If you inadvertently found a phone number in your partner&rsquo;s 
                                                pocket, which would you do?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($phoneInPartnerPocket as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="phoneInPartnerPocket" value="{{ $option }}"> {{ $option }}
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
                                                If you were in a serious relationship and you learned that your 
                                                partner cheated on you one drunken night, could you forgive him/her?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($forgiveCheatingPartner as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="forgiveCheatingPartner" value="{{ $option }}"> {{ $option }}
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
                                                If you were in a long term relationship and your partner 
                                                gained weight due to something like childbirth, would you 
                                                think less of them as a person?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($partnerWeight as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="partnerWeight" value="{{ $option }}"> {{ $option }}
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
                                                Would you consider having an open relationship, 
                                                where you can see other people?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($considerOpenRelationship as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="considerOpenRelationship" value="{{ $option }}"> {{ $option }}
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
                                                Would you avoid all contact with an ex if your current 
                                                significant other asked you to?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($avoidContactWithEx as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="avoidContactWithEx" value="{{ $option }}"> {{ $option }}
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
                                                Your significant other is traveling and has the opportunity 
                                                to stay with a good friend that you knew they find to be very 
                                                attractive. What&rsquo;s your stance on the situation?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($stayWithAttractiveFriend as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="stayWithAttractiveFriend" value="{{ $option }}"> {{ $option }}
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
                                                You get married. Five years later, you realize it was a 
                                                mistake. Discussion and counselling haven&rsquo;t made a 
                                                difference. You just don&rsquo;t love your partner anymore. 
                                                He/she still loves you. You decide to:
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($relationshipMistake as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="relationshipMistake" value="{{ $option }}"> {{ $option }}
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
                                                How much affection can you tolerate?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($affectionTolerance as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="affectionTolerance" value="{{ $option }}"> {{ $option }}
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
                                                How important is it to you to have your own unique 
                                                &ldquo;thing&rdquo; (like a weekly Girls&rsquo; Night Out 
                                                or Guys&rsquo; Movie Night) that you don&rsquo;t share with 
                                                your partner(s)?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($ownUniqueThing as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="ownUniqueThing" value="{{ $option }}"> {{ $option }}
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
                                                Which makes for a better relationship?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($makeBetterRelationship as $key => $value)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="makeBetterRelationship" value="{{ $key }}"> {{ $key . ' - ' . $value }}
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
                                                Is it a requirement that you communicate with your 
                                                significant other daily, in some way (phone, email, 
                                                in person, etc.)?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($ensureDailyCommunication as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="ensureDailyCommunication" value="{{ $option }}"> {{ $option }}
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
                                                Which of these options most closely describes what you&rsquo;re 
                                                looking for in your next relationship?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($nextRelationshipDescription as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="nextRelationshipDescription" value="{{ $option }}"> {{ $option }}
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
                                                Do you feel like you&rsquo;re still hurting from something 
                                                that happened to you a long time ago?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($stillHurting as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="stillHurting" value="{{ $option }}"> {{ $option }}
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
                                                If asked, would you share the password of your phone with 
                                                a significan other?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($sharePhonePassword as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="sharePhonePassword" value="{{ $option }}"> {{ $option }}
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
                                                Which would you prefer your ideal match to be more into?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($idealMatchPreference as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="idealMatchPreference" value="{{ $option }}"> {{ $option }}
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
                                                Are you really into Anime (Japanese Animation) movies?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($intoAnime as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="intoAnime" value="{{ $option }}"> {{ $option }}
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
                                                What is your opinion of sarcasm?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($sarcasmOpinion as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="sarcasmOpinion" value="{{ $option }}"> {{ $option }}
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
                                                How good is your singing voice?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($singingVoice as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="singingVoice" value="{{ $option }}"> {{ $option }}
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
                                                Are you joining LostRib so you can have someone to marry?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($signupForMarriage as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="signupForMarriage" value="{{ $option }}"> {{ $option }}
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
                                                How soon do you want to marry?
                                            </div>
                                            <div class="panel-body">
                                                <select name="marryHowSoon" class="form-control">
                                                    <option value="">Select one...</option>
                                                    @foreach ($marryHowSoon as $option)
                                                        <option value="{{ $option }}">{{ $option }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                On weekends/days off, do you like to get out and make the 
                                                most of the day, or do you prefer to sleep late and relax?
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    @foreach($weekendsActivity as $option)
                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="weekendsActivity" value="{{ $option }}"> {{ $option }}
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