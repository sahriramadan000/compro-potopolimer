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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Services</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="#!">Home</a></span></li>
                                <li><span><a href="{{ route('service-plates-printing.index') }}">Services</a></span></li>
                                <li class="active"><span>{{ $page_title }}</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- portfolio-details area start -->
<section class="section-space portfolio-details__area service-details__area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="service-details-content">
                    <div class="service-details-content-thumb mb-25">
                         <img src="{{ asset('assets/imgs/ppi-img/service/letter-press/770x414 Letter Press.png')}}" alt="image not found" class="img-fluid">
                    </div>

                    <h2 class="service-details-content-title mb-10">Letter Press</h2>

                    <p>Our Letter Press material is a high-quality raw material specifically designed for creating custom printing plates for letterpress applications. Unlike pre-made plates, this raw material provides flexibility for businesses that require tailored, high-resolution plates. Letter Press material is ideal for producing crisp, detailed impressions, offering the durability needed for repeat use in professional settings.</p>

                    <p>As a foundational material, Letter Press is perfect for companies that wish to control every aspect of their plate production while ensuring quality and consistency in every print.</p>

                    {{-- <h4 class="service-details-content-title">Product Digital Solid Plates</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 0,95 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 1,14 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 1,7 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 3 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 4 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 7 mm</li>
                        </ul>
                    </div> --}}

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/letter-press/370x370 letter press.png')}}" alt="img not found">
                        <img src="{{ asset('assets/imgs/ppi-img/service/letter-press/370x370 letter press 2.png')}}" alt="img not found">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Letter Press Material?</h2>
                    <p>Letter Press material gives businesses the ability to craft custom plates, allowing for unique, high-precision results in letterpress printing.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Customizable Plate Creation: Provides flexibility for tailored plate-making specific to project needs.</li>
                            <li><i class="fa-solid fa-check"></i>Sharp Impressions: Designed to produce clear, detailed letterpress prints.</li>
                            <li><i class="fa-solid fa-check"></i>Durable Material: Withstands repeated use, maintaining quality over time.</li>
                            <li><i class="fa-solid fa-check"></i>High-Quality Finish: Ensures a professional look with each impression.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To achieve the best results with Letter Press material, consider the following tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Choose the right thickness and hardness based on the desired impression depth and durability.</li>
                            <li><i class="fa-solid fa-check"></i>Properly calibrate your plate-making equipment to maximize material precision.</li>
                            <li><i class="fa-solid fa-check"></i>Store the material in a dry, stable environment to maintain quality before production.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly inspect the material during processing to ensure consistency.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Letter Press is an ideal material for companies that prioritize control and customization in their letterpress plate production. The primary challenge is in the precise handling and processing of the raw material to create durable, high-quality plates tailored to specific printing needs.</p>
                <p>By choosing our Letter Press material, you enable high-quality, customizable plate creation that delivers professional results in every letterpress print.</p>
            </div>
            <div class="col-xl-4">
                <div class="service-details-right">
                    <div class="service-details-righ-widget">
                        <h5 class="title">Other Services</h5>

                        <div class="search">
                            <a href="{{ route('service-equipment-printing.base-film') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Base Film</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-equipment-printing.bopp-film') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>BOPP Film</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-equipment-printing.astralon') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Astralon</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-equipment-printing.stripping-stopper') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Stripping / Stopper</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-equipment-printing.bonding-machine') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Bonding Machine</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-equipment-printing.ablative-film') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Ablative Film</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-equipment-printing.digital-solid') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Digital Solid</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-equipment-printing.letter-press') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Letter Press</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio-details area end -->
@endsection
