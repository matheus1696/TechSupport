<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEstablishmentsModel extends Model
{
    use HasFactory;

    protected $table = 'company_establishments';

    protected $fillable =
    [
        'cod_unidade_cnes',
        'no_unidade',
        'ft_unidade',
        'end_logradouro',
        'end_numero',
        'end_bairro',
        'cidade_id',
        'end_latidude',
        'end_longitude',
        'tipo_estabelecimento_id',
        'nivel_atencao_id',
        'con_unidade_1',
        'con_unidade_2',
        'con_unidade_3',
        'st_unidade',
    ];

    public function RegionCities(){
        return $this->belongsTo(RegionCitiesModel::class,'cidade_id','id');
    }

    public function TypeEstablishments(){
        return $this->belongsTo(CompanyTypeEstablishmentsModel::class,'tipo_estabelecimento_id','id');
    }

    public function AttentionLevels(){
        return $this->belongsTo(CompanyAttentionLevelsModel::class,'nivel_atencao_id','id');
    }
}

