<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionStates extends Model
{
    use HasFactory;

    protected $table = 'region_states';

    protected $fillable =
    [
        'acronym',
        'code_uf',
        'code_ddd',
        'state',
        'filter',
        'status',
        'code_ddd',
        'country_id',
    ];

    public function RegionCountries(){
        return $this->belongsTo(RegionCountries::class,'country_id','id');
    }
}
