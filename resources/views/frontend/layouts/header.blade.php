 <!--********************************
   		Code Start From Here 
	******************************** -->

<!--==============================
     Preloader
  ==============================-->
  <!-- <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div> -->
    <!--==============================
    Mobile Menu
  ============================== -->
    <?php $menus = DB::table('menus')->where('is_active', true)
        ->orderBy('order', 'asc')
        ->get()
        ->groupBy('parent_id');
    ?>
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('img/mobile_header.png') }}" alt="" class="header_logo" width="50px"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    @foreach ($menus[null] ?? [] as $menu) {{-- Top-level menus --}}
                        <li class="{{ isset($menus[$menu->id]) ? 'menu-item-has-children' : '' }}">
                            <a href="{{ url($menu->url) }}">{{ $menu->title }}</a>
                            @if (isset($menus[$menu->id])) {{-- Check for submenus --}}
                                <ul class="sub-menu">
                                    @foreach ($menus[$menu->id] as $submenu)
                                        <li><a href="{{ url($submenu->url) }}">{{ $submenu->title }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block  ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="footer-logo">
                    <a href="index.php"><img src="{{ asset('img/logo_header.png') }}" alt="" class="header_logo" width="80px"></a>
                </div>
                <div class="info-media1">
                    <div class="media-icon"><i class="fal fa-map-marker-alt"></i></div>
                    <span class="media-label">23, Pine street , Plainview, NY 11803</span>
                </div>
                <div class="info-media1">
                    <div class="media-icon"><i class="far fa-phone-alt "></i></div>
                    <span class="media-label"><a href="tel:5164063272" class="text-inherit">5164063272</a></span>
                </div>
                <div class="info-media1">
                    <div class="media-icon"><i class="fal fa-envelope"></i></div>
                    <span class="media-label"><a class="text-inherit"
                            href="mailto:info@example.com">info@example.com</a></span>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Latest post</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('img/widget/recent-post-1-1.jpg') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Skinscent Experience
                                    Oskarsson</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fas fa-calendar-alt"></i>march 10, 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('img/widget/recent-post-1-2.jpg') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Lorem ipsum is
                                    placeholder recent popular</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fas fa-calendar-alt"></i>Augest 10, 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('img/widget/recent-post-1-3.jpg') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">From its medieval
                                    origins health custom</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fas fa-calendar-alt"></i>July 11, 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('img/widget/recent-post-1-4.jpg') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Letraset's
                                    dry-transfer sheets later</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fas fa-calendar-alt"></i>March 05, 2023</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
    Header Area
    ==============================-->
    <header class="vs-header header-layout4">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-md-between align-items-center">
                    <div class="col-auto text-center py-2 py-md-0">
                        <div class="header-links style-white">
                            <ul>
                                <li class="d-none d-xxl-inline-block"><i class="far fa-map-marker-alt"></i>23, Pine street , Plainview, NY 11803</li>
                                <li><i class="far fa-phone-alt"></i><a href="tel:+5164063272">5164063272</a></li>
                                <li><i class="far fa-envelope"></i><a
                                        href="mailto:example@lorem.com">example@lorem.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="social-style4">
                            <span class="social-title">Follow Us:</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrap">
            <div class="sticky-active" style="background-color: #fdebe0;">
                <div class="container">
                    <div class="row justify-content-between align-items-center gx-60">
                        <div class="col-auto logo_img">
                            <div class="header-logo">
                                <a href="index.php"><img src="{{ asset('img/logo_header.png') }}" alt="" class="header_logo" width="80px"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            <ul>
                                @foreach ($menus[null] ?? [] as $menu)
                                    <li class="{{ isset($menus[$menu->id]) ? 'menu-item-has-children' : '' }}">
                                        <a href="{{ url($menu->url) }}">{{ $menu->title }}</a>
                                        @if (isset($menus[$menu->id]))
                                            <ul class="sub-menu">
                                                @foreach ($menus[$menu->id] as $submenu)
                                                    <li><a href="{{ url($submenu->url) }}">{{ $submenu->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-auto">
                            <div class="header-btns">
                                <!-- <button class="icon-btn style3 searchBoxTggler d-none d-sm-inline-block"><i class="far fa-search"></i></button>
                                <button class="icon-btn style3 sideMenuToggler d-none d-xl-inline-block"><i class="fal fa-bars"></i></button> -->
                                <a href="{{ url('/intake') }}" class="vs-btn" style="padding:15px;">Intake </a>
                                <!-- <button  class="vs-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Intake</button> -->
                                <button class="vs-menu-toggle d-inline-block d-lg-none" type="button"><i
                                        class="fal fa-bars"></i></button>
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Button to trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="userForm" class="form-style6">
          <!-- Name -->
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>

          <!-- Date of Birth -->
          <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
            <div class="invalid-feedback">Please enter your date of birth.</div>
          </div>

          <!-- Age -->
          <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" min="1" required>
            <div class="invalid-feedback">Please enter a valid age.</div>
          </div>

          <!-- Gender -->
          <div class="mb-3">
            <label class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
            <div class="invalid-feedback">Please select your gender.</div>
          </div>

          <!-- Address -->
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
            <div class="invalid-feedback">Please enter your address.</div>
          </div>

          <!-- City, State, Zip -->
          <div class="mb-3">
            <label for="city_state_zip" class="form-label">City, State, Zip</label>
            <input type="text" class="form-control" id="city_state_zip" name="city_state_zip" required>
            <div class="invalid-feedback">Please enter city, state, and zip code.</div>
          </div>

          <!-- Phone -->
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" required>
            <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="vs-btn" data-bs-dismiss="modal">Close</button>
        <button type="button" class="vs-btn" id="saveButton">Submit</button>
      </div>
    </div>
  </div>
</div>

