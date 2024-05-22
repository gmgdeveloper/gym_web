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
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="color: orangered;">Frequently Asked Questions</h2>
                <p>Find answers to common questions about our gym, memberships, classes, and facilities. If you have any other questions, feel free to reach out to us!</p>
            </div>
    
            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse text-dark" data-bs-target="#faq-list-1">What are your gym's operating hours? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p style="color: orangered;">
                                Our gym is open 24/7 to accommodate your busy schedule. Whether you prefer early morning workouts or late-night sessions, we've got you covered.
                            </p>
                        </div>
                    </li>
    
                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed text-dark">What types of memberships do you offer? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p style="color: orangered;">
                                We offer a variety of membership options including monthly, quarterly, and annual plans. We also have student and senior discounts available.
                            </p>
                        </div>
                    </li>
    
                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed text-dark">Do you have personal trainers available? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p style="color: orangered;">
                                Yes, we have certified personal trainers available to help you achieve your fitness goals. You can book sessions directly through our website or at the front desk.
                            </p>
                        </div>
                    </li>
    
                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed text-dark" >What kind of classes do you offer? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p style="color: orangered;">
                                We offer a wide range of classes including yoga, pilates, HIIT, spin, Zumba, and strength training. Check our class schedule online for the latest offerings.
                            </p>
                        </div>
                    </li>
    
                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed text-dark">Do you provide any amenities for members? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p style="color: orangered;">
                                Yes, our gym offers amenities such as locker rooms, showers, a sauna, and a juice bar. We also provide towels and personal care products for your convenience.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- Shop single area end here -->
</main>
@include('frontend.layouts.footer')
