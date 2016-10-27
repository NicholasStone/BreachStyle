<?php
namespace App\Http\Controllers\Frontend\Party\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;
use Validator;
use App\Models\Application;
use Illuminate\Http\Request;

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

//视频上传功能
    /**
     * 视频上传回调，并将回调结果以Json的形式保存在Redis中
     * @param Request $request
     */
    public function uploadCallback(Request $request)
    {
        \Log::info("Callback from ".$request->ip()." at " . Carbon::now() . " Json:" . json_encode($request->all()));
        Redis::setex($request->get('strDataId'), 3600, json_encode([
            'strKey'   => $request->get('strKey'),
            'upFileID' => $request->get('upFileID'),
            'status'   => $request->get('status'),
        ]));

    }

    /**
     * 视频上传认证
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadVerify(Request $request)
    {
        $cache = $this->getCachedCallback($request->get('strDataID'), $request->get('strKey'));
        if ($cache) {
            $result = 1;
        } else {
            $result = 0;
        }
        \Log::info("User " . \Auth::user()->name . "(" . \Auth::id() . ")" . " verified video,result is " . ($result ? "true" : "false"));

        return response()->json(['upload' => $result]);
    }

    /**
     * 解析保存为Json的缓存,并验证是否有效
     * @param $strDataId
     * @param $strKey
     * @return mixed
     */
    protected function getCachedCallback($strDataId, $strKey)
    {
        $cache = json_decode(Redis::get($strDataId));
        if (!empty($cache) && $cache->strKey == $strKey) {
            return $cache;
        } else {
            return null;
        }
    }

    /**
     * 获得上传的视频
     * @param $strDataID
     * @param $strKey
     * @return mixed
     */
    public function getUpload($strDataID, $strKey)
    {
        $cache = $this->getCachedCallback($strDataID, $strKey);
        Redis::del($strDataID);

        if (empty($cache)) {
            return null;
        } else {
            return $cache->upFileID;
        }
    }

    protected function generateVideoToken()
    {
        $token  = mt_rand(0, 2000000000);
        $strKey = substr(md5($token . 'enet'), 8, 16);

        return [$token, $strKey];
    }

//end video

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
            list($strDataID, $strKey) = $this->generateVideoToken();

            return view($view, $application)->with(compact("strDataID", "strKey"))
                ->withUser(access()->user());
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

    protected function validateFailed($validator)
    {
        alert()->error($validator->errors()->all())->persistent('关闭');

        return redirect()->back()->withInput();
    }
}