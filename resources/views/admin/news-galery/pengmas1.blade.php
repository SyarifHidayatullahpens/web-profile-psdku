@extends('layouts.landing-page.news')
@section('pageTitle', 'Berita')


@section('content')
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

        #title   {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif;
        }
        #judul  {
            font-size: 22px;
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<section id="berita" class="portfolio-details">
        <div class="container">
        <div class="text-center text-uppercase mt-5 mb-4 d-block" id="judul">
                <h4>PENERAPAN APLIKASI PELAYANAN DESA BERBASIS MOBILE</h4>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/pengmas2.jpeg') }}" style="height: 340px">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/pengmas1.jpeg') }}" style="height: 340px;">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/sew.jpeg') }}" >
                        </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                    <p class="description" style="margin-top: -35px">Desa Pegantenan adalah sebuah desa
                    yang terletak di Kecamatan Pegantenan Kabupaten Pamekasan Dengan luas wilayah kurang lebih 258.1765 Ha dan mempunyai jumlah penduduk 3.492 jiwa (Anonymous, 2018). 
                    Desa yang merupakan salah satu desa percontohan di Kabupaten Pamekasan ini dikenal dengan sejumlah prestasinya, baik di tingkat Kabupaten hingga Provinsi, salahsatunya yakni pada tahun 2018 Desa
                    Pegantenan meraih peringkat ke-3 dalamPerangkingan Desa Terbaik dan Pendampingan P3MD Terbaik dalamPembangunan dan Pemberdayaan Masyarakat
                    Desa Provinsi Jawa Timur Tujuan dari kegiatan pengabdian ini adalah untuk meningkatkan pelayanan Desa Pegantenan dalam memberikan pelayanan
                    kepada warga dalam pembuataan surat-surat. Selain itu warga juga bisa menerima pengumuman penting dari desa melalui aplikasi tersebut. Begitu juga warga bisa
                    menyampaikan aspirasi dan info kejadian di Desa Pegantenan malalui aplikasi tersebut. Dengan adanya aplikasi ini diharapkanPemerintah Desa dapat berkomunikasi dan
                    berinteraksi langsung dengan masyarakat secara update, akurat dan efisien sehingga memudahkan masyarakat Desa Pegantenan.</p>
                    </div>
                </div>
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
                                <a href="{{ url('news-galery/persetujuan') }}">
                                    <p class="card-text" id="title" >PENS SIAP KEMBANGKAN SDM UNTUK MASYARAKAT SUMENEP</p>
                                </a>
                            </div>
                          </div>
                          <div class="card" style="width: 200px;">
                            <img class="card-img-top" src="{{ asset('Bizland/assets/img/portfolio/pengmas3.jpeg') }}">
                            <div class="card-body">
                                <a href="{{ url('news-galery/pengmas3') }}" >
                                    <p class="card-text" id="title">PENS KAMPUS SUMENEP LUNCURKAN ASIAPP SEBAGAI SOLUSI SANTRI</p>
                                </a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
    
        </div>
    </section>

@endsection