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

   

    <!-- Service area start here -->
    <section class="service-area pt-130 pb-130 bg-image" data-background="front_assets/images/bg/about-bg.jpg">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-center justify-content-lg-start">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service__item mb-50">
                        <div class="service__icon">
                            <img src="front_assets/images/icon/feature-icon1.png" alt="icon">
                        </div>
                        <div class="service__content">
                            <h4>Free Trial</h4>
                            <p>Get a free 7-day gym pass</p>
                        </div>
                    </div>
                    <div class="service__item">
                        <div class="service__icon">
                            <img src="front_assets/images/icon/feature-icon2.png" alt="icon">
                        </div>
                        <div class="service__content">
                            <h4>Secure Lockers</h4>
                            <p>Keep your belongings safe</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 d-none d-lg-block">
                    <div class="service__image image">
                        <img src="front_assets/images/service/service-image.png" alt="image">
                        <div class="section-header service-header d-flex align-items-center">
                            <span class="title-icon mr-10"></span>
                            <h2>Join now & save 25%</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="service__item mb-50">
                        <div class="service__icon">
                            <img src="front_assets/images/icon/feature-icon3.png" alt="icon">
                        </div>
                        <div class="service__content">
                            <h4>Expert Trainers</h4>
                            <p>Personalized training sessions</p>
                        </div>
                    </div>
                    <div class="service__item">
                        <div class="service__icon">
                            <img src="front_assets/images/icon/feature-icon4.png" alt="icon">
                        </div>
                        <div class="service__content">
                            <h4>Flexible Memberships</h4>
                            <p>Cancel anytime, hassle-free</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Service area end here -->

    <!-- Testimonial area start here -->
    <section class="testimonial pt-130 pb-130">
        <div class="container">
            <div class="testimonial__wrp bor radius-10">
                <div class="testimonial__head-wrp bor-bottom pb-65 pt-65 pl-65 pr-65">
                    <div class="section-header d-flex align-items-center">
                        <span class="title-icon mr-10"></span>
                        <h2>members speak for us</h2>
                    </div>
                    <div class="arry-btn my-4 my-lg-0">
                        <button class="arry-prev testimonial__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
                        <button class="ms-3 active arry-next testimonial__arry-next"><i class="fa-light fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="pt-45 pb-45 pr-55">
                    <div class="row g-4 align-items-center justify-content-between">
                        <div class="col-lg-7">
                            <div class="swiper testimonial__slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial__item pl-65">
                                            <div class="testi-header mb-30">
                                                <div class="testi-content">
                                                    <h3>Jessica R. Blake</h3>
                                                    <span>Fitness Enthusiast</span>
                                                </div>
                                                <i class="fa-solid fa-quote-right"></i>
                                            </div>
                                            <p>The trainers at this gym are incredibly knowledgeable and supportive. I’ve seen amazing results in just a few months!</p>
                                            <div class="star mt-30">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item pl-65">
                                            <div class="testi-header mb-30">
                                                <div class="testi-content">
                                                    <h3>Michael B. Smith</h3>
                                                    <span>Bodybuilder</span>
                                                </div>
                                                <i class="fa-solid fa-quote-right"></i>
                                            </div>
                                            <p>Excellent facilities and top-notch equipment. This gym has everything I need for a comprehensive workout routine.</p>
                                            <div class="star mt-30">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item pl-65">
                                            <div class="testi-header mb-30">
                                                <div class="testi-content">
                                                    <h3>Emily D. Johnson</h3>
                                                    <span>Yoga Instructor</span>
                                                </div>
                                                <i class="fa-solid fa-quote-right"></i>
                                            </div>
                                            <p>I love the variety of classes offered here. There’s something for everyone, and the community is so welcoming!</p>
                                            <div class="star mt-30">
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
                        <div class="col-lg-4">
                            <div class="testimonial__image">
                                <div class="swiper testimonial__slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="front_assets/images/banner/gym6.jpeg" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="front_assets/images/banner/gym6.jpeg" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="front_assets/images/banner/gym6.jpeg" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonial area end here -->
</main>

@include('frontend.layouts.footer')
