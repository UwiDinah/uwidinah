<?php

namespace App\Models;
use App\Http\Controllers\JobTitleController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_titles extends Model
{
    use HasFactory;
    protected $fillable=[
        'job_title_name',
        'description',
    ];
}
