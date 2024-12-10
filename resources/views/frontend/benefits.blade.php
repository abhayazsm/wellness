@extends('frontend.layouts.app')

@section('title', 'Benefits')

@section('content')
   
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-white">Benefits <span class="inner-text text-white"></span></h1>
                <div class="breadcumb-menu-wrap text-white">
                    <ul class="breadcumb-menu text-white">
                        <li class="text-white"><a href="index.php" class="text-white">Home</a></li>
                        <li class="text-white">Our <span class="inner-text text-white">Benefits</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
    Service Area
    ==============================-->



    <section class=" space">
        <div class="service-inner1">
            <div class="shape-mockup jump d-none d-xxl-block" data-top="-10%" data-right="0"><img src="{{ asset('img/hero/hero-leaf-5.png') }}" alt="shape"></div>
            <div class="container-xl">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-5 col-xxl-auto mt-1">
                        <div class="service-style1 reverse">
                            <div class="vs-icon"><img src="{{ asset('img/icon/sr-i-1-1.png') }}" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="#" class="text-inherit">Enhanced Energy Levels</a></h3>
                                <p class="service-text">Experience a noticeable boost in daily energy through personalized wellness strategies that align with your body's unique needs.</p>
                            </div>
                        </div>
                        <div class="service-style1 reverse">
                            <div class="vs-icon"><img src="{{ asset('img/icon/sr-i-1-2.png') }}" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="#" class="text-inherit">Early Detection of Imbalances</a></h3>
                                <p class="service-text">Identify and address potential health concerns before they develop further, thanks to non-invasive bioenergetic testing.</p>
                            </div>
                        </div>
                        <div class="service-style1 reverse">
                            <div class="vs-icon"><img src="{{ asset('img/icon/sr-i-1-3.png') }}" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="#" class="text-inherit">Personalized Nutrition Plans</a></h3>
                                <p class="service-text">Enjoy tailored nutritional guidance that supports digestion, weight management, and overall metabolic health.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col col-xxl-auto text-center d-none d-lg-block"> 
                        <img src="{{ asset('img/bg/sr-shape-1-1.png') }}" alt="shape" class="mt-n4">
                    </div>-->
                    <div class="col-md-6 col-lg-5 col-xxl-auto">
                        <div class="service-style1">
                            <div class="vs-icon"><img src="{{ asset('img/icon/sr-i-1-4.png') }}" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="#" class="text-inherit">Improved Mental Clarity</a></h3>
                                <p class="service-text">Reduce stress and improve focus with wellness coaching designed to strengthen mental and emotional resilience.</p>
                            </div>
                        </div>
                        <div class="service-style1">
                            <div class="vs-icon"><img src="{{ asset('img/icon/sr-i-1-5.png') }}" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="#" class="text-inherit">Strengthened Immune System</a></h3>
                                <p class="service-text">Adopt holistic practices that fortify your immune system, promoting long-term health and disease prevention.</p>
                            </div>
                        </div>
                        <div class="service-style1">
                            <div class="vs-icon"><img src="{{ asset('img/icon/sr-i-1-6.png') }}" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="#" class="text-inherit">Sustainable Healthy Habits</a></h3>
                                <p class="service-text">Develop and maintain lasting lifestyle changes that support both physical and mental wellness under expert guidance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!--==============================
    About Area
    ==============================-->
     <!--<section class=" overflow-hidden space-top space-extra-bottom">
        <div class="shape-mockup jump-reverse-img d-none d-xxl-block" data-top="22%" data-left="-7%">
            <div class="curb-shape1"></div>
        </div>
       <div class="shape-mockup jump-img  d-none d-xxxl-block" data-top="17%" data-right="13%"><img src="{{ asset('img/shape/leaf-1-4.png') }}" alt="shape"></div>
        <div class="container">
            <div class="row gx-55">
                <div class="col-lg-5 col-xxl-auto align-self-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="px-xxl-4 mx-xxl-3 pb-md-4 pb-lg-0">
                        <div class="img-box3">
                            <div class="shape-line">
                                <svg viewBox="0 0 442 357">
                                    <path class="shape-line" d="M220.6 3C339.98 3 437.1 100.12 437.1 219.5V351.99H440.1V219.5C440.1 160.87 417.27 105.75 375.81 64.29C334.35 22.83 279.23 0 220.6 0C161.97 0 106.85 22.83 65.39 64.29C28.67 101.01 6.57 148.46 2 199.56H5.02C15.12 89.5 107.94 3 220.6 3Z" />
                                    <path class="shape-dot" d="M7 198.5C7 200.433 5.433 202 3.5 202C1.567 202 0 200.433 0 198.5C0 196.567 1.567 195 3.5 195C5.433 195 7 196.567 7 198.5Z" />
                                    <path class="shape-dot" d="M442 353.5C442 355.433 440.433 357 438.5 357C436.567 357 435 355.433 435 353.5C435 351.567 436.567 350 438.5 350C440.433 350 442 351.567 442 353.5Z" />
                                </svg>
                            </div>
                            <div class="text-shape">
                                <svg viewBox="0 0 408 579">
                                    <path id="textboxpath" d="M0 204C0 91.3339 91.3339 0 204 0V0C316.666 0 408 91.3339 408 204V316.879V375C408 487.666 316.666 579 204 579V579C91.3339 579 0 487.666 0 375V204Z"></path>
                                    <text>
                                        <textPath href="#textboxpath" style="font-size:28px;" startOffset="810">Integrated Wellness Services</textPath>
                                    </text>
                                </svg>
                            </div>
                            <div class="img-1"><img src="{{ asset('img/about/ab-3-1.jpg') }}" alt="about"></div>
                            <div class="img-2 jump-img"><img src="{{ asset('img/shape/leaf-1-7.png') }}" alt="about"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl align-self-center wow fadeInUp" data-wow-delay="0.3s">
                    <span class="sec-subtitle">Experience Wellness <span class="sec-subtext">5 Years</span></span>
                    <h2 class="sec-title2">DISCOVER A <span class="text-theme">NEW</span></h2>
                    <p class="quote-text">We’re here to guide you on a path toward balance, resilience, and lifelong health.</p>
                    <div class="row gx-25">
                        <div class="col-md-6">
                            <div class="feature-style1">
                                <div class="vs-icon"><img src="{{ asset('img/icon/ab-f-2-1.png') }}" alt="icon"></div>
                                <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Bioenergetic Testing
                                </a></h3>
                                <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i></div>
                                <p class="feature-text">Uncover the hidden imbalances in your body through our advanced bioenergetic testing.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-style1">
                                <div class="vs-icon"><img src="{{ asset('img/icon/ab-f-2-2.png') }}" alt="icon"></div>
                                <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Nutritional Guidance</a></h3>
                                <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i></div>
                                <p class="feature-text">Empower yourself with tailored nutritional advice that aligns with your health goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->


@endsection