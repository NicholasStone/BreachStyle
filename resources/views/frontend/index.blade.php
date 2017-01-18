@extends('frontend.layouts.master')

@section('fit')
    @include('frontend.mobile.fit', ['route' => route('frontend.m.index')])
@endsection

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/map.css'))!!}
    {!! Html::style(asset('css/frontend/qczb.css'))!!}
    {!! Html::style(asset('css/frontend/weibo.css'))!!}
    {!! Html::style(asset('css/frontend/swipeslider.css'))!!}
    <link rel="stylesheet" href="{{ asset('css/frontend/window.css') }}">
@endsection

@section('content')
    {{--<div class="qczb-qr">--}}
        {{--<img src="{{ url('build/img/QR.png') }}" alt="青春支部">--}}
        {{--<p>扫描下载 青春支部 APK</p>--}}
    {{--</div>--}}
    {{--<div class="popdown-content">--}}
        {{--<header class="head_nav">--}}
            {{--<h2>提示：活动时间修改</h2>--}}
        {{--</header>--}}
        {{--<div class="inform_content">--}}
            {{--<p>--}}
                {{--1.提交：2016年7月20日至2016年11月30日--}}
            {{--</p>--}}

            {{--<p>--}}
                {{--2.遴选：2016年12月1日至2017年1月15日--}}
            {{--</p>--}}

            {{--<p>--}}
                {{--3.公示：2017年1月16日至2017年1月20日--}}
            {{--</p>--}}
        {{--</div>--}}
        {{--<footer class="anniu">--}}
            {{--<p><b id="pop-countdown">10</b>秒后自动关闭</p>--}}
        {{--</footer>--}}
    {{--</div>--}}
    @if($settings[2]->value)
        <div class="sliderNews">
            <div class="content">
                <div class="slider">
                    <div class="container">
                        <div id="full_feature" class="swipslider">
                            <ul class="sw-slides">
                                @foreach($sliders as $slider)
                                    <li class="sw-slide">
                                        <a href="{{ asset($slider->link) }}" target="_blank">
                                            {!! $slider->path !!}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news">
                    <div class="container">
                        <div class="title">
                            <h3>最新动态</h3>
                        </div>
                        <div class="newList">
                            <ol>
                                @foreach($last_trends as $trend)
                                    <li>
                                        <p>
                                            @if($trend->type == "微党课")
                                                <a href="{{ route('frontend.course.show', $trend->id) }}">{{ $trend->name }}</a>
                                            @elseif($trend->type == "工作案例")
                                                <a href="{{ route('frontend.case.show', $trend->id) }}">{{ $trend->name }}</a>
                                            @elseif($trend->type == "教师党支部推荐展示" || $trend->type == "学生党支部推荐展示")
                                                <a href="{{ route('frontend.recommend.show', $trend->id) }}">{{ $trend->name }}</a>
                                            @endif
                                        </p>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Achievements -->
        <div class="achievements">
            <div class="content">
                <ul>
                    <li class="zhibu">
                        <a href="{{ route('frontend.branch.index') }}">
                            <div class="logo"></div>
                        </a>
                        <div class="data">
                            <h2><span>{{ $count_branches }}</span>个</h2>
                            <p>参与党支部</p>
                        </div>
                    </li>
                    <li class="dangyuan">
                        <a href="{{ route('frontend.active.detail') }}">
                            <div class="logo"></div>
                        </a>
                        <div class="data">
                            <h2><span>{{ $count_universities }}</span>个</h2>
                            <p>参与高校</p>
                        </div>
                    </li>
                    <li class="achievement" onclick="">
                        <a href="{{ route('frontend.case.list') }}">
                            <div class="logo"></div>
                        </a>
                        <div class="data">
                            <h2><span>{{ $count_verify_through_application }}</span>个</h2>
                            <p>推选成果</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Achievements -->
    @endif
    <div class="clearfix"></div>
    <!-- activeInfo -->
    <div class="activeInfo" id="activeInfo">
        <div class="content">
            <div class="info">
                <div class="title">
                    <img src="img/info.png"/>
                </div>
                <div class="infoList">
                    <ul>
                        <li class="activeBackground">
                            <p class="tit" id="bg"><span>活动背景 : </span>通过开展高校支部风采展示活动，不断挖掘、深入总结、广泛推广高校基层党支部在开展“两学一做”学习教育和纪念和建党95周年
                            </p>
                            <a id="bgDetail">详情</a>
                        </li>
                        <li class="activeAchievement">
                            <p class="tit" id="ach"><span>活动荣誉 : </span>各类征集推选成果分为精品作品、优秀作品、入围作品三大类，按一定比例确定名额。结合各地各高校组织参与情况及成绩推选出
                            </p>
                            <a id="achDetail">详情</a>
                        </li>
                        <li class="activeContent">
                            <p class="tit" id="moreDetail"><span>活动内容 : </span>"支部风采"展示活动，包括高校教师党支部和大学生党支部的工作案例、微党课和推荐展示等方面。
                            </p>
                            <p class="tits" id="more1"><span>1.支部工作案例 : </span>工作案例汇集"两微一端"、组织生活会及其它方式的创新工作方法、典型事例、特色主题活动等。各高校根据“两学一做”开展
                            </p>
                            <p class="tits" id="more2"><span>2.微党课 : </span>鼓励各校教师党支部、大学生党支部积极联系实际讲党课，利用微视频、动漫等多种体裁形式，创新党课宣讲模式。党课选题紧扣"两学一做"
                            </p>
                            <p class="tits" id="more3"><span>3.教师党支部、大学生党支部推荐展示 : </span>各高校根据各教师党支部、大学生党支部开展"两学一做"学习教育的优秀经验和实际成效，评选优秀党支部案例
                            </p>
                            <div>
                                <a id="moreBtn"></a>
                            </div>
                        </li>
                        <li class="activeSignUp" style="border: none;">
                            <p class="tit"><span>报名 : </span>下载活动报名表，填写完成并由高校党委主管部门盖章后，由各党支部支书自行注册账号，登录活动页面，建立党支部后将校方审核的报名表拍照或扫描成jpg格式，文件命名为"报名表.jpg"提交到活动官网。推荐成果须有学校审核后统一报送，每类成果限报两项。
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact">
                <div class="title">
                    <img src="img/download.png"/>
                </div>
                <div class="downLoad">
                    <a href="{{ $settings[0]->value }}">1.报名表下载<span class="icon iconfont">&#xe611;</span></a>
                </div>
                <div class="downLoad">
                    <a href="{{ $settings[1]->value }}">2.活动通知下载<span class="icon iconfont">&#xe611;</span></a>
                </div>
                <div class="downLoad">
                    <a href="{{ asset('static/党支部报名表.docx') }}">3.党支部认证表<span
                                class="icon iconfont">&#xe611;</span></a>
                </div>
                <div class="downLoad">
                    <a href="{{ asset('static/参与流程.docx') }}">4.活动参与流程说明<span
                                class="icon iconfont">&#xe611;</span></a>
                </div>
                <div class="note">
                    <p>备注:</p>
                    <p>1.必须由党支部书记上传</p>
                    <p>2.系统默认创建党支部者为该党支部的党支部书记</p>
                </div>
            </div>
        </div>
    </div>
    <!-- activeInfo -->
    <div class="clearfix"></div>
    <!-- time -->
    <div class="time">
        <div class="content">
            <div class="title">
                <img src="img/time.png"/>
            </div>
            <div class="timePoint">
                <span class="time1">7/20</span>
                <span class="time2">11/30</span>
                <span class="time3">01/15</span>
                <span class="time4">01/20</span>
            </div>
            <div class="timeLine">
                <span class="line one"></span>
                <span class="point one active"></span>
                <span class="line two active"></span>
                <span class="point two active"></span>
                <span class="line three"></span>
                <span class="point three"></span>
                <span class="line four"></span>
                <span class="point four"></span>
                <span class="line five"></span>
            </div>
            <div class="timePeriod">
                <span class="period period1 active">提交</span>
                <span class="period period2">遴选</span>
                <span class="period period3">公示</span>
            </div>
        </div>
    </div>
    <!-- time -->
    <div class="clearfix"></div>

    <!-- activerequire -->
    <div class="require" id="require">
        <div class="content">
            <div class="title">
                <img src="img/require.png"/>
            </div>
            <div class="requireList">
                <ul>
                    <li>
                        <p><span class="tit">活动要求 : </span></p>
                        <p><span class="tits">1.严把内容质量。</span>支部工作案例、微党课是学习"两学一做"的重要载体，要求围绕阶段性主题，做到思想观点正确、内容积极健康。各级高校党委要对提交内容质量进行政治把关、认真推敲、仔细琢磨、精益求精、体现高水准高质量。
                        </p>
                        <p><span class="tits">2.精心制作展播视频。</span>高校基层党支部要围绕"两学一做"这一主题，遴选支部书记讲党课，精心组织拍摄视频。展播视频必须符合网上传播规律，充分运用案例教学、互动、PPT和图片动漫等多种展示形式，增强吸引力感染力，主讲人授课和视频配音必须讲普通话，重点内容配字幕。微党课视频时长小于10分钟，片头14秒对学校进行掠影式介绍，推荐使用MP4格式文件。
                        </p>
                    </li>
                    <li style="border: none;">
                        <p><span class="tit">活动对象 : </span>教育部直属高校、其他部委属高校、地方普通高等学校(含全日制大学、独立设置的学院和高等专科学校、高等职业学校)、教师党支部、大学生党支部。
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- activerequire -->

    <div class="clearfix"></div>

    @if($settings[2]->value)
        <!-- show -->
        <div class="show">
            <div class="content">
                <div class="weibo-content">
                    <div class="weibo_show">
                        <div class="title"><img src="{{ asset('build/img/contactus.png') }}" alt="微博展示"></div>
                        <div class="main">
                            <wb:topic uid="1708159150" topmid="Ecuyimeo3" column="y" border="y"
                                      title="%E7%82%B9%E4%BA%AE%E9%9D%92%E6%98%A5%EF%BC%8C%E4%BC%A0%E9%80%92%E6%A2%A6%E6%83%B3%EF%BC%81"
                                      width="821" height="790" tags="%E6%94%AF%E9%83%A8%E9%A3%8E%E9%87%87"
                                      color="333333%2Cffffff%2C0078b6%2Ccccccc%2C333333%2Cfafeff%2C0078b6%2Ccccccc%2C%2Ce9f4fb"
                                      language="zh_cn" version="base" appkey="5fvBHZ" footbar="y"
                                      url="http%3A%2F%2Fweibo.com%2Fp%2F1008081771063c4d98edfef37a3ddc85e14c15%3Fk%3D%E6%94%AF%E9%83%A8%E9%A3%8E%E9%87%87%26from%3D501%26_from_%3Dhuati_topic"
                                      filter="y"></wb:topic>
                        </div>
                    </div>

                    <div class="content_us">
                        <div class="title"><img src="{{ asset('build/img/qwe.png') }}" alt="微博展示"></div>
                        <div class="main">
                            <wb:bulkfollow uids="1708159150,5889406737" type="1" width="300" count="2"
                                           color="C2D9F2,FFFFFF,0082CB,666666"></wb:bulkfollow>
                        </div>
                        <div class="wechat">
                            <div class="wechat-QR">
                                <img src="{{ asset('build/img/QR.jpg') }}" alt="中国大学生在线" style="margin-bottom: 20px">
                            </div>
                            <div class="wechat-notice">
                                <img src="{{ asset('build/img/wechat.jpg') }}" alt="中国大学生在线" id="notice-wechat">
                                <img src="{{ asset('build/img/univs-logo.png') }}" alt="中国大学生在线" id="notice-logo">
                                <p>活动相关事宜咨询请关注微信订阅号 <b>" 中国大学生在线 "</b> 后回复信息 <b>" 支部风采 "</b> 获取相关信息。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title"><img src="img/achivement.png"/></div>
                <div class="showList">
                    <ul class="showListBox">
                        <li class="case">
                            <div class="showTitle"><img src="img/case.png"/></div>
                            <ul>
                                @foreach($work_list as $work)
                                    <li class="type1">
                                        <div class="outBox">
                                            <div class="top">
                                                <div class="right">
                                                    <div>
                                                        <a href="{{ route('frontend.case.show', $work->id) }}">
                                                            <img src="{{ $work->img_hash }}"/>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="left">
                                                    <h3>
                                                        <a href="{{ route('frontend.case.show', $work->id) }}">{{ $work->name }}</a>
                                                    </h3>
                                                    <p>{{ $work->summary }}</p>
                                                </div>
                                            </div>
                                            <div class="bottom">
                                                <div class="right">
                                                    <span><i class="icon iconfont">&#xe60e;</i>{{ $work->comments->count() }}</span>
                                                    <span><i class="icon iconfont">&#xe609;</i>{{ $work->fancy }}</span>
                                                </div>
                                                <div class="left">
                                                <span><i class="icon iconfont">&#xe60a;</i><a
                                                            href="{{ route('frontend.branch.show', $work->branch->id) }}">{{ $work->branch->name }}</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="vedio">
                            <div class="showTitle"><img src="img/vedio.png"/></div>
                            <ul>
                                @foreach($tiny_list as $tiny)
                                    <li>
                                        <div class="outBox">
                                            <div class="vedioImg">
                                                <a href="{{ route('frontend.course.show', $tiny->id) }}">
                                                    <img src="{{ $tiny->img_hash }}"/>
                                                </a>
                                            </div>
                                            <h3>
                                                <a href="{{ route('frontend.course.show', $tiny->id) }}">{{ $tiny->name }}</a>
                                            </h3>
                                            <span class="author"><i
                                                        class="icon iconfont">&#xe60a;</i><a
                                                        href="{{ route('frontend.branch.show', $tiny->branch->id) }}">{{ $tiny->branch->name }}</a></span>
                                            <p>{{ $tiny->summary }}</p>
                                            <div class="data">
                                            <span class="review"><i
                                                        class="icon iconfont">&#xe60e;</i> {{ $tiny->comments->count() }}</span>
                                                <span class="like"><i
                                                            class="icon iconfont">&#xe609;</i> {{ $tiny->fancy }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="recTeaStu">
                    <div class="showTitle"><img src="img/teacher.png"/></div>
                    <ul class="recTeaList">
                        @foreach($teacher_list as $teacher)
                            <li>
                                <div class="imgBox">
                                    <a href="{{ route('frontend.recommend.show', $teacher->id) }}">
                                        <img src="{{ $teacher->img_hash }}"/>
                                    </a>
                                </div>
                                <div class="data">
                                    <h3>
                                        <a href="{{ route('frontend.recommend.show', $teacher->id) }}">{{ $teacher->name }}</a>
                                    </h3>
                                    <p class="label">
                                        <i class="iconfont">&#xe610;</i><span>推荐展示</span>
                                    </p>
                                    <p class="datas">
                                    <span class="review"><i
                                                class="iconfont">&#xe609;</i> {{ $teacher->comments->count() }}</span>
                                        <span class="click"><i class="iconfont">&#xe60e;</i>{{ $teacher->fancy }}</span>
                                    </p>
                                    <p class="department"><span class="iconfont">&#xe60a;</span><a
                                                href="{{ route('frontend.branch.show', $teacher->branch->id) }}">{{ $teacher->branch->name }}</a>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="showTitle"><img src="img/student.png"/></div>
                    <ul class="recTeaList">
                        @foreach($student_list as $student)
                            <li>
                                <div class="imgBox">
                                    <a href="{{ route('frontend.recommend.show', $student->id) }}">
                                        <img src="{{ $student->img_hash }}"/>
                                    </a>
                                </div>
                                <div class="data">
                                    <h3>
                                        <a href="{{ route('frontend.recommend.show', $student->id) }}">{{ $student->name }}</a>
                                    </h3>
                                    <p class="label">
                                        <i class="iconfont">&#xe610;</i><span>推荐展示</span>
                                    </p>
                                    <p class="datas">
                                    <span class="review"><i
                                                class="iconfont">&#xe609;</i> {{ $student->comments->count() }}</span>
                                        <span class="click"><i class="iconfont">&#xe60e;</i>{{ $student->fancy }}</span>
                                    </p>
                                    <p class="department"><span class="iconfont">&#xe60a;</span><a
                                                href="{{ route('frontend.branch.show', $student->branch->id) }}">{{ $student->branch->name }}</a>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="lookmore">
                    <a href="{{ route('frontend.case.list') }}">查看更多</a>
                </div>
            </div>
        </div>
        <!-- show -->
    @endif
    <div class="clearfix"></div>


@endsection

@section('after-scripts-end')
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
    {!! Html::script('js/swipeslider.min.js') !!}
    {!! Html::script('js/detail.js') !!}
    {!! Html::script('//cdn.bootcss.com/raphael/2.2.1/raphael.min.js') !!}
    {!! Html::script('//cdn.bootcss.com/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js') !!}
    <script>
        var countdown = setInterval(function () {
            var b = $("#pop-countdown");
            b.text(parseInt(b.text()) - 1);
        }, 1000);
        setTimeout(function () {
            clearInterval(countdown);
            $(".popdown-content").remove();
        }, 10000);
        $("#scroll").on('click', function () {
            $.scrollTo('#activeInfo', 500);
        });
    </script>
    <script type="text/javascript">
        var redirect = function (url) {
            window.href = url;
        }
        $(window).load(function () {
            $('#full_feature').swipeslider();
        });
    </script>

@endsection