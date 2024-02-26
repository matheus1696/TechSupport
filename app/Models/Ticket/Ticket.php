<?php

namespace App\Models\Ticket;

use App\Models\Company\CompanyEstablishmentsModel;
use App\Models\User;
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
        'reopened',
        'establishment_id',
        'type_category_id',
        'type_service_id',
        'type_sub_service_id',
        'status_id',
        'user_id',
    ];

    public function TicketTypeCategory(){
        return $this->belongsTo(TicketTypeCategory::class,'type_category_id','id');
    }

    public function TicketTypeService(){
        return $this->belongsTo(TicketTypeService::class,'type_service_id','id');
    }

    public function TicketTypeSubService(){
        return $this->belongsTo(TicketTypeSubService::class,'type_sub_service_id','id');
    }

    public function TicketStatus(){
        return $this->belongsTo(TicketStatus::class,'status_id','id');
    }

    public function Establishment(){
        return $this->belongsTo(CompanyEstablishmentsModel::class,'establishment_id','id');
    }

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
