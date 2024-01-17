<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyOrganizationalModel extends Model
{
    use HasFactory;

    protected $table = 'company_organizational';

    protected $fillable =
    [
        'no_setor',
        'sg_setor',
        'ft_setor',
        'des_setor',
        'st_setor',
        'ord_setor',
        'hie_setor',
    ];
}

