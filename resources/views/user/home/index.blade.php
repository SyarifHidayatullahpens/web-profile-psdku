@extends('layouts.pages-user.main-content')

@section('content')
<main>
    <section class="section-padding pb-0" id="tentang">
        <div class="container mb-5 pb-lg-5">
            <div class="row">
                <div class="col-12" style="text-align:center">
                    <h2 class="mb-3" data-aos="fade-up">Tentang Kampus</h2>
                </div>
                    
                <div class=" col-12 mt-lg-3 mb-lg-5">
                    <p data-aos="fade-up" data-aos-delay="500">
                       Firdaus 
                    </p>
                </div>
            </div>
        </div>
    </section>  

    <section class="section-padding" id="portfolio">
        <div class="container mb-5 pb-lg-5" style="text-align: center">
            <div class="row">
                <div class="col-6 col-6 mt-6 mb-lg-6">
                    <h2 class="mb-5" data-aos="fade-up">DEPARTEMEN TI</h2>
                </div>
                
                <div class="col-lg-6 col-6 mt-6 mb-lg-6">
                    <h2 class="mb-5" data-aos="fade-up">DEPARTEMEN MMB</h2>
                </div>
                
                <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="{{ asset('images/images.jpg') }}" class="image-popup">
                            <img src="{{ asset('images/images.jpg') }}" class="img-fluid" alt="">
                        </a>
                        <p data-aos="fade-up" data-aos-delay="500" style="color: black">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, eligendi!
                        </p>
                    </p>
                </div>
                    
                <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="{{ asset('images/images.jpg') }}" class="image-popup">
                            <img src="{{ asset('images/images.jpg') }}" class="img-fluid" alt="">
                        </a>
                        <p data-aos="fade-up" data-aos-delay="500" style="color: black">
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit odit repellendus quidem?
                        </p>
                    </p>
                </div>
            </div>
    </section>

    <section class="section-padding" id="diploma3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-5 text-center" data-aos="fade-up">Diploma 3</h2>
                    </div>

                    <div class=" col-12 mt-lg-3 mb-lg-5">
                        <p data-aos="fade-up" data-aos-delay="500">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores ad quod distinctio, officia hic neque ullam tenetur blanditiis nesciunt laudantium!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" contact section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-5 text-center" data-aos="fade-up">PMB</h2>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="portfolio-thumb mb-5" data-aos="fade-up">
                        <div class="portfolio-info">   
                        <p data-aos="fade-up" data-aos-delay="500"> 
                                
                            Lorem, ipsum. 
                        </p>  
                                </div>  
                        <div class="col-lg-12 col-12 mt-lg-3 mb-lg-5">      
                            <h4 class="portfolio-title mb-0"  style="font-size:17px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, at.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="section-padding" id="berita">
        <div class="container mb-5 pb-lg-5">
            <div class="row">
                <div class="col-12" style="text-align:center">
                    <h2 class="mb-3" data-aos="fade-up">Berita</h2>
                </div>
                
                <div class="card col-lg-6 col-12 mt-3 mb-lg-5" style="width: 41rem;"  data-aos="fade-up" data-aos-delay="500">
                    <a href="{{ asset('images/people/project-leder-with-disabilities-looking-front-sitting-immobilized-wheelchair-business-office-room.jpg') }}" class="image-popup">
                        <img class="card-img-top" src="{{ asset('images/people/happy-african-american-professional-manager-smiling-looking-camera-headshot-portrait.jpg') }}" alt="Card image cap" style="margin-top: 10px;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title" data-aos="fade-up" data-aos-delay="500">sasa</h5>
                        <p class="card-text" data-aos="fade-up" data-aos-delay="500">
                            lsajs
                        </p>
                        <a href="#" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>
    </section>

</main>
@endsection