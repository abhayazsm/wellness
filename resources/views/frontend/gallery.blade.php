@extends('frontend.layouts.app')

@section('title', 'Our Media')

@section('content')

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-white">Our <span class="inner-text text-white">Gallery</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu text-white">
                        <li class="text-white "><a href="index.php" class="text-white ">Home</a></li>
                        <li class="text-white ">Our <span class="inner-text text-white ">Gallery</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


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


@endsection