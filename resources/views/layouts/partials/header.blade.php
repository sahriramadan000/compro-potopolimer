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
                                            <a href="#!">Product</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="#!" class="has-dropdown">Plate Printing</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('product-plates-printing.liquid-polimer-plates') }}">Liquid Polymare Plate</a></li>
                                                        <li><a href="{{ route('product-plates-printing.digital-solid-plates') }}">Digital Solid</a></li>
                                                        <li><a href="{{ route('product-plates-printing.dry-offset-plates') }}">Dry Offset</a></li>
                                                        <li><a href="{{ route('product-plates-printing.laser-film-printing') }}">Laser Film Printing</a></li>
                                                        <li><a href="{{ route('product-plates-printing.letter-press') }}">Letter Press</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#!">Resin Polymer</a>
                                                    <ul class="submenu">
                                                       <li><a href="{{ route('product-resin-polymer.resin-liquid-polymer') }}">Resin Liquid Polymer</a></li>
                                                       <li><a href="{{ route('product-resin-polymer.resin-digital-solid-Polymer') }}">Resin Digital Solid Polymer</a></li>
                                                   </ul>
                                                </li>
                                                <li>
                                                    <a href="#!">Equipment Printing</a>
                                                     <ul class="submenu">
                                                        <li><a href="{{ route('product-equipment-printing.base-film') }}">Base Film</a></li>
                                                        <li><a href="{{ route('product-equipment-printing.bopp-film') }}">BOPP Film</a></li>
                                                        <li><a href="{{ route('product-equipment-printing.astralon') }}">Astralon</a></li>
                                                        {{-- <li><a href="{{ route('product-equipment-printing.bonding-machine') }}">Bonding Machine</a></li> --}}
                                                        <li><a href="{{ route('product-equipment-printing.stripping-stopper') }}">Stripping / Stoper 3m</a></li>
                                                        <li><a href="{{ route('product-equipment-printing.ablative-film') }}">Ablative Film</a></li>
                                                        {{-- <li><a href="{{ route('product-equipment-printing.digital-solid') }}">Digital Solid</a></li>
                                                        <li><a href="{{ route('product-equipment-printing.letter-press') }}">Letter Press</a></li> --}}
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#!">Machine & Equipment Printing</a>
                                                     <ul class="submenu">
                                                        <li><a href="{{ route('product-machine-and-equipment-printing.exposure-plate-machine') }}">Exposure Plate Machine</a></li>
                                                        <li><a href="{{ route('product-machine-and-equipment-printing.equipment-exposure-plate-machine') }}">Equipment Exposure Plate Machine</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#!">Portofolio</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="{{ route('portofolio.minibox-packaging-solution') }}">Minibox Packaging Solution</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('portofolio.core-corrugated-packaging') }}">Core Corrugated Packaging</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('portofolio.sack-printing') }}">Sack Printing</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('portofolio.label-manufacturing') }}">Label Manufacturing</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('portofolio.letter-press-printing') }}">Letter Press Printing</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('portofolio.paper-cup-production') }}">Paper Cup Production</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('portofolio.glass-cup-and-pe-or-pp-containers') }}">Glass Cup & PET/PP Containers</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('portofolio.premium-wrapping-paper') }}">Premium Wrapping Paper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#!">Tools</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="{{ route('tools.liquid') }}">Liquid</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.solid') }}">Solid</a>
                                                </li>
                                            </ul>
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
