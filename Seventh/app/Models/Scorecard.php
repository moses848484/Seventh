<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scorecard extends Model
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
        'status_color',
        'status_label',
        'year',
        'explanation',
    ];
}
