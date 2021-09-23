@extends('admin/layout')
@section('page_title','color-create')
@section('color_select','active')
@section('content')
<div class="card-header">
    <div class="row">
        <div class="col">
            <p>Create color</p>
        </div>
        <div class="mr-0">
            <a href="{{route('color.index')}}" class="btn btn-light">Back</a>
        </div>
    </div>

</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('color.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label name="color">Color :</label>
                    <input type="text" name="color" class="form-control" required>
                    @error('color')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mr-0 mt-4">
                <button type="submit" value="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection