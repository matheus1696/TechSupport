<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSexModel extends Model
{
    use HasFactory;

    protected $table = "users_sex";

    protected $fillable = [
        'sex',
        'status'
    ];
}

