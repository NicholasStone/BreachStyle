<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class LabController extends Controller
{

    public function index_lab()
    {
        dd([
            'session' => \Session::get('strDataID'),
            'redis'   => Redis::get(\Session::get('strDataID')),
        ]);
        $strDataId = mt_rand(0, 2000000000);
        $strKey    = substr(md5($strDataId . "enet"), 8, 16);

        return view('frontend.lab.labupload', compact("strDataId", "strKey"));
    }

    public function play()
    {
        $application                = new class
        {
            private $values = [];

            function __set($name, $value)
            {
                $this->values[ $name ] = $value;
            }

            function __get($name)
            {
                return $this->values[ $name ];
            }
        };
        $application->name          = Redis::get('name');
        $application->detail        = Redis::get('detail');
        $application->total_comment = 0;
        $application->fancy         = 11;
        $application->id            = 11;
        $application->created_at    = Carbon::now();
        $application->branch        = "测试支部";
        $application->province      = "北京";
        $university                 = '123';
        $comments                   = null;
        $branch                     = Branch::with('university')->where('id', 4)->first();

        $application->video_path = Redis::get('upFileID');
        $key                     = substr(md5('dxsfdy' . $application->video_path), 8, 16);

        return view('frontend.lab.labplay', compact('comments', 'branch', 'application', 'university', 'key'));
    }

    public function upload(Request $request)
    {
        Redis::setex('strDataId', 3600, $request->get('strDataId'));
        Redis::setex('upFileID', 3600, $request->get('upFileID'));
        Redis::setex('upFileType', 3600, $request->get('upFileType'));
        Redis::setex('upFileSize', 3600, $request->get('upFileSize'));
        Redis::setex('strKey', 3600, $request->get('strKey'));
    }

    public function youku()
    {
        return view('frontend.lab.create');
    }

    public function youkuUpload(Request $request)
    {
        $video_path = $request->get('video_path');
        if (!((strpos($video_path, "iframe") || strpos($video_path, "embed")) && strpos($video_path, "youku"))) {
            alert()->error("请填写优酷的通用代码或html代码")->persistent('关闭');

            return redirect()->back()->withInput();
        }
        Redis::setex('video_path', 3600, $video_path);
        Redis::setex('detail', 3600, $request->get('detail'));
        Redis::setex('name', 3600, $request->get('name'));

        return redirect()->route('frontend.lab.play');
    }

    public function youkuPlay()
    {
        $application             = new class
        {
            private $values = [];

            function __set($name, $value)
            {
                $this->values[ $name ] = $value;
            }

            function __get($name)
            {
                return $this->values[ $name ];
            }
        };
        $application->name       = Redis::get('name');
        $application->video_path = Redis::get('video_path');
        $application->detail     = Redis::get('detail');
        $application->fancy      = 11;
        $application->id         = 11;
        $application->created_at = Carbon::now();
        $application->branch     = "测试支部";
        $application->province   = "北京";
        $university              = '123';
        $comments                = null;
        $branch                  = Branch::with('university')->where('id', 4)->first();

        return view('frontend.lab.detail', compact('comments', 'branch', 'application', 'university'));
    }
}
