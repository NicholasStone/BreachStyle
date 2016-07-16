<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function member()
    {
        return $this->hasMany(User::class);
    }
}
