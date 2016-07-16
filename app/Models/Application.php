<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
//    protected $hidden = ['commons', 'summary', 'verification', 'img_hash', 'user_id'];

    public function user()
    {
        return $this->belongsTo(Access\User\User::class);
    }
}
