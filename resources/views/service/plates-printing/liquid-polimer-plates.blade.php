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
                         <img src="{{ asset('assets/imgs/ppi-img/service/plate-printing/cover-liquid.png')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Liquid Polymer Plates</h2>

                    <p>Our Liquid Polymer Plates are designed for high-resolution printing, providing exceptional precision and durability. These plates are ideal for a wide range of printing applications, ensuring that your projects achieve excellent results with consistency and reliability. Available in various thicknesses, our liquid polymer plates meet the demanding standards of the printing industry.</p>

                    <p>The flexibility and quality of our liquid polymer plates make them a preferred choice for businesses that prioritize detail and accuracy in their printing processes. Whether for intricate designs or large-scale production, our plates deliver outstanding performance.</p>


                    <h4 class="service-details-content-title">Product Liquid Polymer Plates</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Liquid Thickness 3 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Liquid Thickness 4 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Liquid Thickness 7 mm</li>
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/plate-printing/370x370-liquid-Polimer-plate-1.png')}}" alt="img not found" style="max-width: 35vh !important">
                        <img src="{{ asset('assets/imgs/ppi-img/service/plate-printing/370x370-liquid-Polimer-plate-2.png')}}" alt="img not found" style="max-width: 35vh !important">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Liquid Polymer Plates?</h2>
                    <p>Our liquid polymer plates offer unparalleled quality, allowing businesses to produce sharp and vibrant prints. With various thickness options and customized solutions, we ensure that your printing needs are met with precision.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>High-resolution printing: Achieve sharp and detailed prints with superior clarity.</li>
                            <li><i class="fa-solid fa-check"></i>Durable and flexible: Designed to handle demanding production environments.</li>
                            <li><i class="fa-solid fa-check"></i>Multiple thickness options: Available in 3mm, 4mm, and 7mm to suit various applications.</li>
                            <li><i class="fa-solid fa-check"></i>Customizable solutions: Tailored to meet the specific needs of your business.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To get the best results from our liquid polymer plates, consider the following tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Ensure accurate calibration of the printing machine to maintain consistency in detail.</li>
                            <li><i class="fa-solid fa-check"></i>Use the appropriate thickness of the plate for the specific project requirements.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly clean and maintain the plates for prolonged durability and performance.</li>
                            <li><i class="fa-solid fa-check"></i>Store plates in a controlled environment to prevent damage or warping.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Our liquid polymer plates have been tested in a wide range of printing environments, proving their reliability and performance. They are particularly suited for projects requiring high precision and fine details, but they also perform well in high-volume production scenarios. The challenge lies in ensuring the correct thickness is used for each project, as this can greatly impact the final output.</p>
                <p>By choosing our liquid polymer plates, you can be confident in achieving the best possible results for your printing needs.</p>
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
