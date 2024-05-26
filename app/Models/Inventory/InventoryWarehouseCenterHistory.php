<?php

namespace App\Models\Inventory;

use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Company\CompanyFinancialBlock;
use App\Models\Supply\Supply;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryWarehouseCenterHistory extends Model
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
        'batch',
        'due_date',
        'description',
        'supply_id',
        'financial_block_id',
        'establishment_entry_id',
        'establishment_department_entry_id',
        'establishment_exit_id',
        'establishment_department_exit_id',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function Supply(){
        return $this->belongsTo(Supply::class,'supply_id','id');
    }

    public function CompanyFinancialBlock(){
        return $this->belongsTo(CompanyFinancialBlock::class,'financial_block_id','id');
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
