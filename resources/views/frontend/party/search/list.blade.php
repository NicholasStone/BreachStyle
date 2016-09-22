@extends("frontend.layouts.master")

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/caseList.css')) !!}
    {!! Html::style(asset('css/frontend/search.css')) !!}
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
                @if(count($page) != 0)
                    <div class="caseList">
                        <ul>
                            @foreach($page as $item)
                                <li>
                                    <a href=" @if($item->type == "工作案例") {{ route('frontend.case.show', $item->id) }}
                                    @elseif($item->type == "微党课") {{ route('frontend.course.show', $item->id) }}
                                    @elseif($item->type == "学生党支部推荐展示" || "教师党支部推荐展示") {{ route('frontend.recommend.show', $item->id) }} @endif">

                                        <div class="searchLeft">
                                            <h3>{{ $item->name }}</h3>
                                            <p>{{ $item->summary }}</p>
                                            <span><i class="icon iconfont">&#xe60e;</i>{{ $item->fancy }}</span>
                                            <span><i class="icon iconfont">&#xe609;</i>{{ $item->total_comment }}</span>
                                        </div>
                                        <div class="searchRight">
                                            <div class="searchImgBox">
                                                <img src="{{ asset($item->img_hash) }}"/>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <div style="text-align: center;margin-top: 50px;margin-bottom: 100px; color: grey"><h2>暂无数据</h2></div>
                @endif
            </div>
        </div>
    </div>
    <!-- achievement List -->
@endsection