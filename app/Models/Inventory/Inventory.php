<?php

namespace App\Models\Inventory;

use App\Models\Product\Consumables;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'quantity',
        'consumable_id',
        'establishment_id',
    ];

    public function Consumable(){
        return $this->belongsTo(Consumables::class,'consumable_id','id');
    }
}
