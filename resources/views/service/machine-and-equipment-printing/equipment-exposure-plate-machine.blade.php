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
                         <img src="{{ asset('assets/imgs/ppi-img/service/equipment-exposure-plate-machine/770 x 414 Equipment Exposure Plate Machine.png')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Equipment Exposure Plate Machine</h2>

                    <p>Our Equipment Exposure Plate Machines are designed to enhance the efficiency and effectiveness of the exposure process for printing plates. These machines provide consistent, high-quality exposure, ensuring that your plates are prepared to meet the demands of various printing applications. Equipped with advanced technology, they optimize exposure settings for different plate materials, leading to superior results.</p>

                    <p>Ideal for businesses seeking reliable and high-performance equipment, our exposure plate machines ensure that your printing plates are produced with precision and clarity.</p>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/equipment-exposure-plate-machine/370x370 Equipment Exposure Plate Machine.png')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/ppi-img/service/equipment-exposure-plate-machine/370x370 Equipment Exposure Plate Machine 2.png')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Our Equipment Exposure Plate Machine?</h2>
                    <p>Our Equipment Exposure Plate Machines offer outstanding performance and reliability, making them essential for businesses focused on producing high-quality printing plates.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Consistent Exposure: Guarantees uniform exposure across all plates for optimal print quality.</li>
                            <li><i class="fa-solid fa-check"></i>Advanced Technology: Features precise controls for adjusting exposure times and conditions.</li>
                            <li><i class="fa-solid fa-check"></i>Durable Design: Built to withstand the demands of high-volume production environments.</li>
                            <li><i class="fa-solid fa-check"></i>User-Friendly Interface: Simplifies operation, allowing for quick adjustments and settings.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To maximize the efficiency of your Equipment Exposure Plate Machine, consider these tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Regularly check and calibrate the machine to maintain optimal exposure settings.</li>
                            <li><i class="fa-solid fa-check"></i>Keep the equipment clean to prevent contamination of printing plates.</li>
                            <li><i class="fa-solid fa-check"></i>Use compatible materials to achieve the best exposure results for different projects.</li>
                            <li><i class="fa-solid fa-check"></i>Monitor the quality of exposed plates and adjust settings as necessary to ensure consistency.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>The Equipment Exposure Plate Machine plays a crucial role in the production of high-quality printing plates, essential for achieving detailed and sharp prints. The primary challenge lies in ensuring that exposure times and conditions are correctly set for each type of plate material, as this can significantly impact the final output quality. Regular maintenance and monitoring are essential for optimal performance.</p>
                <p>By choosing our Equipment Exposure Plate Machine, you ensure that your printing processes are equipped with the precision and reliability needed to produce outstanding results.</p>
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
