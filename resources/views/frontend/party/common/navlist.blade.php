<div class="nav">
    <div class="NavList">
        <ul>
            <li @if($type == '工作案例') class="active" @endif>
                <a href="{{ route('frontend.case.list') }}">支部工作案例</a>
                <span></span>
            </li>
            <li @if($type == '微党课') class="active" @endif>
                <a href="{{ route('frontend.course.list') }}">微党课</a>
                <span></span>
            </li>
            <li @if($type == '教师党支部推荐展示') class="active" @endif>
                <a href="{{ route('frontend.recommend.list', 'instructor') }}">教师党支部推荐展示</a>
                <span></span>
            </li>
            <li @if($type == '学生党支部推荐展示') class="active" @endif>
                <a href="{{ route('frontend.recommend.list', "student") }}">学生党支部推荐展示</a>
                <span></span>
            </li>
        </ul>
    </div>
    <div class="rank">
        <p>排序 :
            <a href="{{ route('frontend.search', 'time') }}" class="active">时间</a><span> | </span>
            <a href="{{ route('frontend.search', 'like') }}">人气</a><span> | </span>
            <a href="{{ route('frontend.search', 'comment') }}">评论</a>
        </p>
    </div>
</div>