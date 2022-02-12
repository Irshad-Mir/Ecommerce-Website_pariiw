<?php
   
session_start();
require_once "./functions/admin.php";

?><!--
 * Author: Irshad Ahmad Mir
 * @version beta
-->
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Title -->
  <title>Pariiw.com - Buy || Sell || Rent Books Online</title>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Pariiw.com: JandK's Exhaustive Innovative Online Platform on which anyone can Buy, Sell & Rent - New || Old || Unused Academic, Competitive, Literature, Novels, Poetry, Science Fiction & many other Books. Free Shipping & COD Available."/>
   <!--keyword 25/1/19-->
  <meta name="Keywords" content="Pariiw.com, Pariiw, Online Shopping, online shopping, india, jandk, JammuandKashmir, jk, J&K, Jammu, Kashmir, Srinagar, Ladakh, india shopping online, jandk shopping online, jammuandkashmir shopping online, jk shopping online, J&K shopping online, jammu shopping online, kashmir shopping online, srinagar shopping online, ladakh shopping online, pariiw india, pariiw jammuandkashmir, pariiw jammu, pariiw kashmir, pariiw ladakh, pariiw srinagar, buy online, buy books online, buy used books online, buy new books online, rent books online, online shopping in jammuandkashmir, online shopping in jammu, online shopping in kashmir, online shopping in srinagar, online shopping in ladakh, Lalchowk, Jewel, SP college, Jkcet, Neet, Jee, Aiims, Entrance, bvpcet, bvp cet">
  <link rel="alternate" href="https://www.pariiw.com/" hreflang="en"/>
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
  <!--===-->
  <!-- Bing SEO -->
  <meta name="msvalidate.01" content="86F9A1CBC6AB65F5914FDEACAD05E685" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="logo.png">
  <!-- Google Fonts -->
  <link href="600.css" rel="stylesheet">
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/regular.js" integrity="sha384-V+AkgA1cZ+p3DRK63AHCaXvO68V7B5eHoxl7QVN21zftbkFn/sGAIVR7vmQL3Zhp" crossorigin="anonymous"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/brands.js" integrity="sha384-VLgz+MgaFCnsFLiBwE3ItNouuqbWV2ZnIqfsA6QRHksEAQfgbcoaQ4PP0ZeS0zS5" crossorigin="anonymous"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/fontawesome.js" integrity="sha384-treYPdjUrP4rW5q82SnECO7TPVAz4bpas16yuE9F5o7CeBn2YYw1yr5oC8s8Mf8t" crossorigin="anonymous"></script>
  <!-- CSS Compulsory -->
  <link rel="stylesheet" href="response.min.css">
  <!-- CSS Implementing-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="fontawesome-all.min.css">
  <link rel="stylesheet" href="animation.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="jquery.fancybox.css">
  <link rel="stylesheet" href="slick.css">
   <!-- CSS Main-->
  <link rel="stylesheet" href="main-min.css">
  <script src="jquery.mousewheel.min.js"> </script>
  <style type="text/css">
    .fa {
    font-size: 50%;
    width: 30px;
    text-decoration: none;
    border-radius: 50%;
    padding: 20px;
   </style>
  <!--Ajax Menu-->
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.css">
  <!-- ===Comodo Secure=== -->
  <script type="text/javascript"> //<![CDATA[ 
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
<!-- ===End Comodo Secure=== -->
<!-- ===Google AdSense=== -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3305541432376196",
    enable_page_level_ads: true
  });
</script>
<!-- ===End Google Adsense=== -->
</head>
<body>
  <!-- Skippy -->
  <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
      <span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- End Skippy -->
 
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--abs-top-md u-header--bg-transparent u-header--show-hide-md"
          data-header-fix-moment="500"
          data-header-fix-effect="slide">
    
      <div class="u-header__section">


      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar">
          <!-- Logo -->
          <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-top-space" aria-label="Front" href="https://www.pariiw.com">
            <img src="logo.png" width="65px;" alt="Pariiw.com Logo">
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button-->

          <button type="button" class="navbar-toggler btn u-hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse py-0">
            <ul class="navbar-nav u-header__navbar-nav ml-lg-auto">
