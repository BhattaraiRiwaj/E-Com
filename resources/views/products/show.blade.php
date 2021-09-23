@extends('admin/layout')
@section('page_title','coupon-show')
@section('content')
<div class="card-header">
    <div class="row">
        <div class="col">
            <h4>Coupen Show</h4>
        </div>
        <div class="mr-0">
            <a href="{{ route('product.index') }}" class="btn btn-light">Back</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <!--category_id-->
            <div class="col-md-4">
                <label name="category_id">Category Id :</label>
                <p>{{ $products->category_id }}</p>
            </div>

            <!--name-->
            <div class="col-md-4">
                <label name="name">Name :</label>
                <p>{{ $products->name }}</p>
            </div>

            <!--slug-->
            <div class="col-md-4">
                <label name="slug">Slug :</label>
                <p>{{ $products->slug}}</p>
            </div>

            <!--brand-->
            <div class="col-md-4">
                <label name="brand">Brand :</label>
                <p>{{ $products->brand}}</p>

            </div>

            <!--model-->
            <div class="col-md-4">
                <label name="model">Model :</label>
                <p>{{$products->model}}</p>

            </div>

            <!--short_desc-->
            <div class="col-md-4">
                <label name="short_desc">Short Desc :</label>
                <p>{{$products->short_desc}}</p>

            </div>

            <!--desc-->
            <div class="col-md-4">
                <label name="desc">Desc :</label>
                <p>{{$products->desc}}</p>

            </div>

            <!--keywords-->
            <div class="col-md-4">
                <label name="keywords">Keywords :</label>
                <p>{{$products->keywords}}</p>

            </div>

            <!--technical_specification-->
            <div class="col-md-4">
                <label name="technical_specification">Technical Specification :</label>
                <p>{{$products->technical_specification}}</p>

            </div>

            <!--uses-->
            <div class="col-md-4">
                <label name="uses">uses :</label>
                <p>{{$products->uses}}</p>

            </div>

            <!--warranty-->
            <div class="col-md-4">
                <label name="warranty">warranty :</label>
                <p>{{$products->warranty}}</p>

            </div>
        </div>
    </div>
</div>
@endsection