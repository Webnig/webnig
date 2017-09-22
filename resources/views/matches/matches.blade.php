@extends('layouts.app')

@section('title', 'Matches | LostRib')

@section('extra_page_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/matches.css') }}">
@endsection

@section('content')
    <div class="container container-full">
        <div class="row">
            <div class="landing">
                <div class="col-md-2">
                    <h1 class="matches-text">Matches</h1>
                </div>
                <div class="col-md-offset-8">
                    <div class="row">
                        <div class="col-md-4 sort_profile">
                            <span>Sort profiles By:</span>
                        </div>
                        <div class="col-md-">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                    Relevance
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Matches</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <h3>Matches</h3>
                </div>

                <div class="row">
                    <strong>I am a</strong>
                </div>
                <div class="row top-buffer">
                    <select class="input-medium" id="sel1">
                        <option>Female</option>
                        <option>Male</option>
                    </select>
                </div>
                <div class="row top-buffer-small">
                    <p class="text-center input-medium">Wishing to meet a</p>
                </div>
                <div class="row top-buffer-small">
                    <select class="input-medium" id="sel2">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="row top-buffer">
                    <strong>Age</strong>
                </div>
                <div class="row top-buffer-small input-medium">
                    <div class="col-md-4">
                        <select class="" id="sel3">
                            <option>18</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <p>to</p>
                    </div>
                    <div class="col-md-4">
                        <select class="" id="sel4">
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                            <option>40</option>
                        </select>
                    </div>
                </div>
                <div class="row top-buffer">
                    <strong>Religion</strong>
                </div>
                <div class="row top-buffer-small">
                    <select class="input-medium" id="sel5">
                        <option>Select one</option>
                        <option>Christianity</option>
                        <option>Islamic</option>
                    </select>
                </div>
                <div class="row top-buffer">
                    <strong>State of Origin</strong>
                </div>
                <div class="row top-buffer-small">
                    <select class="input-medium" id="sel6">
                        <option>Select one</option>
                        <option>ABUJA FCT</option>
                        <option>ABIA</option>
                        <option>ADAMAWA</option>
                        <option>AKWA IBOM</option>
                        <option>ANAMBRA</option>
                        <option>BAUCHI</option>
                        <option>BAYELSA</option>
                        <option>BENUE</option>
                        <option>BORNO</option>
                        <option>CROSS RIVER</option>
                        <option>DELTA</option>
                        <option>EBONYI</option>
                        <option>EDO</option>
                        <option>EKITI</option>
                        <option>ENUGU</option>
                        <option>GOMBE</option>
                        <option>IMO</option>
                        <option>JIGAWA</option>
                        <option>KADUNA</option>
                        <option>KANO</option>
                        <option>KATSINA</option>
                        <option>KEBBI</option>
                        <option>KOGI</option>
                        <option>KWARA</option>
                        <option>LAGOS</option>
                        <option>NASSARAWA</option>
                        <option>NIGER</option>
                        <option>OGUN</option>
                        <option>ONDO</option>
                        <option>OSUN</option>
                        <option>OYO</option>
                        <option>PLATEAU</option>
                        <option>RIVERS</option>
                        <option>SOKOTO</option>
                        <option>TARABA</option>
                        <option>YOBE</option>
                        <option>ZAMFARA</option>
                    </select>
                </div>
                <div class="row top-buffer">
                    <strong>Marital Status</strong>
                </div>
                <div class="row top-buffer-small">
                    <div class="radio">
                        <label><input type="radio" name="mstatus">Married</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mstatus">Single</label>
                    </div>
                </div>
                <div class="row top-buffer btn-lg">
                    <button type="button" class="btn btn-info filter">Filter</button>
                </div>

                <div class="row top-buffer">
                    <img src="{{ asset('assets/img/add.png') }}" width="150px" height="150px">
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox">Send Interest to all</label>
                        </div>
                    </div>

                    <div class="col-md-offset-9">
                        <ul class="pagination pagination-lg">
                            <li><a href="#">First</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Last</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>

                </div>


                <div class="row top-buffer bottom-buffer">
                    <div class="col-md-9 noti">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/img2.png') }}" class="circle center-block">
                        </div>
                        <div class="col-md-9 center-block">
                            <div class="row">
                                <p class="text-center top-buffer awesome">AWESOME!</p>
                            </div>
                            <div class="row">
                                <p class="accepted text-center">You have accepted Dele's Request</p>
                            </div>
                            <div class="row">
                                <p class="next-step text-center">Take the next step and call him on 0802342####</p>
                            </div>
                            <div class="row">
                                <button type="button" class="center-block btn btn-info send">View Phone Number</button>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row top-buffer">
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>

                </div>
                <div class="row top-buffer">
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>

                </div>
                <div class="row top-buffer">
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="row row-small-margin">
                                <img src="{{ asset('assets/img/img2.png') }}" class="profile-image img-circle center-block"
                                     alt="Cinque Terre" width="75" height="75">
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center matid">Mat-ID-133609</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center sage">Male, 26</p>
                            </div>
                            <div class="row row-small-margin">
                                <p class="text-center specs">181cm | Muslim | Kano</p>
                            </div>
                            <div class="row">
                                <p class="text-center pspecs">Teacher | University of Lagos</p>
                            </div>
                            <div class="row">`
                                <p class="text-center attr">I am attracted to so many things.</p>
                            </div>
                            <div class="row btn center-block">
                                <button type="button" class="btn btn-info send">Send Interest</button>
                            </div>
                        </div>


                        <div class="row center-block">
                            <a href="" class="col-md-5 sendmail">Send Mail</a>
                            <p class="col-md-2">|</p>
                            <a href="" class="col-md-5 sendmail">Shortlist</a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-offset-9">
                        <ul class="pagination pagination-lg">
                            <li><a href="#">First</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Last</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>

        <div class="row">
            <hr/>
        </div>
        <div class="row">
            <img class="center-block" src="{{ asset('assets/img/logo.jpg') }}') }}">
        </div>
        <div class="row">
            <div class="well-sm well-white text-center">
                <h4>&copy; Copyright {{ date('Y') }}. All Rights Reserved.</h4>
            </div>
        </div>


    </div>
@endsection