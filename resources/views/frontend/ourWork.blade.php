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
                <li class="breadcrumb-item active" aria-current="page">Our Portfolio</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Portfolio Section -->
    <div class="portfolio-section pd_60b">
        <div class="d-flex flex-column align-items-center">
            <div class="pill-box mrgn_35b">
                PROJECTS WE SUCCESSFULLY DEVELOPED
            </div>
            <h3 class="text-black font-weight-600 mrgn-lg_45b mrgn_60b font-40 font-lg-35 font-md-30">
                Our <span class="text-orange"> Work</span>
            </h3>
        </div>
        <div class="container">
            <div class="pd_60b">
                <ul class="category-tabs">
                    <li class="filter-btn active" data-filter="all">All</li>
                    @foreach ($workCategory as $category)
                        <li class="filter-btn" data-filter="{{ $category->slug }}">{{ $category->name }}</li>
                    @endforeach

                </ul>
            </div>

            <div class="row portfolio-grid g-4  gy-lg-5 gy-md-4 gy-3 mrgn_60b">
                 @foreach ($work as $data)
                    <div class="col-md-6 col-12 portfolio-col" data-category="all {{ $data->portfolioCategory->slug }}">
                          <a href="{{ route('portfolio-detail', $data->slug) }}">
                            <div class="portfolio-card mx-auto">
                                <figure class="img-box">
                                    @if($data->portfolioImages->first())
                                        @if(file_exists(WORK_IMAGE_PATH.$data->id.'/'.$data->portfolioImages->first()->image))
                                            <img src="{{ WORK_IMAGE_ROOT.$data->id.'/'.$data->portfolioImages->first()->image }}" alt="{{ $data->title }}">
                                        @else
                                            <img src="{{ WORK_IMAGE }}" alt="{{ $data->title }}">
                                        @endif

                                    @else
                                        <img src="{{ WORK_IMAGE }}" alt="{{ $data->title }}">
                                    @endif

                                </figure>
                                <div class="project-titles">
                                    <h3 class="font-40 font-lg-35 font-md-30 font-sm-25">{{ $data->title }}</h3>
                                    <span class="orange-round-btn"><i class="bi bi-arrow-right"></i></span>
                                </div>
                                <div class="hover-project-detail">
                                    <span class="orange-round-btn"><i class="bi bi-arrow-right"></i></span>
                                    <div class="project-details">
                                        <h3 class="text-white mb-0 font-40 font-lg-35 font-md-30 font-sm-25 font-weight-600 mrgn_25b">{{ $data->title }}</h3>
                                        <p class="font-16">
                                            {{ $data->short_description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- End Portfolio Section -->

@stop

@section('scripts')
    <script>


        const filterBtns = document.querySelectorAll(".filter-btn");
        const cards = document.querySelectorAll(".portfolio-col");

        filterBtns.forEach(btn => {
        btn.addEventListener("click", () => {

            // active state
            filterBtns.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            const filter = btn.dataset.filter;

            cards.forEach(card => {
            const categories = card.dataset.category.split(" ");

            if (filter === "all" || categories.includes(filter)) {
                card.classList.remove("hide");
            } else {
                card.classList.add("hide");
            }
            });
        });
        });

    </script>
@endsection
