@extends('layouts.app')

@section('main')
<div class="main-content">
    <!-- Jumbotron -->
    @include('layouts.pages-user.jumbotron')
    <!-- Topnav -->
    @include('layouts.pages-user.top-nav')
    <!-- Content -->
    @yield('content')
    <!-- Footer -->
    @include('layouts.pages-user.footer')
</div>    
@endsection