<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/')}}front/assets/img/favicon.png" rel="icon">
  <link href="{{asset('/')}}front/assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/')}}front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/')}}front/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{asset('/')}}front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('/')}}front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('/')}}front/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('/')}}front/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{asset('/')}}front/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/')}}front/assets/css/style.css" rel="stylesheet">
  {{-- <!-- Template Main SCSS File -->
  <link href="{{asset('/')}}front/assets/css/style.scss" rel="stylesheet"> --}}


  <!-- =======================================================
  * Template Name: Vesperr - v2.2.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    @include('front-end.includes.header')

  <!-- ======= Hero Section ======= -->
  @yield('body')

  @include('front-end.includes.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/')}}front/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/')}}front/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{asset('/')}}front/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('/')}}front/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('/')}}front/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{asset('/')}}front/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('/')}}front/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{asset('/')}}front/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/')}}front/assets/js/main.js"></script>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
