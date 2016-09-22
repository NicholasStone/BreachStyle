<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $timestamps = false;

    protected $fillable = ['item', 'value' ,'comment'];
}
