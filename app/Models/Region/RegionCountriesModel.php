<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionCountriesModel extends Model
{
    use HasFactory;

    protected $table = 'region_countries';

    protected $fillable =
    [
        'cod_pais',
        'sg_pais',
        'no_pais',
        'no_pais_ingles',
        'st_pais',
    ];
}

