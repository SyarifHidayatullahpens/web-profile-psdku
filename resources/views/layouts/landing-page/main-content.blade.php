@extends('layouts.landing-page')

@section('main')
<div class="main-content">
    <!-- Topnav -->
    @include('layouts.landing-page.top-nav')
    <!-- Section -->
    @include('layouts.landing-page.section')

    <!-- Footer -->
    @yield('content')
    
    @include('layouts.landing-page.footer')
</div>    
@endsection