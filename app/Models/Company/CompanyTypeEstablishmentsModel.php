<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyTypeEstablishmentsModel extends Model
{
    use HasFactory;

    protected $table = 'company_type_establishments';

    protected $fillable =
    [
        'no_tipo_estabelecimento',
        'st_tipo_estabelecimento',
    ];

    public function Establishments(){
        return $this->belongsTo(CompanyEstablishmentsModel::class,'id','tipo_estabelecimento_id');
    }
}

