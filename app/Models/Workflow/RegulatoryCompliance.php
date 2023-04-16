<?php

namespace App\Models\Workflow;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow\EmissionsInventories;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegulatoryCompliance extends Model
{
    use HasFactory;

    protected $fillable = [
        'emission_inventorie_id',
        'regulatory_requirement',
        'compliance_status',
        'verification_date',
        'regulatory_comment',
    ];

    public function EmissionsInventorie()
    {
        return $this->belongsTo(EmissionsInventories::class, 'emission_inventorie_id');
    }
}
