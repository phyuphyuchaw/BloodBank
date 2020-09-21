<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Blood Bank</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="0">
  <div class="py-1 bg-danger top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
              <span class="text">+0977783499</span>
            </div>
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
              <span class="text">bloodbank@gmail.com</span>
            </div>
            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
              {{-- <p class="mb-0 register-link"><a href="{{route('login')}}">Login</a>  |<a href="{{route('register')}}" class="mr-3">Register</a></p> --}}
              <div class="col-lg-4 col-10">
                @role('Donor')
                <span classs="float-right d-xl-block d-lg-block d-md-block d-none">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle loginLink" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </span>
              @else
              <span classs="float-right d-xl-block d-lg-block d-md-block d-none">
                <a href="{{route('loginpage')}}" class="text-decoration-none loginLink"> Login </a> | <a href="{{route('registerpage')}}"r class="text-decoration-none loginLink"> Sign-up </a>
              </span>
              @endrole
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark  ftco-navbar-light site-navbar-target" id="ftco-navbar">
  <img src="">
  <div class="container">
    <a class="navbar-brand text-danger" href="{{route('homepage')}}">Blood Bank</a>
    <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav nav ml-auto">
        <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link"><span class="text-danger">Home</span></a></li>
        <li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link"><span class="text-danger">About</span></a></ li>
          <li class="nav-item"><a href="{{route('donorinfopage')}}" class="nav-link"><span class="text-danger">Donor Info</span></a></li>
          <li class="nav-item"><a href="{{route('blogpage')}}" class="nav-link"><span class="text-danger">Blog</span></a></li>
          <li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link"><span class="text-danger">Contact</span></a></li>
        </ul>
      </div>
    </div>
  </nav>




  @yield('content')

  <footer class="ftco-footer ftco-section img" style="background-image: url(images/footer-bg.jpg);">
    <div class="overlay"></div>
    <div class="container-fluid px-md-5">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2 text-danger">Blood Bank</h2>
            <p class="text-danger">Far far away, behind the word mountains, far from the countries.</p>
            <ul class="ftco-footer-social list-unstyled mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2 text-danger">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text text-danger">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text text-danger">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text text-danger">info@yourdomain.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">BFF</a>
          </p>
        </div>
      </div>
    </div>
  </footer>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/js/aos.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('frontend/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('frontend/js/google-map.js')}}"></script>

  <script src="{{asset('frontend/js/main.js')}}"></script>  
</body>
</html>