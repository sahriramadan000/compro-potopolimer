@extends('layouts.app')

@section('content')
<div class="breadcrumb__area breadcrumb-space overflow-hidden banner-home-bg ">
    <div class="banner-home__middel-shape inner-top-shape"></div>
    <div class="container">
        <div class="banner-all-shape-wrapper">
            <div class="banner-home__banner-shape-1 first-shape">
                <img class="upDown-top" src="{{ asset('assets/imgs/banner-1/banner-shape-1.svg')}}" alt="img not found">
            </div>
            <div class="banner-home__banner-shape-2 second-shape">
                <img class="upDown-bottom" src="{{ asset('assets/imgs/banner-1/banner-shape-2.svg')}}" alt="img not found">
            </div>
            <div class="right-shape">
                <img class="zooming" src="{{ asset('assets/imgs/inner-img/inner-right-shape.svg')}}" alt="img not found">
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div class="breadcrumb__content text-center">
                    <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">About Us</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="{{ route('home') }}">Home</a></span></li>
                                <li class="active"><span>About Us</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--latest about start-->
<section class="latest-about2__area section-space overflow-hidden">
    <div class="container p-relative z-index-1 shape-wrapper">
        <div class="latest-about2__all-shape">
            {{-- <div class="latest-about2__all-shape-bg-shape">
                <img class="upDown-bottom" src="{{ asset('assets/imgs/latest-about/home-2/about2-bg-shape.svg')}}" alt="img not found">
            </div>
            <div class="latest-about2__all-shape-circle-shape">
                <img class="zooming" src="{{ asset('assets/imgs/latest-about/home-2/about2-circle-img1.svg')}}" alt="img not found">
            </div> --}}
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="latest-about2__content">
                    <h6 class="latest-about2__content-subtitle">About Us</h6>
                    <h2 class="latest-about2__content-title">Professional Photo Polymer Plate</h2>
                    <div class="latest-about2__content-description">
                        <p>
                            Poto Polimer Indonesia is a leading provider of photo polymer printing solutions, dedicated to delivering high-quality products tailored to our clients' needs. With advanced technology and a commitment to excellence, we ensure every project meets our high standards.
                        </p>
                        <p>
                            Our skilled team collaborates closely with clients to create customized solutions that enhance their brand. We are not just a printing company; we are your partner in success, continually innovating to provide the best printing solutions in the industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="media">
                    <img data-parallax='{"scale": 1, "smoothness": 15}' src="{{ asset('assets/imgs/service-ppi/crystal-exposure-solid-machine.jpg') }}" alt="img not found">
                </div>
            </div>
        </div>
    </div>
</section>
<!--latest about end-->

<!--latest Choose Us start-->
<section class="latest-Choose-us__area section-space overflow-hidden latest-Choose-bg mb-5 pb-4">
    <div class="container p-relative z-index-1">
        <div class="row">
            <div class="col-12">
                <div class="latest-Choose-us__content">
                    <h2 class="title wow fadeInLeft animated text-center w-100" style="max-width: 100%;" data-wow-delay=".4s">Our Vision</h2>
                    <p class="wow fadeInLeft animated text-center w-100" style="max-width: 100%;" data-wow-delay=".2s">To become a leading printing Photo Polymer company in Indonesia that prioritizes quality of results and service.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--latest Choose Us end-->

