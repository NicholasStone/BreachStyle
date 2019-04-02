@extends("frontend.layouts.master")
@section('fit')
    @include('frontend.mobile.fit', ['route' => route('frontend.m.index') ])
@endsection
@section('title')
{{ $type }}_
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