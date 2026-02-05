<?php
$homeHeader = App\Models\Setting::where('page','home')->pluck('value','key')->toArray();
$logo =  asset('assets/frontend/images/header_logo.png');
if($homeHeader['header_logo']){

    if(file_exists(SETTING_IMAGE_PATH.$homeHeader['header_logo'])){
        $logo = SETTING_IMAGE_ROOT.$homeHeader['header_logo'];
    }
}

?>

   <!-- Header Section -->
    <header class="main-header">
        <div class="top-header">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-lg-5">
                        <div class="top-header-links">
                            <a href="{!! $homeHeader['fb'] !!}">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="{!! $homeHeader['instagram'] !!}">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="{!! $homeHeader['twitter'] !!}">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="{!! $homeHeader['linkedin'] !!}">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="header-contact-links">
                            <div class="header-tel-link ">
                                <img src="{!! asset('assets/frontend/images/telephone-fill.png') !!}" alt="telphone" class="h-100 d-block">
                                <div>
                                    <a href="tel:{!! $homeHeader['phone1'] !!}">{!! $homeHeader['phone1'] !!}</a>
                                    <span> / </span>
                                    <a href="tel:{!! $homeHeader['phone2'] !!}">{!! $homeHeader['phone2'] !!}</a>
                                </div>
                            </div>
                            <div class="header-email-link">
                                <img src="{!! asset('assets/frontend/images/envelope-fill.png') !!}" alt="mail" class="h-100 d-block">
                                <a href="mailto:{!! $homeHeader['email'] !!}">{!! $homeHeader['email'] !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-nav  animate__animated slideIn">
            <div class="header-main">
                <div class="logo-box">
                    <a href="{!! route('home') !!}">
                        <img src="{!! $logo !!}" alt="Svipl" class="header-logo">
                    </a>
                </div>
                <div class="header-menu-links">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{!! route('home') !!}">Home</a>
                        </li>
                        <li class="nav-item has-dropdown">
                            <a class="nav-link active" href="#" role="button">
                                About Us
                            </a>
                            <ul class="dropdown-panel">
                                <li><a class="dropdown-item" href="{!! route('why-us') !!}">Why Choose</a></li>
                                <li><a class="dropdown-item" href="{!! route('mission-vision') !!}">Mission</a></li>
                                <li><a class="dropdown-item" href="{!! route('our-process') !!}">Development Process</a></li>
                                <li><a class="dropdown-item" href="#">Our Team</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('our-portfolio') ? 'active' : '' }}" href="{!! route('our-portfolio') !!}">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{!! route('services') !!}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{!! route('blog') !!}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('careers') ? 'active' : '' }}" href="{!! route('careers') !!}">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{!! route('contact') !!}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mobile-menu  animate__animated slideIn">
            <div class="mobile-menu-header d-flex justify-content-between align-items-center">
                <div class="logo-box">
                    <a href="javascript:;">
                        <img src="{!! $logo !!}" alt="Svipl" class="header-logo">
                    </a>
                </div>
                <div class="mobile-menu-icon">
                    <button class="border-0 bg-transparent menu-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                        <div class="burger">
                            <div class="strip burger-strip">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
           <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header px-5 pt-5">
                    <button type="button" class="btn-close removeBurger" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="list-unstyled">
                        <li class="nav-item">
                            <a href="{!! route('home') !!}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a href="javascript:;" class="nav-link" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu position-relative">
                                <li><a class="dropdown-item" href="{!! route('why-choose') !!}">Why choose</a></li>
                                <li><a class="dropdown-item" href="{!! route('mission-vision') !!}">Our Mission & Vision</a></li>
                                <li><a class="dropdown-item" href="{!! route('development-process') !!}">Devlopment Process</a></li>
                                <li><a class="dropdown-item" href="{!! route('our-team') !!}">Our Team</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{!! route('our-portfolio') !!}" class="nav-link {{ request()->routeIs('our-portfolio') ? 'active' : '' }}">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="{!! route('services') !!}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{!! route('blog') !!}" class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{!! route('careers') !!}" class="nav-link {{ request()->routeIs('careers') ? 'active' : '' }}">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a href="{!! route('contact') !!}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->
