<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionCitiesModel extends Model
{
    use HasFactory;

    protected $table = 'region_cities';

    protected $fillable =
    [
        'code',
        'city',
        'filter',
        'code_cep',
        'status',
        'state_id',
    ];

    public function RegionStates(){
        return $this->belongsTo(RegionStatesModel::class,'state_id','id');
    }
}

