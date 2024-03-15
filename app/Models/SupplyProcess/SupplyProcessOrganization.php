<?php

namespace App\Models\SupplyProcess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyProcessOrganization extends Model
{
    use HasFactory;    

    protected $fillable =[
        'sypply_id',
        'organization_id',
    ];
}
