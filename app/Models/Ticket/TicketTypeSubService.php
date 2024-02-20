<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketTypeSubService extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'ticket_type_service_id',
    ];
}
