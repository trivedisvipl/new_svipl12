@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Our Process' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Our Process Page </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')

                   {!! html()->modelForm($process, 'POST', route('setting.process.store'))
                    ->id('process-form')
                    ->attribute('enctype', 'multipart/form-data')
                    ->open() !!}



                <div class="mb-3">
                    {!! html()->label('Development Process Image', 'development_process_image')->class('form-label') !!}
                    {!! html()->file('development_process_image')->class('form-control') !!}
                    <small></small>
                    @error('development_process_image')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3">
                    @if(isset($process) && !empty($process))
                        @if($process['development_process_image'] && file_exists(SETTING_IMAGE_PATH.$process['development_process_image']))
                            <img src="{!! SETTING_IMAGE_ROOT.$process['development_process_image'] !!}" style="height: 300px;" class="mt-2 mx-auto d-block">
                        @else
                            No Image Found
                        @endif
                    @endif
                </div>

                 <hr class="divider mt-5 mb-4 ">



                 <div class="mb-3 mt-3">
                    {!! html()->label('Description 1', 'process_description_1')->class('form-label') !!}
                    {!! html()->textarea('process_description_1', old('process_description_1'))->class('form-control editor') !!}
                    @error('process_description_1')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <hr class="divider mt-5 mb-4 d-none">
                 <div class="mb-3 mt-3 d-none">
                    {!! html()->label('Description 2', 'process_description_2')->class('form-label') !!}
                    {!! html()->textarea('process_description_2', old('process_description_2'))->class('form-control editor') !!}
                    @error('process_description_2')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <hr class="divider mt-5 mb-4 ">

                  <hr class="divider mt-5 mb-4 ">
                    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Metadata</h5>
                <div class="mb-3 mt-3">
                    {!! html()->label('Meta Title', 'meta_title')->class('form-label') !!}
                    {!! html()->text('meta_title', old('meta_title'))->class('form-control') !!}
                   @error('meta_title')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('Meta Keywords', 'meta_keywords')->class('form-label') !!}
                    {!! html()->text('meta_keywords', old('meta_keywords'))->class('form-control') !!}
                   @error('meta_keywords')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('Meta Description', 'meta_description')->class('form-label') !!}
                    {!! html()->textarea('meta_description', old('meta_description'))->class('form-control') !!}
                    @error('meta_description')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                  <div class="mb-3">
                    {!! html()->label('Image', 'meta_image')->class('form-label') !!}
                    {!! html()->file('meta_image')->class('form-control') !!}
                    <small></small>
                    @error('meta_image')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3">
                    @if(isset($home) && !empty($home))
                        @if(array_key_exists("meta_image", $home) && file_exists(SETTING_IMAGE_PATH.$home['meta_image']))
                            <img src="{!! SETTING_IMAGE_ROOT.$home['meta_image'] !!}" style="height: 100px;" class="mt-2">
                        @else
                            No Image Found
                        @endif
                    @endif
                </div>


                <div class="mb-3">

                    {!! html()->submit('Submit')->class('btn btn-primary') !!}

                </div>
                {{ html()->form()->close() }}
            </div>

          </div>
        </div>
        <!-- /Bootstrap Validation -->
      </div>

    </div>
    <!-- / Content -->
  </div>
  <!-- Content wrapper -->
@stop

@section('scripts')
 <script src="{!! asset('assets/admin/js/ckeditor-config.js') !!}"></script>

@stop
