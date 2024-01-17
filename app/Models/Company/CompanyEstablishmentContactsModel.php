<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEstablishmentContactsModel extends Model
{
    use HasFactory;

    protected $table = "company_establishments_contact";

    protected $fillable = [
        'dp_unidade',
        'con_unidade',
        'con_unidade_2',
        'con_principal',
        'estabelecimento_id'
    ];

    public function CompanyEstablishments(){
        return $this->belongsTo(CompanyEstablishmentsModel::class,'estabelecimento_id','id');
    }
}
