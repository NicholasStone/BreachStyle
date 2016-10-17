@extends('frontend.layouts.master')

@section('fit')
    @include('frontend.mobile.fit', ['route' => route('frontend.m.index')])
@endsection

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/map.css'))!!}
    {!! Html::style(asset('css/frontend/weibo.css'))!!}
    {!! Html::style(asset('css/frontend/swipeslider.css'))!!}
@endsection

@section('content')
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
    @if($settings[3]->value)
        <!-- ChinaMap -->
        <div class="ChinaMap">
            <div class="content">
                <div class="title">
                    <a href="{{ route('frontend.active.detail') }}">
                        <img src="{{ asset('img/hot.png') }}"/>
                    </a>
                </div>
                <div class="items" id="Item9">
                    <a href="javascript:;" class="fold"></a>
                    <div class="itemCon">
                        <div id="Region" style="position:relative; height:360px;">
                            <div class="regionMap" id="RegionMap"></div>
                            <div class="regionList" id="MapControl">
                                <div class="regionTop">
                                    <div class="regionTopLeft">
                                        <h3 id="oclick">点击地图查看省份</h3>
                                        <div class="progress">
                                            <span id="progress"></span>
                                        </div>
                                    </div>
                                    <div class="regionTopRight">
                                        <a href="javascript:void(0);" id="further"><i class="fa fa-university"
                                                                                      aria-hidden="true"></i>
                                            查看更多活跃高校》</a>
                                    </div>
                                </div>
                                <div class="regionBottom">
                                    <div class="display">
                                        <span class="triangle"></span>
                                        <ul id="inner">
                                            <li style="width: 93%">
                                                <div style="text-align: center; margin-top: 50px; font-size: 24px">
                                                    点击地图查看细节
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="MapColor">
                                <p>%=参与高校数/当地高校数</p>
                                <span class="stateInitColor1"><i></i>90%~100%</span>
                                <span class="stateInitColor2"><i></i>60%~89%</span>
                                <span class="stateInitColor3"><i></i>10%~59%</span>
                                <span class="stateInitColor4"><i></i>0%~9%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ChinaMap -->
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
                <span class="time2">10/20</span>
                <span class="time3">12/15</span>
                <span class="time4">12/30</span>
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
                        <p><span class="tit">活动背景 : </span></p>
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
                                        <a href="{{ route('frontend.recommend.show', $teacher->id) }}">{{ $teacher->summary }}</a>
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
                {{--<div class="weibo-content">--}}
                    {{--<div class="weibo_show">--}}
                        {{--<div class="title"><img src="{{ asset('build/img/contactus.png') }}" alt="微博展示"></div>--}}
                        {{--<div class="main">--}}
                            {{--<wb:topic uid="1708159150" topmid="z8ClGsZa8" column="y" border="n"--}}
                                      {{--title="%E7%82%B9%E4%BA%AE%E9%9D%92%E6%98%A5%EF%BC%8C%E4%BC%A0%E9%80%92%E6%A2%A6%E6%83%B3"--}}
                                      {{--width="821" height="790" tags="%E6%94%AF%E9%83%A8%E9%A3%8E%E9%87%87"--}}
                                      {{--language="zh_cn"--}}
                                      {{--version="base" appkey="5fvBHZ" footbar="y"--}}
                                      {{--url="http%3A%2F%2Fweibo.com%2Fp%2F1008081771063c4d98edfef37a3ddc85e14c15"--}}
                                      {{--filter="y"></wb:topic>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="content_us">--}}
                        {{--<div class="title"><img src="{{ asset('build/img/qwe.png') }}" alt="微博展示"></div>--}}
                        {{--<div class="main">--}}
                            {{--<wb:bulkfollow uids="1708159150,5889406737" type="1" width="300" count="2"--}}
                                           {{--color="C2D9F2,FFFFFF,0082CB,666666"></wb:bulkfollow>--}}
                        {{--</div>--}}
                        {{--<div class="wechat">--}}
                            {{--<div class="wechat-QR">--}}
                                {{--<img src="{{ asset('build/img/QR.jpg') }}" alt="中国大学生在线" style="margin-bottom: 20px">--}}
                            {{--</div>--}}
                            {{--<div class="wechat-notice">--}}
                                {{--<img src="{{ asset('build/img/wechat.jpg') }}" alt="中国大学生在线" id="notice-wechat">--}}
                                {{--<img src="{{ asset('build/img/univs-logo.png') }}" alt="中国大学生在线" id="notice-logo">--}}
                                {{--<p>活动相关事宜咨询请关注微信订阅号 <b>" 中国大学生在线 "</b> 后回复信息 <b>" 支部风采 "</b> 获取相关信息。</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
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
    {{--<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>--}}
    {!! Html::script('js/swipeslider.min.js') !!}
    {!! Html::script('js/detail.js') !!}
    {!! Html::script('//cdn.bootcss.com/raphael/2.2.1/raphael.min.js') !!}
    {!! Html::script('//cdn.bootcss.com/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js') !!}
    <script>
        $("#scroll").on('click', function () {
            $.scrollTo('#activeInfo', 500);
        });
    </script>
    @if($settings[3]->value)
        {!! Html::script('js/chinaMapConfig.js') !!}
        {!! Html::script('js/map.js') !!}
        <script type="text/javascript">
            $(function () {
                var b = {};
                var a = ["d7201d", "d84f45", "d99992", "cccccc"];
                $.ajax({
                    url: "{{ asset('/frontend/mapdata') }}", dataType: "json", success: function (c) {
                        var d = {
                            jiangsu: {id: c[14].id, value: c[14].rate, index: "1", stateInitColor: c[14].color},
                            henan: {id: c[9].id, value: c[9].rate, index: "2", stateInitColor: c[9].color},
                            anhui: {id: c[0].id, value: c[0].rate, index: "3", stateInitColor: c[0].color},
                            zhejiang: {id: c[30].id, value: c[30].rate, index: "4", stateInitColor: c[30].color},
                            liaoning: {id: c[16].id, value: c[16].rate, index: "5", stateInitColor: c[16].color},
                            beijing: {id: c[1].id, value: c[1].rate, index: "6", stateInitColor: c[1].color},
                            hubei: {id: c[8].id, value: c[8].rate, index: "7", stateInitColor: c[8].color},
                            jilin: {id: c[13].id, value: c[13].rate, index: "8", stateInitColor: c[13].color},
                            shanghai: {id: c[23].id, value: c[23].rate, index: "9", stateInitColor: c[23].color},
                            guangxi: {id: c[5].id, value: c[5].rate, index: "10", stateInitColor: c[5].color},
                            sichuan: {id: c[24].id, value: c[24].rate, index: "11", stateInitColor: c[24].color},
                            guizhou: {id: c[6].id, value: c[6].rate, index: "12", stateInitColor: c[6].color},
                            hunan: {id: c[12].id, value: c[12].rate, index: "13", stateInitColor: c[12].color},
                            shandong: {id: c[20].id, value: c[20].rate, index: "14", stateInitColor: c[20].color},
                            guangdong: {id: c[4].id, value: c[4].rate, index: "15", stateInitColor: c[4].color},
                            jiangxi: {id: c[15].id, value: c[15].rate, index: "16", stateInitColor: c[15].color},
                            fujian: {id: c[2].id, value: c[2].rate, index: "17", stateInitColor: c[2].color},
                            yunnan: {id: c[29].id, value: c[29].rate, index: "18", stateInitColor: c[29].color},
                            hainan: {id: c[7].id, value: c[7].rate, index: "19", stateInitColor: c[7].color},
                            shanxi: {id: c[21].id, value: c[21].rate, index: "20", stateInitColor: c[21].color},
                            hebei: {id: c[8].id, value: c[8].rate, index: "21", stateInitColor: c[8].color},
                            neimongol: {id: c[17].id, value: c[17].rate, index: "22", stateInitColor: c[17].color},
                            tianjin: {id: c[26].id, value: c[26].rate, index: "23", stateInitColor: c[26].color},
                            gansu: {id: c[3].id, value: c[3].rate, index: "24", stateInitColor: c[3].color},
                            shaanxi: {id: c[22].id, value: c[22].rate, index: "25", stateInitColor: c[22].color},
                            macau: {id: c[33].id, value: c[33].rate, index: "26", stateInitColor: c[33].color},
                            hongkong: {id: c[32].id, value: c[32].rate, index: "27", stateInitColor: c[32].color},
                            taiwan: {id: c[25].id, value: c[25].rate, index: "28", stateInitColor: c[25].color},
                            qinghai: {id: c[19].id, value: c[19].rate, index: "29", stateInitColor: c[19].color},
                            xizang: {id: c[27].id, value: c[27].rate, index: "30", stateInitColor: c[27].color},
                            ningxia: {id: c[18].id, value: c[18].rate, index: "31", stateInitColor: c[18].color},
                            xinjiang: {id: c[28].id, value: c[28].rate, index: "32", stateInitColor: c[28].color},
                            heilongjiang: {id: c[10].id, value: c[10].rate, index: "33", stateInitColor: c[10].color},
                            chongqing: {id: c[31].id, value: c[31].rate, index: "34", stateInitColor: c[31].color}
                        };
                        var e = {};
                        $("#RegionMap").SVGMap({
                            external: e,
                            mapName: "china",
                            mapWidth: 530,
                            mapHeight: 400,
                            stateData: d,
                            stateTipHtml: function (j, h) {
                                var g = j[h.id].value;
                                var f = j[h.id].index;
                                var k = "";
                                f < 4 ? k = "active" : k = "";
                                var i = '<div class="mapInfo"><i class="' + k + '">' + f + "</i><span>" + h.name + "</span><b>" + g + "</b></div>";
                                return i
                            },
                            clickCallback: function (i, j) {
                                var g = document.getElementById("oclick");
                                var h = document.getElementById("progress");
                                g.innerHTML = j.name + "<span>" + (i)[j.id].value + "</span>";
                                var f = (i)[j.id].value.replace(/%/, "");
                                h.style.width = (i)[j.id].value;
                                $.ajax({
                                    url: "/frontend/province/" + (i)[j.id].id, dataType: "json", success: function (k) {
                                        console.log(k);
                                        $("#further").attr("href", "{{ route('frontend.university.list') }}/" + (i)[j.id].id);
                                        var m = "";
                                        for (var l = 0; l < k.universities.length; l++) {
                                            m += '<li><div class="schoolLogo"><img src="http://www.iconpng.com/download/png/69119"/></div><div class="schoolInfo"><h3>' + k.universities[l].name + "</h3><p><span>" + k.university_application_list[l] + "</span>成果</p></div></li>"
                                        }
                                        document.getElementById("inner").innerHTML = m
                                    }
                                })
                            }
                        });
                        $("#MapColor").show()
                    }
                })
            });
        </script>
    @endif
    <script type="text/javascript">
        var redirect = function (url) {
            window.href = url;
        }
        $(window).load(function () {
            $('#full_feature').swipeslider();
        });
    </script>

@endsection