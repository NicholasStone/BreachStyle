<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class CommentController extends Controller
{
    public function create(Requests\Frontend\Party\CommentRequest $request, $id)
    {
        Comment::create([
            'user_id'        => Auth::user()->id,
            'application_id' => $id,
            'comment'        => $request->get('comment'),
            'created_at'     => Carbon::now(),
        ]);
        alert()->success('评论发表成功');

        return redirect()->back();
    }
}
