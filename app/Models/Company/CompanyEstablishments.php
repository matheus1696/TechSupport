<?php

namespace App\Models\Company;

use App\Models\Region\RegionCitiesModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEstablishments extends Model
{
    use HasFactory;

    protected $table = 'company_establishments';

    protected $fillable =
    [
        'code',
        'title',
        'surname',
        'filter',
        'address',
        'number',
        'district',
        'city_id',
        'latitude',
        'longitude',
        'type_establishment_id',
        'financial_block_id',
        'status',
    ];

    public function RegionCities(){
        return $this->belongsTo(RegionCities::class,'city_id','id');
    }

    public function TypeEstablishments(){
        return $this->belongsTo(CompanyTypeEstablishments::class,'type_establishment_id','id');
    }

    public function FinancialBlocks(){
        return $this->belongsTo(CompanyFinancialBlocks::class,'financial_block_id','id');
    }
}
