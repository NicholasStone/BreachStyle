<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use phpDocumentor\Reflection\Types\Boolean;

class Application extends Model
{
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = [
        'name', 'type', 'detail', 'summary', 'img_hash', 'branch_name',
        'apply_hash', 'video_hash', 'source_lecturer', 'creator', 'deleted_at'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getTotalCommentAttribute()
    {
        $comment = $this->comments();
        return $comment->count();
    }

    public function fancy()
    {
        return $this->hasMany(Fancy::class);
    }

    public function scopeWhereName($query, $application_name)
    {
        if ($application_name){
            return $query->where('name', 'like', '%' . $application_name . '%');
        }
        return $query;
    }

    public function canEdit()
    {
        return $this->verification == -1;
    }

    public function scopeIsTrashed($query, $status)
    {
        if ($status == 2){
            return $query->withTrashed();
        }else{
            return $query;
        }
    }

}
