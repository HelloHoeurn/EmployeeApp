<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $depts=Department::get();
        return view("departments.index",compact("depts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("departments.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required",
            "short_name"=> "required"
        ]);
        $data=$request->only(["name","short_name"]) ;
        $inserted=Department::create($data);
        if($inserted) return to_route("departments.index");
        else return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dept=Department::findOrFail($id);
        return view("departments.details",compact("dept"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dept=Department::findOrFail($id);
        return view("departments.edit",compact("dept"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'short_name'=> 'required'
        ]);
        $data=$request->only(['name','short_name']) ;
        $updated =Department::where('id',$id)->update($data);
        if($updated) return to_route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dept=Department::findOrFail($id);
        if($dept->delete()) {
            return to_route('departments.index');
        }
    }
}
