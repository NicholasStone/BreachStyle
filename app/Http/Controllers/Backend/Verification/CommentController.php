<?php

namespace App\Http\Controllers\Backend\Verification;

use Datatables;
use App\Models\Comment;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{

    /**
     * 获取所有评论
     *
     * @return mixed
     */
    public function get()
    {
        $comments = Comment::with([
            'user'        => function ($query) {
                return $query->select('id', 'name')->withTrashed();
            },
            'application' => function ($query) {
                return $query->select('id', 'name', 'type')->withTrashed();
            }])->get();

        foreach ($comments as $comment) {
            $comment->application->name = '<a href="' . $comment->application->getShowUrl() . '">' . $comment->application->name . '</a>';
        }

        return Datatables::of($comments)
            ->addColumn('operations', function ($comment) {
                return '<a href="' . route('admin.verify.comments.deny', $comment->id) . '" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></a> ';
            })
            ->make(true);
    }

    /**
     * 硬删除评论
     *
     * @param $id
     */
    public function deny($id)
    {
        $apply = Comment::findOrFail($id);
        $apply->delete();

        return redirect()->route('admin.verify.comments.index')->withFlashSuccess("操作成功");
    }

    /**
     * 返回视图
     */
    public function index()
    {
        return view('backend.verification.comments');
    }
}
