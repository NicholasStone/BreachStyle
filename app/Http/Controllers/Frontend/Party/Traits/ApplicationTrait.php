<?php
namespace App\Http\Controllers\Frontend\Party\Traits;

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
        $token = str_random();
        \Session::set('video_token', $token);

        return $token;
    }

    protected function validateFailed($validator)
    {
        alert()->error($validator->errors()->all())->persistent('关闭');

        return redirect()->back()->withInput();
    }
}