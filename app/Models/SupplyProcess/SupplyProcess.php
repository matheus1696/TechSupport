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
        'demantant_user_id',
        'demantant_name',
        'demantant_organization',
        'demantant_registration',
        'demantant_cpf',
        'requesting_user_id',
        'requesting_name',
        'requesting_organization',
        'requesting_registration',
        'requesting_cpf',
        'code_process',
        'code_auction',
        'code_contract',
        'code_price_registration',
        'start_date',
        'due_date',
        'validity',
        'inspector_head_user_id',
        'inspector_head_name',
        'inspector_head_organization',
        'inspector_head_registration',
        'inspector_head_cpf',
        'inspector_deputy_user_id',
        'inspector_deputy_name',
        'inspector_deputy_organization',
        'inspector_deputy_registration',
        'inspector_deputy_cpf',
        'organization_id',
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
