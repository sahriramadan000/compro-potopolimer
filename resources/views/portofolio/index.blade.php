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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Our Portofolio</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="#!">Home</a></span></li>
                                <li class="active"><span>Portofolio</span></li>
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
                    <h3>When accuracy and excellence unite</h3>
                    <p>Showcasing our extensive expertise, our portfolio reflects our commitment to delivering premium, tailored solutions for a wide range of industries. From precision-driven manufacturing to quality packaging, we pride ourselves on meeting each client's specific needs with unparalleled accuracy and consistency.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="main-team-details__content-wrapper mt-20">
                    <h3>Industries Served</h3>
                    <p>We are trusted partners to industry leaders in the following sectors:</p>
                    <ul class="personal-info mb-25 mt-25">
                        <li class="mb-3"><span>- Minibox Packaging Solutions</span></li>
                        <li class="mb-3"><span>- Core Corrugated Packaging</span></li>
                        <li class="mb-3"><span>- Label Manufacturing</span></li>
                        <li class="mb-3"><span>- Letter Press Printing</span></li>
                        <li class="mb-3"><span>- Paper Cup Production</span></li>
                        <li class="mb-3"><span>- Glass Cup & PET/PP Containers</span></li>
                        <li class="mb-3"><span>- Premium Wrapping Paper</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="main-team-details__content-wrapper mt-20">
                    <h3>Excellence in Every Detail</h3>
                    <p>We go beyond standard service, offering a seamless blend of innovation, craftsmanship, and reliability. Our approach prioritizes the highest standards of quality, ensuring that each project not only meets but exceeds expectations. With a strong focus on results, we empower our clients to achieve outstanding outcomes in their markets.</p>
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
