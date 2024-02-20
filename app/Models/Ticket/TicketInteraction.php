<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketInteraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'ticket_id',
        'user_id',
    ];
}
