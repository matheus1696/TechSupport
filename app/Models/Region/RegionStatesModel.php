<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionStatesModel extends Model
{
    use HasFactory;

    protected $table = 'region_states';

    protected $fillable =
    [
        'cod_estado',
        'sg_estado',
        'no_estado',
        'st_estado',
        'pais_id',
    ];

    public function RegionCountries(){
        return $this->belongsTo(RegionCountriesModel::class,'pais_id','id');
    }
}

