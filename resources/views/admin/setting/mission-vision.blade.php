@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Mission & Vision' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Why Us Page </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')

                   {!! html()->modelForm($vision, 'POST', route('setting.mission.store'))
                    ->id('home-form')
                    ->attribute('enctype', 'multipart/form-data')
                    ->open() !!}


                <div class="row">
                    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Mission & Vision</h5>

                        <div class="col-md-6">

                            {!! html()->label('Vision', 'vision')->class('form-label') !!}
                            {!! html()->textarea('vision', old('vision'))->class('form-control editor')!!}
                            @error('vision')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                        </div>
                        <div class="col-md-6">

                            {!! html()->label('Vision Image', 'vision_image')->class('form-label') !!}
                            {!! html()->file('vision_image')->class('form-control') !!}
                            <small></small>
                            @error('vision_image')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                            <div class="mb-3">
                            @if(isset($vision) && !empty($vision))
                                @if($vision['vision_image'] && file_exists(SETTING_IMAGE_PATH.$vision['vision_image']))
                                    <img src="{!! SETTING_IMAGE_ROOT.$vision['vision_image'] !!}" style="height: 300px;" class="mt-2">
                                @else
                                    No Image Found
                                @endif
                            @endif
                            </div>

                        </div>
                </div>
                <hr class="divider mt-5 mb-4 ">

                 <div class="row">
                    <div class="col-md-6">

                        {!! html()->label('Mission Image', 'mission_image')->class('form-label') !!}
                        {!! html()->file('mission_image')->class('form-control') !!}
                        <small></small>
                        @error('mission_image')
                            <span class="error-message">{!! $message !!} *</span>
                        @enderror

                        <div class="mb-3">
                        @if(isset($vision) && !empty($vision))
                            @if($vision['mission_image'] && file_exists(SETTING_IMAGE_PATH.$vision['mission_image']))
                                <img src="{!! SETTING_IMAGE_ROOT.$vision['mission_image'] !!}" style="height: 300px;" class="mt-2">
                            @else
                                No Image Found
                            @endif
                        @endif
                        </div>

                    </div>
                    <div class="col-md-6">

                        {!! html()->label('Mission', 'mission')->class('form-label') !!}
                        {!! html()->textarea('mission', old('mission'))->class('form-control editor')!!}
                        @error('mission')
                            <span class="error-message">{!! $message !!} *</span>
                        @enderror

                    </div>
                </div>

                  <div class="row">
                    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Our Values</h5>
                    <div class="col-md-3">
                        {!! html()->label('Values Image', 'Values_image_1')->class('form-label') !!}
                        {!! html()->file('values_image_1')->class('form-control') !!}
                        <small></small>
                        @error('values_image_1')
                            <span class="error-message">{!! $message !!} *</span>
                        @enderror
                        <div class="mb-3">
                            @if(isset($vision) && !empty($vision))
                                @if($vision['values_image_1'] && file_exists(SETTING_IMAGE_PATH.$vision['values_image_1']))
                                    <img src="{!! SETTING_IMAGE_ROOT.$vision['values_image_1'] !!}" style="height: 100px;" class="mt-2">
                                @else
                                    No Image Found
                                @endif
                            @endif
                        </div>

                        <div class="mb-3 mt-3">
                            {!! html()->label('Values Text', 'values_1')->class('form-label') !!}
                            {!! html()->text('values_1', old('values_1'))->class('form-control') !!}
                            @error('values_1')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                        </div>

                    </div>

                     <div class="col-md-3">
                        {!! html()->label('Values Image', 'values_image_2')->class('form-label') !!}
                        {!! html()->file('values_image_2')->class('form-control') !!}
                        <small></small>
                        @error('values_image_2')
                            <span class="error-message">{!! $message !!} *</span>
                        @enderror
                        <div class="mb-3">
                            @if(isset($vision) && !empty($vision))
                                @if($vision['values_image_2'] && file_exists(SETTING_IMAGE_PATH.$vision['values_image_2']))
                                    <img src="{!! SETTING_IMAGE_ROOT.$vision['values_image_2'] !!}" style="height: 100px;" class="mt-2">
                                @else
                                    No Image Found
                                @endif
                            @endif
                        </div>

                        <div class="mb-3 mt-3">
                            {!! html()->label('Values Text', 'values_2')->class('form-label') !!}
                            {!! html()->text('values_2', old('values_2'))->class('form-control') !!}
                            @error('values_2')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                        </div>

                    </div>
                     <div class="col-md-3">
                        {!! html()->label('Values Image', 'values_image_3')->class('form-label') !!}
                        {!! html()->file('values_image_3')->class('form-control') !!}
                        <small></small>
                        @error('values_image_3')
                            <span class="error-message">{!! $message !!} *</span>
                        @enderror
                        <div class="mb-3">
                            @if(isset($vision) && !empty($vision))
                                @if($vision['values_image_3'] && file_exists(SETTING_IMAGE_PATH.$vision['values_image_3']))
                                    <img src="{!! SETTING_IMAGE_ROOT.$vision['values_image_3'] !!}" style="height: 100px;" class="mt-2">
                                @else
                                    No Image Found
                                @endif
                            @endif
                        </div>

                        <div class="mb-3 mt-3">
                            {!! html()->label('Values Text', 'values_3')->class('form-label') !!}
                            {!! html()->text('values_3', old('values_3'))->class('form-control') !!}
                            @error('values_3')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                        </div>

                    </div>
                     <div class="col-md-3">
                        {!! html()->label('Values Image', 'values_image_4')->class('form-label') !!}
                        {!! html()->file('values_image_4')->class('form-control') !!}
                        <small></small>
                        @error('values_image_4')
                            <span class="error-message">{!! $message !!} *</span>
                        @enderror
                        <div class="mb-3">
                            @if(isset($vision) && !empty($vision))
                                @if($vision['values_image_4'] && file_exists(SETTING_IMAGE_PATH.$vision['values_image_4']))
                                    <img src="{!! SETTING_IMAGE_ROOT.$vision['values_image_4'] !!}" style="height: 100px;" class="mt-2">
                                @else
                                    No Image Found
                                @endif
                            @endif
                        </div>

                        <div class="mb-3 mt-3">
                            {!! html()->label('Values Text', 'values_4')->class('form-label') !!}
                            {!! html()->text('values_4', old('values_4'))->class('form-control') !!}
                            @error('values_4')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                        </div>

                    </div>


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
                    @if(isset($vision) && !empty($vision))
                        @if(array_key_exists("meta_image", $vision) && file_exists(SETTING_IMAGE_PATH.$vision['meta_image']))
                            <img src="{!! SETTING_IMAGE_ROOT.$vision['meta_image'] !!}" style="height: 100px;" class="mt-2">
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
