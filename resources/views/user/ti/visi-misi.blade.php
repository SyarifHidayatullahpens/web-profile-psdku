@extends('layouts.landing-page.it')
@section('pageTitle', "Visi & Misi")

@section('content')

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

        h5 {
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            color: blue;
        }
        ul li {
            font-size: 16px;
            font-family: 'Roboto', sans-serif;
        }
        h6 {
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            color: #727277;
        }
        .content {
            height: auto;
            background: #ffff;
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
            box-shadow: 0px 0px 0px grey;
            -webkit-transition: box-shadow .6s aese-out;
            box-shadow: .8px .9px 3px grey;
        }

        .card {
            border-style: none;
        }
    </style>
</head>
<div class="card mt-5">
    <div class="content" style="width: 640px; margin: 0 auto; margin-top: 30px;">
        <h5>Visi & Misi</h5>
        <h6>VISI PRODI D3 TEKNIK INFORMATIKA</h6>
        <p class="description">Menjadi Pusat Unggulan pendidikan Teknologi Rekayasa di bidang Emerging technology yang
            terkait dengan bidang Teknologi Informasi dan Komunikasi (TIK) dalam skala nasional maupun internasional</p>
        <h6>MISI PRODI D3 TEKNIK INFORMATIKA</h6>
        <p class="description">Dalam rangka mewujudkan Visi tersebut di atas, dan sesuai dengan Misi PENS yang kemudian
            dirumuskan menjadi Misi Program Studi D4 teknik Informatika, berikut ini adalah misi yang diemban oleh
            Program Studi D4 teknik Informatika:</p>
        <ul>
            <li>Menyelenggarakan <b>proses pendidikan</b> untuk menjadi pusat penghasil tenaga profesional unggulan
                bidang
                teknologi informasi khususnya di bidang sistim informasi dan basis data, rekayasa perangkat lunak baik
                pada perangkat desktop, web maupun mobile dan jaringan komputer yang berpikiran terbuka, kreatif dan
                siap bersaing di era global.</li>
            <li>Secara aktif menyelenggarakan <b>kegiatan penelitian</b> terapan bidang teknologi informasi yang
                menghasilkan
                karya inovatif untuk menyelesaikan masalah-masalah bidang teknologi informasi.</li>
            <li>Secara aktif melakukan <b>pemanfaatan hasil pendidikan dan penelitian</b> di bidang teknologi informasi untuk
                menyelenggarakan kegiatan pengabdian kepada masyarakat maupun industri.</li>
            <li><b>Membangun, melestarikan </b>dan menerapkan nilai – nilai etika, moral akademis, dan sosial kemasyarakatan</li>
        </ul>
    </div>
</div>
<br>
@endsection