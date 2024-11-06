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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">{{ $page_title }}</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="#!">Home</a></span></li>
                                <li class="active"><span>Tools</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="latest-team__area overflow-hidden main-team__area section-space">
    <div class="container">
        <div class="row p-relative mb-minus-30">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>CTP Machine</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/machine-ctp.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Drawing Printer</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/drawing-printer.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Washing and Curring Machine</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/washing-and-curring-machine.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Plate Making / Exposure Machine 4060</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/exposure-machine-4060.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Plate Making / Exposure Machine 52100</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/exposure-machine-52100.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Ploter Mounting Astralon</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/negative-film-printing-1.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Printer Negative Film</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/negative-film-printing-3.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Recycling Machine</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/recycling-machine-2.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Heating Machine</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/drying-machine.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Mixing</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/mixing-2.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Bonding Machine</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/bonding-machine.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>QC Lamp Table</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/lamp-table.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                    <div class="latest-team__item-media">
                        <div class="latest-team__item-media-img-title title">
                            <h5>&nbsp;</h5>
                            <a href="#!"><h4>Flush Table</h4></a>
                        </div>
                      <div class="latest-item_thumb">
                        <a href="#!">
                            <img src="{{ asset('assets/imgs/service-ppi/flush-1.jpg')}}" alt="images not found" class="img-fluid">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
