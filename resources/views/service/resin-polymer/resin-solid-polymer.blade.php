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

                    <h2 class="service-details-content-title mb-10">Resin Solid Potopolymare</h2>

                    <p>Our Resin Solid Potopolymare is designed to deliver exceptional performance for high-quality and durable printing applications. Engineered for precision and strength, this solid resin ensures excellent results across a wide range of printing processes. Its robust nature makes it ideal for projects that require stability, sharpness, and longevity.</p>

                    <p>With its consistent performance and reliability, Resin Solid Potopolymare is the perfect choice for businesses aiming to achieve detailed, high-resolution prints.</p>

                    <h4 class="service-details-content-title">Product Resin Liquid Photopolymer</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Liquid Photopolymer PPI 40</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Liquid Photopolymer PPI A.06</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Liquid Photopolymer PPI 38</li>
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/resin-polymare/solid/370x370 Resin Solid Polymer.png')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/ppi-img/service/resin-polymare/solid/370x370 Resin Solid Polymer 2.png')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Resin Solid Potopolymare?</h2>
                    <p>Our solid resin offers unparalleled performance and durability, making it essential for professional-grade printing projects.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Superior Stability: Ensures reliable performance for intricate and large-scale projects.</li>
                            <li><i class="fa-solid fa-check"></i>High Resolution: Delivers sharp, detailed prints with consistent results.</li>
                            <li><i class="fa-solid fa-check"></i>Long-Lasting Durability: Built to withstand challenging printing environments.</li>
                            <li><i class="fa-solid fa-check"></i>Versatile Applications: Suitable for various printing methods and requirements.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To make the most of our Resin Solid Potopolymare, consider the following:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Ensure proper machine settings for optimal application and consistent results.</li>
                            <li><i class="fa-solid fa-check"></i>Store resin in a clean and dry environment to maintain its quality.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly inspect printing equipment to ensure smooth operation and avoid defects.</li>
                            <li><i class="fa-solid fa-check"></i>Choose the right type of solid resin for your project’s specific demands.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Resin Solid Potopolymare is a reliable choice for businesses that require precision and durability in their printing projects. It is particularly effective for high-resolution and intricate designs. However, achieving optimal results requires careful calibration of machines and selecting the right resin type based on project needs.</p>
                <p>By using Resin Solid Potopolymare, your business is equipped to produce prints of the highest quality while maintaining efficiency and consistency.</p>
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
                            <a href="{{ route('service-resin-polymer.resin-solid-Polymer') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Resin Solid Photopolymer</h6>
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
