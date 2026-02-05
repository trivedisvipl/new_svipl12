@extends('frontend.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! 'Portfolio' !!}
@stop
@section('styles')


@stop
{{-- Content --}}
@section('content')

    <!-- Breadcrumb -->
    <div class="container nav-breadcrumb-section">
        <nav aria-label="breadcrumb" class="font-20">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Contact Section -->
    <section class="contact-section pd_60b">
        <div class="container">
            <div class="row g-0 align-items-center justify-content-center">
                <div class="col-xl-4 col-lg-5 col-12">
                    <div class="contact-box">
                        <div class="contact-box-circle">
                            <span>O</span>
                            <span>R</span>
                        </div>
                        <h3 class="text-black font-weight-600 mb-0 font-40 font-lg-35 font-md-30 mrgn_50b " data-aos="fade-up">
                            Get In <span class="text-orange">Touch</span>
                        </h3>
                        <div class="contact-info d-flex flex-column gap-15 mrgn-xl_60b mrgn_40b" data-aos="fade-up" data-aos-delay="100">
                            <div class="call-info d-flex align-items-center">
                                <div class="icon-div me-3">
                                    <i class="bi bi-telephone-fill font-24 font-lg-20 gradient-text"></i>
                                </div>
                                <div class="info-div">
                                    <a href="tel:{!! $settings['phone1'] !!}" class="text-grey-3 font-lg-16 font-20">{!! $settings['phone1'] !!}</a>
                                </div>
                            </div>
                            <div class="call-info d-flex align-items-center">
                                <div class="icon-div me-3">
                                    <i class="bi bi-telephone-fill font-24 font-lg-20 gradient-text"></i>
                                </div>
                                <div class="info-div">
                                    <a href="tel:{!! $settings['phone2'] !!}" class="text-grey-3 font-lg-16 font-20">{!! $settings['phone2'] !!}</a>
                                </div>
                            </div>
                            <div class="call-info d-flex align-items-center">
                                <div class="icon-div me-3">
                                    <i class="bi bi-envelope-fill font-24 font-lg-20 gradient-text"></i>
                                </div>
                                <div class="info-div">
                                    <a href="mailto:{!! $settings['email'] !!}" class="text-grey-3 font-lg-16 font-20">{!! $settings['email'] !!}</a>
                                </div>
                            </div>
                            <h4 class="pd_40r pd_40l font-weight-600 text-grey-3 font-20 font-lg-18 mrgn_10t">Head Office</h4>
                            <div class="address-info d-flex">
                                <div class="icon-div me-3">
                                    <i class="bi bi-pin-map-fill font-24 font-lg-20 gradient-text"></i>
                                </div>
                                <div class="info-div">
                                    <p class="text-grey-3 font-lg-16 font-20">{!! $settings['address'] !!}</p>
                                </div>
                            </div>
                            <div class="address-info d-flex">
                                <div class="icon-div me-3">
                                    <i class="bi bi-pin-map-fill font-24 font-lg-20 gradient-text"></i>
                                </div>
                                <div class="info-div">
                                    <p class="text-grey-3 font-lg-16 font-20">{!! $settings['address_2'] !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-social-icons pd-xl_30t">
                            <ul class="list-none d-flex justify-content-start align-items-center ps-0 gap-20 mb-0">
                                <li>
                                    <a href="{!! $settings['fb'] !!}" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! $settings['instagram'] !!}" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! $settings['twitter'] !!}" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! $settings['linkedin'] !!}" target="_blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-12">
                    <div class="contact-form-box">
                        <h3 class="text-black font-weight-500 mb-0 font-32 font-lg-28 font-md-23 mrgn_40b " data-aos="fade-up">
                            Send us a Message
                        </h3>
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="100">
                            @include('frontend.includes.notifications')


                            {!! html()->form('POST', route('contactSave'))->id('career-form')->acceptsFiles()->open() !!}
                            <input type="hidden" name="g-recaptcha-response" value="" id="gtoken">
                                <div class="row row-gap-40">
                                    <div class="col-12">
                                           {{ html()->text('name', old('name'))->class('form-control')->placeholder('Name *') }}
                                @error('name')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror
                                        {{-- <input type="text" class="form-control" id="name" placeholder="Name *"> --}}
                                    </div>
                                    <div class="col-12">
                                          {{ html()->email('email', old('email'))->class('form-control')->placeholder('Email Address *') }}
                                @error('email')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror
                                        {{-- <input type="email" class="form-control" id="email" placeholder="Email Address *"> --}}
                                    </div>
                                    <div class="col-12">
                                         {!! html()->text('phone',old('phone'))->class('form-control')->placeholder('Phone Number *')->attribute('onkeypress', 'return event.charCode >= 45 && event.charCode <= 57') !!}

                                @error('phone')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror
                                        {{-- <input type="text" class="form-control" id="phone" placeholder="Phone Number *" onkeypress="return event.charCode >= 45 && event.charCode <= 57"> --}}
                                    </div>
                                    <div class="col-12">
                                         {{ html()->textarea('message', old('message'))->class('form-control')->placeholder('Message *') }}
                                          @error('message')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror
                                        {{-- <textarea name="message" id="message" class="form-control" placeholder="Message *">Message *</textarea> --}}
                                    </div>
                                     <div class="col-12">
                                          {!! html()->submit('Let\'s Talk')->class('btn black-btn') !!}

                                    </div>
                                </div>
                              {{ html()->form()->close() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="container-fluid px-0">
            <div class="map-div">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.811806880158!2d70.76586107615171!3d22.322956042072196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca27f44eb8bd%3A0x3c58c28d4bbdd5b4!2sSiddhi%20Vinayak%20Infocom%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1767958551063!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
@stop

@section('scripts')

    <script async src="https://www.google.com/recaptcha/api.js?render={!! env('GOOGLE_RECAPTCHA_KEY') !!}"></script>

    <script>
        function getRecaptcha() {
            grecaptcha.ready(function() {
                grecaptcha.execute("{!! env('GOOGLE_RECAPTCHA_KEY') !!}", {
                    action: 'submitContact'
                }).then(function(token) {
                    $('#gtoken').val(token); // here i set value to hidden field
                });
            });
        }

        $(document).ready(function() {
            getRecaptcha();
        });

    </script>
@endsection
