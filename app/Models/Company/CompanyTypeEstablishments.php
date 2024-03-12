<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyTypeEstablishments extends Model
{
    use HasFactory;

    protected $table = 'company_type_establishments';

    protected $fillable =
    [
        'title',
        'status',
    ];

    public function Establishments(){
        return $this->belongsTo(CompanyEstablishments::class,'id','type_establishment_id');
    }
}

