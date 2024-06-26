<?php

namespace App\Models\Inventory;

use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Medication\Medication;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryPharmacyHistory extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code',
        'invoice',
        'supply_order',
        'supply_company',
        'date',
        'movement',
        'quantity',
        'description',
        'loose',
        'medication_id',
        'establishment_id',
        'establishment_department_id',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function Medication(){
        return $this->belongsTo(Medication::class,'medication_id','id');
    }

    public function CompanyEstablishment(){
        return $this->belongsTo(CompanyEstablishment::class,'establishment_id','id');
    }

    public function CompanyEstablishmentDepartment(){
        return $this->belongsTo(CompanyEstablishmentDepartment::class,'establishment_department_id','id');
    }
}
