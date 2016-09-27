<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'secretary_summary', 'total_membership', 'summary', 'avatar', 'address', 'type', 'tel', 'university', 'apply_img', 'detail', 'deleted_at'];

    public function secretary()
    {
        return $this->belongsTo(User::class, 'secretary', 'id');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'university', 'name');
    }

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

//    public function getApplicationAttribute()
//    {
//        return Application::where('branch_id', $this->id)->where('verification', '1')->get();
//    }

    public function scopeWithProvince($query)
    {
        return $query->with('university.province');
    }

    public function getSecretaryAttribute($value)
    {
        return User::find($value);
    }

    public function scopeIsHasName($query, $name)
    {
        if ($name) {
            return $query->where('name', 'like', '%' . $name . '%');
        }

        return $query;
    }

    public function scopeIsHasType($query, $type)
    {
        if ($type) {
            return $query->where('type', $type);
        }

        return $query;
    }

    public function scopeWithStatus($query, $status)
    {
        if ($status == 2) {
            return $query->onlyTrashed();
        } else {
            return $query->where('verification', $status);
        }
    }
}
