<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gramentheme.com/html/odor/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2024 13:13:44 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fittness Gym</title>

    <!-- Favicon img -->
    <link rel="shortcut icon" href="front_assets/images/banner/images.png">

    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="front_assets/css/bootstrap.min.css">
    <!-- All min css -->
    <link rel="stylesheet" href="front_assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="front_assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="front_assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="front_assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="front_assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="front_assets/css/style.css">
</head>

<body>

    <!-- Header area start here -->
    <div class="top__header top-header-one pt-30 pb-30">
        <div class="container">
            <div class="top__wrapper">
                <a href="{{route('index')}}" class="main__logo">
                    <img src="front_assets/images/logo/logo.png" alt="logo__image" class="w-100">
                </a>
                <div class="search__wrp">
                    <input placeholder="Search for" aria-label="Search">
                    <button><i class="fa-solid fa-search"></i></button>
                </div>
                <div class="account__wrap">
                    <div class="account d-flex align-items-center">
                        <div class="user__icon">
                            <a href="{{route('flogin')}}">
                                <i class="fa-regular fa-user"></i>
                            </a>
                        </div>
                        <a href="{{route('flogin')}}" class="acc__cont">
                            <span class="text-white">
                                My Account
                            </span>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper pl-65">
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                    <li class="d-none d-lg-block"><button id="openButton" class="side-bar-btn"><i
                                class="fa-sharp text-white fa-light mr-60 fa-bars"></i></button>
                    </li>
                    <li>
                        <a href="{{route('index')}}">Home </a>

                    </li>
                    <li>
                        <a href="{{route('about')}}">About Us</a>
                    </li>

                    <li>
                        <a href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{route('faq')}}">FAQ</a>
                    </li>
                    <li>
                        <a href="{{route('filter')}}">Filter Page</a>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="logo mb-30">
            <img src="front_assets/images/logo/logo.png" alt="logo">
        </div>
        <p class="text-justify">Welcome to Iron Haven Gym! Our state-of-the-art facility is equipped with the latest fitness equipment and offers a wide range of classes to help you achieve your fitness goals. Join us and become part of our fitness community.</p>
        <ul class="info py-4 mt-65 bor-top bor-bottom">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">contact@ironhaven.com</a>
            </li>
            <li class="py-4"><i class="fa-solid primary-color fa-phone-volume"></i> <a href="tel:+1234567890">+1 234 567 890</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info@ironhaven.com</a></li>
        </ul>
        <div class="social-icon mt-65">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-twitter"></i></a>
            <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->

    <!-- Preloader area start -->
    <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div>
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->

