<?php

namespace App\Http\Controllers;
use App\Models\attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    function getDepartment(){
        return view ('depart_title',[
            'depart'=>Department::all()
        ]);

    }
}
 