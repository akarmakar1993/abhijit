<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [

    	'student_name',
    	'student_roll',
    	'student_email',
    	'student_address'

    ];
}
