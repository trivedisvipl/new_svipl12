@extends('frontend.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! 'Why Us' !!}
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
                <li class="breadcrumb-item active" aria-current="page">Why Us</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Why Us Section -->
    <section class="why-us-section pd_60b">
        <div class="container">
            <div class="pill-box mrgn_35b">
                We Are Creative Agency
            </div>
            <div class="row g-lg-5 gy-5">
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3 class="text-black font-weight-600 mrgn_35b font-40  font-lg-35 font-md-30">
                        Why Choose <span class="text-orange">SVIPL</span>
                    </h3>
                    <div class="why-text">
                    {!! $settings['creative_agency_description'] !!}
                    </div>
                    {{--
                    <div class="d-flex flex-column gap-35 text-grey-2 font-20 font-md-18 ">
                        <p>
                            We have highly skilled engineers with excellent technical knowledge and experience in using the latest software standards. We have built a large pool of knowledge that we apply to deliver solutions that meet client's needs, expectations and budget. By putting our clients at the heart of everything we do, we are proud that we are still supporting our very first business client.
                        </p>
                        <p><b>18+</b> years of experience in web design & development. 100% Custom design & development. Fast projects delivery also W3C Valid XHTML and CSS Code and 100% Semantic and SEO XHTML and CSS also have Cross browser Compatible sites. Do Discounts for loyal customers and we have 98% of satisfied clients</p>
                    </div> --}}
                </div>
                <div class="col-lg-6 col-12">
                    <figure class="animation-box" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                         @if(file_exists(SETTING_IMAGE_PATH.$settings['creative_agency_image']))
                            <img src="{{ SETTING_IMAGE_ROOT.$settings['creative_agency_image'] }}" alt="" class="mx-auto d-block w-100 mx-auto wow fadeIn" data-wow-duration="2s" data-tilt data-tilt-max="5" data-tilt-speed="1000">

                        @else
                            <img src="{!! asset('assets/frontend/images/why-choose-us.jpg') !!}" alt=""  class="max-w-500 ms-auto">
                        @endif

                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->

     <section class="creative-section">
        <div class="container">
            <div class="pd_60b">
                <div class="pill-box mrgn_35b">
                    Why Choose Us
                </div>
                {!! $settings['why_choose_heading'] !!}
                {{-- <h3 class="text-black font-weight-600 mrgn_25b font-40  font-lg-35 font-md-30">
                    Why The <span>SVIPL</span> Ranked Top Among The Leading <span>Web & App Development</span> Companies
                </h3>
                <p class="text-grey-2 font-20 font-md-18 font-sm-16">
                    We love what we do and are passionate about helping our clients be  successful. We would welcome the opportunity to help you take your  business to the next level and achieve your business goals.
                </p> --}}
            </div>
            <div class="row why-list row-gap-40">
                <div class="sub-row">
                    <div class="first col-s max-w-770">
                        <div class="icon-box">
                        @if(file_exists(SETTING_IMAGE_PATH.$settings['why_choose_image_1']))
                            <img src="{{ SETTING_IMAGE_ROOT.$settings['why_choose_image_1'] }}"class="w-100 h-100" alt="Streamlined Project Management">

                        @else
                            <img src="{!! asset('assets/frontend/images/icons/icon-1.png') !!}" alt="Streamlined Project Management"  class="w-100 h-100">

                        @endif

                        </div>
                        <div class="why-text">
                            {!! $settings['why_choose_description_1'] !!}
                            {{-- <h3 class="text-black font-weight-600 mrgn_25b font-30  font-lg-25 font-md-20">
                                <span>Streamlined Project </span> Management
                            </h3>
                            <p class="text-grey-2 font-20 font-md-18 font-sm-16">
                                Project management is very crucial for efficiently handling any  project. It helps in the proper allocation of tasks and meeting  deadlines. It increases the probability of success of any project, but  if project management is executed properly.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="sub-row">
                    <div class="second col-s max-w-770">
                         <div class="icon-box">
                        @if(file_exists(SETTING_IMAGE_PATH.$settings['why_choose_image_2']))
                            <img src="{{ SETTING_IMAGE_ROOT.$settings['why_choose_image_2'] }}"class="w-100 h-100" alt="Streamlined Project Management">

                        @else
                            <img src="{!! asset('assets/frontend/images/icons/icon-2.png') !!}" alt="Streamlined Project Management"  class="w-100 h-100">

                        @endif

                        </div>
                        <div class="why-text">
                            {!! $settings['why_choose_description_2'] !!}

                            {{-- <h3 class="text-black font-weight-600 mrgn_25b font-30  font-lg-25 font-md-20">
                                A Dedicated <span>Team of Experts</span>
                            </h3>
                            <p class="text-grey-2 font-20 font-md-18 font-sm-16">
                                Our dedicated team of qualified technical engineers, developers and project managers will provide proactive services and deliver smart and tailored IT solutions to support your growth and optimize your business processes.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="sub-row">
                    <div class="third col-s max-w-770">
                        <div class="icon-box">
                             @if(file_exists(SETTING_IMAGE_PATH.$settings['why_choose_image_3']))
                            <img src="{{ SETTING_IMAGE_ROOT.$settings['why_choose_image_3'] }}"class="w-100 h-100" alt="Cost efficiently">

                        @else
                            <img src="{!! asset('assets/frontend/images/icons/icon-3.png') !!}" alt="Cost efficiently"  class="w-100 h-100">

                        @endif

                        </div>
                         <div class="why-text">
                            {!! $settings['why_choose_description_3'] !!}
                        </div>
                    </div>
                </div>
                <div class="sub-row">
                    <div class="fourth col-s max-w-770">
                        <div class="icon-box">
                              @if(file_exists(SETTING_IMAGE_PATH.$settings['why_choose_image_4']))
                            <img src="{{ SETTING_IMAGE_ROOT.$settings['why_choose_image_4'] }}"class="w-100 h-100" alt="Long-Term Relationship">

                        @else
                            <img src="{!! asset('assets/frontend/images/icons/icon-4.png') !!}" alt="Long-Term Relationship"  class="w-100 h-100">

                        @endif

                        </div>
                         <div class="why-text">
                            {!! $settings['why_choose_description_4'] !!}
                        </div>
                    </div>
                </div>
                <div class="sub-row">
                    <div class="fifth col-s max-w-770">
                        <div class="icon-box">
                            @if(file_exists(SETTING_IMAGE_PATH.$settings['why_choose_image_5']))
                            <img src="{{ SETTING_IMAGE_ROOT.$settings['why_choose_image_5'] }}"class="w-100 h-100" alt="Timely responses to emergencys">

                        @else
                            <img src="{!! asset('assets/frontend/images/icons/icon-5.png') !!}" alt="Timely responses to emergencys"  class="w-100 h-100">

                        @endif
                        </div>
                          <div class="why-text">
                            {!! $settings['why_choose_description_5'] !!}
                        </div>
                    </div>
                </div>
                <div class="sub-row">
                    <div class="sixth col-s max-w-770">
                        <div class="icon-box">
                            @if(file_exists(SETTING_IMAGE_PATH.$settings['why_choose_image_6']))
                            <img src="{{ SETTING_IMAGE_ROOT.$settings['why_choose_image_6'] }}"class="w-100 h-100" alt="Completion of Project in Given Time">

                        @else
                            <img src="{!! asset('assets/frontend/images/icons/icon-6.png') !!}" alt="Completion of Project in Given Time"  class="w-100 h-100">

                        @endif
                        </div>
                          <div class="why-text">
                            {!! $settings['why_choose_description_6'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@stop

@section('scripts')
    <script>




    </script>
@endsection
