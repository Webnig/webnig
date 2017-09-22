<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="author" content="LostRib" />
<meta name="keywords" content=""/>
<meta http-equiv="robots" content="no index, no follow" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<link rel="alternative icon" type="icon" href="{{  asset('images/logo.png') }}">
{{-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> --}}
<title>LOSTRIB  | Matches</title>
<script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
</script>
        <style type="text/css">
        @media only screen and (max-width:991px){
            #desktop-content{
                display:none;
            }
            #mobile-content{
                display:inline;
            }
            .accepted-requests{
                background-color:#f4b2b2;
            }
            .img{
                transform: rotate(-4deg);
            }
        }  
        @media only screen and (min-width:992px){
            #desktop-content{
                display:inline;
            }
            #mobile-content{
                display:none;
            }
        }
        @media only screen and (max-width:768px){
            #mobile-content{
                display:block;
            }
        }
            body{
                box-sizing: border-box;
}
            .body{
                height:auto;
                width:100%;
                padding-top:10px;
                padding-bottom:10px;
}
            .matches{
                height:auto;
                width:100%;
                padding-top:30px;
                padding-bottom:30px;
                padding-left:10px;
                padding-right:10px;
                background-color:white;
            }
            /*Copyright*/
            .copy-right{
                color:#000;
                padding-top:20px;
            }
            .copy-right > a{

            }
            .copy-right > a:hover{

            }   
            .matches-col-1{

            }
            .matches-col-2{
                padding-left:35px;
                padding-right:35px;
            }
            .matches-col-1 > h3 , .matches-col-2 > h3. .accepted-requests-child > h3{
                font-family:;
                font-size: 40px;
                text-align: center;
                color: #848484;
                font-weight:lighter;
            }
            .matches-col-1 > .matches-child-1 > h5 ,.matches-col-2 > .matches-child-2 > h5{
                font-family:;
                font-size: 20px;
                text-align: left;
                color: #848484;
                font-weight:lighter;
            }
            .matches-col-1 > .matches-child-1 > p,.matches-col-2 > .matches-child-2 > p{
                font-family:;
                font-size: 15px;
                text-align: left;
                color: #848c8d;
                font-weight:bold;
            }
            .matches-child-1{
                margin-right:-35px;
            }
            .editable-box{
                background:transparent;
                text-decoration:none;
                padding-left:10px;
                padding-right:3px;
                border:solid 1px #ccd1d9;
            }
            .editable-box:focus{
                background:transparent;
                text-decoration:none;
                padding-left:10px;
                padding-right:3px;
                border-color:;
                border:solid 1px #ccd1d9;
            }
            .editable-box-1{
                background:transparent;
                text-decoration:none;
                padding-left:10px;
                padding-right:3px;
                border-color:;
                width:80px;
                border:solid 1px #ccd1d9;
            }
            .editable-box-1:focus{
                background:transparent;
                text-decoration:none;
                padding-left:10px;
                padding-right:3px;
                border-color:;
                width:80px;
                border:solid 1px #ccd1d9;
            }
            .filter{
                color:white;
                font-size:25px;
                font-weight:lighter;
                letter-spacing:2px;
                background-color:#f26aa8;
                border-radius:10%;
                border-color:#f26aa8;
                padding-top:7px;
                border:solid 0.5px;
                padding-bottom:7px; 
                padding-right:40px;
                padding-left:40px;
                transition:0.3s all;
            }
            .filter:hover{
                color:#f26aa8;
                font-size:25px;
                font-weight:lighter;
                letter-spacing:2px;
                background-color:white;
                border-radius:10%;
                border-color:white;
                border:solid 0.5;
                padding-top:7px;
                padding-bottom:7px; 
                padding-right:30px;
                padding-left:50px;
                transition:0.3s all;
            }
            .dropdown{
                text-align: right;
            }
            .pagination{
                color:#4990e2;
            }
            .view-profile{
                height:auto;
                background-color:#f5f5f5;
                width:70%;
                border-radius:5%;
                padding-bottom:20px;
            }
            .accepted-requests{
                height:auto;
                width:100%;
                background-color:#e2f6f9;
                padding-top:30px;
                padding-bottom:20px;
                padding-left:20px;
                padding-right:20px;
            }
            .img{
                border-radius:50%;
            }
            .selectpicker{
                
            }
        </style>
    </head>
    <body>
        <header>
            
        </header>
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
                                <option data-tokens="Female">Female</option>
                                <option data-tokens="Male">Male</option>
                        </select>


                    </form><br>
                    <center style="font-size:12px;color:#848484">wishing to meet a</center>
                    <br>
                    <form role="form">
                        <select class=" form-control selectpicker show-menu-arrow" title="" data-live-search="true">
                                <option data-tokens="Male">Male</option>
                                <option data-tokens="Female">Female</option>
                        </select>

                    </form><br>
                    <p>Age</p>
                    <div class="container">
                        <div class="row">
                    <form role="form"> 
                        <select class="editable-box-1 form-control selectpicker show-menu-arrow" placeholder="20" title="" data-live-search="true">
                                <option data-tokens=""></option>
                                <option data-tokens="">18</option>
                                <option data-tokens="">19</option>
                                <option data-tokens="">20</option>
                                <option data-tokens="">21</option>
                                <option data-tokens="">22</option>
                                <option data-tokens="">23</option>
                                <option data-tokens="">24</option>
                                <option data-tokens="">25</option>
                                <option data-tokens="">26</option>
                                <option data-tokens="">27</option>
                                <option data-tokens="">28</option>
                                <option data-tokens="">29</option>
                                <option data-tokens="">30</option>
                                <option data-tokens="">31</option>
                                <option data-tokens="">32</option>
                                <option data-tokens="">33</option>
                                <option data-tokens="">34</option>
                                <option data-tokens="">35</option>
                                <option data-tokens="">36</option>
                                <option data-tokens="">37</option>
                                <option data-tokens="">38</option>
                                <option data-tokens="">39</option>
                                <option data-tokens="">40</option>
                        </select>
                    </form>
                                    <p style="padding:10px;padding-top:10px;padding-left:25px;padding-right:25px"> to </p>
                    <form>
                        <select class="editable-box-1 form-control selectpicker show-tick show-menu-arrow" title="40" data-live-search="true">
                                <option data-tokens=""></option>
                                <option data-tokens="">18</option>
                                <option data-tokens="">19</option>
                                <option data-tokens="">20</option>
                                <option data-tokens="">21</option>
                                <option data-tokens="">22</option>
                                <option data-tokens="">23</option>
                                <option data-tokens="">24</option>
                                <option data-tokens="">25</option>
                                <option data-tokens="">26</option>
                                <option data-tokens="">27</option>
                                <option data-tokens="">28</option>
                                <option data-tokens="">29</option>
                                <option data-tokens="">30</option>
                                <option data-tokens="">31</option>
                                <option data-tokens="">32</option>
                                <option data-tokens="">33</option>
                                <option data-tokens="">34</option>
                                <option data-tokens="">35</option>
                                <option data-tokens="">36</option>
                                <option data-tokens="">37</option>
                                <option data-tokens="">38</option>
                                <option data-tokens="">39</option>
                                <option data-tokens="">40</option>
                        </select>

                    </form>
                </div></div><br><br>
                    <p>Religion</p>
                    <form role="form">
                        <select class=" form-control selectpicker show-menu-arrow" title="" data-live-search="true">
                                <option data-tokens="Christianity">Christianity</option>
                                <option data-tokens="Islam">Islam</option>
                        </select>

                    </form><br><br>
                    <p>State of Origin</p>
                    <form role="form">
                        <select class=" form-control selectpicker show-menu-arrow" title="" data-live-search="true">
                                <option data-tokens=""></option>
                                <option data-tokens=""></option>
                        </select>

                    </form><br>
                    <p>Marital Status</p><br>
                    <form> 
                        <input type="checkbox" name="marital-status" value="Marital Status" checked="true" id="marital-status"><label for="Marital Status" style="padding-left:15px">  Married</label><br> 
                        <input type="checkbox" name="marital-status" value="Marital Status" id="marital-status"><label for="Marital Status" style="padding-left:15px">  Single</label> 
                    </form><br><br>
                    <form role="form">
                    <center>
                        <a href="#"><button type="button" class="filter"> Filter</button></a>
                    </center>
                    </form>
                    <br><br>
                <center>
                    <img src="images/add.png" height="250px" width="250px" class="img-responsive" />
                </center>
                    </div>
                    </div>
                    <div class="col-sm-hidden col-xs-hidden col-md-10 col-lg-10 col-xl-10 matches-col-2">
                        <div class="dropdown">

                             <span style="color:#989dac;padding-right:12px">Sort by relevance</span>     <button class="btn btn-default dropdown-toggle " type="button" data-toggle="dropdown">
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
                                    <input type="checkbox" name="interest" checked="true" value="Send interest to all" id="interest"><label for="Send interest ot all" style="padding-left:15px">  Send interest to all</label>
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
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                    </center>
                                    </div>
                                    <br>
                                    <center<span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>

                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                    </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                    </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                            </div>
                            </div>
                        <br>
                        <div class="container" style="margin-left:20px">
                        <div class="accepted-requests">
                            <img src="images/clear.jpg" height="150px" alt="BRAND" title="BRAND" width="150px" class="img img-circle pull-left" />
                            <div class="accepted-requests-child">
                                <center><h3 style="font-family:;font-size: 22px;text-align:center;color: #848484;font-weight:bold;">AWESOME!</h3><br>
                                <span style="color:#00b7cf;font-size:30px;font-weight:lighter">You have accepted Deles request</span><br>
                                <span style="color:#838383;font-size:15px;">Take the next st12p to call him on 0802342####</span><br><br>
                                <span><a href="tel:0802342####"><input type="submit" class="button" value="View Phone Number" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></span></center>

                            </div>
                        </div>
                        </div>
                        <div class="container" style="padding-right:-150px;padding-left:80px"><br><br>
                            <div class="row">
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                    </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>

                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                                            <a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                    </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                    </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                            </div>
                            </div>
                        <br>
                        <div class="container" style="padding-right:-150px;padding-left:80px"><br><br>
                            <div class="row">
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                    </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>

                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                    </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
                                </div>
                                <div class="col-xs-hidden col-sm-hidden col-md-4 col-lg-4 col-xl-4">
                                    <div class="view-profile">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                            <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a>
                                    </center>
                                    </div>
                                    <br>
                                    <span style="color:#00b7cf;font-weight:lighter;font-size:12px;padding-left:50px" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span>
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
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                                            <div><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div>
                                    </center>
                                    </div>
                                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span></center>
                                    <br>
                </div><div class="clearfix"></div>
                <div class="col-xs-12 col-sm-6">
                                        <div class="view-profile" style="width:100%">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                                            <div><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div>
                                    </center>
                                    </div>
                                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span></center><br>
                </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="accepted-requests" style="background-color:#f4b2b2">
                            <img src="images/client1.png" height="150px" alt="BRAND" title="BRAND" width="150px" class="img img-responsive pull-left" />
                            <div class="accepted-requests-child">
                                <center><h3 style="font-family:;font-size: 22px;text-align:center;color: white;font-weight:bold;">Share your precious moments today!</h3><br>
                <br><br>
                                <div><span><a href="#"><input type="submit" class="button" value="Add Photos" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></span></div>
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
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                                            <div><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div>
                                    </center>
                                    </div>
                                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span></center>
                </div><div class="clearfix"></div>
                <div class="col-xs-12 col-sm-6">
                                        <div class="view-profile" style="width:100%">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                                            <div><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div>
                                    </center>
                                    </div>
                                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span></center><br>
                </div>
                </div>
            </div><br>
        </div><div class="mobile-matches">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="view-profile" style="width:100%">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                                            <div><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div>
                                    </center>
                                    </div>
                                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span></center>
                </div><div class="clearfix"></div>
                <div class="col-xs-12 col-sm-6">
                                    <div class="view-profile" style="width:100%">
                                    <center>
                                        <img src="images/blurred.jpg" alt="Male" title="Member" style="height:80px;width:80px;margin-top:-15px;margin-right:-4px"/><br>
                                        <b style="font-size:12px;color:">Mat ID: 13609####</b>
                                            <p style="font-size:27px;font-family:;color:#00b7cf">Male, 28</p>
                                            <p style="font-size:12px;color:;">181cm | Christian | Abuja</p><p style="font-size:10px;">I am a nice and easygoing lady</p>
                                            <p style="color:#d1a55d;font-weight:lighter;font-size:12px">Teacher | Unversity of Lagos</p>
                                            <div><a href="#"><input type="submit" class="button" value="View Profile" style="border-radius: 12px;background-color: #00b7cf;border-color:#f26aa8;border:solid #00b7cf;color:white" /></a></div>
                                    </center>
                                    </div>
                                    <center><span style="color:#00b7cf;font-weight:lighter;font-size:12px;" ><a href="#">Send Mail</a>  |  <a href="#">Shortlist</a></span></center><br>
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
                <img src="images/lost-rib.png" alt="lost-rib" title="LOST - RIB " style="margin-top:30px;height:40px;width:100px;" >
            </center>
        </div>  
            <center class="copy-right" style="padding-bottom:20px;color:#3e6373;">&copy;Copyright 2017 | All Rights Reserved
            </center>
        </div>
    </footer>
    </body>
    </html>