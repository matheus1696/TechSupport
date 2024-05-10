<?php

namespace App\Models\Inventory;

use App\Models\Company\CompanyEstablishment;
use App\Models\Product\Consumables;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryHistory extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'date',
        'movement',
        'quantity',
        'consumable_id',
        'establishment_id',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function Consumable(){
        return $this->belongsTo(Consumables::class,'consumable_id','id');
    }

    public function CompanyEstablishment(){
        return $this->belongsTo(CompanyEstablishment::class,'establishment_id','id');
    }
}
