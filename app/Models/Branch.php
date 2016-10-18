<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Fenos\Notifynder\Facades\Notifynder;

class Branch extends Model
{
    use SoftDeletes {
        restore as SoftDeletesRestore;
    }

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

    public function scopeWithProvince($query)
    {
        return $query->with('university.province');
    }

    public function scopeWithSecretaryName($query)
    {
        return $query->with(['secretary' => function ($query) {
            $query->select(['name', 'id']);
        }]);
    }

    public function scopeIsHasName($query, $name)
    {
        $name = trim($name);
        if ($name) {
            return $query->where('name', 'like', '%' . $name . '%');
        }

        return $query;
    }

    public function scopeIsHasType($query, $type)
    {
        $type = trim($type);
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

    public function grant()
    {
        $this->verification = 1;
        $this->save();
        $secretary = User::find($this->secretary);
        $secretary->attachRole(2);

        $this->sendNotify('branch.granted', route('frontend.branch.show', $this->id));
    }

    public function deny($reason)
    {
        $this->applications->each(function ($item) {
            $item->deny("因支部信息被驳回");
        });
        $this->verification = -1;
        $this->save();

        $this->sendNotify('branch.denied', route('frontend.branch.edit', $this->id), $reason);
    }

    public function softDelete($reason)
    {
        $applications = $this->applications;
        $applications->each(function ($item) {
            $item->softDelete("因支部信息被删除");
        });

        $secretary = User::find($this->secretary);
        $secretary->detachBranch();

        $this->runSoftDelete();
        $this->sendNotify('branch.delete', "javascript:void(0)", $reason);

    }

    /**
     * @internal param 数据ID $branch
     */
    public function restore()
    {
        $applications = Application::onlyTrashed()->where('branch_id', $this->id)->get();
        $secretary    = User::find($this->secretary);
        $secretary->attachBranch($this->id);
        $applications->each(function ($item) {
            $item->restore();
        });

        $this->verification = 0;
        $this->SoftDeletesRestore();

        $this->sendNotify('branch.restore', route('frontend.branch.show', $this->id));
    }

    /**
     * @param $category
     * @param $reason
     * @param string $redirect
     */
    protected function sendNotify($category, $redirect, $reason = null)
    {
        Notifynder::category($category)
            ->from(\Auth::id())
            ->to($this->secretary)
            ->url($redirect)
            ->extra([
                'reason' => $reason,
            ])
            ->send();
    }
}
