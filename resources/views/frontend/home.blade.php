@extends('frontend.layouts.app')

@section('title', 'Home Page')

@section('content')

<!--==============================
header    close
==============================-->


<!--==============================
    Hero Area
    ==============================-->
<section class=" ">
    <div class="vs-hero-carousel" data-height="650" data-container="1900" data-slidertype="responsive">

        <!-- Slide 1-->
        <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
            <img width="1920" height="800" src="{{ asset('storage/' .$slides[0]->image_path) }}" class="ls-bg" alt="hero-bg"
                decoding="async">
            <p style='font-size:20px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"DM Sans", sans-serif; left:370px; top:135px; line-height:20px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                data-ls="offsetyin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:-100; durationout:1500; easingout:easeOutQuint;">
                Welcome to &amp; Integrated Wellness Solutions</p>
            <h1 style='font-size:72px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:370px; top:190px; line-height:72px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Empowering Your Health
            </h1>
            <h1 style='font-size:72px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:370px; top:275px; line-height:72px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; delayin:300; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Journey at Every Stage of Life
            </h1>
            <p style='font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:372px; left:370px; line-height:30px; font-family:"DM Sans", sans-serif; color:#555555; width:570px; white-space:normal; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-200; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Integrated Wellness Services for Optimal Health, Longevity, and Vitality</p>
            <div style='color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:440px; left:370px; font-family:"DM Sans", sans-serif; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                data-ls="offsetyin:150; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:150; durationout:1500; easingout:easeOutQuint;">
                <a href="{{$slides[0]->button_link}}" class="vs-btn style9">{{$slides[0]->button_text}}<i class="far fa-long-arrow-right"></i></a>
            </div>
            <img width="124" height="99" src="{{ asset('img/hero/gear-shape1.png') }}" class="ls-l ls-img-layer" alt=""
                decoding="async"
                style="font-size:25px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:110px; -webkit-background-clip:border-box;"
                data-ls="offsetyin:-50; durationin:2000; delayin:1200; parallax:true; parallaxlevel:-10; parallaxevent:scroll; parallaxaxis:y; parallaxtransformorigin:right top; parallaxdurationmove:1000; parallaxrotate:10; static:forever;">
            <img width="100" height="79" src="{{ asset('img/hero/gear-shape2.png') }}" class="ls-l ls-img-layer" alt=""
                decoding="async"
                style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:250px; top:320px; -webkit-background-clip:border-box;"
                data-ls="offsetyin:-50; durationin:3000; delayin:1500; parallax:true; parallaxlevel:-5; parallaxevent:scroll; parallaxaxis:y; parallaxtransformorigin:left top; parallaxdurationmove:2000; parallaxrotate:20; static:forever;">
            <img width="88" height="71" src="{{ asset('img/hero/gear-shape3.png') }}" class="ls-l ls-img-layer" alt=""
                decoding="async"
                style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:780px; top:550px; -webkit-background-clip:border-box;"
                data-ls="offsetyin:-50; durationin:3000; delayin:1700; parallax:true; parallaxlevel:-10; parallaxevent:scroll; parallaxaxis:y; parallaxtransformorigin:left top; parallaxdurationmove:1000; static:forever;">
            <img width="57" height="58" src="{{ asset('img/hero/gear-shape4.png') }}" class="ls-l ls-img-layer" alt=""
                decoding="async"
                style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:1100px; top:390px; -webkit-background-clip:border-box;"
                data-ls="offsetyin:-50; durationin:4000; delayin:2000; parallax:true; parallaxlevel:-10; parallaxevent:scroll; parallaxaxis:y; parallaxtransformorigin:right top; parallaxdurationmove:2000; static:forever;">
            <img width="57" height="58" src="{{ asset('img/hero/gear-shape4.png') }}" class="ls-l ls-img-layer" alt=""
                decoding="async"
                style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:1428px; top:115px; -webkit-background-clip:border-box;"
                data-ls="offsetyin:-50; durationin:3000; delayin:2200; parallax:true; parallaxlevel:-4; parallaxevent:scroll; parallaxaxis:y; parallaxtransformorigin:right bottom; parallaxdurationmove:1100; static:forever;">
            <p style='text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"DM Sans", sans-serif; left:220px; top:172px; line-height:36px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                data-ls="offsetyin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:-100; durationout:1500; easingout:easeOutQuint;">
                Welcome to &amp; Integrated Wellness Solutions</p>
            <h1 style='font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:220px; top:251px; line-height:90px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Supporting Your Wellness
            </h1>
            <h1 style='font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:220px; top:366px; line-height:90px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; delayin:300; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Goals Through Every Milestone
            </h1>
            <div style='color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:518px; left:220px; font-family:"DM Sans", sans-serif; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                data-ls="offsetyin:150; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:150; durationout:1500; easingout:easeOutQuint;">
                <a href="{{ route('contact-us') }}" class="vs-btn style9">Get Started Today<i class="far fa-long-arrow-right"></i></a>
            </div>
            <h1 style='font-size:120px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:180px; top:97px; line-height:120px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Nurturing Your Well-being,
            </h1>
            <h1 style='font-size:120px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:180px; top:237px; line-height:120px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; delayin:300; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Every Step of the Way
            </h1>
            <div style='color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:457px; left:180px; font-family:"DM Sans", sans-serif; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                data-ls="offsetyin:150; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:150; durationout:1500; easingout:easeOutQuint;">
                <a href="{{ route('contact-us') }}" class="vs-btn style9">Get Started Today<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>


        <!-- Slide 2-->
        <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
            <img width="1920" height="650" src="{{ asset('storage/' . $slides[1]->image_path) }}" class="ls-bg" alt="hero-bg"
                decoding="async">
            <p style='font-size:20px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"DM Sans", sans-serif; left:370px; top:135px; line-height:20px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                data-ls="offsetyin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:-100; durationout:1500; easingout:easeOutQuint;">
                Welcome to &amp; Integrated Wellness Solutions</p>
            <h1 style='font-size:72px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:370px; top:190px; line-height:72px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Empowering Your Health
            </h1>
            <h1 style='font-size:72px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:370px; top:275px; line-height:72px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; delayin:300; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Journey at Every Stage of Life
            </h1>
            <p style='font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:372px; left:370px; line-height:30px; font-family:"DM Sans", sans-serif; color:#555555; width:570px; white-space:normal; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-200; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Integrated Wellness Services for Optimal Health, Longevity, and Vitality.</p>
            <div style='color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:440px; left:370px; font-family:"DM Sans", sans-serif; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                data-ls="offsetyin:150; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:150; durationout:1500; easingout:easeOutQuint;">
                <a href="{{$slides[1]->button_link}}" class="vs-btn style9">{{$slides[1]->button_text}}<i class="far fa-long-arrow-right"></i></a>
            </div>
            <p style='text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"DM Sans", sans-serif; left:220px; top:172px; line-height:36px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                data-ls="offsetyin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:-100; durationout:1500; easingout:easeOutQuint;">
                Welcome to &amp; Integrated Wellness Solutions</p>
            <h1 style='font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:220px; top:251px; line-height:90px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Supporting Your Wellness
            </h1>
            <h1 style='font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:220px; top:366px; line-height:90px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; delayin:300; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Goals Through Every Milestone
            </h1>
            <div style='color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:518px; left:220px; font-family:"DM Sans", sans-serif; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                data-ls="offsetyin:150; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:150; durationout:1500; easingout:easeOutQuint;">
                <a href="{{ route('appointment') }}" class="vs-btn style9">Make Appointment<i class="far fa-long-arrow-right"></i></a>
            </div>
            <h1 style='font-size:120px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:180px; top:97px; line-height:120px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Nurturing Your Well-being,
            </h1>
            <h1 style='font-size:120px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:"Marcellus", serif; left:180px; top:237px; line-height:120px; color:#121f38; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                data-ls="offsetxin:-150; durationin:1500; delayin:300; easingin:easeOutQuint; offsetxout:-200; durationout:1500; easingout:easeOutQuint;">
                Every Step of the Way
            </h1>
            <div style='color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:457px; left:180px; font-family:"DM Sans", sans-serif; -webkit-background-clip:border-box;'
                class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                data-ls="offsetyin:150; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:150; durationout:1500; easingout:easeOutQuint;">
                <a href="{{ route('appointment') }}" class="vs-btn style9">Make Appointment<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>


