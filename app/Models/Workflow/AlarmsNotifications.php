<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlarmsNotifications extends Model
{
    use HasFactory;

    protected $table = 'alarms_notifications';

    protected $fillable = [
        'indicator_type',
        'threshold_value',
        'measurement_unit',
        'status'
    ];
}
