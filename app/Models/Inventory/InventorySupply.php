<?php

namespace App\Models\Inventory;

use App\Models\Supply\Supply;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventorySupply extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'quantity',
        'supply_id',
        'establishment_id',
        'establishment_department_id',
    ];

    public function Supply(){
        return $this->belongsTo(Supply::class,'supply_id','id');
    }
}
