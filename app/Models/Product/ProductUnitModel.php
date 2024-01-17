<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUnitModel extends Model
{
    use HasFactory;

    protected $table = 'product_units';

    protected $fillable = [
        'no_unidade_medida',
        'ft_unidade_medida',
        'st_unidade_medida'
    ];
}
