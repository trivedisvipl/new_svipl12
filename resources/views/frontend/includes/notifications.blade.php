@if (count($errors->all()) > 0)
<div class="alert alert-danger alert-block position-relative">
    <i class="fa fa-ban"></i>
    <button type="button" class="close alert-closr" data-dismiss="alert"><i class="fa fa-times text-danger"></i></button>
    <strong>Error!</strong>
    <ul>
        @foreach($errors->all() as $message)
        <li>{!! $message !!}</li>
        @endforeach
    </ul>
</div>
@endif

@if ($message = Session::get('success_message'))
<div class="alert alert-success alert-block position-relative">
    <i class="fa fa-check"></i>
    <button type="button" class="close alert-closr" data-dismiss="alert"><i class="fa fa-times  text-success"></i></button>
    <strong>Success!</strong>
    @if(is_array($message))
    <ul>
    @foreach ($message as $m)
        <li>{!! $m !!}</li>
    @endforeach
    </ul>
    @else
    {!! $message !!}
    @endif
</div>
@endif

@if ($message = Session::get('error_message'))
<div class="alert alert-danger alert-block position-relative">
    <i class="fa fa-ban"></i>
    <button type="button" class="close alert-closr" data-dismiss="alert"><i class="fa fa-times text-danger"></i></button>
    <strong>Error!</strong>
    @if(is_array($message))
    @foreach ($message as $m)
    {!! $m !!}
    @endforeach
    @else
    {!! $message !!}
@endif
</div>
@endif

@if ($message = Session::get('warning_message'))
<div class="alert alert-warning alert-block position-relative">
    <i class="fa fa-warning"></i>
    <button type="button" class="close alert-closr" data-dismiss="alert"><i class="fa fa-times text-warning"></i></button>
    <strong>Warning!</strong>
    @if(is_array($message))
    @foreach ($message as $m)
    {!! $m !!}
    @endforeach
    @else
    {!! $message !!}
    @endif
</div>
@endif

@if ($message = Session::get('info_message'))
<div class="alert alert-info alert-block position-relative">
    <i class="fa fa-info"></i>
    <button type="button" class="close alert-closr" data-dismiss="alert"><i class="fa fa-times text-info"></i></button>
    <strong>Info!</strong>
    @if(is_array($message))
    @foreach ($message as $m)
    {!! $m !!}
    @endforeach
    @else
    {!! $message !!}
    @endif
</div>
@endif

<!--ajax response message-->
<div class="alert alert-danger d-none position-relative">
    <i class="fa fa-ban"></i>
    <button type="button" aria-hidden="true" class="close alert-closr"><i class="fa fa-times text-danger"></i></button>
    <span class="msg-content"></span>
</div>
<div class="alert alert-success d-none position-relative">
    <i class="fa fa-check"></i>
    <button type="button" aria-hidden="true" class="close alert-closr"><i class="fa fa-times text-success"></i></button>
    <span class="msg-content"></span>
</div>
<div class="alert alert-info d-none position-relative">
    <i class="fa fa-info"></i>
    <button type="button" aria-hidden="true" class="close alert-closr"><i class="fa fa-times text-info"></i></button>
    <span class="msg-content"></span>
</div>
<div class="alert alert-warning d-none position-relative">
    <i class="fa fa-warning"></i>
    <button type="button" aria-hidden="true" class="close alert-closr"><i class="fa fa-times text-warning"></i></button>
    <span class="msg-content"></span>
</div>
<!--Ajax response message over-->
