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

function deleteDepart($id){
   Department::find($id)->delete();
    return redirect()->back();
}

function editDepart($id){
    return view('edit_department',[
        'department'=>Department::findOrFail($id)
    ]);
}

function updateDepart(Request $request, $id){
    $depart=Department::findOrFail($id);
    $depart->update([
    'department_name'=>$request->department,
    'description'=>$request->description
    ]);
    return redirect('/depart_title');
}
}
