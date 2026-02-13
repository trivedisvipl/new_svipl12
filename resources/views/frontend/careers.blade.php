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
                <li class="breadcrumb-item active" aria-current="page">Career</li>
            </ol>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Career Section -->
    <section class="career-section">
        <div class="container mrgn_60b">
            <div class="d-flex justify-content-center flex-column align-items-center mrgn_50b" data-aos="fade-down">
                <div class="pill-box mrgn_35b">
                    Careers at SVIPL
                </div>
                <h3 class="text-black font-weight-600 mb-0 font-40 font-lg-35 font-md-30 text-center max-w-1078">
                    Working at SVIPL means <span class="text-orange">flexibility, trust and meaningful choices</span>
                </h3>
            </div>
            <figure>
                <img src="{{ asset('assets/frontend/images/career.jpg') }}" alt="svipl career" class="d-block img-fluid w-100" data-aos="fade-up">
            </figure>
        </div>
        <div class="joinus-form-section">
            <div class="container">
                <h3 class="text-black font-weight-600 mb-0 font-40 font-lg-35 font-md-30 mrgn_40b text-center max-w-1078 mx-auto" data-aos="fade-up">
                    Are you eager to achieve your milestone with us? Join <span class="text-orange">Our Team</span>
                </h3>
                <div class="join-form">
                    @include('frontend.includes.notifications')
                  {!! html()->form('POST', route('careersSave'))->id('career-form')->acceptsFiles()->open() !!}
                   <input type="hidden" name="g-recaptcha-response" value="" id="gtoken">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                {{ html()->text('name', old('name'))->class('form-control')->placeholder('Name *') }}
                                @error('name')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror

                            </div>
                            <div class="col-md-6 col-12">
                                {{ html()->email('email', old('email'))->class('form-control')->placeholder('Email Address *') }}
                                @error('email')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror

                            </div>
                            <div class="col-md-6 col-12">

                               {!! html()->text('phone',old('phone'))->class('form-control')->placeholder('Phone Number *')->attribute('onkeypress', 'return event.charCode >= 45 && event.charCode <= 57') !!}

                                @error('phone')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror
                                {{-- <input type="text" class="form-control" id="phone" placeholder="Phone Number *" onkeypress="return event.charCode >= 45 && event.charCode <= 57"> --}}
                            </div>
                            <div class="col-md-6 col-12">
                                 {{ html()->text('position', old('position'))->class('form-control')->placeholder('Position *') }}
                                @error('position')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror

                            </div>
                            <div class="col-md-6 col-12">
                                 {{ html()->text('skills', old('skills'))->class('form-control')->placeholder('Skills *') }}
                                @error('skills')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror

                            </div>
                            <div class="col-md-6 col-12">
                                 {{ html()->text('experience', old('experience'))->class('form-control')->placeholder('Experience *') }}
                                @error('experience')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror

                            </div>
                            <div class="col-md-6 col-12">
                                 {{ html()->text('notice_period', old('notice_period'))->class('form-control')->placeholder('Notice Period *') }}
                                @error('notice_period')
                                    <span class="error-message">{!! $message !!} *</span>
                                @enderror

                            </div>
                            <div class="col-md-6 col-12">
                                  {!! html()->file('resume')->class('form-control')->accept("application/pdf") !!}
                                {{-- <input type="file" class="form-control" id="inputGroupFile01"> --}}
                            </div>
                            <div class="col-12">
                                {!! html()->submit('Submit Now')->class('btn black-btn') !!}
                                {{-- <a href="javascript:;" type="button" class="btn black-btn">
                                    Submit Now
                                </a> --}}
                            </div>

                        </div>
                        {{ html()->form()->close() }}

                </div>
            </div>
        </div>
    </section>
    <!-- End Career Section -->

@stop

@section('scripts')

    <script async src="https://www.google.com/recaptcha/api.js?render={!! env('GOOGLE_RECAPTCHA_KEY') !!}"></script>

    <script>
        function getRecaptcha() {
            grecaptcha.ready(function() {
                grecaptcha.execute("{!! env('GOOGLE_RECAPTCHA_KEY') !!}", {
                    action: 'submitContact'
                }).then(function(token) {
                    $('#gtoken').val(token); // here i set value to hidden field
                });
            });
        }

        $(document).ready(function() {
            getRecaptcha();
        });

    </script>
@endsection
