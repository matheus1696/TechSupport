<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumableUnits extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code',
        'title',
        'description',
        'status',
    ];
}
