<?php

namespace App\Models\Supply;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyUnit extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code',
        'title',
        'filter',
        'description',
        'status'
    ];
}
