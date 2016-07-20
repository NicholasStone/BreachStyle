@extends('frontend.layouts.master')

@section('content')
    <div class="sliderNews">
        <div class="content">
            <div class="slider">
                <div class="container">
                    <div id="full_feature" class="swipslider">
                        <ul class="sw-slides">
                            {{--<li class="sw-slide">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="img/summer_beach.jpg" alt="Summer beach concept"--}}
                                         {{--oncontextmenu="return false;">--}}
                                {{--</a>--}}
                            {{--</li>--}}
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
                                    <a href="#">这是一条新闻啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</a><span>6-17</span>
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
                        <p>支持单位</p>
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
    <div class="clearfix"></div>

    <!-- activeInfo -->
    <div class="activeInfo">
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
                    <a href="">报名表下载<span class="icon iconfont">&#xe611;</span></a>
                </div>
                <div class="downLoad">
                    <a href="#">活动通知下载<span class="icon iconfont">&#xe611;</span></a>
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
    <div class="require">
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
                    <li class="case">
                        <div class="showTitle"><img src="img/case.png"/></div>
                        <ul>
                            <li class="type1">
                                <div class="outBox">
                                    <div class="top">
                                        <div class="left">
                                            <h3>这是一个很长很长的标题，你觉得是不是呢？是不是呢？是不是？是？不是？</h3>
                                            <p>这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪就成了猪就成了猪就成了猪</p>
                                        </div>
                                        <div class="right">
                                            <div>
                                                <img src="img/redhead.jpg"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="left">
                                            <span><i class="icon iconfont">&#xe60a;</i>太原理工大学校党委</span>
                                        </div>
                                        <div class="right">
                                            <span><i class="icon iconfont">&#xe60e;</i>12</span>
                                            <span><i class="icon iconfont">&#xe609;</i>5678</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="type2">
                                <div class="outBox">
                                    <div class="top">
                                        <div class="left">
                                            <h3>这是一个很长很长的标题，你觉得是不是呢？是不是呢？是不是？是？不是？</h3>
                                            <p>
                                                这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪就成了猪就成了猪就成了猪后来他就成了猪他就成了猪他就成了猪就成了猪就成了猪就成了猪后来他就成了猪他就成了猪他就成了猪就成了猪就成了猪就成了猪后来他就成了猪他就成了猪他就成了猪就成了猪就成了猪就成了猪</p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="left">
                                            <span><i class="icon iconfont">&#xe60a;</i>太原理工大学校党委</span>
                                        </div>
                                        <div class="right">
                                            <span><i class="icon iconfont">&#xe60e;</i>12</span>
                                            <span><i class="icon iconfont">&#xe609;</i>5678</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="type1">
                                <div class="outBox">
                                    <div class="top">
                                        <div class="left">
                                            <h3>这是一个很长很长的标题，你觉得是不是呢？是不是呢？是不是？是？不是？</h3>
                                            <p>这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪就成了猪就成了猪就成了猪</p>
                                        </div>
                                        <div class="right">
                                            <div>
                                                <img src="img/redhead.jpg"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="left">
                                            <span><i class="icon iconfont">&#xe60a;</i>太原理工大学校党委</span>
                                        </div>
                                        <div class="right">
                                            <span><i class="icon iconfont">&#xe60e;</i>12</span>
                                            <span><i class="icon iconfont">&#xe609;</i>5678</span>
                                        </div>
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
                                <i class="iconfont">&#xe610;</i><span>支部案例</span>
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
                                <i class="iconfont">&#xe610;</i><span>支部案例</span>
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
                                <i class="iconfont">&#xe610;</i><span>支部案例</span>
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
                                <i class="iconfont">&#xe610;</i><span>支部案例</span>
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
                                <i class="iconfont">&#xe610;</i><span>支部案例</span>
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
                                <i class="iconfont">&#xe610;</i><span>支部案例</span>
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
                                <i class="iconfont">&#xe610;</i><span>支部案例</span>
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
                                <i class="iconfont">&#xe610;</i><span>支部案例</span>
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
    <div class="clearfix"></div>
@endsection

@section('after-scripts-end')
    {!! Html::script('js/swipeslider.min.js') !!}
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