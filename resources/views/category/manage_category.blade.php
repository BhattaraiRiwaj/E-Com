@extends('admin/layout')
@section('page_title','Manage Category')
@section('content')


<div class="card-header">
<div class="row m-t-30">
    <div class="col md-12">
        <h2>Manage Category</h2>
    </div>
    <div class="mr-5">
        <a href="{{ route('category') }}">
            <button type="button" value="submit" class="btn btn-secondary btn-sm">Back</button>
        </a>
    </div>
</div>
</div>

<!-- DATA TABLE-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category_name" class="control-label mb-1">Category Name</label>
                        <input id="cc-category_name" name="category_name" type="text" class="form-control" required>
                        @error('category_name')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group has-success">
                        <label for="category_slug" class="control-label mb-1">Category Slug</label>
                        <input id="category_slug" name="category_slug" type="text" class="form-control category_slug valid" required>
                        @error('category_slug')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
<!-- END DATA TABLE-->
@endsection