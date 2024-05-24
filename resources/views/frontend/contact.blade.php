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

    <!-- Contact form area start here -->
    <section class="contact pt-130 pb-130">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="content radius-10 bg-image">
                        <h2>Have fitness goals in mind? <br> Let's talk.</h2>
                        <p>Join us today and start your journey towards a healthier lifestyle. <br> We're here to help you achieve your fitness goals.</p>
                        <div class="arry"><img src="front_assets/images/contact/arry.png" alt=""></div>
                        <ul>
                            <li><a href="https://www.google.com/maps/d/viewer?mid=1UZ57Drfs3SGrTgh6mrYjQktu6uY&amp;hl=en_US&amp;ll=18.672105000000013%2C105.68673800000003&amp;z=17"
                                    target="_blank"><i class="fa-solid fa-location-dot"></i>123 Fitness Avenue, <br> Gym City</a>
                            </li>
                            <li><a href="tel:1-732-798-0976"><i class="fa-solid fa-phone-volume"></i>+1 800 123 4567</a>
                            </li>
                            <li><a href="mailto:info.gym@fitness.com"><i class="fa-solid fa-envelope"></i>info.gym@fitness.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-area">
                        <form action="#0">
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <select name="subject" id="subject">
                                <option value="0">Select Subject</option>
                                <option value="account">Membership</option>
                                <option value="service">Personal Training</option>
                                <option value="pricing">Class Schedule</option>
                                <option value="support">Support</option>
                            </select>
                            <textarea name="message" id="message" placeholder="Message..."></textarea>
                            <div class="radio-btn mt-2">
                                <span></span>
                                <p>I accept your terms & conditions</p>
                            </div>
                            <button class="mt-40 btn-one"><span>Submit Now</span></button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Contact form area end here -->

    <!-- Contact map area start here -->
    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.741258067697!2d67.06474847464973!3d24.86073454818007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e0da46f51c3%3A0xaca84f665f8b3f4b!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1684914578976!5m2!1sen!2s"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <!-- Contact map area end here -->
</main>


@include('frontend.layouts.footer')
