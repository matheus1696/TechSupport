<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'data_last_interaction',
        'amount_interaction',
        'ticket_reopened?',
        'ticket_status_id',
        'establishment_id',
        'type_service_id',
        'user_id',
    ];
}
