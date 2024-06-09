<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Home - Pakistan Microfinance Network</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/splide.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome-pro.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/spacing.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
</head>
<body>

<!-- search popup start -->
<div class="search__popup">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="search__wrapper">
                    <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                            <a href="index.html">
                                <img src="{{ asset('img/logo/logo.png') }}" alt="logo" />
                            </a>
                        </div>
                        <div class="search__close">
                            <button type="button" class="search__close-btn search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 1L1 17"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M1 1L17 17"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="search__form">
                        <form action="#">
                            <div class="search__input">
                                <input class="search-input-field" type="text" placeholder="Type here to search..." />
                                <span class="search-focus-border"></span>
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M19.0002 19.0002L17.2002 17.2002"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="search-popup-overlay"></div>
<!-- search popup end -->

<!-- offcanvas area start -->
<div class="offcanvas__area home-3-pos">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 1L1 11"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                    <path
                        d="M1 1L11 11"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                <!-- <div class="offcanvas__logo logo">
                  <a href="home-main.html">
                    <img src="img/logo/footer-logo.png" alt="logo" />
                  </a>
                </div> -->
            </div>
            <div class="mobile-menu fix d-lg-none"></div>
            <div class="tp-mobile-menu-pos"></div>
            <div class="offcanvas__popup">
                <!-- <p>
                  Web designing in a powerful way of just not an only professions. We have tendency to believe the idea that
                  smart looking .
                </p> -->
                <div class="offcanvas__popup-gallery">
                    <h2>Registration</h2>
                    <form>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Name" />
                            </div>
                        </div>
                        <div class="row3 mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone" />
                            </div>
                        </div>
                        <div class="row3 mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email" />
                            </div>
                        </div>
                        <div class="row3 mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Address" />
                            </div>
                        </div>
                        <div class="row3 mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Course" />
                            </div>
                        </div>
                        <div class="row3 mb-3">
                            <a class="tp-btn-2 float-end" href="#">Submit</a>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="offcanvas__contact">
                <h4 class="offcanvas__title">Contacts</h4>
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a
                            href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1"
                        >
                            1st floor, 85-East, Kamran Centre, Jinnah Avenue, Blue Area, Islamabad, Pakistan
                        </a>
                    </div>
                </div>
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a href="mailto:#">info @ pmn.org.pk</a>
                    </div>
                </div>
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a href="tel:01310-069824"> +92 51 215 01 73 – 78</a>
                    </div>
                </div>
            </div>
            <div class="offcanvas__social">
                <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
                <a class="icon youtube" href="#"><i class="fab fa-youtube"></i></a>
                <a class="icon linkedin" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- offcanvas area end -->

<!-- header area start -->
@include('.Layouts.header', ['publicNav' => true])
<!-- header area end -->

