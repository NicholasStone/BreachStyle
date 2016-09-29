@extends('frontend.mobile.master')
@section('main-content')
    <!--content-->
    <div class="content">
        <div class="join-title">
            <span>全国</span>
            @unless(empty($university))
                <span> / </span>
                <a href="javascript:void(0);">{{ $page[0]['relations']['university']->province->name }}</a>
                <span> / </span>
                <a href="javascript:void(0)">{{ $university->name }}</a>
            @endunless
        </div>
        <ul class="join-main-ul">
            @foreach($page as $item)
                <li class="join-list">
                    <a href="{{ route('frontend.m.branch.show',$item->id) }}">
                        <div class="join-list-top">
                            <div class="school-left">
                                <img src="{{ $item->avatar }}"/>
                            </div>
                            <div class="school-right">
                                <div class="school-right-top">
                                    <div></div>
                                    <span style="font-size: 12px">{{ $item->name }}</span>
                                </div>
                                <div class="school-right-bottom">
                                    <div class="weizhi" style="display: inline">
                                        <div><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <span>{{ $page[0]['relations']['university']->province->name }}</span>
                                    </div>
                                    <div class="xuexiao" style="display: inline">
                                        <div><i class="fa fa-university" aria-hidden="true"></i></div>
                                        <span>{{ $item->university }}</span>
                                    </div>
                                    <div class="kindzhibu" style="display: inline">
                                        <div><i class="fa fa-tags" aria-hidden="true"></i></div>
                                        <span>{{ $item->type }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="join-list-mid">
                            <p>{{ $item->summary }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    {{--TODO 添加分页显示--}}
    <!--content-->
@endsection