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
                                <li><span><a href="{{ route('service-machine-and-equipment-printing.index') }}">Services</a></span></li>
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
                         <img src="{{ asset('assets/imgs/service-ppi/exposure-machine-4060.jpg')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Exposure Plate Machine</h2>

                    <p>Our Exposure Plate Machines are essential for creating high-quality printing plates, ensuring precise exposure for various applications. Designed for efficiency and accuracy, these machines deliver consistent results, making them a vital component in the printing process. With advanced technology, our exposure plate machines provide optimal control over exposure times and conditions, leading to superior plate quality.</p>

                    <p>These machines are ideal for businesses seeking reliable and efficient solutions to produce high-resolution printing plates for diverse printing applications.</p>

                    <h4 class="service-details-content-title">Product Exposure Plate Machines</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Exposure 40x60</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Exposure 40x80</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Exposure 50x80</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Exposure 52x100</li>
                        </ul>
                    </div>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/service-ppi/exposure-machine-52100.jpg')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/service-ppi/exposure-machine-4060-2.jpg')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Our Exposure Plate Machine?</h2>
                    <p>Our Exposure Plate Machines offer precision and reliability, making them the preferred choice for businesses focused on high-quality plate production.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>High Precision: Ensures accurate exposure for detailed and sharp printing plates.</li>
                            <li><i class="fa-solid fa-check"></i>Consistent Results: Provides uniform exposure across all plates, enhancing print quality.</li>
                            <li><i class="fa-solid fa-check"></i>User-Friendly Controls: Easy-to-use interface for adjusting exposure settings for different materials.</li>
                            <li><i class="fa-solid fa-check"></i>Durable Construction: Built to withstand the rigors of daily use in a busy printing environment.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To optimize the performance of your exposure plate machine, consider the following tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Regularly calibrate the machine to ensure accurate exposure times and conditions.</li>
                            <li><i class="fa-solid fa-check"></i>Maintain cleanliness around the machine to prevent contamination of printing plates.</li>
                            <li><i class="fa-solid fa-check"></i>Use compatible materials to achieve the best exposure results for each project.</li>
                            <li><i class="fa-solid fa-check"></i>Monitor the output quality and adjust settings as needed to maintain consistency.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Exposure Plate Machines are critical for producing high-quality printing plates that deliver exceptional results. The main challenge lies in ensuring correct exposure times and conditions, as this directly affects the quality of the plates produced. Regular maintenance and calibration are essential to achieving optimal performance.</p>
                <p>By choosing our Exposure Plate Machine, you ensure that your printing plates are created with the highest standards of precision and quality, leading to outstanding print results.</p>
            </div>
            <div class="col-xl-4">
                <div class="service-details-right">
                    <div class="service-details-righ-widget">
                        <h5 class="title">Other Services</h5>

                        <div class="search">
                            <a href="{{ route('service-machine-and-equipment-printing.exposure-plate-machine') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Exposure Plate Machines</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-machine-and-equipment-printing.equipment-exposure-plate-machine') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Equipment Exposure Plate Machines</h6>
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
