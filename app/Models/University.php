<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public $timestamps = false;

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class, 'university', 'name');
    }

    public function applications()
    {
        return $this->hasManyThrough(Application::class,Branch::class, 'university', 'branch_id');
    }
}
