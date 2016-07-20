<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function user()
    {
        return $this->belongsTo(Access\User\User::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'name', 'branch_name');
    }
}
