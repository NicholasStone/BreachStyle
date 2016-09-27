<?php
namespace App\Http\Controllers\Frontend\Party\Traits;

use App\Models\Application;
use Illuminate\Http\Request;

trait ApplicationTrait
{
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
        return Application::with('branch')->where('type', $type)->where('verification', 1)->orderBy($sort, 'desc')->paginate();
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
            alert()->error("您现在不能修改成功信息");

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

    protected function generateVideoToken()
    {
        $token = str_random();
        \Session::set('video_token', $token);

        return $token;
    }
}