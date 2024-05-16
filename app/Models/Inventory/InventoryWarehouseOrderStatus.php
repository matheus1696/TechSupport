<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryWarehouseOrderStatus extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'filter',
        'description',
        'status'
    ];
}
