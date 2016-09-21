<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'secretary_summary', 'total_membership', 'summary', 'avatar', 'address', 'type', 'tel', 'university', 'apply_img', 'detail'];

    public function secretary()
    {
        return $this->belongsTo(User::class, 'secretary', 'id');
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
