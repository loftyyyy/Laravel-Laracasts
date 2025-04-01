<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

Class Jobs extends Model{
    protected $table = 'job_listings';

    protected $fillable = ['job_title', 'job_salary'];

}


