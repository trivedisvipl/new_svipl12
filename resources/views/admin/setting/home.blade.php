@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Home Page' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Home Page </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')

                   {!! html()->modelForm($home, 'POST', route('setting.home.store'))
                    ->id('home-form')
                    ->attribute('enctype', 'multipart/form-data')
                    ->open() !!}



                <div class="mb-3">
                    {!! html()->label('Header Logo', 'header_logo')->class('form-label') !!}
                    {!! html()->file('header_logo')->class('form-control') !!}
                    <small></small>
                    @error('header_logo')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3">
                    @if(isset($home) && !empty($home))
                        @if($home['header_logo'] && file_exists(SETTING_IMAGE_PATH.$home['header_logo']))
                            <img src="{!! SETTING_IMAGE_ROOT.$home['header_logo'] !!}" style="height: 100px;" class="mt-2">
                        @else
                            No Image Found
                        @endif
                    @endif
                </div>

                 <div class="mb-3 mt-3">
                    {!! html()->label('Facebook Link', 'fb')->class('form-label') !!}
                    {!! html()->text('fb', old('fb'))->class('form-control') !!}
                    @error('fb')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                 <div class="mb-3 mt-3">
                    {!! html()->label('Instagram Link', 'instagram')->class('form-label') !!}
                    {!! html()->text('instagram', old('instagram'))->class('form-control') !!}
                    @error('instagram')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3 mt-3">
                    {!! html()->label('Twitter Link', 'twitter')->class('form-label') !!}
                    {!! html()->text('twitter', old('twitter'))->class('form-control') !!}
                    @error('twitter')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3 mt-3">
                    {!! html()->label('LinkedIn Link', 'linkedin')->class('form-label') !!}
                    {!! html()->text('linkedin', old('linkedin'))->class('form-control') !!}
                    @error('linkedin')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3 mt-3">
                    {!! html()->label('Phone-1', 'phone1')->class('form-label') !!}
                    {!! html()->text('phone1', old('phone1'))->class('form-control') !!}
                    @error('phone1')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('Phone-2', 'phone2')->class('form-label') !!}
                    {!! html()->text('phone2', old('phone2'))->class('form-control') !!}
                    @error('phone2')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3 mt-3">
                    {!! html()->label('Email', 'email')->class('form-label') !!}
                    {!! html()->text('email', old('email'))->class('form-control') !!}
                    @error('email')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <hr class="divider mt-5 mb-4 ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                        {!! html()->label('About Image', 'about_image')->class('form-label') !!}
                        {!! html()->file('about_image')->class('form-control') !!}
                        <small></small>
                        @error('about_image')
                            <span class="error-message">{!! $message !!} *</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            @if(isset($home) && !empty($home))
                                @if($home['about_image'] && file_exists(SETTING_IMAGE_PATH.$home['about_image']))
                                    <img src="{!! SETTING_IMAGE_ROOT.$home['about_image'] !!}" style="height: 250px;" class="mt-2">
                                @else
                                    No Image Found
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            {!! html()->label('About Description', 'about_description')->class('form-label') !!}
                            {!! html()->textarea('about_description', old('about_description'))->class('form-control editor') !!}
                            @error('about_description')
                                <span class="error-message">{!! $message !!} *</span>
                            @enderror
                        </div>
                    </div>


                </div>
                <hr class="divider mt-5 mb-4 ">
                <div class="mb-3">
                    {!! html()->label('Footer Logo', 'footer_logo')->class('form-label') !!}
                    {!! html()->file('footer_logo')->class('form-control') !!}
                    <small></small>
                    @error('footer_logo')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3">
                    @if(isset($home) && !empty($home))
                        @if($home['footer_logo'] && file_exists(SETTING_IMAGE_PATH.$home['footer_logo']))
                            <img src="{!! SETTING_IMAGE_ROOT.$home['footer_logo'] !!}" style="height: 100px;" class="mt-2">
                        @else
                            No Image Found
                        @endif
                    @endif
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('Footer About', 'footer_about')->class('form-label') !!}
                    {!! html()->textarea('footer_about', old('footer_about'))->class('form-control') !!}
                    @error('footer_about')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('Address', 'address')->class('form-label') !!}
                    {!! html()->textarea('address', old('address'))->class('form-control') !!}
                    @error('address')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                 <div class="mb-3 mt-3">
                    {!! html()->label('Address-2', 'address_2')->class('form-label') !!}
                    {!! html()->textarea('address_2', old('address_2'))->class('form-control') !!}
                    @error('address_2')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
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
