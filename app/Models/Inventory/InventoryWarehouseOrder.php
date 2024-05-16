<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryWarehouseOrder extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code',
        'inventory_warehouse_order_status_id',
        'inventory_warehouse_history_id',
    ];

    public function InventoryWarehouseHistory(){
        return $this->belongsTo(InventoryWarehouseHistory::class,'inventory_warehouse_history_id','id');
    }
}
