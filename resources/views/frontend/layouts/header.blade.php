<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gramentheme.com/html/odor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2024 13:09:27 GMT -->

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
    <div class="top__header pt-30 pb-30">
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
                            <a href="{{route('fregister')}}">
                                <i class="fa-regular fa-user"></i>
                            </a>
                        </div>
                        <a href="{{route('fregister')}}" class="acc__cont">
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
            <div class="header-wrapper">
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
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
