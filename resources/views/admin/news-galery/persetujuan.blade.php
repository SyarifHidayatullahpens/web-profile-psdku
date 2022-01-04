@extends('layouts.landing-page.news')
@section('pageTitle', 'Berita')
@section('content')

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
        .img-fluid {
            height: auto;
            width: 100px;
            margin: 0 auto;
            display: flex;
            transition: all 0s aesse 0s;
            border-radius: 5px;
        }
        #title {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif;
        }
        #judul {
            font-family: 'Roboto', sans-serif;
            font-family: 22px;
        }
    </style>
</head>
<section id="berita" class="portfolio-details">
    <div class="container">
        <h4 class="text-center text-uppercase mt-5 d-block" id="judul">
            <b>pens siap kembangkan sdm untuk masyarakat sumenep</b></h4>
        <div class="portfolio-details-slider swiper">
            <div class="swiper d-flex justify-content-center mt-3">
                <img src="{{ asset('Bizland/assets/img/portfolio/a.jpeg') }}" alt=""
                    style="width: 600px; height: 400px">
            </div>
        </div>

        <div class="portfolio-description">
            <p class="description">
                <span class="d-block mb-2">
                    Politeknik Elektronika Negeri Surabaya (PENS) lakukan penandatanganan naskah perjanjian hibah
                    serta serah
                    terima hibah oleh Pemerintah Kabupaten Sumenep ke Kementerian Pendidikan dan Kebudayaan Republik
                    Indonesia
                    (KEMENDIKBUD RI) di Gedung Baru PENS Kampus Sumenep, Selasa (16/02).
                    Direktur PENS Dr. Zainal Arief menyampaikan bahwa saat ini gedung PENS kampus Sumenep sepenuhnya
                    dikelola
                    oleh PENS. “Ini menjadi awal untuk perjuangan berikutnya tentunya dalam pengembangan Sumber Daya
                    Manusia
                    (SDM) baik dari dosen, tenaga kependidikan maupun para mahasiswa serta masyarakat sekitar
                    Sumenep.” Jelas
                    Zainal Arief. <br>
                </span>
                <span class="d-block mb-2">

                    Upaya dalam menyelenggarakan Pendidikan Tinggi Negeri yang dilakukan oleh Kampus Tradisi Juara
                    yaitu slogan
                    dari Politeknik Elektronika Negeri Surabaya (PENS) untuk memacu masyarakat Sumenep dalam hal
                    meningkatkan
                    kualitas sumber daya manusia supaya dapat menyaingi kabupaten lain di Jawa Timur.
                    Bupati Sumenep Dr. KH. A. Busyro Karim, M.Si pada sambutannya mengatakan bahwa Pemkab Sumenep
                    melakukan
                    pendekatan kepada pemerintah pusat supaya didirikan Perguruan Tinggi Negeri (PTN) di Sumenep.

                </span>
                Alhasil
                tercapailah keinginan tersebut dan sampai saat ini PENS Kampus Sumenep menjadi PTN pertama yang
                ada di
                Sumenep.”Saya yakin PENS kampus Sumenep ini memberikan dampak positif dalam pembangunan daerah,
                serta
                sosialisasi sangat diperlukan guna menarik simpatisan masyarakat Sumenep”. Ujar Busyro
                karim.Selain itu,
                Bupati juga menyampaikan ucapan selamat kepada PENS Kampus Sumenep bahwa sudah melakukan
                penandatanganan dan
                penyerahan aset oleh Pemerintah Kabupaten Sumenep ke Kementerian Pendidikan dan Kebudayaan
                Republik
                Indonesia.
                Dr. Zainal Arief menambahkan serta berharap untuk program beasiswa terutama dari KIP-Kuliah bisa
                lebih
                diperbanyak lagi supaya bisa dilaksanakan oleh masyarakat Sumenep yang mengakses atau mendaftar
                kuliah di
                PENS Kampus Sumenep ini. </p>
        </div>

        <div class="card mt-2" style="width: auto;  border-style: none">
            <div class="card-body" style="margin: 0 auto;">
                <div class="card-title">
                    <h5 class="text-center text-uppercase" style="font-size: 22px">Berita</h5>
                </div>
                <div class="d-flex" style="gap: 10px;">
                    <div class="card" style="width: 200px;">
                        <img class="card-img-top" src="{{  asset('Bizland/assets/img/portfolio/pengmas1.jpeg')}}">
                        <div class="card-body">
                            <a href="{{ url('news-galery/pengmas1') }}">
                                <p class="card-text" id="title">PENERAPAN APLIKASI PELAYANAN DESA BERBASIS MOBILE</p>
                            </a>
                        </div>
                      </div>
                      <div class="card" style="width: 200px;">
                        <img class="card-img-top" src="{{ asset('Bizland/assets/img/portfolio/pengmas3.jpeg') }}">
                        <div class="card-body">
                            <a href="{{ url('news-galery/pengmas3') }}">
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