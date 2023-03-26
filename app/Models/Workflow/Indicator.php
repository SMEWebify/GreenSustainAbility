<?php

namespace App\Models\Workflow;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\IndicatorsDatas;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Workflow\AlarmsNotifications;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Indicator extends Model
{
    use HasFactory, LogsActivity, Notifiable;

    protected $fillable = [
        'indicator_type', 
        'source_type', 
        'source_name', 
        'source_location', 
        'measurement_unit'
    ];


    public function DataHistories()
    {
        return $this->hasMany(IndicatorsDatas::class);
    }

    public function AlarmsNotifications()
    {
        return $this->hasMany(AlarmsNotifications::class);
    }

    public function GetPrettyCreatedAttribute()
    {
        return date('d F Y', strtotime($this->created_at));
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['daindicator_typete','source_type', 'source_name', 'source_location']);
        // Chain fluent methods for configuration options
    }
}
