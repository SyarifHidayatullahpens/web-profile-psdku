@extends('layouts.landing-page.main-content')

@section('pageTitle', 'SBMPN')

@section('content')

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
        #btn-sbmpn {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }
        .persyaratan p {
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            display: block;
            margin-top: -5px;
        }
        .description {
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
        }
        h4 {
            font-size: 22px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
        }
        ul li {
            list-style: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
        }
        .biaya ol li {
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<!-- ======= sbmpn ======= -->
<section id="sbmpn" class="portfolio-details">
    <div class="container">
        <div class="section-title">
            <h3>Seleksi Bersama Masuk Politeknik Negeri se Indonesia</h3>
        </div>
        <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                    <img src="{{ asset('Bizland/assets/img/portfolio/c.jpg') }}" class="d-block w-50"
                        style="margin: 0 auto;">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('Bizland/assets/img/portfolio/d.png') }}" class="d-block w-50"
                        style="margin: 0 auto;">
                </div>
            </div>
            <div class="swiper-pagination mt--4"></div>
        </div>
        <div class="row gy-4">
            <div class="portfolio-description mb-2" style="margin-top: -35px">
                <br>
                <p class="description" style="text-align:justify;">
                    SBMPN atau Seleksi Bersama Masuk Politeknik Negeri merupakan jalur
                    masuk Politeknik Negeri dengan cara tes tulis.
                    Hal ini bertujuan untuk memilih calon mahasiswa yang mempunyai kemampuan akademik untuk
                    mengikuti dan menyelesaikan pendidikan
                    di Politeknik sesuai dengan batas waktu yang telah ditetapkan.
                    Nama SBMPN adalah perubahan nama dari jalur
                    UMPN (Ujian Masuk Politeknik Negeri). Pergantian nama merupakan hasil diskusi dan
                    keputusan
                    bersama dalam Forum Direktur Politeknik Negeri se-Indonesia yang diadakan di Surabaya
                    pada Desember 2019. Untuk proses dan tes pendaftaran tetap sama, hanya berganti nama
                    saja.
                    <br>Proses seleksi bagi peserta bisa mendaftar secara online. Semua peserta SBMPN 2021 akan
                    diurutkan menurut nilai ujiannya, kemudian dialokasikan pada program studi pilihannya
                    dengan ketentuan bahwa peserta yang lebih baik mendapat prioritas untuk dialokasikan
                    lebih dahulu. Jika masih ada tempat di program studi pilihan pertama, ia akan diterima
                    di
                    program studi pilihan pertama. Jika tempat pada program studi pertama telah penuh dan
                    masih ada tempat di program studi pilihan kedua, ia akan diterima di program studi
                    pilihan kedua.
                    Jika tempat pada program studi pilihan kedua telah penuh dan masih ada tempat di program
                    studi pilihan ketiga, ia akan diterima di program studi pilihan ketiga, dan seterusnya.
                    Jika tempat pada program studi pilihan pertama, kedua dan ketiga telah penuh dengan
                    peserta yang lebih baik dari peserta tersebut, maka ia tidak akan diterima walaupun
                    nilainya masih cukup tinggi.</p>
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <div class="persyaratan d-block " >
                            <h4>Persyaratan</h4>
                            <p class="description">
                                - Biaya Sendiri
                                <br>
                                - Lulusan SMA/SMK/MA/MAK (dibuktikan dengan ijazah) dari sekolah asal
                            </p>
                        </div>
                        <div class="ujian">
                            <h4>Materi Ujuan</h4>
                            <p class="descrioption">
                               <ol>
                                   <li>Matematika</li>
                                   <li>Fisika</li>
                                   <li>Bahasa Indonesia</li>
                                   <li>Bahasa Inggris</li>
                               </ol>
                            </p>
                            <p class="description">
                                <ul>
                                    <li><b>Catatan :</b></li>
                                    <li>Khusus Pendaftar D3 Teknologi Multimedia Broadcasting, akan ada tes tambahan setelah tes kemampuan akademik yaitu berupa tes bakat artistik</li>
                                </ul>
                            </p>
                        </div>
                        <div class="location">
                            <h4>Lokasi Ujian</h4>
                            <p class="descrioption">
                                Kampus PENS PSDKU Sumenep (Jl. Raya Lenteng KM.2, Aredake, Batuan, Kabupaten Sumenep)
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="d-block mt-4 text-center">Jadwal Pendaftaran SBMPN 2021</h4><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" style="width: 500px; margin: 0 auto;">
                               <thead class="bg-primary text-white">
                                   <tr>
                                       <th scope="col">Kegiatan</th>
                                       <th scope="col">Tanggal</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>Pendaftaran</td>
                                       <td>6 April - 30 Juni</td>
                                   </tr>
                                   <tr>
                                       <td>Pengumuman Hasil Seleksi</td>
                                       <td>6 Juli</td>
                                   </tr>
                                   <tr>
                                       <td>Daftar Ulang</td>
                                       <td> 15 - 20 Juli </td>
                                   </tr>
                                   <tr>
                                       <td>Pelaksanaan IPMB Online (Wajib Mengikuti)</td>
                                       <td>15 Agustus</td>
                                   </tr>
                               </tbody>
                            </table>
                        </div>
                        <p style="font-size: 22px;">* Lokasi ujian dilakukan di PSDKU Sumenep</p>
                        <div class="biaya">
                            <p class="description text-uppercase" style="font-size: 22px">Biaya pendidikan</p>
                            <p class="description">
                                Rincian Biaya Pendidikan program PSDKU tahun akademik 2020/2021 adalah sebagai berikut: <br>
                                <span><b>Biaya Pendaftaran</b></span><br>
                                Rp. 100.000<br>
                                <b>Biaya Pendidikan</b>
                                <ol>
                                    <li>Menerima Beasiswa KIPK, Bebas Pembayaran UKT / UKT Rp 0</li>
                                    <li>Jalur Mandiri UKT (dibayarkan setiap semester, disesuaikan dengan ekonomi pendaftar)
                                        <br>Range UKT antara Rp. 500.000,- s/d Rp. 4.500.000
                                    </li>
                                </ol>
                                <b class="description" style="font-size: 14px">IKOMA dan JAS ALMAMATER (dibayarkan sekali di awal masuk)</b>
                                <br>Rp. 950.000,
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<script src="{{ asset('js/read-more.js') }}"></script>

@endsection