<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEstablishmentContactsModel extends Model
{
    use HasFactory;

    protected $table = "company_establishments_contact";

    protected $fillable = [
        'department',
        'contact_1',
        'contact_2',
        'type',
        'establishment_id'
    ];

    public function CompanyEstablishments(){
        return $this->belongsTo(CompanyEstablishmentsModel::class,'establishment_id','id');
    }
}
