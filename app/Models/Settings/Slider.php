<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $timestamps = false;

    public function getPathAttribute($value)
    {
        return "<img src='" . asset($value) . "' class='thumbnail' width='300'>";
    }
}
