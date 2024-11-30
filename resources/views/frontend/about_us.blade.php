@extends('frontend.layouts.app')

@section('title', 'About Us')

@section('content')

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title text-white">About Us</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li class="text-white"><a href="index.php" class="text-white">Home</a></li>
                    <li class="text-white">About Us</li>
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
        <div class="row justify-content-between gx-0 ">
            <div class="col-md-6">
                <span class="sec-subtitle">welcome Integrated Wellness Solution</span>
                <h2 class="h3 pe-xxl-5 me-xxl-5">Our Philosophy of Wellness</h2>

                <p>
                    Brief introduction to the core values of Integrated Wellness Solutions,
                    highlighting a holistic, non-invasive approach to health that promotes
                    the body’s natural ability to repair and renew.
                </p>

                <p>
                    Emphasis on the benefits of personalized care for acute and chronic
                    conditions, as well as preventative wellness for longevity.
                </p>

                <p>
                    <i>We’re here to guide you on a path toward balance, resilience, and lifelong health.</i>
                </p>
            </div>
            <div class="col-md-6">
                <div class="vs-carousel mb-30 pb-1 wow fadeInUp" data-wow-delay="0.2s" data-fade="true">
                    <div><img src="{{ asset('img/about/ab-4-1.jpg') }}" class="rounded" alt="about" class="w-100"></div>
                    <div><img src="{{ asset('img/about/ab-4-2.jpg') }}" class="rounded" alt="about" class="w-100"></div>
                    <div><img src="{{ asset('img/about/ab-4-3.jpg') }}" class="rounded" alt="about" class="w-100"></div>
                </div>
            </div>
        </div>

        <p class="fs-22 font-title text-title mb-4 mb-lg-5">
              Our wellness philosophy extends beyond treatment; we believe your skin should 
              look and feel refreshed and revitalized. Our services are infused with essential 
              ingredients that nourish and enhance your natural beauty. From skin rejuvenation 
              therapies to wellness practices, we are committed to helping you achieve a radiant, 
              healthy glow.
        </p>

        <div class="row">
            <div class="col-md-6 mb-3">
                <h3 class="text-uppercase font-body mt-n1">DISCOVER <span class="text-theme">Wellness</span> Service
                </h3>
                <p> 
                    Experience a variety of wellness services tailored to your needs, focusing on 
                    holistic practices that support your well-being. Our expert team uses time-honored 
                    techniques and state-of-the-art treatments to provide comprehensive care.
                </p>
            </div>
            <div class="col-md-3 wow fadeInUp p-2 border" data-wow-delay="0.2s">
                <h4 class="fw-medium fs-26 font-body ">Our Mission</h4>
                <p>
                    To inspire and empower individuals to achieve their best health through 
                    innovative and personalized wellness solutions.
                </p>
            </div>
            <div class="col-md-3 wow fadeInUp p-2 border" data-wow-delay="0.3s">
                <h4 class="fw-medium fs-26 font-body ">Our Vision</h4>
                <p>
                    To be a leading provider of integrated health and wellness services that 
                   foster a community of vitality and lifelong well-being.
                </p>
            </div>
        </div>
    </div>
</section>

<section class=" space-top space-extra-bottom">
    <div class="shape-mockup jump-img d-none d-xl-block" data-left="34%" data-bottom="1%"><img
            src="{{ asset('img/shape/leaf-1-6.png') }}" alt="shape"></div>
    <div class="container">
        <div class="row justify-content-between gx-0 ">
            <div class="col-md-5">
                <div class="row">
                    <div><img src="{{ asset('img/portfolio.png') }}" class="rounded" alt="about" class="w-100"></div>
                </div>
            </div>
            
            <div class="col-md-5 mt-5">
                <h2 class="h3 pe-xxl-5 me-xxl-5 text-center">Marry Smith</h2>

                <p>
                A founder is a business professional who starts a company. Founders take an idea and use their own skills and knowledge to build a business from nothing. 
                </p>

                <p>
                They assume all risks associated with the venture and often use their own capital to establish the company.
                </p>

                <p>
                    <i>We’re here to guide you on a path toward balance, resilience, and lifelong health.</i>
                </p>
            </div>
            <div class="col-md-1">

            </div>
            
        </div>
    </div>
</section>

@endsection