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
                <li class="breadcrumb-item active" aria-current="page">Our Services</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Expertise Section -->
    <section class="expertise-section">
        <div class="container">
            <div class="d-flex justify-content-center flex-column align-items-center mrgn_60b" data-aos="fade-down">
                <div class="pill-box mrgn_35b">
                    What Services we offer
                </div>
                <h3 class="text-black font-weight-600 mrgn_35b font-40 font-lg-35 font-md-30">
                    Our <span class="text-orange">Expertise</span>
                </h3>
                <p class="text-grey-2 font-20 font-md-18 max-w-650 text-center">
                    We think big and have hands in all leading technology platforms to provide you wide array of services.
                </p>
            </div>
        </div>
        <div class="services-div">
            <div class="container">
                <div class="expretise-card-section px-md-0 px-3" data-aos="fade-up">
                    <div class="row mrgn_60b">
                        @foreach ($expertise as $item)
                            <div class="col-lg-4 col-md-6 col-12 p-0">
                            <a href="{{ route('services-detail', $item->slug) }}">
                                <div class="expretise-card">
                                    <div class="card-inner">
                                        <div class="visible-box-link">
                                            <h4 class="font-24 font-weight-500 text-black text-center">{{ $item->title }}</h4>
                                        </div>
                                        <div class="exprertise-card-details">
                                            <p class="text-center mb-2">{{ $item->short_description }}</p>
                                            <p class="text-orange">Read more <i class="fa-solid fa-arrow-right"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Expertise Section -->


@stop

@section('scripts')
    <script>




    </script>
@endsection
