@extends('frontend.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! 'Our Process' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')

  <!-- Breadcrumb -->
    <div class="container nav-breadcrumb-section">
        <nav aria-label="breadcrumb" class="font-20">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">About Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">Development Process</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Devlopement img section -->
    <section class="devlopent-f-section pd_60b">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <div class="pill-box mrgn_35b">
                    Our Process
                </div>
                <h3 class="text-black font-weight-600 mrgn-lg_45b mrgn_30b font-40  font-lg-35 font-md-30">
                    Our <span class="text-orange"> Web Development</span> Process
                </h3>
                <figure>
                     @if(file_exists(SETTING_IMAGE_PATH.$settings['development_process_image']))
                            {{-- <img src="{{ SETTING_IMAGE_ROOT.$settings['development_process_image'] }}"class="w-100 h-100" alt="Timely responses to emergencys"> --}}
                              <img src="{{ SETTING_IMAGE_ROOT.$settings['development_process_image'] }}" alt="Devlopement Process"  class="img-fluid w-100 h-100 max-w-650">

                    @else
                        <img src="{!! asset('assets/frontend/images/process.png') !!}" alt="Devlopement Process"  class="img-fluid w-100 h-100 max-w-650">


                    @endif

                </figure>
            </div>
        </div>
    </section>
    <!-- End Devlopement img section -->

    <!-- Devlopment Process -->
    <section class="devlopement-section">
        <div class="container">
           {!! $settings['process_description_1'] !!}
        </div>
    </section>
    <!-- End Devlopment Process -->

    <!-- Hire Section -->
    <section class="hire-info-section pd_60t pd_60b">
        <div class="container">
            <h3 class="text-center text-black font-weight-600 mrgn_35b font-40  font-lg-35 font-md-30">
                Hire the <span class="text-orange"> Best Website Design & Development</span> Company!.
            </h3>
            <p class="text-grey-2 font-20 font-md-18 text-center mrgn_15b">
                  {{-- {!! $settings['process_description_2'] !!} --}}
                Web development is a constant journey  that can be made better every day. Web development life cycle involves  understanding the client’s requirements, market research, knowledge  about the target audience, planning, design, development, testing, and  maintenance.
            </p>
            <p class="text-grey-2 font-20 font-md-18 text-center">
                Hire an outsourcing team of web developers  in India that adheres to all the steps mentioned above and develops an  aesthetically appealing website.
            </p>
        </div>
    </section>
    <!-- End Hire Section -->


@stop

@section('scripts')
    <script>




    </script>
@endsection
