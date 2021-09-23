@extends('admin/layout')
@section('page_title','color-edit')
@section('color_select','active')
@section('content')

<div class="card-header">
    <div class="row">
        <div class="col">
            <p>Edit Color</p>
        </div>
        <div class="mr-0">
            <a href="{{route('color.index')}}" class="btn btn-light">Back</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('color.update',$colors->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label name="color">Color :</label>
                    <input type="text" name="color" class="form-control" value="{{ $colors->color }}" required>
                    @error('color')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mr-0 mt-4">
                <button type="submit" value="submit" class="btn btn-primary pull-right">update</button>
            </div>
        </form>
    </div>
</div>

@endsection