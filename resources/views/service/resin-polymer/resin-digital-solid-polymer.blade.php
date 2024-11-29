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
                                <li><span><a href="#!">Services</a></span></li>
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
                         <img src="{{ asset('assets/imgs/ppi-img/service/resin-polymare/solid/770x414 resin solid polymer.png')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Digital Solid</h2>

                    <p>Our Digital Solid material offers a versatile solution for creating high-quality, customized printing plates. Unlike finished products, Digital Solid is a raw material that can be tailored to meet specific printing requirements, giving businesses greater control over the final outcome. Available in a variety of thicknesses, Digital Solid is ideal for companies that need flexibility in plate production while maintaining precise, high-resolution capabilities.</p>

                    <p>Designed for adaptability and consistency, Digital Solid is a trusted choice for businesses looking to produce their own printing plates with reliable and repeatable quality.</p>

                    <h4 class="service-details-content-title">Product Digital Solid Thickness</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Thickness 0,73 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Thickness 0,83 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Thickness 0,95 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Thickness 1,14 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Thickness 1,7 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Thickness 2,84 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Thickness 3,94 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Thickness 7 mm</li>
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/resin-polymare/solid/370x370 Resin Solid Polymer.png')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/ppi-img/service/resin-polymare/solid/370x370 Resin Solid Polymer 2.png')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Digital Solid?</h2>
                    <p>As a raw material, Digital Solid provides the foundation for crafting customized, high-precision plates that meet specific printing demands.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Flexible Production: Allows for tailored plate-making to meet unique project needs.</li>
                            <li><i class="fa-solid fa-check"></i>High Precision: Ensures sharp and detailed results suitable for various printing applications.</li>
                            <li><i class="fa-solid fa-check"></i>Multiple Thickness Options: Available in 0.95mm, 1.14mm, 1.7mm, 3mm, 4mm, and 7mm.</li>
                            <li><i class="fa-solid fa-check"></i>Reliable Quality: Consistent, high-performance material for dependable results.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To get the most out of Digital Solid in your plate production, consider these tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Select the appropriate thickness for the level of detail and durability needed in your project.</li>
                            <li><i class="fa-solid fa-check"></i>Ensure equipment is calibrated properly to shape Digital Solid material accurately.</li>
                            <li><i class="fa-solid fa-check"></i>Store in a controlled environment to preserve material quality before use.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly check material quality during production to maintain consistency.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>As a raw material, Digital Solid is ideal for companies seeking control over plate-making for specific printing requirements. The challenge lies in proper handling and precision during the production process to achieve the best results from this versatile material.</p>
                <p>By choosing Digital Solid, you gain the flexibility to create custom plates while maintaining the high-quality standards required for professional printing.</p>
            </div>
            <div class="col-xl-4">
                <div class="service-details-right">
                    <div class="service-details-righ-widget">
                        <h5 class="title">Other Services</h5>

                        <div class="search">
                            <a href="{{ route('service-resin-polymer.resin-liquid-polymer') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Resin Liquid Photopolymer</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-resin-polymer.resin-digital-solid-Polymer') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Resin Digital Solid Photopolymer</h6>
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
