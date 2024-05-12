<?php

namespace App\Models\Inventory;

use App\Models\Medication\Medication;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryMedication extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'quantity',
        'medication_id',
        'establishment_id',
        'establishment_department_id',
    ];

    public function Medication(){
        return $this->belongsTo(Medication::class,'medication_id','id');
    }
}
