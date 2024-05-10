<?php

namespace App\Models\SupplyProcess;

use App\Models\Product\Product;
use App\Models\Product\ProductUnit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyProcessItem extends Model
{
    use HasFactory;

    protected $table = 'supply_process_items';

    protected $fillable =[
        'process_id',
        'product_id',
        'units_id',
        'warranty',
        'reference_model_1',
        'reference_model_2',
        'reference_model_3',
    ];

    public function SupplyProcess(){
        return $this->belongsTo(SupplyProcess::class,'process_id','id');
    }

    public function Product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function ProductUnit(){
        return $this->belongsTo(ProductUnit::class,'units_id','id');
    }
}
