<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Si Ventalis | POLITAP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ url('public/web') }}/assets/img/ti.png" rel="icon">
  <link href="{{ url('public/web') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ url('public/web') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ url('public/web') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ url('public/web') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ url('public/web') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ url('public/web') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ url('public/web') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ url('public/web') }}/assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
    @include('layout.web.header')
  <!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
    @include('layout.web.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('public/web') }}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{ url('public/web') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ url('public/web') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ url('public/web') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ url('public/web') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ url('public/web') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('public/web') }}/assets/js/main.js"></script>

</body>
