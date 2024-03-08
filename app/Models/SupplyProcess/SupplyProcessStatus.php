<?php

namespace App\Models\SupplyProcess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyProcessStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'default',
    ];
}