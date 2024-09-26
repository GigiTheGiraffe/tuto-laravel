<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs_listing';
    protected $fillable = ['title', 'salary'];
}
