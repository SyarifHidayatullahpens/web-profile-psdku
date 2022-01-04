@extends('layouts.landing-page.it')
@section('pageTitle', 'Teknik Informatika')
@section('content')
{{-- <h2>sasasas</h2> --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/brand/img1.jpeg') }}" class="d-block w-100" style="height: 600px">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/brand/img2.jpeg') }}" class="d-block w-100" style="height: 600px">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/brand/img3.jpg') }}" class="d-block w-100" style="height: 600px">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section id="diploma-ti" class="">
    <div class="container">
        <div class="col-md-12d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <p class="description">
                    Pada saat ini kebutuhan akan teknologi informasi memegang peranan yang sangat penting dan dimasa yang akan
                    datang akan menjadi tulang punggung pertumbuhan ekonomi bangsa. Karena itu, Politeknik Elektronika Negeri
                    Surabaya mendirikan Departemen Teknik Informatika dan Komputer yang terdiri dari empat program studi, yaitu
                    D3 Teknik Informatika, D4 Teknik Informatika, D4 Teknik Komputer, serta S2 Terapan Teknik Informatika dan
                    Komputer.
                    Dengan tujuan menjadi pusat unggulan pendidikan teknologi rekayasa dibidang emerging technology yang terkait
                    bidang Teknologi Informasi dan Komputer untuk menghasilkan lulusan yang siap bersaing dipasar global,
                    Departemen Teknik Informatika dan Komputer telah banyak menghasilkan lulusan yang berkualifikasi unggul dan
                    bekerja sebagai Programmer, Software Engineer, Hardware Designer, Network Administrator, Computer System
                    Analyst, Manager/Supervisor, Services/Technical Support, Marketing/Sales, dan lain-lain.
            </p>
            </div>
        </div>

    </div>
</section>

@endsection