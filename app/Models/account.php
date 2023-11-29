<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;

    protected $table = "accounts";
    protected $fillable = [
        'username',
        'password',
        'ban',
        'role',
        'is_admin',
        'last_time_login',
        'last_time_logout',
        'ip_address',
        'active',
        'thoi_vang',
        'server_login',
        'bd_player',
        'is_gift_box',
        'gift_time',
        'reward',
        'created_at',
        'updated_at'
    ];
}
