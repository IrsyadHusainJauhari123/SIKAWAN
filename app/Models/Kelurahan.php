<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';
    function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
