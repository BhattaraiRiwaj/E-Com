@extends('admin/layout')
@section('page_title','coupon-edit')
@section('content')
<div class="card-header">
    <div class="row">
    <div class="col">
        <p>Edit Coupon</p>
    </div>
    <div class="mr-0">
        <a href="{{route('coupon.index')}}" class="btn btn-light">Back</a>
    </div>
</div>
</div>

<div class="card">
<div class="card-body">
    <form action="{{ route('coupon.update',$coupons->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label name="title">Title :</label>
                <input type="text" name="title" class="form-control" value="{{ $coupons->title}}" required>
            </div>
            <div class="col-md-4">
                <label name="code">Code :</label>
                <input type="text" name="code" class="form-control" value="{{ $coupons->code }}" required>
            </div>
            <div class="col-md-4">
                <label name="value">Value :</label>
                <input type="text" name="value" class="form-control" value="{{ $coupons->value }}" required>
            </div>
        </div>
        <div class="mr-0 mt-4">
            <button type="submit" value="submit" class="btn btn-primary pull-right">Update</button>
        </div>
    </form>
</div>
</div>
@endsection