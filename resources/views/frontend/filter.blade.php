@include('frontend.layouts.headertwo')

<main>
    <!-- Page banner area start here -->
    <section class="page-banner bg-image pt-130 pb-130" data-background="front_assets/images/banner/gym1.jpg">
        <div class="container">
            <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
               
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- Product area start here -->
    <section class="product-area pt-130 pb-130">
        <div class="container">
            <div class="pb-20 bor-bottom shop-page-wrp d-flex justify-content-between align-items-center mb-65">
                <p class="fw-600">Showing 1–12 of 17 gyms</p>
                <div class="short">
                    <select name="shortList" id="shortList">
                        <option value="0">Sort by popularity</option>
                        <option value="1">Sort by rating</option>
                        <option value="2">Sort by distance</option>
                        <option value="3">Sort by price: low to high</option>
                        <option value="4">Sort by price: high to low</option>
                    </select>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4">
                    <div class="product__left-item sub-bg">
                        <h4 class="mb-30 left-title">Search</h4>
                        <input type="text" name="search" id="search" placeholder="Search Gym" class="form-control">
                        
                         <!-- Location Section -->
                         <div class="location mt-30">
                            <h5 class="mb-20">Location</h5>
                            <label for="location">City or Zip Code:</label>
                            <input type="text" name="location" id="location" placeholder="Enter Location" class="form-control">
                        </div>
                        <!-- Price Range Section -->
                        <div class="price-range mt-30">
                            <h5 class="mb-20">Price Range</h5>
                            <label for="min-price">Min Price:</label>
                            <input type="number" name="min-price" id="min-price" placeholder="Min Price" class="form-control mb-20">
                            
                            <label for="max-price">Max Price:</label>
                            <input type="number" name="max-price" id="max-price" placeholder="Max Price" class="form-control">
                        </div>
                
                       
                    </div>
                </div>
                
                <div class="col-xl-9 col-lg-8">
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
                       
                    </div>
                    <div class="pagi-wrp mt-65">
                        <a href="#0" class="pagi-btn">01</a>
                        <a href="#0" class="pagi-btn active">02</a>
                        <a href="#0" class="pagi-btn ">03</a>
                        <a href="#0" class="fa-regular ms-2 primary-hover fa-angle-right"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product area end here -->
</main>

@include('frontend.layouts.footer')
