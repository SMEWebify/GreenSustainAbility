<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalysisReporting extends Model
{
    use HasFactory;
    
    protected $table = 'analysis_reports';

    protected $fillable = [
        'indicator_type',
        'indicator_value',
        'measurement_unit',
        'measurement_datetime',
        'summary_statistics',
        'trends_over_time',
        'sustainability_goals_comparison'
    ];
}
