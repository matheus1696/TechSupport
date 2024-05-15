<?php

namespace App\Models\Inventory;

use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Company\CompanyFinancialBlock;
use App\Models\Product\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryWarehouseHistory extends Model
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
        'product_id',
        'financial_block_id',
        'establishment_id',
        'establishment_department_id',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function Product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function CompanyFinancialBlock(){
        return $this->belongsTo(CompanyFinancialBlock::class,'financial_block_id','id');
    }

    public function CompanyEstablishment(){
        return $this->belongsTo(CompanyEstablishment::class,'establishment_id','id');
    }

    public function CompanyEstablishmentDepartment(){
        return $this->belongsTo(CompanyEstablishmentDepartment::class,'establishment_department_id','id');
    }
}
