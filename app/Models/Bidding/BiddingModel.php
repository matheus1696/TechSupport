<?php

namespace App\Models\Bidding;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiddingModel extends Model
{
    use HasFactory;

    protected $table = 'bidding_process';

    protected $fillable = [
        'code_process',
        'code_auction',
        'code_contract',
        'title',
        'filter',
        'description',
        'start_date',
        'due_date',
        'validity',
        'status'
    ];
}
