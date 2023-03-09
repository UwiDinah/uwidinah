<?php
//use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\JobTitleController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[UserController::class,'getAllUsers']);
Route::get('/depart_title',[DepartmentController::class,'getDepartment']);
Route::post('/depart/save',[DepartmentController::class,'saveDepart']);
Route::post('/job/save',[JobTitleController::class,'saveJobTitle']);
Route::get('/job_title',[JobTitleController::class,'getJobTitle']);
Route::get('/job_title',[AttendanceController::class,'getJobTitle']);
 
// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/',[DepartmentController::class,'getDepartment']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/user', function () {
    return view('user');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/typograph', function () {
    return view('typograph');
});
Route::get('/icon', function () {
    return view('icon');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/notification', function () {
    return view('notification');
});
Route::get('/upgrade', function () {
    return view('upgrade');
});




//Route::get('/', function () {
 //   return view('welcome');
//});
