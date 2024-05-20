<?php

namespace App\Models\Supply;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyClassification extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'filter',
        'status'
    ];
}
