<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detaile extends Model
{
    protected $fillable = [
        'department_name',
        'quoter',
        'leader',
        'elder_in_charge',
        'explanation',
    ];
    protected $table = 'detaile';
}
