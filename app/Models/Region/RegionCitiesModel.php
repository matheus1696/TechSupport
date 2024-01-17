<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionCitiesModel extends Model
{
    use HasFactory;

    protected $table = 'region_cities';

    protected $fillable =
    [
        'cod_municipio_ibge',
        'sg_municipio',
        'no_municipio',
        'st_municipio',
        'estado_id',
    ];

    public function RegionStates(){
        return $this->belongsTo(RegionStatesModel::class,'estado_id','id');
    }
}

