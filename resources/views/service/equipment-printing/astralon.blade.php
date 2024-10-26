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
                         <img src="{{ asset('assets/imgs/service-ppi/astralon-1.jpg')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Astralon</h2>

                    <p>Our Astralon is a high-performance, heat-resistant plastic film designed for mounting and stabilizing photo polymer printing plates. Known for its durability and precision, Astralon is an essential material for printing processes that require stability and clarity. It ensures that your plates remain securely in place during production, allowing for sharp, detailed prints across various applications.</p>

                    <p>Astralon’s superior heat resistance and reliability make it a preferred choice for businesses focused on achieving precise and consistent results.</p>

                    <h4 class="service-details-content-title">Product Astralon</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>940 x 200 m</li>
                            <li><i class="fa-solid fa-circle-dot"></i>970 x 200 m</li>
                            <li><i class="fa-solid fa-circle-dot"></i>1050 x 200 m</li>
                            <li><i class="fa-solid fa-circle-dot"></i>1080 x 200 m</li>
                            <li><i class="fa-solid fa-circle-dot"></i>1260 x 200 m</li>
                            <li><i class="fa-solid fa-circle-dot"></i>1500 x 200 m</li>
                            <li><i class="fa-solid fa-circle-dot"></i>1650 x 200 m</li>
                            <li><i class="fa-solid fa-circle-dot"></i>2500 x 200 m</li>
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/service-ppi/astralon-2.jpg')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/service-ppi/astralon-1.jpg')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Astralon?</h2>
                    <p>Our Astralon film offers outstanding durability and stability, making it ideal for businesses seeking reliable support during the printing process.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Heat-Resistant: Capable of withstanding high temperatures without compromising performance.</li>
                            <li><i class="fa-solid fa-check"></i>Durable & Reliable: Ensures stability and precision in all printing applications.</li>
                            <li><i class="fa-solid fa-check"></i>Ideal for Mounting: Keeps printing plates securely in place, maintaining alignment and detail.</li>
                            <li><i class="fa-solid fa-check"></i>Versatile: Suitable for use in various printing environments and processes.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To maximize the performance of Astralon in your printing projects, follow these tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Ensure correct mounting techniques to fully benefit from Astralon’s stabilizing properties.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly inspect the film during production to maintain precision and alignment.</li>
                            <li><i class="fa-solid fa-check"></i>Store Astralon in a controlled environment to prevent heat-induced warping or damage.</li>
                            <li><i class="fa-solid fa-check"></i>Use Astralon with compatible printing plates for the best results in terms of clarity and detail.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Astralon is an essential material for printing processes that require heat resistance and stability. Its ability to keep printing plates securely in place ensures that businesses can achieve precise, high-quality results. The challenge lies in ensuring proper mounting and handling, as incorrect usage can affect print quality.</p>
                <p>By choosing our Astralon film, you guarantee stability, durability, and precise results for your printing projects, even in high-temperature environments.</p>
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
