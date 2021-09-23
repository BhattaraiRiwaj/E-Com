@extends('admin/layout')
@section('page_title','Coupon')
@section('coupon_select','active')
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
        <h4>coupon</h4>
    </div>
    <div class="mr-0">
        <a href="{{ route('coupon.create') }}">
            <button type="button" class="btn btn-primary btn-sm">Create coupon</button>
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
            <th>Coupon Title</th>
            <th>Coupon Code</th>
            <th>Coupon Value</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($coupons as $key=>$coupon)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $coupon->title }}</td>
            <td>{{ $coupon->code }}</td>
            <td>{{ $coupon->value }}</td>
            <td>
                @if($coupon->status == 1)
                <span class="text text-success">Active</span>
                @elseif($coupon->status == 0)
                <span class="text text-warning">De-Active</span>
                @endif
            </td>
            <td>
                <a href="{{ route('coupon.show',$coupon->id) }}" class="btn btn-success btn-sm"><i class="nav-icon fa fa-eye"></i></a>
                <a href="{{ route('coupon.edit',$coupon->id) }}" class="btn btn-info btn-sm"><i class="nav-icon fa fa-edit"></i></a>
                @if($coupon->status == 1)
                <a href=" {{ url('coupon/status/0',$coupon->id) }}" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i></a>
                @elseif($coupon->status == 0)
                <a href=" {{ url('coupon/status/1',$coupon->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-minus-circle"></i></a>
                @endif
                <a href=" {{ route('coupon.destroy',$coupon->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>

<!-- END DATA TABLE-->
@endsection