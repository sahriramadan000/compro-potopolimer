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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Tools</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="#!">Home</a></span></li>
                                <li class="active"><span>Tools</span></li>
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
        <div class="sticky-text-row">
            <div class="row mb-minus-30 last-none">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/negative-film-printing-1.jpg')}}" alt="img not found" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/negative-film-printing-3.jpg')}}" alt="img not found" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/recycling-machine-2.jpg')}}" alt="img not found" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/drying-machine.jpg')}}" alt="img not found" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/washing-and-curring-machine.jpg')}}" alt="img not found" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/mixing-2.jpg')}}" alt="img not found" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/bonding-machine.jpg')}}" alt="img not found" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/lamp-table.jpg')}}" alt="img not found" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="media">
                        <img src="{{ asset('assets/imgs/service-ppi/flush-1.jpg')}}" alt="img not found" class="img-fluid">
                    </div>
                </div>
            <!-- /gallery__item -->
            </div>
        </div>
    </div>
</section>
<!--our-gallery end-->

@endsection
