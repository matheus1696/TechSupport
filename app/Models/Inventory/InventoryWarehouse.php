<?php

namespace App\Models\Inventory;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryWarehouse extends Model
{
    use HasFactory;    

    protected $fillable =
    [
        'quantity',
        'product_id',
        'establishment_id',
        'establishment_department_id',
    ];

    public function Product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
