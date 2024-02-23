<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketTypeCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'amount_services',
        'status'
    ];

    public function TicketTypeService(){
        return $this->belongsTo(TicketTypeService::class,'ticket_type_service_id','id');
    }

    public function TicketTypeSubService(){
        return $this->belongsTo(TicketTypeSubService::class,'ticket_type_sub_service_id','id');
    }
}
