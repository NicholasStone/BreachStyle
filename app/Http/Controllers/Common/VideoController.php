<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    use FileStorage;
    public function upload(Request $request)
    {
        if($request->hasFile('video')){

        }
        $path = $this->saveVideo($request->file('video'));
    }

    public function play()
    {

    }
}
