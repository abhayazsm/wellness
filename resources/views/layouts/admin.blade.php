<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Integrated Wellness Service">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Integrated Wellness Service</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/fevicon1.png') }}" rel="icon" type="image/png">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>
<body id="page-top">
    <style>
        .side-bar.show {
            display: contents;
            color: rgba(255, 255, 255, .8);
        }
        .side-bar a.dropdown-item {
            color: white;
            padding: 0.6rem 2rem;
        }
        .side-bar .dropdown-item:hover {
            color: #1e2125;
            background-color: #f8f9fa;
        }
        li.nav-item.dropdown {
            font-weight: 700;
        }
        span {
            color: white;
        }

        /* Toggle Switch Style */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            border-radius: 50%;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #4CAF50;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        
        
    </style>

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
            <div class="sidebar-brand-icon rotate-n-0">
                <img style="height:40px;" src="{{ asset('img/fevicon1.png') }}" alt="logo">
            </div>
            <div class="sidebar-brand-text mx-3">Wellness</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('dashboard') }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider"> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">
            {{ __('Settings') }}
        </div> -->

        <!-- Nav Item - Profile -->
        <li class="nav-item {{ Nav::isRoute('profile') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Profile') }}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('admin.intake') }}">
            <a class="nav-link" href="{{ route('admin.intake') }}">
                <i class="fas fa-fw fa-calendar"></i>
                <span>{{ __('Intake') }}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('admin.appointments') }}">
            <a class="nav-link" href="{{ route('admin.appointments') }}">
                <i class="fas fa-fw fa-calendar"></i>
                <span>{{ __('Appointment') }}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('admin.contacts') }}">
            <a class="nav-link" href="{{ route('admin.contacts') }}">
                <i class="fas fa-fw fa-address-book"></i>
                <span>{{ __('Contact Us') }}</span>
            </a>
        </li>

        <!-- Nav Item - About -->
        <!-- <li class="nav-item {{ Nav::isRoute('about') }}">
            <a class="nav-link" href="{{ route('about') }}">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>{{ __('About') }}</span>
            </a>
        </li> -->
        <li class="nav-item dropdown {{ Nav::isRoute('admin.categories.*') }}">
            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-list"></i>
                <span>{{ __('Categories') }}</span>
            </a>
            <div class="dropdown-menu side-bar" aria-labelledby="categoriesDropdown">
                @foreach(['create' => 'Add Category', 'index' => 'List Category'] as $route => $label)
                    <a class="dropdown-item {{ Nav::isRoute('admin.categories.' . $route) }}" href="{{ route('admin.categories.' . $route) }}">
                        {{ __($label) }}
                    </a>
                @endforeach
            </div>
        </li>

        <li class="nav-item dropdown {{ Nav::isRoute('admin.blogs.*') }}">
            <a class="nav-link dropdown-toggle" href="#" id="blogsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-blog"></i>
                <span>{{ __('Blogs') }}</span>
            </a>
            <div class="dropdown-menu side-bar" aria-labelledby="blogsDropdown">
                @foreach(['create' => 'Add Blog', 'index' => 'List Blog'] as $route => $label)
                    <a class="dropdown-item {{ Nav::isRoute('admin.blogs.' . $route) }}" href="{{ route('admin.blogs.' . $route) }}">
                        {{ __($label) }}
                    </a>
                @endforeach
            </div>
        </li>

        <li class="nav-item dropdown {{ Nav::isRoute('admin.tags.*') }}">
            <a class="nav-link dropdown-toggle" href="#" id="tagsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-tags"></i>
                <span>{{ __('Tags') }}</span>
            </a>
            <div class="dropdown-menu side-bar" aria-labelledby="tagsDropdown">
                @foreach(['create' => 'Add Tags', 'index' => 'List Tags'] as $route => $label)
                    <a class="dropdown-item {{ Nav::isRoute('admin.tags.' . $route) }}" href="{{ route('admin.tags.' . $route) }}">
                        {{ __($label) }}
                    </a>
                @endforeach
            </div>
        </li>

        <li class="nav-item dropdown {{ Nav::isRoute('admin.slides.*') }}">
            <a class="nav-link dropdown-toggle" href="#" id="slidesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-film"></i>
                <span>{{ __('Banner Slide') }}</span>
            </a>
            <div class="dropdown-menu side-bar" aria-labelledby="slidesDropdown">
                @foreach(['create' => 'Add Banner Slide', 'index' => 'List Banner Slide'] as $route => $label)
                    <a class="dropdown-item {{ Nav::isRoute('admin.slides.' . $route) }}" href="{{ route('admin.slides.' . $route) }}">
                        {{ __($label) }}
                    </a>
                @endforeach
            </div>
        </li>

        <li class="nav-item dropdown {{ Nav::isRoute('admin.media.*') }}">
            <a class="nav-link dropdown-toggle" href="#" id="mediaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw far fa-images"></i>
                <span>{{ __('Media') }}</span>
            </a>
            <div class="dropdown-menu side-bar" aria-labelledby="mediaDropdown">
                @foreach(['create' => 'Add Media', 'index' => 'List Media'] as $route => $label)
                    <a class="dropdown-item {{ Nav::isRoute('admin.media.' . $route) }}" href="{{ route('admin.media.' . $route) }}">
                        {{ __($label) }}
                    </a>
                @endforeach
            </div>
        </li>

        <li class="nav-item dropdown {{ Nav::isRoute('admin.menus.*') }}">
            <a class="nav-link dropdown-toggle" href="#" id="menusDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa fa-bars"></i>
                <span>{{ __('Menus') }}</span>
            </a>
            <div class="dropdown-menu side-bar" aria-labelledby="menusDropdown">
                @foreach(['create' => 'Add Menus', 'index' => 'List Menus'] as $route => $label)
                    <a class="dropdown-item {{ Nav::isRoute('admin.menus.' . $route) }}" href="{{ route('admin.menus.' . $route) }}">
                        {{ __($label) }}
                    </a>
                @endforeach
            </div>
        </li>

        <li class="nav-item dropdown {{ Nav::isRoute('admin.services.*') }}">
            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa fa-wrench"></i>
                <span>{{ __('Services') }}</span>
            </a>
            <div class="dropdown-menu side-bar" aria-labelledby="servicesDropdown">
                @foreach(['create' => 'Add Services', 'index' => 'List Services'] as $route => $label)
                    <a class="dropdown-item {{ Nav::isRoute('admin.services.' . $route) }}" href="{{ route('admin.services.' . $route) }}">
                        {{ __($label) }}
                    </a>
                @endforeach
            </div>
        </li>

        <li class="nav-item dropdown {{ Nav::isRoute('admin.testimonials.*') }}">
            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa fa-columns"></i>
                <span>{{ __('Testimonials') }}</span>
            </a>
            <div class="dropdown-menu side-bar" aria-labelledby="testimonialsDropdown">
                @foreach(['create' => 'Add Testimonial', 'index' => 'List Testimonial'] as $route => $label)
                    <a class="dropdown-item {{ Nav::isRoute('admin.testimonials.' . $route) }}" href="{{ route('admin.testimonials.' . $route) }}">
                        {{ __($label) }}
                    </a>
                @endforeach
            </div>
        </li>

        <li class="nav-item dropdown {{ Nav::isRoute('admin.modals.*') }}">
            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa fa-clone"></i>
                <span>{{ __('Modal Popup') }}</span>
            </a>
            <div class="dropdown-menu side-bar" aria-labelledby="modalsDropdown">
                @foreach(['create' => 'Add Modals Popup', 'index' => 'List Modals Popup'] as $route => $label)
                    <a class="dropdown-item {{ Nav::isRoute('admin.modals.' . $route) }}" href="{{ route('admin.modals.' . $route) }}">
                        {{ __($label) }}
                    </a>
                @endforeach
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-info" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <!-- <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i> -->
                            <!-- Counter - Alerts -->
                            <!-- <span class="badge badge-danger badge-counter">3+</span>
                        </a> -->
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-info">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <!-- <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i> -->
                            <!-- Counter - Messages -->
                            <!-- <span class="badge badge-danger badge-counter">7</span>
                        </a> -->
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial="{{ Auth::user()->name[0] }}"></figure>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" style="margin-left:-50px" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Settings') }}
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Activity Log') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('main-content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white" style="box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span style="color: #524e4e;">Created by <a href="https://www.azsmenterprises.com" target="_blank">AZSM Interprises</a>. {{ now()->year }}</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- Popper.js (required for Bootstrap dropdowns) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>


<!-- Bootstrap JS -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script>
    $(document).ready(function () {
        // Reinitialize dropdowns to ensure they work
        $('.dropdown-toggle').dropdown();
    });
</script>
<script>
    $(document).ready(function () {
        // Ensure dropdown closes when re-clicked
        $('.nav-item.dropdown').on('click', function () {
            $(this).find('.dropdown-menu').toggleClass('show');
        });
    });
</script>

<script>
    CKEDITOR.replace('contents', {
        allowedContent: true, // Allow all HTML tags
        versionCheck: false,
        extraAllowedContent: 'p div span[*]; a[!href]; img[!src,alt,width,height];', // Specify additional allowed tags
    });
    CKEDITOR.replace('services');
    CKEDITOR.replace('bodys');
</script>
</body>
</html>