<!--==============================
About Area
==============================-->
<section class=" space-top space-extra-bottom">
<div class="container">
    <div class="row gx-60">
        <div class="col-lg-6  wow fadeInUp" data-wow-delay="0.2s">
            <div class="img-box7">
                <div class="img-1">
                    <img src="{{ asset('img/about/ab-6-1.jpg') }}" alt="thumb">
                    <div class="img-4"><img src="{{ asset('img/shape/dots-shape.png') }}" alt="thumb"></div>
                </div>
                <!-- <div class="img-2"><img src="{{ asset('img/about/ab-6-2.jpg') }}" alt="thumb"></div> -->
                <!-- <div class="img-3"><img src="{{ asset('img/about/ab-6-3.jpg') }}" alt="thumb"></div> -->
            </div>
        </div>
        <div class="col-lg-6 align-self-center  wow fadeInUp" data-wow-delay="0.3s">
            <span class="sec-subtitle5">Welcome to <span class="inner-text">Integrated Wellness
                    Solution</span></span>
            <h2 class="sec-title4">Our Philosophy of Wellness <span class="inner-text"></span></h2>
            <p class="quote-text2">Brief introduction to the core values of Integrated Wellness Solutions,
                highlighting a holistic, non-invasive approach to health that promotes the body’s natural ability to
                repair and renew.</p>
            <div class="vs-btn-group">
                <a href="{{ route('services', $services[0]->slug) }}" class="vs-btn style10">Discover Our Approach<i
                        class="far fa-arrow-right"></i></a>
                <!-- <a href="tel:+44123456789" class="vs-btn style11"><i class="fal fa-phone"></i>Make A Call</a> -->
            </div>
        </div>
    </div>
