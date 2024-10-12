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
                        <h6 class="sub-title mb-20 mb-sm-10 mb-xs-5 wow fadeInLeft animated" data-wow-delay="1s">Welcome to Potopolimer Indonesia</h6>
                        <h1 class="title mb-15 mb-xs-10 wow fadeInLeft animated" data-wow-delay="1.2s">Product Design & Photo Polymer Printing Plates</h1>
                        <div class="description mb-20 mb-sm-15 mb-xs-10 wow fadeInLeft animated" data-wow-delay="1.4s">
                            <p>We are a leading company in the photo polymer industry in Indonesia, offering innovative solutions in printing with a focus on quality and precision.</p>
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
                            <p>Our printing services utilize state-of-the-art photo polymer technology to ensure exceptional quality and detail in every project.</p>
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
                            <p>We specialize in creating unique designs that elevate your brand. Our creative team works collaboratively to bring your vision to life.</p>
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
                            <p>Experience unparalleled online support tailored to your needs. Our dedicated support team is available to assist you with inquiries.</p>
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
                    <h3><span class="count">10</span>+</h3>
                    <h4>Years</h4>
                </div>
                <div class="description">
                    <p>Of experience in Photo Polymer Printing</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="latest-Choose-us__content mb-40">
                        <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".6s">Why Choose Us</h6>
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".8s">Why People Choose Potopolimer Indonesia?</h2>
                        <p class="wow fadeInLeft animated" data-wow-delay="1s">At PotoPolimer, we pride ourselves on delivering exceptional quality and service in the photo polymer printing industry. Our commitment to innovation and customer satisfaction sets us apart from the competition.</p>

                        <div class="latest-Choose-us__content-text d-flex">
                            <div class="latest-Choose-us__content-text-box wow fadeInLeft animated" data-wow-delay="1.2s">
                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i>Printed with precision</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Variety of plate thicknesses</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Customizable options</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Professional designs</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Quality assurance</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Timely delivery</li>
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
                            <h6>Our Main Value</h6>
                        </div>
                        <div class="latest-service__title-box-title wow fadeInLeft animated" data-wow-delay=".8s">
                            <h2>Professional Photo Polymer Printing</h2>
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
                            <a href="service-details.html"><h4>High-Quality Printing</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>We provide superior quality printing plates that are tailored to meet the specific demands of your projects, ensuring exceptional results every time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay="1.2s">
                        <div class="latest-service__item-icon">
                            <img src="{{ asset('assets/imgs/service/service2.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Custom Thickness Options</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Choose from a variety of plate thicknesses to find the perfect match for your printing applications, giving you flexibility and precision.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay="1.4s">
                        <div class="latest-service__item-icon">
                            <img src="{{ asset('assets/imgs/service/service3.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Global Shipping</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>We offer worldwide shipping services, making it easy for you to access our products no matter where you are located.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay="1.2s">
                        <div class="latest-service__item-icon service-4">
                            <img src="{{ asset('assets/imgs/service/service4.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Offset Printing Services</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>In addition to photo polymer printing, we provide offset printing services that guarantee high-quality results for larger volume projects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay="1.4s">
                        <div class="latest-service__item-icon">
                            <img src="{{ asset('assets/imgs/service/service5.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Quality Assurance</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>We stand behind our products with a quality guarantee, ensuring that every print meets our stringent standards of excellence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay="1.6s">
                        <div class="latest-service__item-icon">
                            <img src="{{ asset('assets/imgs/service/service6.svg') }}" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Quick Reorder Process</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Our efficient reorder system allows you to quickly restock your printing plates, ensuring you never run out of the materials you need.</p>
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
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Potopolimer</h5>
                                            <a href="team-details.html"><h4>Tangerang</h4></a>
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
                                            <h5>Potopolimer</h5>
                                            <a href="team-details.html"><h4>Surabaya</h4></a>
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
                                            <h5>Potopolimer</h5>
                                            <a href="team-details.html"><h4>Semarang</h4></a>
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
                                            <h5>Potopolimer</h5>
                                            <a href="team-details.html"><h4>Medan</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="{{ asset('assets/imgs/latest-team/letest-team-img4.jpg') }}" alt="images not found" class="img-fluid">
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
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".8s">Deliver Exceptional Printing Solutions for Your Business</h2>
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

    <!-- blog-news area start -->
    {{-- <section class="latest-blog__area pb-60 overflow-hidden latest-blog-bg">
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
    </section> --}}
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
                        <p class="title wow fadeInLeft animated" data-wow-delay=".1s">Stay updated with the latest news and offerings from Poto Polimer Indonesia. Our professional printing services ensure you receive high-quality prints that are designed to impress and endure. With our advanced equipment and expert knowledge, we’re here to meet all your printing needs.</p>
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
