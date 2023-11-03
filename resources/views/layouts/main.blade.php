<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="irstheme">

  <title> @lang('messages.topbar_name')</title>

  <link href="assets/css/themify-icons.css" rel="stylesheet">
  <link href="assets/css/flaticon.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="assets/css/owl.carousel.css" rel="stylesheet">
  <link href="assets/css/owl.theme.css" rel="stylesheet">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/slick-theme.css" rel="stylesheet">
  <link href="assets/css/swiper.min.css" rel="stylesheet">
  <link href="assets/css/owl.transitions.css" rel="stylesheet">
  <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- css other -->
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/btn-animation.css" rel="stylesheet">
  <link href="assets/css/button.css" rel="stylesheet">
  <link href="assets/css/gradient-text.css" rel="stylesheet">
  <link href="assets/css/portfolio-section.css" rel="stylesheet">
  <link href="assets/css/contact-pg-section.css" rel="stylesheet">
  <link href="assets/css/site-header.css" rel="stylesheet">
  <link href="assets/css/team-section-s2.css" rel="stylesheet">
  <link href="assets/css/back-to-top.css" rel="stylesheet">
  <link href="assets/css/lower-footer.css" rel="stylesheet">
  <link href="assets/css/slide-bg-image.css" rel="stylesheet">
  <link href="assets/css/testimonial-section.css" rel="stylesheet">
  <link href="assets/css/img-bg.css" rel="stylesheet">
  <link href="assets/css/hr-details.css" rel="stylesheet">




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
    @keyframes expandImage {
        0% {
          transform: scale(1);
        }
        20% {
          transform: scale(2);
        }
        40% {
          transform: scale(3);
        }
        80% {
          transform: scale(4);
        }
        100% {
          transform: scale(5);
        }
      }

      /* @keyframes rotateImage {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      } */

      .expanding-image {
        animation: expandImage 5s linear infinite, rotateImage 5s linear infinite;
      }
    </style>
<body>

  <!-- start page-wrapper -->
  <div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
        <div class="sk-cube-grid">
          <div class="sk-cub"  style="text-align: center">
              <img class="expanding-image" src="assets/images/logo/pc-logo-2.svg" alt="Loading Image" style="width: 30px">
              <br>
              <h3><font style="color: #127BBF">P</font><font style="color: #F2767A">C</font><font style="color: #EC1F27">E</font></h3>
            </div>
          {{-- <div class="sk-cube sk-cube1"></div>
          <div class="sk-cube sk-cube2"></div>
          <div class="sk-cube sk-cube3"></div>
          <div class="sk-cube sk-cube4"></div>
          <div class="sk-cube sk-cube5"></div>
          <div class="sk-cube sk-cube6"></div>
          <div class="sk-cube sk-cube7"></div>
          <div class="sk-cube sk-cube8"></div>
          <div class="sk-cube sk-cube9"></div> --}}
        </div>
      </div>
      <!-- end preloader -->


    <!-- Start header -->
    <x-topbar></x-topbar>
    <!-- Start header -->
    @yield('content')
    <!-- start site-footer -->

    <!-- start site-news -->
    <x-news></x-news>

    <x-footer></x-footer>
    <!-- end site-footer -->

  </div>
  <!-- end of page-wrapper -->



  <!-- All JavaScript files
    ================================================== -->
  <script type="text/javascript">
    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function() {
      window.location.href = url + "?lang=" + $(this).val();
    });
  </script>

  <script src="assets/js/app.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins for this template -->
  <script src="assets/js/jquery-plugin-collection.js"></script>

  <!-- Custom script for this template -->
  <script src="assets/js/script.js"></script>
</body>

</html>
