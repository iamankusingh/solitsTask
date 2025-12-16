<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'full_name',
        'dob',
        'gender',
        'phone',
        'city',
        'course',
        'joining_year',
        'roll_no',
    ];
}
