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
                            News And Events
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

</main>

<!-- footer area start -->
@include('.Layouts.footer')
<!-- footer area end -->

<!-- JS here -->
@include('.Layouts.js-scripts')
</body>
</html>
