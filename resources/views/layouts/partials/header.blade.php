<header>
    <div id="header-sticky" class="header__area header-1">
        <div class="container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left">
                        <div class="header__logo">
                            <a href="{{ route('home') }}">
                                <div class="logo">
                                    <img src="{{ asset('logo-polimer.png') }}" alt="logo not found" style="width: 80% !important;">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="header__middle">
                        <div class="mean__menu-wrapper d-none d-lg-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about-us') }}">About Us</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#!">Services</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('service-plates-printing.index') }}">Plates Printing</a></li>
                                                <li><a href="{{ route('service-resin-liquid-printing.index') }}">Resin Liquid Printing</a></li>
                                                <li><a href="{{ route('service-equipment-printing.index') }}">Equipment Printing</a></li>
                                                <li><a href="{{ route('service-machine-and-equipment-printing.index') }}">Machine & Equipment Printing</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('clients') }}">Clients</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('tools') }}">Tools</a>
                                        </li>
                                        {{-- <li>
                                            <a href="{{ route('news') }}">News</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('contact-us') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            {{-- <div class="header__btn-wrap d-none d-sm-inline-flex">
                                <a href="shop.html" class="rr-btn">Make An Order</a>
                            </div> --}}
                            <div class="header__hamburger ml-20 d-lg-none">
                                <div class="sidebar__toggle">
                                    <button class="bar-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>
