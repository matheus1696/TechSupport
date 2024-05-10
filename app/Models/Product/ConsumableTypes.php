<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumableTypes extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'description',
        'status',
    ];
}
