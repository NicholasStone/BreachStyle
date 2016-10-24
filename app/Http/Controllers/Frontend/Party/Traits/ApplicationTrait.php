<?php
namespace App\Http\Controllers\Frontend\Party\Traits;

use Illuminate\Support\Facades\Redis;
use Validator;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

trait ApplicationTrait
{

    public function imageDrag(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file     = $request->file('upload');
            $fileName = $file->getClientOriginalName();
            $url      = $this->saveImage($file, 'Article');
            $uploaded = 1;

            return response()->json(compact("fileName", "url", "uploaded"));
        }
    }

    /**
     * 富文本编辑器图片点击上传
     * @param Request $request
     * @return string
     */
    public function image(Request $request)
    {
        if ($request->hasFile('upload')) {
            $funNum = $request->get('CKEditorFuncNum');
            $file   = $request->file('upload');
            $save   = $this->saveImage($file, 'Article');
            $script = <<<SCRIPT
<script text="text/javascript">
window.parent.CKEDITOR.tools.callFunction('$funNum','$save','');
</script>
SCRIPT;

            return response($script);
        }
    }

    /**
     * 上传视频文件
     * @param Request $request
     * @return mixed
     */
    public function upload(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json([
                'jsonrpc' => '2.0',
                'error'   => [
                    'code'    => 103,
                    'message' => '无法接收上传文件',
                ],
                'id'      => 'id',
            ]);
        }
        $path = $this->saveVideo($request->file('file'));
        \Session::set('video_token', $request->get('video_token'));
        \Session::set('video_path', $path);

        return response()->json([
            'jsonrpc' => '2.0',
            'result'  => null,
            'id'      => 'id',
            'path'    => $path,
        ]);
    }
//视频上传功能
    /**
     * 视频上传回调，并将回调结果以Json的形式保存在Redis中
     * @param Request $request
     */
    public function uploadCallback(Request $request)
    {
//        $lifetime          = Carbon::now()->addHour();
//        $tags = [];
//        $tags['strDataID'] = $request->get('strDataID');
//        $tags['strKey']    = $request->get('strKey');
        Redis::setex($request->get('strDataID'), 3600, json_encode([
            'strKey'   => $request->get('strKey'),
            'upFileID' => $request->get('upFileID'),
        ]));
//        dd(Redis::get($request->get('strDataID')));
//        Cache::tags($tags)->put('upFileID', $request->get('upFileID'), $lifetime);
    }

    /**
     * 视频上传认证
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadVerify()
    {
//        $tags['strDataID'] = \Session::get('strDataID');
//        $tags['strKey']    = \Session::get('strKey');
        $cache = $this->getCachedCallback();
        if ($cache['strKey'] == \Session::get('strKey')) {
            return response()->json(['upload' => 1]);
        } else {
            return response()->json(['upload' => 0]);
        }
    }

    /**
     * 解析保存为Json的缓存
     * @return mixed
     */
    protected function getCachedCallback()
    {
        return json_decode(Redis::get(\Session::get('strDataID')));
    }

    /**
     * 获得上传的视频
     * @return mixed
     */
    public function getUpload()
    {
        $tags['strDataID'] = \Session::get('strDataID');
        $tags['strKey']    = \Session::get('strKey');
        $upFileID          = $this->getCachedCallback()['upFileID'];

        Redis::del(\Session::get('strDataID'));
        \Session::set('strDataID', null);
        \Session::set('strKey', null);

        return $upFileID;
    }

    protected function getIndexPage($type, $sort)
    {
        if ($sort == 'time') {
            $sort = 'updated_at';
        }

        return Application::with('branch')->where('type', $type)->where('verification', 1)->orderBy($sort, 'desc')->paginate(16);
    }

    protected function getShowData($id)
    {
        $application = Application::with(['branch.university.province', 'comments' => function ($query) {
            $query->with('user');
        }])->withStatus()->where("id", $id)->firstOrFail();
        $comments    = $application->comments;
        $branch      = $application->branch;
        $university  = $branch->university;

        return compact('comments', 'branch', 'application', 'university');
    }

    protected function editOrFail($view, $id)
    {
        $application = Application::findOrFail($id);

        if ($application->canEdit()) {
            $video_token = $this->generateVideoToken();

            return view($view, $application)->with(compact("video_token"));
        } else {
            alert()->error("您现在不能修改成果信息");

            return redirect()->back();
        }
    }

    protected function updateApplication(Request $request, $application)
    {
        if ($request->file('img')) {
            $img_hash              = $this->saveImage($request->file('img'), "Application/Case");
            $application->img_hash = $img_hash;
        }
        if ($request->file('apply')) {
            $apply_hash              = $this->saveImage($request->file('apply'), "Application/Apply");
            $application->apply_hash = $apply_hash;
        }
        if (\Session::has('video_path') && (\Session::get('video_token') == $request->get('video_token'))) {
            $application->video_hash = \Session::get('video_path');
            \Session::set('video_path', null);
            \Session::set('video_token', null);
        }
        $application->name    = $request->get('name');
        $application->summary = $request->get('summary');

        return $application;
    }

    protected function getIndexData_m($type)
    {
        $applications = Application::
        select(['id', 'name', 'type', 'branch_id', 'fancy', 'img_hash'])
            ->where('type', $type)
            ->withStatus()
            ->with(['branch' => function ($query) {
                $query->select(['id', 'name']);
            }, 'comments'    => function ($query) {
                $query->select(['id']);
            }])->orderBy('updated_at', 'desc')->get();

        $applications = $applications->each(function ($item) {
            $item->summary = mb_strimwidth($item->summary, 0, 30);
        });

        return compact("applications");
    }

    protected function generateVideoToken()
    {
        $token  = mt_rand(0, 2000000000);
        $strKey = substr(md5($token . 'enet'), 8, 16);
        \Session::set('strDataID', $token);
        \Session::set('strKey', $strKey);

        return [$token, $strKey];
    }

    protected function validateFailed($validator)
    {
        alert()->error($validator->errors()->all())->persistent('关闭');

        return redirect()->back()->withInput();
    }
}