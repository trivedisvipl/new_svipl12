@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Team' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Team </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')


                @if(isset($team))

                {!! html()->modelForm( $team, 'PATCH', route('team.update', $team->id))->id('team-form')->acceptsFiles()->open() !!}
                @else
                {!! html()->form('POST', route('team.store'))->id('team-form')->acceptsFiles()->open() !!}
                @endif

                <div class="mb-3 mt-3">

                {!! html()->label('Name', 'name')->class('form-label') !!}
                {{ html()->text('name', old('name'))->class('form-control') }}
                @error('name')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>


                <div class="mb-3 mt-3">
                    {!! html()->label('Position', 'position')->class('form-label') !!}
                    {!! html()->text('position', old('position'))->class('form-control') !!}
                    @error('position')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                 <div class="mb-3 mt-3">
                    {!! html()->label('Sub Title', 'description')->class('form-label') !!}
                    {!! html()->text('description', old('description'))->class('form-control') !!}
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
                @if(isset($team))
                    @if($team->image && file_exists(TEAM_IMAGE_PATH.$team->image))
                        <img src="{!! TEAM_IMAGE_ROOT.$team->image !!}" style="height: 100px;" class="mt-2">
                    @else
                        No Image Found
                    @endif
                @endif
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('Linkedin', 'linkedin')->class('form-label') !!}
                    {!! html()->text('linkedin', old('linkedin'))->class('form-control') !!}
                    @error('linkedin')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                 <div class="mb-3 mt-3">
                    {!! html()->label('Mail', 'mail')->class('form-label') !!}
                    {!! html()->text('mail', old('mail'))->class('form-control') !!}
                    @error('mail')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    {!! html()->label('Instagram', 'instagram')->class('form-label') !!}
                    {!! html()->text('instagram', old('instagram'))->class('form-control') !!}
                    @error('instagram')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                 <div class="mb-3 mt-3">
                    {!! html()->label('Twitter', 'twitter')->class('form-label') !!}
                    {!! html()->text('twitter', old('twitter'))->class('form-control') !!}
                    @error('twitter')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3">

                {!! html()->submit('Submit')->class('btn btn-primary') !!}
                <a href="{!! route('team.index') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
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
