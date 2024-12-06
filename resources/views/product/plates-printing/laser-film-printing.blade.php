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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Products</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="#!">Home</a></span></li>
                                <li><span><a href="{{ route('product-plates-printing.index') }}">Products</a></span></li>
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
                         <img src="{{ asset('assets/imgs/ppi-img/service/lasser-film-printing/770 x 414 Laser Film Printing.png')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Laser Film Printing</h2>

                    <p>Our Laser Film Printing service is tailored to provide high-precision film printing solutions for businesses that require detailed and accurate results. Using advanced laser technology, we ensure that every print is sharp, clear, and perfectly aligned. This method is ideal for creating high-quality negatives and positive films, essential for a variety of printing applications.</p>

                    <p>Laser film printing is a reliable solution for businesses needing precise, high-detail films for offset, screen printing, or other specialized printing processes.</p>

                    <h4 class="service-details-content-title">Product Laser Film Printing</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Negatif Film thicknes 0,175 mm</li>
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/lasser-film-printing/370x370 Laser Film Printing.png')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/ppi-img/service/lasser-film-printing/370x370 Laser Film Printing.png')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Laser Film Printing?</h2>
                    <p>Our laser film printing provides exceptional clarity and precision, making it the preferred choice for businesses that demand detailed and high-quality prints.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>High Precision: Ensures sharp, clear, and detailed prints for all applications.</li>
                            <li><i class="fa-solid fa-check"></i>Reliable Performance: Delivers consistent results with every print, perfect for professional use.</li>
                            <li><i class="fa-solid fa-check"></i>Advanced Laser Technology: Uses cutting-edge laser technology for superior accuracy.</li>
                            <li><i class="fa-solid fa-check"></i>Film Thickness: Available in 0.175mm negative film for high-resolution printing.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To get the best results from our laser film printing, consider the following:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Choose the correct film thickness for the level of detail required.</li>
                            <li><i class="fa-solid fa-check"></i>Ensure the laser printer is calibrated for maximum accuracy and precision.</li>
                            <li><i class="fa-solid fa-check"></i>Store film in a controlled environment to prevent warping or damage.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly maintain printing equipment for the best results.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Laser film printing offers exceptional precision, especially for projects that require fine details and clarity. It’s an ideal solution for printing negatives and positives, often used in screen and offset printing processes. The main challenge with laser film printing is ensuring that the thickness and type of film selected match the requirements of the project, as this directly affects the sharpness and clarity of the print.</p>
                <p>By choosing our laser film printing service, you ensure your business benefits from high-quality, detailed, and precise prints tailored to meet your needs.</p>
            </div>
            <div class="col-xl-4">
                <div class="service-details-right">
                    <div class="service-details-righ-widget">
                        <h5 class="title">Other Products</h5>

                        <div class="search">
                            <a href="{{ route('product-plates-printing.liquid-polimer-plates') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Liquid Polymer Plates</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('product-plates-printing.digital-solid-plates') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Digital Solid Plates</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('product-plates-printing.dry-offset-plates') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Dry Offset Plates</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('product-plates-printing.laser-film-printing') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Laser Film Printing</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('product-plates-printing.letter-press') }}">
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
