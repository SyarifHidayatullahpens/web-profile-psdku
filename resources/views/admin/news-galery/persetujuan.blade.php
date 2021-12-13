@extends('layouts.landing-page.news')

@section('content')

    <section id="berita" class="portfolio-details">
        <div class="container">
        <div class="section-title">
                <h3>PENS SIAP KEMBANGKAN SDM UNTUK MASYARAKAT SUMENEP</h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper">
                            <img src="{{ asset('Bizland/assets/img/portfolio/a.jpeg') }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                    <p class="contents" style="margin-top: -35px; text-align: justify; text-justify: inter-word; font-size:16px">Politeknik Elektronika Negeri Surabaya (PENS) lakukan penandatanganan naskah perjanjian hibah serta serah terima hibah oleh Pemerintah Kabupaten Sumenep ke Kementerian Pendidikan dan Kebudayaan Republik Indonesia (KEMENDIKBUD RI) di Gedung Baru PENS Kampus Sumenep, Selasa (16/02).
                        Direktur PENS Dr. Zainal Arief menyampaikan bahwa saat ini gedung PENS kampus Sumenep sepenuhnya dikelola oleh PENS. “Ini menjadi awal untuk perjuangan berikutnya tentunya dalam pengembangan Sumber Daya Manusia (SDM) baik dari dosen, tenaga kependidikan maupun para mahasiswa serta masyarakat sekitar Sumenep.” Jelas Zainal Arief.
                        Upaya dalam menyelenggarakan Pendidikan Tinggi Negeri yang dilakukan oleh Kampus Tradisi Juara yaitu slogan dari Politeknik Elektronika Negeri Surabaya (PENS) untuk memacu masyarakat Sumenep dalam hal meningkatkan kualitas sumber daya manusia supaya dapat menyaingi kabupaten lain di Jawa Timur.
                        Bupati Sumenep Dr. KH. A. Busyro Karim, M.Si pada sambutannya mengatakan bahwa Pemkab Sumenep melakukan pendekatan kepada pemerintah pusat supaya didirikan Perguruan Tinggi Negeri (PTN) di Sumenep. Alhasil tercapailah keinginan tersebut dan sampai saat ini PENS Kampus Sumenep menjadi PTN pertama yang ada di Sumenep.”Saya yakin PENS kampus Sumenep ini memberikan dampak positif dalam pembangunan daerah, serta sosialisasi sangat diperlukan guna menarik simpatisan masyarakat Sumenep”. Ujar Busyro karim.Selain itu, Bupati juga menyampaikan ucapan selamat kepada PENS Kampus Sumenep bahwa sudah melakukan penandatanganan dan penyerahan aset oleh Pemerintah Kabupaten Sumenep ke Kementerian Pendidikan dan Kebudayaan  Republik Indonesia.
                        Dr. Zainal Arief menambahkan serta berharap untuk program beasiswa terutama dari KIP-Kuliah bisa lebih diperbanyak lagi supaya bisa dilaksanakan oleh masyarakat Sumenep yang mengakses atau mendaftar kuliah di PENS Kampus Sumenep ini. </p>
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