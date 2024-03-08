<?php

namespace App\Models\SupplyProcess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyProcessesModel extends Model
{
    use HasFactory;

    protected $table = 'supply_processes';

    protected $fillable = [
        'code_process',
        'code_auction',
        'code_contract',
        'code_price_registration',
        'title',
        'filter',
        'description',
        'start_date',
        'due_date',
        'validity',
        'company_organizational_id',
        'status_id',
        'user_id'
    ];

    public function SupplyProcessStatus(){
        return $this->belongsTo(SupplyProcessStatus::class,'status_id','id');
    }
}
