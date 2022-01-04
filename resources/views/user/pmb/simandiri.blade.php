@extends('layouts.landing-page.main-content')
@section('pageTitle', 'SIMANDIRI')
    
@section('content')

<head>
    <style>
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
        ol li {
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;
        }
        .list-description {
            background: #ffff;
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
            box-shadow: 0px 0px 0px grey;
            -webkit-transition: box-shadow .6s aese-out;
            box-shadow: .8px .9px 3px grey;
        }
        .list-description:hover {
            background-color: whitesmoke;
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
<section id="simandiri" class="portfolio-details">
    <div class="container">
        <div class="section-title">
            <h3>SIMANDIRI</h3>
        </div>
        <div class="row gy-4">

            <div class="col-lg-12">
                <div class="portfolio-description">
                    <p class="description"> 
                        SIMANDIRI PENS atau Seleksi Mandiri Politeknik Elektronika Negeri Surabaya dimaksudkan untuk
                        memilih calon mahasiswa yang mempunyai kemampuan akademik untuk mengikuti dan menyelesaikan
                        pendidikan di Politeknik sesuai dengan batas waktu yang telah ditetapkan.
                        Sehubungan dengan keadaan pandemi, Ujian
                            Tulis Seleksi Mandiri (Simandiri) secara offline di kampus Politeknik Elektronika Negeri
                            Surabaya (PENS) ditiadakan. Sebagai gantinya, Seleksi Mandiri dilakukan dengan sistem
                            Ujian Tulis Berbasis Komputer (UTBK)
                            secara online dari tempat tinggal masing-masing dan wajib mengaktifkan web camera.
                            Pendaftaran dan tes masuk dilaksanakan secara online dengan proses seleksi sebagai
                            berikut. Semua peserta UTBK Online Simandiri akan diurutkan menurut nilai ujiannya,
                            kemudian dialokasikan pada program studi pilhannya, dengan ketentuan bahwa peserta yang
                            lebih baik mendapat prioritas untuk dialokasikan lebh dahulu.<br class="mt-2"> Jika masih ada tempat di
                            program studi pilihan pertama, ia akan diterima di program studi pilihan pertama. Jika
                            tempat pada program studi pertama telah penuh dan masih ada tempat di program studi
                            pilihan kedua, ia akan diterima di program studi pilihan kedua. Jika tempat pada program
                            studi pilihan kedua telah penuh dan masih ada tempat di program studi pilihan ketiga, ia
                            akan diterima di program studi pilihan ketiga, dan seterusnya. Jika tempat pada program
                            studi pilihan pertama, kedua dan ketiga telah penuh dengan peserta yang lebih baik dari
                            peserta tersebut, maka ia tidak akan diterima walaupun nilainya masih cukup tinggi.
                        </p>
                        <div class="list-description d-block mb-4">
                            <div class="row ">
                                <div class="col-md-6">
                                    <h4>Persyaratan</h4>
                                    <ol>
                                        <li>Tamatan SMTA (SMA,MA, SMK, SMTA Luar Negeri, ujian persamaan, Lulus Paket C)</li>
                                        <li>Tahun ijazah 2019, 2020 dan 2021</li>
                                        <li>Usia maksimal 21 tahun per 1 September 2021</li>
                                    </ol>
                                    <div class="biaya" style="font-weight: 200">
                                        <h6 style="font-size: 22px">Biaya Pendaftaran</h6>
                                        <h4>Rp. 300.000</h4>
                                        <p class="description">
                                            Pembayaran secara online 
                                            <span>
                                                <b>
                                                    hanya dapat dilakukan melalui BANK MANDIRI dengan 3 cara yaitu:
                                                </b>
                                            </span>
                                            <ol>
                                                <li>ATM</li>
                                                <li>Mobile Banking (M-Banking)</li>
                                                <li>Pembayaran atau Transaksi di Teller</li>
                                            </ol>
                                        </p>
                                    </div>
                                    <div class="studi">
                                        <h6 style="font-size: 22px ">Program Studi Pilihan</h6>
                                        <h4>Diploma 3</h4>
                                        <ol>
                                            <li>D3 TEKNIK INFORMATIKA</li>
                                            <li>Teknik Multimedia Broadcasting</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="kuliah">
                                        <h6 style="font-size: 22px">Biaya Kuliah</h6>
                                        <p class="description"><b>UKT (Uang Kuliah Tunggal)</b>
                                        <br>
                                        Rp. 500.000,- sampai dengan  Rp. 4.500.000, /semester
                                        </p>
                                    </div>
                                    <div class="ikoma">
                                        <p class="description" style="font-size: 18px"><b>IKOMA (Ikatan Orang Tua Mahasiswa) + Jas Almamater    </b>
                                        <br>
                                        Rp. 950.000
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-warning" style="width: 700px; margin: 0 auto;">
                            <div class="card-body">
                                <div class="row">
                                    <h4>Daftar SBMPN 2022</h4>
                                    <div class="col-md-6" style="font-weight: bold"  id="pendaftaran">
                                        <ol>
                                            <li>Matematika</li>
                                            <li>Fisika</li>
                                            <li>Bahasa Indonesia</li>
                                            <li>Bahsa Inggris</li>
                                            <li>Tes Skolastik</li>
                                            <li>Tes Bakat Artistik</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Biaya Pendaftaran</h4>
                                        <p class="description" style="font-size: 20px;">Rp.300.000</p>
                                    </div>
                                    <a href="#" class="btn bg-primary text-white btn-lg rounded-pill" style="height: 50px; width:200px; font-size: 16px; line-height: 35px; margin: 0 auto;">DAFTAR SIMANDIRI</a>
                                </div>
                            </div>
                        </div>
                        
                    <h4 class="text-uppercase text-center mt-4">Jadwal Pendaftaran SIMANDIRI 2022</h4><br>
                    <div class="table-responsive  d-flex justify-content-center">
                        <table class="table table-hover table-striped" style="width: 700px; margin-auto: 0 auto;">
                            <thead class="text-white bg-primary">
                                <tr>
                                    <th>Kegiatan</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pendaftaran</td>
                                    <td>9 Juli - 4 Agustus 2022</td>
                                </tr>
                                <tr>
                                    <td>Tes Masuk (UTBK ONLINE)</td>
                                    <td>17 Juli 2021</td>
                                </tr>
                                <tr>
                                    <td>Pengumuman Utama</td>
                                    <td>19 Juli 2021</td>
                                </tr>
                                <tr>
                                    <td>Daftar Ulang Utama</td>
                                    <td>21 Juli - 26 Juli 2021</td>
                                </tr>
                                <tr>
                                    <td>Pengumuman Cadangan</td>
                                    <td>27 Juli 2021</td>
                                </tr>
                                <tr>
                                    <td>Daftar Ulang Cadangan</td>
                                    <td>28 Juli - 31 Juli 2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="rounded pengumuman mt-3">
                                <h6 class="text-center" style="line-height: 80px">Pengumuman Seleksi SNMPN
                                     <span><a href="" class="text-primary" id="click-me">Klik Disini</a></span>
                                </h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="alur-daftar">
                                <p class="text-uppercase d-block mt-5" style="font-size: 20px; font-weight: bold"><a href="">Download alur pendaftaran simandiri 2022</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection