<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function employees(){
        return Employee::all();
     }
    public function show(Employee $employees)
    {
        return $employees;
    }
    public function store(Request $request)
    {
        
      $employee = Employee::create($request->all());

    return response()->json($employee, 201);
    }
     public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());

        
    }
    public function delete(Employee $employee) 
    {
        $employee->delete();

        return response()->json(null, 204);
    }
}
