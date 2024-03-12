<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyOrganizational extends Model
{
    use HasFactory;

    protected $table = 'company_organizational';

    protected $fillable =
    [
        'title',
        'acronym',
        'filter',
        'description',
        'linked_users',
        'status',
        'order',
        'hierarchy',
        'number_hierarchy',
    ];
}

