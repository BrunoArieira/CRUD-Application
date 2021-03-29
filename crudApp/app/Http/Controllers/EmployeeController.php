<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
    // Add employee to database
    public function addEmployee(Request $request) {
        $employee = new Employee();

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->salary = $request->input('salary');

        $employee->save();

        /*
        $employee = Employee::create($request->all());
        */
        return response($employee, 201);
    }

    // Get all employees
    public function getEmployee() {
        return response()->json(Employee::all(), 200);
    }

    // Get employee by id
    public function getEmployeeById($id) {
        $employee = Employee::find($id);

        if(is_null($employee)) {
            return response()->json(['message' => 'Employee Not Found'], 404);
        }

        return response()->json($employee::find($id), 200);
    }

    // Update employee by id
    public function updateEmployee(Request $request, $id) {
        $employee = Employee::find($id);

        if(is_null($employee)) {
            return response()->json(['message' => 'Employee Not Found'], 404);
        }

        $employee->update($request->all());

        /* OR
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->salary = $request->input('salary');

        $employee->save();
        */

        return response($employee, 200);
    }

    //Delete employee by id
    public function deleteEmployee($id) {
        $employee = Employee::find($id);

        if(is_null($employee)) {
            return response()->json(['message' => 'Employee Not Found'], 404);
        }

        $employee->delete();
        return response()->json( null, 204);
    }
}
