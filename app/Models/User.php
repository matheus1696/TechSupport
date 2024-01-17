<?php

namespace App\Models;

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
        'email',
        'password',
        'email_verified_at',
        'con_usuario_1',
        'con_usuario_2',
        'dn_usuario',
        'orientacao_sexual_id',
        'setor_id',
        'cargo_id',
        'unidade_id'
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
        return $this->belongsTo(UserSexualOrientationsModel::class,'orientacao_sexual_id','id');
    }

    public function CompanyOrganizational(){
        return $this->belongsTo(CompanyOrganizationalModel::class,'setor_id','id');
    }

    public function CompanyOccupations(){
        return $this->belongsTo(CompanyOccupationsModel::class,'cargo_id','id');
    }

    public function CompanyEstablishments(){
        return $this->belongsTo(CompanyEstablishmentsModel::class,'unidade_id','id');
    }

}

