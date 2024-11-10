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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">{{ $page_title }}</h1>
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

<section class="main-team-details__area section-space pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-team-details__content-wrapper mt-20">
                    <h3>Custom labels that make your brand shine</h3>
                    <p>Label manufacturing includes the design, printing, and application of high-quality labels that support product branding and provide information. Labels can be customized for various materials and printing techniques, such as waterproof labels for beverages or specialized labels for cosmetics.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="latest-team__area overflow-hidden main-team__area section-space pt-3">
    <div class="container">
        <div class="row p-relative mb-minus-30">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            {{-- <a href="#!"><h4>CTP Machine</h4></a> --}}
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/ppi-img/portofolio/label-manufacturing-1.png')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            {{-- <a href="#!"><h4>Drying Machine</h4></a> --}}
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/ppi-img/portofolio/label-manufacturing-2.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            {{-- <a href="#!"><h4>Exposure Solid Machine</h4></a> --}}
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/ppi-img/portofolio/label-manufacturing-3.png')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            {{-- <a href="#!"><h4>Exposure Solid Machine</h4></a> --}}
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/ppi-img/portofolio/label-manufacturing-4.png')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            {{-- <a href="#!"><h4>Exposure Solid Machine</h4></a> --}}
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/ppi-img/portofolio/label-manufacturing-5.png')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            {{-- <a href="#!"><h4>Exposure Solid Machine</h4></a> --}}
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/ppi-img/portofolio/label-manufacturing-6.png')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            {{-- <a href="#!"><h4>Exposure Solid Machine</h4></a> --}}
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/ppi-img/portofolio/label-manufacturing-7.png')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            {{-- <a href="#!"><h4>Exposure Solid Machine</h4></a> --}}
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/ppi-img/portofolio/label-manufacturing-8.png')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
