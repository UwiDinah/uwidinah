<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use App\Models\jobTitle;
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
       

    ]);
 }
}
