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
                         <img src="{{ asset('assets/imgs/portfolio/portfolio-details-img.png')}}" alt="image not found" class="img-fluid">
                    </div>

                    <h2 class="service-details-content-title mb-10">BOPP Film</h2>

                    <p>Our BOPP (Biaxially Oriented Polypropylene) Film is an excellent choice for high-quality printing projects. Known for its durability, clarity, and versatility, BOPP film is widely used in various printing applications, including packaging and labeling. It provides a strong barrier against moisture and chemicals, making it ideal for products that require long-lasting protection and vibrant print quality.</p>

                    <p>With its superior strength and excellent printability, BOPP film ensures that your projects maintain sharp, clear visuals and high-resolution output throughout production.</p>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/portfolio/middel-right.png')}}" alt="img not found">
                        <img src="{{ asset('assets/imgs/portfolio/middel-left.png')}}" alt="img not found">
                    </div>
                    <h2 class="service-details-content-title">Why Choose BOPP Film?</h2>
                    <p>Our BOPP film offers outstanding performance, making it the preferred choice for businesses seeking reliable, high-quality materials for printing and packaging.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>High Clarity: Delivers sharp, vibrant prints with excellent visual appeal.</li>
                            <li><i class="fa-solid fa-check"></i>Moisture & Chemical Resistant: Protects printed materials, ensuring durability in challenging conditions.</li>
                            <li><i class="fa-solid fa-check"></i>Versatile Applications: Suitable for packaging, labeling, and various printing needs.</li>
                            <li><i class="fa-solid fa-check"></i>Durable & Strong: Built to withstand the rigors of production, ensuring long-lasting performance.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To optimize your printing process using BOPP film, consider the following:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Ensure your printing equipment is properly calibrated for BOPP film to achieve the best print quality.</li>
                            <li><i class="fa-solid fa-check"></i>Choose the appropriate thickness based on the specific requirements of your project.</li>
                            <li><i class="fa-solid fa-check"></i>Store the film in a controlled environment to maintain its integrity and quality.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly inspect the film during production for consistent, high-quality output.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>BOPP film is a versatile and durable solution for various printing and packaging needs. Its moisture resistance and clarity make it a top choice for businesses that require high-performance materials. The challenge is ensuring the correct handling and calibration of equipment to maximize the film’s benefits and maintain consistent quality.</p>
                <p>By choosing our BOPP film, you ensure your printing projects are equipped with high-quality, durable, and clear materials for exceptional results.</p>
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
