@extends('admin/layout')
@section('page_title','Category')
@section('category_select','active')
@section('content')
<div class="card-header">
<div class="row">
    <div class="col">
        <h2>Category</h2>
    </div>
    <div class="mr-0">
        <a href="{{ route('manage_category') }}">
            <button type="button" class="btn btn-primary btn-sm mr-3">Create Category</button>
        </a>
    </div>
</div>
@if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
</div>
<!-- DATA TABLE-->
<div class="card">
    <div class="card-body">
    <table class="table table-border table-responsive-sm table-data3">
    <thead>
        <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>category Slug</th>
            <th>status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $key=>$item)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $item->category_name }}</td>
            <td>{{ $item->category_slug }}</td>
            <td>
                @if($item->status == 1)
                <span class="text  text-success">Active</span>
                @elseif($item->status == 0)
                <span class="text  text-warning">De-Active</span>
                @endif
            </td>
            <td>
                <a href="{{ route('category.show',$item->id) }}" class="btn btn-success btn-sm"><i
                        class="nav-icon fa fa-eye"></i></a>
                <a href="{{ route('category.edit',$item->id) }}" class="btn btn-info btn-sm"><i
                        class="nav-icon fa fa-edit"></i></a>
                @if($item->status == 1)
                <a href=" {{ url('category/status/0',$item->id) }}" class="btn btn-success btn-sm"><i
                        class="fas fa-plus-circle"></i></a>
                @elseif($item->status == 0)
                <a href=" {{ url('category/status/1',$item->id) }}" class="btn btn-warning btn-sm"><i
                        class="fas fa-minus-circle"></i></a>
                @endif
                <a href=" {{ route('category.destroy',$item->id) }}" class="btn btn-danger btn-sm"><i
                        class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>

<!-- END DATA TABLE-->
@endsection