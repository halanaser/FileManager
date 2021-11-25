<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('admin/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('logo/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('logo/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('logo/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('logo/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('logo/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('logo/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <link href="{{asset('logo/assets/css/style.css')}}" rel="stylesheet">

  
 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">Reveal@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">

    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.html">Reve<span>al</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{asset('logo/assets/img/logo.png')}}" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
           <li><a class="nav-link scrollto" href="#">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">log In</a></li>
          <li><a class="nav-link scrollto active" href="{{ route('register') }}">Sign Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
  

    <div class="hero-content" >
      <h2>Simple  <span>& </span>Powerful<br> Personal Cloud Storage</h2><br>
       
      <div>
        
        <a href="{{ route('register') }}" class="btn-projects scrollto">Sign Up Now    ></a>
      </div>
    </div>

    <div class="hero-slider swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('{{asset('logo/assets/img/hero-carousel/1.jpg')}}');"></div>
        <div class="swiper-slide" style="background-image: url('{{asset('logo/assets/img/hero-carousel/2.jpg')}}');"></div>
        <div class="swiper-slide" style="background-image: url('{{asset('logo/assets/img/hero-carousel/3.jpg')}}');"></div>
        <div class="swiper-slide" style="background-image: url('{{asset('logo/assets/img/hero-carousel/4.jpg')}}');"></div>
        <div class="swiper-slide" style="background-image: url('{{asset('logo/assets/img/hero-carousel/5.jpg')}}');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">


  </main><!-- End #main -->


 

  <!-- Vendor JS Files -->
  <script src="{{asset('logo/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('logo/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('logo/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('logo/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('logo/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('logo/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('logo/assets/js/main.js')}}"></script>

</body>

</html>