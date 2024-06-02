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
                            Team
                            <img src="{{asset('img/breadcrumb/titile.svg')}}" alt=""/>
                        </h3>
                        <div class="breadcrumb__list breadcrumb__list-translate">
                            <span><a href="{{route('home')}}">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                            <span>Team Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about breadcrumb area end -->

    <!-- team breadcrumb area -->
    <section class="tp-team-breadcrumb-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <h3>Chairperson</h3>
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/img-1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Kabeer Naqvi</a></h3>
                                <span>Chairman</span>
                                <p>Pakistan Microfinance Network</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h3>Vice Chairperson</h3>
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/muhammad-murtaza.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Muhammad Murtaza</a></h3>
                                <span>CEO</span>
                                <p>Rural Community Development Programme</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6"></div>
            </div>
            <div class="row">
                <div class="tp-about-title-wrapper p-relative" style="margin-bottom: 40px">
                    <h3 class="tp-section-title" style="margin-bottom: 0">
                        Directors
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
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/qazi-shoaib.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr.Qazi Shoaib Alam</a></h3>
                                <span>CEO</span>
                                <p>JWS Pakistan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/faisal-ijaz.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Faisal Ejaz Khan</a></h3>
                                <span>CIO</span>
                                <p>Bank of Punjab</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/amjad-saqib.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Dr. Amjad Saqib</a></h3>
                                <span>Founder & CEO</span>
                                <p>Akhuwat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/muhammad-afzal.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr.Muhammad Afzal</a></h3>
                                <span>Head Consulting</span>
                                <p>DWP Pakistan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/rashid-bajwa.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Dr.Rashid Bajwa</a></h3>
                                <span>CEO</span>
                                <p>National Rural Support Programme (NRSP)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/amir-masood.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Amir Masood Khan</a></h3>
                                <span>President & CEO</span>
                                <p>HBL Microfinance Bank</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/ghazanfar-azzam.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr.Ghazanfar Azzam</a></h3>
                                <span>President & CEO</span>
                                <p>Mobilink Microfinance Bank Limited.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/sajjad-ali-shah.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Sajjad Ali Shah</a></h3>
                                <span> Managing Director & Company Secretary</span>
                                <p>SAFCO Support Foundation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/nilofar-sohail.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Ms. Nilofer Sohail</a></h3>
                                <span>Deputy General Manager & Head of Channel Strategy & Execution</span>
                                <p>EFU Life Assurance Ltd.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/irfan-khokar.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Irfan Khokhar</a></h3>
                                <span>CEO</span>
                                <p>FFO Support Programme</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/mudassar-aqil.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Mudassar Aqil</a></h3>
                                <span>President & CEO</span>
                                <p>Telenor Microfinance Bank</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/khursheed-kotwal.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Ms. Khursheed Kotwal</a></h3>
                                <span>CEO</span>
                                <p>Aasman International</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/jahanzeb-khan.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Jahanzeb Khan</a></h3>
                                <span>CEO</span>
                                <p>FINCA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/ameer-karachiwalla.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Aameer Karachiwalla</a></h3>
                                <span>President & CEO</span>
                                <p>Khushhali Microfinance Bank Limited</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/sadaffe-abid.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Ms. Sadaffe Abid</a></h3>
                                <span>President & CEO</span>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/mudassir.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Mr. Mudassir H. Khan</a></h3>
                                <span> Managing Director/Chief Executive Officer</span>
                                <p>Pakistan Mortgage Refinance Company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tp-about-title-wrapper p-relative" style="margin-bottom: 40px">
                    <h3 class="tp-section-title" style="margin-bottom: 0">
                        Management
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
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/syed-mohsin-ahmed.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Syed Mohsin Ahmed</a></h3>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/ali-basharat.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Ali Basharat</a></h3>
                                <span>Head of Operations</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"
                            ><img src="{{asset('img/breadcrumb/team/muhammad-waqas-khan.jpg')}}" alt=""
                                /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Muhammad Waqas Khan</a></h3>
                                <span>Chief Financial Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="tp-team-wrapper p-relative mb-30">
                        <div class="tp-team-wrapper-thumb">
                            <a href="team-details.html"><img src="{{asset('img/breadcrumb/team/fahd-zaman-khan.jpg')}}" alt="" /></a>
                        </div>
                        <div class="tp-team-wrapper-content d-flex justify-content-between">
                            <div class="tp-team-wrapper-content-text">
                                <h3 class="team-title"><a href="#">Fahd Zaman Khan</a></h3>
                                <span>Manager Operations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team breadcrumb end -->
</main>

<!-- footer area start -->
@include('.Layouts.footer')
<!-- footer area end -->

<!-- JS here -->
@include('.Layouts.js-scripts')
</body>
</html>
