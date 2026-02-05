@extends('frontend.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! 'Home' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
<!-- Hero Section -->

    <section class="hero-section overflow-clip position-relative">
        <div class="container">
            <div class="hero-section-slider owl-carousel owl-theme">
                @foreach ($slider as $k=> $data)
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12 mb-lg-0 mb-5">
                            <h1 class="font-50 font-lg-40 font-md-35 text-dark-red font-weight-600 mrgn_35b">
                               {{ $data->title }}
                            </h1>
                            <p class="text-grey font-25 font-lg-20 mrgn_35b">
                                {{ $data->description }}
                            </p>
                            <div class="pd_5b">
                                <a href="javascript:;" type="button" class="btn black-btn">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <figure class="hero-section-img mb-0">
                                 @if(file_exists(SLIDER_IMAGE_PATH.$data->image))
                                    <img src="{{ SLIDER_IMAGE_ROOT.$data->image }}" alt=""  class="max-w-500 ms-auto">
                                @else
                                    <img src="{{ SLIDER_IMAGE }}" alt=""  class="max-w-500 ms-auto">
                                 @endif
                            </figure>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
     <!-- Who We Section -->
    <section class="who-we-section overflow-clip">
        <div class="container">
            <div class="row gy-5" data-aos="fade-up">
                <div class="col-lg-6 col-12 order-lg-1 order-2">
                    <figure class="animation-box pd_55t pd_55b box-square" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="{{ SETTING_IMAGE_ROOT.$settings['about_image'] }}  " alt="" class="mx-auto d-block max-w-535 w-100 mx-auto br-30 wow fadeIn" data-wow-duration="2s" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                    </figure>
                </div>
                <div class="col-lg-6 col-12 order-lg-2 order-1" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="pill-box mrgn_35b">
                        Who we are?
                    </div>
                    <h3 class="text-black font-weight-600 mrgn_35b font-40  font-lg-35 font-md-30">
                        <span class="text-orange">Top-Rated</span> Web And Mobile App Development Company
                    </h3>
                    <div class="d-flex flex-column gap-35 text-grey-2 font-20 font-md-18 mrgn_35b">
                        {!! $settings['about_description'] !!}
                    </div>
                    <div class="pd_5b">
                        <a href="javascript:;" type="button" class="btn black-btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Who We Section -->
    <!-- Expertise Section -->
    <section class="expretise-section" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="container">
            <div class="d-flex justify-content-center flex-column align-items-center mrgn_60b" data-aos="fade-down">
                <div class="pill-box mrgn_35b">
                    Services
                </div>
                <h3 class="text-black font-weight-600 mrgn_35b font-40 font-lg-35 font-md-30">
                    Our <span class="text-orange">Experties</span>
                </h3>
                <p class="text-grey-2 font-20 font-md-18 max-w-650 text-center">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
            </div>
            <div class="expretise-card-section px-md-0 px-3" data-aos="fade-up">
                <div class="row mrgn_60b">
                    @foreach ($experties as $expertise)
                         <div class="col-lg-4 col-md-6 col-12 p-0">
                        <a href="{{ route('services-detail', $expertise->slug) }}">
                            <div class="expretise-card">
                                <div class="card-inner">
                                    <div class="visible-box-link">
                                        <h4 class="font-24 font-weight-500 text-black text-center">{{ $expertise->title }}</h4>
                                    </div>
                                    <div class="exprertise-card-details">
                                        <p class="text-center mb-2">{{ $expertise->short_description }}</p>
                                        <p class="text-orange">Read more <i class="fa-solid fa-arrow-right"></i></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    @endforeach


                </div>
                <div class="pd_5b d-flex justify-content-center">
                    <a href="{!! route('services') !!}" type="button" class="btn black-btn">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Expertise Section -->
     <!-- Achieved Section -->
    <section class="achived-section"  data-aos="fade-up-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="orange-square-left">
            <h3 class="d-lg-block d-none">What have we <br> Achieved so far</h3>
        </div>
        <div class="container pd-md_60t pd-md_60b">
            <div class="max-w-873">
                <h3 class="text-dark-grey font-weight-600 mrgn_35b font-40 font-lg-35 font-md-30 text-center">
                    <span class="d-lg-none d-block">What have we <br> Achieved so far</span>
                </h3>
                <div class="row row-gap-40">
                    <div class="col-sm-6 col-12">
                        <div class="achived-card d-flex justify-content-centera align-items-center flex-column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="200">
                            <h3 class="font-64 font-xl-60 font-lg-50 font-md-45 font-sm-35 font-weight-600 mb-0"><span class="counter">20</span><span>+</span></h3>
                            <p class="font-weight-600 font-24 font-lg-18">Years of Experience</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                         <div class="achived-card d-flex justify-content-centera align-items-center flex-column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="200">
                            <h3 class="font-64 font-xl-60 font-lg-50 font-md-45 font-sm-35 font-weight-600 mb-0"><span class="counter">80</span><span>+</span></h3>
                            <p class="font-weight-600 font-24 font-lg-18">Team Members</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="achived-card d-flex justify-content-centera align-items-center flex-column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="200">
                            <h3 class="font-64 font-xl-60 font-lg-50 font-md-45 font-sm-35 font-weight-600 mb-0"><span class="counter">450</span></h3>
                            <p class="font-weight-600 font-24 font-lg-18">Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                         <div class="achived-card d-flex justify-content-centera align-items-center flex-column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="200">
                            <h3 class="font-64 font-xl-60 font-lg-50 font-md-45 font-sm-35 font-weight-600 mb-0"><span class="counter">48</span><span>k</span></h3>
                            <p class="font-weight-600 font-24 font-lg-18">Projects Done</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="achived-card d-flex justify-content-centera align-items-center flex-column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="200">
                            <h3 class="font-64 font-xl-60 font-lg-50 font-md-45 font-sm-35 font-weight-600 mb-0"><span class="counter">95</span><span>k</span></h3>
                            <p class="font-weight-600 font-24 font-lg-18">Hours Worked</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                         <div class="achived-card d-flex justify-content-centera align-items-center flex-column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="200">
                            <h3 class="font-64 font-xl-60 font-lg-50 font-md-45 font-sm-35 font-weight-600 mb-0"><span class="counter">24</span><span>/</span><span class="counter">7</span></h3>
                            <p class="font-weight-600 font-24 font-lg-18">Support Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Achieved Section -->
     <!-- Client Section -->

    <section class="client-section"  data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="container">
            <div class="d-flex justify-content-center flex-column align-items-center mrgn_50b">
                <div class="pill-box mrgn_35b">
                    Our happy customers
                </div>
                <h3 class="text-black font-weight-600 mrgn_35b font-40 font-lg-35 font-md-30">
                    Some of Our  <span class="text-orange">Clients</span>
                </h3>
                <p class="text-grey-2 font-20 font-lg-18 max-w-650 text-center">Every business are always our top priority</p>
            </div>
            <div class="client-img-section">
                <div class="row gy-5">
                    @foreach ($clients as $client)

                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 wow fadeIn" data-wow-delay=".2s">
                            <div class="brand-img">
                                 @if(file_exists(CLIENT_IMAGE_PATH.$client->image))
                                    <img src="{{ CLIENT_IMAGE_ROOT.$client->image }}" alt="{!! $client->name !!}"  class="mx-auto d-block">
                                @else
                                    <img src="{{ CLIENT_IMAGE }}" alt=""  class="mx-auto d-block">
                                 @endif

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Client Section -->
    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container ms-0 me-auto">
            <div class="max-w-762 w-100 mx-auto ps-sm-4 position-relative">
                <div class="pill-box mrgn_45b">
                    What our client says
                </div>
                <img src="{{ asset('assets/frontend/images/quote.png') }}" alt="" class="quote-img">
                <div class="testimonials-slider owl-carousel owl-theme position-relative">
                    @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="slide-item">
                            <p class="font-22 font-lg-18 text-grey mrgn_30b">{{ $testimonial->description }}</p>
                            <div class="client-box">
                                <p class="font-20 font-weight-600 text-dark-grey">{{ $testimonial->name }} ({{ $testimonial->country }})</p>
                                <p class="font-16 font-weight-300 text-dark-grey">- {{ $testimonial->position }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->

     <!-- Latest Insight Section -->
    <section class="latest-insight-section">
        <div class="d-flex justify-content-center flex-column align-items-center mrgn_50b">
            <h3 class="text-black font-weight-600 mrgn_35b font-40 font-lg-35 font-md-30 text-center">
                <span class="d-sm-block d-none"><span class="text-orange">Tools & Technologies</span> We Use</span>
                <span class="d-sm-none d-block"><span class="text-orange">Tools & Technologies</span> <br> We Use</span>
            </h3>
        </div>
        <div class="container-custom me-md-0">
            <div class="blog-slider">
                @foreach ($blog as $data)
                    <div class="item">
                        {{-- {{ route('blog-details', $data->slug) }} --}}
                        <a href="{{ route('blog-detail', $data->slug) }}">
                            <div class="blog-card">
                            <figure class="blog-img mb-0">
                                 @if(file_exists(BLOG_IMAGE_PATH.$data->image))

                                    <img src="{{ BLOG_IMAGE_ROOT.$data->image }}" alt="{!! $data->name !!}"  class="w-100 d-block">
                                @else
                                    <img src="{{ BLOG_IMAGE }}" alt=""  class="w-100 d-block">
                                 @endif

                            </figure>
                            <div class="blog-short-details">
                                <div class="date-tag d-flex justify-content-start g-10 align-items-center mrgn_20b">
                                    <div class="date-div text-grey-3 font-12">{{ date_format(date_create($data->date),"M jS Y") }}</div>
                                    <div class="blog-tag">{{ $data->blogCategory->name }}</div>
                                </div>
                                <h4 class="blog-card-title">{{ $data->title }}</h4>
                                <p class="blog-card-description text-grey-2 font-16 mrgn_20b">
                                    {{ Str::limit($data->short_description, 100) }}

                                </p>
                                <div class="blog-btn">
                                     {{-- {{ route('blog-details', $data->slug) }} --}}
                                    <a href="{{ route('blog-detail', $data->slug) }}" class="font-16 font-weight-500">
                                        <span>Read More</span> <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Latest Insight Section -->

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
