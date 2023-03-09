<?php

namespace App\Http\Controllers;
use App\Models\jobtitle;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    function getJobTitle(){
        return view ('job_title');
    }
    function saveJobTitle(Request $request){

        jobtitle::create($request->all());

        return redirect('/');
}
}
