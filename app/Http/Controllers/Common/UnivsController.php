<?php

namespace App\Http\Controllers\Common;

use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class UnivsController extends Controller
{
    public function university(Request $request)
    {
        $id = $request->get('id');
        $univs = Redis::get('province_' . $id);
        if (empty($univs)) {
            $univs = University::where('province_id', $id)->get();
            $univs = $univs->toJson();
            Redis::setex('province_' . $id, 43200, $univs);
        }

        return response($univs)->header('Content-Type', 'application/json');
    }
}
