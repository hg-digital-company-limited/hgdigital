<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="description" content="Automec - Car Service & Repair HTML5 Template" />
    <meta name="keywords"
        content="auto care, auto center, auto repair, auto service, auto shop, automotive, car mechanic, car repair, car service, car shop, garage, mechanic, mechanic auto shop, mechanic workshop" />
    <meta name="author" content="ThemeEarth" />

    <title>Thiết Kế Website Chuyên Nghiệp - HG Digital</title>
    <meta name="description" content="Chuyên cung cấp dịch vụ thiết kế website chuyên nghiệp, tối ưu SEO, giá rẻ tại HG Digital.">
    <meta name="keywords" content="thiết kế website, dịch vụ thiết kế web, website chuyên nghiệp">
    <meta name="google-site-verification" content="Gv7agN348ttTOuMfVTN2Kb3ioHwHrrMxctDM1-Hnjwg" />
    <link rel="icon" type="image/png" href="/logo/icon.png" />

    <link rel="apple-touch-icon" href="/logo/icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/logo/icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/logo/icon.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/logo/icon.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/logo/icon.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/logo/icon.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/logo/icon.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/logo/icon.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/logo/icon.png" />

    <meta property="og:image" content="https://www.hgdigital.site/assets/img/logo/banner.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/automec/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/automec/css/fontawesome.min.css" />
    <link rel="stylesheet" href="/automec/css/magnific-popup.css" />
    <link rel="stylesheet" href="/automec/css/slick.css" />
    <link rel="stylesheet" href="/automec/css/meanmenu.css" />
    <link rel="stylesheet" href="/automec/css/nice-select.css" />
    <link rel="stylesheet" href="/automec/css/animate.css" />
    <link rel="stylesheet" href="/automec/css/style.css" />

    @livewireStyles
</head>

<body>
    <!-- Preloader Start !-->
    {{-- <div id="preloader" wire:ignore>
        <div id="preloader-status">
            <div class="preloader-image">
                <img src="/automec/images/icon/preloader.gif" alt="preeloader" />
            </div>
        </div>
    </div> --}}
    <!-- Preloader End !--><!-- Header Start !-->
    @livewire('inc.header')
    <!-- Header End !-->

    {{ $slot }}

    <div class="subscribe-area style-1 background-red">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="subscribe-image">
                        <img src="/automec/images/section-bg/subscribe-bg.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="te-content-wrapper">
                        <h2 class="te-subscribe-title text-white">Get Free Estimate</h2>
                        <p class="text text-white">Lorem Ipsum is simply is dumiomy is text Lorem Ipsum </p>
                        <div class="te-subscribe-form-wrapper">
                            <div class="te-subscribe-form-widget style-2">
                                <form>
                                    <div class="mc4wp-form-fields">
                                        <div class="single-field">
                                            <input type="email" placeholder="Enter E-mail" />
                                        </div>
                                        <button class="submit-btn" type="submit">SUBSCRIBE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- Start Footer !-->
    @livewire('inc.footer')
    <!--- End Footer !--><!-- Menu sidebar Section Start -->
    <div class="te-menu-sidebar-area">
        <div class="te-menu-sidebar-wrapper">
            <div class="te-menu-sidebar-close">
                <button class="te-menu-sidebar-close-btn" id="menu_sidebar_close_btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="te-menu-sidebar-content">
                <div class="te-menu-sidebar-logo">
                    <a href="index.php">
                        <img src="/logo/dark.png" alt="logo" />
                    </a>
                </div>
                <div class="te-mobile-nav-menu"></div>
                <div class="te-menu-sidebar-content">
                    <div class="te-menu-sidebar-single-widget">
                        <div class="about-info text-white">
                            <p>Tempor turpis nisl dui ut facilisi tempus at dew euismod. Lacinia facilisis ullamcorper
                                tellus wai netus rutrum cras venenatis </p>
                        </div>
                    </div>
                    <div class="te-menu-sidebar-single-widget">
                        <h5 class="te-menu-sidebar-title">Contact Info</h5>
                        <div class="te-header-contact-info">
                            <span><i class="fa-solid fa-location-dot"></i>6391 Elgin St. Celina, 10299</span>
                            <span><a href="mailto:info@example.com"><i
                                        class="fa-solid fa-envelope"></i>info@example.com</a> </span>
                            <span><a href="tel:+123-456-7890"><i class="fa-solid fa-phone"></i>+123-456-7890</a></span>
                        </div>
                        <div class="te-social-profile">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu sidebar Section Start -->
    <div class="te-body-overlay"></div><!-- Header Search Bar Modal Start -->
    <div class="te-search-form-wrapper">
        <div class="te-search-form-inner">
            <div class="te-search-content-filed">
                <form role="search" method="get" class="te-search-form" action="#">
                    <div class="te-search-form-input">
                        <div class="te-search-icon">
                            <i class="fa-light fa-magnifying-glass"></i>
                        </div>
                        <input type="search" placeholder="Search" />
                        <button class="te-theme-btn" type="submit" title="Search" aria-label="Search">Search</button>
                    </div>
                </form>
                <span class="te-search-close">
                    <i class="fa-light fa-xmark"></i>
                </span>
            </div>
        </div>
    </div>
    <!-- Header Search Bar Modal End --><!-- Scroll Up Section Start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Scroll Up Section End -->


    @livewireScripts

    <script src="/automec/js/jquery.min.js"></script>
    <script src="/automec/js/bootstrap.min.js"></script>
    <script src="/automec/js/jquery.nice-select.min.js"></script>
    <script src="/automec/js/slick.min.js"></script>
    <script src="/automec/js/jquery.counterup.min.js"></script>
    <script src="/automec/js/waypoints.js"></script>
    <script src="/automec/js/jquery.meanmenu.min.js"></script>
    <script src="/automec/js/jquery.magnific-popup.min.js"></script>
    <script src="/automec/js/inview.min.js"></script>
    <script src="/automec/js/wow.js"></script>
    <script src="/automec/js/tilt.jquery.js"></script>
    <script src="/automec/js/isotope.min.js"></script>
    <script src="/automec/js/jquery.imagesloaded.min.js"></script>
    <script src="/automec/js/scrolltotop.min.js"></script>
    <script src="/automec/js/custom.js"></script>
</body>

</html>