</div>
</section>


<!--==============================
Service Area
==============================-->
<section class="space mb-5">
<div class="parallax" data-parallax-image="{{ asset('img/common/service-bg.jpg') }}"></div>
<div class="container z-index-common">
    <div class="row justify-content-center text-center">
        <div class="col-md-9 col-lg-7 col-xl-6 wow fadeInUp " data-wow-delay="0.2s">
            <div class="title-area">
                <span class="sec-subtitle text-white">Our Integrated Wellness Services</span>
                <h2 class="sec-title text-white">Our Services</h2>
            </div>
        </div>
    </div>
    <div class="row gx-20 gy-gx service5-slider justify-content-center vs-carousel wow fadeInUp" 
        data-wow-delay="0.2s" 
        data-slide-show="3" 
        data-lg-slide-show="3" 
        data-md-slide-show="2" 
        data-sm-slide-show="1">
        @foreach ($services as $service)
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="service-style5">
                    <div class="service-icon">
                        <img src="{{ asset('storage/' . $service->image) }}" alt="icon">
                    </div>
                    <div class="service-content">
                        <h4 class="service-title h4" >
                            <a style="font-size: 25px;" class="text-inherit" href="{{ route('services', $service->slug) }}">
                                {{ $service->title }}
                            </a>
                        </h4>
                        <!-- <p class="service-text">{{ $service->title, 100 }}</p> -->
                        <p class="service-text">{!! Str::limit($service->short_desc, 150) !!}</p>
                    </div>
                    <a href="{{ route('services', $service->slug) }}" class="service-btn">
                        <i class="far fa-plus"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>



<!-- Divider -->
<div class="divider-style1 ">
<div class="divider-icon"><img src="{{ asset('img/logo.png') }}" alt="icon"></div>
</div>





<!--==============================
why choose start
==============================-->

