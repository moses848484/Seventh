<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    protected $fillable = [
        'department_name',
        'quoter',
        'leader',
        'elder_in_charge',
        'explanation',
    ];
    protected $table = 'details';
}
