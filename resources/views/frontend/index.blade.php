@extends('frontend.layouts.master')

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/map.css'))!!}
    {!! Html::style(asset('css/frontend/swipeslider.css'))!!}
@endsection

@section('content')
    <div class="sliderNews">
        <div class="content">
            <div class="slider">
                <div class="container">
                    <div id="full_feature" class="swipslider">
                        <ul class="sw-slides">
                            <li class="sw-slide">
                                <a href="#">
                                    <img src="img/summer_beach.jpg" alt="Summer beach concept"
                                         oncontextmenu="return false;">
                                </a>
                            </li>
                            <li class="sw-slide">
                                <a href="#">
                                    <img src="img/lang_yie_ar_kung_fu.jpg" alt="Lang from Yie Ar Kung Fu"
                                         oncontextmenu="return false;">
                                </a>
                            </li>
                            <li class="sw-slide">
                                <a href="#">
                                    <img src="img/wanted1.jpg" alt="Example of a not sized slide"
                                         oncontextmenu="return false;">
                                </a>
                            </li>
                            <li class="sw-slide">
                                <a href="#">
                                    <img src="img/tiny_vacation.jpg" alt="Tiny Tina" oncontextmenu="return false;">
                                </a>
                            </li>
                            <li class="sw-slide">
                                <a href="">
                                    <img src="img/borderlands_tiny_tina.jpg" alt="Tiny Tina from Borderlands 2"
                                         oncontextmenu="return false;">
                                </a>
                            </li>
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
                            <li>
                                <p>
                                    <a href="#">这是一条新闻啊啊啊啊啊啊啊啊啊啊</a><span>6-17</span></p>
                            </li>
                            <li>
                                <p>
                                    <a href="#">这是一条新闻啊啊啊啊啊啊啊啊啊啊</a><span>6-17</span></p>
                            </li>
                            <li>
                                <p>
                                    <a href="#">这是一条新闻啊啊</a><span>6-17</span></p>
                            </li>
                            <li>
                                <p>
                                    <a href="#">这是一啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</a><span>6-17</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <a href="#">这啊啊啊</a><span>6-17</span></p>
                            </li>
                            <li>
                                <p>
                                    <a href="#">这是一条新闻啊啊啊啊啊啊啊啊啊啊</a><span>6-17</span></p>
                            </li>
                            <li>
                                <p>
                                    <a href="#">这是一条新闻啊啊啊啊啊啊啊啊啊啊</a><span>6-17</span></p>
                            </li>
                            <li>
                                <p>
                                    <a href="#">这是一条新闻啊啊啊啊</a><span>6-17</span></p>
                            </li>
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
                    <div class="logo"></div>
                    <div class="data">
                        <h2><span>1234</span>个</h2>
                        <p>参与党支部</p>
                    </div>
                </li>
                <li class="dangyuan">
                    <div class="logo"></div>
                    <div class="data">
                        <h2><span>5678</span>个</h2>
                        <p>参与高校</p>
                    </div>
                </li>
                <li class="achievement">
                    <div class="logo"></div>
                    <div class="data">
                        <h2><span>9101</span>个</h2>
                        <p>推选成果</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Achievements -->
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
                                    <a href="javascript:void(0);"><i class="fa fa-university" aria-hidden="true"></i>
                                        查看更多活跃高校》</a>
                                </div>
                            </div>
                            <div class="regionBottom">
                                <div class="display">
                                    <span class="triangle"></span>
                                    <ul>
                                        <li>
                                            <div class="schoolLogo">
                                                <img src="img/check.png"/>
                                            </div>
                                            <div class="schoolInfo">
                                                <h3>太原理工大学</h3>
                                                <p><span>40</span>成果</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="schoolLogo">
                                                <img src="img/check.png"/>
                                            </div>
                                            <div class="schoolInfo">
                                                <h3>太原理工大学</h3>
                                                <p><span>40</span>成果</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="schoolLogo">
                                                <img src="img/check.png"/>
                                            </div>
                                            <div class="schoolInfo">
                                                <h3>太原理工大学</h3>
                                                <p><span>40</span>成果</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="schoolLogo">
                                                <img src="img/check.png"/>
                                            </div>
                                            <div class="schoolInfo">
                                                <h3>太原理工大学</h3>
                                                <p><span>40</span>成果</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="schoolLogo">
                                                <img src="img/check.png"/>
                                            </div>
                                            <div class="schoolInfo">
                                                <h3>太原理工大学</h3>
                                                <p><span>40</span>成果</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="schoolLogo">
                                                <img src="img/check.png"/>
                                            </div>
                                            <div class="schoolInfo">
                                                <h3>太原理工大学</h3>
                                                <p><span>40</span>成果</p>
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
                            <p class="tits" id="more1"><span>1.支部工作案例:</span>工作案例汇集"两微一端"、组织生活会及其它方式的创新工作方法、典型事例、特色主题活动等。各高校根据“两学一做”开展
                            </p>
                            <p class="tits" id="more2"><span>2.微党课:</span>鼓励各校教师党支部、大学生党支部积极联系实际讲党课，利用微视频、动漫等多种体裁形式，创新党课宣讲模式。党课选题紧扣"两学一做"
                            </p>
                            <p class="tits" id="more3"><span>3.教师党支部、大学生党支部推荐展示:</span>各高校根据各教师党支部、大学生党支部开展"两学一做"学习教育的优秀经验和实际成效，评选优秀党支部案例
                            </p>
                            <div>
                                <a id="moreBtn"></a>
                            </div>
                        </li>
                        <li class="activeSignUp" style="border: none;">
                            <p class="tit"><span>报名 : </span>下载活动报名表，填写完成并由高校党委主管部门盖章后，拍照或扫描成jpg格式，文件命名为"报名表.jpg"提交到活动官网。推荐成果须有学校审核后统一报送，每类成果限报两项。
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
                    <a href="#">1.报名表下载<span class="icon iconfont">&#xe611;</span></a>
                </div>
                <div class="downLoad">
                    <a href="#">2.活动通知下载<span class="icon iconfont">&#xe611;</span></a>
                </div>
                <div class="downLoad">
                    <a href="#">3.党支部认证表<span class="icon iconfont">&#xe611;</span></a>
                </div>
                <div class="note">
                    <p>备注:</p>
                    <p>1.必须由党支部书记上传</p>
                    <p>2.系统默认创建党支部者为改党支部的党支部书记</p>
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
                        <p><span class="tit">活动背景 : </span><span class="tits">1.严把内容质量</span>支部工作案例、微党课是学习"两学一做"的重要载体，要求围绕阶段性主题，做到思想观点正确、内容积极健康。各级高校党委要对提交内容质量进行政治把关、认真推敲、仔细琢磨、精益求精、体现高水准高质量。
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

    <!-- show -->
    <div class="show">
        <div class="content">
            <div class="title"><img src="img/achivement.png"/></div>
            <div class="showList">
                <ul class="showListBox">
                    <li class="case">
                        <div class="showTitle"><img src="img/case.png"/></div>
                        <ul>
                            <li class="type1">
                                <div class="outBox">
                                    <div class="top">
                                        <div class="right">
                                            <div>
                                                <img src="img/redhead.jpg"/>
                                            </div>
                                        </div>
                                        <div class="left">
                                            <h3>这是一个很长很长的标题，你觉得是不是呢？是不是呢？是不是？是？不是？</h3>
                                            <p>这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪就成了猪就成了猪就成了猪</p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="right">
                                            <span><i class="icon iconfont">&#xe60e;</i>12</span>
                                            <span><i class="icon iconfont">&#xe609;</i>5678</span>
                                        </div>
                                        <div class="left">
                                            <span><i class="icon iconfont">&#xe60a;</i>太原理工大学校党委</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="type1">
                                <div class="outBox">
                                    <div class="top">
                                        <div class="right">
                                            <div>
                                                <img src="img/redhead.jpg"/>
                                            </div>
                                        </div>
                                        <div class="left">
                                            <h3>这是一个很长很长的标题，你觉得是不是呢？是不是呢？是不是？是？不是？</h3>
                                            <p>这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪就成了猪就成了猪就成了猪</p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="right">
                                            <span><i class="icon iconfont">&#xe60e;</i>12</span>
                                            <span><i class="icon iconfont">&#xe609;</i>5678</span>
                                        </div>
                                        <div class="left">
                                            <span><i class="icon iconfont">&#xe60a;</i>太原理工大学校党委</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="type1">
                                <div class="outBox">
                                    <div class="top">
                                        <div class="right">
                                            <div>
                                                <img src="img/redhead.jpg"/>
                                            </div>
                                        </div>
                                        <div class="left">
                                            <h3>这是一个很长很长的标题，你觉得是不是呢？是不是呢？是不是？是？不是？</h3>
                                            <p>这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪就成了猪就成了猪就成了猪</p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="right">
                                            <span><i class="icon iconfont">&#xe60e;</i>12</span>
                                            <span><i class="icon iconfont">&#xe609;</i>5678</span>
                                        </div>
                                        <div class="left">
                                            <span><i class="icon iconfont">&#xe60a;</i>太原理工大学校党委</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="vedio">
                        <div class="showTitle"><img src="img/vedio.png"/></div>
                        <ul>
                            <li>
                                <div class="outBox">
                                    <div class="vedioImg">
                                        <img src="img/wanted1.jpg"/>
                                    </div>
                                    <h3>这是一个很长很长的标题，你觉得是不是呢</h3>
                                    <span class="author"><i class="icon iconfont">&#xe60a;</i>太原理工大学计算机学院教师第一党支部</span>
                                    <p>这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪</p>
                                    <div class="data">
                                        <span class="review"><i class="icon iconfont">&#xe60e;</i> 1234</span>
                                        <span class="like"><i class="icon iconfont">&#xe609;</i> 1234</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="outBox">
                                    <div class="vedioImg">
                                        <img src="img/wanted1.jpg"/>
                                    </div>
                                    <h3>这是一个很长很长的标题，你觉得是不是呢</h3>
                                    <span class="author"><i class="icon iconfont">&#xe60a;</i>太原理工大学计算机学院教师第一党支部</span>
                                    <p>这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪</p>
                                    <div class="data">
                                        <span class="review"><i class="icon iconfont">&#xe60e;</i> 1234</span>
                                        <span class="like"><i class="icon iconfont">&#xe609;</i> 1234</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="outBox">
                                    <div class="vedioImg">
                                        <img src="img/wanted1.jpg"/>
                                    </div>
                                    <h3>这是一个很长很长的标题，你觉得是不是呢</h3>
                                    <span class="author"><i class="icon iconfont">&#xe60a;</i>太原理工大学计算机学院教师第一党支部</span>
                                    <p>这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪</p>
                                    <div class="data">
                                        <span class="review"><i class="icon iconfont">&#xe60e;</i> 1234</span>
                                        <span class="like"><i class="icon iconfont">&#xe609;</i> 1234</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="outBox">
                                    <div class="vedioImg">
                                        <img src="img/wanted1.jpg"/>
                                    </div>
                                    <h3>这是一个很长很长的标题，你觉得是不是呢</h3>
                                    <span class="author"><i class="icon iconfont">&#xe60a;</i>太原理工大学计算机学院教师第一党支部</span>
                                    <p>这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪</p>
                                    <div class="data">
                                        <span class="review"><i class="icon iconfont">&#xe60e;</i> 1234</span>
                                        <span class="like"><i class="icon iconfont">&#xe609;</i> 1234</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="recTeaStu">
                <div class="showTitle"><img src="img/teacher.png"/></div>
                <ul class="recTeaList">
                    <li>
                        <div class="imgBox">
                            <img src="img/lang_yie_ar_kung_fu.jpg"/>
                            <span><i></i></span>
                        </div>
                        <div class="data">
                            <h3>这是一个很长很长的标题啊啊啊啊啊</h3>
                            <p class="label">
                                <i class="iconfont">&#xe610;</i><span>文章</span>
                            </p>
                            <p class="datas">
                                <span class="review"><i class="iconfont">&#xe60a;</i> 123</span>
                                <span class="click"><i class="iconfont">&#xe60e;</i>123</span>
                            </p>
                            <p class="department"><span class="iconfont">&#xe609;</span>太原理工大学信息工程学院电子工程系2016级学生第一支部</p>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="img/lang_yie_ar_kung_fu.jpg"/>
                            <span><i></i></span>
                        </div>
                        <div class="data">
                            <h3>这是一个很长很长的标题啊啊啊啊啊</h3>
                            <p class="label">
                                <i class="iconfont">&#xe610;</i><span>文章</span>
                            </p>
                            <p class="datas">
                                <span class="review"><i class="iconfont">&#xe60a;</i> 123</span>
                                <span class="click"><i class="iconfont">&#xe60e;</i>123</span>
                            </p>
                            <p class="department"><span class="iconfont">&#xe609;</span>太原理工大学信息工程学院电子工程系2016级学生第一支部</p>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="img/lang_yie_ar_kung_fu.jpg"/>
                            <span><i></i></span>
                        </div>
                        <div class="data">
                            <h3>这是一个很长很长的标题啊啊啊啊啊</h3>
                            <p class="label">
                                <i class="iconfont">&#xe610;</i><span>文章</span>
                            </p>
                            <p class="datas">
                                <span class="review"><i class="iconfont">&#xe60a;</i> 123</span>
                                <span class="click"><i class="iconfont">&#xe60e;</i>123</span>
                            </p>
                            <p class="department"><span class="iconfont">&#xe609;</span>太原理工大学信息工程学院电子工程系2016级学生第一支部</p>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="img/lang_yie_ar_kung_fu.jpg"/>
                            <span><i></i></span>
                        </div>
                        <div class="data">
                            <h3>这是一个很长很长的标题啊啊啊啊啊</h3>
                            <p class="label">
                                <i class="iconfont">&#xe610;</i><span>文章</span>
                            </p>
                            <p class="datas">
                                <span class="review"><i class="iconfont">&#xe60a;</i> 123</span>
                                <span class="click"><i class="iconfont">&#xe60e;</i>123</span>
                            </p>
                            <p class="department"><span class="iconfont">&#xe609;</span>太原理工大学信息工程学院电子工程系2016级学生第一支部</p>
                        </div>
                    </li>
                </ul>
                <div class="showTitle"><img src="img/student.png"/></div>
                <ul class="recTeaList">
                    <li>
                        <div class="imgBox">
                            <img src="img/lang_yie_ar_kung_fu.jpg"/>
                            <span><i></i></span>
                        </div>
                        <div class="data">
                            <h3>这是一个很长很长的标题啊啊啊啊啊</h3>
                            <p class="label">
                                <i class="iconfont">&#xe610;</i><span>文章</span>
                            </p>
                            <p class="datas">
                                <span class="review"><i class="iconfont">&#xe60a;</i> 123</span>
                                <span class="click"><i class="iconfont">&#xe60e;</i>123</span>
                            </p>
                            <p class="department"><span class="iconfont">&#xe609;</span>太原理工大学信息工程学院电子工程系2016级学生第一支部</p>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="img/lang_yie_ar_kung_fu.jpg"/>
                            <span><i></i></span>
                        </div>
                        <div class="data">
                            <h3>这是一个很长很长的标题啊啊啊啊啊</h3>
                            <p class="label">
                                <i class="iconfont">&#xe610;</i><span>文章</span>
                            </p>
                            <p class="datas">
                                <span class="review"><i class="iconfont">&#xe60a;</i> 123</span>
                                <span class="click"><i class="iconfont">&#xe60e;</i>123</span>
                            </p>
                            <p class="department"><span class="iconfont">&#xe609;</span>太原理工大学信息工程学院电子工程系2016级学生第一支部</p>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="img/lang_yie_ar_kung_fu.jpg"/>
                            <span><i></i></span>
                        </div>
                        <div class="data">
                            <h3>这是一个很长很长的标题啊啊啊啊啊</h3>
                            <p class="label">
                                <i class="iconfont">&#xe610;</i><span>文章</span>
                            </p>
                            <p class="datas">
                                <span class="review"><i class="iconfont">&#xe60a;</i> 123</span>
                                <span class="click"><i class="iconfont">&#xe60e;</i>123</span>
                            </p>
                            <p class="department"><span class="iconfont">&#xe609;</span>太原理工大学信息工程学院电子工程系2016级学生第一支部</p>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox">
                            <img src="img/lang_yie_ar_kung_fu.jpg"/>
                            <span><i></i></span>
                        </div>
                        <div class="data">
                            <h3>这是一个很长很长的标题啊啊啊啊啊</h3>
                            <p class="label">
                                <i class="iconfont">&#xe610;</i><span>文章</span>
                            </p>
                            <p class="datas">
                                <span class="review"><i class="iconfont">&#xe60a;</i> 123</span>
                                <span class="click"><i class="iconfont">&#xe60e;</i>123</span>
                            </p>
                            <p class="department"><span class="iconfont">&#xe609;</span>太原理工大学信息工程学院电子工程系2016级学生第一支部</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="lookmore">
                <a href="#">查看更多</a>
            </div>
        </div>
    </div>
    <!-- show -->
    <!-- show -->
    <div class="clearfix"></div>
