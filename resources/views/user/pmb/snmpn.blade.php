@extends('layouts.landing-page.main-content')
@section('pageTitle', 'SNMPN')

@section('content')
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
       
        .description {
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
        }
        h4 {
            font-size: 22px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
        }
        h6 {
            font-size: 16px; 
            font-family: 'Open Sans', sans-serif; 
            line-height: 80px;
            font-weight: bold;
        }
        .pengumuman {
            background: #ffff;
            width: 500px; 
            height: 80px;
            border-radius: 10px;
            margin: 0 auto;
            box-shadow: 0px 0px 0px grey;
            -webkit-transition: box-shadow .6s aese-out;
            box-shadow: .8px .9px 3px grey;
        }
        .pengumuman:hover {
            background-color: whitesmoke;
        }
    </style>
</head>
<section id="snmpn" class="portfolio-details">
    <div class="container">
        <div class="section-title">
            <h3 class="text-uppercase"> snmpn<h3>
        </div>
        <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                    <img src="{{ asset('images\brand\snmpn.png') }}" class="d-block w-50    "
                        style="margin: 0 auto;">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('Bizland/assets/img/portfolio/b.png') }}" class="d-block w-50"
                        style="margin: 0 auto;">
                </div>
            </div>
            <div class="swiper-pagination mt--4"></div>
        </div>

        <div class="row gy-4">
            <div class="portfolio-description">
                <p class="description">
                    Seleksi Nasional Masuk Politeknik Negeri (SNMPN) 2021 merupakan seleksi
                    Jalur Undangan yang diperuntukkan bagi calon peserta/siswa sekolah yang akan
                    melanjutkan pendidikan di Perguruan Tinggi (khusus jenjang Diploma 3) Bidang Vokasi atau
                    Politeknik Negeri di seluruh wilayah Indonesia.
                    Pola seleksi ini tertuang dalam suatu sistem yang terpadu dan diselenggarakan secara
                    serentak melalui seleksi prestasi akademik siswa selama mengikuti pendidikan di Sekolah
                    Lanjutan Tingkat Atas.Pada tahun 2014-2019, nama SNMPN dikenal
                        dengan nama Penelusuran Minat dan Kemampuan Politeknik Negeri (PMDK- PN).
                        Dengan diadakannya Forum Direktur Politeknik Negeri se-Indonesia (FDPNI) pada tahun 2019
                        di Surabaya,
                        maka ditetapkannya pola Penerimaan Mahasiswa Baru (PMB) jalur PMDK- PN berganti nama
                        menjadi jalur SNMPN.
                        <br>Mekanisme pendaftaran dan persyaratan tetap sama, yang berubah hanya namanya saja.
                        Hal ini bertujuan supaya arti kata Seleksi dalam SNMPN memiliki dan mencakup arti yang
                        luas.
                        Pendaftaran calon peserta/Siswa melalui jalur SNMPN tidak dikenakan biaya apapun karena
                        semua biaya telah dibebankan pada anggaran pemerintah.
                        Jalur SNMPN ini juga mengakomodir calon peserta/siswa yang diterima dan berasal dari
                        keluarga ekonomi lemah tetapi mempunyai prestasi akademik tinggi.
                        Informasi lengkap serta tata cara pendaftaran Jalur SNMPN dapat diakses pihak sekolah
                        melalui situs <a href="http://snmpn.politeknik.or.id/">http://snmpn.politeknik.or.id/</a> dengan
                        cara
                        login menggunakan username dan password yang akan diberikan panitia kepada masing-masing
                        sekolah dan mendaftarkan siswa-siswa terbaiknya.
                        Selanjutnya siswa-siswa tersebut akan diberikan usemame dan password yang dapat
                        digunakan untuk memasukkan data secara on-line.
                        Selanjutnya kami mengharapkan kerjasama semua pihak yang terkait dengan sistem SNMPN
                        2021 sehingga proses ini dapat terlaksana sesuai dengan yang diharapkan.</p>
                        <div class="card bg-warning" style="width: 700px; margin: 0 auto;">
                            <div class="card-body">
                                <div class="row">
                                    <h4>Daftar SNMPN 2022</h4>
                                    <div class="col-md-8">
                                        <p class="description">
                                            Persiapkan dirimu meraih masa depan lebih cerah dengan pendidikan yang lebih baik. 
                                            Segera daftarkan dirimu untuk mengikuti seleksi SNMPN Politeknik Negeri se-Indonesia
                                        </p>
                                    </div>
                                    <div class="col-md-4" style="margin-top: 50px;">
                                        <a href="#" class="btn btn-primary text-white btn-lg rounded-pill" style="height: 50px; font-size: 16px; line-height: 35px; ">DAFTAR SEKARANG</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <h4 class="mt-4 text-center text-uppercase">jadwal snpmn 2022</h4>
                <div class="table-responsive d-flex justify-content-center">
                    <table class="table table-striped table-hover" style="width: 700px; margin-auto: 0 auto;">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Kegiatan</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pendaftaran</td>
                                <td>3 Januari - 18 Maret 2022</td>
                            </tr>
                            <tr>
                                <td>Pengisian Data oleh Sekolah</td>
                                <td>3 Januari - 11 Maret 2022</td>
                            </tr>
                            <tr>
                                <td>Validasi Berkas</td>
                                <td>3 Januari - 25 Maret 2022</td>
                            </tr>
                            <tr>
                                <td>Penutupan Pendaftaran</td>
                                <td>19 Maret 2021</td>
                            </tr>
                            <tr>
                                <td>Pengumuman</td>
                                <td>6 April 2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="rounded pengumuman mt-3">
                    <h6 class="text-center">Pengumuman Seleksi SNMPN
                         <span><a href="" class="text-primary" id="click-me">Klik Disini</a></span>
                    </h6>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection