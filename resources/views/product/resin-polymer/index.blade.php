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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Products</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="#!">Home</a></span></li>
                                <li class="active"><span>Products</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--our-gallery start-->
<section class="gallery section-space overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="our-gallery__title-wrapper text-center mb-40 mb-sm-35 mb-xs-30">
                    <h6 class="our-gallery__title-wrapper-subtitle">Our Services</h6>
                    <h2 class="our-gallery__title-wrapper-title wow fadeIn animated">Resin Liquid Printing Services</h2>
                    <h6 class="fw-normal">Our Resin Liquid Printing services provide high-performance resin solutions tailored to meet the specific needs of your printing processes.</h6>
                </div>
            </div>
        </div>

        <div class="sticky-text-row">
            <div class="row mb-minus-30 last-none">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="{{ route('service-resin-polymare.resin-polymare') }}" class="gallery__item">

                    <figure class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/mixing-1.jpg')}}" alt="img not found" class="img-fluid" style="max-height: 100vh !important;">
                    </figure>

                    <div class="text">
                        <h3 class="title">Resin Liquid Potopolymare</h3>
                        <h6 class="sub-title">Our Resin Liquid Potopolymare offers a range of high-quality resins designed to deliver excellent durability, adhesion, and high-resolution printing.</h6>
                    </div>
                    <div class="icon-wrapper">
                        <i class="fa-regular fa-plus"></i>
                    </div>
                    </a>
                </div>
                <!-- /gallery__item -->
            <!-- /gallery__item -->
            </div>
        </div>
    </div>
</section>
  <!--our-gallery end-->

<!-- Brand area start -->
{{-- <section class="main-brand__area">
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
</section> --}}
<!-- Brand area end -->
@endsection
