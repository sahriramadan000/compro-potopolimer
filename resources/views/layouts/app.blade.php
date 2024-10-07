<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('layouts.partials.head')
</head>

<body>

<!-- preloader start -->
<div id="preloader">
    <div class="preloader-close">x</div>
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- preloader start -->

<!-- Backtotop start -->
<div class="backtotop-wrap cursor-pointer">
    <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Backtotop end -->

<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('logo-polimer.png') }}" alt="logo not found">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                              <span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                                </span>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__social">
                    <h3 class="offcanvas__title mb-20">Subscribe & Follow</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://youtube.com/"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                {{-- <div class="offcanvas__btn d-sm-none">
                    <div class="header__btn-wrap">
                        <a class="rr-btn btn-hover-white" href="shop.html">Purchase Now<span><i class="fa-regular fa-angle-right"></i></span></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

<!-- Header area start -->
@include('layouts.partials.header')
<!-- Header area end -->

<!-- Body main wrapper start -->
<main>

    @yield('content')

</main>

<!-- Footer area start -->
@include('layouts.partials.footer')
<!-- Footer area end -->



<!-- JS here -->
@include('layouts.partials.foot')
</body>

</html>
