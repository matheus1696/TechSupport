<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAttentionLevelsModel extends Model
{
    use HasFactory;

    protected $table = 'company_attention_levels';

    protected $fillable =
    [
        'title',
        'acronym',
        'color',
        'status',
    ];
}

