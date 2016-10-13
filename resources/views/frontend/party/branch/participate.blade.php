@extends('frontend.layouts.master')
@section('before-styles-end')
    @include('frontend.mobile.fit', ['route' => route('frontend.m.branch.index') ])
@endsection
@section('after-styles-end')
    {!! Html::style('css/frontend/participate.css') !!}
@endsection 

@section('content')
    <!-- participate -->
    <div class="participate">
        <div class="content">
            <div class="breadNav">
                <a href="javascript:void(0);">全国</a>
                @unless(empty($university))
                    <span> / </span>
                    <a href="javascript:void(0);">{{ $page[0]['relations']['university']->province->name }}</a>
                    <span> / </span>
                    <a href="javascript:void(0)">{{ $university->name }}</a>
                @endunless
            </div>
            <div class="departeList">
                @if($page->total() == 0)
                    <div style="text-align: center; width: 100%; color: grey; margin-top: 50px"><h3>暂无数据</h3></div>
                    @else
                <ul>
                    @foreach($page as $item)
                        <li>
                            <div class="outbox">
                                <div class="data">
                                    <div class="headimg">
                                        <img src="{{ asset($item->avatar) }}"/>
                                    </div>
                                    <div class="dataInfo">
                                        <a class="title" href="{{ route('frontend.branch.show', $item->id) }}"><span
                                                    class="iconfont">&#xe60c;</span>{{ $item->name }}</a>
                                        <a><i class="fa fa-map-marker"
                                              aria-hidden="true"></i>{{ $item['relations']['university']->province->name }}</a>
                                        <a><i class="fa fa-university"
                                              aria-hidden="true"></i>{{ $item->university }}</a>
                                        <a><i class="fa fa-tags" aria-hidden="true"></i>{{ $item->type }}</a>
                                    </div>
                                </div>
                                <div class="introduce">
                                    <p>{{ $item->summary }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                    @endif
            </div>
            @include('frontend.party.common.pages')
        </div>
    </div>
    <!-- participate -->
@endsection