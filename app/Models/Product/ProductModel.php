<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'cod_produto',
        'no_produto',
        'ft_produto',
        'desc_produto',
        'tp_produto',
        'st_produto',
    ];
}
