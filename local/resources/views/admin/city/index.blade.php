@extends('admin.layout.main')

@section('title') @lang('admin.Manage_Cities') @endsection

@section('icon') mdi-map-marker @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-md-12">
<div class="card py-3 m-b-30">

<div class="row">
<div class="col-md-12" style="text-align: right;"><a href="{{ Asset($link.'add') }}" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-warning">@lang('admin.Add New')</a>&nbsp;&nbsp;&nbsp;</div>

</div>


<div class="card-body">
<table class="table table-hover ">
<thead>
<tr>
<th>@lang('admin.Name')</th>
<th>@lang('admin.Status')</th>
<th style="text-align: right">@lang('admin.Option')</th>
</tr>

</thead>
<tbody>

@foreach($data as $row)

<tr>
<td width="40%">{{ $row->name }}</td>
<td width="40%">

@if($row->status == 0)

<button type="button" class="btn btn-sm m-b-15 ml-2@lang('admin.Option') mr-2 btn-success" onclick="confirmAlert('{{ Asset($link.'status/'.$row->id) }}')">@lang('admin.Active')</button>

@else

<button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-danger" onclick="confirmAlert('{{ Asset($link.'status/'.$row->id) }}')">@lang('admin.Disabled')</button>

@endif

</td>

<td width="20%" style="text-align: right">

<a href="{{ Asset($link.$row->id.'/edit') }}" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-success" data-toggle="tooltip" data-placement="top" data-original-title="@lang('admin.Edit This Entry')"><i class="mdi mdi-border-color"></i></a>

<button type="button" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-danger" data-toggle="tooltip" data-placement="top" data-original-title="@lang('admin.Delete This Entry')" onclick="deleteConfirm('{{ Asset($link."delete/".$row->id) }}')"><i class="mdi mdi-delete-forever"></i></button>


</td>
</tr>

@endforeach

</tbody>
</table>

</div>
</div>
</div>
</div>
</div>
</section>

@endsection
