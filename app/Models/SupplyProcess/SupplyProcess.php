<?php

namespace App\Models\SupplyProcess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyProcess extends Model
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
        'user_demantant_id',
        'user_requesting_id',
        'intended_results',
        'requirements',
        'measures_adopted',
        'modality',
        'head_inspector_id',
        'deputy_inspector_id',
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
