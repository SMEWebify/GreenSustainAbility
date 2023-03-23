<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionsInventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'emission_type',
        'emission_source',
        'emission_location',
        'emission_amount',
        'emission_date',
        'notes',
    ];
}