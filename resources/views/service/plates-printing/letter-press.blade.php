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
                         <img src="{{ asset('assets/imgs/ppi-img/service/letter-press/770x414 Letter Press.png')}}" alt="image not found" class="img-fluid">
                    </div>

                    <h2 class="service-details-content-title mb-10">Letter Press</h2>

                    <p>Our Letter Press Plates are crafted for high-quality, precise impressions, designed to elevate the letterpress printing process. Made with durability and accuracy in mind, these plates ensure consistent, detailed results on each print run. Ideal for producing embossed, tactile finishes on a range of materials, letter press plates are a valuable tool for businesses looking to create premium products like invitations, business cards, and packaging.</p>

                    <p>These plates are engineered for lasting performance, allowing you to achieve that classic letterpress look with every print.</p>

                    {{-- <h4 class="service-details-content-title">Product Digital Solid Plates</h4>
                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 0,95 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 1,14 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 1,7 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 3 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 4 mm</li>
                            <li><i class="fa-solid fa-circle-dot"></i>Solid Thickness 7 mm</li>
                        </ul>
                    </div> --}}

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/letter-press/370x370 letter press and dry offset.png')}}" alt="img not found">
                        <img src="{{ asset('assets/imgs/ppi-img/service/letter-press/370x370 letter press and dry offset 2.png')}}" alt="img not found">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Our Letter Press Plates?</h2>
                    <p>Our letter press plates are meticulously crafted to meet the demands of high-quality, high-precision letterpress printing, making them perfect for detailed and consistent impressions.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Durable and Reliable: Built to withstand repeated use while maintaining quality.</li>
                            <li><i class="fa-solid fa-check"></i>Sharp Detail: Delivers clear, precise impressions for a professional finish.</li>
                            <li><i class="fa-solid fa-check"></i>Ideal for Embossed Effects: Perfect for creating premium, tactile prints on various materials.</li>
                            <li><i class="fa-solid fa-check"></i>Consistent Performance: Ensures each print meets the highest quality standards.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To achieve the best results with letter press plates, consider these tips:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Choose high-quality paper stock for optimal impressions and depth.</li>
                            <li><i class="fa-solid fa-check"></i>Adjust the pressure settings on your press for consistent results across print runs.</li>
                            <li><i class="fa-solid fa-check"></i>Use compatible inks and ensure even ink distribution for sharp, clean impressions.</li>
                            <li><i class="fa-solid fa-check"></i>Clean the plates regularly to maintain detail and prevent build-up.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Letter press plates are essential for achieving the distinct, embossed look associated with letterpress printing. The main challenge is ensuring that the plates are properly aligned and maintained for uniformity and clarity across each print. Choosing the right materials and pressure settings is also crucial for the best results.</p>
                <p>By choosing our letter press plates, you guarantee a superior printing experience with professional-grade impressions that bring a classic touch to your printed materials.</p>
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
