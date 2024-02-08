<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFinancialBlocksModel extends Model
{
    use HasFactory;

    protected $table = 'company_financial_blocks';

    protected $fillable =
    [
        'title',
        'acronym',
        'color',
        'status',
    ];
}
