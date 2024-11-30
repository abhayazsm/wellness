@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-white">Contact <span class="inner-text text-white">Us</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li class="text-white"><a href="index.html" class="text-white">Home</a></li>
                        <li class="text-white">Contact <span class="inner-text text-white">Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
      Contact Form Area
    ==============================-->
    <section class=" space">
        <div class="container">
            <div class="row gx-70">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3888.0179275319265!2d77.59380432405057!3d12.970704564899968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%2022%2C%2012%2C%20Vittal%20Mallya%20Rd%2C%20KG%20Halli%2C%20D&#39;%20Souza%20Layout%2C%20Ashok%20Nagar%2C%20Bengaluru%2C%20Karnataka%20560001%2C%20India!5e0!3m2!1sen!2sin!4v1731485447470!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="contact-table">
                        <div class="tr">
                            <div class="tb-col">
                                <span class="th">Address :</span>
                                <span class="td">23, Pine street , Plainview, NY 11803</span>
                            </div>
                        </div>
                        <div class="tr">
                            <div class="tb-col">
                                <span class="th">email :</span>
                                <span class="td"><a href="mailto:info@example.com" class="text-inherit">info@example.com</a></span>
                            </div>
                            <!-- <div class="tb-col">
                                <span class="th">time : </span>
                                <span class="td">16 : 00 - 19 : 00</span>
                            </div> -->
                        </div>
                    </div>
                    <span class="h4">
                        <a href="tel:5164063272" class="text-inherit"><i class="fal fa-headset me-3 text-theme"></i>5164063272</a>
                    </span>
                </div>
                <div class="col-lg-6 mb-40 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center text-lg-start">
                        <span class="sec-subtitle">Experience</span>
                        <h2 class="sec-title3 h1 text-uppercase mb-xxl-2 pb-xxl-1">Get in <span class="text-theme">Touch</span></h2>
                        <div class="col-xxl-10 pb-xl-3">
                            <p class="pe-xxl-4">We think your skin should look and refshed matter Nourish your outer inner beauty with our essential</p>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&#x2715;</button>
                        </div>
                    @endif
                    <!-- Contact Us Form -->
                    <form action="{{ route('contact-us.store') }}" method="POST" class="form-style6">
                        @csrf

                        <!-- Name Field with Validation -->
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="name" 
                                id="name" 
                                placeholder="Your Name*" 
                                value="{{ old('name') }}"" 
                                class="@error('name') is-invalid @enderror"
                            >
                            @error('name')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field with Validation -->
                        <div class="form-group">
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                placeholder="Your Email*" 
                                value="{{ old('email') }}"" 
                                class="@error('email') is-invalid @enderror"
                            >
                            @error('email')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field with Validation -->
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="phone" 
                                id="phone" 
                                placeholder="Phone Number*" 
                                value="{{ old('phone') }}"" 
                                class="@error('phone') is-invalid @enderror"
                            >
                            @error('phone')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Subject Field with Validation -->
                        <div class="form-group">
                            <select name="subject" id="subject" class="@error('subject') is-invalid @enderror">
                                <option value="" disabled selected hidden>Subject*</option>
                                <option value="Skin Care" {{ old('subject') == 'Skin Care' ? 'selected' : '' }}>Skin Care</option>
                                <option value="Yoga" {{ old('subject') == 'Yoga' ? 'selected' : '' }}>Yoga</option>
                                <option value="Body Massage" {{ old('subject') == 'Body Massage' ? 'selected' : '' }}>Body Massage</option>
                                <option value="Skin Checkup" {{ old('subject') == 'Skin Checkup' ? 'selected' : '' }}>Skin Checkup</option>
                                <option value="Others" {{ old('subject') == 'Others' ? 'selected' : '' }}>Others</option>
                            </select>
                            @error('subject')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Message Field with Validation -->
                        <div class="form-group">
                            <textarea name="message" id="message" placeholder="Message*" class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button class="vs-btn" type="submit">Send Message</button>
                        <!-- <p class="form-messages"></p> -->
                    </form>

                </div>
            </div>
        </div>
    </section>


@endsection