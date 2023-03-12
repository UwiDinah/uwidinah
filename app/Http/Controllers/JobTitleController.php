<?php

namespace App\Http\Controllers;
use App\Models\job_titles;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    function getJobTitle(){
        return view ('job_title',[
            'job'=>job_titles::all()
        ]);
    }
    function saveJobTitle(Request $request){

        job_titles::create($request->all());

        return redirect('/');
}
}
 