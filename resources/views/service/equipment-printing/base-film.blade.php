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
                                <li><span><a href="{{ route('service-equipment-printing.index') }}">Services</a></span></li>
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
                         <img src="{{ asset('assets/imgs/service-ppi/base-film-1.jpg')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Base Film</h2>

                    <p>Our Base Film provides a reliable foundation for various printing applications, offering excellent durability, clarity, and consistency. Designed to meet the rigorous demands of professional printing processes, our base films are the ideal choice for businesses seeking high-quality results. Whether used in flexography, screen printing, or offset printing, our base films ensure precision and smooth performance.</p>

                    <p>Engineered for long-lasting performance, our base films are versatile enough to handle a range of printing needs, delivering exceptional clarity and stability throughout the production process.</p>

                    <h4 class="service-details-content-title">Product Base Film</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Base Film 1100 x 150 m</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Base Film 1420 x 150 m</li>
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/service-ppi/base-film-2.jpg')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/service-ppi/base-film-3.jpg')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Base Film?</h2>
                    <p>Our base films are designed to support the highest standards in printing, providing businesses with reliable, high-quality materials that enhance performance and output.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Exceptional Durability: Built to withstand the demands of high-volume printing applications.</li>
                            <li><i class="fa-solid fa-check"></i>Superior Clarity: Ensures sharp, clear results for high-resolution printing.</li>
                            <li><i class="fa-solid fa-check"></i>Versatile Use: Ideal for multiple printing applications, including flexography and screen printing.</li>
                            <li><i class="fa-solid fa-check"></i>Consistent Quality: Provides stable performance across all production runs, ensuring reliable output.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To get the most out of our base films, consider the following tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Choose the right base film depending on the type of printing process for optimal performance.</li>
                            <li><i class="fa-solid fa-check"></i>Ensure proper machine calibration to maximize the clarity and stability of the film.</li>
                            <li><i class="fa-solid fa-check"></i>Store films in a controlled environment to prevent warping or degradation.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly inspect films during production to maintain consistent quality.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Our base films are designed for durability and precision, making them suitable for high-resolution, high-volume printing applications. The challenge with base films often lies in ensuring proper handling and storage to maintain their quality and effectiveness throughout the printing process.</p>
                <p>By choosing our base film solutions, you ensure your printing projects are supported by high-performance materials, leading to superior results and efficient production.</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio-details area end -->
@endsection
