<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nimble English Boarding School</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Title Logo -->
  <link href="{{url('frontend/img/logo.jpg')}}" rel="icon">
  <link href="{{url('frontend/img/logo.jpg')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('frontend/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flexor - v4.10.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJlDSvXrnrnbcWnhzDJdRChxBXNDCstTPvzcxKPcZRmzgHbffshxkRHftbPkLmcwsnSmrWg">nimbleboardingschool@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>01-4956873</span></i>
        <i class="bi bi-geo-alt d-flex align-items-center ms-4"><span>Gongabu, Kathmandu</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="#services" class="scrollto">Admission Open</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      {{--  --}}
      <div class="logo">
        <a class="navbar-brand" href="#"> <img src="{{url('/frontend/img/logo.jpg')}}" alt="Logo" style="height: 100px; width: 50px; border-radius: 10px;"></a>
        <h6 class="text-center"><b>NEBS</b></h6>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar ">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Notices</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/login">Admin Login</a></li>
              <li><a href="{{ route('student_register') }}">Student Login</a></li>
              <li><a href="/teacher">Teacher Login</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

