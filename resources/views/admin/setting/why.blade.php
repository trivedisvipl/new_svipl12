@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Why Us Page' !!}
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

                   {!! html()->modelForm($why, 'POST', route('setting.why.store'))
                    ->id('home-form')
                    ->attribute('enctype', 'multipart/form-data')
                    ->open() !!}


                <div class="row">
                    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> We Are Creative Agency</h5>

                        <div class="col-md-6">

                            {!! html()->label('Creative Agency', 'creative_agency_description')->class('form-label') !!}
                            {!! html()->textarea('creative_agency_description', old('creative_agency_description'))->class('form-control editor')!!}
                            @error('creative_agency_description')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                        </div>
                        <div class="col-md-6">

                            {!! html()->label('Creative Agency Image', 'creative_agency_image')->class('form-label') !!}
                            {!! html()->file('creative_agency_image')->class('form-control') !!}
                            <small></small>
                            @error('creative_agency_image')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                            <div class="mb-3">
                            @if(isset($why) && !empty($why))
                                @if($why['creative_agency_image'] && file_exists(SETTING_IMAGE_PATH.$why['creative_agency_image']))
                                    <img src="{!! SETTING_IMAGE_ROOT.$why['creative_agency_image'] !!}" style="height: 100px;" class="mt-2">
                                @else
                                    No Image Found
                                @endif
                            @endif
                            </div>

                        </div>
                </div>
                <hr class="divider mt-5 mb-4 ">

                 <div class="row">
                    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Why Choose Us</h5>

                        <div class="col-md-12">

                            {!! html()->label('Why Choose Heading', 'why_choose_heading')->class('form-label') !!}
                            {!! html()->textarea('why_choose_heading', old('why_choose_heading'))->class('form-control editor') !!}
                            @error('why_choose_heading')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                        </div>

                </div>

                <div class="row mt-5">

                        <div class="col-md-3">
                            {!! html()->label('Why Choose Image', 'why_choose_image_1')->class('form-label') !!}
                            {!! html()->file('why_choose_image_1')->class('form-control') !!}
                            <small></small>
                            @error('why_choose_image_1')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                            <div class="mb-3">
                                @if(isset($why) && !empty($why))
                                    @if($why['why_choose_image_1'] && file_exists(SETTING_IMAGE_PATH.$why['why_choose_image_1']))
                                        <img src="{!! SETTING_IMAGE_ROOT.$why['why_choose_image_1'] !!}" style="height: 100px;" class="mt-2">
                                    @else
                                        No Image Found
                                    @endif
                                @endif
                            </div>

                        </div>
                         <div class="col-md-6">

                            {!! html()->label('Why Choose Description', 'why_choose_description_1')->class('form-label') !!}
                            {!! html()->textarea('why_choose_description_1', old('why_choose_description_1'))->class('form-control editor') !!}
                            @error('why_choose_description_1')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                        </div>

                </div>

                 <div class="row mt-5">


                         <div class="col-md-6 offset-md-3">

                            {!! html()->label('Why Choose Description', 'why_choose_description_2')->class('form-label') !!}
                            {!! html()->textarea('why_choose_description_2', old('why_choose_description_2'))->class('form-control editor') !!}
                            @error('why_choose_description_2')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                        </div>
                          <div class="col-md-3">
                            {!! html()->label('Why Choose Image', 'why_choose_image_2')->class('form-label') !!}
                            {!! html()->file('why_choose_image_2')->class('form-control') !!}
                            <small></small>
                            @error('why_choose_image_2')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                            <div class="mb-3">
                                @if(isset($why) && !empty($why))
                                    @if($why['why_choose_image_2'] && file_exists(SETTING_IMAGE_PATH.$why['why_choose_image_2']))
                                        <img src="{!! SETTING_IMAGE_ROOT.$why['why_choose_image_2'] !!}" style="height: 100px;" class="mt-2">
                                    @else
                                        No Image Found
                                    @endif
                                @endif
                            </div>

                        </div>

                </div>
                  <div class="row mt-5">

                        <div class="col-md-3">
                            {!! html()->label('Why Choose Image', 'why_choose_image_3')->class('form-label') !!}
                            {!! html()->file('why_choose_image_3')->class('form-control') !!}
                            <small></small>
                            @error('why_choose_image_3')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                            <div class="mb-3">
                                @if(isset($why) && !empty($why))
                                    @if($why['why_choose_image_3'] && file_exists(SETTING_IMAGE_PATH.$why['why_choose_image_3']))
                                        <img src="{!! SETTING_IMAGE_ROOT.$why['why_choose_image_3'] !!}" style="height: 100px;" class="mt-2">
                                    @else
                                        No Image Found
                                    @endif
                                @endif
                            </div>

                        </div>
                         <div class="col-md-6">

                            {!! html()->label('Why Choose Description', 'why_choose_description_3')->class('form-label') !!}
                            {!! html()->textarea('why_choose_description_3', old('why_choose_description_3'))->class('form-control editor') !!}
                            @error('why_choose_description_3')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                        </div>

                </div>

                 <div class="row mt-5">


                         <div class="col-md-6 offset-md-3">

                            {!! html()->label('Why Choose Description', 'why_choose_description_4')->class('form-label') !!}
                            {!! html()->textarea('why_choose_description_4', old('why_choose_description_4'))->class('form-control editor') !!}
                            @error('why_choose_description_4')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                        </div>
                          <div class="col-md-3">
                            {!! html()->label('Why Choose Image', 'why_choose_image_4')->class('form-label') !!}
                            {!! html()->file('why_choose_image_4')->class('form-control') !!}
                            <small></small>
                            @error('why_choose_image_4')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                            <div class="mb-3">
                                @if(isset($why) && !empty($why))
                                    @if($why['why_choose_image_4'] && file_exists(SETTING_IMAGE_PATH.$why['why_choose_image_4']))
                                        <img src="{!! SETTING_IMAGE_ROOT.$why['why_choose_image_4'] !!}" style="height: 100px;" class="mt-2">
                                    @else
                                        No Image Found
                                    @endif
                                @endif
                            </div>

                        </div>

                </div>
                  <div class="row mt-5">

                        <div class="col-md-3">
                            {!! html()->label('Why Choose Image', 'why_choose_image_5')->class('form-label') !!}
                            {!! html()->file('why_choose_image_5')->class('form-control') !!}
                            <small></small>
                            @error('why_choose_image_5')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                            <div class="mb-3">
                                @if(isset($why) && !empty($why))
                                    @if($why['why_choose_image_5'] && file_exists(SETTING_IMAGE_PATH.$why['why_choose_image_5']))
                                        <img src="{!! SETTING_IMAGE_ROOT.$why['why_choose_image_5'] !!}" style="height: 100px;" class="mt-2">
                                    @else
                                        No Image Found
                                    @endif
                                @endif
                            </div>

                        </div>
                         <div class="col-md-6">

                            {!! html()->label('Why Choose Description', 'why_choose_description_5')->class('form-label') !!}
                            {!! html()->textarea('why_choose_description_5', old('why_choose_description_5'))->class('form-control editor') !!}
                            @error('why_choose_description_5')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                        </div>

                </div>

                 <div class="row mt-5">


                         <div class="col-md-6 offset-md-3">

                            {!! html()->label('Why Choose Description', 'why_choose_description_6')->class('form-label') !!}
                            {!! html()->textarea('why_choose_description_6', old('why_choose_description_6'))->class('form-control editor') !!}
                            @error('why_choose_description_6')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror

                        </div>
                          <div class="col-md-3">
                            {!! html()->label('Why Choose Image', 'why_choose_image_6')->class('form-label') !!}
                            {!! html()->file('why_choose_image_6')->class('form-control') !!}
                            <small></small>
                            @error('why_choose_image_6')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                            <div class="mb-3">
                                @if(isset($why) && !empty($why))
                                    @if($why['why_choose_image_6'] && file_exists(SETTING_IMAGE_PATH.$why['why_choose_image_6']))
                                        <img src="{!! SETTING_IMAGE_ROOT.$why['why_choose_image_6'] !!}" style="height: 100px;" class="mt-2">
                                    @else
                                        No Image Found
                                    @endif
                                @endif
                            </div>

                        </div>

                </div>
                <hr class="divider mt-5 mb-4 ">

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
                    @if(isset($why) && !empty($why))
                        @if(array_key_exists("meta_image", $why) && file_exists(SETTING_IMAGE_PATH.$why['meta_image']))
                            <img src="{!! SETTING_IMAGE_ROOT.$why['meta_image'] !!}" style="height: 100px;" class="mt-2">
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
