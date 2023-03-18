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

        job_titles::create([
            'job_title_name'=>$request->job,
            'description'=>$request->description,
        ]);

        return redirect('/');
    }

    function deleteJobTitle($id){
        job_titles::find($id)->delete();
        return redirect()->back();
    }

    function editJob($id){
        return view('job_edit',[
                    'availableJobs'=>job_titles::findOrFail($id),
                    ]);
    }

 function updateJob(Request $request , $id){
    $JobTitleToEdit = job_titles::findOrFail($id);
    $JobTitleToEdit->update([
        'job_title_name'=>$request->job,
        'description'=>$request->description,
    ]);

    return redirect('/job_title');


 }
}
