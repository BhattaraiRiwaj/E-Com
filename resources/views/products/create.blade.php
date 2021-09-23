@extends('admin/layout')
@section('page_title','coupon-create')
@section('content')

@if($id>0)
        {{$image_required=""}}
    @else
        {{$image_required="required"}}
    @endif
<div class=" card-header">
    <div class="row">
        <div class="col">
            <p>Create product</p>
        </div>
        <div class="mr-0">
            <a href="{{ route('product.index') }}" class="btn btn-light">Back</a>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-body">
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!--category_id-->
                <div class="col-md-4">
                    <label name="category_id">Category Id :</label>
                    <select name="category_id" class="form-control">
                        <option value=" Select Category " disabled selected>Select Category</option>
                        @foreach($products as $key=>$category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <!--name-->
                <div class="col-md-4">
                    <label name="name">Name :</label>
                    <input type="text" name="name" class="form-control" required>
                    @error('name')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--slug-->
                <div class="col-md-4">
                    <label name="slug">Slug :</label>
                    <input type="text" name="slug" class="form-control" required>
                    @error('slug')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--brand-->
                <div class="col-md-4">
                    <label name="brand">Brand :</label>
                    <input type="text" name="brand" class="form-control" required>
                    @error('brand')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--model-->
                <div class="col-md-4">
                    <label name="model">Model :</label>
                    <input type="text" name="model" class="form-control" required>
                    @error('model')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--image-->
                <div class="col-md-4">
                    <label name="image">Image :</label>
                <input type="file" name="image" class="form-control" value="{{ $image_required }}" require>
                    @error('image')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
                <!--short_desc-->
                <div class="col">
                    <label name="short_desc">Short Desc :</label>
                    <textarea type="text" name="short_desc" class="form-control" required></textarea>
                    @error('short_desc')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--desc-->
                <div class="col">
                    <label name="desc">Desc :</label>
                    <textarea type="text" name="desc" class="form-control" required></textarea>
                    @error('desc')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--keywords-->
                <div class="col">
                    <label name="keywords">Keywords :</label>
                    <textarea type="text" name="keywords" class="form-control" required></textarea>
                    @error('keywords')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--technical_specification-->
                <div class="col">
                    <label name="technical_specification">Technical Specification :</label>
                    <textarea type="text" name="technical_specification" class="form-control" required></textarea>
                    @error('technical_specification')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>
            

            <div class="row">

                <!--uses-->
                <div class="col-md-6">
                    <label name="uses">uses :</label>
                    <input type="text" name="uses" class="form-control" required>
                    @error('uses')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--warranty-->
                <div class="col-md-6">
                    <label name="warranty">warranty :</label>
                    <input type="text" name="warranty" class="form-control" required>
                    @error('warranty')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
    </div>
</div>

<p><b>Product Attribute</b></p>
<div class="card">
    <div class="card-body">
        <div class="row">
            <!--Product id-->
            <div class="col-md-2">
                <label name="product_id">Product id :</label>
                <input type="text" name="product_id" class="form-control" required>
                @error('product_id')
                <p class="text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!--image-->
            <div class="col-md-4">
                <label name="image">Image :</label>
                <input type="file" name="image" class="form-control" required>
                @error('image')
                <p class="text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!--sku-->
            <div class="col-md-2">
                <label name="sku">Sku :</label>
                <input type="text" name="sku" class="form-control" required>
                @error('sku')
                <p class="text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!--price-->
            <div class="col-md-2">
                <label name="price">price :</label>
                <input type="text" name="price" class="form-control" required>
                @error('price')
                <p class="text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!--price-->
            <div class="col-md-2">
                <label name="qty">Quantity :</label>
                <input type="text" name="qty" class="form-control" required>
                @error('qty')
                <p class="text text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <!--size_id-->
            <div class="col-md-6">
                <label name="size_id">Size Id :</label>
                <input type="text" name="size_id" class="form-control" required>
                @error('size_id')
                <p class="text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!--color_id-->
            <div class="col-md-6">
                <label name="color_id">Color Id :</label>
                <input type="text" name="color_id" class="form-control" required>
                @error('color_id')
                <p class="text text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

</div>
<div class="mr-0 mt-2">
    <button type="submit" value="submit" class="btn btn-primary pull-right">Submit</button>
</div>
<input type="hidden" name="id" value="{{$id}}" />
</form>

@endsection