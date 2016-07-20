<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function creator()
    {
        return $this->belongsTo(User::class, 'secretary', 'name');
    }

    public function members()
    {
        return $this->hasMany(User::class, 'name', 'branch_name');
    }

    public function application()
    {
        return $this->hasMany(Application::class, 'branch_name', 'name');
    }

}
