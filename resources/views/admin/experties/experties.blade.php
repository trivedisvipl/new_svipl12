
@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Expertise' !!}
@stop
@section('styles')

@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Expertise </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')


                @if(isset($expertise))

                    {!! html()->modelForm($expertise, 'PATCH', route('experties.update', $expertise->id))->id('slider-form')->acceptsFiles()->open() !!}
                @else
                    {!! html()->form('POST', route('experties.store'))->id('slider-form')->acceptsFiles()->open() !!}
                @endif

                <div class="mb-3 mt-3">

                {!! html()->label('Title', 'title')->class('form-label') !!}
                {{ html()->text('title', old('title'))->class('form-control') }}
                @error('title')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>

                <div class="mb-3 mt-3">
                    {!! html()->label('Short Description', 'short_description')->class('form-label') !!}
                    {!! html()->textarea('short_description', old('short_description'))->class('form-control')->rows(4) !!}
                    @error('short_description')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                 <div class="mb-3 mt-3">
                    {!! html()->label('Description', 'description')->class('form-label') !!}
                    {!! html()->textarea('description', old('description'))->class('form-control editor') !!}
                    @error('description')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3">
                {!! html()->label('Image', 'image')->class('form-label') !!}
                {!! html()->file('image')->class('form-control') !!}
                <small></small>
                @error('image')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>

                <div class="mb-3">
                @if(isset($expertise))
                @if($expertise->image && file_exists(EXPERTIES_IMAGE_PATH.$expertise->image))
                    <img src="{!! EXPERTIES_IMAGE_ROOT.$expertise->image !!}" style="height: 100px;" class="mt-2">
                @else
                    No Image Found
                @endif
                @endif
                </div>
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

                {!! html()->submit('Submit')->class('btn btn-primary') !!}
                <a href="{!! route('experties.index') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
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
