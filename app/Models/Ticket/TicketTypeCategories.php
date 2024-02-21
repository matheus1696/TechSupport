<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketTypeCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'amount_services',
        'status'
    ];
}
