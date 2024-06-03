<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.
</p>
<![endif]-->

<!-- pre loader area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M11 6L6 1L1 6"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
        </svg>
    </button>
</div>
<!-- back to top end -->

<header class="tp-header-3-area tp-header-3-transparent tp-header-height p-relative">
    <div id="header-sticky" class="tp-header-3-bottom header__sticky p-relative">
        <div class="tp-header-3-bottom-inner p-relative">
            <div class="container-fluid gx-0">
                <div class="row gx-0 align-items-center">
                    <div class="col-xl-2 col-6">
                        <div
                            class="tp-header-2-main-left d-flex align-items-center justify-content-xl-center p-relative">
                            <div class="tp-header-3-logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('img/logo/footer-logo.png')}}" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 d-none d-xl-block">
                        <div class="tp-main-menu-3-area d-flex align-items-center justify-content-center">
                            <div class="tp-main-menu menu-icon">
                                <nav id="tp-mobile-menu">
                                    <ul>
                                        @if(!isset($publicNav))
                                        <li><a href="{{ route('news.and.events.index') }}">News and Events</a></li>
                                        <li><a href="{{ route('publications.index') }}">Publications</a></li>
                                        <li><a href="{{ route('careers.index') }}">Career</a></li>
                                        @else
                                            <li><a href="{{route('about-us')}}">About Us</a></li>
                                            <li><a href="{{route('team')}}">Members</a></li>
                                            <li><a href="#">Resources</a></li>
                                            <li><a href="{{route('publications')}}">Publications</a></li>
                                            <li><a href="{{route('public-career-page')}}">Careers</a></li>
                                            <li><a href="{{route('contact-us')}}">Contact</a></li>
                                            <li><a href="#">Trainings</a></li>
                                        @endif
                                    </ul>
                                </nav>

                            </div>
                            <div class="tp-header-search search-open-btn d-none d-xl-block">
                                <a href="javascript:void(0);">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.84769 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.84769 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.84769 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
                                            fill="black"
                                        />
                                        <path
                                            d="M19.76 18.6124L15.0988 13.9511C14.7811 13.6335 14.2668 13.6335 13.9492 13.9511C13.6315 14.2684 13.6315 14.7834 13.9492 15.1007L18.6104 19.762C18.7692 19.9208 18.9771 20.0002 19.1852 20.0002C19.3931 20.0002 19.6012 19.9208 19.76 19.762C20.0776 19.4446 20.0776 18.9297 19.76 18.6124Z"
                                            fill="black"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-6">
                        <div class="tp-header-3-right">
                            <div class="tp-header-3-main-right d-flex align-items-center justify-content-end">
                                <div class="tp-header-3-phone d-flex align-items-center">
                                    <div class="tp-header-3-phone-icon">
                                        <img src="{{asset('img/icon/call.svg')}}" alt=""/>
                                    </div>
                                    <div class="tp-header-3-phone-content" style="width: 160px">
                        <span
                        >Phone: <br/>
                          <a href="tel:01900678956">+92 51 215 01 73 – 78</a></span
                        >
                                    </div>
                                </div>
                                <div class="tp-header-3-hamburger-btn offcanvas-open-btn">
                                    <button class="hamburger-btn">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
