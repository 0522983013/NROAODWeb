<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;

    protected $table = "account";
    protected $fillable = [
        'username',
        'password',
        'create_time',
        'update_time',
        'ban',
        'point_post',
        'last_post',
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
    ];
}
