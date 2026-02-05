@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Work' !!}
@stop
@section('styles')
<link rel="stylesheet" href="{!! asset('assets/admin/vendor/libs/dropzone/dropzone2.css') !!}"/>
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Work </h4>
      <div class="row mb-4">
        <!-- Bootstrap Validation -->
        <div class="col-md">
          <div class="card">

            <div class="card-body">
                @include('admin.includes.notifications')


                @if(isset($work))

                {!! html()->modelForm($work, 'PATCH', route('work.update', $work->id))->id('work-form')->acceptsFiles()->open() !!}
                @else
                {!! html()->form('POST', route('work.store'))->id('work-form')->acceptsFiles()->open() !!}
                @endif

                <div class="mb-3 mt-3">

                    {!! html()->label('Work Category', 'portfolio_category_id')->class('form-label') !!}
                    {{ html()->select('portfolio_category_id', $categories, old('portfolio_category_id'))->class('form-control')->placeholder('Select Category') }}
                    @error('portfolio_category_id')
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
                    @if(isset($work))
                        @if($work->image && file_exists(WORK_IMAGE_PATH.$work->image))
                            <img src="{!! WORK_IMAGE_ROOT.$work->image !!}" style="height: 100px;" class="mt-2">
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
                    <a href="{!! route('work.index') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
                </div>
                {{ html()->form()->close() }}
            </div>

            {{-- For Drop Zone --}}
            <div class="card my-3">
                <h6 class="card-header">Work Images</h6>
                <div class="card-body">
                    <div style="display: inline-block;width: 100%;">
                        <div id="loading-overlay">
                            <div class="loading-icon"></div>
                        </div>


                        {!! html()->form('POST', route('work.storeImage'))->name('dropzone')->class('dropzone')->id('dropzone')->acceptsFiles()->open() !!}

                            @if(isset($work))
                                <input type="hidden" name="portfolio_id" value={{$work->id}}>
                                @php
                                    $workImage = App\Models\PortfolioImage::where('portfolio_id', $work->id)->orderBy('disp_order', 'asc')->get();
                                    $portfolioId = $work->id;
                                @endphp
                            @else
                                @php
                                    $portfolioId = session()->getId();
                                    $workImage = App\Models\PortfolioImage::where('sess_id', $portfolioId)->orderBy('disp_order', 'asc')->get();
                                @endphp
                            @endif

                            @php
                                $imageCount = $workImage->count();
                            @endphp

                            @if(isset($workImage))
                            <div id="sortme" class="row">
                                @foreach($workImage as $k => $v)
                                    <div class='col-sm-3 text-center my-4' id="images_{{$v->id}}" style='margin-bottom:10px;'>
                                        @if(file_exists(WORK_IMAGE_PATH.$portfolioId.'/'.$v->image))
                                            <img src="{{WORK_IMAGE_ROOT . $portfolioId . '/' . $v->image . '?' . rand() }}" style = "margin-bottom:3px;height:100px;width:auto;max-width:100%;" class="w-75">

                                            <a href="javascript:void(0);" data-propid="{{$portfolioId}}" data-imageid="{{$v->id}}" class="delete_btn btn btn-danger"><i class="fa fa-trash"></i></a>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            @endif
                            <div class="clear"> </div>

                        {{ html()->form()->close() }}
                    </div>
                </div>
                {{-- <div class="card-footer">
                    <div class="mb-3">
                        {!! Form::Button('Submit',array('class'=>'btn btn-primary ','type'=>'submit','form' => 'products-form')) !!}
                        <a href="{!! route('products.index') !!}" class="btn btn-label-secondary waves-effect">Cancel</a>
                    </div>
                </div> --}}
            </div>
            {{-- End For Drop Zone --}}

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
   {{-- For DropZone Js --}}
    <script src="{!! asset('assets/admin/vendor/libs/dropzone/dropzone2.js') !!}"></script>
 <script type="text/javascript">

     // For Drop Zone
        Dropzone.autoDiscover = false;
        $(document).ready(function (){
            var limit = {{ (10 - $imageCount) }};
            var imageSze = 10;
            var acceptedFileTypes =
                    "image/*"; //dropzone requires this param be a comma separated list
            var fileList = new Array;
            var i = 0;
            $("#dropzone").dropzone({
                addRemoveLinks: true,
                maxFiles: limit,
                dictMaxFilesExceeded: "Maximum upload limit reached",
                maxFilesize: imageSze, // MB
                dictFileTooBig: "Image too big! You can't upload image larger than " + imageSze + "MB",
                acceptedFiles: acceptedFileTypes,
                dictInvalidFileType: "upload only JPG/PNG/PDF",
                init: function () {
                    // Hack: Add the dropzone class to the element
                    $(this.element).addClass("dropzone");
                    this.on("processing", function (event) {
                        $("#loading-overlay").show();
                    });
                    this.on("success", function (file, serverFileName) {
                        fileList[i] = {
                            "serverFileName": serverFileName,
                            "fileName": file.name,
                            "fileId": i
                        };
                        //console.log(fileList);
                        i++;
                        $("#sortme").load(location.href + " #sortme > *", function () {
                            $(".delete_btn").attr('href', 'javascript:;');
                        });
                        $('.dz-success').remove();
                        $('.dz-message').show();
                        $("#loading-overlay").hide();
                    });
                },
            });

            //For delete image
            $('#sortme').on('click', '.delete_btn', function () {
                var $myLink = $(this);
                propId = $(this).data('propid');
                imgId = $(this).data('imageid');
                var v = confirm("Are you sure to delete?");
                if (!v) {
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: "/{{ADMIN_SLUG}}/work/deleteImage",
                    data: {
                        _token: "{{ csrf_token() }}",
                        portfolioId: propId,
                        imageId: imgId
                    },
                    dataType: "json",
                    success: function (resp) {
                        $myLink.closest('div').remove();
                        //window.location.reload();
                    }
                });
            });

            //For sort image order
            $("#sortme").sortable({
                revert: true,
                update: function () {
                    var serial = $('#sortme').sortable('serialize');
                    $.ajax({
                        url: "/{{ADMIN_SLUG}}/work/sortImage",
                        type: "post",
                        data: serial + '&_token=' + "{!! csrf_token() !!}",
                        error: function () {
                            alert("error something went wrong in AJAX");
                        }
                    });
                }
            });
        });
        // End For Drop Zone
 </script>
@stop
