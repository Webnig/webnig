@extends('layout.layout')

@section('content')
    <main class="homepage">
        <section class="add-me">
            <div class="container">
                <div class="add-me__container">
                    <div class="add-image">
                        <img src="{{ asset('images/add-me-3x.png') }}" class="img img-responsive">
                    </div>
                    <div class="add-me__content">
                        <div class="collection owl-carousel">
                            <div class="match ">
                                <div class="match__img">
                                    <img src="{{ asset('images/bitmap@3x.jpg') }}"
                                         class="img img-responsive img-circle">
                                </div>
                                <div class="match__content">
                                    <p>Mat ID: 133609####</p>
                                    <p>Male, 26</p>
                                    <p>Muslim | Kano</p>
                                    <p>I am attracted to so many things …</p>
                                </div>
                                <button class="match__button">View Profile</button>
                            </div>
                            <div class="match ">
                                <div class="match__img">
                                    <img src="{{ asset('images/bitmap@3x.jpg') }}"
                                         class="img img-responsive img-circle">
                                </div>
                                <div class="match__content">
                                    <p>Mat ID: 133609####</p>
                                    <p>Male, 26</p>
                                    <p>Muslim | Kano</p>
                                    <p>I am attracted to so many things …</p>
                                </div>
                                <button class="match__button">View Profile</button>
                            </div>
                            <div class="match ">
                                <div class="match__img">
                                    <img src="{{ asset('images/bitmap@3x.jpg') }}"
                                         class="img img-responsive img-circle">
                                </div>
                                <div class="match__content">
                                    <p>Mat ID: 133609####</p>
                                    <p>Male, 26</p>
                                    <p>Muslim | Kano</p>
                                    <p>I am attracted to so many things …</p>
                                </div>
                                <button class="match__button">View Profile</button>
                            </div>
                            <div class="match ">
                                <div class="match__img">
                                    <img src="{{ asset('images/bitmap@3x.jpg') }}"
                                         class="img img-responsive img-circle">
                                </div>
                                <div class="match__content">
                                    <p>Mat ID: 133609####</p>
                                    <p>Male, 26</p>
                                    <p>Muslim | Kano</p>
                                    <p>I am attracted to so many things …</p>
                                </div>
                                <button class="match__button">View Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="sliders">
                        <div class="slider">
                            <span class="selector active"></span>
                            <span class="selector"></span>
                            <span class="selector "></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="finder finder-bg">
            <div class="container vertical-center">
                <div class="vertical-center">
                    <div class="finder-content">
                        <h1>Your soulmate is only a click away</h1>
                        <form action="">
                            <label for="search" class="hidden">
                                Search by location or matrimony ID
                            </label>
                            <div class="search-input">
                                <input id="search" type="search" placeholder="Search by location or matrimony ID">
                                <button type=""><i class="fa fa-search fa-2x"></i></button>
                            </div>

                        </form>
                        <p>Want an invite? Click <a href="">here</a> to get started</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="meet-up">
            <div class="container">
                <header class="meet-up__header">
                    <div class="horizontal-divider divider-c">
            <span class="horizontal-divider-text t-lg">
                 Everyone else willing to meet you
            </span>
                    </div>
                </header>
                <div class="meet-up__chooser">
                    <div>
                        <form action="">
                            <label for="">
                                from period
                                <select name="" id="">
                                    <option value="Last month">last month</option>
                                </select>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="meet-up__matches">
                    <div class="collection">
                        <div class="match">
                            <div class="match__img">
                                <img src="images/bitmap@3x.jpg" class="img img-responsive img-circle">
                            </div>
                            <div class="match__content">
                                <p>Mat ID: 133609####</p>
                                <p>Male, 26</p>
                                <p>Muslim | Kano</p>
                                <p>I am attracted to so many things …</p>
                            </div>
                            <button class="match__button">View Profile</button>
                        </div>
                        <div class="match">
                            <div class="match__img">
                                <img src="images/bitmap@3x.jpg" class="img img-responsive img-circle">
                            </div>
                            <div class="match__content">
                                <p>Mat ID: 133609####</p>
                                <p>Male, 26</p>
                                <p>Muslim | Kano</p>
                                <p>I am attracted to so many things …</p>
                            </div>
                            <button class="match__button">View Profile</button>
                        </div>
                        <div class="match">
                            <div class="match__img">
                                <img src="images/bitmap@3x.jpg" class="img img-responsive img-circle">
                            </div>
                            <div class="match__content">
                                <p>Mat ID: 133609####</p>
                                <p>Male, 26</p>
                                <p>Muslim | Kano</p>
                                <p>I am attracted to so many things …</p>
                            </div>
                            <button class="match__button">View Profile</button>
                        </div>
                        <div class="match">
                            <div class="match__img">
                                <img src="images/bitmap@3x.jpg" class="img img-responsive img-circle">
                            </div>
                            <div class="match__content">
                                <p>Mat ID: 133609####</p>
                                <p>Male, 26</p>
                                <p>Muslim | Kano</p>
                                <p>I am attracted to so many things …</p>
                            </div>
                            <button class="match__button">View Profile</button>
                        </div>
                    </div>
                </div>
                <!-- <div> -->
                <div class="paginator horizontal-center">
                    <button>
                        <i class="fa fa-caret-left"></i>
                    </button>
                    <span>10</span>
                    <span> of <a href="#">4, 127</a></span>
                    <button class="active">
                        <i class="fa fa-caret-right"></i>
                    </button>
                </div>
            </div>
            <!-- </div> -->
        </section>
        <section class="how-it-works hiw hiw-bg">
            <div class="container">
                <div class="hiw-container">
                    <div class="hiw-content">
                        <h2>How it works</h2>
                        <ul>
                            <li>
                                <h3>Create a Simple Private</h3>
                                <p>
                                    Profile Create your private profile. Then once you find a Profile that appeals to
                                    you.
                                    Please click on show interest.
                                </p>
                            </li>
                            <li>
                                <h3>Tell Us What Makes You</h3>
                                <p>
                                    Tick All new matches and clients are ally screened. We'll develop your profile by
                                    mining
                                    the depths of your romantic
                                    wish list every time we link you to your "LostRib."
                                </p>
                            </li>
                            <li>
                                <h3>We Carefully Select Your Matches</h3>
                                <p>
                                    No heartless number exchanges, fast food dates or awkward group lunches here,
                                    people!
                                    Every match is approved by human beings
                                    not algorithms.
                                </p>

                            </li>
                        </ul>
                        <a href="#" class="">
                            Get started!
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="love-story ls-bg">
            <div class="container">
                <div class="ls-content">
                    <h2>Love Stories</h2>
                    <p>Because this is what it's all about. Read what our clients have to say about us and their
                        experiences.</p>
                    <div class="ls-comment">
                        <img src="images/gift.png" class="img img-circle" alt="">
                        <blockquote>
                            <p>
                                "My matchmaker has set up outstanding dates. The locations have been interesting and the
                                people were good matches. She checks
                                in frequently and provided excellent follow-up."
                            </p>
                            <p>Bayo A.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

