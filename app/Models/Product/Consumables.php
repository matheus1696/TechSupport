<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumables extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code',
        'consumables',
        'filter',
        'description',
        'consumable_units_id',
        'consumable_type_id',
    ];

    public function ConsumableType(){
        return $this->belongsTo(ConsumableTypes::class,'consumable_type_id','id');
    }

    public function ConsumableUnit(){
        return $this->belongsTo(ConsumableUnits::class,'consumable_unit_id','id');
    }
}
