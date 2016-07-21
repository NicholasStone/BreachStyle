<?php

namespace App\Models;
use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'creator', 'name');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_name', 'name');
    }
}
