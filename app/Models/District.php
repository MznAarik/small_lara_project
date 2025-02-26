<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'id',
        'name',
        'state_id',
        'country_id',
        // 'district_id',
    ];
}
