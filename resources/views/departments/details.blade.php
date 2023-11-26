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
    <dl class="row">
        <dt class="col-sm-2">Id</dt>
        <dd class="col-sm-10">{{ $dept->id }}</dd>
        <dt class="col-sm-2">Name</dt>
        <dd class="col-sm-10">{{ $dept->name}}</dd>
        <dt class="col-sm-2">Short Name</dt>
        <dd class="col-sm-10">{{ $dept->short_name}}</dd>
    </dl>
</div>
<div class="card-footer">
    <button class="btn btn-sm btn-success">UpdateDepartment</button>
    <a href="{{ route('departments.index')}}" class="btn btn-sm btn-outline-success">Back</a>
            </div>
        </div>
    </form>
 @endsection