<!--==============================BUY SECTION=============================================-->
             <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  
                  data-event="hover"
                  
                  data-animation-in="slideInUp"
                  
                  data-animation-out="fadeOut"
                  
                  data-position="left">
                
                <a id="homeMegaMenu" class="nav-link u-header__nav-link pl-0" href="get_orders.php"
                   
                   aria-haspopup="true"
                   
                   aria-expanded="false">
                  
                Order List
                  
                  <span class="fa fa-chevron-right" aria-hidden="true"></span>
                
                </a>
              </li>
                <!---BUY SECTION ENDS----->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  
                  data-event="hover"
                  
                  data-animation-in="slideInUp"
                  
                  data-animation-out="fadeOut"
                  
                  data-position="left">
                
                <a id="homeMegaMenu" class="nav-link u-header__nav-link pl-0" href="get_queries.php"
                   
                   aria-haspopup="true"
                   
                   aria-expanded="false">
                  
                  Queries Panel
                  
                  <span class="fa fa-chevron-right" aria-hidden="true"></span>
                
                </a>
              </li>

               

            <!-- ==========================================START ENTRANCE====================================================== -->

             

              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  
                  data-event="hover"
                  
                  data-animation-in="slideInUp"
                  
                  data-animation-out="fadeOut"
                  
                  data-position="left">
                
                <a id="homeMegaMenu" class="nav-link u-header__nav-link pl-0" href="send_mail.php"
                   
                   aria-haspopup="true"
                   
                   aria-expanded="false">
                  
                 Subcribers List

                  
                  <span class="fa fa-chevron-right" aria-hidden="true"></span>
                
                </a>
              </li>

              

              
            <!-- ========================================START UNDERGRADUATION======================================================== -->


              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  
                  data-event="hover"
                  
                  data-animation-in="slideInUp"
                  
                  data-animation-out="fadeOut"
                  
                  data-position="left">
                
                <a id="homeMegaMenu" class="nav-link u-header__nav-link pl-0" href="admin_add.php"
                   
                   aria-haspopup="true"
                   
                   aria-expanded="false">
                  
                  Add-New Book

                  
                  <span class="fa fa-plus-square" aria-hidden="true"></span>
                
                </a>
              </li>

               
            <!-- ========================================Competitive Graduation ======================================================== -->


              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  
                  data-event="hover"
                  
                  data-animation-in="slideInUp"
                  
                  data-animation-out="fadeOut"
                  
                  data-position="left">
                
                <a id="homeMegaMenu" class="nav-link u-header__nav-link pl-0" href="admin_signout.php"
                   
                   aria-haspopup="true"
                   
                   aria-expanded="false">
                  
                  Sign-out

                  
                  <span class="fa fa-chevron-right" aria-hidden="true"></span>
                
                </a>

               
              
              </li>             
<!-- End Button-->
            </ul>
          </div>
          <!--End Navigation-->
        </nav>
         <!--End Nav -->

      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->
<!-- ========== New Main Content 06/01/2019 ========== -->
  <main id="content" role="main">
    <!-- Hero v1 Section -->
<div class="u-hero-v1 u-space-3 container-fluid table-responsive">
<?php
require_once "./functions/database_functions.php";
$conn = db_connect();


    
    
$sql="select * from subscribers";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)){
	$email=$row['email'];
 $_SESSION['valid'] = true;
$_SESSION['admin']=true;
$_SESSION['user']='sajad';    
$_SESSION['admin']=$email;
    
?>



  <form method="post" action="mail.php" class="col-md-12" >
    <textarea class="bg-success" readonly rows="1" cols="50"><?php echo $row['email'];?></textarea>
    <textarea name="textarea" cols="100" rows="1"></textarea>
    <input type="submit" value="Send" class="btn btn-primary btn-sm mb-1">
</form>
<?php
}
?>
</div>
       
     
          
   
  </main>
 
  <footer>

 
    <hr>
