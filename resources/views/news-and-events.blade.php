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
    <!-- postbox area start -->
         <section class="postbox__area pt-120 pb-120">
            <div class="container">
               <div class="row">
                   @foreach($newsAndEvents as $item)
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <div class="postbox__wrapper">
                        <article class="postbox__item format-image mb-50 transition-3">
                           <div class="postbox__thumb w-img">
                              <a href="blog-details.html">
                                 <img src="{{\Illuminate\Support\Facades\Storage::url('/'.$item['file_path'])}}" alt="">
                              </a>

                           </div>
                           <div class="postbox__content">
                              <div class="postbox__meta">
                                 <span><i class="fa-light fa-calendar-days"></i>{{(new DateTime($item->date_time))->format('M d, Y')}}</span>
                              </div>
                              <h3 class="postbox__title">
                                 <a href="blog-details.html">{{$item['title']}}</a>
                              </h3>
                              <div class="postbox__text">
                                 <p> {!! nl2br(e($item['description'])) !!}</p>
                              </div>

                           </div>
                        </article>
                     </div>
                  </div>
                   @endforeach
               </div>
            </div>
         </section>
         <!-- postbox area end -->

</main>

<!-- footer area start -->
@include('.Layouts.footer')
<!-- footer area end -->

<!-- JS here -->
@include('.Layouts.js-scripts')
</body>
</html>
