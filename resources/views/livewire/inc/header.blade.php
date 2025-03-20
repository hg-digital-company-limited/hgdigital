<header class="header-area style-1">
    <div class="header-area-wrapper">
        <div class="logo-wrapper d-flex align-items-center">
            <div class="te-logo">
                <a wire:navigate href="{{ route('home') }}" class="te-standard-logo">
                    <img src="/logo/bg.png" alt="logo" style="
                    max-width: 200px;
                "/>
                </a>
            </div>
        </div>

        <div class="header-inner">
            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="te-header-top-wrapper">
                                <div class="header-top-info">
                                    <div class="te-header-contact-info">
                                        <span><a href="mailto:hgdigital.company@gmail.com"><i
                                                    class="fa-solid fa-envelope"></i>hgdigital.company@gmail.com</a> </span>
                                        <span><i class="fa-solid fa-location-dot"></i>67 Đường ĐHT 22, Phường Đông Hưng Thuận, Quận 12, HCM</span>
                                        <span><i class="fa-solid fa-clock"></i>Sunday - Friday: 9 am - 8 pm</span>
                                    </div>
                                </div>
                                <div class="header-top-info">
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
            </div>
            <!-- Header Top End -->
            <!-- Header Nav Menu Start -->
            <div class="te-header-menu-area te-sticky-header">
                <div class="container">
                    <div class="row">

                        <div class="col-12 d-flex align-items-center justify-content-end">
                            <div class="te-logo-wrapper">
                                <div class="te-logo">
                                    <a wire:navigate href="{{ route('home') }}" class="te-sticky-logo">
                                        <img src="/logo/dark.png" alt="logo">
                                    </a>
                                    <a wire:navigate href="{{ route('home') }}" class="te-retina-logo">
                                        <img src="/logo/dark.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="te-menu d-inline-block">
                                <nav id="main-menu" class="te-main-menu">
                                    <ul>
                                        <li class=" active">
                                            <a wire:navigate href="{{ route('home') }}">Trang chủ</a>
                                        </li>
                                        <li><a wire:navigate href="{{ route('about') }}">Về Chúng Tôi</a></li>
                                        <li class="te-dropdown">
                                            <a wire:navigate href="{{ route('services') }}">Dịch Vụ</a>
                                            <ul class="te-submenu">
                                                @foreach($services as $service)
                                                <li>
                                                    <a wire:navigate href="{{ route('service', ['slug' => $service->slug]) }}">
                                                        {{ $service->name }}
                                                    </a>
                                                </li>
                                            @endforeach

                                            </ul>
                                        </li>
                                        <li class="te-dropdown">
                                            <a wire:navigate href="{{ route('projects') }}">Dự Án</a>
                                            <ul class="te-submenu">
                                                <li><a wire:navigate href="{{ route('projects') }}">Project Page</a></li>
                                                <li><a wire:navigate href="{{ route('project', ['slug' => 'project-details']) }}">Project Details Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="te-dropdown">
                                            <a wire:navigate href="{{ route('projects') }}">Mẫu giao diện</a>
                                            <ul class="te-submenu">
                                                <li><a wire:navigate href="{{ route('projects') }}">Project Page</a></li>
                                                <li><a wire:navigate href="{{ route('project', ['slug' => 'project-details']) }}">Project Details Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="te-dropdown">
                                            <a wire:navigate href="{{ route('blogs') }}">Tin Tức</a>
                                            <ul class="te-submenu">
                                                <li><a wire:navigate href="{{ route('blogs') }}">Blog Page</a></li>
                                                <li><a wire:navigate href="{{ route('blog', ['slug' => 'blog-details']) }}">Blog Details Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a wire:navigate href="{{ route('contact') }}">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Button Start !-->
                            <div class="te-header-btn">
                                <div class="te-cta-btn">
                                    <span>Need help?</span>
                                    <a href="#"><i class="fa-solid fa-phone"></i>(307) 555-0133</a>
                                </div>
                                <a wire:navigate href="{{ route('contact') }}" class="te-quote-btn">GET A QUOTE<i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- Header Button Start !-->
                            <!-- Mobile Menu Toggle Button Start !-->
                            <div class="te-mobile-menu-bar d-lg-none text-end">
                                <a href="#" class="te-mobile-menu-toggle-btn"><i class="fal fa-bars"></i></a>
                            </div>
                            <!-- Mobile Menu Toggle Button End !-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav Menu End -->
        </div>
    </div>
    <style>
        .te-main-menu ul ul li {
    width: 278px;
}
    </style>
</header>