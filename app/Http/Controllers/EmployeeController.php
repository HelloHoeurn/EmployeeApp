<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::get();
        return view("employees.index",['emps'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $depts = Department::get(["id","name"]);
        return view('employees.create')->with('depts',$depts);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'first_name'=> 'required|max:25|alpha',
        'last_name'=>'required|max:25|alpha',
        'salutation'=>'required|max:25|alpha'
        ]);
        $data=$request->except('_taken');
        $employee=Employee::create($data);

        //dd($employee);

        if($employee) return to_route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $emp=Employee::findOrFail($id);
        return view('employees.details',compact('emp'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $emp=Employee::findOrFail($id);
        $depts=Department::get();
        return view('employees.edit',compact('emp','depts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name'=> 'required|max:25|alpha',
            'last_name'=> 'required|max:25|alpha',
            'salutation'=> 'required|max:10'
        ]);
        $data=$request->except('_token','_method');
        $employee=Employee::where('id',$id)->update($data);
        if($employee) return to_route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $emp=Employee::findOrFail($id);
        if($emp->delete()) return to_route('employees.index');
    }
}
