<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Publication - Pakistan Microfinance Network</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/splide.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/nouislider.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome-pro.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/spacing.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
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

    <!-- header area start -->
    <header class="tp-header-3-area tp-header-3-transparent tp-header-height p-relative">
        <div id="header-sticky" class="tp-header-3-bottom header__sticky p-relative">
            <div class="tp-header-3-bottom-inner p-relative">
                <div class="container-fluid gx-0">
                    <div class="row gx-0 align-items-center">
                        <div class="col-xl-2 col-6">
                            <div
                                class="tp-header-2-main-left d-flex align-items-center justify-content-xl-center p-relative">
                                <div class="tp-header-3-logo">
                                    <a href="index.html">
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
                                            <li><a href="news-and-events-admin.html">News and Events</a></li>
                                            <li><a href="publication-admin.html">Publications</a></li>
                                            <li><a href="career-admin.html">Career</a></li>
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
            <form class="mt-40" method="POST" action="{{ route('publications.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="">Date</label>
                        <input type="datetime-local" class="form-control" placeholder="Date" name="Datetime" required/>
                    </div>
                    <div class="col">
                        <label for="">Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="title" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-20">
                        <label for="">Author</label>
                        <input type="text" class="form-control" placeholder="Title" name="Author" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mt-20">
                        <label for="exampleFormControlFile1">Upload File</label><br/>
                        <input type="file" class="form-control" id="attachment" name="attachment"
                               accept=".jpg, .jpeg, .png, .gif, .svg" required/>
                    </div>
                </div>
                <input type="submit"/>
            </form>
        </div>
        <div style="width: 50%; margin: 0 auto;">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date</th>
                    <th scope="col">image</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($publications as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item['author'] }}</td>
                        <td>{{ $item['date_time'] }}</td>
                        <td><img src="{{ \Illuminate\Support\Facades\Storage::url('/').$item['file_path'] }}"
                                 width="100" height="100"/></td>
                        <td>
                            <a href="#" onclick="openEditModal({{ $item }})">
                                <i class="fas fa-edit"></i>
                            </a>
                            <!-- Delete button with a form -->
                            <form action="{{ route('publications.delete', $item['id']) }}" method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this publication?')">
                                    <i class="fas fa-trash-alt"></i> <!-- Font Awesome delete icon -->
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- Pagination links -->
            <div class="d-flex justify-content-center">
                {{ $publications->links('pagination::bootstrap-5') }}
            </div>
        </div>
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" tabindex="-1"
                 role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Publication</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="editPublicationForm" action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body" style="width:500px;">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="editDate">Date</label>
                                    <input type="datetime-local" class="form-control" id="editDate" name="Datetime"
                                           required/>
                                </div>
                                <div class="form-group">
                                    <label for="editTitle">Title</label>
                                    <input type="text" class="form-control" id="editTitle" name="title" required/>
                                </div>
                                <div class="form-group">
                                    <label for="editAuthor">Author</label>
                                    <input type="text" class="form-control" id="editAuthor" name="Author" required/>
                                </div>
                                <div class="form-group">
                                    <div class="d-none">
                                        <label for="editAttachment">Upload File</label>
                                        <input type="file" class="form-control" id="editAttachment" name="attachment"
                                               accept=".jpg, .jpeg, .png, .gif, .svg"/>
                                    </div>
                                    <div class="mt-2">
                                        <!-- Display existing attachment -->
                                        <img id="existingAttachment" src="" width="100" height="100"/>
                                        <button type="button" class="btn btn-danger btn-sm mt-2" id="removeAttachment"
                                                onclick="removeAttachmentSection()">
                                            Remove Attachment
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="publicationId" name="id">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Publication area end -->
    </main>

    <!-- footer area start -->
    <footer class="tp-footer-3-area p-relative">
        <div class="tp-footer-bg" data-background="{{asset("img/footer/footer-bg.jpg")}}"></div>
        <div class="container">
            <div class="tp-footer-3-main-area">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-footer-widget tp-footer-3-col-1">
                            <div class="tp-footer-logo">
                                <a href="{{asset('index.html')}}"><img src="{{asset('img/logo/footer-logo.png')}}"
                                                                       alt=""/></a>
                            </div>
                            <div class="tp-footer-widget-content">
                                <div class="tp-footer-info">
                                    <p class="p">
                                        The Pakistan’s largest Microfinance Service <br/>
                                        for Banks.
                                    </p>
                                    <div class="tp-footer-main-location">
                                        <a
                                            href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1"
                                        >
                                            <i class="fa-sharp fa-light fa-location-dot"></i> 1st floor, 85-East, Kamran
                                            Centre, <br/>
                                            Jinnah Avenue, Blue Area,<br/>
                                            Islamabad, Pakistan
                                        </a>
                                    </div>
                                    <div class="tp-footer-main-mail">
                                        <a href="#"
                                        ><i class="fa-light fa-message-dots"></i> Needhelp Call US <br/>
                                            +92 51 215 01 73 – 78</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-footer-widget tp-footer-3-col-2">
                            <h3 class="tp-footer-widget-title">Quick Links</h3>
                            <div class="tp-footer-widget-content">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Members</a></li>
                                    <li><a href="#">Resources</a></li>
                                    <li><a href="#">Publications</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-footer-widget tp-footer-3-col-3">
                            <h3 class="tp-footer-widget-title">Newsletter</h3>
                            <div class="tp-footer-from">
                                <div class="tp-footer-text-email p-relative">
                                    <input type="text" placeholder="Enter Email Address"/>
                                    <span>
                      <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.49316 13.7164C3.63379 13.8458 3.84046 13.8759 4.01071 13.7908L11.4654 10.1149L5.90522 14.0488C5.77478 14.1412 5.70122 14.2939 5.71058 14.4538L5.90157 17.7137C5.93936 18.3587 6.06262 18.9045 6.25825 19.2917C6.59438 19.9576 7.06242 20.0322 7.31139 20.0176C7.61259 20 7.90192 19.8421 8.17074 19.5482L9.20637 18.4157L10.8851 19.4378C11.3043 19.6933 11.7985 19.8118 12.3141 19.7816C13.3786 19.7192 14.4435 19.0328 15.0945 17.9905L24.1844 3.42754C24.8108 2.42378 24.7071 1.81746 24.5101 1.48593C24.38 1.26641 24.0445 0.904988 23.2627 0.950786C23.0031 0.965999 22.7113 1.02528 22.3941 1.12637L1.78045 7.70011C0.860734 7.99324 0.267482 8.54997 0.108773 9.26713C-0.0494808 9.98477 0.254344 10.7393 0.964829 11.3921L3.49316 13.7164ZM1.01287 9.46688C1.09713 9.08504 1.46951 8.7707 2.06157 8.58208L22.6756 2.00782C23.23 1.83163 23.6608 1.86665 23.7149 1.95852C23.7648 2.04228 23.7632 2.35484 23.3995 2.93758L14.3102 17.5006C13.8156 18.2927 13.0301 18.8124 12.2603 18.8575C11.9286 18.877 11.6283 18.8065 11.3672 18.6474L9.36306 17.4269C9.27991 17.3767 9.18683 17.3548 9.09535 17.3601C8.97847 17.367 8.86461 17.4181 8.781 17.5097L7.48832 18.9234C7.33843 19.087 7.25818 19.0935 7.2577 19.094C7.1674 19.0715 6.88551 18.6754 6.82599 17.6595L6.65003 14.656L16.785 7.48526C16.9817 7.34623 17.0388 7.07823 16.9149 6.87079C16.7915 6.66195 16.5265 6.58619 16.3129 6.69237L3.88618 12.8204L1.59108 10.7106C1.13392 10.2906 0.928189 9.84874 1.01287 9.46688Z"
                            fill="#05DAC3"
                        ></path>
                      </svg>
                    </span>
                                </div>
                                <div class="tp-footer-form-check">
                                    <input class="form-check-input" id="flexCheckChecked" type="checkbox"/>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        I agree to all your terms and policies
                                    </label>
                                </div>
                                <div class="tp-footer-widget-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-footer-copyright-area p-relative">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="tp-footer-copyright-inner">
                            <p>©Copyright <span>©2024</span> PMN. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="tp-footer-copyright-inner text-lg-end">
                            <a href="#">Terms and conditions</a>
                            <a class="ml-50" href="#"> Privacy policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- modal area start -->


    <!-- modal area end -->

    <!-- JS here -->
    <script src="{{asset('js/vendor/jquery.js')}}"></script>
    <script src="{{asset('js/vendor/waypoints.js')}}"></script>
    <script src="{{asset('js/bootstrap-bundle.js')}}"></script>
    <script src="{{asset('js/meanmenu.js')}}"></script>
    <script src="{{asset('js/swiper-bundle.js')}}"></script>
    <script src="{{asset('js/splide.js')}}"></script>
    <script src="{{asset('js/purecounter.js')}}"></script>
    <script src="{{asset('js/nouislider.js')}}"></script>
    <script src="{{asset('js/magnific-popup.js')}}"></script>
    <script src="{{asset('js/nice-select.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/gsap.min.js')}}"></script>
    <script src="{{asset('js/split-text.min.js')}}"></script>
    <script src="{{asset('js/scrool-triger.js')}}"></script>
    <script src="{{asset('js/scrollMagic.min.js')}}"></script>
    <script src="{{asset('js/parallax-scroll.js')}}"></script>
    <script src="{{asset('js/animation.gsap.min.js')}}"></script>
    <script src="{{asset('js/isotope-pkgd.js')}}"></script>
    <script src="{{asset('js/imagesloaded-pkgd.js')}}"></script>
    <script src="{{asset('js/jquery-appear.js')}}"></script>
    <script src="{{asset('js/jquery-knob.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script>
        function openEditModal(publicationData) {
            console.log(publicationData);
            const {id, date_time, title, author, file_path} = publicationData;
            // Populate modal fields with data from the table row
            $('#editDate').val(new Date(date_time).toISOString().slice(0, 16));
            $('#editTitle').val(title);
            $('#editAuthor').val(author);
            $('#existingAttachment').attr('src', "{{\Illuminate\Support\Facades\Storage::url('/') }}" + file_path);
            $('#removeAttachment').parent().show();
            $('#editAttachment').parent().addClass('d-none').prop('required', false);
            // Set the form action URL to include the publication ID
            $('#editPublicationForm').attr('action', `/admin/publications/${id}`);

            // Set the publication ID in a hidden input field
            $('#publicationId').val(id);
            $('#editModal').modal('show'); // Show the modal
        }

        function removeAttachmentSection() {
            $('#removeAttachment').parent().hide();
            $('#editAttachment').prop('required', true).parent().removeClass('d-none');
        }

    </script>

</body>
</html>
