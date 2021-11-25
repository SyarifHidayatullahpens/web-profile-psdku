<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>PENS PSDKU</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('images/h.png') }}" type="image/png">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

  <link rel="stylesheet" href="{{asset('vendor/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/loader.css')}}" type="text/css">
  <link rel="stylesheet" href="sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link href="toastr.css" rel="stylesheet"/>

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/loader.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">

  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.1.0')}}" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
 
  
   
   @yield('style') 
</head>

<body>
  <!-- Sidenav -->
  @include('layouts.pages-admin.sidebar')
  <!-- Main content -->
  @yield('main')
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="toastr.js"></script>
  <script src="{{ asset('js/currency.js')}}"></script>
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Optional JS -->
  <script src="{{ asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{ asset('vendor/quill/dist/quill.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <script src="{{ asset('vendor/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
  <script src="{{ asset('vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
  <script src="{{ asset('js/vendor/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

    <!-- Data Tables JS -->
    <script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

  
  <script src="{{ asset('vendor/select2/dist/js/select2.min.js')}}"></script>

  <script src="{{ asset('js/argon.js?v=1.1.0')}}"></script>
 
</body>

@yield('script')
</html>

