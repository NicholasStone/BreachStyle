<?php

namespace App\Models\Access\User;

use App\Models\Access\User\Traits\UserAccess;
use App\Models\Application;
use App\Models\Branch;
use App\Models\Fancy;
use App\Models\University;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Access\User\Traits\Attribute\UserAttribute;
use App\Models\Access\User\Traits\Relationship\UserRelationship;
use Fenos\Notifynder\Notifable;

/**
 * Class User
 * @package App\Models\Access\User
 */
class User extends Authenticatable
{

    use SoftDeletes, UserAccess, UserAttribute, UserRelationship, Notifable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'password',
        'status',
        'confirmation_code',
        'confirmed',
        'university',
        'tel',
        'tel_work',
        'type',
        'province',
        'id_number',
        'city',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function fancy()
    {
        return $this->hasMany(Fancy::class);
    }

    public function getBranchTypeAttribute()
    {
        return $this->branch->type;
    }

    public function attachBranch($branch)
    {
        if ($this->branch_id) {
            return;
        }
        $id = '';
        if (is_object($branch)) {
            $id = $branch->id;
        }

        if (is_int($branch)) {
            $id = $branch;
        }

        $this->branch_id = $id;
        $this->save();
    }

    public function detachBranch()
    {
        $this->branch_id = 0;
        $this->save();
    }

//    public function getUniversityAttribute($value)
//    {
//        return University::where('name', $value)->first();
//    }
}
