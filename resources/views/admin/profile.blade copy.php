@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Admin Profile' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin</span> Profile</h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')

                 {!! html()->modelForm($profile, 'POST', route(ADMIN_SLUG . '.profile.store'))
                    ->id('profile-form')
                    ->attribute('enctype', 'multipart/form-data')
                    ->open() !!}

                <div class="mb-3 mt-3">
                    {!! html()->label('Name', 'name')->class('form-label') !!}
                    {!! html()->text('name', old('name'))->class('form-control') !!}
                   @error('name')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('E Mail', 'email')->class('form-label') !!}
                    {!! html()->email('email', old('email'))->class('form-control') !!}
                   @error('email')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('Username', 'username')->class('form-label') !!}
                    {!! html()->text('username', old('username'))->class('form-control') !!}
                   @error('username')
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
                    @if(isset($profile))
                        @if($profile->image && file_exists(SETTING_IMAGE_PATH.$profile->image))
                            <img src="{!! SETTING_IMAGE_ROOT.$profile->image !!}" style="height: 100px;" class="mt-2">
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
