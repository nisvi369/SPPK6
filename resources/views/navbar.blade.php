<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPPK-AHP-Kel6</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"> -->
  <link rel="stylesheet" href="{{asset('assets/css/app.css')}}"> 
  <!-- Favicons -->
  <link href="{{asset('Delicious/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('Delicious/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Delicious/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Delicious/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <i class="icofont-phone"></i> +1 5589 55488 55
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM
    </div>
  </section> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span>Bali.kuy</span></a></h1>
      </div>
      @if(auth()->user())
      <nav class="nav-menu d-none d-lg-block">
     
        <ul>
          <li><a href="{{route('perhitungan.saved')}}">History Perhitungan</a></li>
          <li class="book-a-table text-center"><a href="{{route('perhitungan.buat')}}">Buat Perhitungan</a></li>
          <!-- <li><a href="#">My Blog</a></li> -->
          <!-- <li><a href="/profile">My Profile</a></li> -->
          <li><a href="/logout">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      @endif
      @if(empty(auth()->user()))
      <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="/">Story</a></li>
        <li><a href="/event">Event</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/daftar">Register</a></li>
        
        <!-- <li class="book-a-table text-center"><a href="/form">Create Story</a></li> -->
      </ul>
    </nav>
    @endif
    </div>
  </header>
  <!-- End Header -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('Delicious/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Delicious/assets/js/main.js')}}"></script>

  <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
  <!-- JQuery -->
  <script src="{{asset('assets/js/ahp.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  @stack('script-bawah')
  <script>
  $(window).on('load',function() {
      // Animate loader off screen
      console.log('load');
	$(".se-pre-con").fadeOut("slow");;
  });
  </script>
  @yield('header')
  @yield('content')
  @yield('footer')
</body>
</html>