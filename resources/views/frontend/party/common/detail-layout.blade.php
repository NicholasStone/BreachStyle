@extends('frontend.layouts.master')
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