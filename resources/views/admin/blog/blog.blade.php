@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Blog' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Blog </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')


                @if(isset($blog))

                {!! html()->modelForm($blog, 'PATCH', route('blog.update', $blog->id))->id('blog-form')->acceptsFiles()->open() !!}
                @else
                {!! html()->form('POST', route('blog.store'))->id('blog-form')->acceptsFiles()->open() !!}
                @endif

                <div class="mb-3 mt-3">

                    {!! html()->label('Blog Category', 'blog_category_id')->class('form-label') !!}
                    {{ html()->select('blog_category_id', $categories, old('blog_category_id'))->class('form-control')->placeholder('Select Category') }}
                    @error('blog_category_id')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

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

                <div class="mb-3">
                    {!! html()->label('Image', 'image')->class('form-label') !!}
                    {!! html()->file('image')->class('form-control') !!}
                <small></small>
                @error('image')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>

                <div class="mb-3">
                    @if(isset($blog))
                        @if($blog->image && file_exists(BLOG_IMAGE_PATH.$blog->image))
                            <img src="{!! BLOG_IMAGE_ROOT.$blog->image !!}" style="height: 100px;" class="mt-2">
                        @else
                            No Image Found
                        @endif
                    @endif
                </div>
                 <div class="mb-3 mt-3">
                    {!! html()->label('Description', 'description')->class('form-label') !!}
                    {!! html()->textarea('description', old('description'))->class('form-control editor') !!}
                    @error('description')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>


                <div class="mb-3">
                    {!! html()->label('Posted Image', 'posted_by_image')->class('form-label') !!}
                    {!! html()->file('posted_by_image')->class('form-control') !!}
                <small></small>
                @error('posted_by_image')
                    <span class="error-message">{!! $message !!} *</span>
                @enderror
                </div>

                <div class="mb-3">
                    @if(isset($blog))
                        @if($blog->posted_by_image && file_exists(BLOG_IMAGE_PATH.$blog->posted_by_image))
                            <img src="{!! BLOG_IMAGE_ROOT.$blog->posted_by_image !!}" style="height: 100px;" class="mt-2">
                        @else
                            No Image Found
                        @endif
                    @endif
                </div>
                 <div class="mb-3 mt-3">

                    {!! html()->label('Posted Name', 'posted_by')->class('form-label') !!}
                    {{ html()->text('posted_by', old('posted_by'))->class('form-control') }}
                    @error('posted_by')
                        <span class="error-message">{!! $message !!} *</span>
                    @enderror
                </div>

                <div class="mb-3 mt-3">

                    {!! html()->label('Posted Date', 'date')->class('form-label') !!}
                    {{ html()->date('date', old('date'))->class('form-control') }}
                    @error('date')
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
                    {!! html()->submit('Submit')->class('btn btn-primary') !!}
                    <a href="{!! route('blog.index') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
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
