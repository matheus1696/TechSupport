<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code',
        'title',
        'filter',
        'description',
        'material_classification',
        'product_unit_id',
        'product_type_id',
        'status'
    ];

    public function ProductType(){
        return $this->belongsTo(ProductType::class,'product_type_id','id');
    }

    public function ProductUnit(){
        return $this->belongsTo(ProductUnit::class,'product_unit_id','id');
    }
}
