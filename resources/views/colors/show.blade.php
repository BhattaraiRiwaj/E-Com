@extends('admin/layout')
@section('page_title','category-show')
@section('color_select','active')
@section('content')
<div class="card-header">
    <div class="row">
        <div class="col">
            <h4>Color Show</h4>
        </div>
        <div class="mr-0">
            <a href="{{ route('color.index') }}" class="btn btn-light">Back</a>
        </div>
    </div>

</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <label for="title">Color :</label>
                <p>{{ $colors->color }}</p>
            </div>
        </div>
    </div>
</div>

@endsection