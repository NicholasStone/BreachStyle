@unless(empty($type))
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
                @if($type == "工作案例")
                    <a href="{{ route('frontend.case.list', 'time') }}"
                       @if($sort == 'created_at') class="active" @endif>时间</a><span> | </span>
                    <a href="{{ route('frontend.case.list', 'fancy') }}"
                       @if($sort == 'fancy') class="active" @endif>人气</a><span> | </span>
                    <a href="{{ route('frontend.case.list', 'total_comment') }}"
                       @if($sort == 'total_comment') class="active" @endif>评论</a>
                @endif
                @if($type == "微党课")
                    <a href="{{ route('frontend.course.list', 'created_at') }}"
                       @if($sort == 'created_at') class="active" @endif>时间</a><span> | </span>
                    <a href="{{ route('frontend.course.list', 'fancy') }}" @if($sort == 'fancy') class="active" @endif>人气</a>
                    <span> | </span>
                    <a href="{{ route('frontend.course.list', 'total_comment') }}"
                       @if($sort == 'total_comment') class="active" @endif>评论</a>
                @endif
                @if( $type == "教师党支部推荐展示")
                    <a href="{{ route('frontend.recommend.list', ['type' => 'instructor','sort' => 'created_at']) }}"
                       @if($sort == 'created_at') class="active" @endif>时间</a><span> | </span>
                    <a href="{{ route('frontend.recommend.list', ['type' => 'instructor','sort' => 'fancy']) }}"
                       @if($sort == 'fancy') class="active" @endif>人气</a><span> | </span>
                    <a href="{{ route('frontend.recommend.list', ['type' => 'instructor','sort' => 'total_comment']) }}"
                       @if($sort == 'total_comment') class="active" @endif>评论</a>
                @endif
                @if($type == "学生党支部推荐展示")
                    <a href="{{ route('frontend.recommend.list', ['type' => 'student', 'sort' => 'created_at']) }}"
                       @if($sort == 'created_at') class="active" @endif>时间</a><span> | </span>
                    <a href="{{ route('frontend.recommend.list', ['type' => 'student', 'sort' => 'fancy']) }}"
                       @if($sort == 'fancy') class="active" @endif>人气</a><span> | </span>
                    <a href="{{ route('frontend.recommend.list', ['type' => 'student', 'sort' => 'total_comment']) }}"
                       @if($sort == 'total_comment') class="active" @endif>评论</a>
                @endif
            </p>
        </div>
    </div>
@endunless