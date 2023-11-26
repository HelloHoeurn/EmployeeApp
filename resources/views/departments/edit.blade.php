@extends('layouts.master')
@section('title','Department')
@section('main')
    <form action="{{ route('departments.update',['department'=>$dept->id])}}" method="POST">
@csrf
@method('PUT')
    <div class="card">
        <div class="card-header">
        <strong>Create</strong>
    </div>
    <div class="card-body">
    <div class="row mb-2">
    <label class="col-sm-2 form-col-label">Name</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" value="{{$dept->name }}">
@error('name')
    <span class="text-danger">{{ $message}}</span>
@enderror
    </div>
</div>
    <div class="row mb-2">
    <label class="col-sm-2 form-col-label">ShortName</label>
    <div class="col-sm-10">
    <input type="text" name="short_name" class="form-control" value="{{ $dept->short_name }}">
@error('name')
    <span class="text-danger">{{ $message}}</span>
@enderror
    </div>
    </div>
</div>
    <div class="card-footer">
    <button class="btn btn-sm btn-success">UpdateDepartment</button>
    <a href="{{ route('departments.index')}}" class="btn btn-sm btn-outline-success">Back</a>
    </div>
</div>
</form>
@endsection