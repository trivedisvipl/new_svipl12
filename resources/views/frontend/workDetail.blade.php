@extends('frontend.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! 'Portfolio' !!}
@stop
@section('styles')

     <link rel="stylesheet" href="{!! asset('assets/frontend/css/jquery.fancybox.min.css') !!}">
     <link rel="stylesheet" href="{!! asset('assets/frontend/css/lightboxed.css') !!}">
@stop
{{-- Content --}}
@section('content')
<!-- Breadcrumb -->
    <div class="container nav-breadcrumb-section">
        <nav aria-label="breadcrumb" class="font-20">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('our-portfolio') }}">Our Portfolio</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$work->title}}</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Project Detail Section -->
    <section class="project-detail-section">
        <div class="container">
            <figure class="client-logo mrgn_50b">
                @if(file_exists(WORK_IMAGE_PATH.$work->image))
                    <img src="{{ WORK_IMAGE_ROOT.$work->image }}" alt="{{ $work->title }}" class="w-100">
                @else
                    <img src="{{ WORK_IMAGE }}" alt="{{ $work->title }}" class="w-100">
                @endif
            </figure>
            @if($work->portfolioImages->count())
            <div class="client-slider owl-carousel owl-theme pd_40b">
                @foreach ($work->portfolioImages as $pimage)
                     <div class="item mx-auto">
                    <figure>
                         @if(file_exists(WORK_IMAGE_PATH.$work->id.'/'.$pimage->image))
                         <a href="{{ WORK_IMAGE_ROOT.$work->id.'/'.$pimage->image }}" data-fancybox="gallery">
                            <img src="{{ WORK_IMAGE_ROOT.$work->id.'/'.$pimage->image }}" alt="{{ $pimage->title }}">
                        </a>
                        @else
                        <a href="{{ WORK_IMAGE }}" data-fancybox="gallery">
                            <img src="{{ WORK_IMAGE }}" alt="{{ $work->title }}" class="w-100">
                        </a>
                        @endif

                    </figure>
                </div>
                @endforeach
            </div>
            @endif

            <div class="details-div text-grey-2 font-20 d-flex flex-column">
                <p>{{ $work->short_description }}</p>
                {!! $work->description !!}
            </div>
        </div>
    </section>
    <!-- End Project Detail Section -->

@stop

@section('scripts')
<script src="{!! asset('assets/frontend/js/jquery.fancybox.min.js') !!}"></script>
<script src="{!! asset('assets/frontend/js/lightboxed.js') !!}"></script>
    <script>


    </script>
@endsection
