@extends("frontend.layouts.master")

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
    </div>
    <!-- achievement List -->
@endsection