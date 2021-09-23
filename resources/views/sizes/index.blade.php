@extends('admin/layout')
@section('page_title','Size')
@section('size_select','active')
@section('content')

@if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
<div class="card-header">
<div class="row">
    <div class="col">
        <h2>Size</h2>
    </div>
    <div class="mr-0">
        <a href="{{ route('size.create') }}">
            <button type="button" class="btn btn-primary btn-sm mr-3">Create size</button>
        </a>
    </div>
</div>
</div>



<!-- DATA TABLE-->
<div class="card">
    <div class="card-body">
    <table class="table table-border table-responsive-sm table-data3">
    <thead>
        <tr>
            <th>#</th>
            <th>Size</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sizes as $key=>$size)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $size->size }}</td>
            <td>
                @if($size->status == 1)
                <span class="text text-success">Active</span>
                @elseif($size->status == 0)
                <span class="text text-warning">De-Active</span>
                @endif
            </td>
            <td>
                <a href="{{ route('size.show',$size->id) }}" class="btn btn-success btn-sm"><i
                        class="nav-icon fa fa-eye"></i></a>
                <a href="{{ route('size.edit',$size->id) }}" class="btn btn-info btn-sm"><i
                        class="nav-icon fa fa-edit"></i></a>
                @if($size->status == 1)
                <a href=" {{ url('size/status/0',$size->id) }}" class="btn btn-success btn-sm"><i
                        class="fas fa-plus-circle"></i></a>
                @elseif($size->status == 0)
                <a href=" {{ url('size/status/1',$size->id) }}" class="btn btn-warning btn-sm"><i
                        class="fas fa-minus-circle"></i></a>
                @endif
                <a href=" {{ route('size.destroy',$size->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"
                        aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>

<!-- END DATA TABLE-->
@endsection