<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemLogsModel extends Model
{
    use HasFactory;

    protected $table = 'system_logs';

    protected $fillable = [
        'log_code',
        'log_ip',
        'log_url',
        'log_method',
        'log_mensagem',
        'user_id',
        'user_name',
    ];

    public function Users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}

