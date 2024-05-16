<?php

namespace App\Models\Inventory;

use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyEstablishmentDepartment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryWarehouseOrder extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code',
        'inventory_warehouse_order_status_id',
        'inventory_warehouse_history_id',
        'establishment_entry_id',
        'establishment_department_entry_id',
        'establishment_exit_id',
        'establishment_department_exit_id',
    ];

    public function CompanyEstablishment(){
        return $this->belongsTo(CompanyEstablishment::class,'establishment_id','id');
    }

    public function CompanyEstablishmentEntry(){
        return $this->belongsTo(CompanyEstablishment::class,'establishment_entry_id','id');
    }

    public function CompanyEstablishmentDepartmentEntry(){
        return $this->belongsTo(CompanyEstablishmentDepartment::class,'establishment_department_entry_id','id');
    }

    public function CompanyEstablishmentExit(){
        return $this->belongsTo(CompanyEstablishment::class,'establishment_exit_id','id');
    }

    public function CompanyEstablishmentDepartmentExit(){
        return $this->belongsTo(CompanyEstablishmentDepartment::class,'establishment_department_exit_id','id');
    }
}
