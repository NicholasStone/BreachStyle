@extends("frontend.layouts.master")

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/caseList.css')) !!}
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
                                <li class="type1">
                                    <div class="outBox">
                                        <div class="top">
                                            <div class="left">
                                                @if($item->type == "工作案例")
                                                    <h3>{{ link_to(route('frontend.case.show', $item->id), $item->name, ['style' => 'color:black']) }}</h3>
                                                @endif
                                                @if($item->type == "微党课")
                                                    <h3>{{ link_to(route('frontend.course.show', $item->id), $item->name, ['style' => 'color:black']) }}</h3>
                                                @endif
                                                @if($item->type == "学生党支部推荐展示" || $type == "教师党支部推荐展示")
                                                    <h3>{{ link_to(route('frontend.recommend.show', $item->id), $item->name, ['style' => 'color:black']) }}</h3>
                                                @endif
                                                <p style="overflow: hidden; text-overflow: ellipsis;">{!! $item->summary !!}</p>
                                            </div>
                                            <div class="right">
                                                <div>
                                                    <img src="{{ asset($item->img_hash) }}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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