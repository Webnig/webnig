<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="alternative icon" type="icon" href="images/logo.png">
</head>

<body>
  <div class="container-fluid">
    <header role="banner" class="login-page__header">
      <a href="#">
        <img src="images/logo-3x.png" alt="">
      </a>
    </header>
    <main role="main">
      <div class="login login-bg">
        <div class="login-board">
          <div class="login-socials">
            <div class="social">
              <a href="#" class="social-btn large facebook">
                <i class="fa fa-facebook fa-2x  icon"></i> Login with Facebook</a>
              <a href="#" class="social-btn large twitter">
              <i class="fa fa-twitter fa-2x  icon"></i>Login with Twitter</a>
              <a href="#" class="social-btn large google">
              <i class="fa fa-google-plus fa-2x  icon"></i>Login with Google+</a>
            </div>
          </div>
          <div class="vertical-divider">
            <span class="vertical-divider-text has-ring">OR</span>
          </div>
          <div class="login-sign-in manual">
            <p>Sign in manually</p>
            <form action="" name="login-form" class="login-form">
              <div class="login-input">
                <label for="username" class="hidden">Username or email</label>
                <input type="text" name="username" placeholder="Username or email">
              </div>
              <div class="login-input">
                <label for="password" class="hidden">Password</label>
                <input type="password" name="password" placeholder="Password">
              </div>
              <div class="login-control">
                <div class="remember-me">
                  <input type="checkbox" id="checkbox" name="" class="hidden">
                  <label for="checkbox">
                    <span class=""></span> Remember me
                  </label>
                </div>
                <button type="submit" class="login__btn">
                  login
                </button>
              </div>
            </form>
            <div class="links">
              <a href="#" class="register">Register now</a>
              <a href="#">Forgot password?</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer role="complementary" class="login-page__footer">
      <div class="copyright"><p>&copy; Copyright 2017. All Rights Reserved.</p></div>
    </footer>
  </div>
  <script src="js/bundle.js"></script>
</body>

</html>
