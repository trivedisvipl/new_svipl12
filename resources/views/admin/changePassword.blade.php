@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!!'Change Password'!!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')

 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin</span> Change Password</h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')
                 {!! html()->modelForm([], 'POST', route(ADMIN_SLUG . '.password.change'))
                    ->id('password-form')
                    ->attribute('enctype', 'multipart/form-data')
                    ->open() !!}

                <div class="mb-3 mt-3">
                    {!! html()->label('Password', 'password')->class('form-label') !!}
                    {!! html()->password('password')->class('form-control') !!}

                   @error('old_password')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                  <div class="mb-3 mt-3">
                    {!! html()->label('Confirm password', 'password_confirmation')->class('form-label') !!}
                    {!! html()->password('password_confirmation')->class('form-control') !!}

                   @error('password_confirmation')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
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
