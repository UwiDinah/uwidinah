<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use App\Models\job_titles;
use App\Models\employees;
use Illuminate\Http\Request;

class UserController extends Controller
{
 function getAllUsers(){
    return view('welcome',[
        'user'=>User::all(),
        'user_count'=>User::count(),
        'department'=>Department::count(),
        'employee'=>employees::count(),
        'job'=>job_titles::count(),


    ]);
 }
}
