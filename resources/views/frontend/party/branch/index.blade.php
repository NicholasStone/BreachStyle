@extends('frontend.layouts.master')
@section('before-styles-end')
    @include('frontend.mobile.fit', ['route' => route('frontend.m.branch.show', $branch->id) ])
@endsection
@section('after-styles-end')
    {!! Html::style(asset('css/frontend/depart.css'))!!}
    {!! Html::style(asset('css/frontend/show.css'))!!}
    {!! Html::style(asset('css/frontend/caseList.css'))!!}
@endsection

@section('content')
    <!-- departInfo -->
    <div class="departInfo">
        <div class="content">
            <div class="showCard">
                <div class="ImgShow">
                    <img src="{{ $branch->avatar }}"/>
                </div>
                <div class="wordShow">
                    <h2><span class="iconfont">&#xe60c;</span>{{ $branch->name }}</h2>
                    <h3>类型 : <span>{{ $branch->type }}</span></h3>
                    <h4><span class="iconfont">&#xe614;</span>党支部摘要 :</h4>
                    <p>{{ $branch->summary }}</p>
                </div>
                <div class="achieveShow">
                    <p class="title"><span class="iconfont">&#xe615;</span>党支部已发布成果</p>
                    <p>已发布微党课<span> {{ isset($application['微党课']) ? $application['微党课']->count() : 0 }}</span>个</p>
                    <p>已发布工作案例<span> {{ isset($application['工作案例'])? $application['工作案例']->count() : 0}}</span>个</p>
                    <p>已发布{{ $branch->type.'推荐展示' }}
                        <span> {{ isset($application[$branch->type.'推荐展示'])? $application[$branch->type.'推荐展示']->count() : 0 }}</span>个
                    </p>
                </div>
            </div>
            <div class="leadCard">
                <div class="imgHead">
                    <img src="{{ $branch['relations']['secretary']->avatar }}"/>
                </div>
                <h3>党支部书记:<span>{{ $branch['relations']['secretary']->name }}</span></h3>
                <p>{{ $branch->secretary_summary }}</p>
            </div>
        </div>
        <div class="content">
            <div class="showCard">
                <div class="departTitle">
                    <img src="{{ asset('img/departShow.png') }}"/>
                </div>
                <div class="showContent">
                    <div class="new_row">
                    {!! $branch->detail !!}
                    </div>
                </div>
            </div>
            <div class="pubList">
                <div class="pub">
                    @unless(empty($application['微党课']))
                        <p class="pubTitle"><span></span>已发布微党课</p>
                        <ul>
                            @foreach($application['微党课'] as $item)
                                <li>
                                    <a href="{{ route('frontend.course.show', $item->id) }}">
                                        <div class="outBox">
                                            <div class="vedioImg">
                                                <img src="{{ asset($item->img_hash) }}"/>
                                            </div>
                                            <h3>{{ $item->name }}</h3>
                                            <p>{!! $item->detail !!}</p>
                                            <div class="data">
                                        <span class="review"><i
                                                    class="icon iconfont">&#xe60e;</i> {{ $item->total_comment }}</span>
                                                <span class="like"><i
                                                            class="icon iconfont">&#xe609;</i> {{ $item->fancy }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endunless
                </div>
                <div class="pub">
                    @unless(empty($application['工作案例']))
                        <p class="pubTitle"><span></span>已发布工作案例</p>
                        <ul>
                            @foreach($application['工作案例'] as $item)
                                <li>
                                    <a href="{{ route('frontend.case.show', $item->id) }}">
                                        <div class="outBox">
                                            <div class="vedioImg">
                                                <img src="{{ asset($item->img_hash) }}"/>
                                            </div>
                                            <h3>{{ $item->name }}</h3>
                                            <p>{{ $item->summary }}</p>
                                            <div class="data">
                                        <span class="review"><i
                                                    class="icon iconfont">&#xe60e;</i> {{ $item->total_comment }}</span>
                                                <span class="like"><i
                                                            class="icon iconfont">&#xe609;</i> {{ $item->fancy }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endunless
                </div>
                <div class="pub">
                    @unless(empty($application[$branch->type.'推荐展示']))
                        <p class="pubTitle"><span></span>已发布推荐展示</p>
                        <ul>
                            @foreach($application[$branch->type.'推荐展示'] as $item)
                                <li>
                                    <a href="{{ route('frontend.recommend.show', $item->id) }}">
                                        <div class="outBox">
                                            <div class="vedioImg">
                                                <img src="{{ asset($item->img_hash) }}"/>
                                            </div>
                                            <h3>{{ $item->name }}</h3>
                                            <p>{{ $item->summary }}</p>
                                            <div class="data">
                                        <span class="review"><i
                                                    class="icon iconfont">&#xe60e;</i> {{ $item->total_comment }}</span>
                                                <span class="like"><i
                                                            class="icon iconfont">&#xe609;</i> {{ $item->fancy }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endunless
                </div>
            </div>
        </div>
    </div>
    <!-- departInfo -->
@endsection
