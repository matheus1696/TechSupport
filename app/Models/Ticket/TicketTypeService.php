<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketTypeService extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'amount_sub_services',
        'status',        
        'ticket_type_category_id',
    ];
}
