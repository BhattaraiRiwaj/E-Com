@extends('admin/layout')
@section('page_title','size-edit')
@section('content')
<div class="card-header">
    <div class="row">
        <div class="col">
            <p>Edit size</p>
        </div>
        <div class="mr-0">
            <a href="{{route('size.index')}}" class="btn btn-light">Back</a>
        </div>
    </div>

</div>
<div class="card">
    <div class="card-body">
        <form action="{{ route('size.update',$sizes->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label name="title">Title :</label>
                    <input type="text" name="size" class="form-control" value="{{ $sizes->size}}" required>
                </div>
            </div>
            <div class="mr-0 mt-4">
                <button type="submit" value="submit" class="btn btn-primary pull-right">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection