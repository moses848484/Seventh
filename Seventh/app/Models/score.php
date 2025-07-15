<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    protected $fillable = [
        'no',
        'strategic_theme',
        'strategic_area',
        'strategic_objective',
        'kpi',
        'initiatives_activities',
        'q1_target',
        'q2_target',
        'q3_target',
        'q4_target',
        'start_date',
        'end_date',
        'resource_persource',
        'budget_perinitiative',
        'comments',
        'year',
        'department_name',
        'quoter',
        'leader',
        'elder_in_charge',
        'explanation',
    ];
    protected $table = 'scores';
}
