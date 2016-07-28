<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class Application extends Model
{
    protected $fillable = [
        'name', 'type', 'detail', 'summary', 'img_hash', 'branch_name',
        'apply_hash', 'video_hash', 'source_lecturer', 'creator',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
