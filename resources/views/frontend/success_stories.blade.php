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
<!-- <section class=" space-top space-extra-bottom mt-4 mb-4">
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
                       leading to better focus and overall happiness in Enhanced Mental Clarity.
                    </p>
                </div>
           </div>
        </div>
    </div>
</section> -->


<!--==============================
    Testimonial Area
    ==============================-->
<section class="space-top space-extra-bottom" style="background-color:#fdebe0">
    <div class="container mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="title-area">
                    <h2 class="sec-title4">Our Clients’ Success Stories</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.2s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
            @foreach($testimonials as $testimonial)
                <div class="col-lg-4">
                    <div class="testi-style3" style="height: 500px;"> <!-- Set fixed height here -->
                        <span class="testi-icon"><i class="fas fa-quote-right"></i></span>
                        <div class="testi-avater">
                            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}">
                        </div>
                        <div class="testi-content">
                            <div class="testi-rating mt-4">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                            <p class="testi-text">{{ $testimonial->message }}</p>
                            <h3 class="testi-name">{{ $testimonial->name }}</h3>
                            @if($testimonial->designation)
                                <span class="testi-degi">{{ $testimonial->designation }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection