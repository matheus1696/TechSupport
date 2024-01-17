<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAttentionLevelsModel extends Model
{
    use HasFactory;

    protected $table = 'company_attention_levels';

    protected $fillable =
    [
        'no_nivel_atencao',
        'cor_nivel_atencao',
        'st_nivel_atencao',
    ];
}

