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
        'processo_id',
        'produto_id',
        'quant_adm',
        'quant_atb',
        'quant_mac',
        'quant_vsan',
        'quant_vepd',
        'unidade_medida_id',
        'garantia',
        'modelo_referencia_1',
        'modelo_referencia_2',
        'modelo_referencia_3',
    ];

    public function Bidding(){
        return $this->belongsTo(BiddingModel::class,'processo_id','id');
    }

    public function Product(){
        return $this->belongsTo(ProductModel::class,'produto_id','id');
    }

    public function ProductUnit(){
        return $this->belongsTo(ProductUnitModel::class,'unidade_medida_id','id');
    }
}
