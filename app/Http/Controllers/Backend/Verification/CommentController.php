<?php

namespace App\Http\Controllers\Backend\Verification;

use Datatables;
use App\Models\Comment;
use App\Http\Controllers\Controller;

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

}
