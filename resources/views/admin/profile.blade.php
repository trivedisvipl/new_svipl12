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

                @if(isset($profile))
                {!! Form::model($profile, array('route' => array('profile.update', $profile->id), 'method' => 'PATCH','id' => 'profile-form','files' => true )) !!}
                @else
                {!! Form::open(array('route' => 'profile.store', 'id' => 'profile-form', 'files' => true)) !!}
                @endif

                <div class="mb-3">
                    {!! Form::label('name', 'Name',array('class'=>'form-label')) !!}
                    {!! Form::text('name', old('name'),array('class'=>'form-control')) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('username', 'Username',array('class'=>'form-label')) !!}
                    {!! Form::text('username', old('username'),array('class'=>'form-control')) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('email', 'E mail',array('class'=>'form-label')) !!}
                    {!! Form::email('email', old('email'),array('class'=>'form-control')) !!}
                </div>

                <div class="mb-3">
                    {!! Form::label('profile', 'Profile pic',array('class'=>'form-label')) !!}
                    {!! Form::file('profile',array('class'=>'form-control')) !!}
                </div>

                <div class="mb-3">
                    {!! Form::Button('Submit',array('class'=>'btn btn-primary ','type'=>'submit')) !!}
                    <a href="{!! URL(ADMIN_SLUG.'/dashboard') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
                </div>
              </form>
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
