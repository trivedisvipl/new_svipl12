@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Slider' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Slider </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')


                @if(isset($slider))

                {!! html()->modelForm($slider, 'PATCH', route('slider.update', $slider->id))->id('slider-form')->acceptsFiles()->open() !!}
                @else
                {!! html()->form('POST', route('slider.store'))->id('slider-form')->acceptsFiles()->open() !!}
                @endif

                <div class="mb-3 mt-3">

                {!! html()->label('Title', 'title')->class('form-label') !!}
                {{ html()->text('title', old('title'))->class('form-control') }}
                @error('title')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>

                <div class="mb-3 mt-3">
                    {!! html()->label('Description', 'description')->class('form-label') !!}
                    {!! html()->textarea('description', old('description'))->class('form-control')->rows(4) !!}
                    @error('description')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('Link', 'link')->class('form-label') !!}
                    {!! html()->text('link', old('link'))->class('form-control') !!}
                    @error('link')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <div class="mb-3">
                {!! html()->label('Image', 'image')->class('form-label') !!}
                {!! html()->file('image')->class('form-control') !!}
                <small>1920*980</small>
                @error('image')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>

                <div class="mb-3">
                @if(isset($slider))
                @if($slider->image && file_exists(SLIDER_IMAGE_PATH.$slider->image))
                    <img src="{!! SLIDER_IMAGE_ROOT.$slider->image !!}" style="height: 100px;" class="mt-2">
                @else
                    No Image Found
                @endif
                @endif
                </div>

                <div class="mb-3">

                {!! html()->submit('Submit')->class('btn btn-primary') !!}
                <a href="{!! route('slider.index') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
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
