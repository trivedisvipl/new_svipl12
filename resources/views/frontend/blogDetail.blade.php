@extends('frontend.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! 'Blog' !!}
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
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Blog Details Section -->
    <section class="blog-detail-section pd_60b">
        <div class="blog-title mrgn_60b">
            <div class="container">
                <date class="font-20">
                    {{ date_format(date_create($blog->date),"F j, Y") }}
                </date>
                <h1 class="font-64 font-xxl-60 font-xl-50 font-lg-40 font-md-35 text-black font-weight-600 mrgn_35b mrgn_25t">
                   {{ $blog->title }}
                </h1>
                <div class="d-flex align-items-center justify-content-start">
                    <div class="blog-user d-flex align-items-center gap-15 pe-3">

                        @if(file_exists(BLOG_IMAGE_PATH.$blog->posted_by_image))
                            <img src="{{ BLOG_IMAGE_ROOT.$blog->posted_by_image }}" alt="{!! $blog->posted_by !!}"  class="img-fluid user-img">
                        @else
                            <img src="{{ BLOG_IMAGE }}" alt=""  class="img-fluid user-img">
                         @endif
                        <span class="text-grey font-20 font-lg-16 font-md-14 font-weight-500">{{ $blog->posted_by }}</span>
                    </div>
                    <div class="tag-box ms-3">
                        <div class="blog-tag">{{ $blog->blogCategory->name }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <p class="text-grey-2 font-20 font-lg-18 font-md-16 pd-lg_60b pd_40b">
              {{ $blog->short_description }}
            </p>
            <div class="blog-img pd-lg_60b pd_40b">
                @if(file_exists(BLOG_IMAGE_PATH.$blog->image))
                    <img src="{{ BLOG_IMAGE_ROOT.$blog->image }}" alt="{!! $blog->title !!}"  class="img-fluid w-100">
                @else
                    <img src="{{ BLOG_IMAGE }}" alt="{!! $blog->title !!}"  class="img-fluid w-100">
                @endif

            </div>
             <div class="details-div">
                  {!! $blog->description !!}

            </div>
        </div>
    </section>
    <!-- End Blog Details Section -->

    <div class="container">
        <hr class="footer-divider">
    </div>


@stop

@section('scripts')
    <script>




    </script>
@endsection
