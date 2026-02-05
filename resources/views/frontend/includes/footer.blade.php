<?php
$homeFooter = App\Models\Setting::where('page','home')->pluck('value','key')->toArray();
$logo =  asset('assets/frontend/images/footer-logo.png');
if($homeFooter['footer_logo']){

    if(file_exists(SETTING_IMAGE_PATH.$homeFooter['footer_logo'])){
        $logo = SETTING_IMAGE_ROOT.$homeFooter['footer_logo'];
    }
}

$services = App\Models\Expertise::select('title','slug')->get();

?>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row mrgn_40b g-lg-0 g-4">
                <div class="col-lg-4 col-12">
                    <div class="footer-logo mrgn_35b">
                        <a href="javascript:;">
                            <img src="{!! $logo !!}" alt="svipl infocom pvt ltd" class="d-block img-fluid">
                        </a>
                    </div>
                    <div class="footer-description max-w-306 mrgn-lg_35b mrgn-md_25b mrgn_15b">
                        <p class="text-grey-3 font-20 font-lg-18 font-md-16">{!! $homeFooter['footer_about'] !!}</p>
                    </div>
                    <div class="footer-social-icons">
                        <ul class="list-none d-flex justify-content-start align-items-center ps-0 gap-20">
                            <li>
                                <a href="{!! $homeFooter['fb'] !!}">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{!! $homeFooter['instagram'] !!}">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{!! $homeFooter['twitter'] !!}">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{!! $homeFooter['linkedin'] !!}">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                    <div class="footer-links">
                        <h4 class="font-32 font-lg-28 font-md-25 font-weight-600 text-black mrgn-lg_30b mrgn_15b">About Us</h4>
                        <ul class="list-none ps-0 mb-0">
                            <li><a href="{!! route('home') !!}">Home</a></li>
                            <li><a href="{!! route('services') !!}">Services</a></li>
                            <li><a href="{!! route('our-portfolio') !!}">Portfolio</a></li>
                            <li><a href="{!! route('blog') !!}">Blog</a></li>
                            <li><a href="{!! route('contact') !!}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-links">
                        <h4 class="font-32 font-lg-28 font-md-25 font-weight-600 text-black mrgn-lg_30b mrgn_15b">Services</h4>
                        <ul class="list-none ps-0 mb-0">
                            @foreach ($services as $ser)

                            <li><a href="{!! route('services-detail', $ser->slug) !!}">{{ $ser->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <h4 class="font-32 font-lg-28 font-md-25 font-weight-600 text-black mrgn-lg_30b mrgn_15b">Contact Us</h4>
                    <div class="footer-contact-info">
                        <div class="address-info d-flex mb-4">
                            <div class="icon-div me-3">
                                <i class="bi bi-pin-map-fill font-25 font-lg-20 gradient-text"></i>
                            </div>
                            <div class="info-div">
                                <p class="text-grey-3 font-lg-16 font-20">{!! $homeFooter['address'] !!}</p>
                            </div>
                        </div>
                        <div class="call-info d-flex mb-4">
                            <div class="icon-div me-3">
                                <i class="bi bi-telephone-fill font-25 font-lg-20 gradient-text"></i>
                            </div>
                            <div class="info-div">
                                <a href="tel:{!! $homeFooter['phone1'] !!}" class="text-grey-3 font-lg-16 font-20">{!! $homeFooter['phone1'] !!}</a><br>
                                <a href="tel:{!! $homeFooter['phone2'] !!}" class="text-grey-3 font-lg-16 font-20">{!! $homeFooter['phone2'] !!}</a>
                            </div>
                        </div>
                        <div class="call-info d-flex">
                            <div class="icon-div me-3">
                                <i class="bi bi-envelope-fill font-25 font-lg-20 gradient-text"></i>
                            </div>
                            <div class="info-div">
                                <a href="mailto:{!! $homeFooter['email'] !!}" class="text-grey-3 font-lg-16 font-20">{!! $homeFooter['email'] !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer-hr">
            <p class="font-20 text-center font-lg-18 font-md-16">
                Copyright © 2025 Siddhi Vinayak Infocom Pvt. Ltd. All rights reserved.
            </p>
        </div>
    </footer>
    <!-- End Footer Section -->

