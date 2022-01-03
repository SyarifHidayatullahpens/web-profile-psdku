@extends('layouts.landing-page.main-content')

@section('content')

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
        #more {
            display: none;
        }

        .contents {
            text-align: left;
            text-justify: inter-word;
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
            line-height: 28px;
            padding: 0;
            word-spacing: 0;
            word-break: break-all;
        }
        .iconbox p{
            line-height: 24px;
            word-spacing: 0;
        }
        #more-simandiri {
            padding-top: 10px !important;
        }
        .portfolio-item > img {
            height: 236px;
            width: 356px;
            max-width: 100%;
            background-size: cover;
        }
        #read-more {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }
    </style>
</head>


<main id="main">
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
  
          <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="height: 200px; width: 230px;">
                  <div class="icon">
                      <div class="icon d-flex justify-content-center"><i class="bx bxs-building"></i></div>
                   </div>
                    <div class="title text-center"><a href="#diploma-ti">Diploma</a></div>
                    <p class="description text-center" style="font-size: 16px">Teknik Informatika</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="height: 200px; width: 230px">
                <div class="icon d-flex justify-content-center"><i class="bx bx-building"></i></div>
                <h4 class="title text-center"><a href="#diploma-mmb">Diploma</a></h4>
                <p class="description text-center" style="font-size: 16px">Multimedia Broadcasting</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300" style="height: 200px; width: 230px">
                <div class="icon d-flex justify-content-center"><i class="bx bx-news"></i></div>
                <h4 class="title text-center"><a href="#berita">Berita</a></h4>
                <p class="description text-center" style="font-size: 16px">PSDKU SUMENEP</p>
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
                <h3><span>PENS PSDKU SUMENEP</h3>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('images/build-pens.jpeg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>Profile PENS</h3>
                    <ul>
                        <li>
                            <i class="bx bx-map">
                            </i>
                            <div>
                                <h5>Alamat</h5>
                                <p> Jl. Raya Lenteng Km2, Sumenep, Jawa timur, 69451</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>Sejarah PENS</h5>
                                <p class="description">
                                    Awal sejarah PENS dimulai pada tahun 1985. Saat itu, tim studi awal
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
                                        menjadi Politeknik Elektronika Negeri Surabaya (PENS).<br>
                                        Nama itulah yang kemudian tetap bertahan hingga kini.
                                        PENS sendiri memiliki dua departemen yang berada di luar kampus utama yaitu di Sumenep dan
                                        Lamongan.</span></p>
                                <p class="text-primary text-end" style="cursor: pointer;" id="myBtn"  onclick="myFunction()"><b>Read more</b></p>  
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Diploma-ti ======= -->
    <section id="diploma-ti" class="featured-services">
        <div class="container">
            <div class="section-title">
                <h3>DIPLOMA 3&nbsp<span>TEKNIK INFORMATIKA</span></h3>
            </div>

            <div class="col-md-12d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <p class="description">
                   Pada saat ini kebutuhan akan teknologi informasi memegang peranan yang sangat penting dan
                   dimasa yang akan datang
                   akan menjadi tulang punggung pertumbuhan ekonomi bangsa. Karena itu, Politeknik Elektronika
                   Negeri Surabaya mendirikan
                   Departemen Teknik Informatika dan Komputer yang terdiri dari empat program studi, yaitu D3
                   Teknik Informatika,
                   D4 Teknik Informatika, D4 Teknik Komputer, serta S2 Terapan Teknik Informatika dan Komputer.
                   <br>Dengan tujuan menjadi pusat
                   unggulan pendidikan teknologi rekayasa dibidang emerging technology yang terkait bidang
                   Teknologi Informasi dan Komputer
                   untuk menghasilkan lulusan yang siap bersaing dipasar global, Departemen Teknik Informatika
                   dan Komputer telah banyak
                   menghasilkan lulusan yang berkualifikasi unggul dan bekerja sebagai Programmer, Software
                   Engineer, Hardware Designer,
                   Network Administrator, Computer System Analyst, Manager/Supervisor, Services/Technical
                   Support, Marketing/Sales, dan lain-lain.
               </p>
            </div>
               
            </div>

        </div>
    </section>

    <!-- ======= Diploma-MMB ======= -->
    <section id="diploma-mmb" class="featured-services">
        <div class="container">
            <div class="section-title">
                <h3>DIPLOMA 3 <span>MULTIMEDIA BROADCASTING</span></h3>
            </div>

            <div class="col-md-12 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <p class="description">   
                    Pada saat ini kebutuhan akan teknologi informasi memegang peranan yang sangat penting dan
                    dimasa yang akan datang
                    akan menjadi tulang punggung pertumbuhan ekonomi bangsa. Karena itu, Politeknik Elektronika
                    Negeri Surabaya mendirikan
                    Departemen Teknik Informatika dan Komputer yang terdiri dari empat program studi, yaitu D3
                    Teknik Informatika, D4 Teknik Informatika,
                    D4 Teknik Komputer, serta S2 Terapan Teknik Informatika dan Komputer.<br> Dengan tujuan menjadi
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
                <p>Selasa, 16 Februari 2021</p>
                    <a href="{{ url('news-galery/persetujuan') }}">
                    <p class="text-primary text-end" style="cursor: pointer;" id="read-more"><b>Read more</b></p>    
                    </a>
              </div>
            </div>
           
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="{{ asset('Bizland/assets/img/portfolio/pengmas1.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PENERAPAN APLIKASI PELAYANAN DESA BERBASIS MOBILE</h4>
                <p>Senin, 16 November 2020</p>
                <a href="{{ url('news-galery/pengmas1') }}">
                    <p class="text-primary text-end" style="cursor: pointer;" id="read-more"><b>Read more</b></p>    
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="{{ asset('Bizland/assets/img/portfolio/pengmas3.jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PENS KAMPUS SUMENEP LUNCURKAN ASIAPP SEBAGAI SOLUSI SANTRI</h4>
                <p>Sabtu, 23 Oktober 2021</p>
                <a href="{{ url('news-galery/pengmas3') }}">
                    <p class="text-primary text-end" style="cursor: pointer;" id="read-more"><b>Read more</b></p>    
                </a>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>    

</main><!-- End #main -->

<script src="{{ asset('js/read-more.js') }}"></script>

@endsection