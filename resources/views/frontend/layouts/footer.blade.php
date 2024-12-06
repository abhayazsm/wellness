<?php $services = DB::table('services')->orderBy('created_at', 'ASC')->get();
    ?>
<footer class="footer-wrapper footer-layout4">
    <div class="shape-mockup jump d-none d-xxl-block" data-right="4%" data-bottom="30%"><img
            src="{{ asset('img/shape/flower-1-3.png') }}" alt="flower"></div>
    <div class="shape-mockup jump-reverse d-none d-xxxl-block" data-left="1%" data-top="5%"><img
            src="{{ asset('img/shape/b-s-1-3.png') }}" alt="flower"></div>
    <div class="widget-area" style="background-color: #fdebe0;">
        <div class="container">
            <div class="row justify-content-between gx-70">
                <div class="col-lg-4">
                    <div class="widget footer-widget">
                        <div class="footer-logo mb-3">
                            <img src="{{ asset('img/logo.png') }}" alt="logo" class="footer_logo">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Useful Links</h3>
                        <div class="row">
                            <div class="col-6">
                                <div class="menu-all-pages-container footer-menu">
                                    <ul class="menu">
                                        <li style="list-style-type: none; position:static;"><a href="{{ url('/') }}">Home</a></li>
                                        @foreach ($services as $service)
                                            <li style="list-style-type: none; position:static;"><a href="{{ route('services', $service->slug) }}">{{$service->title}}</a></li>
                                        @endforeach
                                        <li style="list-style-type: none; position:static;"><a href="{{ url('/benefits') }}"> Benefits</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="menu-all-pages-container footer-menu">
                                    <ul class="menu">
                                        <li style="list-style-type: none; position:static;"><a href="{{ url('/success-stories') }}">Success Stories</a></li>
                                        <li style="list-style-type: none; position:static;"><a href="{{ url('/about-us') }}">About Us</a></li>
                                        <li style="list-style-type: none; position:static;"><a class="no-before" href="{{ url('/contact-us') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Contact Us</h3>
                        <div class="recent-post-wrap">
                            <p class="footer-info">
                                <a href="tel:+01234567890" class="text-inherit" style="color:black;"><i
                                        class="far fa-phone-alt text-theme me-2"></i>+1 5164063272</a> <br>
                                <a class="text-inherit" style="color:black;" href="mailto:info@wellnessintegrated.co"><i
                                        class="fal fa-envelope text-theme me-2"></i>info@wellnessintegrated.co</a> <br>

                             </p>
                            <!-- <p><i class="fal fa-map text-theme me-2"></i>
                            23, Pine street , Plainview, NY 11803
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto text-center">
                    <p class="copyright-text text-white">Copyright <i class="fal fa-copyright"></i> 2024 <a
                            href="index.html"></a>. All Rights Reserved By <a
                            href="https://www.azsmenterprises.com/"></a></p>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="social-style3 text-white">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> <!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>




<!-- whatsapp -->

<div class="whatsapp-icon">
    <a href="#"><i class="fab fa-whatsapp"></i></a>
</div>

<!--********************************
			Code End  Here 
	******************************** -->