@endsection

@section('after-scripts-end')
    {!! Html::script('js/swipeslider.min.js') !!}
    {!! Html::script('//cdn.bootcss.com/raphael/2.2.1/raphael.min.js') !!}
    {!! Html::script('js/chinaMapConfig.js') !!}
    {!! Html::script('js/map.js') !!}
    <script type="text/javascript">
        $(function () {
            // 外部控制地图
            var mapObj = {};
            var stateColorList = ['d7201d', 'd84f45', 'd99992', 'cccccc'];

            // $.ajax({
            // 	url: projectName+'/idea123Action.do?method=getIdea123MapData&reportName='+reportName,
            // 	data: data,
            // 	dataType: 'json',
            // 	success: function(data){

            var data = {
                "jiangsu": {
                    "value": "30.05%",
                    "index": "1",
                    "stateInitColor": "0"
                },
                "henan": {
                    "value": "19.77%",
                    "index": "2",
                    "stateInitColor": "0"
                },
                "anhui": {
                    "value": "10.85%",
                    "index": "3",
                    "stateInitColor": "0"
                },
                "zhejiang": {
                    "value": "10.02%",
                    "index": "4",
                    "stateInitColor": "0"
                },
                "liaoning": {
                    "value": "8.46%",
                    "index": "5",
                    "stateInitColor": "0"
                },
                "beijing": {
                    "value": "4.04%",
                    "index": "6",
                    "stateInitColor": "1"
                },
                "hubei": {
                    "value": "3.66%",
                    "index": "7",
                    "stateInitColor": "1"
                },
                "jilin": {
                    "value": "2.56%",
                    "index": "8",
                    "stateInitColor": "1"
                },
                "shanghai": {
                    "value": "2.47%",
                    "index": "9",
                    "stateInitColor": "1"
                },
                "guangxi": {
                    "value": "2.3%",
                    "index": "10",
                    "stateInitColor": "1"
                },
                "sichuan": {
                    "value": "1.48%",
                    "index": "11",
                    "stateInitColor": "2"
                },
                "guizhou": {
                    "value": "0.99%",
                    "index": "12",
                    "stateInitColor": "2"
                },
                "hunan": {
                    "value": "0.78%",
                    "index": "13",
                    "stateInitColor": "2"
                },
                "shandong": {
                    "value": "0.7%",
                    "index": "14",
                    "stateInitColor": "2"
                },
                "guangdong": {
                    "value": "0.44%",
                    "index": "15",
                    "stateInitColor": "2"
                },
                "jiangxi": {
                    "value": "0.34%",
                    "index": "16",
                    "stateInitColor": "3"
                },
                "fujian": {
                    "value": "0.27%",
                    "index": "17",
                    "stateInitColor": "3"
                },
                "yunnan": {
                    "value": "0.23%",
                    "index": "18",
                    "stateInitColor": "3"
                },
                "hainan": {
                    "value": "0.21%",
                    "index": "19",
                    "stateInitColor": "3"
                },
                "shanxi": {
                    "value": "76.11%",
                    "index": "20",
                    "stateInitColor": "1"
                },
                "hebei": {
                    "value": "0.11%",
                    "index": "21",
                    "stateInitColor": "4"
                },
                "neimongol": {
                    "value": "0.04%",
                    "index": "22",
                    "stateInitColor": "4"
                },
                "tianjin": {
                    "value": "0.04%",
                    "index": "23",
                    "stateInitColor": "4"
                },
                "gansu": {
                    "value": "0.04%",
                    "index": "24",
                    "stateInitColor": "4"
                },
                "shaanxi": {
                    "value": "0.02%",
                    "index": "25",
                    "stateInitColor": "0"
                },
                "macau": {
                    "value": "0.0%",
                    "index": "26",
                    "stateInitColor": "1"
                },
                "hongkong": {
                    "value": "0.0%",
                    "index": "27",
                    "stateInitColor": "3"
                },
                "taiwan": {
                    "value": "0.0%",
                    "index": "28",
                    "stateInitColor": "4"
                },
                "qinghai": {
                    "value": "0.0%",
                    "index": "29",
                    "stateInitColor": "5"
                },
                "xizang": {
                    "value": "0.0%",
                    "index": "30",
                    "stateInitColor": "5"
                },
                "ningxia": {
                    "value": "0.0%",
                    "index": "31",
                    "stateInitColor": "5"
                },
                "xinjiang": {
                    "value": "0.0%",
                    "index": "32",
                    "stateInitColor": "5"
                },
                "heilongjiang": {
                    "value": "0.0%",
                    "index": "33",
                    "stateInitColor": "5"
                },
                "chongqing": {
                    "value": "0.0%",
                    "index": "34",
                    "stateInitColor": "5"
                }
            };
//                var i = 1;
//                for(k in data) {
//                    if(i <= 12) {
//                        var _cls = i < 4 ? 'active' : '';
//                        $('#MapControl .list1').append('<li name="' + k + '"><div class="mapInfo"><i class="' + _cls + '">' + (i++) + '</i><span>' + chinaMapConfig.names[k] + '</span><b>' + data[k].value + '</b></div></li>')
//                    } else if(i <= 24) {
//                        $('#MapControl .list2').append('<li name="' + k + '"><div class="mapInfo"><i>' + (i++) + '</i><span>' + chinaMapConfig.names[k] + '</span><b>' + data[k].value + '</b></div></li>')
//                    } else {
//                        $('#MapControl .list3').append('<li name="' + k + '"><div class="mapInfo"><i>' + (i++) + '</i><span>' + chinaMapConfig.names[k] + '</span><b>' + data[k].value + '</b></div></li>')
//                    }
//                }

            var mapObj_1 = {};

            $('#RegionMap').SVGMap({
                external: mapObj_1,
                mapName: 'china',
                mapWidth: 530,
                mapHeight: 400,
                stateData: data,
                // stateTipWidth: 118,
                // stateTipHeight: 47,
                // stateTipX: 2,
                // stateTipY: 0,
                stateTipHtml: function (mapData, obj) {
                    var _value = mapData[obj.id].value;
                    var _idx = mapData[obj.id].index;
                    var active = '';
                    _idx < 4 ? active = 'active' : active = '';
                    var tipStr = '<div class="mapInfo"><i class="' + active + '">' + _idx + '</i><span>' + obj.name + '</span><b>' + _value + '</b></div>';
                    return tipStr;
                },
                clickCallback: function (stateData, obj) {
                    var h3 = document.getElementById("oclick");
                    var progress = document.getElementById("progress");
                    h3.innerHTML = obj.name + "<span>" + (stateData)[obj.id].value + "</span>";
                    var newstr = (stateData)[obj.id].value.replace(/%/, "");
                    progress.style.width = (stateData)[obj.id].value;

                }
            });
            $('#MapColor').show();
            // 	}
            // });
        });
    </script>
    <script type="text/javascript">
        $(window).load(function () {
            $('#full_feature').swipeslider();
        });
    </script>

    <script type="text/javascript">
        var bgBtn = document.getElementById('bgDetail');
        var bgContent = document.getElementById('bg');
        var achBtn = document.getElementById('achDetail');
        var achContent = document.getElementById('ach');
        var moreBtn = document.getElementById('moreBtn');
        var more1 = document.getElementById('more1');
        var more2 = document.getElementById('more2');
        var more3 = document.getElementById('more3');
        var moreDetail = document.getElementById('moreDetail');

        bgBtn.onclick = function () {
            bgContent.innerHTML = "<span>活动背景 : </span>通过开展高校支部风采展示活动，不断挖掘、深入总结、广泛推广高校基层党支部在开展“两学一做”学习教育和纪念建党95周年“学党史、感党恩、跟党走”主题教育活动中的先锋模范、先进经验、典型案例，发挥典型引领和带动作用，推动“两学一做”学习教育向广大党员拓展、向经常性教育延伸，推动高校基层党支部整体功能提升。";
            bgContent.style.whiteSpace = "normal";
            bgContent.style.overflow = "visible";
            bgContent.style.textOverflow = "clip";
            bgContent.parentNode.style.lineHeight = "28px";
            bgBtn.style.display = "none";
        }
        achBtn.onclick = function () {
            achContent.innerHTML = "<span>活动荣誉 : </span>各类征集推选成果分为精品作品、优秀作品、入围作品三大类，按一定比例确定名额。结合各地各高校组织参与情况及成绩推选出若干先进集体。教育部将通过多种媒体形式将征集推选成果加以展示推广。";
            achContent.style.whiteSpace = "normal";
            achContent.style.overflow = "visible";
            achContent.style.textOverflow = "clip";
            achContent.parentNode.style.lineHeight = "28px";
            achBtn.style.display = "none";
        }
        moreBtn.onclick = function () {
            more1.innerHTML = "<span>1.支部工作案例 : </span>工作案例汇集“两微一端”、组织生活会及其他方式的创新工作方法、典型事例、特色主题活动等。各高校根据“两学一做”学习教育精神，要求各教师党支部、大学生党支部深入贯彻落实习近平总书记关于“两学一做”学习教育工作的重要指示，鼓励师生党员创新学习方式、探索实践形式，将有关工作案例、工作经验和先进典型通过网络等多种媒体予以展示。工作案例需包含主题与思路、实施方法与过程、主要成效及经验等，要求文字简洁、重点突出，字数3000字以内。";
            more2.innerHTML = "<span>2.微党课 : </span>鼓励各校教师党支部、大学生党支部积极联系实际讲党课，利用微视频、动漫等多种体裁形式，创新党课宣讲模式。党课选题紧扣师生学习生活实践，围绕“两学一做”、纪念建党95周年和红军长征胜利80周年等主题，要求内容完整，主题突出，结构合理，表达流畅，富有时代气息，符合党性要求。微党课视频时长小于10分钟。";
            more3.innerHTML = "<span>3.教师党支部、大学生党支部推荐展示 : </span>各高校根据各教师党支部、大学生党支部开展“两学一做”学习教育的优秀经验和实际成效，评选出在学校能够叫得响、立得住、师生群众公认的教师党支部、大学生党支部，并且把典型材料推荐到活动平台进行展示。平台定期推送“支部风采”展示材料。";
            more2.style.whiteSpace = "normal";
            more2.style.overflow = "visible";
            more2.style.textOverflow = "clip";
            more2.parentNode.style.lineHeight = "28px";
            more3.style.whiteSpace = "normal";
            more3.style.overflow = "visible";
            more3.style.textOverflow = "clip";
            more3.parentNode.style.lineHeight = "28px";
            moreBtn.parentNode.style.display = "none";
            more1.style.whiteSpace = "normal";
            more1.style.overflow = "visible";
            more1.style.textOverflow = "clip";
            more1.parentNode.style.lineHeight = "28px";
            moreDetail.style.whiteSpace = "normal";
            moreDetail.style.overflow = "visible";
            moreDetail.style.textOverflow = "clip";
            moreDetail.innerHTML = "<span>活动内容 : </span>“支部风采”展示活动，包括高校教师党支部和大学生党支部支部的工作案例、微党课和推荐展示等方面。";
        }


        var myDate = new Date();
        var month = myDate.getMonth();
        var oDay = myDate.getDate();
        if ((month >= 9 && oDay >= 20) && (month >= 11 && oDay <= 15)) {
            var pointA = document.getElementsByClassName("point one")[0];
            var lineA = document.getElementsByClassName("line two")[0];
            var pointB = document.getElementsByClassName("point three")[0];
            var lineB = document.getElementsByClassName("line three")[0];
            pointA.className = "point one";
            lineA.className = "line two";
            pointB.className = "point three active";
            lineB.className = "line three active";
        } else if ((month >= 11 && oDay > 15) && (month >= 11 && oDay <= 30)) {
            var pointC = document.getElementsByClassName("point two")[0];
            var lineC = document.getElementsByClassName("line three")[0];
            var pointD = document.getElementsByClassName("point four")[0];
            var lineD = document.getElementsByClassName("line four")[0];
            pointC.className = "point three";
            lineC.className = "line three";
            pointD.className = "point four active";
            lineD.className = "line four active";
        }
    </script>
@endsection