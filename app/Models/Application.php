<?php

namespace App\Models;

use Fenos\Notifynder\Models\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Fenos\Notifynder\Facades\Notifynder;

class Application extends Model
{
    use SoftDeletes {
        restore as softDeletesRestore;
    }

    protected $date = ['deleted_at'];

    protected $fillable = [
        'name', 'type', 'detail', 'summary', 'img_hash', 'branch_id', 'university',
        'apply_hash', 'video_hash', 'course_lecturer', 'secretary', 'deleted_at',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function fancy()
    {
        return $this->hasMany(Fancy::class);
    }

    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }

    public function scopeTotalComment($query)
    {
        return $query->with(['comment'=>function($query){
            return $query->count();
        }]);
    }

    public function scopeWhereName($query, $application_name)
    {
        if ($application_name) {
            return $query->where('name', 'like', '%' . $application_name . '%');
        }

        return $query;
    }

    public function scopeWithStatus($query, $status = 1)
    {
        if ($status == 3){
            return $query->withTrashed();
        }
        if ($status == 2) {
            return $query->onlyTrashed();
        } else {
            return $query->where('verification', $status);
        }
    }

    public function restore()
    {
        $this->softDeletesRestore();
        $this->verification = 0;
        $this->save();
        $redirect = $this->getShowUrl();
        $this->sendNotify('application.restore', $redirect);
    }

    public function canEdit()
    {
        return $this->verification == -1;
    }

    public function deny($reason)
    {
        if ($this->verification == -1)
        {
            return;
        }
        $redirect = '';
        switch ($this->type) {
            case "工作案例":
                $redirect = route('frontend.case.edit', $this->id);
                break;
            case "微党课":
                $redirect = route('frontend.course.edit', $this->id);
                break;
            case "教师党支部推荐展示":
            case "学生党支部推荐展示":
                $redirect = route('frontend.recommend.edit', $this->id);
                break;
        }

        $this->sendNotify('application.denied', $redirect, $reason);
        $this->verification = -1;
        $this->save();
    }

    public function grant()
    {
        $redirect = $this->getShowUrl();

        $this->sendNotify('application.granted', $redirect);
        $this->verification = 1;
        $this->save();
    }

    public function softDelete($reason)
    {
        $this->sendNotify('application.delete', 'javascript:void(0);', $reason);
        $this->runSoftDelete();
    }

    /**
     * @param $category
     * @param $reason
     * @param string $redirect
     */
    protected function sendNotify($category, $redirect, $reason = null)
    {
        $extra = [
            'application.name' => $this->name,
        ];
        if ($reason) {
            array_merge($extra, [
                'reason' => $reason,
            ]);
        }
        $branch = Branch::select(['secretary'])->withTrashed()->where('id', $this->branch_id)->first();
        $i = Notifynder::category($category)
            ->from(\Auth::id())
            ->to($branch->secretary)
            ->url($redirect)
            ->extra([
                'application_name' => $this->name,
                'reason'           => $reason,
            ])
            ->send();
        $this->notification_id = $i->id;
        $this->save();
    }

    /**
     * @return string
     */
    public function getShowUrl()
    {
        $redirect = '';
        switch ($this->type) {
            case "工作案例":
                $redirect = route('frontend.case.show', $this->id);
                break;
            case "微党课":
                $redirect = route('frontend.course.show', $this->id);
                break;
            case "教师党支部推荐展示":
            case "学生党支部推荐展示":
                $redirect = route('frontend.recommend.show', $this->id);
                break;
        }

        return $redirect;
    }

    /**
     * @return null|string
     */
    public function getStatus()
    {
        $status = null;
        if ($this->trashed()){
            $status = "已删除";
        }else{
            switch ($this->verification){
                case -1:
                    $status = "已驳回";
                    break;
                case 0:
                    $status = "待审核";
                    break;
                case 1:
                    $status = "已通过";
                    break;
            }
        }
        return $status;
    }

}
