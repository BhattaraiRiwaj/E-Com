@extends('admin/layout')
@section('page_title','Product')
@section('product_select','active')
@section('content')
@if(session()->has('message'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
    {{session('message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
<div class="card-header">
    <div class="row">
        <h1 class="mb10">Product</h1>
        <div class="col mr-0">
        <a href="{{route('product.manage_product')}}" class="pull-right">
            <button type="button" class="btn btn-success">
                Add Product
            </button>
        </a>
        </div>
        
    </div>
</div>

<!-- DATA TABLE-->
<div class="card">
    <div class="card-body">
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->name}}</td>
                        <td>{{$list->slug}}</td>
                        <td>
                            @if($list->image!='')
                            <img width="100px" src="{{asset('storage/media/'.$list->image)}}" />
                            @endif
                        </td>
                        <td>
                            @if($list->status ==1)
                            <p class="text text-success">Active</p>
                            @elseif($list->status == 0)
                            <p class="text text-warning">De-Active</p>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('product.show',$list->id)}}"><i class="btn-sm fa fa-eye text-success"></i></a>
                            <a href="{{route('product.edit',$list->id)}}"><i class="btn-sm fa fa-edit text-info"></i></a>

                            @if($list->status==1)
                            <a href="{{url('product/status/0',$list->id)}}"><i class="btn-sm fa fa-plus-circle text-primary"></i></a>
                            @elseif($list->status==0)
                            <a href="{{url('product/status/1',$list->id)}}"><i class="btn-sm fa fa-minus-circle text-warning"></i></a>
                            @endif

                            <a href="{{route('product.destroy',$list->id)}}"><i class="btn-sm fa fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END DATA TABLE-->


@endsection