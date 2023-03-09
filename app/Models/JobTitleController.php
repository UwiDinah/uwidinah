<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTitleController extends Model
{
    use HasFactory;
    protected $table ='job_titles';
    protected $fillable=[
        'job_title_name',
        'description',
    ];
}