<main>
    <!-- hero area start -->
    <section class="tp-hero-3-area p-relative fix">
        <div class="hero-active-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tp-hero-3-wrapper p-relative">
                        <div class="container">
                            <div class="tp-hero-3-shape">
                                <img class="shape-1" src="{{ asset('img/hero/hero-3/shape-1.png') }}" alt="" />
                                <img class="shape-2" src="{{ asset('img/hero/hero-3/shape-2.png') }}" alt="" />
                                <img class="shape-3" src="{{ asset('img/hero/hero-3/shape-3.png') }}" alt="" />
                            </div>
                            <div class="tp-hero-3">
                                <div class="tp-hero-bg" data-background="{{ asset('img/hero/hero-3/hero-1.jpg') }}"></div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="tp-hero-3-content p-relative">
                                            <div class="tp-hero-3-title-wrapper">
                            <span class="tp-section-title__pre p-relative">
                              Pakistan <span class="title-pre-color">Microfinance Network</span>
                              <svg
                                  width="123"
                                  height="8"
                                  viewBox="0 0 123 8"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                    d="M0.384401 7.82144C0.645399 4.52972 8.83029 8.38041 10.8974 7.67652C12.4321 7.1486 11.6386 7.03474 12.9749 6.19628C14.0816 4.61253 15.7519 3.89829 17.9756 4.06391C18.6125 4.48831 19.2284 4.93342 19.8444 5.38888C21.1076 6.09277 22.1621 6.51717 23.6028 6.13417C24.8973 5.79258 25.5237 4.79885 26.6095 4.18812C30.8481 1.80732 31.3701 2.90456 34.5855 4.58147C36.0993 5.36817 37.634 6.48612 39.461 6.08242C40.1604 5.92715 40.2127 5.67871 40.672 5.54415C42.1023 4.10531 43.9606 3.52564 46.2469 3.80512C47.0612 4.28129 47.8651 4.75745 48.669 5.25431C50.9866 6.22733 54.5049 6.23769 54.6615 3.08053C54.3065 3.22545 53.962 3.37037 53.6175 3.51529C55.622 5.75117 58.6078 6.59998 61.5205 5.5752C64.8091 4.41585 63.8277 3.02877 67.1685 4.35374C68.6614 4.94377 70.2587 5.14045 71.856 4.96447C73.6412 4.7678 75.1028 3.27721 76.6271 3.07018C79.0491 2.73894 81.3354 4.89201 84.2482 4.15707C85.3235 3.88793 86.9417 2.27313 87.7978 2.21102C88.6329 2.14891 89.9484 3.68091 90.8358 4.14672C93.3936 5.51309 96.5882 5.75117 99.3234 4.7471C101.902 3.80512 100.858 3.60845 103.124 4.30199C104.366 4.67464 105.253 5.34747 106.652 5.45099C109.628 5.65801 112.175 4.26058 113.678 1.77626C113.25 1.77626 112.822 1.77626 112.384 1.77626C114.722 5.49239 119.587 6.10312 122.771 3.05983C123.471 2.39734 122.406 1.34151 121.707 2.00399C119.316 4.29164 115.516 3.95004 113.678 1.03097C113.386 0.554807 112.687 0.544455 112.384 1.03097C110.223 4.62288 105.159 4.84026 102.549 1.7038C102.278 1.38291 101.777 1.46572 101.495 1.7038C97.6113 4.99553 91.8171 4.46761 88.6747 0.368483C88.4242 0.0372403 87.85 -0.190489 87.5159 0.223564C84.9685 3.37037 80.7717 3.86723 77.6606 1.10343C77.3787 0.854995 76.9507 0.823941 76.6584 1.10343C73.422 4.26058 68.6823 4.52972 65.1432 1.63134C64.83 1.37256 64.3706 1.38291 64.1409 1.75556C61.9799 5.40958 57.2297 5.74082 54.4631 2.65613C54.0873 2.24207 53.44 2.59402 53.4191 3.09088C53.2103 7.04509 45.6727 1.72451 43.8979 1.92118C40.4841 2.30418 40.2127 5.74082 35.7026 3.82583C33.4894 2.88386 31.8085 0.989563 29.1777 1.39326C26.9226 1.74521 25.9622 3.86723 23.9682 4.63323C20.4603 5.9789 19.2702 2.13856 16.2531 2.33524C11.2941 2.66648 14.1442 7.41774 6.43955 5.75117C4.22629 5.27501 -0.221114 3.93969 0.00856432 7.82144C0.0190042 8.05952 0.363521 8.05952 0.384401 7.82144Z"
                                    fill="currentColor"
                                />
                              </svg>
                            </span>
                                                <h3 class="tp-hero-3-title">
                                                    Identification and
                                                    <span class="title-color">Assessment</span>
                                                    <svg
                                                        class="circle"
                                                        width="225"
                                                        height="109"
                                                        viewBox="0 0 225 109"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    ></svg>
                                                    <svg
                                                        class="line"
                                                        width="265"
                                                        height="6"
                                                        viewBox="0 0 265 6"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    ></svg>
                                                    <br />
                                                    of Risks 2020
                                                </h3>
                                                <div class="tp-hero-3-btn">
                                                    <a class="tp-btn-2" href="#">LEARN MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-hero-3-bottom p-relative d-none d-md-block">
                                        <h3 class="tp-hero-3-bottom-title">Assessment</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-hero-3-wrapper p-relative">
                        <div class="container">
                            <div class="tp-hero-3-shape">
                                <img class="shape-1" src="{{ asset('img/hero/hero-3/shape-1.png') }}" alt="" />
                                <img class="shape-2" src="{{ asset('img/hero/hero-3/shape-2.png') }}" alt="" />
                                <img class="shape-3" src="{{ asset('img/hero/hero-3/shape-3.png') }}" alt="" />
                            </div>
                            <div class="tp-hero-3">
                                <div class="tp-hero-bg" data-background="{{ asset('img/hero/hero-3/hero-2.jpg') }}"></div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="tp-hero-3-content p-relative">
                                            <div class="tp-hero-3-title-wrapper">
                            <span class="tp-section-title__pre p-relative">
                              Pakistan <span class="title-pre-color">Microfinance Network</span>
                              <svg
                                  width="123"
                                  height="8"
                                  viewBox="0 0 123 8"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                    d="M0.384401 7.82144C0.645399 4.52972 8.83029 8.38041 10.8974 7.67652C12.4321 7.1486 11.6386 7.03474 12.9749 6.19628C14.0816 4.61253 15.7519 3.89829 17.9756 4.06391C18.6125 4.48831 19.2284 4.93342 19.8444 5.38888C21.1076 6.09277 22.1621 6.51717 23.6028 6.13417C24.8973 5.79258 25.5237 4.79885 26.6095 4.18812C30.8481 1.80732 31.3701 2.90456 34.5855 4.58147C36.0993 5.36817 37.634 6.48612 39.461 6.08242C40.1604 5.92715 40.2127 5.67871 40.672 5.54415C42.1023 4.10531 43.9606 3.52564 46.2469 3.80512C47.0612 4.28129 47.8651 4.75745 48.669 5.25431C50.9866 6.22733 54.5049 6.23769 54.6615 3.08053C54.3065 3.22545 53.962 3.37037 53.6175 3.51529C55.622 5.75117 58.6078 6.59998 61.5205 5.5752C64.8091 4.41585 63.8277 3.02877 67.1685 4.35374C68.6614 4.94377 70.2587 5.14045 71.856 4.96447C73.6412 4.7678 75.1028 3.27721 76.6271 3.07018C79.0491 2.73894 81.3354 4.89201 84.2482 4.15707C85.3235 3.88793 86.9417 2.27313 87.7978 2.21102C88.6329 2.14891 89.9484 3.68091 90.8358 4.14672C93.3936 5.51309 96.5882 5.75117 99.3234 4.7471C101.902 3.80512 100.858 3.60845 103.124 4.30199C104.366 4.67464 105.253 5.34747 106.652 5.45099C109.628 5.65801 112.175 4.26058 113.678 1.77626C113.25 1.77626 112.822 1.77626 112.384 1.77626C114.722 5.49239 119.587 6.10312 122.771 3.05983C123.471 2.39734 122.406 1.34151 121.707 2.00399C119.316 4.29164 115.516 3.95004 113.678 1.03097C113.386 0.554807 112.687 0.544455 112.384 1.03097C110.223 4.62288 105.159 4.84026 102.549 1.7038C102.278 1.38291 101.777 1.46572 101.495 1.7038C97.6113 4.99553 91.8171 4.46761 88.6747 0.368483C88.4242 0.0372403 87.85 -0.190489 87.5159 0.223564C84.9685 3.37037 80.7717 3.86723 77.6606 1.10343C77.3787 0.854995 76.9507 0.823941 76.6584 1.10343C73.422 4.26058 68.6823 4.52972 65.1432 1.63134C64.83 1.37256 64.3706 1.38291 64.1409 1.75556C61.9799 5.40958 57.2297 5.74082 54.4631 2.65613C54.0873 2.24207 53.44 2.59402 53.4191 3.09088C53.2103 7.04509 45.6727 1.72451 43.8979 1.92118C40.4841 2.30418 40.2127 5.74082 35.7026 3.82583C33.4894 2.88386 31.8085 0.989563 29.1777 1.39326C26.9226 1.74521 25.9622 3.86723 23.9682 4.63323C20.4603 5.9789 19.2702 2.13856 16.2531 2.33524C11.2941 2.66648 14.1442 7.41774 6.43955 5.75117C4.22629 5.27501 -0.221114 3.93969 0.00856432 7.82144C0.0190042 8.05952 0.363521 8.05952 0.384401 7.82144Z"
                                    fill="currentColor"
                                />
                              </svg>
                            </span>
                                                <h3 class="tp-hero-3-title">
                                                    Risks to
                                                    <span class="title-color">Microfinance in</span>
                                                    <svg
                                                        class="circle"
                                                        width="225"
                                                        height="109"
                                                        viewBox="0 0 225 109"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    ></svg>
                                                    <svg
                                                        class="line"
                                                        width="265"
                                                        height="6"
                                                        viewBox="0 0 265 6"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M0.48167 4.22573C87.7577 2.55537 174.532 2.28989 261.746 5.00006C264.795 5.09962 264.753 2.61068 261.746 2.489C175.096 -0.962325 86.9432 -1.06188 0.48167 3.70582C-0.144863 3.739 -0.165748 4.23679 0.48167 4.22573Z"
                                                            fill="currentColor"
                                                        />
                                                    </svg>
                                                    <br />
                                                    Pakistan 2020
                                                </h3>
                                                <div class="tp-hero-3-btn">
                                                    <a class="tp-btn-2" href="#">LEARN MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-hero-3-bottom p-relative d-none d-md-block">
                                        <h3 class="tp-hero-3-bottom-title">Risks</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-hero-3-wrapper p-relative">
                        <div class="container">
                            <div class="tp-hero-3-shape">
                                <img class="shape-1" src="{{ asset('img/hero/hero-3/shape-1.png') }}" alt="" />
                                <img class="shape-2" src="{{ asset('img/hero/hero-3/shape-2.png') }}" alt="" />
                                <img class="shape-3" src="{{ asset('img/hero/hero-3/shape-3.png') }}" alt="" />
                            </div>
                            <div class="tp-hero-3">
                                <div class="tp-hero-bg" data-background="{{ asset('img/hero/hero-3/hero-3.png') }}"></div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="tp-hero-3-content p-relative">
                                            <div class="tp-hero-3-title-wrapper">
                            <span class="tp-section-title__pre p-relative">
                              Pakistan <span class="title-pre-color">Microfinance Network</span>
                              <svg
                                  width="123"
                                  height="8"
                                  viewBox="0 0 123 8"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                    d="M0.384401 7.82144C0.645399 4.52972 8.83029 8.38041 10.8974 7.67652C12.4321 7.1486 11.6386 7.03474 12.9749 6.19628C14.0816 4.61253 15.7519 3.89829 17.9756 4.06391C18.6125 4.48831 19.2284 4.93342 19.8444 5.38888C21.1076 6.09277 22.1621 6.51717 23.6028 6.13417C24.8973 5.79258 25.5237 4.79885 26.6095 4.18812C30.8481 1.80732 31.3701 2.90456 34.5855 4.58147C36.0993 5.36817 37.634 6.48612 39.461 6.08242C40.1604 5.92715 40.2127 5.67871 40.672 5.54415C42.1023 4.10531 43.9606 3.52564 46.2469 3.80512C47.0612 4.28129 47.8651 4.75745 48.669 5.25431C50.9866 6.22733 54.5049 6.23769 54.6615 3.08053C54.3065 3.22545 53.962 3.37037 53.6175 3.51529C55.622 5.75117 58.6078 6.59998 61.5205 5.5752C64.8091 4.41585 63.8277 3.02877 67.1685 4.35374C68.6614 4.94377 70.2587 5.14045 71.856 4.96447C73.6412 4.7678 75.1028 3.27721 76.6271 3.07018C79.0491 2.73894 81.3354 4.89201 84.2482 4.15707C85.3235 3.88793 86.9417 2.27313 87.7978 2.21102C88.6329 2.14891 89.9484 3.68091 90.8358 4.14672C93.3936 5.51309 96.5882 5.75117 99.3234 4.7471C101.902 3.80512 100.858 3.60845 103.124 4.30199C104.366 4.67464 105.253 5.34747 106.652 5.45099C109.628 5.65801 112.175 4.26058 113.678 1.77626C113.25 1.77626 112.822 1.77626 112.384 1.77626C114.722 5.49239 119.587 6.10312 122.771 3.05983C123.471 2.39734 122.406 1.34151 121.707 2.00399C119.316 4.29164 115.516 3.95004 113.678 1.03097C113.386 0.554807 112.687 0.544455 112.384 1.03097C110.223 4.62288 105.159 4.84026 102.549 1.7038C102.278 1.38291 101.777 1.46572 101.495 1.7038C97.6113 4.99553 91.8171 4.46761 88.6747 0.368483C88.4242 0.0372403 87.85 -0.190489 87.5159 0.223564C84.9685 3.37037 80.7717 3.86723 77.6606 1.10343C77.3787 0.854995 76.9507 0.823941 76.6584 1.10343C73.422 4.26058 68.6823 4.52972 65.1432 1.63134C64.83 1.37256 64.3706 1.38291 64.1409 1.75556C61.9799 5.40958 57.2297 5.74082 54.4631 2.65613C54.0873 2.24207 53.44 2.59402 53.4191 3.09088C53.2103 7.04509 45.6727 1.72451 43.8979 1.92118C40.4841 2.30418 40.2127 5.74082 35.7026 3.82583C33.4894 2.88386 31.8085 0.989563 29.1777 1.39326C26.9226 1.74521 25.9622 3.86723 23.9682 4.63323C20.4603 5.9789 19.2702 2.13856 16.2531 2.33524C11.2941 2.66648 14.1442 7.41774 6.43955 5.75117C4.22629 5.27501 -0.221114 3.93969 0.00856432 7.82144C0.0190042 8.05952 0.363521 8.05952 0.384401 7.82144Z"
                                    fill="currentColor"
                                />
                              </svg>
                            </span>
                                                <h3 class="tp-hero-3-title">
                                                    Impact of
                                                    <span class="title-color">Coronavirus </span>
                                                    <svg
                                                        class="circle"
                                                        width="225"
                                                        height="109"
                                                        viewBox="0 0 225 109"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    ></svg>
                                                    <svg
                                                        class="line"
                                                        width="265"
                                                        height="6"
                                                        viewBox="0 0 265 6"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M0.48167 4.22573C87.7577 2.55537 174.532 2.28989 261.746 5.00006C264.795 5.09962 264.753 2.61068 261.746 2.489C175.096 -0.962325 86.9432 -1.06188 0.48167 3.70582C-0.144863 3.739 -0.165748 4.23679 0.48167 4.22573Z"
                                                            fill="currentColor"
                                                        />
                                                    </svg>
                                                    <br />
                                                    on MSEs
                                                </h3>
                                                <div class="tp-hero-3-btn">
                                                    <a class="tp-btn-2" href="#">LEARN MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-hero-3-bottom p-relative d-none d-md-block">
                                        <h3 class="tp-hero-3-bottom-title">Impact</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-hero-3-nav d-none d-xl-block">
            <button type="button" class="hero-button-prev-1 tp-btn-hover-clear alt-color">
                <i class="fa-regular fa-arrow-left"></i>
                <b></b>
            </button>
            <button type="button" class="hero-button-next-1 tp-btn-hover-clear alt-color">
                <i class="fa-regular fa-arrow-right"></i>
                <b></b>
            </button>
        </div>
    </section>
    <!-- hero area end -->

    <!-- counter area start -->
    <section class="tp-counter-3-area p-relative">
        <div class="tp-counter-3-bg">
            <img class="shape-1" src="{{ asset('img/others/bg.png') }}" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tp-counter-3-wrapper tp-counter-3-border text-center">
                        <h3 class="counter-title">
                            <span data-purecounter-duration="4" data-purecounter-end="30" class="purecounter">0</span>
                        </h3>
                        <span class="counter-subtitle">Total Services</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tp-counter-3-wrapper tp-counter-3-border text-center">
                        <h3 class="counter-title">
                            <span data-purecounter-duration="4" data-purecounter-end="100" class="purecounter">0</span>%
                        </h3>
                        <span class="counter-subtitle">Client Satisfiction</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tp-counter-3-wrapper tp-counter-3-border text-center">
                        <h3 class="counter-title">
                            <span data-purecounter-duration="4" data-purecounter-end="3" class="purecounter">0</span>m+
                        </h3>
                        <span class="counter-subtitle">Monthly Revinew</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tp-counter-3-wrapper text-center">
                        <h3 class="counter-title">
                            <span data-purecounter-duration="4" data-purecounter-end="30" class="purecounter">0</span>+
                        </h3>
                        <span class="counter-subtitle">Years Experince</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->

    <!-- about area start -->
    <section class="tp-about-3-area p-relative pt-185 pb-170">
        <div class="shape-bg">
            <img src="{{ asset('img/about/home-3/shape-4.png') }}" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="tp-about-wrapper pl-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="tp-about-title-wrapper p-relative">
                                    <h3 class="tp-section-title">
                                        Portals
                                        <span class="title-left-shape">
                          <svg
                              width="194"
                              height="5"
                              viewBox="0 0 194 5"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                                d="M193.649 4.22307C129.517 2.55338 65.7543 2.288 1.66891 4.99709C-0.571625 5.09661 -0.540924 2.60867 1.66891 2.48703C65.34 -0.962917 130.116 -1.06243 193.649 3.70336C194.109 3.73653 194.125 4.23412 193.649 4.22307Z"
                                fill="#05DAC3"
                            />
                          </svg>
                        </span>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="tp-about-nav d-none d-md-block p-relative">
                                    <button type="button" class="about-button-prev-1">
                                        <i class="fa-regular fa-arrow-left"></i>
                                    </button>
                                    <button type="button" class="about-button-next-1">
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tp-about-item-wrapper">
                            <div class="about-active swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tp-about-item mb-30">
                                            <div class="tp-about-item-thumb">
                                                <img src="{{ asset('img/about/icon-1.png') }}" alt="" />
                                            </div>
                                            <div class="tp-about-item-content">
                                                <h4 class="about-title">Micro Eye</h4>
                                                <p>
                                                    As far as we might be concerned <br />
                                                    making an extraordinary advanc <br />
                                                    ed experience is a blend bet
                                                </p>
                                                <div class="tp-about-item-btn">
                                                    <a href="#"><i class="fa-regular fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-about-item mb-30">
                                            <div class="tp-about-item-thumb">
                                                <img src="{{ asset('img/about/icon-2.png') }}" alt="" />
                                            </div>
                                            <div class="tp-about-item-content">
                                                <h4 class="about-title">Micro Watch</h4>
                                                <p>
                                                    As far as we might be concerned <br />
                                                    making an extraordinary advanc <br />
                                                    ed experience is a blend bet
                                                </p>
                                                <div class="tp-about-item-btn">
                                                    <a href="#"><i class="fa-regular fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-about-item mb-30">
                                            <div class="tp-about-item-thumb">
                                                <img src="{{ asset('img/about/icon-3.png') }}" alt="" />
                                            </div>
                                            <div class="tp-about-item-content">
                                                <h4 class="about-title">Micro Mundi</h4>
                                                <p>
                                                    As far as we might be concerned <br />
                                                    making an extraordinary advanc <br />
                                                    ed experience is a blend bet
                                                </p>
                                                <div class="tp-about-item-btn">
                                                    <a href="#"><i class="fa-regular fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area start -->

    <!-- service area start -->
    <section
        class="tp-service-3-area p-relative pt-120 pb-60"
        data-background="{{ asset('img/services/home-3/service-bg.png') }}"
    >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="tp-service-3-title-wrapper">
                <span class="tp-section-title__pre">
                  Latest <span class="title-pre-color">Publications</span>
                  <svg width="123" height="8" viewBox="0 0 123 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.384401 7.82144C0.645399 4.52972 8.83029 8.38041 10.8974 7.67652C12.4321 7.1486 11.6386 7.03474 12.9749 6.19628C14.0816 4.61253 15.7519 3.89829 17.9756 4.06391C18.6125 4.48831 19.2284 4.93342 19.8444 5.38888C21.1076 6.09277 22.1621 6.51717 23.6028 6.13417C24.8973 5.79258 25.5237 4.79885 26.6095 4.18812C30.8481 1.80732 31.3701 2.90456 34.5855 4.58147C36.0993 5.36817 37.634 6.48612 39.461 6.08242C40.1604 5.92715 40.2127 5.67871 40.672 5.54415C42.1023 4.10531 43.9606 3.52564 46.2469 3.80512C47.0612 4.28129 47.8651 4.75745 48.669 5.25431C50.9866 6.22733 54.5049 6.23769 54.6615 3.08053C54.3065 3.22545 53.962 3.37037 53.6175 3.51529C55.622 5.75117 58.6078 6.59998 61.5205 5.5752C64.8091 4.41585 63.8277 3.02877 67.1685 4.35374C68.6614 4.94377 70.2587 5.14045 71.856 4.96447C73.6412 4.7678 75.1028 3.27721 76.6271 3.07018C79.0491 2.73894 81.3354 4.89201 84.2482 4.15707C85.3235 3.88793 86.9417 2.27313 87.7978 2.21102C88.6329 2.14891 89.9484 3.68091 90.8358 4.14672C93.3936 5.51309 96.5882 5.75117 99.3234 4.7471C101.902 3.80512 100.858 3.60845 103.124 4.30199C104.366 4.67464 105.253 5.34747 106.652 5.45099C109.628 5.65801 112.175 4.26058 113.678 1.77626C113.25 1.77626 112.822 1.77626 112.384 1.77626C114.722 5.49239 119.587 6.10312 122.771 3.05983C123.471 2.39734 122.406 1.34151 121.707 2.00399C119.316 4.29164 115.516 3.95004 113.678 1.03097C113.386 0.554807 112.687 0.544455 112.384 1.03097C110.223 4.62288 105.159 4.84026 102.549 1.7038C102.278 1.38291 101.777 1.46572 101.495 1.7038C97.6113 4.99553 91.8171 4.46761 88.6747 0.368483C88.4242 0.0372403 87.85 -0.190489 87.5159 0.223564C84.9685 3.37037 80.7717 3.86723 77.6606 1.10343C77.3787 0.854995 76.9507 0.823941 76.6584 1.10343C73.422 4.26058 68.6823 4.52972 65.1432 1.63134C64.83 1.37256 64.3706 1.38291 64.1409 1.75556C61.9799 5.40958 57.2297 5.74082 54.4631 2.65613C54.0873 2.24207 53.44 2.59402 53.4191 3.09088C53.2103 7.04509 45.6727 1.72451 43.8979 1.92118C40.4841 2.30418 40.2127 5.74082 35.7026 3.82583C33.4894 2.88386 31.8085 0.989563 29.1777 1.39326C26.9226 1.74521 25.9622 3.86723 23.9682 4.63323C20.4603 5.9789 19.2702 2.13856 16.2531 2.33524C11.2941 2.66648 14.1442 7.41774 6.43955 5.75117C4.22629 5.27501 -0.221114 3.93969 0.00856432 7.82144C0.0190042 8.05952 0.363521 8.05952 0.384401 7.82144Z"
                        fill="currentColor"
                    ></path>
                  </svg>
                </span>
                        <h3 class="tp-section-title">
                            Best <span class="title-color">Microfinance</span> <br />
                            Company For People
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="tp-service-3-content OneByOne mb-30">
                        <div class="tp-service-3-content-thumb">
                            <img src="{{ asset('img/services/home-3/icon-1.png') }}" alt="" />
                        </div>
                        <h4 class="tp-service-3-title">
                            <a href="#"
                            >Identification and Assessment <br />
                                of Risks 2020</a
                            >
                        </h4>
                        <p>
                            Risk is an inherent element of financial services, and like all financial institutions, microfinance
                            providers (MFPs) face risks that they must manage effectively to achieve their financial and social
                            objectives.
                        </p>
                        <div class="tp-service-btn">
                            <a href="#">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tp-service-3-content OneByOne mb-30">
                        <div class="tp-service-3-content-thumb">
                            <img src="{{ asset('img/services/home-3/icon-2.png') }}" alt="" />
                        </div>
                        <h4 class="tp-service-3-title">
                            <a href="#"
                            >Pakistan Microfinance <br />
                                Review 2019</a
                            >
                        </h4>
                        <p>
                            The financial year (FY) 2019 was challenging for the economy. The growth in real GDP declined to 3.3
                            percent compared to 5.5 percent in the prior year, well below the target of 6.2 percent, while
                            inflation ...
                        </p>
                        <div class="tp-service-btn">
                            <a href="#">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tp-service-3-content OneByOne mb-30">
                        <div class="tp-service-3-content-thumb">
                            <img src="{{ asset('img/services/home-3/icon-3.png') }}" alt="" />
                        </div>
                        <h4 class="tp-service-3-title"><a href="#">MicroWatch Issue 58</a></h4>
                        <br />
                        <p>
                            Despite the slight setbacks set forth from the second wave of the pandemic, indicators for the last
                            quarter of 2020 depicted that the microfinance sector reclaimed its previous growth trajectory ...
                        </p>
                        <div class="tp-service-btn">
                            <a href="#">Read More <i class="fa-solid fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- blog area start -->
    <section class="tp-blog-3-area p-relative fix pt-30 pb-90">
        <div class="tp-blog-3-shape">
            <img class="shape-1" src="{{ asset('img/blog/shape-2.png') }}" alt="" />
            <img class="shape-2" src="{{ asset('img/blog/shape-2.png') }}" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-blog-3-title-wrapper text-center">
                        <span class="tp-section-title__pre"> </span>
                        <h3 class="tp-section-title">Latest <span class="title-color">News</span> <br /></h3>
                    </div>
                </div>
                @foreach($newsAndEvents as $item)
                <div class="col-xl-3 col-md-6">
                    <div class="tp-blog-3-wrapper mb-30 OneByOne">
                        <div class="tp-blog-3-thumb">
                            <a href="#"><img src="{{ \Illuminate\Support\Facades\Storage::url('/'.$item['file_path']) }}" alt="" /></a>
                        </div>
                        <div class="tp-blog-3-content">
                            <div class="tp-blog-date">
                                <span><i class="fa-light fa-calendar-days"></i>{{(new DateTime($item->date_time))->format('M d, Y')}}</span>
                            </div>
                            <h3 class="tp-blog-3-title">
                                <a href="#">{{$item['title']}}</a>
                            </h3>
                            <p>
                                {!! nl2br(e(\Illuminate\Support\Str::limit($item->description, 100))) !!}
                            </p>
                        </div>
                        <div class="tp-blog-3-btn d-flex justify-content-between">
                            <div class="read-more p-relative">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                >Read More
                                    <span
                                    ><svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M16.1658 4.7457L4.64685 14.7646C4.31796 15.0507 3.88211 15.0938 3.67396 14.8608C3.46581 14.6278 3.5638 14.2066 3.89268 13.9205L15.4116 3.90159C15.7405 3.61553 16.1764 3.57245 16.3845 3.80542C16.5927 4.0384 16.4947 4.45964 16.1658 4.7457Z"
                              fill="currentColor"
                          />
                          <path
                              d="M16.7227 9.69055C16.5861 9.80933 16.4034 9.87621 16.2062 9.86208C15.8118 9.83504 15.5102 9.49748 15.5324 9.10795L15.7964 4.49597L11.1258 4.17577C10.7314 4.14873 10.4297 3.81104 10.452 3.42164C10.4744 3.03214 10.8121 2.7384 11.2065 2.76543L16.5904 3.13466C16.9848 3.16169 17.2864 3.49926 17.2641 3.88865L16.9599 9.20509C16.9494 9.40129 16.8593 9.57176 16.7227 9.69055Z"
                              fill="currentColor"
                          /></svg></span
                                    ></a>
                            </div>
                            <div class="fvrt">
                                <span><i class="fa-light fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- blog area end -->
</main>

<!-- footer area start -->
@include('.Layouts.footer')
<!-- footer area end -->

<!-- JS here -->

@include('.Layouts.js-scripts')
</body>
</html>
