<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryHistory extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'date',
        'movement',
        'quantity',
        'consumable_id',
        'establishment_id',
        'user_id'
    ];
}
