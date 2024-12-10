<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Home Page')</title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{ asset('img/fevicon1.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/fevicon1.png') }}" type="image/x-icon">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Marcellus&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/app.min.css') }}"> -->
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{ asset('css/layerslider.min.css') }}">
    <!-- jQuery DatePicker -->
    <link rel="stylesheet" href="{{ asset('css/jquery.datetimepicker.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .nav-tabs .nav-link {
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 8px 16px;
            cursor: pointer;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }
        /* Ensure modal has a high z-index to appear above other content */
        .modal {
            z-index: 1050; /* Higher than other elements */
            position: fixed; /* Fix the modal position to the screen */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Optional: darken the background */
        }
        /* Default height for larger screens */
        .vs-hero-carousel {
            width: 100% !important;
            height: 520px !important; /* Default height for larger screens */
            background: #ccc; /* For demo purposes */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        

   /* Styles for screens up to 768px */
    @media (max-width: 768px) {
        .vs-hero-carousel {
            height: 40vh !important; /* Set carousel height for mobile */
        }

        .ls-wrapper .ls-bg-outer {
            width: 320px !important; /* Fixed width */
            min-height: 144px !important; /* Ensure minimum height */
        }

        .ls-wrapper.ls-bg-outer img {
            height: 330px !important; 
            object-fit: cover; 
        }

        section.space-top.space-extra-bottom {
            padding-top: 10px !important;
            padding-bottom: 10px !important;
            margin-top: 10px;
        }
        .ls-wrapper.ls-in-out.ls-hide-on-tablet.ls-hide-on-desktop{
            margin-top: 73px !important;
        }
        span.inner-text {
            margin-top: 8px;
        }

        .vs-btn.style10{
            margin:2px 0 25px 5px;
        }
        .header_logo{
            width: 125px !important;
            height: 77px !important;
            padding:10px!important;
        }
        .logo_img{
            padding:0;
            margin: auto;
        }

        .mob-button {
            padding: 10px!important;
            margin-bottom: 10px!important;
        }

        .mob-button-toggle{
            width: 34px;
            height: 34px;
            margin-bottom: 10px;
        }
        .footer-logo{
            text-align: center;
        }
        .footer_logo{
            height: 150px!important;
            width: 150px!important;
        }
        .footer-widget {
            margin-bottom: 40px;
        }
    }

    .footer_logo{
        height: 240px; 
        width: 240px;
    }

    .mob-button {
        padding: 15px;
        margin-bottom: 10px;
    }

    /* .mob-button-toggle{
        width: 45px;
        height: 45px;
        margin-bottom: 10px;
    } */

    .header_logo{
        width:165px;
        padding:5px;
    }

    /* Styles for screens larger than 768px */
    @media (min-width: 769px) {
        .vs-hero-carousel {
            height: 70vh !important; /* Increase carousel height for larger screens */
        }

        .ls-wrapper .ls-bg-outer {
            width: 100%; /* Take full width for larger screens */
            min-height: 570px !important; /* Increase the height */
        }

        .ls-wrapper.ls-bg-outer img {
            height: 610px !important; /* Increase image height */
            object-fit: cover; /* Maintain image fit */
        }

        section.space-top.space-extra-bottom {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
    }

    #galleryContent {
        height: auto !important; 
        position: relative !important; 
    }

    .btn-close i {
        font-size: 32px;
        transition: color 0.3s, transform 0.3s;
    }
    .btn-close i:hover {
        color: red;
        transform: scale(1.2);
    }
        
    </style>
</head>


<body class="home-4">


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<!-- Include the Header -->
@include('frontend.layouts.header')

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Include the Footer -->
@include('frontend.layouts.footer')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new MutationObserver(() => {
            const images = document.querySelectorAll('.ls-wrapper.ls-bg-outer');

            images.forEach((image, index) => {
                // Check screen width
                if (window.innerWidth <= 768) {
                    if (index === 0) { 
                        image.style.height = '300px'; /* Height for mobile screens */
                    } else {
                        image.style.height = ''; /* Default height for others */
                    }
                } else {
                    // For larger screens, reset to default
                    image.style.height = ''; 
                }
            });
        });

        // Observe the body or a specific parent container
        observer.observe(document.body, { childList: true, subtree: true });

        // Reapply styles on window resize
        window.addEventListener('resize', () => {
            const images = document.querySelectorAll('.ls-wrapper.ls-bg-outer');
            images.forEach((image, index) => {
                if (window.innerWidth > 768) {
                    if (index === 0) {
                        image.style.height = '570px';
                    } else {
                        image.style.height = '';
                    }
                } else {
                    image.style.height = '';
                }
            });
        });
    });

    $(document).ready(function() {
    // Initialize Magnific Popup for images
    $('.popup-image').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true // Enable gallery mode for images
        }
    });

    // Initialize Magnific Popup for videos
    $('.popup-video').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=', // YouTube ID parameter
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1' // Embed URL format
                }
            }
        }
    });
});

