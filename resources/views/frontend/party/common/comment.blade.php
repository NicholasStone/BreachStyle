<!-- comment -->
<div class="comment">
    <div class="content">
        <div class="commentLength">
            <p>评论(<span>{{ $total_comment }}</span>条)</p>
        </div>
        <div class="publish">
            <textarea class="review" placeholder="请输入评论内容"></textarea>
            <button type="button" class="reviewBtn">评论</button>
        </div>
        <div class="commentList">
            <ul>
                @foreach($comments as $key => $item)
                    <li>
                        <div class="userPic">
                            <img src="{{ asset($item->user->avatar) }}"/>
                        </div>
                        <div class="comment_ctt">
                            <span class="username">{{ $item->user->name }}</span>
                            <span class="time">{{ \Carbon\Carbon::parse($item->created_at) }}</span>
                            <span class="floor"> {{$key}}F </span>
                            <p>{{ $item->detial }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="page">
            <div class="pageList">
                <ul>
                    <li class="first">
                        <a href="#">首页</a>
                    </li>
                    <li class="prev">
                        <a href="#">上一页</a>
                    </li>
                    <li class="pages active">
                        <a href="#">1</a>
                    </li>
                    <li class="pages">
                        <a href="#">2</a>
                    </li>
                    <li class="pages">
                        <a href="#">3</a>
                    </li>
                    <li class="pages">
                        <a href="#">4</a>
                    </li>
                    <li class="pages">
                        <a href="#">5</a>
                    </li>
                    <li class="next">
                        <a href="#">下一页</a>
                    </li>
                    <li class="last">
                        <a href="#">尾页</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- comment -->