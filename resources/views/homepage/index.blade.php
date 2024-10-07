@extends('layouts.app')

@section('content')
    <!-- Banner area start -->
    <section class="banner-home overflow-hidden banner-home-bg p-relative">
        <div class="banner-home__middel-shape"></div>
        <div class="container p-relative z-index-1">
            <div class="banner-all-shape-wrapper">
                <div class="banner-home__small-red">
                    <img data-parallax='{"y": -160, "smoothness": 15}' src="{{ asset('assets/imgs/banner-1/small-red.svg') }}" alt="img not found">
                </div>
                <div class="banner-home__small-parpale">
                    <img data-parallax='{"x": -160, "smoothness": 15}' src="{{ asset('assets/imgs/banner-1/small-parpale.svg') }}" alt="img not found">
                </div>
                <div class="banner-home__small-blue">
                    <img data-parallax='{"x": -160, "smoothness": 15}' src="{{ asset('assets/imgs/banner-1/small-blue.svg') }}" alt="img not found">
                </div>
                <div class="banner-home__blue-dot-shape">
                    <img data-parallax='{"x": -160, "smoothness": 15}' src="{{ asset('assets/imgs/banner-1/blue-dot.svg') }}" alt="img not found">
                </div>
                <div class="banner-home__red-shape">
                    <img data-parallax='{"x": -160, "smoothness": 15}' src="{{ asset('assets/imgs/banner-1/red-dot.svg') }}" alt="img not found">
                </div>
                <div  class="banner-home__card1-shape">
                    <img data-parallax='{"y": -160, "smoothness": 15}' src="{{ asset('assets/imgs/banner-1/banner-top-1-cart.png') }}" alt="img not found">
                </div>
                <div class="banner-home__card2-shape">
                    <img data-parallax='{"x": -160, "smoothness": 15}' src="{{ asset('assets/imgs/banner-1/banner-bottom-2-cart.png') }}" alt="img not found">
                </div>
                <div class="banner-home__cup-shape">
                    <img class="zooming" src="{{ asset('assets/imgs/banner-1/cup.png')}}" alt="img not found">
                </div>
                <div class="banner-home__blue-shape d-none d-md-block">
                    <img data-parallax='{"y": -160, "smoothness": 15}' src="{{ asset('assets/imgs/banner-1/blue-shape.svg')}}" alt="img not found">
                </div>
                <div class="banner-home__parpale-shape d-none d-md-block">
                    <img data-parallax='{"y": -160, "smoothness": 15}' src="{{ asset('assets/imgs/banner-1/parpale-shape.svg')}}" alt="img not found">
                </div>
                <div class="banner-home__banner-shape-1">
                    <img class="upDown-top" src="{{ asset('assets/imgs/banner-1/banner-shape-1.svg')}}" alt="img not found">
                </div>
                <div class="banner-home__banner-shape-2">
                    <img class="upDown-bottom" src="{{ asset('assets/imgs/banner-1/banner-shape-2.svg')}}" alt="img not found">
                </div>
                <div class="banner-home__banner-right-shape d-none d-md-block">
                    <img class="" src="{{ asset('assets/imgs/banner-1/big-right-shape.png')}}" alt="img not found">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="banner-home__content p-relative">
                        <h6 class="sub-title mb-20 mb-sm-10 mb-xs-5 wow fadeInLeft animated" data-wow-delay="1s">Welcome To Potopolimer Indonesia</h6>
                        <h1 class="title mb-15 mb-xs-10 wow fadeInLeft animated" data-wow-delay="1.2s">Product Design & Printing Plate Polymer</h1>
                        <div class="description mb-20 mb-sm-15 mb-xs-10 wow fadeInLeft animated" data-wow-delay="1.4s">
                            <p>There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour or randomised words which don't look even.</p>
                        </div>
                        <div class="banner-home__btn__wrapper d-flex flex-wrap mt-40 mt-md-35 mt-sm-30 mt-xs-25">
                            <a href="service.html" class="rr-btn wow fadeInLeft animated" data-wow-delay="1.5s">Our Service</a>
                            <a href="about-us.html" class="rr-btn btn-transparent wow fadeInLeft animated" data-wow-delay="1.6s">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="banner-home__media text-sm-center text-xs-center mt-sm-40">
                        <img class="img-fluid" src="{{ asset('assets/imgs/banner-1/revew/big-buttol-img.png') }}" alt="img not found">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner area end -->

    <!-- feature area start -->
    <section class="latest-feature__area pt-80 pb-50 latest-feature-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 ">
                    <div class="latest-feature__item mb-30 d-flex wow fadeInLeft animated" data-wow-delay=".8s">
                        <div class="latest-feature__item-icon">
                            <img src="{{ asset('assets/imgs/feature/feature-img1.svg') }}" alt="img not fount">
                        </div>
                        <div class="latest-feature__item-content">
                            <h4>Printing Services</h4>
                            <p>There are many variations of passages lorem Ipsum available the majority have some form by injected.</p>
                            <a href="service-details.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 ">
                    <div class="latest-feature__item mb-30 d-flex wow fadeInLeft animated" data-wow-delay="1.2s">
                        <div class="latest-feature__item-icon">
                            <img src="{{ asset('assets/imgs/feature/feature-img2.svg') }}" alt="img not fount">
                        </div>
                        <div class="latest-feature__item-content">
                            <h4>Design & Branding</h4>
                            <p>There are many variations of passages lorem Ipsum available the majority have some form by injected.</p>
                            <a href="service-details.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 ">
                    <div class="latest-feature__item mb-30 d-flex wow fadeInLeft animated" data-wow-delay="1.6s">
                        <div class="latest-feature__item-icon call-center">
                            <img src="{{ asset('assets/imgs/feature/feature-img3.svg') }}" alt="img not fount">
                        </div>
                        <div class="latest-feature__item-content">
                            <h4>Best Online Support</h4>
                            <p>There are many variations of passages lorem Ipsum available the majority have some form by injected.</p>
                            <a href="contact.html">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end -->

    <!--latest Choose Us start-->
    <section class="latest-Choose-us__area section-space overflow-hidden latest-Choose-bg">
        <div class="container p-relative z-index-1">
            <div class="latest-Choose-us__all-shape">
                <div class="latest-Choose-us__bg-shape">
                    <img class="upDown-bottom img-fluid" src="{{ asset('assets/imgs/choose-us/bg-shape.svg') }}" alt="img not found">
                </div>
                <div class="latest-Choose-us__bag-shape">
                    <img class="zooming img-fluid" src="{{ asset('assets/imgs/choose-us/bag-shape.png') }}" alt="img not found">
                </div>
                <div class="latest-Choose-us__cap-shape">
                    <img class="upDown-top img-fluid" src="{{ asset('assets/imgs/choose-us/cap-shape.png') }}" alt="img not found">
                </div>
            </div>
            <div class="latest-Choose-us__media-experience-box d-flex" data-parallax='{"y": -160, "smoothness": 15}'>
                <div class="title">
                    <h3><span class="count">25</span>+</h3>
                    <h4>Years</h4>
                </div>
                <div class="description">
                    <p>Of experience in printing service</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="latest-Choose-us__content mb-40">
                        <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".6s">Why Choose Us</h6>
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".8s">Why People Choose Our Printfix?</h2>
                        <p class="wow fadeInLeft animated" data-wow-delay="1s">There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour or randomised words which don't look even.</p>

                        <div class="latest-Choose-us__content-text d-flex">
                            <div class="latest-Choose-us__content-text-box wow fadeInLeft animated" data-wow-delay="1.2s">
                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i>Printed in full-color</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Variety of paper sizes</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Double-sided</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Optional finishing</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Professional Designs</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Quality Assurance By Expertise</li>
                                </ul>

                            </div>
                        </div>
                        <div class="latest-Choose-us__content-btn wow fadeInLeft animated" data-wow-delay="1.4s">
                            <a href="about-us.html" class="rr-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <div class="latest-Choose-us__media d-flex flex-row">
                        <div class="latest-Choose-us__media-img1">
                            <img class="img-fluid" src="{{ asset('assets/imgs/choose-us/chooes-us-img1.jpg') }}" alt="image not found">
                        </div>
                        <div class="latest-Choose-us__media-img2">
                            <img src="{{ asset('assets/imgs/choose-us/chooes-us-img2.jpg') }}" alt="image not found" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--latest Choose Us end-->

    <!-- service area start -->
    <section class="latest-service__area pt-120 pb-90 p-relative overflow-hidden latest-service-bg">
        <div class="container p-relative">
            <div class="latest-service__all-shape">
                <div class="latest-service__right-shape">
                    <img class="upDown" src="{{ asset('assets/imgs/service/right-shape.svg') }}" alt="img not found">
                </div>
                <div class="latest-service__bg-shape">
                    <img class="upDown" src="{{ asset('assets/imgs/service/service-bg-shape.png') }}" alt="img not found">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-service__title-box mb-40 text-center">
                        <div class="latest-service__title-box-subtitle wow fadeInLeft animated" data-wow-delay=".6s">
                            <h6>Our Main Services</h6>
                        </div>
                        <div class="latest-service__title-box-title wow fadeInLeft animated" data-wow-delay=".8s">
                            <h2>Professional Digital Printing</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay="1s">
                        <div class="latest-service__item-icon">
                            <img src="{{ asset('assets/imgs/service/service1.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Top Quality Prints</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay="1.2s">
                        <div class="latest-service__item-icon">
                            <img src="{{ asset('assets/imgs/service/service2.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Mix and match colors</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay="1.4s">
                        <div class="latest-service__item-icon">
                            <img src="{{ asset('assets/imgs/service/service3.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Shipping worldwide</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay="1.2s">
                        <div class="latest-service__item-icon service-4">
                            <img src="{{ asset('assets/imgs/service/service4.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Offset Printing</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay="1.4s">
                        <div class="latest-service__item-icon">
                            <img src="{{ asset('assets/imgs/service/service5.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Quality Guarantee</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay="1.6s">
                        <div class="latest-service__item-icon">
                            <img src="{{ asset('assets/imgs/service/service6.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Reorder quickly</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- latest-counter area end -->
    <section class="latest-counter__area pt-75 pb-75 pt-xs-30 pb-xs-60   latest-counter-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                   <div class="latest-counter__counter-box wow fadeInLeft animated" data-wow-delay="1s">
                        <div class="latest-counter__content text-center">
                            <div class="latest-counter__content__counter-img mt-40">
                                <img src="{{ asset('assets/imgs/counter/home1-counter-up-1.svg') }}" alt="img not found">
                            </div>
                            <h5><span class="count">270</span>+</h5>
                            <span>Happy Customers</span>
                        </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="latest-counter__content text-center wow fadeInLeft animated" data-wow-delay="1.2s">
                        <div class="latest-counter__content__counter-img">
                            <img src="{{ asset('assets/imgs/counter/home1-counter-up-2.svg') }}" alt="img not found">
                        </div>
                        <h5><span class="count">1320</span>+</h5>
                        <span>Project Complate</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="latest-counter__content text-center wow fadeInLeft animated" data-wow-delay="1.4s">
                        <div class="latest-counter__content__counter-img man-icon">
                            <img src="{{ asset('assets/imgs/counter/home1-counter-up-3.svg') }}" alt="img not found">
                        </div>
                        <h5><span class="count">180</span>+</h5>
                        <span>Experts Team</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="latest-counter__content text-center wow fadeInLeft animated" data-wow-delay="1.6s">
                        <div class="latest-counter__content__counter-img ellipse-icon">
                            <img src="{{ asset('assets/imgs/counter/home1-counter-up-4.svg') }}" alt="img not found">
                        </div>
                        <h5><span class="count">15</span>+</h5>
                        <span>Years Of Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-counter area start -->

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
                                                Appropriate For Your Specific Business
                                            </button>
                                        </div>
                                        <div id="faq-1" class="collapse" data-bs-parent="#faq">
                                            <div class="card-body">
                                                <p>The other hand we denounce with righteou indg ation and dislike men who are so beguiled and demorali ed by the of pleasure of the moment. Dislike men who are so beguiled demoraliz worlds.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInLeft animated" data-wow-delay="1.2s">
                                        <div class="card-header">
                                            <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-2">
                                                Design & Development Troubleshooting
                                            </button>
                                        </div>
                                        <div id="faq-2" class="collapse" data-bs-parent="#faq">
                                            <div class="card-body">
                                                <p>The other hand we denounce with righteou indg ation and dislike men who are so beguiled and demorali ed by the of pleasure of the moment. Dislike men who are so beguiled demoraliz worlds.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInLeft animated" data-wow-delay="1.4s">
                                        <div class="card-header">
                                            <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-3">
                                                Online Support & Action
                                            </button>
                                        </div>
                                        <div id="faq-3" class="collapse" data-bs-parent="#faq">
                                            <div class="card-body">
                                                <p>The other hand we denounce with righteou indg ation and dislike men who are so beguiled and demorali ed by the of pleasure of the moment. Dislike men who are so beguiled demoraliz worlds.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="media">
                            <img data-parallax='{"scale": 1.3, "smoothness": 15}' src="{{ asset('assets/imgs/faq/faq.jpg') }}" alt="img not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq area end -->

    <!-- latest-team area start -->
    <section class="latest-team__area overflow-hidden section-space latest-team-bg">
        <div class="container">
            <div class="team-top heading-space">
                <div class="latest-team__title-wrapper">
                    <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".6s">Our Team</h6>
                    <h2 class="title wow fadeInLeft animated" data-wow-delay=".8s">Meet Our Team Member</h2>
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
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Designer</h5>
                                            <a href="team-details.html"><h4>Arron Rodri</h4></a>
                                        </div>
                                      <div class="latest-item_thumb">
                                        <a href="team-details.html">
                                            <img src="{{ asset('assets/imgs/latest-team/letest-team-img1.jpg') }}" alt="images not found" class="img-fluid">
                                        </a>
                                      </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay=".8s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Operator</h5>
                                            <a href="team-details.html"><h4>Stifen Simons</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="{{ asset('assets/imgs/latest-team/letest-team-img2.jpg') }}" alt="images not found" class="img-fluid">
                                            </a>
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.2s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Senior Desinger</h5>
                                            <a href="team-details.html"><h4>Josephine Ava</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="{{ asset('assets/imgs/latest-team/letest-team-img3.jpg') }}" alt="images not found" class="img-fluid">
                                            </a>
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.6s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Designer</h5>
                                            <a href="team-details.html"><h4>William Mark</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="{{ asset('assets/imgs/latest-team/letest-team-img4.jpg') }}" alt="images not found" class="img-fluid">
                                            </a>
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.6s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Designer</h5>
                                            <a href="team-details.html"><h4>Michael David</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="{{ asset('assets/imgs/latest-team/letest-team-img5.jpg') }}" alt="images not found" class="img-fluid">
                                            </a>
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.6s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Designer</h5>
                                            <a href="team-details.html"><h4>Savannah Zoe</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="{{ asset('assets/imgs/latest-team/letest-team-img6.jpg') }}" alt="images not found" class="img-fluid">
                                            </a>
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.6s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Designer</h5>
                                            <a href="team-details.html"><h4>William Mark</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="{{ asset('assets/imgs/latest-team/letest-team-img7.jpg') }}" alt="images not found" class="img-fluid">
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

    <!-- latest-project area start -->
    <section class="project-area pt-120 overflow-hidden latest-project-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project__title text-center">
                        <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".6s">Our Case Study</h6>
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".8s">Create Stunning Print For Your Business</h2>
                    </div>
                </div>
            </div>
           <div class="project-row-custom">
              <div class="col-custom p-relative item1 wow fadeInLeft animated" data-wow-delay=".6s">
                 <div class="project-item p-relative " >
                    <div class="project-thumb">
                       <img src="{{ asset('assets/imgs/projact/projact-img1.jpg') }}" alt="img">
                       <h3 class="project-title"><a href="portfolio-details.html">T-Shirt Design</a></h3>
                    </div>
                 </div>
              </div>
              <div class="col-custom p-relative wow fadeInLeft animated" data-wow-delay=".8s">
                 <div class="project-item p-relative item2 " >
                    <div class="project-thumb">
                        <img src="{{ asset('assets/imgs/projact/projact-img2.jpg') }}" alt="img">
                        <h3 class="project-title"><a href="portfolio-details.html">Custom Design</a></h3>
                    </div>
                 </div>
              </div>
              <div class="col-custom p-relative active wow fadeInLeft animated" data-wow-delay="1s">
                 <div class="project-item p-relative item3 " >
                    <div class="project-thumb">
                        <img src="{{ asset('assets/imgs/projact/projact-img3.jpg') }}" alt="img">
                        <h3 class="project-title"><a href="portfolio-details.html">Satisfied Design</a></h3>
                    </div>
                 </div>
              </div>
              <div class="col-custom p-relative wow fadeInLeft animated" data-wow-delay="1.2s">
                 <div class="project-item p-relative item4">
                    <div class="project-thumb">
                        <img src="{{ asset('assets/imgs/projact/projact-img4.jpg') }}" alt="img">
                        <h3 class="project-title"><a href="portfolio-details.html">Promo Design</a></h3>
                    </div>
                 </div>
              </div>
              <div class="col-custom p-relative wow fadeInLeft animated" data-wow-delay="1.2s">
                 <div class="project-item p-relative item5">
                    <div class="project-thumb">
                        <img src="{{ asset('assets/imgs/projact/projact-img5.jpg') }}" alt="img">
                        <h3 class="project-title"><a href="portfolio-details.html">Cups Design</a></h3>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
    <!-- latest-project area end -->

    <!-- latest-testimonial area start -->
    <section class="testimonial__area overflow-hidden section-space p-relative" data-bg-color="#fff">
        <div class="container">
            <div class="testimonial__big-dotted-shape">
                <img src="{{ asset('assets/imgs/testimonial/big-dotted.svg') }}" alt="img not found">
            </div>
            <div class="testimonial__bg-shape">
                <img class="upDown" src="{{ asset('assets/imgs/testimonial/bg-shape.svg') }}" alt="img not found">
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial__title-wrapper text-center mb-40">
                        <h6 class="testimonial__title-wrapper-subtitle wow fadeInLeft animated" data-wow-delay=".2s">Testimonial</h6>
                        <h2 class="testimonial__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".4s">What Our Client Says</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testi-carousel-wrap text-center">
                        <div class="testi-thumb-wrap">
                            <div class="swiper thumb-carousel">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-thumb">
                                            <img src="{{ asset('assets/imgs/testimonial/circle-image.jpg')}}" alt="testi">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-thumb">
                                            <img src="{{ asset('assets/imgs/testimonial/circle-image-2.png')}}" alt="testi">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-thumb">
                                            <img src="{{ asset('assets/imgs/testimonial/circle-image-3.png')}}" alt="testi">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-thumb">
                                            <img src="{{ asset('assets/imgs/testimonial/circle-image.jpg')}}" alt="testi">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-thumb">
                                            <img src="{{ asset('assets/imgs/testimonial/circle-image-2.png')}}" alt="testi">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-thumb">
                                            <img src="{{ asset('assets/imgs/testimonial/circle-image-3.png')}}" alt="testi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper content-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <p>
                                            You could even ask influencers to write a
                                            blog post for their own website that reviews your product or services, plus
                                            the tips they learned through working with you. This gets your business in
                                            front of even more readers and prospective target clients.
                                        </p>
                                        <div class="testimonial__content-title">
                                            <h4>Glean Philips</h4>
                                            <h6>Product Manager</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <p>
                                            You could even ask influencers to write a
                                            blog post for their own website that reviews your product or services, plus
                                            the tips they learned through working with you. This gets your business in
                                            front of even more readers and prospective target clients.
                                        </p>
                                        <div class="testimonial__content-title">
                                            <h4>Glean Philips</h4>
                                            <h6>Product Manager</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <p>
                                            You could even ask influencers to write a
                                            blog post for their own website that reviews your product or services, plus
                                            the tips they learned through working with you. This gets your business in
                                            front of even more readers and prospective target clients.
                                        </p>
                                        <div class="testimonial__content-title">
                                            <h4>Glean Philips</h4>
                                            <h6>Product Manager</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <p>
                                            You could even ask influencers to write a
                                            blog post for their own website that reviews your product or services, plus
                                            the tips they learned through working with you. This gets your business in
                                            front of even more readers and prospective target clients.
                                        </p>
                                        <div class="testimonial__content-title">
                                            <h4>Glean Philips</h4>
                                            <h6>Product Manager</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <p>
                                            You could even ask influencers to write a
                                            blog post for their own website that reviews your product or services, plus
                                            the tips they learned through working with you. This gets your business in
                                            front of even more readers and prospective target clients.
                                        </p>
                                        <div class="testimonial__content-title">
                                            <h4>Glean Philips</h4>
                                            <h6>Product Manager</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <p>
                                            You could even ask influencers to write a
                                            blog post for their own website that reviews your product or services, plus
                                            the tips they learned through working with you. This gets your business in
                                            front of even more readers and prospective target clients.
                                        </p>
                                        <div class="testimonial__content-title">
                                            <h4>Glean Philips</h4>
                                            <h6>Product Manager</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-buttons d-flex justify-content-between">
                                <div class="testimonial-prev"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="testimonial-next"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-testimonial area end -->

    <!-- blog-news area start -->
    <section class="latest-blog__area pb-60 overflow-hidden latest-blog-bg">
        <div class="container">
            <div class="blog-top heading-space2">
                <div class="latest-blog__title-wrapper">
                    <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".2s">Blog Post</h6>
                    <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Read Latest News & Blog</h2>
                </div>
                <div class="latest-blog__button-right fadeInRight animated" data-wow-delay=".3s">
                    <button class="small-btn small-btn-transparent blog__slider-button-prev">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 17L1 9L9 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="small-btn small-btn-transparent blog__slider-button-next">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17L9 9L1 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="latest-blog__item mb-30 wow fadeInLeft animated" data-wow-delay=".8s">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-slide-inner">
                                        <div class="latest-blog__item-media">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('assets/imgs/blog/letest-blog/blog-card1.jpg') }}" alt="images not found" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="latest-blog__item-text">
                                            <div class="latest-blog__item-text-meta d-flex">
                                                <div class="latest-blog__item-text-meta-calender">
                                                    <h4>12</h4>
                                                    <p>Sep</p>
                                                </div>
                                                <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                                <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                            </div>

                                            <div class="latest-blog__item-text-bottom">
                                                <a href="blog-details.html"><h4>How Chat bots Can Help You Drive More Sales.</h4></a>
                                                <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/imgs/blog/letest-blog/blog-card2.jpg') }}" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>

                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>

                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>Emergency printing pressnear you?</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/imgs/blog/letest-blog/blog-card3.jpg') }}" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>

                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>Introduction to our way of work near you.</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/imgs/blog/letest-blog/blog-card1.jpg') }}" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>

                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>How Chat bots Can Help You Drive More Sales.</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/imgs/blog/letest-blog/blog-card2.jpg') }}" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>

                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>

                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>Emergency printing pressnear you?</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/imgs/blog/letest-blog/blog-card3.jpg') }}" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>

                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>Introduction to our way of work near you.</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
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
    <!-- blog-news area end -->

    <!-- latest-newsletter area start -->
    <section class="latest-newsletter__area pt-80 pb-80 overflow-hidden latest-newsletter-bg">
        <div class="container p-relative">
            <div class="latest-newsletter__all-shape">
                <div class="latest-newsletter__pen-shape">
                    <img class="zooming" src="{{ asset('assets/imgs/newsletter/pen.svg') }}" alt="img not found">
                </div>
                <div class="latest-newsletter__bg-shape">
                    <img class="upDown" src="{{ asset('assets/imgs/newsletter/bg-Frame.svg') }}" alt="img not found">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-newsletter__content text-center">
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Subcribe To Our Newsletter</h2>
                        <p class="title wow fadeInLeft animated" data-wow-delay=".1s">Professional printing services can provide you with high-quality prints that will look great and last a long time. We have the equipment and expertise.</p>
                        <div class="search custom-search d-flex wow fadeInRight animated" data-wow-delay=".4s">
                            <input type="email" placeholder="Your Email">
                            <button type="submit" class="rr-btn">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-newsletter area end -->
@endsection
