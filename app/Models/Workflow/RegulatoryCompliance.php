<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulatoryCompliance extends Model
{
    use HasFactory;

    protected $fillable = [
        'emission_type',
        'emission_source',
        'regulatory_requirement',
        'compliance_status',
        'verification_date',
        'notes',
    ];
}
