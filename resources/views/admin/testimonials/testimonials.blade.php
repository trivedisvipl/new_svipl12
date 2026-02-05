@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Client says' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Client says </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')


                @if(isset($client))

                {!! html()->modelForm($client, 'PATCH', route('testimonials.update', $client->id))->id('testimonials-form')->acceptsFiles()->open() !!}
                @else
                {!! html()->form('POST', route('testimonials.store'))->id('testimonials-form')->acceptsFiles()->open() !!}
                @endif

                 <div class="mb-3 mt-3">
                    {!! html()->label('Description', 'description')->class('form-label') !!}
                    {!! html()->textarea('description', old('description'))->class('form-control')->rows(4) !!}
                    @error('description')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3 mt-3">

                {!! html()->label('Name', 'name')->class('form-label') !!}
                {{ html()->text('name', old('name'))->class('form-control') }}
                @error('name')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>


                <div class="mb-3 mt-3">
                    {!! html()->label('Country', 'country')->class('form-label') !!}
                    {!! html()->text('country', old('country'))->class('form-control') !!}
                    @error('country')
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


                <div class="mb-3">

                {!! html()->submit('Submit')->class('btn btn-primary') !!}
                <a href="{!! route('testimonials.index') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
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
