<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSources extends Model
{
    use HasFactory;

    protected $table = 'data_sources';
    
    protected $fillable = [
        'source_type',
        'source_name',
        'source_location'
    ];

}
