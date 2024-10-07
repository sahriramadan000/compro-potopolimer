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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Contact Us</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="index.html">Home</a></span></li>
                                <li class="active"><span>Contact Us</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--contact-us-start-->
<section class="contact-us__area section-space overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5">
                <div class="contact-us__widget mb-30 wow fadeInRight animated" data-wow-delay=".3s">
                    <h3 class="contact-us__widget-title mb-10">Let's get in touch with us</h3>
                    <p class="mb-40 mb-sm-25 mb-xs-20 fadeInLeft animated" data-wow-delay=".5s">You can also reach out to us by phone or email are many variations</p>

                    <div class="contact-us__widget-list">
                        <div class="contact-us__widget-list-item">
                            <div class="icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.388 4.82261C14.3232 5.00472 15.1827 5.46123 15.8565 6.1337C16.5302 6.80617 16.9876 7.66402 17.1701 8.59743M13.388 1C15.331 1.21544 17.1429 2.08388 18.5261 3.46272C19.9093 4.84157 20.7817 6.64887 21 8.58788M20.0425 16.214V19.0809C20.0436 19.3471 19.989 19.6105 19.8821 19.8544C19.7753 20.0983 19.6186 20.3172 19.4221 20.4971C19.2256 20.677 18.9937 20.814 18.7411 20.8993C18.4885 20.9845 18.2208 21.0162 17.9552 20.9922C15.0089 20.6727 12.1787 19.6678 9.69214 18.0584C7.37869 16.5911 5.4173 14.6335 3.94724 12.3245C2.32908 9.83138 1.32206 6.99289 1.00777 4.03897C0.983845 3.7747 1.01531 3.50836 1.10017 3.25689C1.18503 3.00543 1.32141 2.77435 1.50065 2.57838C1.67989 2.3824 1.89804 2.22582 2.14123 2.11861C2.38442 2.0114 2.64731 1.9559 2.91316 1.95565H5.78561C6.25028 1.95109 6.70076 2.11532 7.05309 2.41774C7.40541 2.72016 7.63554 3.14013 7.70057 3.59937C7.82181 4.51686 8.04665 5.41772 8.37081 6.28476C8.49963 6.62681 8.52751 6.99855 8.45115 7.35593C8.37478 7.71331 8.19737 8.04135 7.93994 8.30118L6.72394 9.51486C8.08697 11.9074 10.0717 13.8883 12.4688 15.2488L13.6848 14.0351C13.9452 13.7782 14.2738 13.6011 14.6319 13.5249C14.99 13.4486 15.3624 13.4765 15.7051 13.6051C16.5738 13.9286 17.4764 14.153 18.3956 14.274C18.8608 14.3395 19.2855 14.5733 19.5892 14.931C19.8928 15.2887 20.0542 15.7453 20.0425 16.214Z" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text">
                                <span>Phone Number</span>
                                <a href="tel:62182901758">(+62) 182901758</a>
                            </div>
                        </div>
                        <div class="contact-us__widget-list-item mt-40 mb-40">
                            <div class="icon">
                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 1H19C20.1 1 21 1.91406 21 3.03125V15.2188C21 16.3359 20.1 17.25 19 17.25H3C1.9 17.25 1 16.3359 1 15.2188V3.03125C1 1.91406 1.9 1 3 1Z" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21 3.03125L11 10.1406L1 3.03125" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text">
                                <span>Email</span>
                                <a href="mailto:info.medyket@gmail.com">info.medyket@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-us__widget-list-item">
                            <div class="large-hight">
                                <svg width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 11.2273C21 19.1818 11 26 11 26C11 26 1 19.1818 1 11.2273C1 8.51483 2.05357 5.91348 3.92893 3.9955C5.8043 2.07751 8.34784 1 11 1C13.6522 1 16.1957 2.07751 18.0711 3.9955C19.9464 5.91348 21 8.51483 21 11.2273Z" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.9993 14.6365C12.8403 14.6365 14.3327 13.1102 14.3327 11.2275C14.3327 9.34466 12.8403 7.81836 10.9993 7.81836C9.1584 7.81836 7.66602 9.34466 7.66602 11.2275C7.66602 13.1102 9.1584 14.6365 10.9993 14.6365Z" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text">
                                <a href="https://maps.app.goo.gl/uasW7kpa36UwHinm7">132 Dartmouth Street Boston, Massachusetts 02156 United States</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-us__form-wrapper mb-30 mb-xs-25">
                    <h3 class="section__title mb-10 wow fadeInLeft animated" data-wow-delay=".3s">Send a message</h3>
                    <p class="mb-40 mb-sm-25 mb-xs-20 wow fadeInLeft animated" data-wow-delay=".5s">You can also reach out to us by phone or email are many variations</p>


                    <form class="contact-us__form" id="contact-us__form" method="POST" action="./mail.php">
                        <div class="row wow fadeInLeft animated" data-wow-delay=".9s">
                            <div class="col-sm-6">
                                <div class="contact-us__input">
                                    <input name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-us__input">
                                    <input name="email" id="email" type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-us__input">
                                    <input name="phone" id="phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-us__input">
                                    <input name="subject" id="subject" type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-us__textarea ">
                                    <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Massage"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="rr-btn mt-30">Make An Order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact-us-end-->
@endsection
