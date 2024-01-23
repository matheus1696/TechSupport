<?php

namespace App\Models;

use App\Models\Company\CompanyEstablishmentsModel;
use App\Models\Company\CompanyOccupationsModel;
use App\Models\Company\CompanyOrganizationalModel;
use App\Models\User\UserSexModel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable =
    [
        'name',
        'filter',
        'email',
        'password',
        'email_verified_at',
        'contact_1',
        'contact_2',
        'birthday',
        'sex_id',
        'company_id',
        'occupation_id',
        'establishment_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function SexualOrientations(){
        return $this->belongsTo(UserSexModel::class,'sex_id','id');
    }

    public function CompanyOrganizational(){
        return $this->belongsTo(CompanyOrganizationalModel::class,'company_id','id');
    }

    public function CompanyOccupations(){
        return $this->belongsTo(CompanyOccupationsModel::class,'cbo_id','id');
    }

    public function CompanyEstablishments(){
        return $this->belongsTo(CompanyEstablishmentsModel::class,'establishment_id','id');
    }

}

