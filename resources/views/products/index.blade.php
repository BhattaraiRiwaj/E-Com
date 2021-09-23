
<style>
.zoom {
  transition: transform .2s; /* Animation */
  width: 100px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom)*/
}

img:hover {
transform: scale(2.3);
}
</style>



@extends('admin/layout')
@section('page_title','Product')
@section('product_select','active')
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
            <h4>product</h4>
        </div>
        <div class="mr-0">
            <a href="{{ route('product.create') }}">
                <button type="button" class="btn btn-primary btn-sm mr-3">Create product</button>
            </a>
        </div>
    </div>
</div>
<!-- DATA TABLE-->
<div class="card">
    <div class="card-body">
        <table class="table table-border table-responsive-sm table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <!-- <th>category Id</th> -->
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th>Model</th>
                    <!-- <th>Short Desc</th>
                <th>Desc</th>
                <th>Keywords</th>
                <th>Technical Specification</th>
                <th>Uses</th>
                <th>Warranty</th> -->
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $key=>$product)
                <tr>
                    <td>{{ $key+1}}</td>
                    <!-- <td>{{ $product->category_id }}</td> -->
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->slug }}</td>
                    <td>
                        <div class="zoom">
                            @if($product->image != '')
                            <img width="100px" height="50px" src="{{ asset('/storage/media/'.$product->image) }}"
                                alt="">
                            @endif
                        </div>
                    </td>


                    <td>{{ $product->model }}</td>
                    <!--  <td>{{ $product->short_desc }}</td>
                <td>{{ $product->desc }}</td>
                <td>{{ $product->keywords }}</td>
                <td>{{ $product->technical_specification }}</td>
                <td>{{ $product->uses }}</td>
                <td>{{ $product->warranty }}</td> -->
                    <td>
                        @if($product->status == 1)
                        <span class="text text-success">Active</span>
                        @elseif($product->status == 0)
                        <span class="text text-warning">De-Active</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('product.show',$product->id) }}" class="btn btn-success btn-sm"><i
                                class="nav-icon fa fa-eye"></i></a>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-info btn-sm"><i
                                class="nav-icon fa fa-edit"></i></a>
                        @if($product->status == 1)
                        <a href=" {{ url('product/status/0',$product->id) }}" class="btn btn-success btn-sm"><i
                                class="fas fa-plus-circle"></i></a>
                        @elseif($product->status == 0)
                        <a href=" {{ url('product/status/1',$product->id) }}" class="btn btn-warning btn-sm"><i
                                class="fas fa-minus-circle"></i></a>
                        @endif
                        <a href=" {{ route('product.destroy',$product->id) }}" class="btn btn-danger btn-sm"><i
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