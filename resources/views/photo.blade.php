<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Add Photo</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="add-photo">
<header>
    <div class="photo__header">
        <nav>
            <div class="photo__navbar">
                <div class="menu-icon">
                    <div class="menu-bar"></div>
                    <div class="menu-bar"></div>
                    <div class="menu-bar"></div>
                </div>
                <div class="brand">
                    <a href="" class="brand">
                        <img src="images/logo-2x.png" alt="">
                        <img src="images/logo-3x.png" alt="">
                    </a>
                </div>
                <ul class="photo__main-nav">
                    <li>
                        <a href="#">My Accout</a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-comments-o fa-2x"></i>
                            <span class="message-counter">5</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main>
    <div class="photo">
        <div class="photo-bg"></div>
        <div class="photo-board">
            <div class="uploader">
                <h2>Add your photo and get much better responses!</h2>
                <form action="">
                    {{ csrf_field() }}
                    <label for="upload">
                        <input type="file" id="upload" class="hidden">
                        <img src="images/uploader-3x.png" alt="">
                    </label>
                </form>
                <p> Within 15 MB of size jpg / gif / png / bmp</p>
            </div>
            <div class="upload-controls">
                <div>
                    <div class="loader-control">
                        <p>Wait. Uploading your ID Card…</p>
                        <div class="loader">
                            <div class="loading"></div>
                        </div>
                    </div>
                    <div class="voice-note">
                        <p>Added Voicenote</p>
                        <a href="#"><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="horizontal-divider">
                <span class="horizontal-divider-text has-ring">OR</span>
            </div>
            <div class="upload-alternative">
                <div class="medium">
                    <div class="whatsapp">
                        <i class="fa fa-whatsapp fa-2x"></i>
                    </div>
                    <p>WhatsApp your photos to
                        <br>
                        <strong>+919360143100</strong>
                        <br> &amp; we will upload them instantly.</p>
                </div>
                <div class="medium">
                    <div class="photo-facebook">
                        <i class="fa fa-facebook fa-2x"></i>
                    </div>
                    <p>Select Photos from your Facebook account and upload.
                        <span>We'll never post anything on your wall</span></p>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="photo-page__footer">
        <div class="footer_content">
            <img src="images/logo-2x.png" alt="">
            <p>&copy; Copyright 2017. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<script src="bundle.js"></script>
</body>

</html>
