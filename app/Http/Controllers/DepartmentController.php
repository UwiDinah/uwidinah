<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
    function getDepartment(){
        return view ('depart_title',[
            'depart'=>Department::all()
        ]);

    }
    function saveDepart(Request $request){

        Department::create($request->all());

        return redirect('/');
}
}
