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
                         <img src="{{ asset('assets/imgs/service-ppi/bonding-machine.jpg')}}" alt="image not found" class="img-fluid" style="max-height: 35vh !important;">
                    </div>

                    <h2 class="service-details-content-title mb-10">Bonding Machine</h2>

                    <p>Our Bonding Machine is designed to securely bond materials in various printing processes, ensuring strong and durable connections that enhance the overall quality and durability of your final products. This machine is essential for businesses seeking efficient and reliable bonding solutions for a variety of printing materials, including films and plates.</p>

                    <p>With its precision and reliability, the bonding machine improves production efficiency, helping businesses achieve high-quality results while minimizing errors and waste.</p>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/service-ppi/bonding-machine-2.jpg')}}" alt="img not found" style="max-width: 35vh !important;">
                        <img src="{{ asset('assets/imgs/service-ppi/bonding-machine.jpg')}}" alt="img not found" style="max-width: 35vh !important;">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Our Bonding Machine?</h2>
                    <p>Our Bonding Machine offers a fast, reliable, and efficient bonding solution, making it ideal for businesses aiming to improve their printing operations.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Strong Bonding: Provides secure, long-lasting bonds between materials, ensuring durability.</li>
                            <li><i class="fa-solid fa-check"></i>Efficient Production: Enhances workflow by reducing bonding time and improving consistency.</li>
                            <li><i class="fa-solid fa-check"></i>Precision Control: Allows for precise adjustments, ensuring accurate bonding across different materials.</li>
                            <li><i class="fa-solid fa-check"></i>Versatile Application: Suitable for bonding various materials used in printing processes, such as films and plates.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To maximize the performance of the bonding machine in your operations, follow these tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Adjust the bonding settings according to the specific materials being used to ensure optimal performance.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly maintain the machine to ensure consistent bonding quality and prevent downtime.</li>
                            <li><i class="fa-solid fa-check"></i>Use the appropriate bonding agents or materials recommended for your specific applications.</li>
                            <li><i class="fa-solid fa-check"></i>Monitor bonding strength during production to maintain the integrity of your printed materials.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>The bonding machine plays a critical role in ensuring that materials are securely and efficiently bonded during the printing process. While the machine provides reliable performance, ensuring proper settings and maintenance is key to achieving optimal bonding strength and minimizing errors.</p>
                <p>By choosing our Bonding Machine, you guarantee that your materials are bonded with precision and strength, improving both the quality and durability of your printed products.</p>
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
                            {{-- <a href="{{ route('service-equipment-printing.bonding-machine') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Bonding Machine</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a> --}}
                            <a href="{{ route('service-equipment-printing.ablative-film') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Ablative Film</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            {{-- <a href="{{ route('service-equipment-printing.digital-solid') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Digital Solid</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('service-equipment-printing.letter-press') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Letter Press</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio-details area end -->
@endsection
