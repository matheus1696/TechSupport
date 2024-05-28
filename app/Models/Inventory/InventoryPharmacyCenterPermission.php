<?php

namespace App\Models\Inventory;

use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryPharmacyCenterPermission extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'establishment_department_id',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function CompanyEstablishmentDepartment(){
        return $this->belongsTo(CompanyEstablishmentDepartment::class,'establishment_department_id','id');
    }
}
