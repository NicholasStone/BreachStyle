@extends('frontend.layouts.master')

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/depart.css'))!!}
    {!! Html::style(asset('css/frontend/video.css')) !!}
    {!! Html::style('//cdn.bootcss.com/video.js/5.11.0/video-js.min.css') !!}
@endsection

@section('content')
    <!-- departInfo -->
    <div class="departInfo">
        <div class="content">
            <div class="showCard">
                <div class="ImgShow">
                    <img src="{{ asset($branch->avatar) }}"/>
                </div>
                <div class="wordShow">
                    <h2><span class="iconfont">&#xe60c;</span>{{ $branch->name }}</h2>
                    <h3>类型 : <span>{{ $branch->type }}</span></h3>
                    <h4><span class="iconfont">&#xe614;</span>党支部摘要 :</h4>
                    <p>{{ $branch->summary }}</p>
                </div>
                <div class="achieveShow">
                    <p class="title"><span class="iconfont">&#xe615;</span>党支部已发布成果</p>
                    <p>已发布微党课<span> {{ $application['微党课']->count() }}</span>个</p>
                    <p>已发布工作案例<span> {{ $application['工作案例']->count() }}</span>个</p>
                    <p>已发布{{ $branch->type.'推荐展示' }}<span> {{ $application[$branch->type.'推荐展示']->count() }}</span>个</p>
                </div>
            </div>
            <div class="leadCard">
                <div class="imgHead">
                    <img src="{{ asset($branch->secretary->avatar) }}"/>
                </div>
                <h3>党支部书记:<span>{{ $branch->secretary->name }}</span></h3>
                <p>{{ $branch->secretary_summary }}</p>
            </div>
        </div>
        <div class="content">
            <div class="showCard">
                <div class="departTitle">
                    <img src="{{ asset('img/departShow.png') }}"/>
                </div>
                <div class="showContent">
                    {!! $branch->detail !!}
                </div>
            </div>
            <div class="pubList">
                <div class="pub">
                    <p class="pubTitle"><span></span>已发布微党课</p>
                    <ul>
                        @foreach($application['微党课'] as $item)
                            <li>
                                <div class="outBox">
                                    <div class="vedioImg">
                                        <img src="{{ asset($item->img_hash) }}"/>
                                    </div>
                                    <h3>{{ link_to(route('frontend.course.show', $item->id), $item->name) }}</h3>
                                    <p>{!! $item->detail !!}</p>
                                    <div class="data">
                                        <span class="review"><i
                                                    class="icon iconfont">&#xe60e;</i> {{ $item->total_comment }}</span>
                                        <span class="like"><i
                                                    class="icon iconfont">&#xe609;</i> {{ $item->fancy }}</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="pub">
                    <p class="pubTitle"><span></span>已发布工作案例</p>
                    <ul>
                        @foreach($application['工作案例'] as $item)
                            <li>
                                <div class="outBox">
                                    <div class="vedioImg">
                                        <img src="{{ asset($item->img_hash) }}"/>
                                    </div>
                                    <h3>{{ link_to(route('frontend.case.show', $item->id), $item->name) }}</h3>
                                    <p>{{ $item->summary }}</p>
                                    <div class="data">
                                        <span class="review"><i
                                                    class="icon iconfont">&#xe60e;</i> {{ $item->total_comment }}</span>
                                        <span class="like"><i
                                                    class="icon iconfont">&#xe609;</i> {{ $item->fancy }}</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="pub">
                    <p class="pubTitle"><span></span>已发布{{ $item->type }}推荐展示</p>
                    <ul>
                        @foreach($application[$branch->type.'推荐展示'] as $item)
                            <li>
                                <div class="outBox">
                                    <div class="vedioImg">
                                        <img src="{{ asset($item->img_hash) }}"/>
                                    </div>
                                    <h3>{{ link_to(route('frontend.recommend.show', $item->id), $item->name) }}</h3>
                                    <p>{{ $item->summary }}</p>
                                    <div class="data">
                                        <span class="review"><i
                                                    class="icon iconfont">&#xe60e;</i> {{ $item->total_comment }}</span>
                                        <span class="like"><i
                                                    class="icon iconfont">&#xe609;</i> {{ $item->fancy }}</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- departInfo -->
@endsection
