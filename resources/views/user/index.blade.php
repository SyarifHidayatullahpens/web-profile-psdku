@extends('layouts.landing-page.main-content')

@section('content')

<head>
    <style>
        #more {
            display: none;
        }

        .contents {
            text-align: justify;
            text-justify: inter-word;
            font-size: 14px;
            font-family: "Open sans", sans-serif;
            line-height: 28px;
            word-spacing: 0;
        }

        .portfolio-item>img {
            height: 236px;
            width: 356px;
            max-width: 100%;
            background-size: cover;
        }
    </style>
</head>
<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tentang Kampus</h2>
                <h3>PENS <span>PSDKU</span></h3>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('images/build-pens.jpeg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>Profile PENS</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li>
                            <i class="bx bx-map">
                            </i>
                            <div>
                                <h5>Alamat</h5>
                                <p>Jl. Raya Lenteng Km2 Batuan, Sumenep, Jawa timur, 69451</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>Sejarah PENS</h5>
                                <p class="contents">Awal sejarah PENS dimulai pada tahun 1985. Saat itu, tim studi awal
                                    Japan
                                    International Cooperation Agency (JICA) untuk bantuan dan kerjasama teknik yang
                                    dikepalai oleh Prof. Y. Naito dari Tokyo Institute of Technology, datang ke
                                    politeknik ini. Setelah melakukan pengamatan dan studi kelayakan di tahun 1986, JICA
                                    menyetujui untuk memulai kerjasama teknik di tahun 1987 dengan mengirim 5 orang
                                    pengajar Indonesia ke perguruan tinggi teknologi di Jepang <span id="back"></span>
                                    <span id="more"><br> Politeknik Elektronika &
                                        Telekomunikasi (PET) 19881- 1992 Pada tanggal 15 Maret 1988, Pemerintah Jepang,
                                        melalui JICA secara resmi memberikan gedung kampus kepada pemerintah Indonesia
                                        lengkap dengan berbagai peralatan pendidikan. Selanjutnya pada tanggal 2 Juni
                                        1988 Politeknik ini diresmikan dengan nama Politeknik Elektronika &
                                        Telekomunikasi(PET)dan sejak saat itulah tahun ajaran dimulai.
                                        <br>Kerjasama dengan JICA pun berlanjut
                                        dengan banyaknya pengajar politeknik yang dikirim ke berbagai perguruan tinggi
                                        teknologi di Jepang dan sebaliknya, pengiriman beberapa ahli dari Jepang ke
                                        politeknik ini. Politeknik Elektronik Surabaya (PES) 1992 - 1996 Pada bulan Juni
                                        1991, Menteri Pendidikan dan Kebudayaan menata ulang keberadaan seluruh
                                        Politeknik, Institut dan sebagian Universitas di Indonesia. Pada saat itu
                                        politeknik ini pun berubah nama menjadi Politeknik Elektronika Surabaya (PES)
                                        yang merupakan bagian dari Institut Teknologi Sepuluh Nopember Surabaya (ITS).
                                        Politeknik Elektronika Negeri Surabaya (PENS) 1996 hingga sekarang Pada tahun
                                        1996, nama politeknik ini kembali diubah oleh Menteri Pendidikan dan Kebudayaan
                                        menjadi Politeknik Elektronika Negeri Surabaya (PENS)</span></p>
                                <a class="btn btn-md btn-primary text-white" id="myBtn" onclick="myFunction()">Read
                                    More</a>
                            </div>
                        </li>
                    </ul>
                    <p>
                        Nama itulah yang kemudian tetap bertahan hingga kini.
                        PENS sendiri memiliki dua departemen yang berada di luar kampus utama yaitu di Sumenep dan
                        Lamongan.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Diploma-ti ======= -->
    <section id="diploma-ti" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h3>DIPLOMA 3<span>TEKNIK INFORMATIKA</span></h3>
            </div>

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/portfolio-details-1.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/portfolio-details-2.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/portfolio-details-3.jpg') }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bego">
                        <p class="contents text-break">
                            Pada saat ini kebutuhan akan teknologi informasi memegang peranan yang sangat penting dan
                            dimasa yang akan datang
                            akan menjadi tulang punggung pertumbuhan ekonomi bangsa. Karena itu, Politeknik Elektronika
                            Negeri Surabaya mendirikan
                            Departemen Teknik Informatika dan Komputer yang terdiri dari empat program studi, yaitu D3
                            Teknik Informatika,
                            D4 Teknik Informatika, D4 Teknik Komputer, serta S2 Terapan Teknik Informatika dan Komputer.
                            Dengan tujuan menjadi pusat
                            unggulan pendidikan teknologi rekayasa dibidang emerging technology yang terkait bidang
                            Teknologi Informasi dan Komputer
                            untuk menghasilkan lulusan yang siap bersaing dipasar global, Departemen Teknik Informatika
                            dan Komputer telah banyak
                            menghasilkan lulusan yang berkualifikasi unggul dan bekerja sebagai Programmer, Software
                            Engineer, Hardware Designer,
                            Network Administrator, Computer System Analyst, Manager/Supervisor, Services/Technical
                            Support, Marketing/Sales, dan lain-lain.
                        </p>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, iure.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= Diploma-MMB ======= -->
    <section id="diploma-mmb" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h3>DIPLOMA 3 <span>MULTIMEDIA BROADCASTING</span></h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/portfolio-details-1.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/portfolio-details-2.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/portfolio-details-3.jpg') }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                        <p class="contents">
                            Pada saat ini kebutuhan akan teknologi informasi memegang peranan yang sangat penting dan
                            dimasa yang akan datang
                            akan menjadi tulang punggung pertumbuhan ekonomi bangsa. Karena itu, Politeknik Elektronika
                            Negeri Surabaya mendirikan
                            Departemen Teknik Informatika dan Komputer yang terdiri dari empat program studi, yaitu D3
                            Teknik Informatika, D4 Teknik Informatika,
                            D4 Teknik Komputer, serta S2 Terapan Teknik Informatika dan Komputer. Dengan tujuan menjadi
                            pusat unggulan pendidikan teknologi rekayasa
                            dibidang emerging technology yang terkait bidang Teknologi Informasi dan Komputer untuk
                            menghasilkan lulusan yang siap bersaing dipasar global,
                            Departemen Teknik Informatika dan Komputer telah banyak menghasilkan lulusan yang
                            berkualifikasi unggul dan bekerja sebagai Programmer,
                            Software Engineer, Hardware Designer, Network Administrator, Computer System Analyst,
                            Manager/Supervisor, Services/Technical Support,
                            Marketing/Sales, dan lain-lain.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= Departement TI ======= -->
    <section id="departement-ti" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h3>DEPARTEMENT <span>TEKNIK INFORMATIKA</span></h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/b.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/f.jpeg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/ss.jpeg') }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                        <!-- <h2>DEPARTEMENT TEKNIK INFORMATIKA DAN KOMPUTER</h2> -->
                        <p class="contents">
                            Pada saat ini kebutuhan akan teknologi informasi memegang peranan yang sangat penting dan
                            dimasa yang akan datang akan menjadi tulang punggung pertumbuhan ekonomi bangsa. Karena itu,
                            Politeknik Elektronika Negeri Surabaya mendirikan Departemen Teknik Informatika dan Komputer
                            yang
                            terdiri dari empat program studi, yaitu D3 Teknik Informatika, D4 Teknik Informatika, D4
                            Teknik Komputer,
                            serta S2 Terapan Teknik Informatika dan Komputer. Dengan tujuan menjadi pusat unggulan
                            pendidikan teknologi
                            rekayasa dibidang emerging technology yang terkait bidang Teknologi Informasi dan Komputer
                            untuk menghasilkan
                            lulusan yang siap bersaing dipasar global, Departemen Teknik Informatika dan Komputer telah
                            banyak menghasilkan
                            lulusan yang berkualifikasi unggul dan bekerja sebagai Programmer, Software Engineer,
                            Hardware Designer, Network
                            Administrator, Computer System Analyst, Manager/Supervisor, Services/Technical Support,
                            Marketing/Sales, dan lain-lain.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= Departements MMB ======= -->
    <section id="departement-mmb" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h3>DEPARTEMENT <span>MULTIMEDIA KREATIF</span></h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/a1.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/s.jpg') }}" alt="">
                            </div>

                            <!-- <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/portfolio-details-3.jpg') }}" alt="">
                            </div> -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                        <p class="contents">
                            Departemen Teknologi Multimedia Kreatif (DTMK) Politeknik Elektronika Negeri Surabaya (PENS)
                            diresmikan pada tahun 2012. Departemen ini menaungi dua Program Studi (Prodi) yakni D3
                            Multimedia Broadcasting (MMB)
                            dan D4 Game Technology (GT). Kedua Prodi ini, bergerak dalam bidang film, video, musik,
                            photography, televisi, radio,
                            dan game. Dengan bertujuan untuk menjadi pusat unggulan pendidikan teknologi multimedia
                            dalam mengembangkan industri
                            kreatif. Untuk mencapai hal tersebut, Departemen ini menghasilkan insan-insan kreatif dengan
                            kemampuan penguasaan
                            teknologi multimedia, serta berperan aktif dalam pengembangan industri kreatif di bidang
                            multimedia. DTMK turut berperan
                            dalam penguatan sumber daya manusia, dimana didalamnya bertugas untuk melakukan perbaikan
                            beban mengajar sesuai standar,
                            serta meningkatkan penelitian dan pengabdian pada masyarakat. Tidak hanya itu tetapi juga
                            sebagai sarana dan prasarana
                            untuk mahasiswa.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======= snmpn ======= -->
    <section id="snmpn" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h3>SNMPN<h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/aa.png') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/b.png') }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                        <br>
                        <h4>Seleksi Nasional Masuk Politeknik Negeri</h4>
                        <br>
                        <p class="contents">Seleksi Nasional Masuk Politeknik Negeri (SNMPN) 2021 merupakan seleksi
                            Jalur Undangan yang diperuntukkan bagi calon peserta/siswa sekolah yang akan
                            melanjutkan pendidikan di Perguruan Tinggi (khusus jenjang Diploma 3) Bidang Vokasi atau
                            Politeknik Negeri di seluruh wilayah Indonesia.
                            Pola seleksi ini tertuang dalam suatu sistem yang terpadu dan diselenggarakan secara
                            serentak melalui seleksi prestasi akademik siswa selama mengikuti pendidikan di Sekolah
                            Lanjutan Tingkat Atas.<span id="less-snmpn"></span>
                            <span id="more-snmpn" style="display:none"><br>Pada tahun 2014-2019, nama SNMPN dikenal
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
                                melalui situs <a
                                    href="http://snmpn.politeknik.or.id/">http://snmpn.politeknik.or.id/</a> dengan cara
                                login menggunakan username dan password yang akan diberikan panitia kepada masing-masing
                                sekolah dan mendaftarkan siswa-siswa terbaiknya.
                                Selanjutnya siswa-siswa tersebut akan diberikan usemame dan password yang dapat
                                digunakan untuk memasukkan data secara on-line.
                                Selanjutnya kami mengharapkan kerjasama semua pihak yang terkait dengan sistem SNMPN
                                2021 sehingga proses ini dapat terlaksana sesuai dengan yang diharapkan.</span></p>
                        <a class="btn btn-md btn-primary text-white" id="btn-snmpn" onclick="infoSnmpn()">Read More</a>
                        <h4 class="mt-3">Pengumuman SNMPN 2021</h4>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= sbmpn ======= -->
    <section id="sbmpn" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h3>SBMPN</h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/c.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('Bizland/assets/img/portfolio/d.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                        <br>
                        <h4>Seleksi Bersama Masuk Politeknik Negeri se Indonesia</h4><br>
                        <p class="contents" style="">SBMPN atau Seleksi Bersama Masuk Politeknik Negeri merupakan jalur
                            masuk Politeknik Negeri dengan cara tes tulis.
                            Hal ini bertujuan untuk memilih calon mahasiswa yang mempunyai kemampuan akademik untuk
                            mengikuti dan menyelesaikan pendidikan
                            di Politeknik sesuai dengan batas waktu yang telah ditetapkan.<span id="less-sbmpn"></span>
                            <span id="more-sbmpn" style="display:none"><br>Nama SBMPN adalah perubahan nama dari jalur
                                UMPN (Ujian Masuk Politeknik Negeri). Pergantian nama merupakan hasil diskusi dan
                                keputusan
                                bersama dalam Forum Direktur Politeknik Negeri se-Indonesia yang diadakan di Surabaya
                                pada Desember 2019. Untuk proses dan tes pendaftaran tetap sama, hanya berganti nama
                                saja.
                                Proses seleksi bagi peserta bisa mendaftar secara online. Semua peserta SBMPN 2021 akan
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
                                nilainya masih cukup tinggi.</span></p>
                        <a class="btn btn-md btn-primary text-white" id="btn-sbmpn" onclick="moreSbmpn()">Read More</a>
                        <h4 class="mt-3">Jadwal Pendaftaran SBMPN 2021</h4><br>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= simandiri ======= -->
    <section id="simandiri" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h3>SIMANDIRI</h3>
            </div>
            <div class="row gy-4">

                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <br>
                        <h4>Seleksi Mandiri Politeknik Elektronika Negeri Surabaya</h4><br>
                        <p class="contents">
                            SIMANDIRI PENS atau Seleksi Mandiri Politeknik Elektronika Negeri Surabaya dimaksudkan untuk
                            memilih calon mahasiswa yang mempunyai kemampuan akademik untuk mengikuti dan menyelesaikan
                            pendidikan di Politeknik sesuai dengan batas waktu yang telah ditetapkan.<span
                                id="less-simandiri"></span>
                            <span id="more-simandiri" style="display:none"><br>Sehubungan dengan keadaan pandemi, Ujian
                                Tulis Seleksi Mandiri (Simandiri) secara offline di kampus Politeknik Elektronika Negeri
                                Surabaya (PENS) ditiadakan. Sebagai gantinya, Seleksi Mandiri dilakukan dengan sistem
                                Ujian Tulis Berbasis Komputer (UTBK)
                                secara online dari tempat tinggal masing-masing dan wajib mengaktifkan web camera.
                                Pendaftaran dan tes masuk dilaksanakan secara online dengan proses seleksi sebagai
                                berikut. Semua peserta UTBK Online Simandiri akan diurutkan menurut nilai ujiannya,
                                kemudian dialokasikan pada program studi pilhannya, dengan ketentuan bahwa peserta yang
                                lebih baik mendapat prioritas untuk dialokasikan lebh dahulu. Jika masih ada tempat di
                                program studi pilihan pertama, ia akan diterima di program studi pilihan pertama. Jika
                                tempat pada program studi pertama telah penuh dan masih ada tempat di program studi
                                pilihan kedua, ia akan diterima di program studi pilihan kedua. Jika tempat pada program
                                studi pilihan kedua telah penuh dan masih ada tempat di program studi pilihan ketiga, ia
                                akan diterima di program studi pilihan ketiga, dan seterusnya. Jika tempat pada program
                                studi pilihan pertama, kedua dan ketiga telah penuh dengan peserta yang lebih baik dari
                                peserta tersebut, maka ia tidak akan diterima walaupun nilainya masih cukup tinggi.
                            </span></p>
                        <a class="btn btn-md btn-primary text-white" id="btn-simandiri" onclick="moreSimandiri()">Read
                            More</a>
                        <h4 class="mt-3">Jadwal Pendaftaran SIMANDIRI 2021</h4><br>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section id="berita" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>BERITA</span></h3>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter=".filter-card"></li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset('Bizland/assets/img/portfolio/a.jpeg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>PENS SIAP KEMBANGKAN SDM UNTUK MASYARAKAT SUMENEP</h4>
                        <p>Selasa, 16 Februari 2021</p><br>
                        <a href="{{ asset('Bizland/assets/img/portfolio/a.jpeg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
                        <a href="#berita1" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset('Bizland/assets/img/portfolio/pengmas1.jpeg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Penerapan Aplikasi Pelayanan Desa Berbasis Mobile</h4>
                        <p>12 September 2020</p>
                        <a href="{{ asset('Bizland/assets/img/portfolio/pengmas1.jpeg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i
                                class="bx bx-plus"></i></a>
                        <a href="{{ url('news-galery/pengmas1') }}" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset('Bizland/assets/img/portfolio/pengmas3.jpeg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>PENS Kampus Sumenep Luncurkan Asiapp Sebagai Solusi Santri</h4>
                        <p>Sabtu 21 September 2021</p>
                        <a href="{{ asset('Bizland/assets/img/portfolio/pengmas3.jpeg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i
                                class="bx bx-plus"></i></a>
                        <a href="{{ url('news-galery/pengmas3') }}" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
    </section>


    <section id="berita1" class="portfolio">
        <div class="container" data-aos="fade-up">
            <h2 class="text-center pt-5">dsnds</h2>
            <div class="d-flex justify-content-center pt-2 mb-5">
                <img src="{{ asset('Bizland/assets/img/portfolio/a.jpeg') }}" class="img-fluid"
                    style="width: 40vw; backround-size: cover;">
            </div>
            <p class="contents">Desa Pegantenan adalah sebuah desa
                yang terletak di Kecamatan Pegantenan Kabupaten Pamekasan Dengan luas wilayah kurang lebih 258.1765 Ha
                dan mempunyai jumlah penduduk 3.492 jiwa (Anonymous, 2018).
                Desa yang merupakan salah satu desa percontohan di Kabupaten Pamekasan ini dikenal dengan sejumlah
                prestasinya, baik di tingkat Kabupaten hingga Provinsi, salahsatunya yakni pada tahun 2018 Desa
                Pegantenan meraih peringkat ke-3 dalam. Perangkingan Desa Terbaik dan Pendampingan P3MD Terbaik
                dalam. Pembangunan dan Pemberdayaan Masyarakat
                Desa Provinsi Jawa Timur Tujuan dari kegiatan pengabdian ini adalah untuk meningkatkan pelayanan Desa
                Pegantenan dalam memberikan pelayanan
                kepada warga dalam pembuataan surat-surat. Selain itu warga juga bisa menerima pengumuman penting dari
                desa melalui aplikasi tersebut. Begitu juga warga bisa
                
                                <br>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, iure.
                menyampaikan aspirasi dan info kejadian di Desa Pegantenan malalui aplikasi tersebut. Dengan adanya
                aplikasi ini diharapkan. Pemerintah Desa dapat berkomunikasi dan
                berinteraksi langsung dengan masyarakat secara update, akurat dan efisien sehingga memudahkan masyarakat
                Desa Pegantenan. 
            </p>

        </div>
        </div>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3><span>Contact Us</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                        atque
                        vitae autem.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

</main><!-- End #main -->

<script src="{{ asset('js/read-more.js') }}"></script>

@endsection