@extends('layouts.landing-page.news')
@section('pageTitle', 'News')
@section('content')

<head>
    <style>
        .img-fluid {
            height: auto;
            width: 100px;
            margin: 0 auto;
            display: flex;
            transition: all 0s aesse 0s;
            border-radius: 5px;
        }
    </style>
</head>
<section id="berita" class="portfolio-details">
    <div class="container">
        <h1 class="text-center text-uppercase" style="font-size: 22px; font-family:'Times New Roman', Times, serif">
            <b>PENS KAMPUS SUMENEP LUNCURKAN ASIAPP SEBAGAI SOLUSI SANTRI</b></h1>
        <div class="portfolio-details-slider swiper">
            <div class="swiper d-flex justify-content-center mt-3">
                <img src="{{ asset('Bizland/assets/img/portfolio/pengmas3.jpeg') }}" alt=""
                    style="width: 600px; height: 400px">
            </div>
        </div>

        <div class="portfolio-description">
            <p class="description"> Politeknik Elektronika Negeri Surabaya (Pens) kampus sumenep, gelar pengabdian masyarakat (pengmas) tentang penerapan aplikasi sistem informasi pondok pesantren (Asiapp) Berbasis website, 
            di pondok pesantren mathali'ul anwar putri, Kabupaten Sumenep, Jawa Timur, Sabtu (21/8/2021). Kegiatan yang berlangsung di aula Pens kampus sumenep tersebut, di hadiri oleh dosen pens surabaya melalui room virtual, pengasuh pondok pesantren mathali’ul anwar, dan tujuh santri, yang merupakan calon pengelola website.
            Taufikur Rahman, Ketua tim pengabdian masyarakat Politeknik Elektronika Negeri Surabaya (Pens) kampus sumenep mengatakan, setiap tahun mereka lakukan pengabdian yang bervariasi, namun tahun ini, pihaknya memilih pondok pesantren yang belum memiliki media informasi berbasis website, sebagai media publikasi.
            Sementara itu, KH. Mahfudz Rahman, pengasuh pondok pesantren mathali'ul anwar, turut apresiasi dengan kegiatan pondok pesantren berbasis website, ia mengakui, media informasi memang sangat ditunggu, agar bisa menambah keahlian baru bagi santri.
            Lebih lanjut, Tokoh agama Kabupaten Sumenep ini juga meyakini, bahwa pengmas penerapan aplikasi sistem informasi pondok pesantren (Asiapp) Berbasis website, di pondok pesantren mathali’ul anwar putri, akan memiliki dampak yang baik, untuk kebutuhan santri.</p>
            </div>

        <div class="card mt-2" style="width: auto;  border-style: none">
            <div class="card-body" style="margin: 0 auto;">
                <div class="card-title">
                    <h5 class="text-center text-uppercase" style="font-size: 22px">Berita</h5>
                </div>
                <div class="d-flex" style="gap: 10px;">
                    <div class="card" style="width: 200px;">
                        <img class="card-img-top" src="{{ asset('Bizland/assets/img/portfolio/a.jpeg') }}" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text" style="font-size: 16px">PENS SIAP KEMBANGKAN SDM UNTUK MASYARAKAT SUMENEP</p>
                        </div>
                      </div>
                      <div class="card" style="width: 200px;">
                        <img class="card-img-top" src="{{  asset('Bizland/assets/img/portfolio/pengmas1.jpeg') }}" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text" style="font-size: 16px">PENERAPAN APLIKASI PELAYANAN DESA BERBASIS WEB</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
