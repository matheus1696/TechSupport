<?php

namespace App\Models\SupplyProcess;

use App\Models\Company\CompanyOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyProcess extends Model
{
    use HasFactory;

    protected $table = 'supply_processes';

    protected $fillable = [
        'title',
        'filter',
        'description',
        'intended_results',
        'requirements',
        'measures_adopted',
        'modality',
        'code_process',
        'code_auction',
        'code_contract',
        'code_price_registration',
        'start_date',
        'due_date',
        'validity',
        'demantant_id',
        'requesting_id',
        'inspector_head_id',
        'inspector_deputy_id',
        'organizations_id',
        'status_id',
        'user_id'
    ];

    public function SupplyProcessStatus(){
        return $this->belongsTo(SupplyProcessStatus::class,'status_id','id');
    }

    public function CompanyOrganization(){
        return $this->belongsTo(CompanyOrganization::class,'organizations_id','id');
    }
}
