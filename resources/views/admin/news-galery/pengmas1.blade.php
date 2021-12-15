@extends('layouts.landing-page.main-content')
<!-- @extends('layouts.landing-page.news') -->

@section('content')


<section id="berita" class="portfolio-details">
        <div class="container">
        <div class="section-title">
                <h3>pamekasan</h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/pengmas1.jpeg') }}" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/pengmas2.jpeg') }}" alt="">
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
                    <p class="contents" style="margin-top: -35px; text-align: justify; text-justify: inter-word; font-size:16px">Desa Pegantenan adalah sebuah desa
                    yang terletak di Kecamatan Pegantenan Kabupaten Pamekasan Dengan luas wilayah kurang lebih 258.1765 Ha dan mempunyai jumlah penduduk 3.492 jiwa (Anonymous, 2018). 
                    Desa yang merupakan salah satu desa percontohan di Kabupaten Pamekasan ini dikenal dengan sejumlah prestasinya, baik di tingkat Kabupaten hingga Provinsi, salahsatunya yakni pada tahun 2018 Desa
                    Pegantenan meraih peringkat ke-3 dalamPerangkingan Desa Terbaik dan Pendampingan P3MD Terbaik dalamPembangunan dan Pemberdayaan Masyarakat
                    Desa Provinsi Jawa Timur Tujuan dari kegiatan pengabdian ini adalah untuk meningkatkan pelayanan Desa Pegantenan dalam memberikan pelayanan
                    kepada warga dalam pembuataan surat-surat. Selain itu warga juga bisa menerima pengumuman penting dari desa melalui aplikasi tersebut. Begitu juga warga bisa
                    menyampaikan aspirasi dan info kejadian di Desa Pegantenan malalui aplikasi tersebut. Dengan adanya aplikasi ini diharapkanPemerintah Desa dapat berkomunikasi dan
                    berinteraksi langsung dengan masyarakat secara update, akurat dan efisien sehingga memudahkan masyarakat Desa Pegantenan </p>
                    </div>
                    <a class="btn btn-md btn-primary text-white" id="btn-sbmpn" onclick="goBack()">KEMBALI</a>
                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
                </div>

            </div>

        </div>
    </section>

@endsection