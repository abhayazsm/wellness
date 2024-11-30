@extends('frontend.layouts.app')

@section('title', 'Appointment')

@section('content')

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-white">Appointment</h1>
                <div class="breadcumb-menu-wrap text-white">
                    <ul class="breadcumb-menu">
                        <li class="text-white"><a href="index.php" class="text-white">Home</a></li>
                        <li class="text-white">Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--==============================
    Appointment Area
    ==============================-->
    <section class="bg-light-3 space">
        <div class="shape-mockup jump-img d-none d-xxl-block" data-right="4%" data-top="10%"><img src="{{ asset('img/shape/leaf-1-5.png') }}" alt="shape"></div>
        <div class="shape-mockup jump-reverse-img d-none d-xxl-block" data-right="2%" data-bottom="5%"><img src="{{ asset('img/shape/b-s-1-3.png') }}" alt="shape"></div>
        <div class="shape-mockup jump-reverse-img d-none d-xxl-block" data-left="0" data-bottom="4%"><img src="{{ asset('img/shape/b-s-1-2.png') }}" alt="shape"></div>
        <div class="container">
            <div class="row gx-60">
                <div class="col-xl-5 mb-40 mb-xl-0 pb-20 pb-xl-0 wow fadeInUp" data-wow-delay="0.2s">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&#x2715;</button>
                    </div>
                @endif
                <form action="{{ route('appointment.store') }}" method="POST" class="form-style2">
                    @csrf
                    <h2 class="form-title">Book Appointment</h2>
                    <p class="form-label">Today For Free</p>

                    <!-- Name Field -->
                    <div class="form-group">
                        <input 
                            type="text" 
                            name="name" 
                            value="{{ old('name') }}" 
                            placeholder="Your Name" 
                            class="@error('name') is-invalid @enderror"
                        >
                        @error('name')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="form-group">
                        <input 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            placeholder="Email Address" 
                            class="@error('email') is-invalid @enderror"
                        >
                        @error('email')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone Field -->
                    <div class="form-group">
                        <input 
                            type="text" 
                            name="phone" 
                            value="{{ old('phone') }}" 
                            placeholder="Phone" 
                            class="@error('phone') is-invalid @enderror"
                        >
                        @error('phone')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Service Field -->
                    <div class="form-group">
                        <select 
                            name="service" 
                            id="service" 
                            class="form-control @error('service') is-invalid @enderror" 
                            style="background-color:#fde6d8"
                        >
                            <option value="">Select Service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->title }}" {{ old('service') == $service->title ? 'selected' : '' }}>{{ $service->title }}</option>
                            @endforeach
                        </select>
                        @error('service')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Date Field -->
                    <div class="form-group">
                        <input 
                            type="date" 
                            name="date" 
                            value="{{ old('date') }}" 
                            class="form-control @error('date') is-invalid @enderror" 
                            min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                        >
                        @error('date')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Time Field -->
                    <div class="form-group">
                    <select 
                            name="time" 
                            id="time" 
                            class="form-control @error('time') is-invalid @enderror" 
                            style="background-color:#fde6d8"
                        >
                            <option value="">Select Time</option>
                            <option value="15 Min">15 Min</option>
                            <option value="30 Min">30 Min</option>
                            <option value="45 Min">45 Min</option>
                            <option value="1 Hrs">1 Hrs</option>
                        </select>
                        @error('time')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button class="vs-btn" type="submit">Make an Appointment</button>
                    </div>
                </form>


                </div>
                <div class="col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h2 class="h3 mb-4 mt-n2">Schedule Your Personalized Wellness Appointment
                            </h2>
                            <p class="fs-md font-title mb-4">Take the first step toward revitalizing your health and well-being by scheduling an appointment with our experienced wellness team. Our services, including Bioenergetic Testing, Nutritional Guidance, and Wellness Coaching, are tailored to meet your unique health needs and goals.</p>
                            <div class="row gy-2">
                                <div class="col-auto">
                                    <p class="vs-info"><i class="fal fa-envelope"></i><a href="mailto:example@info.com" class="text-inherit">example@info.com</a></p>
                                </div>
                                <div class="col-auto">
                                    <p class="vs-info"><i class="fal fa-phone-alt"></i><a href="tel:+5164063272" class="text-inherit">5164063272</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 mb-30">
                            <img src="{{ asset('img/about/appoin-1-2.jpg') }}" alt="about" class="w-100">
                        </div>
                        <div class="col-md-5 mb-30">
                            <img src="{{ asset('img/about/appoin-1-1.jpg') }}" alt="about" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection