<?php

namespace App\Models;
use App\Http\Controllers\AttendanceController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    use HasFactory;

    public function getDepartmentName(){
        return $this->belongsTo(department::class,'department_id','id');
    }
    public function getJobTitleName(){
        return $this->belongsTo(job_titles::class,'job_title_id','id');
    }
    public function getEmployee(){
        return $this->belongsTo(employees::class,'employee_id','id');
    }
}
