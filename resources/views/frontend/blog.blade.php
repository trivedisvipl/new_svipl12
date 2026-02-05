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
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <section class="blog-section">
        <div class="container">
            <div class="d-flex justify-content-center flex-column align-items-center mrgn_60b" data-aos="fade-down">
                <div class="pill-box mrgn_35b">
                    what's going on
                </div>
                <h3 class="text-black font-weight-600 mrgn_35b font-40 font-lg-35 font-md-30">
                    The Latest <span class="text-orange">Insights</span>
                </h3>
                <p class="text-grey-2 font-20 font-md-18 max-w-650 text-center">
                    Every business are always our top priority
                </p>
            </div>
            <div class="row">
                @foreach ($blogs as $data)
                    <div class="col-lg-4 col-md-6 col-12">

                        <a href="{{ route('blog-detail', $data->slug) }}">
                            <div class="blog-card mx-auto">
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


@stop

@section('scripts')
    <script>




    </script>
@endsection
