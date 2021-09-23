@extends('admin/layout')
@section('page_title','color')
@section('color_select','active')
@section('content')


@if(session()->has('message'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
    {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
<div class="card-header">
    <div class="row">
        <div class="col">
            <h4>Color</h4>
        </div>
        <div class="mr-0">
            <a href="{{ route('color.create') }}">
                <button type="button" class="btn btn-primary btn-sm mr-3">Create Color</button>
            </a>
        </div>
    </div>
</div>

<!-- DATA TABLE-->
<div class="card">
    <div class="card-body">
        <table class="table table-border table-responsive-sm table-data3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Color</th>
                    <th>status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($colors as $key=>$color)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $color->color }}</td>
                    <td>
                        @if($color->status == 1)
                        <span class="text  text-success">Active</span>
                        @elseif($color->status == 0)
                        <span class="text  text-warning">De-Active</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('color.show',$color->id) }}" class="btn btn-success btn-sm"><i
                                class="nav-icon fa fa-eye"></i></a>
                        <a href="{{ route('color.edit',$color->id) }}" class="btn btn-info btn-sm"><i
                                class="nav-icon fa fa-edit"></i></a>
                        @if($color->status == 1)
                        <a href=" {{ url('color/status/0',$color->id) }}" class="btn btn-success btn-sm"><i
                                class="fas fa-plus-circle"></i></a>
                        @elseif($color->status == 0)
                        <a href=" {{ url('color/status/1',$color->id) }}" class="btn btn-warning btn-sm"><i
                                class="fas fa-minus-circle"></i></a>
                        @endif
                        <a href=" {{ route('color.destroy',$color->id) }}" class="btn btn-danger btn-sm"><i
                                class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- END DATA TABLE-->
@endsection