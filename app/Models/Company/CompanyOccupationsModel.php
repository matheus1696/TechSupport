<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyOccupationsModel extends Model
{
    use HasFactory;

    protected $table = 'company_occupations';

    protected $fillable =
    [
        'cod_cbo',
        'no_cbo',
        'ft_cbo',
        'st_cbo',
    ];
}

