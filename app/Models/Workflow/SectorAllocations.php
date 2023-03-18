<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorAllocations extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'type',
        'quantity',
        'sector',
    ];
}
