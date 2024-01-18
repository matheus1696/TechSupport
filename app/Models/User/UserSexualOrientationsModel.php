<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSexualOrientationsModel extends Model
{
    use HasFactory;

    protected $table = "users_sexual_orientations";

    protected $fillable =
    [
        'sexual_orientation',
        'status'
    ];
}

