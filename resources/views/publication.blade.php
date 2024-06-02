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
                            Our Publications
                            <img src="{{asset('img/breadcrumb/titile.svg')}}" alt=""/>
                        </h3>
                        <div class="breadcrumb__list breadcrumb__list-translate">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                            <span>Our Publications</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about breadcrumb area end -->

    <!-- Publication area start -->
    <div class="container publication-container">
        <div class="row">
            <div class="col-9">
                <div class="row">
                    @foreach($publications as $item)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="publication-box mt-40">
                                <div class="publication-top">
                                    <img src="{{asset('img/publication-img.jpg')}}" alt=""/>
                                </div>
                                <div class="publication-bottom">
                                    <p>{{(new DateTime($item->date_time))->format('M d, Y')}}</p>
                                    <h3>{{ $item['title'] }}</h3>
                                    <h4>{{ $item['author'] }}</h4>
                                    <a href="#"
                                    >
                                        <button class="download-btn"><i class="fa-solid fa-download me-1"></i><a
                                                href="{{ \Illuminate\Support\Facades\Storage::url('/').$item['file_path'] }}" target="_blank">Download</a>
                                        </button>
                                    </a
                                    >
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-3">
                <div class="publication-right-info">
                    <h3 class="side-border">Archives</h3>
                    <ul>
                        <li><a href="#">December 2023</a></li>
                        <li><a href="#">May 2023</a></li>
                        <li><a href="#">March 2023</a></li>
                        <li><a href="#">February 2023</a></li>
                        <li><a href="#">November 2022</a></li>
                        <li><a href="#">September 2022</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Publication area end -->
</main>

<!-- footer area start -->
@include('.Layouts.footer')
<!-- footer area end -->

<!-- JS here -->
@include('.Layouts.js-scripts')
</body>
</html>
