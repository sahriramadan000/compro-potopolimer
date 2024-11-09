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
                                <li><span><a href="{{ route('service-resin-polymare.index') }}">Services</a></span></li>
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
                         <img src="{{ asset('assets/imgs/ppi-img/service/resin-polymare/770x414 Resin Polymer.png')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Resin Liquid Potopolymare</h2>

                    <p>Our Resin Liquid Potopolymare offers premium resin solutions designed to meet the demands of high-quality printing applications. With advanced formulations, our resins deliver excellent adhesion, durability, and precision, making them ideal for a variety of industrial and commercial printing needs. These resins are perfect for businesses seeking long-lasting performance and high-resolution results.</p>

                    <p>Whether your project requires strong adhesion, flexibility, or high detail, our Resin Liquid Potopolymare ensures consistent and smooth application with outstanding results.</p>

                    <h4 class="service-details-content-title">Product Resin Liquid Potopolymare</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Liquid Potopolymare PPI 40</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Liquid Potopolymare PPI A.06</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Liquid Potopolymare PPI 38</li>
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/resin-polymare/370x370 Resin Polymer.png')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/ppi-img/service/resin-polymare/370x370 Resin Polymer 2.png')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Resin Liquid Potopolymare?</h2>
                    <p>Our resin liquid potopolymare provides superior quality and performance, making it an essential choice for businesses in need of durable and reliable printing solutions.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>High Adhesion: Ensures strong, reliable bonding for a variety of surfaces.</li>
                            <li><i class="fa-solid fa-check"></i>Durable Performance: Designed for long-lasting use, even in demanding conditions.</li>
                            <li><i class="fa-solid fa-check"></i>Precision Application: Ideal for high-resolution, detailed printing.</li>
                            <li><i class="fa-solid fa-check"></i>Custom Formulations: Available in different resin types, including PPI 40, PPI A.06, and PPI 38, to meet specific project needs.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To maximize the benefits of our Resin Liquid Potopolymare, follow these tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Select the appropriate resin formulation based on the specific requirements of your project.</li>
                            <li><i class="fa-solid fa-check"></i>Maintain proper storage conditions to preserve resin quality and prevent contamination.</li>
                            <li><i class="fa-solid fa-check"></i>Ensure machines are calibrated for optimal resin application, minimizing waste.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly inspect the printing process to ensure consistent results and adjust settings as needed.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Resin Liquid Potopolymare is engineered for high-quality, durable printing applications. It is particularly suitable for projects requiring strong adhesion and fine detail. The challenge is selecting the right formulation for your specific needs, as different resin types offer varying levels of flexibility and performance.</p>
                <p>By choosing our Resin Liquid Potopolymare, you can trust that your printing projects will achieve the best possible results, with long-lasting durability and exceptional quality.</p>
            </div>
            <div class="col-xl-4">
                <div class="service-details-right">
                    <div class="service-details-righ-widget">
                        <h5 class="title">Other Services</h5>

                        <div class="search">
                            <a href="{{ route('service-resin-polymare.resin-polymare') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Resin Liquid Potopolymare</h6>
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
