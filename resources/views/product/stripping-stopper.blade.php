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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Stripping / Stopper</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="#!">Home</a></span></li>
                                <li class="active"><span>Service</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- service details area start -->
<section class="section-space service-details__area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="service-details-content">
                    <div class="service-details-content-thumb mb-30">
                         <img src="{{ asset('assets/imgs/service-details/service-details-first-img.png')}}" alt="image not found" class="img-fluid">
                    </div>

                    <h2 class="service-details-content-title">Introduction to Photo Polymer Printing Plate Services</h2>

                    <p>Our Stripping/Stopper is a high-quality, heat-resistant plastic used in rubber and plastisol screen printing. It provides a durable mounting solution, ensuring stability and precision during the printing process.</p>

                    <h4>Planning Project</h4>
                    <p>We work with you to identify the best applications of Astralon for your specific projects, ensuring durability and seamless integration into your production process.</p>

                    <div class="service-details-content-card-wrapper d-flex flex-column flex-sm-row mt-30">
                        <div class="service-details-content-card-wrapper-text">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <path d="M25.0001 16.4375L22.771 20.3125C22.271 21.1667 22.6876 21.875 23.6668 21.875H26.3126C27.3126 21.875 27.7085 22.5833 27.2085 23.4375L25.0001 27.3125" stroke="#FF3D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.2926 37.5834V35.1667C12.501 32.2709 8.56348 26.625 8.56348 20.625C8.56348 10.3125 18.0426 2.22921 28.751 4.56254C33.4593 5.60421 37.5843 8.72921 39.7301 13.0417C44.0843 21.7917 39.501 31.0834 32.7718 35.1459V37.5625C32.7718 38.1667 33.001 39.5625 30.7718 39.5625H19.2926C17.001 39.5834 17.2926 38.6875 17.2926 37.5834Z" stroke="#FF3D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.709 45.833C22.4798 44.4788 27.5215 44.4788 32.2923 45.833" stroke="#FF3D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <h5>Support & Expertise</h5>
                            <p>Our experts provide guidance on how to use Astralon effectively, optimizing its heat resistance and durability for your printing needs.</p>
                        </div>
                        <div class="service-details-content-card-wrapper-text">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <path d="M37.5 39.2916H35.9167C34.25 39.2916 32.6667 39.9374 31.5 41.1041L27.9375 44.6251C26.3125 46.2292 23.6667 46.2292 22.0417 44.6251L18.4792 41.1041C17.3125 39.9374 15.7083 39.2916 14.0625 39.2916H12.5C9.04167 39.2916 6.25 36.5208 6.25 33.1042V10.3749C6.25 6.95827 9.04167 4.1875 12.5 4.1875H37.5C40.9583 4.1875 43.75 6.95827 43.75 10.3749V33.1042C43.75 36.5 40.9583 39.2916 37.5 39.2916Z" stroke="#FF3D00" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.584 19.0835C14.584 17.146 16.1673 15.5625 18.1048 15.5625C20.0423 15.5625 21.6257 17.146 21.6257 19.0835C21.6257 23.0001 16.0631 23.4168 14.834 27.146C14.584 27.9168 15.2298 28.6876 16.0423 28.6876H21.6257" stroke="#FF3D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M33.4169 28.6666V16.7709C33.4169 16.2292 33.0627 15.7499 32.5419 15.6041C32.0211 15.4583 31.4586 15.6666 31.1669 16.1249C29.6669 18.5416 28.0419 21.2916 26.6252 23.7083C26.3961 24.1041 26.3961 24.625 26.6252 25.0208C26.8544 25.4166 27.2919 25.6665 27.7711 25.6665H35.4169" stroke="#FF3D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            <h5>Implement & Resualt</h5>
                            <p>Astralon guarantees secure mounting and precise alignment in the printing process, leading to consistently high-quality prints.</p>
                        </div>
                        <div class="service-details-content-card-wrapper-text">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.1035 6.08301L39.3952 11.5413C42.9368 13.1038 42.9368 15.6872 39.3952 17.2497L27.1035 22.708C25.7077 23.333 23.416 23.333 22.0202 22.708L9.72852 17.2497C6.18685 15.6872 6.18685 13.1038 9.72852 11.5413L22.0202 6.08301C23.416 5.45801 25.7077 5.45801 27.1035 6.08301Z" stroke="#FF3D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.25 22.9165C6.25 24.6665 7.5625 26.6873 9.16667 27.3957L23.3125 33.6873C24.3958 34.1665 25.625 34.1665 26.6875 33.6873L40.8333 27.3957C42.4375 26.6873 43.75 24.6665 43.75 22.9165" stroke="#FF3D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.25 33.3335C6.25 35.271 7.39583 37.021 9.16667 37.8127L23.3125 44.1043C24.3958 44.5835 25.625 44.5835 26.6875 44.1043L40.8333 37.8127C42.6042 37.021 43.75 35.271 43.75 33.3335" stroke="#FF3D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>


                            <h5>Tailored Solutions</h5>
                            <p>We offer customized options to fit your specific production requirements, from small to large-scale operations.</p>
                        </div>
                    </div>
                </div>
                <div class="content-area pt-70">
                    <div class="faq">
                        <div id="faq" class="accordion">
                            <div class="card wow fadeInLeft animated" data-wow-delay=".2s">
                                <div class="card-header">
                                    <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-1">
                                        Durable and Heat-Resistant
                                    </button>
                                </div>
                                <div id="faq-1" class="collapse" data-bs-parent="#faq">
                                    <div class="card-body">
                                        <p>Our Astralon plastic is designed to withstand high temperatures, making it ideal for demanding printing environments.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft animated" data-wow-delay=".3s">
                                <div class="card-header">
                                    <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-2">
                                        Versatile Applications
                                    </button>
                                </div>
                                <div id="faq-2" class="collapse" data-bs-parent="#faq">
                                    <div class="card-body">
                                        <p>Whether for rubber or plastisol screen printing, Astralon is adaptable to different uses, offering flexibility for your business needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft animated" data-wow-delay=".4s">
                                <div class="card-header">
                                    <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-3">
                                        Reliable Mounting Solution
                                    </button>
                                </div>
                                <div id="faq-3" class="collapse" data-bs-parent="#faq">
                                    <div class="card-body">
                                        <p>Astralon ensures stable and secure mounting during printing, maintaining the integrity and precision of each print.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="service-details-right">
                    <div class="service-details-righ-widget">
                        <h5 class="title">Search Here</h5>

                        <div class="search">
                            <div class="search-bar d-flex">
                                <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M7.22221 13.4444C10.6586 13.4444 13.4444 10.6586 13.4444 7.22221C13.4444 3.78578 10.6586 1 7.22221 1C3.78578 1 1 3.78578 1 7.22221C1 10.6586 3.78578 13.4444 7.22221 13.4444Z" stroke="#525257" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.0005 15L11.6172 11.6167" stroke="#525257" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></button>
                                <input type="text" id="search" placeholder="Search">
                            </div>
                        </div>
                    </div>
                    <div class="service-details-righ-widget mt-30">
                        <h5 class="title">Other Products</h5>

                        <div class="search">
                            <a href="{{ route('service-photopolimer-plate') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Photo Polymer Plate</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-stripping-stopper') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Stripping / Stopper</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-astralon') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Astralon</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="bottom-img position-relative mt-30">
                        <a href="{{ asset('assets/imgs/service-details/right-big-img.png')}}" class="our-gallery__item sidebar-gallery__item popup-image wow fadeIn animated" data-wow-delay=".5s">
                            <div class="middel-icon">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </a>
                        <img src="{{ asset('assets/imgs/service-details/right-img.png')}}" alt="img not found">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service details area end -->

<!-- Brand area start -->
<section class="main-brand__area">
    <div class="brand__area pb-120">
        <div class="container">
            <div class="row">
                <div class="main-brand__tittle-wrapper text-center mb-40">
                    <h4 class="main-brand__tittle-wrapper-title">"Morethan 5k Top Global Brands Trust our Services"</h4>
                    <p class="main-brand__tittle-wrapper-subtitle">Variations of passages of lorem but the majority.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('assets/imgs/brands/home2-companey-brands-img-1.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".2s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('assets/imgs/brands/home2-companey-brands-img-2.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".3s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('assets/imgs/brands/home2-companey-brands-img-3.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".4s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('assets/imgs/brands/home2-companey-brands-img-4.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".5s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('assets/imgs/brands/home2-companey-brands-img-5.png')}}" alt="image not found">
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
<!-- Brand area end -->
@endsection
