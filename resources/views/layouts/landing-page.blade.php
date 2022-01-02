<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>@yield('pageTitle') - PSDKU</title>

    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <!-- Favicons -->
    <link rel="icon" href="{{ asset('images/pens.png')}}" type="image/png">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Bizland/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Bizland/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Bizland/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Bizland/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Bizland/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Bizland/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Bizland/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  @yield('main')
  <!-- Vendor JS Files -->
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  <script src="{{ asset('Bizland/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('Bizland/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('bizland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Bizland/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('Bizland/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('Bizland/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('Bizland/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('Bizland/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Bizland/assets/js/main.js') }}"></script>
</body>

</html>



