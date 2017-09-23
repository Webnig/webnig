<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="author" content="LostRib"/>
    <meta name="keywords" content=""/>
    <meta http-equiv="robots" content="no index, no follow"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
    {{-- <script type="text/javascript" src="{{ asset('js/script.js') }}"></script> --}}
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="alternative icon" type="icon" href="{{  asset('images/logo.png') }}">
    {{-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> --}}
    <title>LostRib | Matches</title>
</head>
<body>
<nav class="navbar navbar-default login_nav">
    <div class="container-fluid">
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
        {{-- <div class="collapse navbar-collapse pull-right" id="myNavbar">
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
          </div> --}}
    </div>
</nav>

<div class="darkrose">
    Over 1,200,203 genuine users since 2006
</div>
<div id="desktop-content">
    <div class="matches">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-hidden col-xs-hidden col-md-2 col-lg-2 col-xl-2 matches-col-1">
                    <h3>Matches</h3>
                    <br>
                    <div class="matches-child-1">
                        <h5>Matches</h5>
                        <p>I am a</p>
                        <form role="form">
                            <select class=" form-control selectpicker show-menu-arrow" title="" data-live-search="true">
                                <option value="">Choose one</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>


                        </form>
                        <br>
                        <center style="font-size:12px;color:#848484">wishing to meet a</center>
                        <br>
                        <form role="form">
                            <select class=" form-control selectpicker show-menu-arrow" title="" data-live-search="true">
                                <option value="">Choose one</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                        </form>
                        <br>
                        <p>Age</p>
                        <div class="container">
                            <div class="row">
                                <form role="form">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <select class="form-control" placeholder="20" title="" data-live-search="true">
                                            <option value="">Select</option>
                                            <option value="">18</option>
                                            <option value="">19</option>
                                            <option value="">20</option>
                                            <option value="">21</option>
                                            <option value="">22</option>
                                            <option value="">23</option>
                                            <option value="">24</option>
                                            <option value="">25</option>
                                            <option value="">26</option>
                                            <option value="">27</option>
                                            <option value="">28</option>
                                            <option value="">29</option>
                                            <option value="">30</option>
                                            <option value="">31</option>
                                            <option value="">32</option>
                                            <option value="">33</option>
                                            <option value="">34</option>
                                            <option value="">35</option>
                                            <option value="">36</option>
                                            <option value="">37</option>
                                            <option value="">38</option>
                                            <option value="">39</option>
                                            <option value="">40</option>
                                        </select>
                                    </div>
                                </form>
                                <p style="padding:10px;padding-top:10px;padding-left:25px;padding-right:25px"> to </p>
                                <form>
                                    <select class="editable-box-1 form-control selectpicker show-tick show-menu-arrow"
                                            title="40" data-live-search="true">
                                        <option value="">Choose</option>
                                        <option value="">18</option>
                                        <option value="">19</option>
                                        <option value="">20</option>
                                        <option value="">21</option>
                                        <option value="">22</option>
                                        <option value="">23</option>
                                        <option value="">24</option>
                                        <option value="">25</option>
                                        <option value="">26</option>
                                        <option value="">27</option>
                                        <option value="">28</option>
                                        <option value="">29</option>
                                        <option value="">30</option>
                                        <option value="">31</option>
                                        <option value="">32</option>
                                        <option value="">33</option>
                                        <option value="">34</option>
                                        <option value="">35</option>
                                        <option value="">36</option>
                                        <option value="">37</option>
                                        <option value="">38</option>
                                        <option value="">39</option>
                                        <option value="">40</option>
                                    </select>

                                </form>
                            </div>
                        </div>
                        <br><br>
                        <p>Religion</p>
                        <form role="form">
                            <select class=" form-control selectpicker show-menu-arrow" title="" data-live-search="true">
                                <option value="">Choose one</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Islam">Islam</option>
                            </select>
                        </form>
                        <br><br>
                        <p>State of Origin</p>
                        <form role="form">
                            <select class=" form-control selectpicker show-menu-arrow" title="" data-live-search="true">
                                <option value=""></option>
                                <option value=""></option>
                            </select>

                        </form>
                        <br>
                        <p>Marital Status</p><br>
                        <form>
                            <input type="checkbox" name="marital-status" value="Marital Status" checked="true"
                                   id="marital-status"><label for="Marital Status" style="padding-left:15px">
                                Married</label><br>
                            <input type="checkbox" name="marital-status" value="Marital Status"
                                   id="marital-status"><label for="Marital Status" style="padding-left:15px">
                                Single</label>
                        </form>
                        <br><br>
                        <form role="form">
                            <center>
                                <a href="#">
                                    <button type="button" class="filter"> Filter</button>
                                </a>
                            </center>
                        </form>
                        <br><br>
                        <center>
                            <img src="{{ asset('assets/img/add.png') }}" height="250px" width="250px"
                                 class="img-responsive"/>
                        </center>
                    </div>
                </div>
                <div class="col-sm-hidden col-xs-hidden col-md-10 col-lg-10 col-xl-10 matches-col-2">
                    <div class="dropdown">

                        <span style="color:#989dac;padding-right:12px">Sort by relevance</span>
                        <button class="btn btn-default dropdown-toggle " type="button" data-toggle="dropdown">
                            <span class="caret" style="padding-right:20px">Relevance</span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <br><br>
                    <div class="pagination-1">
                        <span>
                            <span style="float:left;padding-left:32px">
                                <input type="checkbox" name="interest" checked="checked" value="Send interest to all"
                                       id="interest"><label for="Send interest ot all" style="padding-left:15px"> Send
                                    interest to all</label>
                            </span>
                            <div class="pagination" style="float:right;color:#4990e2;">
                                <li class="active"><a href="#" class="active">First</a></li>
                                <a href="#">&laquo;</a>
                                <li class="active"><a href="#" class="active">10</a></li>
                                <li class="active"><a href="#" class="active">11</a></li>
                                <li class="active"><a href="#" class="active"> ... </a></li>
                                <li class="active"><a href="#" class="active">25</a></li>
                                <li class="active"><a href="#" class="active">26</a></li>
                                <a href="#">&raquo;</a>
                                <li class="active"><a href="#" class="active">Last</a></li>
                            </div>
                        </span><br><br>
                        <div class="container" style="padding-right:-150px;padding-left:80px"><br><br>
                            <div class="row">
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher |
                                                Unversity of Lagos</p><a href="#"><input type="submit" class="button"
                                                                                         value="View Profile"
                                                                                         style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </center>
                                    </div>
                                    <br>
                                    <center
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px"><a
                                                href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>

                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher |
                                                Unversity of Lagos</p><a href="#"><input type="submit" class="button"
                                                                                         value="View Profile"
                                                                                         style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px"><a
                                                href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher |
                                                Unversity of Lagos</p><a href="#"><input type="submit" class="button"
                                                                                         value="View Profile"
                                                                                         style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px"><a
                                                href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container" style="margin-left:20px">
                            <div class="accepted-requests">
                                <img src="{{ asset('assets/img/clear.jpg') }}" height="150px" alt="BRAND" title="BRAND" width="150px"
                                     class="img img-circle pull-left"/>
                                <div class="accepted-requests-child">
                                    <center>
                                        <h3 style="font-family:;font-size: 22px;text-align:center;color: #848484;font-weight:bold;">
                                            AWESOME!</h3><br>
                                        <span style="color:#00b7cf;font-size:30px;font-weight:lighter">You have accepted Deles request</span><br>
                                        <span style="color:#838383;font-size:15px;">Take the next st12p to call him on 0802342####</span><br><br>
                                        <span><a href="tel:0802342####"><input type="submit" class="button"
                                                                               value="View Phone Number"
                                                                               style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a></span>
                                    </center>

                                </div>
                            </div>
                        </div>
                        <div class="container" style="padding-right:-150px;padding-left:80px"><br><br>
                            <div class="row">
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher |
                                                Unversity of Lagos</p><a href="#"><input type="submit" class="button"
                                                                                         value="View Profile"
                                                                                         style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px"><a
                                                href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>

                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher |
                                                Unversity of Lagos</p>
                                            <a href="#"><input type="submit" class="button" value="View Profile"
                                                               style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px"><a
                                                href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher |
                                                Unversity of Lagos</p><a href="#"><input type="submit" class="button"
                                                                                         value="View Profile"
                                                                                         style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px"><a
                                                href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container" style="padding-right:-150px;padding-left:80px"><br><br>
                            <div class="row">
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher |
                                                Unversity of Lagos</p><a href="#"><input type="submit" class="button"
                                                                                         value="View Profile"
                                                                                         style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px"><a
                                                href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>

                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher |
                                                Unversity of Lagos</p><a href="#"><input type="submit" class="button"
                                                                                         value="View Profile"
                                                                                         style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px"><a
                                                href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                        <center>
                                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher |
                                                Unversity of Lagos</p><a href="#"><input type="submit" class="button"
                                                                                         value="View Profile"
                                                                                         style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                                        </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px"><a
                                                href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                            </div>
                        </div>
                        <br>

                        <span><div class="pagination" style="float:right;color:#4990e2;">
                                <li class="active"><a href="#" class="active">First</a></li>
                                <a href="#">&laquo;</a>
                                <li class="active"><a href="#" class="active">10</a></li>
                                <li class="active"><a href="#" class="active">11</a></li>
                                <li class="active"><a href="#" class="active"> ... </a></li>
                                <li class="active"><a href="#" class="active">25</a></li>
                                <li class="active"><a href="#" class="active">26</a></li>
                                <a href="#">&raquo;</a>
                                <li class="active"><a href="#" class="active">Last</a></li>
                            </div></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="mobile-content">
    <div class="mobile-matches" style="padding-top:40px">
        <h3 style="font-size:;color:#686868;font-weight:bold">12 Matching Profiles</h3>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="view-profile" style="width:100%">
                        <center>
                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                            <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                    style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                            </div>
                        </center>
                    </div>
                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;"><a href="#">Send Mail</a>  |  <a
                                    href="#">Shortlist</a></span></center>
                    <br>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12 col-sm-6">
                    <div class="view-profile" style="width:100%">
                        <center>
                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                            <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                    style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                            </div>
                        </center>
                    </div>
                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;"><a href="#">Send Mail</a>  |  <a
                                    href="#">Shortlist</a></span></center>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="accepted-requests" style="background-color:#f4b2b2">
            <img src="images/client1.png" height="150px" alt="BRAND" title="BRAND" width="150px"
                 class="img img-responsive pull-left"/>
            <div class="accepted-requests-child">
                <center><h3 style="font-family:;font-size: 22px;text-align:center;color: white;font-weight:bold;">Share
                        your precious moments today!</h3><br>
                    <br><br>
                    <div><span><a href="#"><input type="submit" class="button" value="Add Photos"
                                                  style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a></span>
                    </div>
                </center>

            </div>
        </div>
    </div>
    <br><br>
    <div class="mobile-matches">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="view-profile" style="width:100%">
                        <center>
                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                            <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                    style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                            </div>
                        </center>
                    </div>
                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;"><a href="#">Send Mail</a>  |  <a
                                    href="#">Shortlist</a></span></center>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12 col-sm-6">
                    <div class="view-profile" style="width:100%">
                        <center>
                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                            <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                    style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                            </div>
                        </center>
                    </div>
                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;"><a href="#">Send Mail</a>  |  <a
                                    href="#">Shortlist</a></span></center>
                    <br>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="mobile-matches">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="view-profile" style="width:100%">
                        <center>
                            <img src="{{ asset('assets/img/blurred.jpg') }}" alt="Male" title="Member"
                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                            <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                    style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                            </div>
                        </center>
                    </div>
                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;"><a href="#">Send Mail</a>  |  <a
                                    href="#">Shortlist</a></span></center>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12 col-sm-6">
                    <div class="view-profile" style="width:100%">
                        <center>
                            <img src="{{ asset('assets/img/blurred.jpg') }}add" alt="Male" title="Member"
                                 style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p>
                            <p style="font-size:10px;">I am a nice and easygoing lady</p>
                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                            <div><a href="#"><input type="submit" class="button" value="View Profile"
                                                    style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white"/></a>
                            </div>
                        </center>
                    </div>
                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;"><a href="#">Send Mail</a>  |  <a
                                    href="#">Shortlist</a></span></center>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <center><span class="fa fa-5x fa-spinner" style="color:#00b7cf"></span></center>
</div>
<footer>
    <div class="copyright">
        <div class="footer-image">
            <center>
                {{-- <img src="{{ asset('images/logo-3x.png') }}" alt="LostRib Logo" width="150px"> --}}
                <img src="{{ asset('images/logo-2x.png') }}" alt="lost-rib" title="LostRib"
                     style="margin-top:30px;height:40px;width:100px;">
            </center>
        </div>
        <center class="copy-right" style="padding-bottom:20px;color:#3e6373;">&copy;Copyright 2017 | All Rights Reserved
        </center>
    </div>
</footer>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>