<section class="space-top space-extra-bottom ">
<div class="shape-mockup jump d-none d-xxl-block" data-left="1%" data-top="-5%"><img
        src="{{ asset('img/shape/flower-1-2.png') }}" alt="flower"></div>
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-9 col-lg-7 col-xl-6 wow fadeInUp wow-animated" data-wow-delay="0.2s">
            <div class="title-area">
                <h2 class="sec-title4">Why Choose Integrated Wellness?</h2>
                <p class="sec-text"><i>Personalized Support for Every Step of Your Health Journey</i></p>
            </div>
        </div>
    </div>
    <div class="row  wow fadeInUp" data-wow-delay="0.3s">
        <div class="col-md-6">
            <h5>Benefits of Bioenergetic Testing, Nutritional Guidance, and Wellness Coaching:</h5>
            <div class="benefit-list">
                <ul class="">
                    <li>
                        <div class="row">
                            <div class="col-1 text-center">
                                <i class="far fa-check-square w-100"></i>
                            </div>
                            <div class="col-11">
                                <p>Identify and address root causes of health challenges.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1 text-center">
                                <i class="far fa-check-square w-100"></i>
                            </div>
                            <div class="col-11">
                                <p>Customized solutions for acute and chronic conditions.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1 text-center">
                                <i class="far fa-check-square w-100"></i>
                            </div>
                            <div class="col-11">
                                <p>Enhance overall vitality and wellbeing.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1 text-center">
                                <i class="far fa-check-square w-100"></i>
                            </div>
                            <div class="col-11">
                                <p>Promote longevity through balanced lifestyle and nutritional choices.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1 text-center">
                                <i class="far fa-check-square w-100"></i>
                            </div>
                            <div class="col-11">
                                <p>Support for all ages—from young children to older adults.</p>
                            </div>
                        </div>
                    </li>
                </ul>

                <a href="{{ url('about-us') }}" class="vs-btn style10">See How We Can Help You</a>
            </div>
        </div>
        <div class="col-md-6">
             <img src="{{ asset('img/common/benefit-well.jpg') }}"  alt="" width="100%" class="rounded" />
        </div>
    </div>
</div>
</section>

<!--==============================
Gallery Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <!-- Title Area -->
        <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="title-area">
                    <h2 class="sec-title4">Media</h2>
                    <p class="sec-text">Media showcases the serene and rejuvenating atmosphere of our wellness facilities and services.</p>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="row justify-content-center text-center mb-4">
            <div class="col-md-12">
                <ul class="nav nav-tabs justify-content-center" style="border-bottom: 0px solid #dee2e6" id="galleryTabs" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link vs-btn active" id="all-tab" data-filter="all">All</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link vs-btn" id="images-tab" data-filter="image">Images</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link vs-btn" id="videos-tab" data-filter="video">Videos</button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Gallery Items -->
        <div class="row filter-active gx-4 gy-gx" wow fadeInUp data-wow-delay="0.3s" id="galleryContent">
            @foreach ($mediaItems as $item)
                <div class="col-sm-6 col-lg-4 col-xxl-auto filter-item {{ $item->type }}">
                    <div class="gallery-style3 image-scale-hover">
                        @if ($item->type == 'image')
                            <a href="{{ asset('storage/' . $item->file_path) }}" class="icon-btn popup-image"><i class="far fa-eye"></i></a>
                            <img src="{{ asset('storage/' . $item->file_path) }}" alt="{{ $item->title }}" class="w-100">
                        @elseif ($item->type == 'video')
                            <a href="{{ asset('storage/' . $item->file_path) }}" class="icon-btn popup-video"><i class="far fa-play-circle"></i></a>
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}" class="w-100">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- View More Button -->
        @if ($remainingCount > 0)
            <div class="row justify-content-center mt-4">
                <div class="col-auto">
                    <button id="viewMoreBtn" class="btn btn-primary" data-offset="5" style="display: block;">View More</button>
                </div>
            </div>
        @else
            <div class="row justify-content-center mt-4">
                <div class="col-auto">
                    <button id="viewMoreBtn" class="btn btn-primary" data-offset="5" style="display: none;">View More</button>
                </div>
            </div>
        @endif
    </div>
</section>


<!--==============================
Blog Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 col-xl-6 wow fadeInUp wow-animated" data-wow-delay="0.2s">
                <div class="title-area">
                    <h2 class="sec-title4">Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.2s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
            @foreach ($blogs as $index => $blog)
                <div class="col-xl-4">
                    <div class="vs-blog blog-style3">
                        <span class="blog-number">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <div class="blog-img">
                            <a href="{{ route('admin.blogs.show', $blog->id) }}">
                                <img class="w-100" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <!-- <div class="blog-meta">
                                <a href="#">
                                    <i class="fal fa-calendar-alt"></i>{{ $blog->created_at->format('d F, Y') }}
                                </a>
                                <a href="#">
                                    <i class="fal fa-user"></i>By {{ $blog->author }}
                                </a>
                            </div> -->
                            <h3 class="blog-title h4">
                                <a href="{{ route('blog-detail', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>







