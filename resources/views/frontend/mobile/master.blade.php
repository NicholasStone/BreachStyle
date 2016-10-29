<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>支部风采</title>
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <link href="//cdn.bootcss.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/iconfont-m.css') }}"/>
    {!! Html::style(asset('css/frontend/iconfont.css'))!!}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/new_style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/head.css') }}"/>
    @yield('styles')
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ieAdaptation.css') }}"/>
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ieAdaptation.css') }}"/>
    <![endif]-->
    <!--[if IE]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- topbar -->
<div class="topbar">
    <div class="content">
        <div class="welcome">
            <p>您好，欢迎来到
                <a href="http://www.univs.cn/index.shtml" target="_blank">中国大学生在线</a>！</p>
        </div>
        <div class="home">
            <ul class="homeList">
                <li class="homePage">
                    <a href="http://www.univs.cn/">
                        <i></i>首页
                    </a>
                </li>
                <li class="weibo">
                    <a href="javascript:;">
                        <i></i>微在线<span></span>
                    </a>
                    <ul>
                        <li>
                            <a href="">微博</a>
                        </li>
                        <li>
                            <a href="">微信</a>
                        </li>
                        <li>
                            <a href="">客户端</a>
                        </li>
                    </ul>
                </li>
                <li class="login">
                    <a href="javascript:;" class="loginBtn" id="login">登录</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- topbar -->

<div class="clearfix"></div>

<!-- banner -->
<div class="banner">
    <div class="bannerBox">
        <img src="{{ asset('build/img/banner.jpg') }}"/>
    </div>
</div>
<!-- banner -->

<div class="clearfix"></div>

<!-- mainNav -->
<div class="mainNav">
    <div class="content">
        <ul>
            <li class="nav">
                <a href="{{ route('frontend.m.index') }}">首页</a>
            </li>
            <li class="nav">
                <a href="{{ route('frontend.m.case') }}">工作案例</a>
            </li>
            <li class="nav">
                <a href="{{ route('frontend.m.course') }}">微党课</a>
            </li>
            <li class="nav">
                <a href="{{ route('frontend.m.recommend') }}">推荐展示</a>
            </li>
        </ul>
    </div>
</div>
<!-- mainNav -->
@yield('main-content')
<!--footer-->
<div class="footer">
    <div class="content">
        <div>
            <p class="main">主办单位 : 教育部思想政治工作司</p>
            <p class="sub">承办单位 : 中国大学生在线</p>
        </div>
        <p>©2004-2016 教育部中国大学生在线网站 版权所有 京ICP备10028400号-2 京公安网备11010502025664</p>
    </div>
</div>
<!--footer-->
</body>
@yield('scripts')
</html>