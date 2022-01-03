@extends('layouts.landing-page.news')
@section('pageTitle', 'News')


@section('content')
<section id="berita" class="portfolio-details">
        <div class="container">
        <div class="section-title">
                <h3>PENERAPAN APLIKASI PELAYANAN DESA BERBASIS MOBILE</h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/pengmas2.jpeg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/pengmas1.jpeg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/sew.jpeg') }}" alt="">
                        </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                    <p class="description">Desa Pegantenan adalah sebuah desa
                    yang terletak di Kecamatan Pegantenan Kabupaten Pamekasan Dengan luas wilayah kurang lebih 258.1765 Ha dan mempunyai jumlah penduduk 3.492 jiwa (Anonymous, 2018). 
                    Desa yang merupakan salah satu desa percontohan di Kabupaten Pamekasan ini dikenal dengan sejumlah prestasinya, baik di tingkat Kabupaten hingga Provinsi, salahsatunya yakni pada tahun 2018 Desa
                    Pegantenan meraih peringkat ke-3 dalamPerangkingan Desa Terbaik dan Pendampingan P3MD Terbaik dalamPembangunan dan Pemberdayaan Masyarakat
                    Desa Provinsi Jawa Timur Tujuan dari kegiatan pengabdian ini adalah untuk meningkatkan pelayanan Desa Pegantenan dalam memberikan pelayanan
                    kepada warga dalam pembuataan surat-surat. Selain itu warga juga bisa menerima pengumuman penting dari desa melalui aplikasi tersebut. Begitu juga warga bisa
                    menyampaikan aspirasi dan info kejadian di Desa Pegantenan malalui aplikasi tersebut. Dengan adanya aplikasi ini diharapkanPemerintah Desa dapat berkomunikasi dan
                    berinteraksi langsung dengan masyarakat secara update, akurat dan efisien sehingga memudahkan masyarakat Desa Pegantenan </p>
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
                              <p class="card-text" style="font-size: 16px">PENS SIAP KEMBANGKAN SDM UNTUK MASYARAKAT SUMENEP</p>
                            </div>
                          </div>
                          <div class="card" style="width: 200px;">
                            <img class="card-img-top" src="{{ asset('Bizland/assets/img/portfolio/pengmas3.jpeg') }}">
                            <div class="card-body">
                              <p class="card-text" style="font-size: 16px">PENS KAMPUS SUMENEP LUNCURKAN ASIAPP SEBAGAI SOLUSI SANTRI</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
    
        </div>
    </section>

@endsection