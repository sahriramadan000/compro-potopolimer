<footer>
    <section class="footer__area-common background overflow-hidden position-relative z-1">
        <div class="container">
            <div class="row mb-minus-40 footer-wrap">
                <div class="col-lg-4">
                    <div class="footer__widget footer__widget-item-1">
                    <div class="footer__logo mb-20">
                        <a href="index.html">
                            <img src="{{ asset('logo-polimer.png') }}" alt="logo not found">
                        </a>
                    </div>
                    <div class="footer__content">
                        <p>Potopolimer Indonesia is a leading provider of photo polymer printing solutions, dedicated to delivering high-quality products tailored to our clients' needs.</p>
                    </div>

                    <div class="footer__social mt-20">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a>
                        <a href="https://vimeo.com/"><i class="fa-brands fa-vimeo-v"></i></a>
                    </div>
                </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget footer__widget-item-2">
                    <div class="footer__widget-title">
                        <h4>Quick Links</h4>
                    </div>
                    <div class="footer__link">
                        <ul>
                            <li><a href="{{ route('about-us') }}"><i class="fa-solid fa-angle-right"></i>About Us </a></li>
                                <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Careers</a></li>
                                <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Terms Of Service</a></li>
                                <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Privacy policy</a></li>
                                {{-- <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Latest Blog</a></li> --}}
                        </ul>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer__widget footer__widget-item-3">
                    <div class="footer__widget-title">
                        <h4>Our Services</h4>
                    </div>
                    <div class="footer__link">
                        <ul>
                            <li><a href="{{ route('service-plates-printing.index') }}"><i class="fa-solid fa-angle-right"></i>Plates Printing</a></li>
                            <li><a href="{{ route('service-resin-liquid-printing.index') }}"><i class="fa-solid fa-angle-right"></i>Resin Liquid Printing</a></li>
                            <li><a href="{{ route('service-equipment-printing.index') }}"><i class="fa-solid fa-angle-right"></i>Equipment Printing</a></li>
                            <li><a href="{{ route('service-machine-and-equipment-printing.index') }}"><i class="fa-solid fa-angle-right"></i>Machine & Equipment Printing</a></li>
                        </ul>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer__widget footer__widget-item-4">
                        <div class="footer__widget-title">
                            <h4>Contact</h4>
                        </div>

                        <div class="footer__subscribe subscribe-2 d-flex mt-15">
                            <ul>
                                <li>
                                    <a href="#!">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="22" viewBox="0 0 18 22" fill="none">
                                                <path d="M17 9.18182C17 15.5455 9 21 9 21C9 21 1 15.5455 1 9.18182C1 7.01187 1.84285 4.93079 3.34315 3.3964C4.84344 1.86201 6.87827 1 9 1C11.1217 1 13.1566 1.86201 14.6569 3.3964C16.1571 4.93079 17 7.01187 17 9.18182Z" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.99967 11.909C10.4724 11.909 11.6663 10.688 11.6663 9.18174C11.6663 7.67551 10.4724 6.45447 8.99967 6.45447C7.52692 6.45447 6.33301 7.67551 6.33301 9.18174C6.33301 10.688 7.52692 11.909 8.99967 11.909Z" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        Villa Melati Mas Block B8No. 16 A-B, Serpong Utara, TangerangSelatan, Banten 15315
                                    </a>
                                </li>
                                <li class="gap-10">
                                    <a href="tel:02138929117">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path d="M10.9104 4.05809C11.6586 4.20378 12.3462 4.56898 12.8852 5.10696C13.4242 5.64494 13.7901 6.33121 13.9361 7.07795M10.9104 1C12.4648 1.17235 13.9143 1.8671 15.0209 2.97018C16.1275 4.07326 16.8254 5.5191 17 7.0703M16.234 13.1712V15.4648C16.2349 15.6777 16.1912 15.8884 16.1057 16.0835C16.0203 16.2786 15.8949 16.4537 15.7377 16.5977C15.5805 16.7416 15.3949 16.8512 15.1928 16.9194C14.9908 16.9876 14.7766 17.013 14.5642 16.9938C12.2071 16.7382 9.94297 15.9343 7.95371 14.6467C6.10295 13.4729 4.53384 11.9068 3.35779 10.0596C2.06326 8.0651 1.25765 5.79431 1.00622 3.43118C0.987076 3.21976 1.01225 3.00669 1.08014 2.80551C1.14802 2.60434 1.25713 2.41948 1.40052 2.2627C1.54391 2.10592 1.71843 1.98066 1.91298 1.89489C2.10753 1.80912 2.31785 1.76472 2.53053 1.76452H4.82849C5.20022 1.76087 5.56061 1.89226 5.84247 2.13419C6.12433 2.37613 6.30843 2.71211 6.36046 3.0795C6.45745 3.81349 6.63732 4.53418 6.89665 5.22781C6.99971 5.50145 7.02201 5.79884 6.96092 6.08474C6.89983 6.37065 6.7579 6.63308 6.55195 6.84095L5.57915 7.81189C6.66958 9.7259 8.25739 11.3107 10.1751 12.399L11.1479 11.4281C11.3561 11.2225 11.6191 11.0809 11.9055 11.0199C12.192 10.9589 12.4899 10.9812 12.7641 11.084C13.4591 11.3429 14.1811 11.5224 14.9165 11.6192C15.2886 11.6716 15.6284 11.8587 15.8713 12.1448C16.1143 12.431 16.2433 12.7962 16.234 13.1712Z" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>

                                    </a>
                                    <a href="tel:02138929117">(+62) 2138929117 & 22232940</a>
                                </li>
                                <li>
                                    <a href="mailto:potopolimer@gmail.com">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15" fill="none">
                                                <path d="M2.6 1H15.4C16.28 1 17 1.73125 17 2.625V12.375C17 13.2688 16.28 14 15.4 14H2.6C1.72 14 1 13.2688 1 12.375V2.625C1 1.73125 1.72 1 2.6 1Z" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17 2.62512L9 8.31262L1 2.62512" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span>potopolimer@gmail.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom-wrapper footer__bottom-home-1-bg">
            <div class="container">
                <div class="footer__bottom">
                    <div class="footer__copyright">
                        <p>Copyright 2024 | Design By Potopolimer Indonesia</p>
                    </div>

                    <div class="footer__copyright-menu">
                        <ul>
                            <li><a href="about-us.html">Privacy & Terms Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
