<?php

namespace App\Models\Company;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyOrganizationLinkedUsers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'organizational_id',
    ];

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function CompanyOrganizational(){
        return $this->belongsTo(CompanyOrganizational::class,'organizational_id','id');
    }
}
