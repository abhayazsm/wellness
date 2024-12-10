@extends('frontend.layouts.app')

@section('title', $service->title)

@section('content')

<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-white">Service <span class="inner-text text-white">Details</span></h1>
                <div class="breadcumb-menu-wrap text-white">
                    <ul class="breadcumb-menu text-white">
                        <li class="text-white"><a href="index.php" class="text-white">Home</a></li>
                        <li class="text-white">Service <span class="inner-text">Details</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--==============================
    Service Details
    ==============================-->
    <section class=" space-top space-extra-bottom mt-4 mb-4">
        <div class="container">
            <div class="row flex-row-reverse gx-50">
                <div class="col-lg-8 col-xl mb-30 mb-lg-0">
                    <div class="mb-30">
                        <div class="mega-hover"><img src="{{ asset('storage/' . $service->image) }}" alt="Service Image"></div>
                    </div>
                    {!! $service->content !!}
                    <div class="row">
                        @if($service->footer_first_image)
                        <div class="col-6 mb-30">
                            <div class="mega-hover"><img src="{{ $service->footer_first_image ? asset('storage/'. $service->footer_first_image) : asset('img/service/s-d-1-2.jpg')}}" alt="footer first image" class="w-100"></div>
                        </div>
                        @endif
                        @if($service->footer_second_image)
                        <div class="col-6 mb-30">
                            <div class="mega-hover"><img src="{{ $service->footer_second_image ? asset('storage/'. $service->footer_second_image): asset('img/service/s-d-1-3.jpg')}}" alt="footer second image" class="w-100"></div>
                        </div>
                        @endif
                        <div class="text-center">
                            <a href="{{ route('appointment') }}"><button class="vs-btn" style="margin-right: 10px;">Appointment</button></a>
                            <a href="tel:+1 5164063272" class="vs-btn">Call</a>
                        </div>
                        <div class="mt-4">
                            <p>We offer in home and Remote services <br><u><strong>Note:</strong></u> Remote Bioenergetic testing service also available upon request. On Service Detail page </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-auto">
                    <aside>
                        <div class="service-box">
                            <h3 class="box-title">All Services</h3>
                            <ul class="list-unstyled">
                                @foreach ($allService as $service)
                                <li><a href="{{ route('services', $service->slug) }}">{{$service->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="img-box3 style3">
                            <!-- <div class="img-2 jump-img"><img src="{{ asset('img/shape/leaf-1-7.png') }}" alt="about"></div> -->
                            <div class="img-product">
                                <a href="#"><img src="{{ $service->side_image ? asset('storage/'. $service->side_image) : asset('img/common/ser-detail-hend.png') }}" alt="" width="100%"></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>


@endsection