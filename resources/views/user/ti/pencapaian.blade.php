@extends('layouts.landing-page.it')
@section('pageTitle', "Pencapaian")

@section('content')

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

        h5 {
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            color: blue;
        }
        ol li {
            font-size: 14px;
            font-family: 'Roboto', sans-serif;

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
    <div class="content" style="width: 640px; margin: 0 auto;  margin-top: 30px;">
        <h5>RUMUSAN CAPAIAN PEMBELAJARAN PRODI D3 TEKNIK INFORMATIKA</h5>
        <h6>Sikap</h6>
        <ul>
            <li><b>Bertakwa </b>kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius.</li>
            <li><b>Menjunjung tinggi</b> nilai kemanusiaan dalam menjalankan tugas berdasarkan agama,moral, dan etika.
            </li>
            <li><b>Berkontribusi </b>dalam peningkatan mutu kehidupan bermasyarakat, berbangsa,
                bernegara, dan kemajuan peradaban berdasarkan Pancasila.</li>
            <li><b>Berperan </b>sebagai <b>warga negara </b>yang bangga dan cinta tanah air,
                memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa.</li>
            <li><b>Menghargai keanekaragaman budaya,</b> pandangan, agama, dan kepercayaan,
                serta pendapat atau temuan orisinal orang lain.</li>
            <li><b>Bekerja sama </b>dan <b>memiliki kepekaan </b>sosial serta kepedulian terhadap masyarakat dan
                lingkungan.
                Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara.</li>
            <li>Menginternalisasi nilai, <b>norma</b>, dan <b>etika </b> akademik.</li>
            <li>Menunjukkan sikap <b>bertanggungjawab</b> atas pekerjaan di bidang keahliannya secara mandiri, dan</li>
            <li>Menginternalisasi semangat <b>kemandirian, kejuangan,</b> dan </b>kewirausahaan</b></li>
        </ul>
        <h4>Penguasaan Pengetahuan</h4>
        <ul>
            <li>Menguasai konsep <b>matematika terapan, pengetahuan dasar TIK </b>(Algoritma, Pemrograman, Basis Data),
                sains dan prinsip rekayasa serta bidang TIK lainnya dalam pengembangan produk TIK (P-1).</li>
            <li>Menguasai <b>metode pengembangan</b> produk TIK untuk memberikan solusi yang tepat melalui satu atau
                lebih domain aplikasi (P-2).</li>
            <li>Menguasai teknik <b>dokumentasi</b> dan <b>penjaminan mutu</b> produk TIK (P-3).</li>
            <li>Menguasai <b>prinsip komputasi cerdas </b>untuk menghasilkan alternatif solusi yang efektif (P-4).</li>
            <li>Menguasai pengetahuan tentang </b>prinsip keselamatan </b>dan<b> kesehatan kerja (K3)</b> dalam
                pengembangan produk TIK (P-5).</li>
            <li>Menguasai pengetahuan tentang <b>teknik berkomunikasi lisan</b> dan <b>tulisan</b> menggunakan bahasa
                nasional dan internasional (P-6).</li>
            <li>Menguasai pengetahuan tentang <b>perkembangan teknologi</b> dan <b>issue terkini</b> (etika, sosial,
                legal dan ekonomi) terkait bidang TIK (P-7).</li>
        </ul>
        <h5>Keterampilan Khusus</h5>
        <ul>
            <li>Mampu <b>menerapkan matematika </b>terapan, pengetahuan komputasi , sains dan prinsip rekayasa serta
                bidang TIK lainnya dalam pengembangan perangkat lunak multiplatform (KK1).</li>
            <li>Mampu<b> mendesain</b> dan <b>mengimplementasikan </b>kebutuhan jaringan dan infrastrukturnya dalam
                pengembangan perangkat lunak (KK-2).</li>
            <li>Mampu <b>mengidentifikasi</b> dan <b>menganalisis</b> kebutuhan, merancang, merealisasikan dan melakukan
                pengujian produk TIK yang inovatif dan aplikatif sesuai standar yang berlaku dengan memperhatikan faktor
                etika, sosial, legal dan ekonomi (KK-3).</li>
            <li>Mampu <b>mendokumentasikan</b> dan melakukan penjaminan mutu pada setiap proses pengembangan,
                penggunaan, modifikasi, pemeliharaan dan keamanan produk TIK menggunakan standar yang berlaku (KK-4).
            </li>
            <li>Mampu memanfaatkan <b>komputasi cerdas</b> dalam proses pemecahan masalah berdasarkan analisis dan
                informasi pada produk TIK (KK-4).</li>
            <li>Mampu <b>mengelola sumberdaya</b> dalam pengembangan produk TIK dengan memanfaatkan prinsip-prinsip
                managemen proyek dan memperhatikan Keselamatan dan Kesehatan Kerja (K3). (KK-5)</li>
            <li>Mampu menggunakan <b>teknologi terkini </b>dan <b>menganalisis</b> dampak komputasi terhadap individu,
                organisasi dan masyarakat (KK-6).</li>
        </ul>
        <h5>Keterampilan Umum</h5>
        <ul>
            <li>Mampu menerapkan pemikiran <b>logis, kritis, inovatif, bermutu,</b> dan <b>terukur</b> dalam melakukan
                pekerjaan yang
                spesifik di <b>bidang keahliannya</b> serta sesuai dengan standar kompetensi kerja bidang yang
                bersangkutan
                (KU-1).</li>
            <li>Mampu menunjukkan kinerja <b>mandiri, bermutu</b> dan <b>terukur </b>(KU-2). Mampu mengkaji kasus
                penerapan ilmu
                pengetahuan dan teknologi yang <b>memperhatikan</b> dan <b>menerapkan </b> humaniora sesuai dengan
                bidang
                keahliannya dalam rangka menghasilkan prototype, prosedur baku, desain atau karya seni, menyusun hasil
                kajiannya dalam bentuk kertas kerja, spesifikasi desain, atau esai seni, dan mengunggahnya dalam laman
                perguruan tinggi (KU-3).</li>
            <li>Mampu menyusun <b>hasil kajian</b> tersebut di atas dalam bentuk kertas kerja, spesifikasi desain, atau
                esai seni, dan mengunggahnya dalam laman perguruan tinggi (KU-4).</li>
            <li>Mampu <b>mengambil keputusan</b> secara tepat berdasarkan prosedur baku, spesifikasi desain, persyaratan
                keselamatan dan keamanan kerja dalam melakukan supervisi dan evaluasi pada pekerjaannya (KU-5)</li>
            <li>Mampu <b>memelihara</b> dan <b>mengembangkan</b> jaringan kerja sama dan hasil kerja sama di dalam
                maupun di luar
                lembaganya (KU-6).</li>
            <li>Mampu <b>bertanggungjawab</b> atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi
                terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggungjawabnya
                (KU-7).</li>
            <li>Mampu melakukan <b>proses evaluasi diri</b> terhadap kelompok kerja yang berada dibawah tanggung
                jawabnya, dan mampu mengelola pembelajaran secara mandiri (KU-8).</li>
            <li>Mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin
                <b>kesahihan</b> dan
                <b>mencegah plagiasi</b> (KU-9).</li>
            <li>Mampu <b>mengenali</b> kebutuhan, melakukan adaptasi dan mendemonstrasikan kemampuan dalam melanjutkan
                pengembangan diri (belajar sepanjang hayat) (KU-10).</li>
            <li>Mampu <b>berkomunikasi</b> dengan menggunakan bahasa internasional secara lisan dan tulisan (KU-11).</li>
        </ul>
    </div>
</div>
<br>
@endsection