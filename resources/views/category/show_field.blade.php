@extends('admin/layout')
@section('page_title','Show Category')
@section('content')
<div class="card-header">
    <div class="row">
    <div class="col">
        <h3>Show Category</h3>
    </div>

    <div class=" pull-right">
        <a href="{{ route('category')}}" class="btn btn-secondary">Back</a>
    </div>
</div>
</div>


<div class="card">
<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <span for="category_name">Category Id:</span>
            <p>{{ $category->id }}</p>
        </div>
        <div class="col-md-4">
            <span for="category_name">Category Name:</span>
            <p>{{ $category->category_name }}</p>
        </div>
        <div class="col-md-4">
            <span for="category_name">Category Slug:</span>
            <p>{{ $category->category_slug }}</p>
        </div>
    </div>
</div>
</div>
@endsection