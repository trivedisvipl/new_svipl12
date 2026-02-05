@extends('frontend.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! 'Mission & Vision' !!}
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
                <li class="breadcrumb-item"><a href="#">About Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mission & Vision</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Vision Section -->
    <section class="vision-section pd_60b">
        <div class="container">
            <div class="pill-box mrgn_35b">
                Vision
            </div>
            <h3 class="text-black font-weight-600 mrgn_35b font-40  font-lg-35 font-md-30">
                Our <span class="text-orange"> Vision</span>
            </h3>
            <div class="row g-lg-5">
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="d-flex flex-column gap-35 text-grey-2 font-20 font-md-18 font-sm-16 text-justify ul-gap">
                        {!! $settings['vision'] !!}

                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <figure class="animation-box pd_55t pd_55b box-square" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                         @if(file_exists(SETTING_IMAGE_PATH.$settings['vision_image']))

                             <img src="{{ SETTING_IMAGE_ROOT.$settings['vision_image'] }}" alt="our vision" class="object-fit-cover mx-auto d-block max-w-535 h-470 w-100 mx-auto br-30 wow fadeIn" data-wow-duration="2s" data-tilt data-tilt-max="5" data-tilt-speed="1000">

                        @else

                            <img src="{!! asset('assets/frontend/images/vision.jpg') !!}" alt="our vision" class="object-fit-cover mx-auto d-block max-w-535 h-470 w-100 mx-auto br-30 wow fadeIn" data-wow-duration="2s" data-tilt data-tilt-max="5" data-tilt-speed="1000">

                        @endif

                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- End Vision section -->

    <!-- Mission Section -->
    <section class="mission-section pd_60b pd_60t">
        <div class="container">
            <div class="d-flex flex-column align-items-lg-end ">
                <div class="pill-box mrgn_35b">
                    Mission
                </div>
                <h3 class="text-black font-weight-600 mrgn_35b font-40  font-lg-35 font-md-30">
                    Our <span class="text-orange"> Mission</span>
                </h3>
            </div>
            <div class="row g-lg-5">
                <div class="col-lg-6 col-12 order-lg-1 order-2">
                    <figure class="animation-box pd_55t pd_55b box-square" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                         @if(file_exists(SETTING_IMAGE_PATH.$settings['mission_image']))

                             <img src="{{ SETTING_IMAGE_ROOT.$settings['mission_image'] }}" alt="our mission" class="object-fit-cover mx-auto d-block max-w-535 h-470 w-100 mx-auto br-30 wow fadeIn" data-wow-duration="2s" data-tilt data-tilt-max="5" data-tilt-speed="1000">

                        @else

                            <img src="{!! asset('assets/frontend/images/mission.jpg') !!}" alt="our vision" class="object-fit-cover mx-auto d-block max-w-535 h-470 w-100 mx-auto br-30 wow fadeIn" data-wow-duration="2s" data-tilt data-tilt-max="5" data-tilt-speed="1000">

                        @endif

                    </figure>
                </div>
                <div class="col-lg-6 col-12 order-lg-2 order-1">
                     <div class="d-flex flex-column gap-35 text-grey-2 font-20 font-md-18 font-sm-16 text-justify ul-gap">
                        {!! $settings['mission'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mission Section -->

    <!-- Core Section -->
    <section class="core-section ">
        <div class="container pd_60t">
            <div class="pill-box mrgn_35b">
                Our Values
            </div>
            <h3 class="text-black font-weight-600 mrgn_35b font-40  font-lg-35 font-md-30">
                Our <span class="text-orange"> Core Values</span>
            </h3>
            <div class="row g-md-5 pd_60t pd_60b">
                <div class="col-lg-3 col-md-6 col-12 d-flex justify-content-center mb-lg-0 mb-4">
                    <div class="d-flex justify-content-center align-items-center flex-column max-w-262">
                        <figure class="value-img-box mrgn_30b">
                            @if(file_exists(SETTING_IMAGE_PATH.$settings['values_image_1']))
                                <img src="{{ SETTING_IMAGE_ROOT.$settings['values_image_1'] }}" alt="team">
                            @else
                                <img src="{!! asset('assets/frontend/images/icons/team.svg') !!}" alt="team">
                            @endif
                        </figure>
                        <p class="text-grey-2 text-center font-20 font-lg-18 font-md-16"> {!! $settings['values_1'] !!}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12  d-flex justify-content-center mb-lg-0 mb-4">
                    <div class="d-flex justify-content-center align-items-center flex-column max-w-262">
                        <figure class="value-img-box mrgn_30b">
                             @if(file_exists(SETTING_IMAGE_PATH.$settings['values_image_2']))
                                <img src="{{ SETTING_IMAGE_ROOT.$settings['values_image_2'] }}" alt="monitering">
                            @else
                                <img src="{!! asset('assets/frontend/images/icons/monitering.svg') !!}" alt="monitering">
                            @endif

                        </figure>
                        <p class="text-grey-2 text-center font-20 font-lg-18 font-md-16">{!! $settings['values_2'] !!}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12  d-flex justify-content-center mb-lg-0 mb-4">
                    <div class="d-flex justify-content-center align-items-center flex-column max-w-262">
                        <figure class="value-img-box mrgn_30b">
                            @if(file_exists(SETTING_IMAGE_PATH.$settings['values_image_3']))
                                <img src="{{ SETTING_IMAGE_ROOT.$settings['values_image_3'] }}" alt="promisise">
                            @else
                                <img src="{!! asset('assets/frontend/images/icons/hand-shake.svg') !!}" alt="promisise">
                            @endif

                        </figure>
                        <p class="text-grey-2 text-center font-20 font-lg-18 font-md-16">{!! $settings['values_3'] !!}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12  d-flex justify-content-center mb-lg-0 mb-4">
                    <div class="d-flex justify-content-center align-items-center flex-column max-w-262">
                        <figure class="value-img-box mrgn_30b">
                            @if(file_exists(SETTING_IMAGE_PATH.$settings['values_image_4']))
                                <img src="{{ SETTING_IMAGE_ROOT.$settings['values_image_4'] }}" alt="development">
                            @else
                                <img src="{!! asset('assets/frontend/images/icons/book.svg') !!}" alt="development">
                            @endif

                        </figure>
                        <p class="text-grey-2 text-center font-20 font-lg-18 font-md-16">{!! $settings['values_4'] !!}</p>
                    </div>
                </div>
            </div>
            <hr class="footer-divider">
        </div>
    </section>
    <!-- End Core Section -->


@stop

@section('scripts')
    <script>




    </script>
@endsection
