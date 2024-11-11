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
                         <img src="{{ asset('assets/imgs/ppi-img/service/digital-solid/767 x 414 Digital Solid 1.png')}}" alt="image not found" class="img-fluid">
                    </div>

                    <h2 class="service-details-content-title mb-10">Digital Solid Plates</h2>

                    <p>Our Digital Solid Plates are crafted for precision, delivering exceptional quality for printing projects that require sharp details and consistent results. These plates are engineered to handle high-volume printing needs while maintaining the accuracy and durability expected in professional environments. With various thickness options available, our digital solid plates are ideal for a wide range of applications.</p>

                    <p>Digital solid plates are a trusted solution for businesses that need reliable, long-lasting performance. Whether for intricate or large-scale projects, these plates offer the consistency needed to ensure your prints meet the highest standards.</p>

                    <h4 class="service-details-content-title">Product Digital Solid Plates</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 0,73 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 0,83 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 0,95 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 1,14 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 1,7 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 3 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 4 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 7 mm</li>
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/digital-solid/370x370 Digital Solid 1.png')}}" alt="img not found">
                        <img src="{{ asset('assets/imgs/ppi-img/service/digital-solid/370x370 Digital Solid 2.png')}}" alt="img not found">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Digital Solid Plates?</h2>
                    <p>Our digital solid plates offer superior performance, making them ideal for businesses seeking precise and reliable printing solutions. With a range of thickness options, these plates are designed to provide optimal results in both small and large-scale projects.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Precision Printing: Delivers sharp, consistent results every time.</li>
                            <li><i class="fa-solid fa-check"></i>Durability: Built to withstand high-volume printing with long-lasting performance.</li>
                            <li><i class="fa-solid fa-check"></i>Multiple Thicknesses: Available in 0.95mm, 1.14mm, 1.7mm, 3mm, 4mm, and 7mm.</li>
                            <li><i class="fa-solid fa-check"></i>Custom Solutions: Tailored to your specific printing needs.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>Maximize the effectiveness of our digital solid plates by following these tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Choose the right thickness based on your project's requirements for precision and durability.</li>
                            <li><i class="fa-solid fa-check"></i>Calibrate your machines to optimize the plates’ performance and ensure sharp results.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly inspect the plates for wear and tear to maintain consistent quality.</li>
                            <li><i class="fa-solid fa-check"></i>Store the plates properly to prevent damage and prolong their lifespan.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Our digital solid plates are specifically designed for businesses that need precise and consistent output across various printing environments. They offer the stability and reliability needed for both short-run and high-volume production. The main challenge is selecting the correct thickness for each project to balance durability and precision, ensuring the best possible results.</p>
                <p>By choosing our digital solid plates, you ensure your printing projects are supported by durable, high-quality plates that deliver consistent, professional results.</p>
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
