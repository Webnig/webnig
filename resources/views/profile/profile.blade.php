@extends('layout.layout')

@section('title', 'Profile | LostRib')

@section('content')


    <section class="profile-area">
        <div class="container lr-container">
            <div class="row">
                <div class="col-md-8 profile-area--info">
                    <div class="profile-section profile-section--summary">
                        <h1 class="profile-section__title">{{ $details['user']->first_name }}
                            , {{ $details['user']->last_name }}<span
                                    class="profile-section__location ml--10">{{ $details['user']->city }}
                                , {{ $details['user']->state }}</span></h1>
                        <div class="row profile-summary">
                            <div class="col-md-4 profile-summary--img">
                                <div class="profile-summary__profile-pic">
                                    <img src="{{ asset(' assets/img/profile_pic.jpg')}}" alt=""
                                         class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-8 profile-summary--details">
                                <h3 class="profile-summary__gender">
                                    @if($details['user']->gender == 'm')
                                        Male,
                                    @else
                                        Female,
                                    @endif
                                        26
                                    <span class="profile-summary__height ml--10">{{ $details['user']->height }}cm</span>
                                    <span class="text-right profile-summary__status"><strong>What's on your
                                            mind?</strong></span>
                                </h3>
                                <div class="profile-summary__info">
                                    <p>Ijebu, Ogun State</p>
                                    <p>Muslim</p>
                                    <p>University of Lagos, Lagos</p>
                                    <p>Front Desk Officer</p>
                                    <p>N45,000</p>
                                </div>
                                <div class="profile-summary__know-more text-center">
                                    <strong>Would you like to know more about this member?</strong>
                                    <div class="">
                                        <a href="" class="btn lr-btn lr-btn--blue mr--15">
                                            <span class="lr-btn__text">Yes</span>
                                        </a>
                                        <a href="" class="btn lr-btn lr-btn--grey">
                                            <span class="lr-btn__text">No</span>
                                        </a>
                                    </div>
                                    <p class="mb--0">Contact him directly through the app</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-section profile-section--personalinfo">
                        <h1 class="profile-section__title mb--25">Personal Information</h1>
                        <h4 class="profile-section__subtitle profile-section__subtitle--blue">The Need To Know</h4>

                        <div class="personalinfo personalinfo--summary">
                            <div class="personalinfo__icon"></div>
                            <div class="personalinfo__content">
                                <p>
                                    I am a down to earth person who rejoices in laughing and making people laugh. I
                                    believe in LIVE and Let LIVE philosphy. Acadamically I have done By mcom from
                                    reputed institute .I am currently working as Sr. Accounts officer in one of biggest
                                    French MNC and in the past I have worked with companies like Crew Bos an Riello
                                    Group i belong to well educated family and My family consists of my mother and my
                                    elder brother. Father expired in 2010 and was retired as More...
                                </p>
                            </div>
                        </div>
                        <!--Profession-->
                        <div class="personalinfo personalinfo--profession">
                            <div class="personalinfo__icon"></div>
                            <div class="personalinfo__content personalinfo__content--table">
                                <h3>Professional Information</h3>
                                <table class=".table">
                                    <tr>
                                        <td>Education</td>
                                        <td>MCom</td>
                                    </tr>
                                    <tr>
                                        <td>Employed In</td>
                                        <td>Private Sector</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Religion-->
                        <div class="personalinfo personalinfo--profession">
                            <div class="personalinfo__icon"></div>
                            <div class="personalinfo__content personalinfo__content--table">
                                <h3>Religion Information</h3>
                                <table>
                                    <tr>
                                        <td>Education</td>
                                        <td>MCom</td>
                                    </tr>
                                    <tr>
                                        <td>Employed In</td>
                                        <td>Private Sector</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="profile-section profile-section--preferences">
                        <h1 class="profile-section__title">His Partner Preferences</h1>
                        <div class="preference-match grid--flex">
                            <div class="preference-match__you">You</div>
                            <div class="preference-match__copy"></div>
                            <div class="preference-match__partner">Him/Her</div>
                        </div>
                        <h4 class="profile-section__subtitle profile-section__subtitle--grey">Basic Preferences</h4>
                        <table>
                            <tr>
                                <td>Bride's Age</td>
                                <td>18 - 35 Years</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 profile-area--sidebar">
                    <div class="profile-sidebar__suggestions">
                        <h2 class="profile-sidebar__title">View Similar Profiles</h2>
                        <h5 class="profile-sidebar__subtitle">We found 12 you might be interested in</h5>

                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>

                    <div class="profile-sidebar__interests">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection