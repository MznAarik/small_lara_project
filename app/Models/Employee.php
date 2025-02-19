<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    // protected $guarded=[]
    protected $fillable = [
        'fname',
        'lname',
        'address',
        'phoneno',
        'gender',
        'email',
        'department',
        'staff_comment',
        'created_at',
        'image',
    ];
}
