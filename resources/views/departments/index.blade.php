@extends('layouts.master')
@section('title','Department List')
@section('main')
<div class="card">
    <div class="card-body">
        <div class="card-header">
        <a href="{{ route('departments.create')}}" class="btnbtn-sm btn-outline-primary">New</a>
</div>
<table class="table table-hovered">
        <thead>
        <th>#</th>
        <th>Name</th>
        <th>Short Name</th>
        <th>Actions</th>
        </thead>
    <tbody>
@forelse ($depts as $dep)
    <tr>
    <td>{{ ++$loop->index }}</td>
    <td>{{ $dep->name}}</td>
    <td>{{ $dep->short_name}}</td>
    <td>
    <form method="POST" action="{{route('departments.destroy',['department'=>$dep->id])}}">
    @csrf
@method('DELETE')

    <a href="{{route('departments.edit',['department'=>$dep->id]) }}" class="btn btn-sm btn-outline-success">Edit</a>
        <button class="btn btn-sm btn-outline-danger">Delete</button>
    <a href="{{route('departments.show',['department'=>$dep->id]) }}" class="btn btn-sm btn-outline-secondary">Show</a>
    </form>
    </td>
</tr>
@empty
    <tr>
        <td colspan="4">
        <h5>No Data</h5>
        </td>
    </tr>
@endforelse
        </tbody>
        </table>
    </div>
</div>
@endsection