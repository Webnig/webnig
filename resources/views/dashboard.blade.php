<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="alternative icon" type="icon" href="{{ asset('images/logo.png') }}">
</head>

<body>
<div class="container-fluid">
    <header role="banner">
        <nav role="navigation">
            <div class="container">
                <div class="navbar">
                    <div class="brand">
                        <a href="#">
                            <img src="{{ asset('images/logo-3x.png') }}" alt="">
                        </a>
                    </div>
                    <div class="nav">
                        <ul class="navbar">
                            <li><a href="#" class="nav-link">Matches</a></li>
                            <li><a href="#" class="nav-link">Daily Matches</a></li>
                            <li><a href="#" class="nav-link">Premium</a></li>
                            <li><a href="#" class="nav-link">Upgrading</a></li>
                            <li><a href="#" class="nav-link">Help to the top</a></li>
                            <li><a href="#" class="nav-link">Search</a></li>
                        </ul>
                    </div>
                    <a href="" class="nav-link account">My Account</a>
                </div>
            </div>
        </nav>
        <div class="mini-activities">
            <div class="container">
                <div class="content">
                    <p>Over 1,200,203 genuine <span></span> users since 2006</p>
                    <p>
                        YESIMAMA
                        <span>just joined</span>
                    </p>
                    <div class="activity_views">
                        Recent Activites <span>In the last one hour</span>
                        <ul>
                            <li>1392 Messages Sent</li>
                            <li>1392 Profile Views</li>
                            <li>1392 Searches</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main role="main">
        <section class="user-profile">
            <div class="profile-banner profile-bg">
                <div class="container">
                    <div class="profile-board">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{ asset('images/profile-pic-3x.png') }}" alt=""
                                     class="img-circle img-responsive">
                            </div>
                            <div class="profile-details">
                                <div class="details">
                                    <h3 class="location">{{ $user->city.', '. $user->state }}</h3>
                                    <h2 class="name">{{ $user->first_name.' '. $user->last_name }}</h2>
                                    <p class="gender">{{ $user->gender }}, {{ $user->age }}
                                        <small>{{ $user->height }}cm</small>
                                    </p>
                                </div>
                                <div class="status">
                                    <form action="" name="status-form">
                                        <label for="status" class="hidden">What is on your mind</label>
                                        <input type="text" id="status" placeholder="What is on your mind?">
                                    </form>
                                </div>
                                <p class="likes">
                                    I am attracted to so many things …
                                </p>
                            </div>
                            <div class="extra-details">
                                <div class="mat-id">
                                    <small>Mat ID: {{ $user->mat_id }}</small>
                                </div>
                                <div class="info">
                                    <p>{{ $user->occupation }}</p>
                                    <p>University Of Lagos</p>
                                    <p>{{ $user->religion }}</p>
                                </div>
                                <div class="edit-settings">
                                    <a href="#">Edit Profile</a>
                                    <a href="#">Edit Preferences</a>
                                    <a href="#">Upgrade Membership</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="activities">
            <div class="container">
                <div class="activity-status">
                    <header>
                        <h3>ACTIVITY STATS IN THE LAST ONE MONTH</h3>
                    </header>
                    <div class="stats">
                        <div class="stat">
                            <p>{{ $profile_views }}</p>
                            <p>viewed your profile</p>
                        </div>
                        <div class="stat">
                            <p>{{ $admiredBy }}</p>
                            <p>admire you</p>
                        </div>
                        <div class="stat">
                            <p>{{ $matches }}</p>
                            <p>match your preferencee</p>
                        </div>
                        <div class="stat">
                            <p>{{ $admired }}</p>
                            <p>you admire</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="recent-activities">
            <div class="container">
                <div class="recent-activities__content">
                    <article class="latest-activity">
                        <header>
                            <h2>Latest Activity</h2>
                        </header>
                        <ul class="latest-activities">
                            <li class="activity">
                                <div class="activity__image">
                                    <img class="img img-responsive" src="{{ asset('images/bitmap.jpg') }}">
                                </div>
                                <div class="activity__content">
                                    <p><a href="#">Dele Asiwaju</a>, (34yrs, 178cm) accepted to view your Profile </p>
                                    <ul>
                                        <li><a href="#">Send Interest </a></li>
                                        <li><a href="#">View Profile</a></li>
                                        <li><a href="#">Upgrade to view profile</a></li>
                                    </ul>
                                </div>
                                <time>30min</time>
                            </li>
                            <li class="activity">
                                <div class="activity__image">
                                    <img class="img img-responsive" src="{{ asset('images/bitmap.jpg') }}">
                                </div>
                                <div class="activity__content">
                                    <p><a href="#">Dele Asiwaju</a>, (34yrs, 178cm) accepted to view your Profile </p>
                                    <ul>
                                        <li><a href="#">Send Interest </a></li>
                                        <li><a href="#">View Profile</a></li>
                                        <li><a href="#">Upgrade to view profile</a></li>
                                    </ul>
                                </div>
                                <time>30min</time>
                            </li>
                            <li class="activity">
                                <div class="activity__image">
                                    <img class="img img-responsive" src="{{ asset('images/bitmap.jpg') }}">
                                </div>
                                <div class="activity__content">
                                    <p><a href="#">Dele Asiwaju</a>, (34yrs, 178cm) accepted to view your Profile </p>
                                    <ul>
                                        <li><a href="#">Send Interest </a></li>
                                        <li><a href="#">View Profile</a></li>
                                        <li><a href="#">Upgrade to view profile</a></li>
                                    </ul>
                                </div>
                                <time>30min</time>
                            </li>
                            <li class="activity">
                                <div class="activity__image">
                                    <img class="img img-responsive" src="{{ asset('images/bitmap.jpg') }}">
                                </div>
                                <div class="activity__content">
                                    <p><a href="#">Dele Asiwaju</a>, (34yrs, 178cm) accepted to view your Profile </p>
                                    <ul>
                                        <li><a href="#">Send Interest </a></li>
                                        <li><a href="#">View Profile</a></li>
                                        <li><a href="#">Upgrade to view profile</a></li>
                                    </ul>
                                </div>
                                <time>30min</time>
                            </li>
                            <li class="activity">
                                <div class="activity__image">
                                    <img class="img img-responsive" src="{{ asset('images/bitmap.jpg') }}">
                                </div>
                                <div class="activity__content">
                                    <p><a href="#">Dele Asiwaju</a>, (34yrs, 178cm) accepted to view your Profile </p>
                                    <ul>
                                        <li><a href="#">Send Interest </a></li>
                                        <li><a href="#">View Profile</a></li>
                                        <li><a href="#">Upgrade to view profile</a></li>
                                    </ul>
                                </div>
                                <time>30min</time>
                            </li>
                            <li class="activity">
                                <div class="activity__image">
                                    <img class="img img-responsive" src="{{ asset('images/bitmap.jpg') }}">
                                </div>
                                <div class="activity__content">
                                    <p><a href="#">Dele Asiwaju</a>, (34yrs, 178cm) accepted to view your Profile </p>
                                    <ul>
                                        <li><a href="#">Send Interest </a></li>
                                        <li><a href="#">View Profile</a></li>
                                        <li><a href="#">Upgrade to view profile</a></li>
                                    </ul>
                                </div>
                                <time>30min</time>
                            </li>
                            <li class="activity">
                                <div class="activity__image">
                                    <img class="img img-responsive" src="{{ asset('images/bitmap.jpg') }}">
                                </div>
                                <div class="activity__content">
                                    <p><a href="#">Dele Asiwaju</a>, (34yrs, 178cm) accepted to view your Profile </p>
                                    <ul>
                                        <li><a href="#">Send Interest </a></li>
                                        <li><a href="#">View Profile</a></li>
                                        <li><a href="#">Upgrade to view profile</a></li>
                                    </ul>
                                </div>
                                <time>30min</time>
                            </li>
                        </ul>
                    </article>
                    <aside class="matches">
                        <div class="new-match">
                            <header>
                                <h2>New Matches</h2>
                                <p>We found <a href="">12</a> you might be interested in</p>
                            </header>
                            <div class="match">
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
                            <div class="match">
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
                        <div class="daily-match">
                            <header>
                                <h2>Daily Matches</h2>
                                <p>We found <a href="">3</a> you might be interested in</p>
                            </header>
                            <div class="match">
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
                            <div class="match">
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
                    </aside>
                </div>
            </div>
        </section>
        <section class="trend-activity">
            <div class="container">
                <div class="trends">
                    <div class="trends__content">
                        <div class="trend-recommandation">
                            <header>
                                <h2>Trending Recommendations</h2>
                            </header>
                            <div class="collection">
                                @foreach($randomUsers as $randomUser)
                                    <div class="match large">
                                        <div class="match__img">
                                            <img src="{{ asset('images/bitmap@3x.jpg') }}"
                                                 class="img img-responsive img-circle">
                                        </div>
                                        <div class="match__content">
                                            <p>Mat ID: {{ $randomUser->mat_id }}</p>
                                            <p>{{ $randomUser->gender. ', '. $randomUser->age }}</p>
                                            <p>{{ $randomUser->religion .' | '. $randomUser->state }}</p>
                                            <p>I am attracted to so many things …</p>
                                        </div>
                                        <button class="match__button">View Profile</button>
                                    </div>
                                @endforeach
                            </div>
                            <div class="trend__controls">
                                <div class="slider">
                                    <span class="selector active"></span>
                                    <span class="selector"></span>
                                </div>
                                <a href="#">View all (12)</a>
                            </div>
                        </div>
                        <div class="viewed-profile">
                            <header>
                                <h2>Viewed Your Profile in the last One Month</h2>
                            </header>
                            <div class="collection">
                                <div class="match large">
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
                                <div class="match large">
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
                                <div class="match large">
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
                            <div class="trend__controls">
                                <div class="slider">
                                    <span id="prev" class="selector active"></span>
                                    <span id="next" class="selector"></span>
                                </div>
                                <a href="#">View all (43)</a>
                            </div>
                        </div>
                    </div>
                    <div class="search">
                        <h2>Search</h2>
                        <form action="">
                            <div class="input">
                                <label for="">i am</label>
                                <select>
                                    <option value="female">female</option>
                                    <option value="male">male</option>
                                </select>
                            </div>
                            <div class="input">
                                <label for="">wishing to meet</label>
                                <select>
                                    <option value="female">female</option>
                                    <option value="male">male</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer role="complementary" style="padding-top: 10px"></footer>
</div>
</body>

</html>
