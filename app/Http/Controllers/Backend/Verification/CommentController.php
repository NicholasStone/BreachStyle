<?php

namespace App\Http\Controllers\Backend\Verification;

use Yajra\Datatables\Facades\Datatables;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * @param int $v
     * @return mixed
     */
    public function unhandled($v)
    {
        return Datatables::of(
            Comment::with('user')->where('application_id', $v)->get()
        )
            ->addColumn('operations', function ($comment) {
                return '<a href="' . route('admin.verify.comment.deny', $comment->id) . '" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></a> ';
            })
            ->make(true);
    }

    /**
     * @param $id
     */
    public function deny($id)
    {
        $apply = Comment::findOrFail($id);
        $apply->delete();

        return redirect()->back()->withFlashSuccess("操作成功");
    }

    /**
     * 返回视图
     */
    public function index()
    {
        return view('backend.comments');
    }


    /**
     * 由bootstrapTable的ajax调用，返回所有评论的json
     */
    public function get()
    {
        return Datatables::collection();
    }

    /**
     * 删除指定评论
     * @param Request $request
     * @param $id
     */
    public function delete(Request $request, $id)
    {

    }
}
