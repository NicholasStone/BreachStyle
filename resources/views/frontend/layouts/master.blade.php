<!DOCTYPE html>
<html lang="en" xmlns:wb=“http://open.weibo.com/wb”>
<head>
    @yield('fit')
    <script>
        if (window.attachEvent){
            alert('请使用高版本IE或火狐浏览器');
            window.location.href = "http://www.firefox.com.cn/";
        }
    </script>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="keywords" content="两学一做 高校 支部  中国大学生在线" />
    <meta name="description" content="不断挖掘、深入总结、广泛推广高校基层党支部在开展“两学一做”学习教育、学习习近平总书记“七一”重要讲话和纪念建党95周年“学党史、感党恩、跟党走”主题教育活动中的先锋模范、先进经验、典型案例，发挥典型引领和带动作用，推动“两学一做”学习教育向广大党员拓展、向经常性教育延伸，推动高校基层党支部整体功能提升。">
    <div id='wx_pic' style='margin:0 auto;display:none;'>
        <img src='{{ asset('build/img/wechat-cover-jpg') }}' />
    </div>
    <title>@yield('title')全国高校“两学一做”支部风采展示活动_中国大学生在线</title>

    <!-- Meta -->

@yield('meta')

<!-- Styles -->
    @yield('before-styles-end')
    {!! Html::style("//cdn.bootcss.com/normalize/5.0.0/normalize.min.css") !!}
    {!! Html::style("http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css") !!}
    {!! Html::style("http://cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css") !!}
    {!! Html::style(asset('css/frontend/style.css'))!!}
    {!! Html::style(asset('css/frontend/iconfont.css'))!!}

    @yield('after-styles-end')
    {!! Html::script("//cdn.bootcss.com/jquery/2.1.1/jquery.min.js") !!}
    <!--[if IE]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="css/ieAdaptation.css"/>
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="css/ieAdaptation.css"/>
    <![endif]-->

</head>
<body>
{{--@include('frontend.includes.nav')--}}
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
                <li class="search">
                    <form action="{{ route('frontend.search') }}" method="get">
                        <input type="text" name="keywords" id="search" placeholder="搜索关键字"/>
                        <input type="submit" name="sub" id="sub" value=""/>
                    </form>
                </li>
                @if(access()->guest())
                    <li class="login">
                        <a href="javascript:;" class="loginBtn" id="login">登录</a>
                        <a href="http://uzone.univs.cn/signup.jsp" class="reg">注册</a>
                    </li>
                @else
                    <li class="login">
                        <a href="{{ route('frontend.user.profile.detail') }}"
                           class="reg new_reg"><p class="person">欢迎 {{ Auth::user()->name }}</p></a>
                        <a href="{{ route('auth.logout') }}" class="reg">退出</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- topbar -->

<div class="clearfix"></div>

<!-- banner -->
<div class="banner">
    <div class="bannerBox">
        <img src="{{ asset('/build/img/banner.jpg') }}" alt="支部风采">
    </div>
</div>
<!-- banner -->

<div class="clearfix"></div>

<!-- mainNav -->
<div class="mainNav">
    <div class="content">
        <ul>
            <li class="nav">
                <a href="{{ route('frontend.index') }}">首页</a>
            </li>
            <li class="nav">
                @if(Route::current()->getPath() == '/')
                    <a href="javascript:void(0)" id="scroll">活动详情</a>
                @else
                    <a href="{{ route('frontend.index') }}#activeInfo" id="scroll">活动详情</a>
                @endif
            </li>
            <li class="nav">
                <a href="{{ route('frontend.branch.index') }}">参与党支部</a>
            </li>
            <li class="nav">
                <a href="{{ route('frontend.active.detail') }}">热度榜</a>
            </li>
            <li class="nav">
                <a href="{{ route('frontend.case.list') }}">成果展示</a>
            </li>
            <li class="upload">
                <a href="{{ route('frontend.case.create') }}"><span>上传成果</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- mainNav -->
@yield('content')
@include('frontend.includes.footer')
{!! Html::script("//cdn.bootcss.com/html5shiv/r29/html5.min.js") !!}
{!! Html::script("//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js") !!}
@if(access()->guest())
    <script>
        window.onload = function () {
            document.domain = "univs.cn";
        }

        function loginSuccess() {
            $.ajax({
                method: 'get',
                url: "{{ route("sso.token") }}",
                success: function (data) {
                    location.href = "http://uzone.univs.cn/checkSSOLogin.action" +
                            "?returnUrl=" + "{{ route('sso.oss-login') }}" +
                            "&subSiteId=" + data.subSiteId +
                            "&checkCode=" + data.checkCode +
                            "&token=" + data.token;

                }
            });
        }
        var loginBtn = document.getElementById('login');
        var floatLogin = document.createElement('div');
        function closeLoginFrame() {
            floatLogin.remove();
        }
        loginBtn.addEventListener('click', function () {
            var box = document.getElementsByTagName("body")[0];
            floatLogin.className = "floatLogin";
            box.appendChild(floatLogin);
            if (floatLogin.innerHTML == "") {
                var iFrame = document.createElement("iframe");
                iFrame.src = "http://uzone.univs.cn/sso.action";
                floatLogin.appendChild(iFrame);
                iFrame.style.width = "490px";
                iFrame.style.height = "337px";
                iFrame.style.border = "none";
                var msg = document.createElement("p");
                floatLogin.appendChild(msg);
                msg.innerHTML = "加载较慢，请稍等片刻！";
            }
        });
    </script>
@endif
@yield('before-scripts-end')
@include("sweet::alert")
@yield('after-scripts-end')
@include('frontend.includes.google-analytics')
</body>
</html>