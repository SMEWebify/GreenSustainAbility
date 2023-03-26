<?php

namespace App\Models\Workflow;

use App\Models\Workflow\Indicator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlarmsNotifications extends Model
{
    use HasFactory;

    protected $table = 'alarms_notifications';

    protected $fillable = [
        'indicator_type_id',
        'threshold_value',
        'status'
    ];

    public function indicator()
    {
        return $this->belongsTo(Indicator::class, 'indicator_type_id');
    }
}
