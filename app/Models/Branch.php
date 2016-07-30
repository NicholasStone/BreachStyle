<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['name', 'secretary', 'secretary_summary', 'total_membership', 'summary', 'avatar', 'address', 'type', 'tel', 'university', 'apply_img'];
    public function secretary()
    {
        return $this->belongsTo(User::class, 'secretary');
    }

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function getApplicationAttribute()
    {
        return Application::where('branch_id', $this->id)->where('verification', '1')->get();
    }

    public function getUniversityAttribute($value)
    {
        return University::with('province')->where('name', $value)->first();
    }

    public function getSecretaryAttribute($value)
    {
        return User::find($value);
    }
}
