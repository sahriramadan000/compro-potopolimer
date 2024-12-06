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
                                <li><span><a href="{{ route('product-equipment-printing.index') }}">Products</a></span></li>
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
                         <img src="{{ asset('assets/imgs/ppi-img/service/stripping-stopper/770 x 414 Stopper.png')}}" alt="image not found" class="img-fluid">
                    </div>

                    <h2 class="service-details-content-title mb-10">Stripping Stopper</h2>

                    <p>Our Stripping / Stopper solution is designed to ensure stability and precision in the mounting of printing plates, providing crucial support during the printing process. This material enhances the quality of your prints by preventing unwanted movement, ensuring that plates remain securely in place. Ideal for high-precision printing, it is essential for businesses that require accurate and consistent output.</p>

                    <p>Stripping / Stopper is an indispensable tool for improving the efficiency and reliability of your printing operations, helping to maintain alignment and deliver top-quality results.</p>

                    <div class="middel-img d-flex">
                        <img src="{{ asset('assets/imgs/ppi-img/service/stripping-stopper/370x370 Stopper.png')}}" alt="img not found">
                        <img src="{{ asset('assets/imgs/ppi-img/service/stripping-stopper/370x370 Stopper 2.png')}}" alt="img not found">
                    </div>
                    <h2 class="service-details-content-title">Why Choose Stripping / Stopper?</h2>
                    <p>Our Stripping / Stopper ensures maximum stability and accuracy during the printing process, making it ideal for businesses focused on delivering high-quality, detailed prints.</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Maximum Stability: Keeps printing plates securely in place, preventing movement during production.</li>
                            <li><i class="fa-solid fa-check"></i>Improved Accuracy: Ensures precise alignment for sharp, high-resolution printing.</li>
                            <li><i class="fa-solid fa-check"></i>Reliable Performance: Designed for long-lasting use in demanding printing environments.</li>
                            <li><i class="fa-solid fa-check"></i>Enhanced Efficiency: Streamlines the printing process, reducing the risk of errors and improving consistency.</li>
                        </ul>
                    </div>

                    <h2 class="service-details-content-title">Project Tips</h2>
                    <p>To fully utilize our Stripping / Stopper, follow these recommendations:</p>

                    <div class="latest-about2__content-text">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>Ensure correct installation of the stopper to achieve maximum stability during the printing process.</li>
                            <li><i class="fa-solid fa-check"></i>Regularly inspect the stopper to ensure it maintains its holding capacity over time.</li>
                            <li><i class="fa-solid fa-check"></i>Use compatible materials alongside the stopper to enhance precision and print quality.</li>
                            <li><i class="fa-solid fa-check"></i>Store the stopper in a dry, clean environment to maintain its performance and longevity.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="service-details-content-title">Overview & Challenge</h2>
                <p>Stripping / Stopper is crucial for maintaining stability and alignment during the printing process, especially in projects requiring high precision. The challenge lies in ensuring the correct application of the stopper, as improper use can lead to misalignment and reduced print quality.</p>
                <p>By choosing our Stripping / Stopper solution, you ensure that your printing plates remain stable and aligned throughout the process, leading to accurate and consistent high-quality prints.</p>
            </div>
            <div class="col-xl-4">
                <div class="service-details-right">
                    <div class="service-details-righ-widget">
                        <h5 class="title">Other Products</h5>

                        <div class="search">
                            <a href="{{ route('product-equipment-printing.base-film') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Base Film</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('product-equipment-printing.bopp-film') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>BOPP Film</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('product-equipment-printing.astralon') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Astralon</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('product-equipment-printing.stripping-stopper') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Stripping / Stopper</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            {{-- <a href="{{ route('product-equipment-printing.bonding-machine') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Bonding Machine</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a> --}}
                            <a href="{{ route('product-equipment-printing.ablative-film') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Ablative Film</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            {{-- <a href="{{ route('product-equipment-printing.digital-solid') }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>Digital Solid</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            <a href="{{ route('product-equipment-printing.letter-press') }}">
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
