<!DOCTYPE html>
<html class="no-js" lang="zxx">
@include('.Layouts.head')
<body>
<!-- header area start -->
@include('.Layouts.header', ['publicNav' => true])
<!-- header area end -->

<main>
    <!-- about breadcrumb area start -->
    <section
        class="breadcrumb__area breadcrumb-style pt-190 pb-210 p-relative z-index-1"
        data-background="{{asset('img/breadcrumb/breadcrumb-bg-1.jpg')}}"
    >
        <div class="breadcrumb__bg-overlay m-img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content text-center">
                        <h3 class="breadcrumb__title">
                            About Us
                            <img src="{{asset('img/breadcrumb/titile.svg')}}" alt=""/>
                        </h3>
                        <div class="breadcrumb__list breadcrumb__list-translate">
                            <span><a href="{{route('home')}}">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about breadcrumb area end -->

    <!-- about area start -->
    <section class="tp-about-breadcrumb p-relative pt-100 pb-90">
        <div class="tp-about-3-shape d-none d-lg-block">
            <img src="{{asset('img/business/shape-5.png')}}" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-about-breadcrumb-img p-relative text-center fadeLeft">
                        <img src="{{asset('img/about/about-1.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-about-3-wrapper">
                        <div class="tp-about-3-title-wrapper">
                  <span class="tp-section-title__pre">
                    About <span class="title-pre-color">Us</span>
                    <svg width="80" height="8" viewBox="0 0 123 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M0.384401 7.82144C0.645399 4.52972 8.83029 8.38041 10.8974 7.67652C12.4321 7.1486 11.6386 7.03474 12.9749 6.19628C14.0816 4.61253 15.7519 3.89829 17.9756 4.06391C18.6125 4.48831 19.2284 4.93342 19.8444 5.38888C21.1076 6.09277 22.1621 6.51717 23.6028 6.13417C24.8973 5.79258 25.5237 4.79885 26.6095 4.18812C30.8481 1.80732 31.3701 2.90456 34.5855 4.58147C36.0993 5.36817 37.634 6.48612 39.461 6.08242C40.1604 5.92715 40.2127 5.67871 40.672 5.54415C42.1023 4.10531 43.9606 3.52564 46.2469 3.80512C47.0612 4.28129 47.8651 4.75745 48.669 5.25431C50.9866 6.22733 54.5049 6.23769 54.6615 3.08053C54.3065 3.22545 53.962 3.37037 53.6175 3.51529C55.622 5.75117 58.6078 6.59998 61.5205 5.5752C64.8091 4.41585 63.8277 3.02877 67.1685 4.35374C68.6614 4.94377 70.2587 5.14045 71.856 4.96447C73.6412 4.7678 75.1028 3.27721 76.6271 3.07018C79.0491 2.73894 81.3354 4.89201 84.2482 4.15707C85.3235 3.88793 86.9417 2.27313 87.7978 2.21102C88.6329 2.14891 89.9484 3.68091 90.8358 4.14672C93.3936 5.51309 96.5882 5.75117 99.3234 4.7471C101.902 3.80512 100.858 3.60845 103.124 4.30199C104.366 4.67464 105.253 5.34747 106.652 5.45099C109.628 5.65801 112.175 4.26058 113.678 1.77626C113.25 1.77626 112.822 1.77626 112.384 1.77626C114.722 5.49239 119.587 6.10312 122.771 3.05983C123.471 2.39734 122.406 1.34151 121.707 2.00399C119.316 4.29164 115.516 3.95004 113.678 1.03097C113.386 0.554807 112.687 0.544455 112.384 1.03097C110.223 4.62288 105.159 4.84026 102.549 1.7038C102.278 1.38291 101.777 1.46572 101.495 1.7038C97.6113 4.99553 91.8171 4.46761 88.6747 0.368483C88.4242 0.0372403 87.85 -0.190489 87.5159 0.223564C84.9685 3.37037 80.7717 3.86723 77.6606 1.10343C77.3787 0.854995 76.9507 0.823941 76.6584 1.10343C73.422 4.26058 68.6823 4.52972 65.1432 1.63134C64.83 1.37256 64.3706 1.38291 64.1409 1.75556C61.9799 5.40958 57.2297 5.74082 54.4631 2.65613C54.0873 2.24207 53.44 2.59402 53.4191 3.09088C53.2103 7.04509 45.6727 1.72451 43.8979 1.92118C40.4841 2.30418 40.2127 5.74082 35.7026 3.82583C33.4894 2.88386 31.8085 0.989563 29.1777 1.39326C26.9226 1.74521 25.9622 3.86723 23.9682 4.63323C20.4603 5.9789 19.2702 2.13856 16.2531 2.33524C11.2941 2.66648 14.1442 7.41774 6.43955 5.75117C4.22629 5.27501 -0.221114 3.93969 0.00856432 7.82144C0.0190042 8.05952 0.363521 8.05952 0.384401 7.82144Z"
                          fill="currentColor"
                      ></path>
                    </svg>
                  </span>
                            <h3 class="tp-section-title">Who <span class="title-color">We Are?</span></h3>
                        </div>
                        <p class="text">
                            The Pakistan Microfinance Network (PMN or ‘the Network’), the national association for retail players
                            in the microfinance industry, was established as an informal group by industry practitioners in 1997,
                            under the name Microfinance Group-Pakistan [MFG-P]. At the time, the group was focused on coordinating
                            dialogue and lateral learning opportunities between members. Over time, with the increase in the
                            nature and level of activities, and membership, the setup was registered with the Securities and
                            Exchange Commission [SECP] in April 2001 under the Companies Act. It has since been known as the
                            Pakistan Microfinance Network. Currently the network strength stands at 46 Microfinance Providers
                            including Microfinance Banks (regulated by SBP) and Non-Bank Microfinance companies (regulated by
                            SECP).
                        </p>
                        <div class="tp-about-progressbar-inner d-flex flex-wrap pt-20">
                            <div class="tp-about-3-progressbar d-flex align-items-center">
                                <div class="tp-about-3-progressbar-title">
                                    <h4>Our Vison</h4>
                                    <p>Frontiers of Formal Financial Services reach out to all.</p>
                                </div>
                            </div>
                            <div class="tp-about-3-progressbar d-flex align-items-center">
                                <div class="tp-about-3-progressbar-title">
                                    <h4>Our Mission</h4>
                                    <p>
                                        Support the financial sector, especially retail financial service providers, to enhance their
                                        scale, quality, diversity and sustainability in order to achieve inclusive financial services
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area start -->

    <!-- feature area start -->
    <section class="tp-feature-area feature-breadcrumb pb-100">
        <div class="tp-feature-shape">
            <img class="shape-1" src="{{asset('img/feature/home-3/shape-1.png')}}" alt="" />
        </div>
        <div class="container container-large">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="tp-feature-title-wrapper pt-20">
                        <h3 class="tp-section-title">
                            Functions
                            <span class="title-left-shape">
                    <svg width="194" height="5" viewBox="0 0 194 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M193.649 4.22307C129.517 2.55338 65.7543 2.288 1.66891 4.99709C-0.571625 5.09661 -0.540924 2.60867 1.66891 2.48703C65.34 -0.962917 130.116 -1.06243 193.649 3.70336C194.109 3.73653 194.125 4.23412 193.649 4.22307Z"
                          fill="#05DAC3"
                      ></path>
                    </svg>
                  </span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tp-feature-item-box p-relative">
                        <div class="tp-feature-item p-relative mb-30">
                            <div class="tp-feature-item-shape">
                                <img src="{{asset('img/feature/shape-2.png')}}" alt="" />
                            </div>
                            <div class="tp-feature-item-wrapper">
                                <div class="tp-feature-item-thumb">
                                    <div class="shape">
                                        <img src="{{asset('img/feature/img-shape.png')}}" alt="" />
                                    </div>
                                    <img class="thumb" src="{{asset('img/feature/img-1.jpg')}}" alt="" />
                                </div>
                                <div class="tp-feature-item-content">
                                    <h3 class="feature-title">
                                        <a href="about-us.html">Knowledge Management</a>
                                        <span
                                        ><svg
                                                width="130"
                                                height="8"
                                                viewBox="0 0 130 8"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                            <path
                                d="M0.406277 7.82144C0.682129 4.52972 9.33282 8.38041 11.5176 7.67652C13.1396 7.1486 12.301 7.03474 13.7133 6.19628C14.8829 4.61253 16.6484 3.89829 18.9986 4.06391C19.6717 4.48831 20.3227 4.93342 20.9737 5.38888C22.3089 6.09277 23.4233 6.51717 24.946 6.13417C26.3142 5.79258 26.9763 4.79885 28.1238 4.18812C32.6036 1.80732 33.1553 2.90456 36.5538 4.58147C38.1538 5.36817 39.7758 6.48612 41.7067 6.08242C42.446 5.92715 42.5012 5.67871 42.9867 5.54415C44.4983 4.10531 46.4624 3.52564 48.8789 3.80512C49.7395 4.28129 50.5891 4.75745 51.4388 5.25431C53.8883 6.22733 57.6068 6.23769 57.7723 3.08053C57.3971 3.22545 57.033 3.37037 56.6689 3.51529C58.7874 5.75117 61.9432 6.59998 65.0217 5.5752C68.4974 4.41585 67.4602 3.02877 70.9911 4.35374C72.569 4.94377 74.2572 5.14045 75.9454 4.96447C77.8322 4.7678 79.377 3.27721 80.9879 3.07018C83.5478 2.73894 85.9643 4.89201 89.0428 4.15707C90.1793 3.88793 91.8896 2.27313 92.7944 2.21102C93.6771 2.14891 95.0674 3.68091 96.0053 4.14672C98.7086 5.51309 102.085 5.75117 104.976 4.7471C107.701 3.80512 106.598 3.60845 108.992 4.30199C110.305 4.67464 111.243 5.34747 112.722 5.45099C115.867 5.65801 118.559 4.26058 120.148 1.77626C119.695 1.77626 119.243 1.77626 118.78 1.77626C121.251 5.49239 126.393 6.10312 129.758 3.05983C130.498 2.39734 129.372 1.34151 128.633 2.00399C126.106 4.29164 122.09 3.95004 120.148 1.03097C119.839 0.554807 119.1 0.544455 118.78 1.03097C116.496 4.62288 111.144 4.84026 108.385 1.7038C108.099 1.38291 107.569 1.46572 107.271 1.7038C103.166 4.99553 97.0425 4.46761 93.7212 0.368483C93.4564 0.0372403 92.8495 -0.190489 92.4965 0.223564C89.8042 3.37037 85.3685 3.86723 82.0803 1.10343C81.7824 0.854995 81.33 0.823941 81.021 1.10343C77.6005 4.26058 72.591 4.52972 68.8505 1.63134C68.5195 1.37256 68.034 1.38291 67.7912 1.75556C65.5072 5.40958 60.4867 5.74082 57.5626 2.65613C57.1654 2.24207 56.4813 2.59402 56.4592 3.09088C56.2386 7.04509 48.272 1.72451 46.3962 1.92118C42.7881 2.30418 42.5012 5.74082 37.7345 3.82583C35.3952 2.88386 33.6188 0.989563 30.8382 1.39326C28.4548 1.74521 27.4397 3.86723 25.3322 4.63323C21.6248 5.9789 20.3669 2.13856 17.178 2.33524C11.9369 2.66648 14.9492 7.41774 6.80603 5.75117C4.46681 5.27501 -0.233697 3.93969 0.00905172 7.82144C0.0200858 8.05952 0.384209 8.05952 0.406277 7.82144Z"
                                fill="currentColor"
                            />
                          </svg>
                        </span>
                                    </h3>
                                    <p>
                                        Over the years, PMN has established itself as a knowledge center for the sector and has emerged
                                        as the first stop for information, data and analysis on microfinance and now increasingly on
                                        inclusive finance in Pakistan. Activities within this area include:
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tp-feature-item-btn">
                            <a href="about-us.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-feature-item-box p-relative">
                        <div class="tp-feature-item p-relative mb-30">
                            <div class="tp-feature-item-shape">
                                <img src="{{asset('img/feature/shape-2.png')}}" alt="" />
                            </div>
                            <div class="tp-feature-item-wrapper">
                                <div class="tp-feature-item-thumb">
                                    <div class="shape">
                                        <img src="{{asset('img/feature/img-shape.png')}}" alt="" />
                                    </div>
                                    <img class="thumb" src="{{asset('img/feature/img-2.jpg')}}" alt="" />
                                </div>
                                <div class="tp-feature-item-content">
                                    <h3 class="feature-title">
                                        <a href="about-us.html">Enabling Environment</a>
                                        <span
                                        ><svg
                                                width="130"
                                                height="8"
                                                viewBox="0 0 130 8"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                            <path
                                d="M0.406277 7.82144C0.682129 4.52972 9.33282 8.38041 11.5176 7.67652C13.1396 7.1486 12.301 7.03474 13.7133 6.19628C14.8829 4.61253 16.6484 3.89829 18.9986 4.06391C19.6717 4.48831 20.3227 4.93342 20.9737 5.38888C22.3089 6.09277 23.4233 6.51717 24.946 6.13417C26.3142 5.79258 26.9763 4.79885 28.1238 4.18812C32.6036 1.80732 33.1553 2.90456 36.5538 4.58147C38.1538 5.36817 39.7758 6.48612 41.7067 6.08242C42.446 5.92715 42.5012 5.67871 42.9867 5.54415C44.4983 4.10531 46.4624 3.52564 48.8789 3.80512C49.7395 4.28129 50.5891 4.75745 51.4388 5.25431C53.8883 6.22733 57.6068 6.23769 57.7723 3.08053C57.3971 3.22545 57.033 3.37037 56.6689 3.51529C58.7874 5.75117 61.9432 6.59998 65.0217 5.5752C68.4974 4.41585 67.4602 3.02877 70.9911 4.35374C72.569 4.94377 74.2572 5.14045 75.9454 4.96447C77.8322 4.7678 79.377 3.27721 80.9879 3.07018C83.5478 2.73894 85.9643 4.89201 89.0428 4.15707C90.1793 3.88793 91.8896 2.27313 92.7944 2.21102C93.6771 2.14891 95.0674 3.68091 96.0053 4.14672C98.7086 5.51309 102.085 5.75117 104.976 4.7471C107.701 3.80512 106.598 3.60845 108.992 4.30199C110.305 4.67464 111.243 5.34747 112.722 5.45099C115.867 5.65801 118.559 4.26058 120.148 1.77626C119.695 1.77626 119.243 1.77626 118.78 1.77626C121.251 5.49239 126.393 6.10312 129.758 3.05983C130.498 2.39734 129.372 1.34151 128.633 2.00399C126.106 4.29164 122.09 3.95004 120.148 1.03097C119.839 0.554807 119.1 0.544455 118.78 1.03097C116.496 4.62288 111.144 4.84026 108.385 1.7038C108.099 1.38291 107.569 1.46572 107.271 1.7038C103.166 4.99553 97.0425 4.46761 93.7212 0.368483C93.4564 0.0372403 92.8495 -0.190489 92.4965 0.223564C89.8042 3.37037 85.3685 3.86723 82.0803 1.10343C81.7824 0.854995 81.33 0.823941 81.021 1.10343C77.6005 4.26058 72.591 4.52972 68.8505 1.63134C68.5195 1.37256 68.034 1.38291 67.7912 1.75556C65.5072 5.40958 60.4867 5.74082 57.5626 2.65613C57.1654 2.24207 56.4813 2.59402 56.4592 3.09088C56.2386 7.04509 48.272 1.72451 46.3962 1.92118C42.7881 2.30418 42.5012 5.74082 37.7345 3.82583C35.3952 2.88386 33.6188 0.989563 30.8382 1.39326C28.4548 1.74521 27.4397 3.86723 25.3322 4.63323C21.6248 5.9789 20.3669 2.13856 17.178 2.33524C11.9369 2.66648 14.9492 7.41774 6.80603 5.75117C4.46681 5.27501 -0.233697 3.93969 0.00905172 7.82144C0.0200858 8.05952 0.384209 8.05952 0.406277 7.82144Z"
                                fill="currentColor"
                            />
                          </svg>
                        </span>
                                    </h3>
                                    <p>
                                        As an industry body, PMN strives to work with different stakeholders to create and promote a
                                        healthy and vibrant environment for microfinance in Pakistan. It does so through:
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tp-feature-item-btn">
                            <a href="about-us.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-feature-item-box p-relative">
                        <div class="tp-feature-item p-relative mb-30">
                            <div class="tp-feature-item-shape">
                                <img src="{{asset('img/feature/shape-2.png')}}" alt="" />
                            </div>
                            <div class="tp-feature-item-wrapper">
                                <div class="tp-feature-item-thumb">
                                    <div class="shape">
                                        <img src="{{asset('img/feature/img-shape.png')}}" alt="" />
                                    </div>
                                    <img class="thumb" src="{{asset('img/feature/img-3.jpg')}}" alt="" />
                                </div>
                                <div class="tp-feature-item-content">
                                    <h3 class="feature-title">
                                        <a href="about-us.html">Capacity Building</a>
                                        <span
                                        ><svg
                                                width="130"
                                                height="8"
                                                viewBox="0 0 130 8"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                            <path
                                d="M0.406277 7.82144C0.682129 4.52972 9.33282 8.38041 11.5176 7.67652C13.1396 7.1486 12.301 7.03474 13.7133 6.19628C14.8829 4.61253 16.6484 3.89829 18.9986 4.06391C19.6717 4.48831 20.3227 4.93342 20.9737 5.38888C22.3089 6.09277 23.4233 6.51717 24.946 6.13417C26.3142 5.79258 26.9763 4.79885 28.1238 4.18812C32.6036 1.80732 33.1553 2.90456 36.5538 4.58147C38.1538 5.36817 39.7758 6.48612 41.7067 6.08242C42.446 5.92715 42.5012 5.67871 42.9867 5.54415C44.4983 4.10531 46.4624 3.52564 48.8789 3.80512C49.7395 4.28129 50.5891 4.75745 51.4388 5.25431C53.8883 6.22733 57.6068 6.23769 57.7723 3.08053C57.3971 3.22545 57.033 3.37037 56.6689 3.51529C58.7874 5.75117 61.9432 6.59998 65.0217 5.5752C68.4974 4.41585 67.4602 3.02877 70.9911 4.35374C72.569 4.94377 74.2572 5.14045 75.9454 4.96447C77.8322 4.7678 79.377 3.27721 80.9879 3.07018C83.5478 2.73894 85.9643 4.89201 89.0428 4.15707C90.1793 3.88793 91.8896 2.27313 92.7944 2.21102C93.6771 2.14891 95.0674 3.68091 96.0053 4.14672C98.7086 5.51309 102.085 5.75117 104.976 4.7471C107.701 3.80512 106.598 3.60845 108.992 4.30199C110.305 4.67464 111.243 5.34747 112.722 5.45099C115.867 5.65801 118.559 4.26058 120.148 1.77626C119.695 1.77626 119.243 1.77626 118.78 1.77626C121.251 5.49239 126.393 6.10312 129.758 3.05983C130.498 2.39734 129.372 1.34151 128.633 2.00399C126.106 4.29164 122.09 3.95004 120.148 1.03097C119.839 0.554807 119.1 0.544455 118.78 1.03097C116.496 4.62288 111.144 4.84026 108.385 1.7038C108.099 1.38291 107.569 1.46572 107.271 1.7038C103.166 4.99553 97.0425 4.46761 93.7212 0.368483C93.4564 0.0372403 92.8495 -0.190489 92.4965 0.223564C89.8042 3.37037 85.3685 3.86723 82.0803 1.10343C81.7824 0.854995 81.33 0.823941 81.021 1.10343C77.6005 4.26058 72.591 4.52972 68.8505 1.63134C68.5195 1.37256 68.034 1.38291 67.7912 1.75556C65.5072 5.40958 60.4867 5.74082 57.5626 2.65613C57.1654 2.24207 56.4813 2.59402 56.4592 3.09088C56.2386 7.04509 48.272 1.72451 46.3962 1.92118C42.7881 2.30418 42.5012 5.74082 37.7345 3.82583C35.3952 2.88386 33.6188 0.989563 30.8382 1.39326C28.4548 1.74521 27.4397 3.86723 25.3322 4.63323C21.6248 5.9789 20.3669 2.13856 17.178 2.33524C11.9369 2.66648 14.9492 7.41774 6.80603 5.75117C4.46681 5.27501 -0.233697 3.93969 0.00905172 7.82144C0.0200858 8.05952 0.384209 8.05952 0.406277 7.82144Z"
                                fill="currentColor"
                            />
                          </svg>
                        </span>
                                    </h3>
                                    <p>
                                        PMN continues to play an active and significant role in creating training, exposure and human
                                        resource development opportunities for the sector through:
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tp-feature-item-btn">
                            <a href="about-us.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end -->

    <!-- counter area start -->
    <section class="tp-counter-area p-relative counter-breadcrumb pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-counter-box" data-background="{{asset('img/fun-fact/counter-bg.png')}}">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="tp-counter-wrapper tp-counter-border text-center">
                                    <h3 class="counter-title">
                                        <span>Auditor</span>
                                    </h3>
                                    <span class="counter-subtitle">KPMG Taseer Hadi & Co. Chartered Accountants, Islamabad</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="tp-counter-wrapper tp-counter-border text-center">
                                    <h3 class="counter-title"><span>Incorporation Number</span></h3>
                                    <span class="counter-subtitle">I-02801</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="tp-counter-wrapper tp-counter-border text-center">
                                    <h3 class="counter-title"><span>Legal Advisor</span></h3>
                                    <span class="counter-subtitle"
                                    >Azam Chaudhry Law<br />
                        Associates (ACLA)</span
                                    >
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="tp-counter-wrapper text-center">
                                    <h3 class="counter-title"><span>NTN Number</span></h3>
                                    <span class="counter-subtitle">1276362-4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->
</main>

<!-- footer area start -->
@include('.Layouts.footer')
<!-- footer area end -->

<!-- JS here -->
@include('.Layouts.js-scripts')
</body>
</html>
