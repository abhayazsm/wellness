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
    <div class="shape-mockup jump-img d-none d-xl-block" data-left="34%" data-bottom="1%"><img
            src="{{ asset('img/shape/leaf-1-6.png') }}" alt="shape"></div>
    <div class="container">
        <div class="row justify-content-between gx-0 ">
            <div class="col-md-5">
                <div class="row">
                    <div><img src="{{ asset('img/portfolio.png') }}" class="rounded" alt="about" class="w-100"></div>
                </div>
            </div>
            
            <div class="col-md-6 mt-5">
                <h2 class="h3 pe-xxl-5 me-xxl-5 text-center">Anubha Goel</h2>

                <p>
                Meet Anubha Goel As a seasoned physical therapist, She has devoted her career to helping individuals overcome pain, recover from injury, and regain their strength. But her passion for health and well-being has always gone deeper. She understands that true healing begins when we address the root causes of dysfunction—whether they stem from physical strain, nutritional deficiencies, or energetic imbalances.
                </p>

                <p>
                Her transition into bioenergetic testing and holistic health services reflects her commitment to providing a comprehensive approach to wellness. Using non-invasive bioenergetic assessments, Your identifies underlying stressors, imbalances, and nutritional needs to create tailored solutions for lasting health improvements. These insights allow her to recommend targeted supplementation and lifestyle adjustments that empower clients to take control of their well-being.
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

<!--==============================
    About Area
    ==============================-->
<section class="mt-3 mb-3" style="background-color:#fdebe0">
    <div class="container">
        <div class="row justify-content-between gx-0 ">
            <div class="col-md-6 mt-4">
                <h4 class="h3 pe-xxl-5 me-xxl-5 text-center">Our Passion</h4>
                <p>
                Passion for Empowering Wellness
                For Anubha Goel,  helping clients isn’t just a profession—it’s a calling. Her empathetic approach ensures you feel supported, informed, and empowered every step of the way. She is passionate about partnering with you to unlock your body’s potential, enhance vitality, and achieve sustainable health.
                </p>
                <p>
                Your journey to wellness starts here. Ready to take the first step? Let’s work together to uncover the root causes of imbalance and create a personalized path to health and well-being.
                </p>
            </div>
            <div class="col-md-6">
                <div class="row text-center">
                    <div><img src="{{ asset('img/passion.png') }}" style="max-width: 60%;" class="rounded" alt="about" class="w-100"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-3 mb-4">
    <div class="container">
        <div class="row justify-content-between gx-0 ">
            <div class="col-md-6">
                <div class="row text-center">
                    <div><img src="{{ asset('img/mission.png') }}" style="max-width: 52%;" class="rounded" alt="about" class="w-100"></div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <h4 class="h3 pe-xxl-5 me-xxl-5 text-center">Our Mission</h4>
                <p>
                My Mission for Your Wellness
                I’m here to empower you to take charge of your health and embrace a life of balance, vitality, and joy. By addressing the root causes of dysfunction, I believe we can unlock your body’s natural ability to heal and thrive.
                </p>
                <p>
                If you’re ready to explore a holistic approach to your health, I’d love to work with you. Together, we can uncover the solutions that work best for you and help you achieve your wellness goals.
                </p>
            </div>
        </div>
    </div>
</section>
            
          



@endsection