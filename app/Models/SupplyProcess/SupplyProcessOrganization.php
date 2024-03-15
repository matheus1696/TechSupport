<?php

namespace App\Models\SupplyProcess;

use App\Models\Company\CompanyOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyProcessOrganization extends Model
{
    use HasFactory;    

    protected $fillable =[
        'supply_id',
        'organization_id',
    ];

    public function CompanyOrganization(){
        return $this->belongsTo(CompanyOrganization::class,'organization_id','id');
    }
}
