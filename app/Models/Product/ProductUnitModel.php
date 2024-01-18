<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUnitModel extends Model
{
    use HasFactory;

    protected $table = 'product_units';

    protected $fillable = [
        'unit',
        'filter',
        'status'
    ];
}
