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
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <div class="postbox__wrapper">
                        <article class="postbox__item format-image mb-50 transition-3">
                           <div class="postbox__thumb w-img">
                              <a href="blog-details.html">
                                 <img src="{{asset('img/blog/blog-img-1.jpg')}}" alt="">
                              </a>
                             
                           </div>
                           <div class="postbox__content">
                              <div class="postbox__meta">
                                 <span><i class="fa-light fa-calendar-days"></i> 02 Apr 2021</span>
                              </div>
                              <h3 class="postbox__title">
                                 <a href="blog-details.html">The whimsically named Egg Canvas brainch</a>
                              </h3>
                              <div class="postbox__text">
                                 <p>There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                    teration in some form, by injected humour, or randomised words which don't look even slight
                                    believable. If you are going to use a passage of Lorem Ipsum.</p>
                              </div>
                              
                           </div>
                        </article>
                        <article class="postbox__item format-image mb-50 transition-3">
                           <div class="postbox__thumb w-img">
                              <a href="blog-details.html">
                                 <img src="assets/img/blog/blog-img-2.jpg" alt="">
                              </a>
                              <div class="postbox__tag">
                                 <p>Business</p>
                              </div>
                           </div>
                           <div class="postbox__content">
                              <div class="postbox__meta">
                                 <span><i class="fa-light fa-calendar-days"></i> 02 Apr 2021</span>
                                 <span><a href="#"><i class="fal fa-comments"></i> Comments (03)</a></span>
                                 <span><a href="#"><i class="fa-regular fa-clock"></i> 3 min Read</a></span>
                              </div>
                              <h3 class="postbox__title">
                                 <a href="blog-details.html">How to Clean Your Home Faster More Efficiently</a>
                              </h3>
                              <div class="postbox__text">
                                 <p>There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                    teration in some form, by injected humour, or randomised words which don't look even slight
                                    believable. If you are going to use a passage of Lorem Ipsum.</p>
                              </div>
                              <div class="postbox__read-more">
                                 <a href="blog-details.html" class="tp-btn">read more</a>
                              </div>
                           </div>
                        </article>
                        <article class="postbox__item format-image mb-50 transition-3">
                           <div class="postbox__thumb w-img">
                              <a href="blog-details.html">
                                 <img src="assets/img/blog/blog-img-3.jpg" alt="">
                              </a>
                              <div class="postbox__tag">
                                 <p>Business</p>
                              </div>
                           </div>
                           <div class="postbox__content">
                              <div class="postbox__meta">
                                 <span><i class="fa-light fa-calendar-days"></i> 02 Apr 2021</span>
                                 <span><a href="#"><i class="fal fa-comments"></i> Comments (03)</a></span>
                                 <span><a href="#"><i class="fa-regular fa-clock"></i> 3 min Read</a></span>
                              </div>
                              <h3 class="postbox__title">
                                 <a href="blog-details.html">Four Ways a Workplace Makes Employees Happy</a>
                              </h3>
                              <div class="postbox__text">
                                 <p>There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                    teration in some form, by injected humour, or randomised words which don't look even slight
                                    believable. If you are going to use a passage of Lorem Ipsum.</p>
                              </div>
                              <div class="postbox__read-more">
                                 <a href="blog-details.html" class="tp-btn">read more</a>
                              </div>
                           </div>
                        </article>
                        <div class="basic-pagination text-center">
                           <nav>
                              <ul>
                                 <li>
                                    <a href="blog.html">
                                       <i class="fa-regular fa-angles-left"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="blog.html">1</a>
                                 </li>
                                 <li>
                                    <span class="current">2</span>
                                 </li>
                                 <li>
                                    <a href="blog.html">3</a>
                                 </li>
                                 <li>
                                    <a href="blog.html">
                                       <i class="fa-regular fa-angles-right"></i>
                                    </a>
                                 </li>
                              </ul>
                            </nav>
                        </div>
                     </div>
                  </div>
                  
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
