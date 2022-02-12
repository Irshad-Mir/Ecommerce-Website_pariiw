
<?php
session_start();
?><!--
 * Author: Irshad Ahmad Mir
 * @version beta
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Signin | Pariiw </title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--favicon-->
    <link rel="icon" href="logo.png" style="image-rendering: auto;
    image-rendering: crisp-edges;">
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127459006-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127459006-1');
</script>
    <!-- GOOGLE SEO-->
  <meta name="google-site-verification" content="umK0dkAe6-ysR_g_CSxEQu2wafc_gvdOJb52oIhT0p8" />
  <!-- Bing SEO -->
  <meta name="msvalidate.01" content="86F9A1CBC6AB65F5914FDEACAD05E685" />
  <!-- Google Fonts 
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">-->
  <link href="600.css" rel="stylesheet">

 <!-- CSS Compulsory -->
  <link rel="stylesheet" href="response.min.css">
  <!-- CSS Implementing-->
  <link rel="stylesheet" href="fontawesome-all.min.css">
  <link rel="stylesheet" href="animation.css">
  <link rel="stylesheet" href="slick.css">

  <!-- CSS Main-->
  <link rel="stylesheet" href="main-min.css">
</head>

<body>
  <!-- Skippy -->
  <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
      <span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- End Skippy -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative min-height-100vh--lg">
      <!-- Navbar -->
      <header class="position-absolute-top-0 z-index-2">
        <nav class="d-flex justify-content-between align-items-center">
          <!-- Logo -->
          <div class="col-lg-5 col-xl-4 text-lg-center px-0">
            <a class="d-inline-block p-3 p-sm-5" href="https://www.pariiw.com" aria-label="Front">
              <img class="d-none d-lg-inline-block" src="logo.png" alt="Logo" style="width: 60px;">
              <img class="d-inline-block d-lg-none" src="logo.png" alt="Logo" style="width: 60px;">
            </a>
          </div>
          <!-- End Logo -->
        </nav>
      </header>
      <!-- End Navbar -->

      <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center u-gradient-half-primary-v1 min-height-100vh--lg px-0">
        <div class="w-100 p-5">
          <!-- SVG Quote -->
          <figure class="mb-5 mx-auto" style="width: 45px;">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
              <path class="u-fill-white" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
            </svg>
          </figure>
          <!-- End SVG Quote -->

          <!-- Testimonials Carousel Main -->
          <div id="testimonialsNavMain" class="js-slick-carousel u-slick mb-4"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-fade="true"
               data-nav-for="#testimonialsNavPagination">
            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">Team is doing very well and offers quite a large set of options. Keep it up!</blockquote>
                <h1 class="h6 u-text-light">Habil, Student</h1>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">It's beautiful. Thumbs up!</blockquote>
                <h2 class="h6 u-text-light">Irshad, Student</h2>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">I love Pariiw! I love the ease of use...</blockquote>
                <h3 class="h6 u-text-light">Vivek, Student</h3>
              </div>
              <!-- End Testimonials -->
            </div>

             <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">I visited your web site today and found it very interesting and well done. I can tell you have put a lot of work into it.</blockquote>
                <h4 class="h6 u-text-light">Towseef, Student</h2>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">Your site is exactly what I have looking for!!</blockquote>
                <h5 class="h6 u-text-light">Hilal, Student</h2>
              </div>
              <!-- End Testimonials -->
            </div>

          </div>
          <!-- End Testimonials Carousel Main -->

          <!-- Testimonials Carousel Pagination -->
          <div id="testimonialsNavPagination" class="js-slick-carousel u-slick u-slick--transform-off u-slick--pagination-modern mx-auto"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-center-mode="true"
               data-slides-show="3"
               data-is-thumbs="true"
               data-focus-on-select="true"
               data-nav-for="#testimonialsNavMain">
            <div class="js-slide">
              <img class="u-avatar rounded-circle mx-auto" src="/demand/img11.jpg" alt="Avatar">
            </div>

            <div class="js-slide">
              <img class="u-avatar rounded-circle mx-auto" src="/demand/img11.jpg" alt="Avatar">
            </div>

            <div class="js-slide">
              <img class="u-avatar rounded-circle mx-auto" src="/demand/img11.jpg" alt="Avatar">
            </div>

             <div class="js-slide">
              <img class="u-avatar rounded-circle mx-auto" src="/demand/img11.jpg" alt="Avatar">
            </div>
            
             <div class="js-slide">
              <img class="u-avatar rounded-circle mx-auto" src="/demand/img11.jpg" alt="Avatar">
            </div>

          </div>
          <!-- End Testimonials Carousel Pagination -->
        </div>
      </div>

      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 u-space-3 u-space-0--lg">
            <!-- Form -->
            <form class="js-validate mt-5" action="signinprocess.php" method="post">
              <!-- Title -->
              <div class="mb-7">
                <h2 class="h3 text-primary font-weight-normal mb-0">Welcome <span class="font-weight-bold">back</span></h2>
                <p>Login to manage your account.</p>
              </div>
              <!-- End Title -->

              <!-- Input -->
              <div class="js-form-message mb-4">
                <label class="h6 small d-block text-uppercase">Email address</label>

                <div class="js-focus-state input-group u-form">
                  <input type="email" class="form-control u-form__input" name="email"required
                         placeholder="abc@email.com"
                         aria-label="abc@email.com"
                         data-msg="Please enter a valid email address."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
              </div>
              <!-- End Input -->

              <!-- Input -->
              <div class="js-form-message mb-4">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="h6 small d-block text-uppercase">Password</label>

                  <div class="mb-2">
                    <a class="small u-link-muted" href="forgot_password.php">Forgot Password?</a>
                  </div>
                </div>

                <div class="js-focus-state input-group u-form">
                  <input type="password" class="form-control u-form__input" name="password" required
                         placeholder="********"
                         aria-label="********"
                         data-msg="Your password is invalid. Please try again."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                </div>
              </div>
              <!-- End Input -->

              <!-- Button -->
              <div class="row align-items-center mb-5">
                <div class="col-6">
                  <span class="small text-muted">Don't have an account?</span>
                  <a class="small" href="signup.php">Signup</a>
                </div>

                <div class="col-6 text-right">
                  <button type="submit" class="btn btn-primary u-btn-primary transition-3d-hover">Get Started</button>
                </div>
              </div>
                
              <!-- End Button -->
                <p class="mt-5 mb-3 text-muted">&copy; 2020 Pariiw Pvt Ltd. All Rights Reserved.</p>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- JS Global Compulsory -->
  <script src="jquery.min.js"></script>
  <script src="jquery-migrate.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="jquery.validate.min.js"></script>
  <script src="slick.js"></script>

  <!-- JS Front -->
  <script src="hs.core.js"></script>
  <script src="hs.validation.js"></script>
  <script src="hs.focus-state.js"></script>
  <script src="hs.slick-carousel.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();
    });
  </script>
</body>
</html>
<?php
session_destroy();
?>