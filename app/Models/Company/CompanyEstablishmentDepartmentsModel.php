<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEstablishmentDepartmentsModel extends Model
{
    use HasFactory;

    protected $table = "company_establishment_departments";

    protected $fillable = [
        'department',
        'contact',
        'extension',
        'type_contact',
        'establishment_id'
    ];

    public function CompanyEstablishments(){
        return $this->belongsTo(CompanyEstablishmentsModel::class,'establishment_id','id');
    }
}
