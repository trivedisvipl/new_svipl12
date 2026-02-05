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
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Work Category</h4>
        <!-- Ajax Sourced Server-side -->
        <div class="card">
            <div class ="row card-header">
                <div class ="col-md-8">
                  <h5 class="align-middle">Work Category List</h5>
                </div>
                <div class ="col-md-4">
                  <a class="btn btn-success float-end" href="{!! route('workcategories.create') !!}">ADD</a>
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
  <!-- Content wrapper -->
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
    url: "/{!! ADMIN_SLUG !!}/workcategories/" + id,
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
        window.LaravelDataTables["work-categories-table"].draw();
    },
    error: function(e) {
        alert('Error: ' + e);
    }
});
}

function statusChange(id){
$.ajax({
    type: "POST",
    url: '{{ route("workcategories.changeStatus") }}',
    datatype: "json",
    data: {
        '_token': '{!! csrf_token() !!}',
        'id':id,
    },
    beforeSend: function () {

    },
    success: function(resp) {
        if(resp.success){
            $('.alert-success').children(".msg-content").html(resp.message);
            $('.alert-success').removeClass("d-none").show();
            $("html, body").animate({ scrollTop: 0 }, 600);
        }else{
            $('.alert-danger').children(".msg-content").html(resp.message);
            $('.alert-danger').removeClass("d-none").show();
            $("html, body").animate({ scrollTop: 0 }, 600);
        }
        window.LaravelDataTables["work-categories-table"].draw();
    },
    error: function(e) {

    }
});
}

  </script>
@stop
