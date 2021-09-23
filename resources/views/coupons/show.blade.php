@extends('admin/layout')
@section('page_title','coupon-show')
@section('content')
<div class="card-header">
    <div class="row">
    <div class="col">
        <h4>Coupen Show</h4>
    </div>
    <div class="mr-0">
        <a href="{{ route('coupon.index') }}" class="btn btn-light">Back</a>
    </div>
</div>
</div>

<div class="card">
<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <label for="title">Title :</label>
            <p>{{ $coupons->title }}</p>
        </div>
        <div class="col-md-4">
            <label for="code">Code :</label>
            <p>{{ $coupons->code}}</p>
        </div>
        <div class="col-md-4">
            <label for="value">Value :</label>
            <p>{{ $coupons->value }}</p>
        </div>
    </div>
</div>
</div>
@endsection