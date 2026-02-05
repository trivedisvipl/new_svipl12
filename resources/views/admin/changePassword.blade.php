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

                {!! Form::open(['route' => ADMIN_SLUG.'.password.change', 'id' => 'change-password-form']) !!}


                    <div class="mb-3">
                        {!! Form::label('password','Old Password',array('class'=>'form-label')) !!}
                        {!! Form::password('old_password', array('class'=>'form-control','id' => 'old_password')) !!}
                    </div>

                    <div class="mb-3">
                        {!! Form::label('password','New Password',array('class'=>'form-label')) !!}
                        {!! Form::password('password', array('class'=>'form-control','id' => 'password')) !!}
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>

                    <div class="mb-3">
                        {!! Form::label('cpassword','Confirm Password:',array('class'=>'form-label')) !!}
                        {!! Form::password('password_confirmation', array('class'=>'form-control','id' => 'password_confirmation')) !!}
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>

                    <div class="mb-3">

                        {!! Form::Button('Submit',array('class'=>'btn btn-primary ','type'=>'submit')) !!}
                        <a href="{!! URL(ADMIN_SLUG.'/dashboard') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
                    </div>

                {!! Form::close()!!}


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
