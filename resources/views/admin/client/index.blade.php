@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
@parent :: {!! 'Our Clients' !!}
@stop
@section('styles')
<style>
    table.dt-rowReorder-float{position:absolute !important;opacity:.8;table-layout:fixed;outline:2px solid #888;outline-offset:-2px;z-index:2001}tr.dt-rowReorder-moving{outline:2px solid #555;outline-offset:-2px}body.dt-rowReorder-noOverflow{overflow-x:hidden}table.dataTable td.reorder{cursor:move}
</style>

@stop
{{-- Content --}}
@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Our Clients</h4>
        <!-- Ajax Sourced Server-side -->
        <div class="card">
            <div class ="row card-header">
                <div class ="col-md-8">
                  <h5 class="align-middle">Our Clients List</h5>
                </div>
                <div class ="col-md-4">
                  <a class="btn btn-success float-end" href="{!! route('clients.create') !!}">ADD</a>
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
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css">
<script src="https://cdn.datatables.net/rowreorder/1.4.1/js/dataTables.rowReorder.min.js"></script>

{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
{{-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script> --}}
<script>
    $(function () {
    let table = window.LaravelDataTables["client-table"];

    table.on('row-reorder', function (e, diff, edit) {

        let order = [];

        diff.forEach(function (row) {
            order.push({
                id: table.row(row.node).data().id,
                position: row.newPosition
            });
        });

        console.log(order);
        $.ajax({
            type: "POST",
            url: '{{ route("clients.reorder") }}',
            data: {
                order: order,
                _token: "{!! csrf_token() !!}"
            },
            dataType: 'json',

            beforeSend: function () {
            },
            success: function (resp) {
                table.draw();
            },
            error: function (e) {
            }
        });

    });
});


</script>

<script type="text/javascript">


function deleteData(id){

var r = confirm("Are you sure to delete this ?");
if (!r) {
    return false
}
$.ajax({
    type: "POST",
    url: "/{!! ADMIN_SLUG !!}/clients/" + id,
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
        window.LaravelDataTables["client-table"].draw();
    },
    error: function(e) {
        alert('Error: ' + e);
    }
});
}

function statusChange(id){
$.ajax({
    type: "POST",
    url: '{{ route("clients.changeStatus") }}',
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
        window.LaravelDataTables["client-table"].draw();
    },
    error: function(e) {

    }
});
}

  </script>
@stop
