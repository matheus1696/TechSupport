<?php

namespace App\Models\Bidding;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiddingModel extends Model
{
    use HasFactory;

    protected $table = 'bidding_process';

    protected $fillable = [
        'cod_processo',
        'cod_pregao',
        'cod_contrato',
        'no_processo',
        'ft_processo',
        'desc_processo',
        'data_inicio',
        'data_vencimento',
        'tempo_vigencia',
        'st_processo'
    ];
}
