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

<section class=" space-top space-extra-bottom">
    <!-- <div class="shape-mockup jump-img d-none d-xl-block" data-left="34%" data-bottom="1%"><img
            src="{{ asset('img/shape/leaf-1-6.png') }}" alt="shape"></div> -->
    <div class="container">
        <div class="row justify-content-between gx-0 ">
            <div class="col-md-5">
                <div class="row">
                    <div><img src="{{ asset('img/portfolio.png') }}" class="rounded" alt="about" class="w-100"></div>
                </div>
            </div>
            
            <div class="col-md-6 mt-5">
                <h2 class="h3 pe-xxl-5 me-xxl-5 text-center">Dr. Anubha Goel</h2>

                <p>
                    Our Founder Dr. Anubha Goel is a highly qualified physical therapist holding a Doctorate in Physical Therapy with  over 20 years of clinical experience, She has devoted her career to helping individuals overcome pain, recover from injury, and regain their strength. But her passion for health and well-being has always gone deeper. She understands that true healing begins when we address the root causes of dysfunction—whether they stem from physical strain, nutritional deficiencies, or energetic imbalances.
                </p>

                <p>
                    Her transition into bioenergetic testing and holistic health services reflects her commitment to providing a comprehensive approach to wellness. Using non-invasive bioenergetic assessments, she identifies underlying stressors, imbalances, and nutritional needs to create tailored solutions for lasting health improvements. These insights equip her to recommend targeted supplementation and lifestyle adjustments that empower clients to take control of their well-being. 
                </p>

                <!-- <p>
                    <i>We’re here to guide you on a path toward balance, resilience, and lifelong health.</i>
                </p> -->
            </div>
            <div class="col-md-1">

            </div>
            
        </div>
    </div>
</section>

<section class=" space-top space-extra-bottom">
    <!-- <div class="shape-mockup jump-img d-none d-xl-block" data-left="34%" data-bottom="1%"><img
            src="{{ asset('img/shape/leaf-1-6.png') }}" alt="shape"></div> -->
    <div class="container">
        <div class="row justify-content-between gx-0 ">
            
            <div class="col-md-6 mt-5">
                <h2 class="h3 pe-xxl-5 me-xxl-5 text-center">Dr. Shen</h2>

                <p>
                Dr. Shen is a licensed and nationally board-certified acupuncturist.
                She graduated with a master’s medicine degree from  Medical University in China.
                </p>

                <p>
                Then
                she began learning traditional Chinese medicine techniques  from several of her family members who were  doctors of traditional Chinese medicine.Then she became interested in the various modalities of natural medicine that help to prevent and relieve issues, musculoskeletal aches, pain, and emotional stress.Now she is committed to helping her patients on their road to recovery and wellness.
                </p>

                <!-- <p>
                    <i>We’re here to guide you on a path toward balance, resilience, and lifelong health.</i>
                </p> -->
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-5">
                <div class="row">
                    <div><img src="{{ asset('img/portfolio-2.png') }}" class="rounded" alt="about" class="w-100"></div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!--==============================
    About Area
    ==============================-->
<section class="mt-3 mb-3" style="background-color:#fdebe0">
    <div class="container">
        <div class="row justify-content-between gx-0 ">
            <div class="col-md-12 mt-3 mb-2">
                <h4 class="h3 pe-xxl-5 me-xxl-5 text-center">Our Passion</h4>
                <p class="text-center">
                Our passion lies in empowering individuals to achieve optimal health and vitality by restoring balance to the body’s energy systems, unlocking its natural healing potential, and transforming lives through personalized care and innovative wellness solutions.
                </p>
               
            </div>
            <!--<div class="col-md-6">
                <div class="row text-center">
                    <div><img src="{{ asset('img/passion.png') }}" style="max-width: 50%;" class="rounded" alt="about" class="w-100"></div>
                </div>
            </div>-->
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row justify-content-between gx-0 ">
            <!--<div class="col-md-6">
                <div class="row text-center">
                    <div><img src="{{ asset('img/mission.png') }}" style="max-width: 42%;" class="rounded" alt="about" class="w-100"></div>
                </div>
            </div>-->
            <div class="col-md-12 mt-3 mb-2">
                <h4 class="h3 pe-xxl-5 me-xxl-5 text-center">Our Mission</h4>
                <p class="text-center">
                    Our mission is to inspire and guide individuals on their journey to optimal health by providing innovative, science-driven solutions that restore balance, enhance vitality, and promote lasting well-being.
                </p>
            </div>
        </div>
    </div>
</section>
            
          



@endsection