@extends('layouts.landing-page')

@section('main')
<div class="main-content">
    @include('layouts.landing-page.top-nav')
    @yield('content')
    @include('layouts.landing-page.footer')
</div>
@endsection