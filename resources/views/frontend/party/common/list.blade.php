@extends("frontend.layouts.master")
@section('meta')
<meta name="keywords" content="两学一做 高校 支部  中国大学生在线" />
<meta name="description" content="不断挖掘、深入总结、广泛推广高校基层党支部在开展“两学一做”学习教育、学习习近平总书记“七一”重要讲话和纪念建党95周年“学党史、感党恩、跟党走”主题教育活动中的先锋模范、先进经验、典型案例，发挥典型引领和带动作用，推动“两学一做”学习教育向广大党员拓展、向经常性教育延伸，推动高校基层党支部整体功能提升。" />
@endsection
@section('after-styles-end')
    @if($type == "微党课")
        {!! Html::style('css/frontend/courseList.css') !!}
    @else
        @unless($type == "工作案例")
            {!! Html::style(asset('css/frontend/show.css')) !!}
        @endunless
        {!! Html::style(asset('css/frontend/caseList.css')) !!}
    @endif
@endsection

@section('content')
    @unless(isset($self))
        @include('frontend.party.common.search')
    @endunless

    <div class="clearfix"></div>

    <!-- achievement List -->
    <div class="achievementList">
        <div class="content">
            @include('frontend.party.common.navlist')
            <div class="mainList">
                @if($type == "工作案例")
                    @include('frontend.party.case.list')
                @endif
                @if($type == "微党课")
                    @include('frontend.party.course.list')
                @endif
                @if($type == "学生党支部推荐展示" || $type == "教师党支部推荐展示")
                    @include('frontend.party.recommend.list')
                @endif
                @unless(is_array($page))
                    @include('frontend.party.common.pages')
                @endunless
            </div>
        </div>
    </div>
    <!-- achievement List -->
@endsection