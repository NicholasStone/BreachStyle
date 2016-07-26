@extends('frontend.layouts.master')

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/depart.css'))!!}
    {!! Html::style(asset('css/frontend/video.css')) !!}
    {!! Html::style('//cdn.bootcss.com/video.js/5.11.0/video-js.min.css') !!}
@endsection

@section('content')
    <!-- departInfo -->
    <div class="departInfo">
        <div class="content">
            <div class="showCard">
                <div class="ImgShow">
                    <img src="img/children_game_concept01.jpg"/>
                </div>
                <div class="wordShow">
                    <h2><span class="iconfont">&#xe60c;</span>太原理工大学计算机科学与技术学院物联网工程2016级党支部</h2>
                    <h3>类型 : <span>教师党支部</span></h3>
                    <h4><span class="iconfont">&#xe614;</span>党支部情况介绍 :</h4>
                    <p>
                        这是一首简单的小情歌，唱着我们心头的白鸽这是一首简单的小情歌，唱着我们心头的白鸽这是一首简单的小情歌，唱着我们心头的白鸽这是一首简单的小情歌，唱着我们心头的白鸽这是一首简单的小情歌，唱着我们心头的白鸽这是一首简单的小情歌，唱着我们心头的白鸽这是一首简单的小情歌，唱着我们心头的白鸽这是一首简单的小情歌，唱着我们心头的白鸽这是一首简单的小情歌，唱着我们心头的白鸽这是一首简单的小情歌，唱着我们心头的白鸽</p>
                </div>
                <div class="achieveShow">
                    <p class="title"><span class="iconfont">&#xe615;</span>党支部已发布成果</p>
                    <p>已发布微党课<span>1</span>个</p>
                    <p>已发布工作案例<span>2</span>个</p>
                    <p>已发布教师党支部推荐展示<span>2</span>个</p>
                </div>
            </div>
            <div class="leadCard">
                <div class="imgHead">
                    <img src="img/dang.png"/>
                </div>
                <h3>党支部书记:<span>啊啊啊</span></h3>
                <p>这是一条神奇的人物介绍,这是一条神奇的人物介绍,这是一条神奇的人物介绍,这是一条神奇的人物介绍,这是一条神奇的人物介绍,这是一条神奇的人物介绍,这是一条神奇的人物介绍,</p>
            </div>
        </div>
        <div class="content">
            <div class="showCard">
                <div class="departTitle">
                    <img src="img/departShow.png"/>
                </div>
                <div class="showContent">
                    <div class="vedioBox">
                        <div id="video_content">
                            <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none"
                                   poster="./img/movie_pic.png" data-setup="{}">
                                <source src="video/tiger.mp4" type='video/mp4'></source>
                                <source src="video/tiger.mp4" type='video/webm'></source>
                                <source src="video/tiger.mp4" type='video/ogg'></source>
                            </video>
                        </div>
                    </div>
                    <p>
                        北京时间7月16日凌晨四点多钟，还未从前夜的法国尼斯恐袭当中回过神来的世界，目光瞬间又聚集到了土耳其。一场政变正在发生，通过新媒体的传播，全世界同步围观着这场政变，各种彼此矛盾的信息不断从土耳其、从德国、从英国、从美国传出来。北京时间六点多钟的时候，土耳其总统埃尔多安在不明地点用手机软件facetime接受CNN采访，并号</p>
                    <img src="img/borderlands_tiny_tina.jpg"/>
                    <p>
                        北京时间7月16日凌晨四点多钟，还未从前夜的法国尼斯恐袭当中回过神来的世界，目光瞬间又聚集到了土耳其。一场政变正在发生，通过新媒体的传播，全世界同步围观着这场政变，各种彼此矛盾的信息不断从土耳其、从德国、从英国、从美国传出来。北京时间六点多钟的时候，土耳其总统埃尔多安在不明地点用手机软件facetime接受CNN采访，并号</p>
                    <img src="img/movie_pic.png"/>
                </div>
            </div>
            <div class="pubList">
                <div class="pub">
                    <p class="pubTitle"><span></span>已发布微党课</p>
                    <ul>
                        <li>
                            <div class="outBox">
                                <div class="vedioImg">
                                    <img src="img/wanted1.jpg"/>
                                </div>
                                <h3>这是一个很长很长的标题，你觉得是不是呢</h3>
                                <p>
                                    这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪</p>
                                <div class="data">
                                    <span class="review"><i class="icon iconfont">&#xe60e;</i> 1234</span>
                                    <span class="like"><i class="icon iconfont">&#xe609;</i> 1234</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pub">
                    <p class="pubTitle"><span></span>已发布工作案例</p>
                    <ul>
                        <li>
                            <div class="outBox">
                                <div class="vedioImg">
                                    <img src="img/wanted1.jpg"/>
                                </div>
                                <h3>这是一个很长很长的标题，你觉得是不是呢</h3>
                                <p>
                                    这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪</p>
                                <div class="data">
                                    <span class="review"><i class="icon iconfont">&#xe60e;</i> 1234</span>
                                    <span class="like"><i class="icon iconfont">&#xe609;</i> 1234</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pub">
                    <p class="pubTitle"><span></span>已发布教师党支部推荐展示</p>
                    <ul>
                        <li>
                            <div class="outBox">
                                <div class="vedioImg">
                                    <img src="img/wanted1.jpg"/>
                                </div>
                                <h3>这是一个很长很长的标题，你觉得是不是呢</h3>
                                <p>
                                    这篇文章讲述了宋磊变成猪的故事，有一天，他在床下找到了一坨吃的，后来他就成了猪他就成了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪了猪他就成了猪</p>
                                <div class="data">
                                    <span class="review"><i class="icon iconfont">&#xe60e;</i> 1234</span>
                                    <span class="like"><i class="icon iconfont">&#xe609;</i> 1234</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- departInfo -->
@endsection
