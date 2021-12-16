@extends('layouts.landing-page.news')

@section('content')

<section id="berita" class="portfolio-details">
        <div class="container">
        <div class="section-title">
                <h3>PENS Kampus Sumenep Luncurkan Asiapp Sebagai Solusi Santri</h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/pengmas3.jpeg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('Bizland/assets/img/portfolio/ff.jpeg') }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                    <p class="contents" style="margin-top: -35px; text-align: justify; text-justify: inter-word; font-size:16px"> Politeknik Elektronika Negeri Surabaya (Pens) kampus sumenep, gelar pengabdian masyarakat (pengmas) tentang penerapan aplikasi sistem informasi pondok pesantren (Asiapp) Berbasis website, 
                    di pondok pesantren mathali’ul anwar putri, Kabupaten Sumenep, Jawa Timur, Sabtu (21/8/2021). Kegiatan yang berlangsung di aula Pens kampus sumenep tersebut, di hadiri oleh dosen pens surabaya melalui room virtual, pengasuh pondok pesantren mathali’ul anwar, dan tujuh santri, yang merupakan calon pengelola website.
                    Taufikur Rahman, Ketua tim pengabdian masyarakat Politeknik Elektronika Negeri Surabaya (Pens) kampus sumenep mengatakan, setiap tahun mereka lakukan pengabdian yang bervariasi, namun tahun ini, pihaknya memilih pondok pesantren yang belum memiliki media informasi berbasis website, sebagai media publikasi.
                    Sementara itu, KH. Mahfudz Rahman, pengasuh pondok pesantren mathali’ul anwar, turut apresiasi dengan kegiatan pondok pesantren berbasis website, ia mengakui, media informasi memang sangat ditunggu, agar bisa menambah keahlian baru bagi santri.
                    Lebih lanjut, Tokoh agama Kabupaten Sumenep ini juga meyakini, bahwa pengmas penerapan aplikasi sistem informasi pondok pesantren (Asiapp) Berbasis website, di pondok pesantren mathali’ul anwar putri, akan memiliki dampak yang baik, untuk kebutuhan santri.</p>
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

