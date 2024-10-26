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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Our Clients</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="#!">Home</a></span></li>
                                <li class="active"><span>Clients</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="main-team-details__area section-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-team-details__content-wrapper mt-20">
                    <h3>Make real time a day services</h3>
                    <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                    <ul class="personal-info mb-25 mt-25">
                        <li class="mb-3"><span>1. PT. OMBAK BIRU MENTARI</span></li>
                        <li class="mb-3"><span>2. PT. RELASINDO USAHA BERSAMA</span> </li>
                        <li class="mb-3"><span>3. PT. PACKINDO CIPTA MANDIRI</span></li>
                        <li class="mb-3"><span>4. PT. TRINOVA MEGA KEMASINDO</span></li>
                        <li class="mb-3"><span>5. PT. KREASI KEMAS INDONESIA</span></li>
                        <li class="mb-3"><span>6. CV. CAHAYA PRIMA MANDIR</span></li>
                        <li class="mb-3"><span>7. PT. KARYA INTI KARTON</span></li>
                        <li class="mb-3"><span>8. PT WELLGRO UTAMA</span></li>
                        <li class="mb-3"><span>9. PT. JIREC RIVAD INDONESIA</span></li>
                        <li class="mb-3"><span>10. PT. PRIMACORE MANDIRI</span></li>
                    </ul>
                    <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximize the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--latest-instagram area start-->
<div class="rr-instagram-2__area fix">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h3>Example of box results</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid g-0">
        <div class="rr-instagram-2-warpper">
            <div class="swiper-container rr-instagram-2-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/aqua.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/le-minerale.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/indomie-soto.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/indomie-goreng.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/indomie-kari.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/oky-jelly-drink.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/sarimi.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/mie-sedap.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/okky-jelly-drink-2.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/sarimi-2.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/indomie.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rr-instagram-2__thumb">
                            <div class="overlay"></div>
                            <img decoding="async" src="{{ asset('assets/imgs/box-result/surya.png')}}" class="img-fluid" alt="img not found" style="max-height: 40vh !important;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--latest-instagram area end-->
@endsection
