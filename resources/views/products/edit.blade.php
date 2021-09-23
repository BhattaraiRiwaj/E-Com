@extends('admin/layout')
@section('page_title','product-edit')
@section('content')


<div class="card-header">
    <div class="row">
        <div class="col">
            <p>Edit Product</p>
        </div>
        <div class="mr-0">
            <a href="{{route('product.index')}}" class="btn btn-light">Back</a>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-body">
        <form action="{{ route('product.update',$products->id) }}" method="post">
            @csrf
            <div class="row">
                <!--category_id-->
                <div class="col-md-4">
                    <label name="category_id">Category Id :</label>
                    <select name="category_id" class="form-control">
                        <option value=" Select Category " disabled selected>Select Category</option>
                        @foreach($categories as $key=>$category)
                        @if($products->category_id == $category->id)
                        <option value="{{ $category->id }}" selected>
                            @else
                        <option value="{{ $category->id }}">
                            @endif
                            {{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <!--name-->
                <div class="col-md-4">
                    <label name="name">Name :</label>
                    <input type="text" name="name" class="form-control" value="{{ $products->name}}" required>
                    @error('name')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--slug-->
                <div class="col-md-4">
                    <label name="slug">Slug :</label>
                    <input type="text" name="slug" class="form-control" value="{{ $products->slug}}" required>
                    @error('slug')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--brand-->
                <div class="col-md-4">
                    <label name="brand">Brand :</label>
                    <input type="text" name="brand" class="form-control" value="{{ $products->brand}}" required>
                    @error('brand')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--model-->
                <div class="col-md-4">
                    <label name="model">Model :</label>
                    <input type="text" name="model" class="form-control" value="{{ $products->model}}" required>
                    @error('model')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--short_desc-->
                <div class="col-md-4">
                    <label name="short_desc">Short Desc :</label>
                    <input type="text" name="short_desc" class="form-control" value="{{ $products->short_desc}}"
                        required>
                    @error('short_desc')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--desc-->
                <div class="col-md-4">
                    <label name="desc">Desc :</label>
                    <input type="text" name="desc" class="form-control" value="{{ $products->desc}}" required>
                    @error('desc')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--keywords-->
                <div class="col-md-4">
                    <label name="keywords">Keywords :</label>
                    <input type="text" name="keywords" class="form-control" value="{{ $products->keywords}}" required>
                    @error('keywords')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--technical_specification-->
                <div class="col-md-4">
                    <label name="technical_specification">Technical Specification :</label>
                    <input type="text" name="technical_specification" class="form-control"
                        value="{{ $products->technical_specification}}" required>
                    @error('technical_specification')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--uses-->
                <div class="col-md-4">
                    <label name="uses">uses :</label>
                    <input type="text" name="uses" class="form-control" value="{{ $products->uses}}" required>
                    @error('uses')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--warranty-->
                <div class="col-md-4">
                    <label name="warranty">warranty :</label>
                    <input type="text" name="warranty" class="form-control" value="{{ $products->warranty}}" required>
                    @error('warranty')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!--image-->
                <div class="col-md-4">
                    <label name="image">Image :</label>
                    <input type="file" name="image" class="form-control" value="{{ $products->image}}">
                    @error('image')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mr-0 mt-4">
                <button type="submit" value="submit" class="btn btn-primary pull-right">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection