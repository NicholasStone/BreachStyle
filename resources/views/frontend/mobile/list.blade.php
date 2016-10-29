@extends('frontend.mobile.master')
@section('main-content')
<!--content-->
@if( isset($sliders_switch) && $sliders_switch->value && isset($sliders))
    @include('frontend.mobile.slider')
@endif
<div class="content">
    <ul class="index-main-ul">
        @foreach($applications as $item)
            <li class="index-list">
                @if($item->type == "学生党支部推荐展示" || $item->type == "教师党支部推荐展示")
                    <a href="{{ route('frontend.recommend.show', $item->id) }}">
                @elseif($item->type == "微党课")
                    <a href="{{ route('frontend.course.show', $item->id) }}">
                @elseif($item->type == "工作案例")
                    <a href="{{ route('frontend.case.show', $item->id) }}">
                @endif
                    <div class="index-list-top">
                        <div class="list-top-left">
                            <h5>{{ $item->name }}</h5>
                            @unless($item->type == "微党课")
                                <p class="summary" style="height: 15px">
                                    {{ $item->summary }}
                                </p>
                            @endunless
                        </div>
                        <div class="list-top-right">
                            <img src="{{ asset($item->img_hash) }}">
                        </div>
                    </div>
                    </a>
                    <div class="index-list-bottom">
                        <div class="list-bottom-left">
                            <div><i class="fa fa-user" aria-hidden="true"></i></div>
                            <span><a href="{{ route('frontend.m.branch.show', $item->branch->id) }}">{{ $item->branch->name }}</a></span>
                        </div>
                        <div class="list-bottom-right">
                            <div class="index-zan"><i class="fa fa-heart-o" aria-hidden="true"></i> {{ $item->fancy }}</div>
                            <div class="index-message"><i class="fa fa-commenting-o" aria-hidden="true"></i> {{ $item->comments->count() }}</div>
                        </div>
                    </div>
            </li>
        @endforeach
    </ul>
</div>
<!--content-->
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swipeslider.css') }}"/>
    <link href="//cdn.bootcss.com/unslider/2.0.3/css/unslider.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/unslider/2.0.3/css/unslider-dots.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/dropload.css') }}"/>
@endsection

@section('script')
    <script src="//cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    {{ HTML::script('/js/jquery.event.move.min.js') }}
    {{ HTML::script('/js/jquery.event.swipe.js') }}
    {{ HTML::script('/js/dropload.min.js') }}
    {{ HTML::script('//cdn.bootcss.com/unslider/2.0.3/js/unslider-min.js') }}
@endsection