<?php

namespace App\Http\Controllers;
use  App\Models\employees;
use App\Models\job_titles;
use App\Models\Department;
use App\Models\Attendance;
use App\Models\employee_pay;
use App\Models\employees_attendance;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{

    function getAllAttendance(){
        $employee = employees::with('getDepartmentName','getJobTitleName')->whereDate('updated_at','!=',Carbon::today()->format("Y-m-d"))->get();
        $employees_attendance = employees_attendance::with('getEmployeeNames')->get();
        $employees_payment = DB::table('employees')
                            ->join('employee_pays','employee_pays.employee_id','=','employees.id')
                            ->groupBy('id','firstname','lastname','amount_paid')
                            ->get(['employees.id',DB::raw('employees.firstname, employees.lastname,employee_pays.amount_paid,sum(employee_pays.amount_paid) as total')
        ]);

        return view('attendance',[
            'employee'=>$employee,
            'employee_attendance'=>$employees_attendance,
            'employee_payment'=>$employees_payment,
        ]);
    }








    function prasent($id)
    {
          $theAttendedEmployeeData = employees::where('id',$id)->first();
           // dd($theAttendedEmployeeData);
                  employees_attendance::create([
                          'attendance_date'=>Carbon::now(),
                            'amount'=>5000,
                             'is_paid'=>0,
                                'employee_id'=>$theAttendedEmployeeData->id,
                 ]);

                         return redirect()->back();
                        }
    function absent($id)
    {


        return redirect('/attendance');

    }



    function payEmployee($id){
        $attenceToPayFor = employees_attendance::find($id);

        employee_pay::create([
            'period_paid_for'=>$attenceToPayFor->attendance_date,
            'amount_paid'=>$attenceToPayFor->amount,
                  'employee_id'=>$attenceToPayFor->employee_id,
    ]);
            return redirect('/attendance');
        }
}
