@include('frontend.layouts.header')
<main>
    <!-- Banner area start here -->
    <section class="banner-two">
        <div class="banner-two__shape-left d-none d-lg-block wow bounceInLeft" data-wow-duration="1s"
            data-wow-delay=".5s">
        </div>
        <div class="banner-two__shape-right d-none d-lg-block wow bounceInRight" data-wow-duration="1s"
            data-wow-delay=".1s">
        </div>
        <div class="swiper banner-two__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-bg" data-background="front_assets/images/banner/slide-1.jpg"></div>
                    <div class="container">
                        <div class="banner-two__content">

                            <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                for <span class="primary-color">fitness and gym</span></h1>

                                <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Achieve your fitness goals globally
                                    with personalized workout plans, expert guidance, and <br> state-of-the-art equipment.
                                    Find a variety of gym products and services to suit every need.</p>



                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-bg" data-background="front_assets/images/banner/slide-2.jpg"></div>
                    <div class="container">
                        <div class="banner-two__content">

                            <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                for <span class="primary-color">fitness and gym</span></h1>

                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Achieve your fitness goals
                                globally
                                with personalized workout plans, expert guidance, and <br> state-of-the-art
                                equipment.
                                Find a variety of gym products and services to suit every need.</p>


                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-bg" data-background="front_assets/images/banner/slide-1.jpg"></div>
                    <div class="container">
                        <div class="banner-two__content">

                            <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                for <span class="primary-color">fitness and gym</span></h1>

                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Achieve your fitness goals
                                globally
                                with personalized workout plans, expert guidance, and <br> state-of-the-art
                                equipment.
                                Find a variety of gym products and services to suit every need.</p>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-two__arry-btn">
            <button class="arry-prev mb-15 banner-two__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
            <button class="arry-next active banner-two__arry-next"><i
                    class="fa-light fa-chevron-right"></i></button>
        </div>
    </section>
    <!-- Banner area end here -->



    <!-- View area start here -->

    <!-- View area end here -->

    <!-- Product area start here -->
    <section class="product-area">
        <div class="container">
            <div 
                class="product__wrp pb-30 mb-65 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
                <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                    <span class="title-icon mr-10"></span>
                    <h2>Featured</h2>
                </div>
                <ul class="nav nav-pills mt-4 mt-xl-0">
                    <li class="nav-item wow fadeInUp" data-wow-delay=".1s">
                        <a href="#latest-item" data-bs-toggle="tab" class="nav-link px-4 active">
                            latest item
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                        <a href="#top-ratting" data-bs-toggle="tab" class="nav-link px-4 bor-left bor-right">
                            top ratting
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                        <a href="#featured-products" data-bs-toggle="tab" class="nav-link ps-4">
                            featured products
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="latest-item" class="tab-pane fade show active">
                    <div class="row g-4">
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Gold's Gym</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Planet Fitness</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">POP
                                        FitFusion Gym</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Flex Fitness Club</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Vitality Gym</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Power Pulse Gym</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Body Harmony Gym</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Active Life Gym</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="top-ratting" class="tab-pane fade">
                    <div class="row g-4">
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Peak Performance Gym</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Ignite Fitness Forge</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Radiant Reps Gym</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Ignite Fitness Forge</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Zenith Zone Fitness</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="featured-products" class="tab-pane fade">
                    <div class="row g-4">
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Vitality Vortex Gym</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Apex Athlete Academy</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Core Fusion Fitnessy</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Peak Performance Palace</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor">
                                <a href="{{route('single_gym')}}" class="product__image pt-20 d-block">
                                    <img class="font-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                    <img class="back-image" src="front_assets/images/banner/product-5.jpg" alt="image">
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href="{{route('single_gym')}}">Elite Edge Gymnasium</a></h4>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product area end here -->

    <!-- Discount area start here -->
    <section class="discount-area bg-image" data-background="front_assets/images/bg/discount-bg2.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image mb-5 mb-lg-0"><img src="front_assets/images/banner/discount-image2.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="discount__item ps-0 pb-5 pb-lg-0 ps-lg-5">
                        <div class="section-header">
                            <div class="section-title-icon wow fadeInUp" data-wow-delay=".1s">
                                <span class="title-icon mr-10"></span>
                                <h2>Find Your Best Fitness Gear</h2>
                            </div>
                            <p class="mt-30 mb-55 wow fadeInUp" data-wow-delay=".2s">Achieve your fitness goals with ease,
                                offering personalized workout plans, expert guidance, and <br>
                                state-of-the-art equipment. Find a variety of gym products
                                and services to suit every need.
                            </p>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discount area end here -->



    <!-- Text slider area start here -->



    <!-- Brand area end here -->
</main>




@include('frontend.layouts.footer')