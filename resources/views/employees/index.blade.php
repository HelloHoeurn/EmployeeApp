@extends('layouts.master')
@section('title','Department List')
@section('main')
<div class="card">
    <div class="card-header">
    <a href="{{ route('employees.create')}}"class="btn btn-sm btn-outline-primary">New</a>
</div>
<div class="card-body">
    <div class="table-responsive">
    <table class="table table-sm table-hovered">
        <thead class="table-dark">
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Salutaion</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Department</th>
            <th>Address 1</th>
            <th>Address 2</th>
            <th>Actions</th>
        </thead>
    <tbody>
@forelse ($emps as $emp)
    <tr>
        <td>{{ ++$loop->index }}</td>
        <td>{{ $emp->first_name}}</td>
        <td>{{ $emp->last_name}}</td>
        <td>{{ $emp->salutation}}</td>
        <td>{{ $emp->phone}}</td>
        <td>{{ $emp->email}}</td>
        <td>{{ $emp->department?->name}}</td>
        <td>{{ $emp->address_line1}}</td>
        <td>{{ $emp->address_line2}}</td>
        <td>
<form method="POST" action="{{route('employees.destroy',['employee'=>$emp->id])}}">
@csrf
@method('DELETE')
    <a href="{{ route('employees.edit',['employee'=>$emp->id]) }}" class="btn btn-sm btn-outline-success">Edit</a>
<button class="btn btn-sm btn-outline-danger" onclick="return confirm()">Delete</button>
<a href="{{route('employees.show',['employee'=>$emp->id]) }}" class="btn btn-sm btn-outline-secondary">Show</a>
</form>
    </td>
</tr>
@empty
<tr>
    <td colspan="10">
        <h5>No Data</h5>
    </td>
</tr>
@endforelse
    </tbody>
</table>
        </div>
    </div>
</div>
@endsection