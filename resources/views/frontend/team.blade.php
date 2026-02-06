@extends('frontend.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! 'Our Team' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')

  <!-- Breadcrumb -->
    <div class="container nav-breadcrumb-section">
        <nav aria-label="breadcrumb" class="font-20">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{!! route('home') !!}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">About Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Team Section -->
    <section class="team-section pd_60b">
        <div class="d-flex flex-column align-items-center">
            <div class="pill-box mrgn_35b">
                Get to Know
            </div>
            <h3 class="text-black font-weight-600 mrgn-lg_45b mrgn_60b font-40  font-lg-35 font-md-30">
                Our <span class="text-orange"> Specialist</span> Team
            </h3>
        </div>
        <div class="container">
            <div class="row gy-lg-5 gy-4">
                <?php $designClass = ['first','two','three','four','five','six','seven','eight'];
                        $i=0;
                ?>
                @foreach ($teams as $team)

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="team-card {!! $designClass[$i] !!}">
                        <div class="team-img-box d-flex justify-content-center align-items-center">
                            <figure class="mask-image">
                                 @if(file_exists(TEAM_IMAGE_PATH.$team->image))
                                    <img src="{{ TEAM_IMAGE_ROOT.$team->image }}" alt="">
                                @else
                                    <img src="{{ TEAM_IMAGE }}" alt="">
                                 @endif

                            </figure>
                        </div>
                        <div class="team-member-details mrgn_25b">
                            <h5 class="text-center font-18 text-grey-5 font-weight-600">{!! $team->name !!}</h5>
                            <p class="text-center text-grey-2 font-14 mrgn_10b">{!! $team->position !!}</p>
                            <p class="text-center text-grey-2 font-14">{!! $team->description !!}</p>
                        </div>
                        <div class="member-social-icon">
                            <ul>
                                <li>
                                    <a href="{!! $team->linkedin !!}" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                     <a href="{!! $team->mail !!}" target="_blank">
                                        <i class="fa-regular fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                     <a href="{!! $team->instagram !!}" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                     <a href="{!! $team->twitter !!}" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php $i++; if($i == 8){ $i=0;} ?>
                  @endforeach


            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <div class="container">
        <hr class="footer-divider">
    </div>



@stop

@section('scripts')
    <script>




    </script>
@endsection
