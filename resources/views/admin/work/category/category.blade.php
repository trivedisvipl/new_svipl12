@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Work Category' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Work Category </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')


                @if(isset($category))

                {!! html()->modelForm($category, 'PATCH', route('workcategories.update', $category->id))->id('work-category-form')->acceptsFiles()->open() !!}
                @else
                {!! html()->form('POST', route('workcategories.store'))->id('work-category-form')->acceptsFiles()->open() !!}
                @endif

                <div class="mb-3 mt-3">

                {!! html()->label('Name', 'name')->class('form-label') !!}
                {{ html()->text('name', old('name'))->class('form-control') }}
                @error('name')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>

                <div class="mb-3">

                {!! html()->submit('Submit')->class('btn btn-primary') !!}
                <a href="{!! route('workcategories.index') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
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
