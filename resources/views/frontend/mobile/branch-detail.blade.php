@extends('frontend.mobile.master')
@section('main-content')
    <!-- slider&news -->
    <div class="sliderNews silder_content">
        <div class="content">
            <div class="content_img_left" style="width: 35%">
                <img class="left_img" src="{{ asset('img/banner.jpg') }}"/>
            </div>
            <div class="content_zi_right" style="width: 60%">
                <div class="content_zi_right_title">
                    <i class="iconfont icon1">&#xe60c;</i>
                    <span class="zhubuleixing">
							{{ $branch->name  }}
						</span>
                    <p class="leixing">类型：{{ $branch->type }}</p>
                </div>
                <div class="content_zi_right_contain">
                    <span class="dangzhizhaiyao">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
							党支部摘要：
						</span>
                    <p class="zhaiyao">{{ $branch->summary }}</p>
                </div>
            </div>
            <div class="content_dibu">
                <div class="conent_chengguo">
                    <i class="iconfont icon2">&#xe615;</i>
                    <span class="chengguo">党支部已发布成果</span>
                </div>
                <ul>
                    <li class="list">已发布微党课<span
                                class="number">{{ isset($application['微党课']) ? $application['微党课']->count() : 0 }}</span>个
                    </li>
                    <li class="list">已发布工作案例<span
                                class="number">{{ isset($application['工作案例'])? $application['工作案例']->count() : 0}}</span>个
                    </li>
                    <li class="list">已发布教师党支部推荐展示<span
                                class="number">{{ isset($application[$branch->type.'推荐展示'])? $application[$branch->type.'推荐展示']->count() : 0 }}</span>个
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="silder_content_nav">
        <div class="middle_content">
            <div class="content_img_middle">
                <img class="middle_img"
                     src="data:image/png;base64,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"/>
            </div>
            <div class="zhibu_introduce" style="padding-top: 15px">
                <p class="jieshao">{!! $branch->detail !!}</p>
            </div>

        </div>
    </div>
    <div class="fabu_list">
        @unless(empty($application['工作案例']))
            <div class="fabu_list_nav">
                <div class="fabu_list1">
                    <span id="boder_left"></span>
                    <span id="zi">
						已发布工作案例
					</span>
                </div>
                @foreach($application['工作案例'] as $item)
                    <div class="anli">
                        <a href="{{ route('frontend.recommend.show' ,$item->id) }}">
                            <div class="content_img_left" style="width: 45%">
                                <img class="left_img" src="{{ asset($item->img_hash) }}"/>
                            </div>
                            <div class="content_zi_right" style="width: 50%">
                                <div class="content_zi_right_title">
							<span class="zhubuleixing">
								{{ $item->name }}
							</span>
                                    {{--<p class="" style="height:72px;overflow: hidden;">{{ $item->summary }}</p>--}}
                                </div>
                                <div class="icon_all">
                                <span style="color:#aeaead;">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i> {{ $item->total_comment }}
                                </span>
                                    <span style="color:#aeaead;">
                                    <i class="fa fa-commenting-o" aria-hidden="true"></i> {{ $item->fancy }}
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endunless
        @unless(empty($application['微党课']))
            <div class="fabu_list_nav">

                <div class="fabu_list1">
                    <span id="boder_left"></span>
                    <span id="zi">
                            已发布微党课
					</span>
                </div>
                @foreach($application['微党课'] as $item)
                    <div class="anli">
                        <a href="{{ route('frontend.course.show' ,$item->id) }}">

                            <div class="content_img_left" style="width: 45%">
                                <img class="left_img" src="{{ asset($item->img_hash) }}"/>
                            </div>
                            <div class="content_zi_right" style="width: 50%">
                                <div class="content_zi_right_title">
							<span class="zhubuleixing">
								{{  $item->name }}
							</span>
                                    {{--<p class="" style="height:22px;overflow: hidden;">{!! $item->detail !!}</p>--}}
                                </div>
                                <div class="icon_all">
                                <span style="color:#aeaead;">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i> {{ $item->total_comment }}
                                </span>
                                    <span style="color:#aeaead;">
                                    <i class="fa fa-commenting-o" aria-hidden="true"></i> {{ $item->fancy }}
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endunless
        <div class="fabu_list_nav">
            @unless(empty($application[$branch->type.'推荐展示']))
                <div class="fabu_list1">
                    <span id="boder_left"></span>
                    <span id="zi">
                            已发布推荐展示
					</span>
                </div>
                @foreach($application[$branch->type.'推荐展示'] as $item)
                    <div class="anli">
                        <a href="{{ route('frontend.recommend.show' ,$item->id) }}">
                            <div class="content_img_left" style="width: 45%">
                                <img class="left_img" src="{{ asset($item->img_hash) }}"/>
                            </div>
                            <div class="content_zi_right" style="width: 50%">
                                <div class="content_zi_right_title">
							<span class="zhubuleixing">
								{{ $item->name }}
							</span>
                                    {{--<p class="" style="height:72px;overflow: hidden;">{{ $item->summary }}</p>--}}
                                </div>
                                <div class="icon_all">
                                <span style="color:#aeaead;">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i> {{ $item->total_comment }}
                                </span>
                                    <span style="color:#aeaead;">
                                    <i class="fa fa-commenting-o" aria-hidden="true"></i> {{ $item->fancy }}
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
        </div>
        @endunless
    </div>
    <!-- slider&news -->
@endsection