<?php

namespace App\Models\Supply;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code',
        'title',
        'filter',
        'description',
        'supply_classification_id',
        'supply_unit_id',
        'supply_type_id',
        'status'
    ];

    public function SupplyClassification(){
        return $this->belongsTo(SupplyClassification::class,'supply_classification_id','id');
    }

    public function SupplyType(){
        return $this->belongsTo(SupplyType::class,'supply_type_id','id');
    }

    public function SupplyUnit(){
        return $this->belongsTo(SupplyUnit::class,'supply_unit_id','id');
    }
}
