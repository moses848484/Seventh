<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'strategic_areas',
        'strategic_theme',
        'strategic_objectives',
        'kpis',
        'initiatives',
        'status_color',
        'total_target',
        'q1',
        'q2',
        'q3',
        'q4',
        'budget_per_initiative',
        'explanation_of_variation',
        'resource_persource',
         'start_date',
         'end_date',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
