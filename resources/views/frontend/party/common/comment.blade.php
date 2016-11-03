<!-- comment -->
<div class="comment">
    <div class="content">
        <div class="commentLength">
            <p>评论(<span>{{ $application->total_comment }}</span>条)</p>
        </div>
        @if(Auth::check()&&Auth::user()->user_id)
            <div class="publish">
                <form action="{{ route('frontend.comment.create', $application->id) }}" method="post">
                    {!! csrf_field() !!}
                    <textarea class="review" placeholder="请输入评论内容" name="comment"></textarea>
                    <button type="submit" class="reviewBtn">评论</button>
                </form>
            </div>
        @endif
        <div class="commentList">
            @if(isset($comments))
                @foreach($comments as $key => $item)
                    <ul>
                        <li>
                            <div class="userPic">
                                <img src="{{ asset($item->user->avatar) }}" alt="{{ $item->user->name }}"/>
                            </div>
                            <div class="comment_ctt">
                                <span class="username">{{ $item->user->name }}</span>
                                <span class="time">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                <span class="floor"> {{ intval($key) + 1 }}F </span>
                                <p>{{ $item->comment }}</p>
                            </div>
                        </li>
                    </ul>
                @endforeach
            @else
                <div style="text-align: center; color: #5e5e5e;"><h3>暂无评论</h3></div>
            @endif
        </div>
    </div>
</div>
<!-- comment -->