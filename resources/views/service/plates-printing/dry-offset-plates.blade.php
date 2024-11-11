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
                         <img src="{{ asset('assets/imgs/ppi-img/service/dry-offset/770x414 Letter Press and dry offset.png')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Dry Offset Plates</h2>

                    <p>Our Dry Offset Plates are designed for high-efficiency printing, providing outstanding accuracy and durability for high-volume production. These plates are optimized for dry offset printing processes, ensuring clear and consistent results across a range of applications. Built to last, they are the perfect choice for businesses seeking reliability and precision in their printing operations.</p>

                    <p>Dry offset plates are trusted for delivering smooth, detailed prints without the use of water, making them ideal for faster production times while maintaining high-quality standards.</p>

                    <h4 class="service-details-content-title">Product Dry Offset</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>DO Thicknes 0,73 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>DO Thicknes 0,83 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>DO Thicknes 0,95 mm</li>
                            {{-- <li><i class="fa-solid fa-circle-dot"></i>DO Thicknes 1,14 mm</li> --}}
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/dry-offset/370x370 letter press and dry offset.png')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/ppi-img/service/dry-offset/370x370 letter press and dry offset 2.png')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Dry Offset Plates?</h2>
                    <p>Our dry offset plates offer the precision and durability needed for high-performance printing, making them ideal for businesses focused on fast, efficient production while maintaining top-tier quality.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>High-Efficiency Printing: Designed for fast, reliable production without sacrificing quality.</li>
                            <li><i class="fa-solid fa-check"></i>Precision Output: Ensures sharp, clear prints with consistent results.</li>
                            <li><i class="fa-solid fa-check"></i>Durable Design: Engineered for long-lasting use in high-volume environments.</li>
                            <li><i class="fa-solid fa-check"></i>Available Thicknesses: 0.95mm and 1.14mm, suitable for a variety of projects.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To maximize the performance of our dry offset plates, consider these helpful tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Ensure correct machine calibration to optimize speed and accuracy.</li>
                            <li><i class="fa-solid fa-check"></i>Use the appropriate plate thickness for your production volume and project needs.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly inspect the plates for wear and damage to maintain consistent quality.</li>
                            <li><i class="fa-solid fa-check"></i>Store plates properly in a clean environment to prevent surface contamination.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Our dry offset plates are specifically designed to handle the demands of high-volume production while delivering precise, detailed results. They are perfect for projects where speed and efficiency are crucial. The challenge often lies in ensuring the correct thickness is used for the project to maintain optimal performance without sacrificing detail or quality.</p>
                <p>By choosing our dry offset plates, you ensure your printing processes are equipped for speed, accuracy, and durability, providing high-quality prints even in fast-paced production environments.</p>
            </div>
            <div class="col-xl-4">
                <div class="service-details-right">
                    <div class="service-details-righ-widget">
                        <h5 class="title">Other Services</h5>

                        <div class="search">
                            <a href="{{ route('service-plates-printing.liquid-polimer-plates') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Liquid Polymer Plates</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-plates-printing.digital-solid-plates') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Digital Solid Plates</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-plates-printing.dry-offset-plates') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Dry Offset Plates</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-plates-printing.laser-film-printing') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Laser Film Printing</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-plates-printing.letter-press') }}">
                                <div class="search-bar main-search d-flex">
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