<!--==============================
Testimonial Area
==============================-->
<section class=" space-top space-extra-bottom">
<div class="parallax" data-parallax-image="{{ asset('img/bg/testi-bg-3-2.jpg') }}"></div>
<div class="container mt-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-9 col-lg-7 col-xl-6 wow fadeInUp wow-animated" data-wow-delay="0.2s">
            <div class="title-area">
                <h2 class="sec-title4">Our Clients’ Success Stories</h2>
                <!-- <p class="sec-text">Access to our fitness centre and pool is free to all our hotel guests. For non
                    guests membership packages are available.</p> -->
            </div>
        </div>
    </div>
    <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.2s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">

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
                    <p class="testi-text">The coaching and nutritional guidance helped me develop a wellness routine that I love. My energy is up, and I’m much healthier overall.I’m feeling better than I have in years!</p>
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
                    <p class="testi-text">I was dealing with chronic issues, and the bioenergetic approach gave me answers and solutions tailored to my body. I’m feeling better than I have in years!</p>
                    <h3 class="testi-name">Lily</h3>
                    <!-- <span class="testi-degi">Manager</span> -->
                </div>
            </div>
        </div>

    </div>
</div>
</section>
<!--==============================
Team Area
==============================-->
<!-- <section class=" space-top space-extra-bottom">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 col-xl-6 wow fadeInUp wow-animated" data-wow-delay="0.2s">
                <div class="title-area">
                    <h2 class="sec-title4">Meet Our Team</h2>
                    <p class="sec-text">Access to our fitness centre and pool is free to all our hotel guests. For non guests membership packages are available.</p>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2">
            <div class="col-xl-3">
                <div class="team-style2">
                    <div class="team-img"><a href="team-details.html"><img src="{{ asset('img/team/team-3-1.jpg') }}" alt="member"></a></div>
                    <h3 class="team-name h5"><a href="team-details.html">Lenda Murray</a></h3>
                    <span class="team-degi">Founder</span>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fal fa-basketball-ball"></i></a>
                    </div>
                    <a href="team-details.html" class="vs-btn">View Profile</a>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="team-style2">
                    <div class="team-img"><a href="team-details.html"><img src="{{ asset('img/team/team-3-2.jpg') }}" alt="member"></a></div>
                    <h3 class="team-name h5"><a href="team-details.html">Rosalina Willo</a></h3>
                    <span class="team-degi">Co-Founder</span>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fal fa-basketball-ball"></i></a>
                    </div>
                    <a href="team-details.html" class="vs-btn">View Profile</a>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="team-style2">
                    <div class="team-img"><a href="team-details.html"><img src="{{ asset('img/team/team-3-3.jpg') }}" alt="member"></a></div>
                    <h3 class="team-name h5"><a href="team-details.html">Yankee Chary</a></h3>
                    <span class="team-degi">Manager</span>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fal fa-basketball-ball"></i></a>
                    </div>
                    <a href="team-details.html" class="vs-btn">View Profile</a>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="team-style2">
                    <div class="team-img"><a href="team-details.html"><img src="{{ asset('img/team/team-3-4.jpg') }}" alt="member"></a></div>
                    <h3 class="team-name h5"><a href="team-details.html">Marian Costa</a></h3>
                    <span class="team-degi">Beautician</span>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fal fa-basketball-ball"></i></a>
                    </div>
                    <a href="team-details.html" class="vs-btn">View Profile</a>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="team-style2">
                    <div class="team-img"><a href="team-details.html"><img src="{{ asset('img/team/team-3-5.jpg') }}" alt="member"></a></div>
                    <h3 class="team-name h5"><a href="team-details.html">Luis Salgaokar</a></h3>
                    <span class="team-degi">Beautician</span>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fal fa-basketball-ball"></i></a>
                    </div>
                    <a href="team-details.html" class="vs-btn">View Profile</a>
                </div>
            </div>
        </div>
    </div>
</section> -->











<!--==============================
footer    start
==============================-->

@endsection