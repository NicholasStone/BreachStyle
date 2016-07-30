@extends('frontend.layouts.master')

@section('after-styles-end')
    {!! Html::style('css/frontend/participate.css') !!}
@endsection

@section('content')
    <!-- participate -->
    <div class="participate">
        <div class="content">
            <div class="breadNav">
                <a href="javascript:void(0);">全国</a>
                @unless(Auth::guest())
                    <span> / </span>
                    <a href="#">{{  $province or Auth::user()->province }}</a>
                    <span> / </span>
                    <a href="#">{{ $university or Auth::user()->university->name }}</a>
                @endunless
            </div>
            <div class="departeList">
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
                                              aria-hidden="true"></i>{{ $item->university->province->name }}</a>
                                        <a><i class="fa fa-university"
                                              aria-hidden="true"></i>{{ $item->university->name }}</a>
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
            </div>
            @include('frontend.party.common.pages')
        </div>
    </div>
    <!-- participate -->
@endsection