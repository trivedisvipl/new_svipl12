@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Careers Apply' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Careers</h4>
        <!-- Ajax Sourced Server-side -->
        <div class="card">
            <div class ="row card-header">
                <div class ="col-md-8">
                  <h5 class="align-middle">Careers Apply</h5>
                </div>

              </div>
              <div class="card-body">
                @include('admin.includes.notifications')
                <div class="card-datatable text-nowrap">
                  {{ $dataTable->table() }}
                </div>
            </div>
        </div>
        <!--/ Ajax Sourced Server-side -->

  </div>


<!-- Pricing Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-simple modal-pricing">
        <div class="modal-content p-2 p-md-5">
        <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <h3 class="mb-4 text-center mb-4">Career Apply Details</h3>
            <div class="col-12 row fs-4">
                <div class="col-md-3">
                    <b>Name</b>
                </div>
                <div class="col-md-9">
                    <p class="detail-name"></p>
                </div>
            </div>

             <div class="col-12 row fs-4">
                <div class="col-md-3">
                    <b>Email</b>
                </div>
                <div class="col-md-9">
                    <p class="detail-email"></p>
                </div>
            </div>
             <div class="col-12 row fs-4">
                <div class="col-md-3">
                    <b>Phone Number</b>
                </div>
                <div class="col-md-9">
                    <p class="detail-contact"></p>
                </div>
            </div>
            <div class="col-12 row fs-4">
                <div class="col-md-3">
                    <b>Position</b>
                </div>
                <div class="col-md-9">
                    <p class="detail-position"></p>
                </div>
            </div>
             <div class="col-12 row fs-4">
                <div class="col-md-3">
                    <b>Skills</b>
                </div>
                <div class="col-md-9">
                    <p class="detail-skills"></p>
                </div>
            </div>
             <div class="col-12 row fs-4">
                <div class="col-md-3">
                    <b>Work Experience</b>
                </div>
                <div class="col-md-9">
                    <p class="detail-experience"></p>
                </div>
            </div>
             <div class="col-12 row fs-4">
                <div class="col-md-3">
                    <b>Apply For Position</b>
                </div>
                <div class="col-md-9">
                    <p class="detail-position"></p>
                </div>
            </div>
             <div class="col-12 row fs-4">
                <div class="col-md-3">
                    <b>Resume</b>
                </div>
                <div class="col-md-9">
                    <p class="detail-resume"></p>
                </div>
            </div>


        </div>
        </div>
    </div>
    </div>
    <!--/ Pricing Modal -->
@stop
@section('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

<script type="text/javascript">

function deleteData(id){

var r = confirm("Are you sure to delete this ?");
if (!r) {
    return false
}
$.ajax({
    type: "POST",
    url: "/{!! ADMIN_SLUG !!}/careers/" + id,
    data: {
        _method: 'DELETE',
        _token: "{!! csrf_token() !!}"
    },
    dataType: 'json',
    beforeSend: function() {
        $('.alert .msg-content').html('');
        $('.alert').hide();
    },
    success: function(resp) {
        $('.alert:not(".session-box")').show();
        if (resp.success) {
            $('.alert-success .msg-content').html(resp.message);
            $('.alert-success').removeClass('d-none');
            $("html, body").animate({ scrollTop: 0 }, 600);
        } else {
            $('.alert-danger .msg-content').html(resp.message);
            $('.alert-danger').removeClass('d-none');
            $("html, body").animate({ scrollTop: 0 }, 600);
        }
        window.LaravelDataTables["careers-table"].draw();
    },
    error: function(e) {
        alert('Error: ' + e);
    }
});
}
function viewData(el){
    let rawData = $(el).data('info'); // jQuery parses JSON automatically
    console.log(rawData);
    $('.detail-name').text(rawData.name);
    $('.detail-email').text(rawData.email);
    $('.detail-contact').text(rawData.phone);
    $('.detail-position').text(rawData.position);
    $('.detail-skills').text(rawData.skills);
    $('.detail-experience').text(rawData.experience);
    $('.detail-notice_period').text(rawData.notice_period);
      $('.detail-resume').html('<a href="{!! CAREER_PDF_ROOT !!}'+rawData.resume+'" download="'+rawData.resume+'"><i class="fa-solid fa-file-pdf text-danger"></i></a>');

    $('#detailModal').modal('show');

}
$('#detailModal').on('hidden.bs.modal', function () {
    $('.detail-name').text("");
    $('.detail-email').text("");
    $('.detail-contact').text("");
    $('.detail-position').text("");
    $('.detail-skills').text("");
    $('.detail-experience').text("");
    $('.detail-notice_period').text("");
    $('.detail-resume').html("");

});


  </script>
@stop
