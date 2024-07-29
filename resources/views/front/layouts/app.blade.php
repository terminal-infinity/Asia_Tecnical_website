<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Asia Technical Training Center</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/Asia.png') }} " />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/themefisher-font/style.css') }} ">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/lightbox2/css/lightbox.min.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/animate/animate.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  


</head>
<body id="body">

  <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!--
  End Preloader
  ==================================== -->

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <!-- logo -->
      <a class="navbar-brand logo" href="index.html">
        <img loading="lazy" class="logo-default" src="{{ asset('assets/images/logo.png') }} " alt="logo" />
        <img loading="lazy" class="logo-white" src="{{ asset('assets/images/logo-white.png') }} " alt="logo" />
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('about') }}">About Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('course') }}">Courses</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services <i class="tf-ion-chevron-down"></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach ($latestservice as $services)
              <li><a class="dropdown-item" href="{{ route('service_details', $services->id ) }}">{{$services->title }}</a></li>
              @endforeach
            </ul>
          </li>


          <li class="nav-item ">
            <a class="nav-link" href="notice.html">Notice</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>

          @if (Route::has('login'))

          @auth
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
          @else
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('register') }}">Registresion</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          @endauth
          @endif

        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>


@yield('main')


<footer id="footer" class="bg-one">
    <div class="top-footer">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <h3>Contact</h3>
            <p>Address: 149/9/C Sha Alibagh <br>Mirpur, Bangladesh. <br>Phone: 01681-769149 <br>Mail us: asiatechnical@yahoo.com <br>
              Saturday to Thursday, 9AM to 5PM
              </p>
          </div>
          <!-- End of .col-sm-3 -->
  
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <ul>
              <li>
                <h3>Our Services</h3>
              </li>
              <li><a href="service.html">Ui/Ux Design</a></li>
              <li><a href="service.html">Graphic Design</a></li>
              <li><a href="service.html">Web Design</a></li>
              <li><a href="service.html">Web Development</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->
  
          <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
            <ul>
              <li>
                <h3>Quick Links</h3>
              </li>
              <li><a href="about.html">About</a></li>
              <li><a href="service.html">Services</a></li>
              <li><a href="blog.html">Blogs</a></li>
              <li><a href="404.html">404</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->
  
          <div class="col-lg-3 col-md-6">
            <ul>
              <li>
                <h3>Connect with us Socially</h3>
              </li>
              <li><a href="https://www.facebook.com/themefisher/">Facebook</a></li>
              <li><a href="https://www.twitter.com/themefisher/">Twitter</a></li>
              <li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA">Youtube</a></li>
              <li><a href="https://www.github.com/themefisher/">Github</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->
  
        </div>
      </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
      <h5>&copy; Copyright 2020. All rights reserved.</h5>
      <h6>Design and Developed by <a href="https://themefisher.com/">Themefisher</a></h6>
    </div>
  </footer> <!-- end footer -->
  
  <!-- Main jQuery -->
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }} "></script>
  
  <!-- Bootstrap4 -->
  <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <!-- Parallax -->
  <script src="{{ asset('assets/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
  <!-- lightbox -->
  <script src="{{ asset('assets/plugins/lightbox2/js/lightbox.min.js') }}"></script>
  <!-- Owl Carousel -->
  <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
  <!-- filter -->
  <script src="{{ asset('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
  <!-- Smooth Scroll js -->
  <script src="{{ asset('assets/plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="{{ asset('assets/plugins/google-map/gmap.js') }} "></script>
  
  <!-- Custom js -->
  <script src="{{ asset('assets/js/script.js') }} "></script>
  
  </body>
  
  </html>
  