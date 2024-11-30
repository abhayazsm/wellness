@extends('frontend.layouts.app')

@section('title', 'Success Stories')

@section('content')

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title text-white">Success Stories </h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li class="text-white"><a href="index.php" class="text-white">Home</a></li>
                    <li class="text-white">Success Stories </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
    About Area
    ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="shape-mockup jump-img d-none d-xl-block" data-left="34%" data-bottom="1%"><img
            src="{{ asset('img/shape/leaf-1-6.png') }}" alt="shape"></div>
    <div class="container">
        <div class="row  ">
           <div class="col-md-6">
                <div class=" mb-30 pb-1 wow fadeInUp " data-wow-delay="0.2s" data-fade="true">
                     <img src="{{ asset('img/common/benefit-well.jpg') }}"  alt="stories" class="w-100 rounded"/>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="h3 pe-xxl-5 me-xxl-5">SUCCESS STORIES</h2>

                <p>
                      Explore how our integrated wellness services have transformed the lives 
                      of our clients. Each story is a testament to the personalized care and 
                      holistic approach we provide.
                </p>


                <h5>Empowering Transformations</h5>
                <p>
                    Our clients come to us seeking renewed health, balanced lifestyles, and improved 
                    vitality. Through our comprehensive wellness services—Bioenergetic Testing, 
                    Nutritional Guidance, and Wellness Coaching—we’ve empowered countless individuals 
                    to reclaim their well-being.
                </p>

            </div>
        </div>

        <div class="row">
            <h3>Real Experiences, Real Results</h3>
            <div class="col-md-4">
                <div class="p-3 shadow">
                    <h5>From Fatigue to Vitality</h5>
                    <p> 
                        One client who struggled with chronic fatigue found newfound energy 
                        and resilience through our tailored bioenergetic assessments and 
                        nutrition plans.
                    </p>
                </div>
           </div>
           <div class="col-md-4">
                <div class="p-3 shadow">
                    <h5>Weight Management Success</h5>
                    <p> 
                       With personalized guidance, a client was able to adopt healthier eating 
                       habits, resulting in improved metabolic health and sustainable weight loss.
                    </p>
                </div>
           </div>
           <div class="col-md-4">
                <div class="p-3 shadow">
                    <h5>Enhanced Mental Clarity</h5>
                    <p> 
                       Our wellness coaching sessions helped an individual manage stress effectively, 
                       leading to better focus and overall happiness in Enhanced Mental Clarity

                    </p>
                </div>
           </div>
        </div>

        
    </div>
</section>


<!--==============================
    Testimonial Area
    ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="parallax" data-parallax-image="{{ asset('img/bg/testi-bg-3-2.jpg') }}"></div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="title-area">
                    <h2 class="sec-title4">Our Clients’ Success Stories</h2>
                    <!-- <p class="sec-text">Access to our fitness centre and pool is free to all our hotel guests. For non
                        guests membership packages are available.</p> -->
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.2s" data-slide-show="3" data-lg-slide-show="2"
            data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true">

            <div class="col-lg-4">
                <div class="testi-style3">
                    <span class="testi-icon"><i class="fas fa-quote-right"></i></span>
                    <div class="testi-avater"><img src="{{ asset('img/common/test-user.png') }}" alt="Testimonial Author">
                    </div>
                    <div class="testi-content">
                        <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testi-text">
                            Bioenergetic testing revealed insights about my health that traditional methods hadn’t
                            uncovered. With nutritional guidance and coaching, I’m feeling better than I have in years!
                        </p>
                        <h3 class="testi-name">Sarah</h3>
                        <!-- <span class="testi-degi">Business Man</span> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="testi-style3">
                    <span class="testi-icon"><i class="fas fa-quote-right"></i></span>
                    <div class="testi-avater"><img src="{{ asset('img/common/test-user.png') }}" alt="Testimonial Author">
                    </div>
                    <div class="testi-content">
                        <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testi-text">The coaching and nutritional guidance helped me develop a wellness routine
                            that I love. My energy is up, and I’m much healthier overall.I’m feeling better than I have
                            in years!</p>
                        <h3 class="testi-name">Mike</h3>
                        <!-- <span class="testi-degi">Customer</span> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="testi-style3">
                    <span class="testi-icon"><i class="fas fa-quote-right"></i></span>
                    <div class="testi-avater"><img src="{{ asset('img/common/test-user.png') }}" alt="Testimonial Author">
                    </div>
                    <div class="testi-content">
                        <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testi-text">I was dealing with chronic issues, and the bioenergetic approach gave me
                            answers and solutions tailored to my body. I’m feeling better than I have in years!</p>
                        <h3 class="testi-name">Lily</h3>
                        <!-- <span class="testi-degi">Manager</span> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection