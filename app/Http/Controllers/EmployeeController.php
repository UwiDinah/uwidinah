<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\employees;
use App\Models\job_titles;
use App\Models\Department;
use Illuminate\Support\Facades\Crypt;
class EmployeeController extends Controller
{
    function getAllEmployee(){
        $employees=employees::with('getDepartmentName','getJobTitleName')->get();
        $jobs=job_titles::all();
        $depart = Department::all();
        return view('employees',[
            'employee'=>$employees,
            'jobs'=>$jobs,
            'depart'=>$depart
        ]);
    }

    function storeEmployee(Request $request){
        employees::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'date_of_birth' => $request->date_of_birth,
            'job_title_id' => $request->job_title,
            'department_id' => $request->department,
        ]);

        return redirect()->back();
    }


    function editEmployee($id){
        $employeeToEdit=employees::find($id);
        $jobs=job_titles::all();
        $depart = Department::all();
        return view('edit_employee',[
            'employeeToEdit'=>$employeeToEdit,
            'jobs'=>$jobs,
            'depart'=>$depart
        ]);
    }

    function updateEmployee(Request $request, $id){
      $employeeToUpdate=employees::find($id);
      $employeeToUpdate->update([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'date_of_birth' => $request->date_of_birth,
        'job_title_id' => $request->job_title,
        'department_id' => $request->department,
      ]);

      return redirect('/employees');

    }

    function deleteEmployee($id){
     $employeeToDelete=employees::find($id);
     $employeeToDelete->delete();
     return redirect()->back();
    }

}
