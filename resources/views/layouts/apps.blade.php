<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>PSDKU</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('#')}}" type="image/png">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

  <link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.min.css')}}">

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/loader.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">

  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.1.0')}}" type="text/css">
   
   @yield('style') 
</head>

<body>
  <!-- Sidenav -->
  @include('layouts.pages-admin.sidebar')
  <!-- Main content -->
  @yield('main')
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('js/currency.js')}}"></script>
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>

  <!-- Optional JS -->
  <script src="{{ asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{ asset('vendor/quill/dist/quill.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <script src="{{ asset('vendor/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
  <script src="{{ asset('vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
  <script src="{{ asset('js/vendor/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

  <script src="{{ asset('vendor/select2/dist/js/select2.min.js')}}"></script>

  <script src="{{ asset('js/argon.js?v=1.1.0')}}"></script>
 
</body>

@yield('script')
</html>

