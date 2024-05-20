<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEstablishmentDepartment extends Model
{
    use HasFactory;

    protected $table = "company_establishment_departments";

    protected $fillable = [
        'department',
        'filter',
        'contact',
        'extension',
        'type_contact',
        'has_inventory_supply',
        'has_inventory_medication',
        'has_inventory_warehouse',
        'establishment_id'
    ];

    public function CompanyEstablishment(){
        return $this->belongsTo(CompanyEstablishment::class,'establishment_id','id');
    }
}