<!-- latest-service2__area start -->
<section class="latest-service2__area mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="latest-service2__title-wrapper text-center mb-40">
                    {{-- <h6 class="latest-service2__title-wrapper-subtitle">Our Mission</h6> --}}
                    <h2 class="latest-service2__title-wrapper-title">Our Mission</h2>
                </div>
            </div>
        </div>
        <div class="row mb-minus-30">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="latest-service2__item text-center mb-30">
                    <div class="latest-service2__item-icon mt-30">
                        <img src="{{ asset('assets/imgs/service/service2/service2-card-img-1.png')}}" alt="img not found">
                    </div>
                    <div class="latest-service2__item-text">
                        {{-- <a href="#!"><h4>Banner Printing</h4></a> --}}
                        <p>Continue to innovate todevelop product quality to themaximum for the best service.</p>
                        {{-- <a href="#!" class="readmore d-flex align-items-center justify-content-center">Read More <i class="fa-solid fa-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="latest-service2__item text-center mb-30">
                    <div class="latest-service2__item-icon-img mt-30">
                        <img src="{{ asset('assets/imgs/service/service2/service2-card-img-2.png')}}" alt="img not found">
                    </div>
                    <div class="latest-service2__item-text">
                        {{-- <a href="#!"><h4>Poster Printing</h4></a> --}}
                        <p>Creating safe, comfortable,disciplined and responsibleworking conditions at work.</p>
                        {{-- <a href="#!" class="readmore d-flex align-items-center justify-content-center">Read More <i class="fa-solid fa-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="latest-service2__item text-center mb-30">
                    <div class="latest-service2__item-icon-img mt-30">
                        <img src="{{ asset('assets/imgs/service/service2/service2-card-img-3.png')}}" alt="img not found">
                    </div>
                    <div class="latest-service2__item-text">
                        {{-- <a href="#!"><h4>Flyer Printing</h4></a> --}}
                        <p>Provide quality humanresources and technologyaccording to consumer needs.</p>
                        {{-- <a href="#!" class="readmore d-flex align-items-center justify-content-center">Read More <i class="fa-solid fa-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="latest-service2__item text-center mb-30">
                    <div class="latest-service2__item-icon-img mt-30">
                        <img src="{{ asset('assets/imgs/service/service2/service2-card-img-3.png')}}" alt="img not found">
                    </div>
                    <div class="latest-service2__item-text">
                        {{-- <a href="#!"><h4>Flyer Printing</h4></a> --}}
                        <p>Trying to improve facilities andinfrastructure according totechnological developments.</p>
                        {{-- <a href="#!" class="readmore d-flex align-items-center justify-content-center">Read More <i class="fa-solid fa-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest-service2__area end -->

<!-- latest-team area start -->
<section class="latest-team__area overflow-hidden section-space latest-team-bg">
    <div class="container">
        <div class="team-top heading-space">
            <div class="latest-team__title-wrapper">
                <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".6s">Our Branches</h6>
                <h2 class="title wow fadeInLeft animated" data-wow-delay=".8s">Explore Our Office Locations</h2>
            </div>
            <div class="latest-team__button-right  wow fadeInRight animated" data-wow-delay=".3s">
                <button class="small-btn  right-icon team__slider-button-prev">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 17L1 9L9 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="small-btn team__slider-button-next">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 17L9 9L1 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="row p-relative">
            <div class="col-12">
                <div class="latest-team__item margin-minus-400 mb-30">
                    <div class="swiper card-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay=".4s">
                                <div class="latest-team__item-media">
                                    <div class="latest-team__item-media-social d-flex">
                                        <a href="https://maps.app.goo.gl/34f3jpkKT7BECh7q6" target="_blank" class="rr-btn"><i class="fa-solid fa-location-dot"></i></a>
                                    </div>
                                    <div class="latest-team__item-media-img-title ">
                                        <h5>Potopolimer</h5>
                                        <a href="#!"><h4>Tangerang</h4></a>
                                    </div>
                                  <div class="latest-item_thumb">
                                    <a href="#!">
                                        <img src="{{ asset('assets/imgs/branch/tanggerang.jpeg') }}" alt="images not found" class="img-fluid">
                                    </a>
                                  </div>
                                </div>
                            </div>

                            <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay=".8s">
                                <div class="latest-team__item-media">
                                    <div class="latest-team__item-media-social d-flex">
                                        <a href="facebook.com" class="rr-btn"><i class="fa-solid fa-location-dot"></i></a>
                                    </div>
                                    <div class="latest-team__item-media-img-title ">
                                        <h5>Potopolimer</h5>
                                        <a href="#!"><h4>Surabaya</h4></a>
                                    </div>
                                    <div class="latest-item_thumb">
                                        <a href="#!">
                                            <img src="{{ asset('assets/imgs/branch/surabaya.webp') }}" alt="images not found" class="img-fluid">
                                        </a>
                                      </div>
                                </div>
                            </div>

                            <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.2s">
                                <div class="latest-team__item-media">
                                    <div class="latest-team__item-media-social d-flex">
                                        <a href="facebook.com" class="rr-btn"><i class="fa-solid fa-location-dot"></i></a>
                                    </div>
                                    <div class="latest-team__item-media-img-title ">
                                        <h5>Potopolimer</h5>
                                        <a href="#!"><h4>Semarang</h4></a>
                                    </div>
                                    <div class="latest-item_thumb">
                                        <a href="#!">
                                            <img src="{{ asset('assets/imgs/branch/semarang.jpg') }}" alt="images not found" class="img-fluid">
                                        </a>
                                      </div>
                                </div>
                            </div>

                            <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.6s">
                                <div class="latest-team__item-media">
                                    <div class="latest-team__item-media-social d-flex">
                                        <a href="facebook.com" class="rr-btn"><i class="fa-solid fa-location-dot"></i></a>
                                    </div>
                                    <div class="latest-team__item-media-img-title ">
                                        <h5>Potopolimer</h5>
                                        <a href="#!"><h4>Medan</h4></a>
                                    </div>
                                    <div class="latest-item_thumb">
                                        <a href="#!">
                                            <img src="{{ asset('assets/imgs/branch/medan.webp') }}" alt="images not found" class="img-fluid">
                                        </a>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest-team area end -->

<!-- Faq area start -->
<section class="question__area overflow-hidden section-space question-bg">
    <div id="primary" class="shape-wrapper">
        <div class="container p-relative">
            <div class="question__all-shape">
                <div class="bg-shape">
                    <img class="upDown" src="{{ asset('assets/imgs/faq/faq-bg-shape.svg') }}" alt="img not found">
                </div>
                <div class="bulet-shape">
                    <img class="upDown-top" src="{{ asset('assets/imgs/faq/faq-bulet_shape.svg') }}" alt="img not found">
                </div>
                <div class="close-shape">
                    <img class="zooming" src="{{ asset('assets/imgs/faq/cross.svg') }}" alt="img not found">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="content-area">
                        <div class="faq">
                            <div id="faq" class="accordion">
                                <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".6s">Have Any Question</h6>
                                <h2 class="title mb-40 wow fadeInLeft animated" data-wow-delay=".8s">Frequently Ask Question</h2>
                                <div class="card wow fadeInLeft animated" data-wow-delay="1s">
                                    <div class="card-header">
                                        <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-1">
                                            Customized Solutions for Your Business
                                        </button>
                                    </div>
                                    <div id="faq-1" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>We recognize that each business has unique needs. Our dedicated team is here to provide tailored solutions that cater specifically to your printing requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft animated" data-wow-delay="1.2s">
                                    <div class="card-header">
                                        <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-2">
                                            Design & Development Support
                                        </button>
                                    </div>
                                    <div id="faq-2" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>Facing challenges with your designs or project development? Our experts are available to assist you with troubleshooting and provide insights to help you achieve your goals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft animated" data-wow-delay="1.4s">
                                    <div class="card-header">
                                        <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-3">
                                            Comprehensive Online Assistance
                                        </button>
                                    </div>
                                    <div id="faq-3" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>Our commitment to excellence extends to our online support. Whether you have inquiries or need guidance, our responsive team is ready to assist you promptly.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft animated" data-wow-delay="1.6s">
                                    <div class="card-header">
                                        <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-4">
                                            Product Usage Guidance
                                        </button>
                                    </div>
                                    <div id="faq-4" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>Not sure how to use our products effectively? We provide detailed instructions and best practices to ensure you get the most out of our printing solutions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft animated" data-wow-delay="1.8s">
                                    <div class="card-header">
                                        <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-5">
                                            Feedback & Improvement
                                        </button>
                                    </div>
                                    <div id="faq-5" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>We value your feedback! If you have suggestions or comments regarding our services, please share them with us. Your insights help us continually improve our offerings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="media">
                        <img data-parallax='{"scale": 1, "smoothness": 15}' src="{{ asset('assets/imgs/service-ppi/Qc-lamp-1.jpg') }}" alt="img not found">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq area end -->

<!-- latest-newsletter area start -->
{{-- <section class="latest-newsletter__area pt-80 pb-80 overflow-hidden latest-newsletter-bg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-xl-12">
                <div class="latest-newsletter__content text-center">
                    <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Subcribe To Our Newsletter</h2>
                    <p class="title wow fadeInLeft animated" data-wow-delay=".1s">Stay updated with the latest news and offerings from Poto Polimer Indonesia. Our professional printing services ensure you receive high-quality prints that are designed to impress and endure. With our advanced equipment and expert knowledge, we’re here to meet all your printing needs.</p>
                    <div class="search custom-search d-flex wow fadeInRight animated" data-wow-delay=".4s">
                        <input type="email" placeholder="Your Email">
                        <button type="submit" class="rr-btn">Subscribe Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- latest-newsletter area end -->
@endsection
