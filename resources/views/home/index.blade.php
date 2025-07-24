<!doctype html>
<html lang="en">

<!-- Mirrored from transvelo.github.io/skola-html/5.1/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 08:50:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap"
        rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('froentend/assets/fonts/fontawesome/fontawesome.css') }}">
    <link rel="stylesheet"
        href="{{ asset('froentend/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('froentend/assets/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('froentend/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('froentend/assets/libs/flickity-fade/flickity-fade.css') }}">
    <link rel="stylesheet" href="{{ asset('froentend/assets/libs/flickity/dist/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('froentend/assets/libs/highlightjs/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('froentend/assets/libs/jarallax/dist/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('froentend/assets/libs/quill/dist/quill.core.css') }}" />

    <link rel="stylesheet" href="{{ asset('froentend/assets/css/theme.min.css') }}">

    <title>CAIIB</title>

</head>

<body>



    <!-- NAVBAR
    ================================================== -->
    <header class="navbar navbar-expand-xl navbar-light bg-white border-bottom border-xl-0 py-2 py-xl-4 fixed-top">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand me-0" href="#">
                <img src="{{ asset('froentend/assets/img/brand.png') }}" class="navbar-brand-img" alt="...">
            </a>


            <div class="collapse navbar-collapse z-index-lg" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler outline-0 text-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- Icon -->
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z"
                            fill="currentColor"></path>
                        <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z"
                            fill="currentColor"></path>
                    </svg>

                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#benefits">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                </ul>

            </div>

            <!-- Search, Account & Cart -->
            <ul class="navbar-nav flex-row ms-auto ms-xl-0 me-n2 me-md-n4">
                <li class="nav-item border-0 px-0 d-none d-370-block d-xl-none">
                    <a class="nav-link d-flex px-3 px-md-4 search-mobile text-secondary icon-xs"
                        data-bs-toggle="collapse" href="#collapseSearchMobile" role="button" aria-expanded="false"
                        aria-controls="collapseSearchMobile">
                        <!-- Icon -->
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
                                fill="currentColor" />
                            <path
                                d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z"
                                fill="currentColor" />
                        </svg>


                        <!-- Icon -->
                        <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z"
                                fill="currentColor"></path>
                            <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z"
                                fill="currentColor"></path>
                        </svg>

                    </a>

                    <div class="collapse position-absolute right-0 left-0" id="collapseSearchMobile">
                        <div class="card card-body p-4 mt-7 shadow-dark">
                            <!-- Search -->
                            <form class="w-100">
                                <div class="input-group border rounded">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-sm text-secondary icon-xs d-flex align-items-center"
                                            type="submit">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </button>
                                    </div>
                                    <input class="form-control form-control-sm border-0 ps-0" type="search"
                                        placeholder="What do you want to learn ?" aria-label="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </li>

            </ul>

            <!-- Toggler -->
            <button
                class="navbar-toggler ms-4 ms-md-5 shadow-none bg-teal text-white icon-xs p-0 outline-0 h-40p w-40p d-flex d-xl-none place-flex-center"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Icon -->
                <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                    <rect width="25" height="1" fill="currentColor" />
                    <rect y="8" width="15" height="1" fill="currentColor" />
                    <rect y="16" width="20" height="1" fill="currentColor" />
                </svg>

            </button>
        </div>
    </header>


    <!-- HERO
    ================================================== -->
    <section class="py-4 py-md-13 position-relative bg-white" id="home">
        <!-- Cursor position parallax -->
        <div class="position-absolute right-0 left-0 top-0 bottom-0">
            <div class="cs-parallax">
                <div class="cs-parallax-layer" data-depth="0.1">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-01.svg') }}"
                        alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.3">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-02.svg') }}"
                        alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-03.svg') }}"
                        alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-04.svg') }}"
                        alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.4">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-05.svg') }}"
                        alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.3">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-06.svg') }}"
                        alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-07.svg') }}"
                        alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-08.svg') }}"
                        alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.4">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-09.svg') }}"
                        alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.3">
                    <img class="img-fluid" src="{{ asset('froentend/assets/img/parallax/layer-10.svg') }}"
                        alt="Layer">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2" data-aos="fade-in" data-aos-delay="50">

                    <!-- Image -->
                    <img src="{{ asset('froentend/assets/img/illustrations/illustration-1.png') }}"
                        class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="...">

                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 px-md-0">
                    <!-- Heading -->
                    <h1 class="display-2" data-aos="fade-left" data-aos-duration="150">
                        Learn From <span class="text-orange fw-bold">Anywhere</span>
                    </h1>

                    <!-- Text -->
                    <p class="lead pe-md-8 text-capitalize" data-aos="fade-up" data-aos-duration="200">
                        Technology is bringing a massive wave of evolution on learning things in different ways.
                    </p>

                    <!-- Buttons -->
                    <a href="" class="btn btn-wide btn-slide slide-primary shadow mb-4 mb-md-0 me-md-5"
                        data-aos-duration="200" data-aos="fade-up">GET STARTED</a>
                    <a href="#courses" class="btn btn-primary btn-wide lift d-none d-lg-inline-block"
                        data-aos-duration="200" data-aos="fade-up">VIEW COURSES</a>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- FEATURED PRODUCT
    ================================================== -->
    <section class="pt-5 pb-9 py-md-11" id="courses">
        <div class="container">
            <div class="row align-items-center mb-5" data-aos="fade-up">
                <div class="col-md mb-2 mb-md-0">
                    <h1 class="mb-1">Featured Courses</h1>
                    <p class="font-size-lg text-capitalize">Your Ideal Program Awaits.</p>
                </div>
                <div class="col-md-auto">
                    <select class="form-select form-select-sm text-primary fw-medium shadow" data-choices>
                        <option>All Subjects</option>
                        <option>Another option</option>
                        <option>Something else here</option>
                    </select>
                </div>
            </div>

            <div class="mx-n4"
                data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" data-aos="fade-up" data-aos-delay="50"
                    style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-2 sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                <a href="course-single-v1"
                                    class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                    <!-- Icon -->
                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z"
                                            fill="currentColor" />
                                        <path
                                            d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z"
                                            fill="currentColor" />
                                    </svg>

                                </a>
                                <a href="course-single-v1"
                                    class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z"
                                            fill="currentColor" />
                                    </svg>

                                </a>
                            </div>

                            <a href="course-single-v1" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg"
                                    src="{{ asset('froentend/assets/img/products/product-1.jpg') }}" alt="...">
                            </a>

                            <span
                                class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                            </span>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">




                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="course-single-v1" class="d-block stretched-link">
                                    <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Junior
                                        Associate of Indian Institute of Bankers</h4>
                                </a>

                                <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div>

                                <div class="row mx-n2 align-items-end mh-50">
                                    <div class="col px-2">
                                        <ul class="nav mx-n3">
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                                                fill="currentColor" />
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">5 lessons</div>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                fill="currentColor" />
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">8h 12m</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <del class="font-size-sm">₹4999</del>
                                        <ins class="h4 mb-0 d-block mb-lg-n1">₹3999</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" data-aos="fade-up" data-aos-delay="100"
                    style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-2 sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="course-single-v1" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg"
                                    src="{{ asset('froentend/assets/img/products/product-2.jpg') }}" alt="...">
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">




                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="course-single-v1" class="d-block stretched-link">
                                    <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Certified
                                        Associate of Indian Institute of Bankers</h4>
                                </a>

                                <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div>

                                <div class="row mx-n2 align-items-end mh-50">
                                    <div class="col px-2">
                                        <ul class="nav mx-n3">
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                                                fill="currentColor" />
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">5 lessons</div>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                fill="currentColor" />
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">8h 12m</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <del class="font-size-sm">₹7999</del>
                                        <ins class="h4 mb-0 d-block mb-lg-n1">₹5999</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" data-aos="fade-up" data-aos-delay="150"
                    style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-2 sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="#" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg"
                                    src="{{ asset('froentend/assets/img/products/product-3.jpg') }}" alt="...">
                            </a>

                            <span
                                class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                            </span>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">




                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="course-single-v1" class="d-block stretched-link">
                                    <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">
                                        Bank Promotion Exam Preparation Courses</h4>
                                </a>

                                <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div>

                                <div class="row mx-n2 align-items-end mh-50">
                                    <div class="col px-2">
                                        <ul class="nav mx-n3">
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                                                fill="currentColor" />
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">5 lessons</div>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                fill="currentColor" />
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">8h 12m</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <del class="font-size-sm">₹9999</del>
                                        <ins class="h4 mb-0 d-block mb-lg-n1">₹7999</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" data-aos="fade-up" data-aos-delay="200"
                    style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-2 sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="course-single-v1" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg"
                                    src="{{ asset('froentend/assets/img/products/product-4.jpg') }}" alt="...">
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">




                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="course-single-v1" class="d-block stretched-link">
                                    <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">National
                                        Institute of Securities Markets</h4>
                                </a>

                                <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div>

                                <div class="row mx-n2 align-items-end mh-50">
                                    <div class="col px-2">
                                        <ul class="nav mx-n3">
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex">
                                                        <!-- Icon -->
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                                                fill="currentColor" />
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">5 lessons</div>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                fill="currentColor" />
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">8h 12m</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <del class="font-size-sm">₹6999</del>
                                        <ins class="h4 mb-0 d-block mb-lg-n1">₹ 4999.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us
    ================================================== -->
    <section class="py-5 pt-md-11 pb-md-10 bg-light text-center" id="benefits">
        <div class="container">
            <div class="mb-md-8 mb-4">
                <h1>Why Study With CAIIB</h1>
                <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #F8C994;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #f5debc; color: #EE8E00;">
                            <!-- Icon -->
                            <svg width="50" height="42" viewBox="0 0 50 42"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.7772 24.0457L34.8852 20.873C33.9687 20.3794 32.8878 20.4035 31.9939 20.9373C31.1 21.4711 30.5664 22.4115 30.5664 23.4525V30.7043C30.5664 31.7975 31.168 32.7919 32.1364 33.2993C32.5655 33.5241 33.0321 33.6353 33.4971 33.6353C34.0813 33.6353 34.6631 33.4595 35.1637 33.113L41.0558 29.0338C41.9005 28.4491 42.3706 27.4876 42.3133 26.4618C42.2561 25.436 41.6817 24.5328 40.7772 24.0457ZM33.4961 30.7037V23.4526L39.3879 26.6254L33.4961 30.7037Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M17.1875 19.5352H7.8125C7.00352 19.5352 6.34766 20.191 6.34766 21C6.34766 21.809 7.00352 22.4648 7.8125 22.4648H17.1875C17.9965 22.4648 18.6523 21.809 18.6523 21C18.6523 20.191 17.9965 19.5352 17.1875 19.5352Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M17.1875 25.7852H7.8125C7.00352 25.7852 6.34766 26.441 6.34766 27.25C6.34766 28.059 7.00352 28.7148 7.8125 28.7148H17.1875C17.9965 28.7148 18.6523 28.059 18.6523 27.25C18.6523 26.441 17.9965 25.7852 17.1875 25.7852Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M17.1875 32.0352H7.8125C7.00352 32.0352 6.34766 32.691 6.34766 33.5C6.34766 34.309 7.00352 34.9648 7.8125 34.9648H17.1875C17.9965 34.9648 18.6523 34.309 18.6523 33.5C18.6523 32.691 17.9965 32.0352 17.1875 32.0352Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M45.6055 0.00390625H4.39453C1.97139 0.00390625 0 1.97529 0 4.39844V37.6016C0 40.0247 1.97139 41.9961 4.39453 41.9961H45.6055C48.0286 41.9961 50 40.0247 50 37.6016V4.39844C50 1.97529 48.0286 0.00390625 45.6055 0.00390625ZM4.39453 2.93359H45.6055C46.4132 2.93359 47.0703 3.59072 47.0703 4.39844V12.5039H2.92969V4.39844C2.92969 3.59072 3.58682 2.93359 4.39453 2.93359ZM45.6055 39.0664H4.39453C3.58682 39.0664 2.92969 38.4093 2.92969 37.6016V15.4336H47.0703V37.6016C47.0703 38.4093 46.4132 39.0664 45.6055 39.0664Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M7.8125 9.18359C8.62151 9.18359 9.27734 8.52776 9.27734 7.71875C9.27734 6.90974 8.62151 6.25391 7.8125 6.25391C7.00349 6.25391 6.34766 6.90974 6.34766 7.71875C6.34766 8.52776 7.00349 9.18359 7.8125 9.18359Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M14.0625 9.18372C14.8715 9.18372 15.5273 8.52788 15.5273 7.71887C15.5273 6.90986 14.8715 6.25403 14.0625 6.25403C13.2535 6.25403 12.5977 6.90986 12.5977 7.71887C12.5977 8.52788 13.2535 9.18372 14.0625 9.18372Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M20.3125 9.18359C21.1215 9.18359 21.7773 8.52776 21.7773 7.71875C21.7773 6.90974 21.1215 6.25391 20.3125 6.25391C19.5035 6.25391 18.8477 6.90974 18.8477 7.71875C18.8477 8.52776 19.5035 9.18359 20.3125 9.18359Z"
                                    fill="currentColor"></path>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Learn Anything</h4>
                    <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #B7B3F8;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #d3d8f8; color: #5066F5;">
                            <!-- Icon -->
                            <svg width="50" height="50" viewBox="0 0 50 50"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.6777 7.32231C37.9558 2.60048 31.6777 0 25 0C18.3223 0 12.0442 2.60048 7.32231 7.32231C2.60038 12.0441 0 18.3223 0 25C0 31.6777 2.60048 37.9558 7.32231 42.6777C12.0441 47.3996 18.3223 50 25 50C31.6777 50 37.9558 47.3995 42.6777 42.6777C47.3996 37.9559 50 31.6777 50 25C50 18.3223 47.3995 12.0442 42.6777 7.32231ZM41.6253 39.5856L40.2162 38.1764C39.4842 37.4445 39.3028 36.3304 39.7647 35.404L41.0257 32.875C42.2388 30.4418 42.88 27.7188 42.88 25C42.88 22.2812 42.2388 19.5581 41.0257 17.125L39.7647 14.596C39.3028 13.6696 39.4842 12.5555 40.2162 11.8236L41.6253 10.4144C45.1758 14.4502 47.1154 19.5763 47.1154 25C47.1154 30.4237 45.1758 35.5498 41.6253 39.5856ZM12.8168 34.1168L11.5559 31.5878C9.49914 27.4627 9.49914 22.5372 11.5559 18.4121L12.8168 15.8831C13.2154 15.0838 13.3953 14.2209 13.3707 13.3701C13.4213 13.3715 13.4719 13.3738 13.5227 13.3738C14.3238 13.3738 15.1315 13.1914 15.8832 12.8167L18.4122 11.5558C22.5373 9.49894 27.4628 9.49904 31.5879 11.5558L34.1169 12.8167C34.9161 13.2152 35.7788 13.395 36.6293 13.3705C36.6048 14.2212 36.7847 15.0838 37.1832 15.883L38.4441 18.412C40.5009 22.5371 40.5009 27.4626 38.4441 31.5877L37.1832 34.1167C36.7847 34.916 36.6048 35.7786 36.6293 36.6291C35.7788 36.6046 34.9161 36.7845 34.1169 37.183L31.5879 38.4439C27.4627 40.5007 22.5372 40.5006 18.4122 38.4439L15.8832 37.183C15.0839 36.7845 14.2213 36.6046 13.3708 36.6291C13.3952 35.7788 13.2153 34.9161 12.8168 34.1168ZM25 2.88462C30.4237 2.88462 35.5498 4.82423 39.5856 8.37471L38.1764 9.78385C37.4446 10.5157 36.3305 10.6973 35.404 10.2353L32.875 8.97433C30.4418 7.76125 27.7188 7.12 25 7.12C22.2812 7.12 19.5581 7.76125 17.125 8.97433L14.596 10.2353C13.6695 10.6972 12.5556 10.5158 11.8236 9.78385L10.4144 8.37471C14.4502 4.82423 19.5763 2.88462 25 2.88462ZM8.37471 10.4144L9.78385 11.8236C10.5158 12.5555 10.6972 13.6696 10.2353 14.596L8.97433 17.125C7.76125 19.5582 7.12 22.2812 7.12 25C7.12 27.7188 7.76125 30.4419 8.97433 32.875L10.2353 35.404C10.6972 36.3304 10.5158 37.4445 9.78385 38.1764L8.37471 39.5856C4.82423 35.5498 2.88462 30.4237 2.88462 25C2.88462 19.5763 4.82423 14.4502 8.37471 10.4144ZM25 47.1154C19.5763 47.1154 14.4502 45.1758 10.4144 41.6253L11.8236 40.2162C12.5555 39.4844 13.6696 39.3028 14.596 39.7647L17.125 41.0257C19.5582 42.2388 22.2812 42.88 25 42.88C27.7188 42.88 30.4419 42.2388 32.875 41.0257L35.404 39.7647C36.3305 39.3029 37.4445 39.4842 38.1764 40.2162L39.5856 41.6253C35.5498 45.1758 30.4237 47.1154 25 47.1154Z"
                                    fill="currentColor"></path>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Flexible Learning</h4>
                    <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #B2F4DC;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #b2f4dc; color: #00C27C;">
                            <!-- Icon -->
                            <svg width="50" height="50" viewBox="0 0 50 50"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M36.7188 39.7461C36.7188 40.5552 36.063 41.2109 35.2539 41.2109C34.4448 41.2109 33.7891 40.5552 33.7891 39.7461C33.7891 38.937 34.4448 38.2812 35.2539 38.2812C36.063 38.2812 36.7188 38.937 36.7188 39.7461Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M29.3945 17.7734H31.1108C33.3912 17.7734 35.5354 18.6615 37.1479 20.274C37.429 20.5555 37.8056 20.7031 38.184 20.7031C38.5735 20.7031 38.9503 20.5433 39.2193 20.274C40.1783 19.315 41.3261 18.6146 42.5781 18.2026V22.168C42.5781 22.9771 43.2339 23.6328 44.043 23.6328C44.8521 23.6328 45.5078 22.9771 45.5078 22.168V17.7734H46.9727C47.7818 17.7734 48.4375 17.1177 48.4375 16.3086V1.46484C48.4375 0.655746 47.7818 0 46.9727 0H45.2564C42.659 0 40.1939 0.857925 38.1836 2.4395C36.1732 0.857925 33.7082 0 31.1108 0H29.3945C28.5854 0 27.9297 0.655746 27.9297 1.46484V16.3086C27.9297 17.1177 28.5854 17.7734 29.3945 17.7734ZM45.5078 2.92969V14.8438H45.2564C43.2205 14.8438 41.3033 15.3725 39.6484 16.3033V5.03235C41.2033 3.67355 43.1721 2.92969 45.2564 2.92969H45.5078ZM30.8594 2.92969H31.1108C33.1944 2.92969 35.1643 3.67126 36.7188 5.0293V16.3029C35.025 15.3503 33.107 14.8438 31.1108 14.8438H30.8594V2.92969Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M3.02734 50H46.9727C47.7818 50 48.4375 49.3443 48.4375 48.5352V33.8867C48.4375 33.0776 47.7818 32.4219 46.9727 32.4219H33.6418C32.9613 29.0829 30.0018 26.5625 26.4648 26.5625H22.0703V25.0675C23.896 23.6919 25 21.5286 25 19.2383V16.6222C25 12.8906 22.3755 9.64966 18.895 9.08356C14.397 8.3519 10.3516 11.7859 10.3516 16.3086V19.2383C10.3516 21.5286 11.4555 23.6919 13.2812 25.0675V26.5625H8.88672C4.8481 26.5625 1.5625 29.8481 1.5625 33.8867V48.5352C1.5625 49.3443 2.21825 50 3.02734 50ZM45.5078 47.0703H25V35.3516H45.5078V47.0703ZM13.2812 16.3086C13.2812 13.6845 15.6109 11.5177 18.4246 11.9755C20.5029 12.3135 22.0703 14.3112 22.0703 16.6222V19.2383C22.0703 20.8031 21.2471 22.2164 19.8685 23.019C19.418 23.2811 19.1406 23.7633 19.1406 24.2851V27.4204L17.6758 28.8853L16.2109 27.4204V24.2851C16.2109 23.7637 15.9336 23.2811 15.4831 23.019C14.1045 22.2164 13.2812 20.8031 13.2812 19.2383V16.3086ZM4.49219 33.8867C4.49219 31.4636 6.46362 29.4922 8.88672 29.4922H14.1392L16.6401 31.9927C16.9258 32.2788 17.3008 32.4219 17.6758 32.4219C18.0508 32.4219 18.4258 32.2788 18.7115 31.9927L21.2124 29.4922H26.4648C28.3745 29.4922 30.0026 30.7167 30.6076 32.4219H23.5352C22.7261 32.4219 22.0703 33.0776 22.0703 33.8867V42.6796C20.8454 41.758 19.3233 41.2109 17.6758 41.2109H10.3516V33.8867C10.3516 33.0776 9.69582 32.4219 8.88672 32.4219C8.07762 32.4219 7.42188 33.0776 7.42188 33.8867V42.6758C7.42188 43.4849 8.07762 44.1406 8.88672 44.1406H17.6758C19.5858 44.1406 21.2147 45.3652 21.8193 47.0703H4.49219V33.8867Z"
                                    fill="currentColor"></path>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Learn With Experts</h4>
                    <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL
    ================================================== -->
    <section class="pt-5 pt-md-11 pb-9" id="testimonials">
        <div class="container">
            <div class="text-center mb-2" data-aos="fade-up">
                <h1 class="mb-1">What our students have to say</h1>
                <p class="font-size-lg text-capitalize mb-0">Discover your perfect program in our courses.</p>
            </div>

            <div class="mx-n4"
                data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="50"
                    style="padding-right:15px;padding-left:15px;">

                    <div class="card border shadow p-6 lift-md">

                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{ asset('froentend/assets/img/avatars/avatar-1.jpg') }}"
                                        alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>


                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place
                                to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="100"
                    style="padding-right:15px;padding-left:15px;">

                    <div class="card border shadow p-6 lift-md">

                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{ asset('froentend/assets/img/avatars/avatar-2.jpg') }}"
                                        alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Alison Dawn</h5>
                                    <span>WordPress Developer</span>
                                </div>
                            </div>
                        </div>


                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place
                                to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="150"
                    style="padding-right:15px;padding-left:15px;">

                    <div class="card border shadow p-6 lift-md">

                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{ asset('froentend/assets/img/avatars/avatar-3.jpg') }}"
                                        alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Daniel Parker</h5>
                                    <span>Front-end Developer</span>
                                </div>
                            </div>
                        </div>


                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place
                                to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="200"
                    style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{ asset('froentend/assets/img/avatars/avatar-4.jpg') }}"
                                        alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place
                                to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="pt-5 pt-md-11 pb-9" id="contact">
        <div class="container">
            <div class="row row-cols-md-2 mb-8 mb-lg-11">
                <div class="col-md">
                    <h1 class="mb-6">Contact Details</h1>

                    <div class="row row-cols-12 row-cols-xl-2">
                        <div class="col-xl mb-6">
                            <div class="media d-flex">
                                <div class="me-5">
                                    <!-- Icon -->
                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.1563 6.10857C9.51012 6.10857 8.98438 5.57813 8.98438 4.9262C8.98438 4.27428 9.51012 3.74384 10.1563 3.74384C10.8024 3.74384 11.3282 4.27428 11.3282 4.9262C11.3282 5.57813 10.8025 6.10857 10.1563 6.10857Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M24.9751 21.6358L23.0707 8.82697C22.9047 7.70855 21.9705 6.89675 20.8494 6.89675H13.5955C14.2338 5.67842 14.2226 4.24519 13.5551 3.02396C12.8802 1.78912 11.6562 1.02758 10.2809 0.986735C10.1985 0.984321 10.114 0.984321 10.0311 0.986735C8.65603 1.02753 7.43212 1.78912 6.7572 3.02396C6.08995 4.2447 6.07852 5.67729 6.71687 6.89675H4.15064C3.02947 6.89675 2.09526 7.70855 1.92924 8.82677L0.0248985 21.6358C-0.0721255 22.2889 0.117186 22.9504 0.544297 23.4508C0.971456 23.9511 1.59178 24.2381 2.24629 24.2381H22.7537C23.4082 24.2381 24.0285 23.9511 24.4556 23.4508C24.8828 22.9505 25.0721 22.289 24.9751 21.6358ZM8.12554 3.7853C8.53683 3.03287 9.24813 2.58722 10.0769 2.56263C10.103 2.56185 10.1296 2.5615 10.1562 2.5615C10.1828 2.5615 10.2094 2.5619 10.2353 2.56263C11.0643 2.58722 11.7756 3.03287 12.1869 3.7853C12.6165 4.57128 12.6046 5.49924 12.1551 6.26788L10.1562 9.66325L8.15792 6.26887C7.70786 5.50003 7.69575 4.57158 8.12554 3.7853ZM23.2717 22.4221C23.1954 22.5116 23.0265 22.6617 22.7537 22.6617H8.59924C8.63571 22.2922 8.8052 21.737 9.44608 21.3821C9.82437 21.1727 9.96275 20.6936 9.75518 20.3119C9.5476 19.9302 9.07259 19.7906 8.69436 20.0001C7.86694 20.4581 7.32147 21.1774 7.11692 22.0798C7.06912 22.2906 7.04602 22.4883 7.0367 22.6617H2.24629C1.97353 22.6617 1.80463 22.5116 1.72826 22.4221C1.65189 22.3326 1.52977 22.1418 1.5702 21.8697L3.47455 9.06059C3.52508 8.72031 3.80942 8.47334 4.15069 8.47334H7.63832L9.15428 11.0485C9.36659 11.4102 9.74111 11.6262 10.1562 11.6262C10.5713 11.6262 10.9458 11.4102 11.1575 11.0495L12.6741 8.47334H20.8494C21.1906 8.47334 21.475 8.72031 21.5255 9.06073L23.4299 21.8697C23.4702 22.1418 23.3481 22.3326 23.2717 22.4221Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M13.5285 10.8785C13.1191 10.7407 12.6767 10.9641 12.5403 11.3771C12.4038 11.79 12.6251 12.2364 13.0344 12.3741C13.0424 12.3768 13.843 12.6656 14.1029 13.4521C14.2119 13.7824 14.5168 13.9913 14.8439 13.9913C14.9258 13.9913 15.0092 13.9782 15.0911 13.9506C15.5005 13.8129 15.7217 13.3665 15.5852 12.9535C15.0769 11.415 13.5915 10.8997 13.5285 10.8785Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M14.1905 15.8431C13.7836 15.6982 13.3373 15.9136 13.1938 16.3241C12.7528 17.5846 11.2415 18.126 11.2097 18.1371C10.8021 18.2758 10.5821 18.7212 10.7183 19.1333C10.8274 19.4636 11.1323 19.6725 11.4594 19.6725C11.5413 19.6725 11.6246 19.6594 11.7066 19.6318C11.7985 19.6009 13.9667 18.8514 14.6673 16.8488C14.8109 16.4383 14.5974 15.988 14.1905 15.8431Z"
                                            fill="currentColor"></path>
                                    </svg>

                                </div>
                                <div class="media-body flex-shrink-1">
                                    <h5 class="mb-4">Find Us</h5>
                                    <address class="">
                                        2301 Ravenswood Rd Madison,
                                        WI 53711
                                    </address>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl mb-6">
                            <div class="media d-flex">
                                <div class="me-5">
                                    <!-- Icon -->
                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.9679 25C17.1609 25 16.3607 24.8573 15.5783 24.5731C12.1313 23.3209 8.93169 21.2814 6.32535 18.6751C3.71901 16.0688 1.67955 12.8692 0.427403 9.42217C0.0250265 8.31441 -0.0937186 7.1709 0.074585 6.02329C0.232245 4.94833 0.648634 3.90477 1.27878 3.00539C1.91172 2.10206 2.75553 1.35073 3.71897 0.832632C4.74637 0.280164 5.86775 0 7.05208 0C7.42043 0 7.73877 0.257363 7.81597 0.617504L9.04218 6.33988C9.0977 6.599 9.01806 6.86862 8.83072 7.05601L6.73544 9.15124C8.71202 13.0811 11.9193 16.2883 15.8491 18.2649L17.9444 16.1696C18.1318 15.9823 18.4014 15.9028 18.6605 15.9582L24.3829 17.1844C24.7431 17.2616 25.0004 17.5799 25.0004 17.9483C25.0004 19.1326 24.7202 20.2541 24.1677 21.2815C23.6496 22.2449 22.8983 23.0887 21.9949 23.7216C21.0956 24.3518 20.052 24.7682 18.977 24.9258C18.6402 24.9753 18.3034 25 17.9679 25ZM6.42789 1.59661C4.8657 1.76907 3.47913 2.58788 2.55837 3.90204C1.52296 5.37976 1.28152 7.19731 1.89595 8.88875C4.30327 15.5157 9.48475 20.6972 16.1117 23.1045C17.8031 23.719 19.6207 23.4776 21.0984 22.4421C22.4126 21.5213 23.2314 20.1348 23.4039 18.5726L18.7487 17.5751L16.5605 19.7633C16.3277 19.9961 15.9739 20.058 15.6759 19.9179C11.0282 17.7344 7.26604 13.9723 5.08253 9.32452C4.94255 9.02653 5.00436 8.67274 5.23721 8.43994L7.42541 6.25175L6.42789 1.59661Z"
                                            fill="currentColor"></path>
                                    </svg>

                                </div>
                                <div class="media-body flex-shrink-1">
                                    <h5 class="mb-4">Phone</h5>
                                    <a href="tel:3159052321" class="text-gray-800 d-block">+(315) 905-2321</a>
                                    <a href="tel:3159052322" class="text-gray-800 d-block">+(315) 905-2322</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl mb-6">
                            <div class="media d-flex">
                                <div class="me-5">
                                    <!-- Icon -->
                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99974 3.0083C5.79444 3.0083 2.37305 6.42973 2.37305 10.635C2.37305 14.8405 5.79448 18.2619 9.99974 18.2619C14.2053 18.2619 17.6264 14.8405 17.6264 10.635C17.6264 6.42973 14.205 3.0083 9.99974 3.0083ZM9.99974 16.8797C6.55666 16.8797 3.7555 14.0783 3.7555 10.6353C3.7555 7.19219 6.55662 4.39103 9.99974 4.39103C13.4428 4.39103 16.244 7.19219 16.244 10.6353C16.244 14.0785 13.4428 16.8797 9.99974 16.8797Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M12.1193 10.4048H10.2761V7.73202C10.2761 7.35022 9.9666 7.04077 9.5848 7.04077C9.20301 7.04077 8.89355 7.35022 8.89355 7.73202V11.0961C8.89355 11.4779 9.20301 11.7873 9.5848 11.7873H12.1194C12.5012 11.7873 12.8106 11.4779 12.8106 11.0961C12.8106 10.7143 12.5011 10.4048 12.1193 10.4048Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M6.08489 15.5823C5.80102 15.3267 5.36391 15.35 5.10864 15.6336L3.0349 17.9378C2.77935 18.2214 2.80263 18.6585 3.08627 18.9138C3.2183 19.033 3.38372 19.0915 3.54849 19.0915C3.73767 19.0915 3.92614 19.0143 4.06255 18.8625L6.13629 16.5583C6.3918 16.2746 6.36852 15.8375 6.08489 15.5823Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M16.9661 17.9381L14.8924 15.634C14.6375 15.3501 14.2002 15.327 13.9163 15.5826C13.6325 15.8379 13.6097 16.275 13.865 16.5586L15.9387 18.8628C16.0749 19.0144 16.2633 19.0916 16.4525 19.0916C16.6171 19.0916 16.7825 19.033 16.9147 18.9141C17.1986 18.6588 17.2214 18.2217 16.9661 17.9381Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M5.96733 1.91597C4.59382 0.571053 2.3798 0.573123 1.03211 1.92105C0.361569 2.59132 -0.00479631 3.47819 4.74212e-05 4.41826C0.00512553 5.34705 0.373327 6.21665 1.03715 6.86689C1.17172 6.99845 1.34614 7.06411 1.52078 7.06411C1.69774 7.06411 1.87469 6.99638 2.00949 6.86181L5.9726 2.8987C6.10303 2.76808 6.17584 2.59085 6.17491 2.40632C6.17401 2.22171 6.09932 2.04523 5.96733 1.91597ZM1.5966 5.31939C1.45813 5.04037 1.38414 4.73162 1.38254 4.41088C1.37953 3.84315 1.60211 3.30581 2.00949 2.89843C2.41594 2.49222 2.95328 2.28921 3.49359 2.28921C3.80949 2.28921 4.12655 2.35855 4.4187 2.49726L1.5966 5.31939Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M18.9673 1.92072C17.6194 0.573026 15.4053 0.570721 14.0318 1.91564C13.9 2.04489 13.8252 2.22142 13.8242 2.40595C13.8233 2.59052 13.8963 2.76794 14.0268 2.89833L17.9899 6.86144C18.1247 6.99648 18.3016 7.06398 18.4786 7.06398C18.6532 7.06398 18.8279 6.99831 18.9622 6.86628C19.6263 6.21628 19.9945 5.34672 19.9993 4.41789C20.0042 3.47809 19.6376 2.59122 18.9673 1.92072ZM18.4028 5.3193L15.5807 2.4972C16.3729 2.12114 17.3459 2.25458 17.9899 2.89856C18.3973 3.30594 18.6199 3.84301 18.6169 4.41102C18.6152 4.73152 18.5413 5.04051 18.4028 5.3193Z"
                                            fill="currentColor"></path>
                                    </svg>

                                </div>
                                <div class="media-body flex-shrink-1">
                                    <h5 class="mb-4">Working Hours</h5>
                                    <p class="mb-0">Mon-Fri: 8 AM - 5 PM</p>
                                    <p class="mb-0">Sat-Sun: 8 AM - 2 PM</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl mb-6">
                            <div class="media d-flex">
                                <div class="me-5">
                                    <!-- Icon -->
                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.3651 20H2.50025L9.0205 18.581C9.1475 18.5599 9.26518 18.5011 9.3583 18.4121L20.4055 7.36492C21.2125 6.55966 21.6627 5.46438 21.6555 4.32443C21.657 3.17561 21.2082 2.07199 20.4055 1.25011C19.6003 0.44311 18.505 -0.00714406 17.365 0.000162955C16.2177 -0.00998926 15.1173 0.45462 14.3245 1.28393L3.311 12.3311C3.21388 12.4093 3.14307 12.5154 3.10828 12.6351L1.68943 19.1554C1.6507 19.3895 1.72596 19.628 1.89215 19.7973C2.01689 19.9246 2.18689 19.9974 2.3651 20ZM17.365 1.35151C18.9882 1.35138 20.3042 2.66722 20.3043 4.29048C20.3043 4.30179 20.3043 4.31311 20.3041 4.32443C20.3152 5.09774 20.0101 5.84209 19.4596 6.3852L15.3042 2.19602C15.8516 1.652 16.5931 1.34808 17.365 1.35151ZM14.3582 3.1758L18.5136 7.33116L8.88528 16.9257L4.72992 12.804L14.3582 3.1758ZM4.1894 14.1555L7.53394 17.5L3.24343 18.446L4.1894 14.1555Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M23.8175 23.6486H1.18251C0.809333 23.6486 0.506836 23.9511 0.506836 24.3243C0.506836 24.6975 0.809333 25 1.18251 25H23.8175C24.1907 25 24.4932 24.6975 24.4932 24.3243C24.4932 23.9511 24.1907 23.6486 23.8175 23.6486Z"
                                            fill="currentColor"></path>
                                    </svg>

                                </div>
                                <div class="media-body flex-shrink-1">
                                    <h5 class="mb-4">Write to Us</h5>
                                    <a href="mailto:info@skola.com" class="text-gray-800">info@skola.com</a>
                                    <a href="mailto:courses@skola.com" class="text-gray-800">courses@skola.com</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-md">
                    <h1 class="mb-6">Have A Question?</h1>
                    <form class="row">
                        <div class="form-group mb-6 col-xl-6">
                            <label for="exampleInputTitle1">Name</label>
                            <input type="text" class="form-control placeholder-1" id="exampleInputTitle1"
                                placeholder="">
                        </div>

                        <div class="form-group mb-6 col-xl-6">
                            <label for="exampleInputTitle2">Email</label>
                            <input type="email" class="form-control placeholder-1" id="exampleInputTitle2"
                                placeholder="">
                        </div>

                        <div class="form-group mb-6 col-12">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control placeholder-1" id="exampleFormControlTextarea1" rows="6" placeholder="Content"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block mw-md-300p">SEND</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- FOOTER
    ================================================== -->
    <footer class="pt-8 pt-md-11 bg-white">
        <div class="container">
            <div class="row" id="accordionFooter">
                <div class="col-xl-6 col-md-4 col-lg-4">

                    <!-- Brand -->
                    <img src="{{ asset('froentend/assets/img/brand.png') }}" alt="..."
                        class="footer-brand img-fluid mb-4 h-60p">

                    <!-- Text -->
                    <p class="text-gray-800 mb-4 font-size-sm-alone">
                        329 Queensberry Street, North Melbourne VIC 3051, Australia.
                    </p>

                    <div class="mb-4">
                        <a href="tel:1234567890" class="text-gray-800 font-size-sm-alone">123 456 7890</a>
                    </div>

                    <div class="mb-4">
                        <a href="mailto:support@skola.com"
                            class="text-gray-800 font-size-sm-alone">support@skola.com</a>
                    </div>

                    <!-- Social -->
                    <ul class="list-unstyled list-inline list-social mb-4 mb-md-0">
                        <li class="list-inline-item list-social-item">
                            <a href="#"
                                class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#"
                                class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#"
                                class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#"
                                class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-xl-6 col-md-4 col-lg-2">
                    <div class="mb-5 mb-xl-0 footer-accordion">

                        <!-- Heading -->
                        <div id="widgetOne">
                            <h5 class="mb-5">
                                <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseOne"
                                    aria-expanded="true" aria-controls="widgetcollapseOne">
                                    Quick Links
                                    <span class="ms-auto text-dark">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor" />
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor" />
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor" />
                                        </svg>

                                    </span>
                                </button>
                            </h5>
                        </div>

                        <div id="widgetcollapseOne" class="collapse show" aria-labelledby="widgetOne"
                            data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-6 mb-md-8 mb-lg-0">
                                <li class="mb-3">
                                    <a href="about-v1" class="text-reset">
                                        Our Company
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="about-v2" class="text-reset">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#contact" class="text-reset">
                                        Contact Us
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-md-5">
                    <div
                        class="border-top pb-5 pt-6 py-md-4 text-center text-xl-start d-flex flex-column d-md-block d-xl-flex flex-xl-row align-items-center">
                        <p
                            class="text-gray-800 font-size-sm-alone d-block mb-0 mb-md-2 mb-xl-0 order-1 order-md-0 px-9 px-md-0">
                            Copyright © 2021 CreativeLayers. All Right Reserved.</p>


                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('froentend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/flickity-fade/flickity-fade.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/jarallax/dist/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/jarallax/dist/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/parallax-js/dist/parallax.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('froentend/assets/libs/typed.js/lib/typed.min.js') }}"></script>

    <script src="{{ asset('froentend/assets/js/theme.min.js') }}"></script>


</body>

<!-- Mirrored from transvelo.github.io/skola-html/5.1/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 08:50:26 GMT -->

</html>
