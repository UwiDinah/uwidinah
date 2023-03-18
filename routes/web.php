<?php
//use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
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
Route::get('/depart/delete/{id}',[DepartmentController::class,'deleteDepart']);
Route::get('/depart/edit/{id}',[DepartmentController::class,'editDepart']);
Route::post('/depart/update/{id}',[DepartmentController::class,'updateDepart']);




Route::get('/job_title/delete/{id}',[JobTitleController::class,'deleteJobTitle']);
Route::post('/job/save',[JobTitleController::class,'saveJobTitle']);
Route::get('/job_title',[JobTitleController::class,'getJobTitle']);
Route::get('/job_title/edit/{id}',[JobTitleController::class,'editJob']);
Route::post('/job_title/update/{id}',[JobTitleController::class,'updateJob']);



Route::get('/employees',[EmployeeController::class,'getAllEmployee']);
Route::post('/employees/save',[EmployeeController::class,'storeEmployee']);
Route::get('/employees/edit/{id}',[EmployeeController::class,'editEmployee']);
Route::post('/employees/update/{id}',[EmployeeController::class,'updateEmployee']);
Route::get ('/employees/delete/{id}',[EmployeeController::class,'deleteEmployee']);





Route::get('/attendance',[AttendanceController::class,'getAllAttendance']);
Route::post('/employees/save',[EmployeeController::class,'storeEmployee']);
Route::get('/employees/edit/{id}',[EmployeeController::class,'editEmployee']);
Route::post('/employees/update/{id}',[EmployeeController::class,'updateEmployee']);
Route::get ('/employees/delete/{id}',[EmployeeController::class,'deleteEmployee']);



Route::get('/attendance', [AttendanceController::class,'getAllAttendance'])->middleware('auth');
Route::post('/attendance/save',[AttendanceController::class,'storeAttendance'])->middleware('auth');
Route::get('/attendance/prasent/{id}', [AttendanceController::class,'prasent'])->middleware('auth');
Route::get('/attendance/absent/{id}', [AttendanceController::class,'absent'])->middleware('auth');
Route::get('/attendances/payment/{id}', [AttendanceController::class,'payEmployee'])->middleware('auth');



// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/',[DepartmentController::class,'getDepartment']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return redirect('/');
});





//Route::get('/', function () {
 //   return view('welcome');
//});
