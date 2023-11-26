@extends('layouts.master')
@section('title','Department')
@section('main')
<form action="{{ route('employees.store')}}" method="POST">
@csrf
<div class="card">
    <div class="card-header">
    <strong>Employee</strong>
</div>
    <div class="card-body">
    <dl class="row">
    <dt class="col-sm-2">#</dt>
    <dd class="col-sm-10">{{ $emp->id }}</dd>
    <dt class="col-sm-2">Full Name</dt>
    <dd class="col-sm-10">{{ $emp->first_name }} {{$emp->last_name }}</dd>
<dt class="col-sm-2">Salutation</dt>
<dd class="col-sm-10">{{ $emp->salutation}}</dd>
    <dt class="col-sm-2">Phone</dt>
    <dd class="col-sm-10">{{ $emp->phone }}</dd>
    <dt class="col-sm-2">Email</dt>
    <dd class="col-sm-10">{{ $emp->email }}</dd>
    <dt class="col-sm-2">Department</dt>
    <dd class="col-sm-10">{{ $emp->department?->name }}</dd>
<dt class="col-sm-2">Address 1</dt>
<dd class="col-sm-10">{{ $emp->address_line1}}</dd>
<dt class="col-sm-2">Address 2</dt>
<dd class="col-sm-10">{{ $emp->address_line2}}</dd>
</dl>
    <a class="btn btn-sm btn-outline-success" href="{{ route('employees.edit',['employee'=>$emp->id]) }}">EditEmployee</a>
    <a class="btn btn-sm btn-outline-primary" href="{{route('employees.index') }}">Back</a>
    </div>
</div>
</form>
@endsection