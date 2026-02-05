@extends('frontend.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! 'Our Expertise' !!}
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
                <li class="breadcrumb-item"><a href="{{ route('services') }}">Our Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $expertise->title }}</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- service detail section -->
    <section class="service-detail-section">
        <div class="container">
            <div class="pill-box mrgn_40b">
                What Services we offer
            </div>
            <div class="row g-lg-5">
                <div class="col-md-6 col-12" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3 class="text-black font-weight-600 mrgn_35b font-40  font-lg-35 font-md-30">
                        {{-- Web <span>Design</span> Services --}}
                        {{ $expertise->title }}

                    </h3>
                     {{-- {!! $expertise->short_description !!} --}}
                    <div class="details-div">

                        {!! $expertise->description !!}
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <figure class="animation-box pd_55t pd_55b box-square" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                         @if(file_exists(EXPERTIES_IMAGE_PATH.$expertise->image))
                            <img src="{{ EXPERTIES_IMAGE_ROOT.$expertise->image }}" alt=" {{ $expertise->title }}" class="mx-auto d-block max-w-535 w-100 mx-auto br-30 wow fadeIn" data-wow-duration="2s" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                        @else
                            <img src="{{ EXPERTIES_IMAGE }}" alt=" {{ $expertise->title }}" alt="website design" class="mx-auto d-block max-w-535 w-100 mx-auto br-30 wow fadeIn" data-wow-duration="2s" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                        @endif

                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- End detail section -->

   <!-- Tools Section -->
    <section class="tools-section">
        <div class="d-flex justify-content-center flex-column align-items-center mrgn_50b">
            <div class="pill-box mrgn_35b">
                what's going on
            </div>
            <h3 class="text-black font-weight-600 mrgn_35b font-40 font-lg-35 font-md-30">
                The Latest  <span class="text-orange">Insights</span>
            </h3>
            <p class="text-grey-2 font-20 font-lg-18 max-w-650 text-center">Every business are always our top priority</p>
        </div>
        <div class="tech-slider-wrapper pd_40b">
            <div class="tech-slider ltr">
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/adobe-Photoshop.png') }}" alt="Photoshop"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/adobe-XD.png') }}" alt="XD"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/android.png') }}" alt="Android"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/bluestacks.png') }}" alt="Bluestacks"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/bootstrap.png') }}" alt="Bootstrap"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/cake-php.png') }}" alt="cakePHp"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/codeIgniter.png') }}" alt="CodeIgniter"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/css3.png') }}" alt="CSS3"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/figma.png') }}" alt="Figma"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/flutter.png') }}" alt="Flutter"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/html.png') }}" alt="HTML5"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/javaScript.png') }}" alt="JavaScript"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/jquery.png') }}" alt="Jquery"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/asp.net.png') }}" alt="asp.net"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/laravel.png') }}" alt="laravel"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/mysql.png') }}" alt="mysql"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/php.png') }}" alt="PHP"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/react.png') }}" alt="react"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/symfony.png') }}" alt="Symfony"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/tailwind-css.png') }}" alt="tailwind-css"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/wordpress.png') }}" alt="wordpress"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/kotlin.png') }}" alt="Kotlin"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/mongoDB.png') }}" alt="MongoDB"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/sass.png') }}" alt="sass"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/wooCommerce.png') }}" alt="WooCommerce"></div>
            </div>
        </div>
        <div class="tech-slider-wrapper">
             <div class="tech-slider-reversed rtl">
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/adobe-Photoshop.png') }}" alt="Photoshop"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/adobe-XD.png') }}" alt="XD"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/android.png') }}" alt="Android"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/bluestacks.png') }}" alt="Bluestacks"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/bootstrap.png') }}" alt="Bootstrap"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/cake-php.png') }}" alt="cakePHp"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/codeIgniter.png') }}" alt="CodeIgniter"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/css3.png') }}" alt="CSS3"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/figma.png') }}" alt="Figma"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/flutter.png') }}" alt="Flutter"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/html.png') }}" alt="HTML5"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/javaScript.png') }}" alt="JavaScript"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/jquery.png') }}" alt="Jquery"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/asp.net.png') }}" alt="asp.net"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/laravel.png') }}" alt="laravel"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/mysql.png') }}" alt="mysql"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/php.png') }}" alt="PHP"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/react.png') }}" alt="react"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/symfony.png') }}" alt="Symfony"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/tailwind-css.png') }}" alt="tailwind-css"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/wordpress.png') }}" alt="wordpress"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/kotlin.png') }}" alt="Kotlin"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/mongoDB.png') }}" alt="MongoDB"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/sass.png') }}" alt="sass"></div>
                <div class="slide-item"><img src="{{ asset('assets/frontend/images/icons/wooCommerce.png') }}" alt="WooCommerce"></div>
            </div>
        </div>
    </section>
    <!-- End Tools Section -->


@stop

@section('scripts')
    <script>




    </script>
@endsection