</script>




  <!--==============================
        All Js File
    ============================== -->
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Jquery -->
<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<!-- <script src="{{ asset('js/app.min.js') }}"></script> -->
<!-- Layerslider -->
<script src="{{ asset('js/layerslider.utils.js') }}"></script>
<script src="{{ asset('js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('js/layerslider.kreaturamedia.jquery.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Parallax Scroll -->
<script src="{{ asset('js/universal-parallax.min.js') }}"></script>
<!-- Wow.js') }} Animation -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- jQuery Datepicker -->
<script src="{{ asset('js/jquery.datetimepicker.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- Isotope Filter -->
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<!-- Main Js File -->
<script src="{{ asset('js/main.js') }}"></script>



<script>
    
    $(document).ready(function () {
        // Set the number of items to fetch per request
        var itemsPerPage = 5;

        // Function to fetch and display media items
        function fetchMedia(filter, offset = 0) {
            $.ajax({
                url: '/fetch-media',
                method: 'GET',
                data: { filter: filter, offset: offset, limit: itemsPerPage },
                dataType: 'json',
                success: function (response) {
                    if (offset === 0) {
                        $('#galleryContent').empty(); // Clear previous items for new filter
                    }

                    // Append the fetched items to the gallery
                    response.mediaItems.forEach(function (item) {
                        var galleryItem = `
                            <div class="col-sm-6 col-lg-4 col-xxl-auto filter-item ${item.type}">
                                <div class="gallery-style3 image-scale-hover">
                                    ${item.type === 'image'
                                        ? `<a href="/storage/${item.file_path}" target="_blank" class="icon-btn popup-image"><i class="far fa-eye"></i></a>
                                        <img src="/storage/${item.file_path}" alt="${item.title}" class="w-100">`
                                        : `<a href="/storage/${item.file_path}" target="_blank" class="icon-btn popup-video"><i class="far fa-play-circle"></i></a>
                                        <img src="/img/video_thumbnail.png" alt="${item.title}" class="w-100 video-thumbnail">`}
                                </div>
                            </div>`;
                        $('#galleryContent').append(galleryItem);
                    });

                    // Handle the "View More" button visibility
                    if (response.remainingCount > 0) {
                        $('#viewMoreBtn').show().data('offset', offset + itemsPerPage).data('filter', filter);
                    } else {
                        $('#viewMoreBtn').hide();
                    }
                },
                error: function () {
                    alert('Failed to fetch media items. Please try again.');
                },
            });
        }

        // Initial fetch for "All" filter
        fetchMedia('all');

        // On tab click
        $('#galleryTabs button').on('click', function () {
            var filter = $(this).data('filter'); // Get the filter type

            // Remove the 'active' class from all tabs
            $('#galleryTabs button').removeClass('active');

            // Add the 'active' class to the clicked tab
            $(this).addClass('active');

            // Fetch and display the items for the selected filter
            fetchMedia(filter);
        });

        // When "View More" is clicked, fetch more items
        $('#viewMoreBtn').on('click', function () {
            var filter = $(this).data('filter'); // Get the current filter
            var offset = $(this).data('offset'); // Get the current offset

            // Fetch more items for the current filter
            fetchMedia(filter, offset);
        });
    });
    
    $(window).on("load",function () {
        const allTabButton = $('#all-tab');

        if (allTabButton.length) {
            console.log('Button found! Triggering click...');
            allTabButton.trigger('click'); // Trigger the click event
        } else {
            console.log('Button not found!');
        }

        // Add a click event listener to confirm the event works
        $('#all-tab').on('click', function () {
            console.log('All tab button clicked!');
            // Add your actual logic here if needed
        });
    });
</script>

<script>
    document.getElementById('saveButton').addEventListener('click', function () {
        const form = document.getElementById('userForm');

        // Check if the form is valid
        if (form.checkValidity() === false) {
            form.classList.add('was-validated');
            return;
        }

        // Prepare the form data
        const formData = new FormData(form);

        // Send AJAX request
        fetch("{{ route('submit-intake-form') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData
        })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Network response was not ok');
            }
        })
        .then(data => {
            // SweetAlert success notification
            console.log(193, data);
            
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: data.message,
                    showConfirmButton: false,
                    timer: 2000
                });
                form.reset();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: data.message
                });
            }

            form.reset(); // Reset the form
            form.classList.remove('was-validated'); // Clear validation
            const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
            modal.hide(); // Hide the modal
        })
        .catch(error => {
            console.error('There was a problem with the submission:', error);
            
            // SweetAlert error notification
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Failed to submit data. Please try again.'
            });
        });
    });


    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
        if (!localStorage.getItem('modalShown')) {
            // Show the modal
            var myModal = new bootstrap.Modal(document.getElementById('bioenergeticModal'), {});
            myModal.show();

            // Set the flag in local storage
            // localStorage.setItem('modalShown', 'true');

            // Make an AJAX call to store the visit count
            fetch('/api/store-visit-count', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // For Laravel
            },
            body: JSON.stringify({
                visit_type: 'modal_open'
            })
            })
            .then(response => response.json())
            .then(data => {
            console.log('Visit count updated:', data);
            })
            .catch(error => {
            console.error('Error updating visit count:', error);
            });
        }
        }, 5000); // 5 seconds delay
    });

    function handleClick(event) {
        // Set the flag in local storage
        localStorage.setItem('modalShown', 'true');
        
        // Allow redirection to the href
        window.location.href = event.target.href;
    }
</script>


</body>

</html>



   