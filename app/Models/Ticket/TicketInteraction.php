<?php

namespace App\Models\Ticket;

use App\Models\User;
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

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
