<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'province_id'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class, 'university', 'name');
    }

    /**
     * 学校-支部-应用   远程多对一
     */
    public function applications()
    {
        return $this->hasManyThrough(Application::class,Branch::class, 'university', 'branch_id', 'name');
    }
}
