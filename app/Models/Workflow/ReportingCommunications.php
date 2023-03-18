<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportingCommunications extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'type',
        'quantity',
        'report_type',
        'communication_target',
    ];
}
