<?php

namespace App\Models\Company;

use App\Models\Region\RegionCitiesModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEstablishmentsModel extends Model
{
    use HasFactory;

    protected $table = 'company_establishments';

    protected $fillable =
    [
        'code',
        'title',
        'filter',
        'address',
        'number',
        'district',
        'city_id',
        'latitude',
        'longitude',
        'type_establishment_id',
        'attention_level_id',
        'status',
    ];

    public function RegionCities(){
        return $this->belongsTo(RegionCitiesModel::class,'city_id','id');
    }

    public function TypeEstablishments(){
        return $this->belongsTo(CompanyTypeEstablishmentsModel::class,'type_establishment_id','id');
    }

    public function AttentionLevels(){
        return $this->belongsTo(CompanyAttentionLevelsModel::class,'attention_level_id','id');
    }
}