<div class="container text-center u-space-1">
      <!-- Logo -->
      <a class="d-inline-block mb-2" aria-label="Front">
        <img src="logo.png" alt="Logo" style="width: 40px;">
      </a>
      <!-- End Logo -->
    <p class="small text-muted">&copy; 2017-2019 Pariiw Internet Private Ltd. All Rights Reserved.</p>
    </div>
    <!-- End Icon Blocks Section -->
    <!-- End Copyright-->
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Account Sidebar Navigation-->
  
  <aside id="sidebarContent" class="u-sidebar u-unfold--css-animation u-unfold--hidden" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-header-sidebar__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center pt-4 px-7">
            <button type="button" class="close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->
<!-- Title-->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Recover Password.</h2>
                    <p>Enter your email address and an email with instructions will be sent to you.</p>
                  </header>
                 <!-- End Forgot Password-->
              </form>
            </div>
          </div>
          <!-- End Content-->
        </div>


        <!-- Footer-->

        <footer class="u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="../pages/help.html">
                <i class="fa fa-info-circle"></i>
              </a>
            </li>
          </ul>


          <!-- SVG Background Shape -->

          <div class="position-absolute-bottom-0">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 300 126.5" style="margin-bottom: -25px; enable-background:new 0 0 300 126.5;" xml:space="preserve">
              <path class="u-fill-primary" opacity=".6" d="M0,58.9c0-0.9,5.1-2,5.8-2.2c6-0.8,11.8,2.2,17.2,4.6c4.5,2.1,8.6,5.3,13.3,7.1C48.2,73.3,61,73.8,73,69
                c43-16.9,40-7.9,84-2.2c44,5.7,83-31.5,143-10.1v69.8H0C0,126.5,0,59,0,58.9z"/>
              <path class="u-fill-primary" d="M300,68.5v58H0v-58c0,0,43-16.7,82,5.6c12.4,7.1,26.5,9.6,40.2,5.9c7.5-2.1,14.5-6.1,20.9-11
                c6.2-4.7,12-10.4,18.8-13.8c7.3-3.8,15.6-5.2,23.6-5.2c16.1,0.1,30.7,8.2,45,16.1c13.4,7.4,28.1,12.2,43.3,11.2
                C282.5,76.7,292.7,74.4,300,68.5z"/>
              <circle class="u-fill-danger" cx="259.5" cy="17" r="13"/>
              <circle class="u-fill-primary" cx="290" cy="35.5" r="8.5"/>
              <circle class="u-fill-success" cx="288" cy="5.5" r="5.5"/>
              <circle class="u-fill-warning" cx="232.5" cy="34" r="2"/>
            </svg>

          </div>
          <!-- End SVG Background Shape -->

          <!--===============mcafee=============-->
          <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
          <!---============================================-->

        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 35.5, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="jquery.min.js"></script>
  <script src="jquery-migrate.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="hs.megamenu.js"></script>
  <script src="jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="jquery.validate.min.js"></script>
  <script src="jquery.fancybox.min.js"></script>
  <script src="typed.min.js"></script>
  <script src="slick.js"></script>

  <!-- JS Front -->
  <script src="hs.core.js"></script>
  <script src="hs.header.js"></script>
  <script src="hs.unfold.js"></script>
  <script src="hs.focus-state.js"></script>
  <script src="hs.malihu-scrollbar.js"></script>
  <script src="hs.validation.js"></script>
  <script src="hs.fancybox.js"></script>
  <script src="hs.slick-carousel.js"></script>
  <script src="hs.show-animation.js"></script>
  <script src="hs.go-to.js"></script>
      <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');


      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>

 
  <!--======comodo======-->
  <script language="JavaScript" type="text/javascript">
TrustLogo("https://www.pariiw.com/comodo_secure_seal_76x26_transp.png", "CL2", "none");
</script>
  <!--======end comodo======-->
</body>


 <!--======================DMCA CERTIFICATE==============-->
<a href="//www.dmca.com/Protection/Status.aspx?ID=903fc2ac-79c8-4401-a328-51e7a629c11c" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120l.png?ID=903fc2ac-79c8-4401-a328-51e7a629c11c"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
</html>
