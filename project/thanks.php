<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sewa Norway - Dandiya For Sewa - Thank You Page</title>
  <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link href="assets/images/favicon.png" rel="icon">
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!-- Start Header Section -->
  <?php require_once './elements/header.php' ?>
  <!-- End Header Section -->
  <div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
      <div class="container py-lg-5 py-md-3">
        <h2 class="title">SEWA Norway</h2>
      </div>
    </section>
  </div>
  <!-- Home -->
  <!-- banner image bottom shape -->
  <div class="position-relative">
    <div class="shape overflow-hidden" style="top:-45px !important;">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor">
        </path>
      </svg>
    </div>
  </div>
  <!-- //banner image bottom shape -->
  <!--==========================
    Intro Section
  ============================-->
  <section class="clearfix" style="background:white;">
    <div class="container" style="padding-top:15px;">
      <div class="row about-container">
        <div class="col-lg-12 content order-lg-1 order-2" style="padding-top:60px; padding-bottom:20px; background:inherit;">
          <div class="icon-box wow fadeInUp">
            <div style="color:antiquewhite; margin-left:50px; text-align:center;">
              <h1 color=#342D67> THANK YOU <br> <br> WE WILL GET BACK IN 24 HOURS </h1>.
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/contact.JPG" class="img-fluid" alt="" style="border:10px solid white;">
          </div> -->
      </div>
    </div>
  </section><!-- #intro -->
  <main id="main" class="mob-con">
    <div class="container" style="text-align:center; margin-top:30px;">
      <a href="index.php">
        <span>
          <img width="100" height="100" style="margin-right:15px;" src="assets/images/home.png">
        </span>
        <span style="font-size:24px; margin-left:-20px;">Now let's go back home.</span>
      </a>
    </div>
  </main>
  <!-- Start Footer Section -->
  <?php require_once './elements/footer.php' ?>
  <!-- End Footer Section -->
  <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function() {
      $('.owl-one').owlCarousel({
        loop: true,
        dots: false,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: 1
          },
          667: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function() {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1
          },
          736: {
            items: 1
          },
          1000: {
            items: 2,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <script src="assets/js/counter.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });
    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->
  <!--bootstrap-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->
</body>

</html>