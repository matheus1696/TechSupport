<?php

namespace App\Models\Inventory;

use App\Models\Consumable\Consumable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryWarehouse extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'quantity',
        'consumable_id',
        'establishment_id',
        'establishment_department_id',
    ];

    public function Consumable(){
        return $this->belongsTo(Consumable::class,'consumable_id','id');
    }
}
