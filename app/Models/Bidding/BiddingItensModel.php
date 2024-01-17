<?php

namespace App\Models\Bidding;

use App\Models\Product\ProductModel;
use App\Models\Product\ProductUnitModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiddingItensModel extends Model
{
    use HasFactory;

    protected $table = 'bidding_process_itens';

    protected $fillable =[
        'process_id',
        'product_id',
        'amount_adm',
        'amount_atb',
        'amount_mac',
        'amount_vsan',
        'amount_vepd',
        'units_id',
        'warranty',
        'reference_model_1',
        'reference_model_2',
        'reference_model_3',
    ];

    public function Bidding(){
        return $this->belongsTo(BiddingModel::class,'process_id','id');
    }

    public function Product(){
        return $this->belongsTo(ProductModel::class,'product_id','id');
    }

    public function ProductUnit(){
        return $this->belongsTo(ProductUnitModel::class,'units_id','id');
    }
}
