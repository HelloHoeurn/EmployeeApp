@extends('layouts.master')
@section('title','Department')
@section('main')
<form action="{{ route('employees.store')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
        <strong>Create New Employee</strong>
    </div>
    <div class="card-body">
    <div class="row mb-2">
    <label class="col-sm-2 form-col-label">First Name</label>
    <div class="col-sm-10">
    <input type="text" name="first_name"class="form-control">
@error('first_name')
    <span class="text-danger">{{ $message}}</span>
@enderror
    </div>
</div>
<div class="row mb-2">
    <label class="col-sm-2 form-col-label">LastName</label>
    <div class="col-sm-10">
    <input type="text" name="last_name"class="form-control">
@error('last_name')
<span class="text-danger">{{ $message}}</span>
@enderror
    </div>
</div>
<div class="row mb-2">
    <label class="col-sm-2 form-col-label">Salutation</label>
    <div class="col-sm-10">
    <select name="salutation" class="form-select">
    <option value="" style="display:none;">Select Salutation</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
</select>
@error('salutation')
<span class="text-danger">{{ $message}}</span>
@enderror
    </div>
</div>
<div class="row mb-2">
    <label class="col-sm-2 form-col-label">Deaprtment</label>
    <div class="col-sm-10">
    <select name="department_id" class="form-select">
    <option value=""style="display:none;">Select Department</option>
@foreach ($depts as $dept)
    <option value="{{ $dept->id}}">{{$dept->name }}</option>
@endforeach
</select>
@error('department_id')
    <span class="text-danger">{{ $message}}</span>
    @enderror
    </div>
</div>
<div class="row mb-2">
    <label class="col-sm-2 form-col-label">Phone</label>
    <div class="col-sm-10">
    <input type="tel" name="phone" class="form-control">
    </div>
</div>
    <div class="row mb-2">
    <label class="col-sm-2 form-col-label">Email</label>
    <div class="col-sm-10">
    <input type="email" name="email"class="form-control">
    </div>
</div>
<div class="row mb-2">
    <label class="col-sm-2 form-col-label">AddressLine 1</label>
    <div class="col-sm-10">
    <input type="text" placeholder="Provinceand District" name="address_line1" class="form-control">
    </div>
</div>
<div class="row mb-2">
    <label class="col-sm-2 form-col-label">AddressLine 2</label>
    <div class="col-sm-10">
    <input type="text" placeholder="Commune and Village" name="address_line2" class="form-control">
        </div>
    </div>
</div>
    <div class="card-footer">
    <button class="btn btn-sm btn-success">SaveChanged</button>
    <a href="{{ route('employees.index')}}" class="btnbtn-sm btn-outline-success">Back</a>
    </div>
</div>
</form>
@endsection