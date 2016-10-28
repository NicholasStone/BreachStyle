@extends('frontend.layouts.master')
@section('meta')
    <meta name="keywords" content="两学一做 高校 支部  中国大学生在线" />
    <meta name="description" content="不断挖掘、深入总结、广泛推广高校基层党支部在开展“两学一做”学习教育、学习习近平总书记“七一”重要讲话和纪念建党95周年“学党史、感党恩、跟党走”主题教育活动中的先锋模范、先进经验、典型案例，发挥典型引领和带动作用，推动“两学一做”学习教育向广大党员拓展、向经常性教育延伸，推动高校基层党支部整体功能提升。" />
@endsection
@section('after-styles-end')
    {!! Html::style(asset('css/frontend/caseDetail.css')) !!}
    {!! Html::style(asset('css/frontend/comment.css')) !!}
    @yield('sub-styles')
@endsection
@section('content')
    <div class="caseDetail">
        <div class="content">
            <div class="title">
                <h3>{{ $application->name }}</h3>
                <p>来源 : <a href="#">{{ $branch['relations']['university']->province->name }}</a><span>/</span><a
                            href="#">{{ $university }}</a><span>/</span><a
                            href="{{ route('frontend.branch.show', $branch->id) }}">{{ $branch->name }}</a>
                </p>
                <div class="data">
                    <span><i class="icon iconfont">&#xe60e;</i>{{ $application->total_comment or 0 }}</span>
                    <span><i class="icon iconfont">&#xe609;</i>{{ $application->fancy }}</span>
                    <span><i class="icon iconfont">&#xe603;</i>{{ $application->created_at }}</span>
                    <i class="line"></i>
                </div>
            </div>
            <div class="article">
                @yield('article')
            </div>
            @include('frontend.includes.fancy')
        </div>
    </div>
    @if(Auth::check() && Auth::user()->user_id)
        @include('frontend.party.common.comment')
    @endif
@endsection