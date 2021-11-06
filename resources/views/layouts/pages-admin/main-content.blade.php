@extends('layouts.apps')

@section('main')
<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.pages-admin.top-nav')
    <!-- Header -->
    <!-- Header -->
    <!-- Page content -->
    @yield('content')
  </div>
@endsection