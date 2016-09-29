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
                        <a href="{{ route('frontend.user.profile.detail') }}" class="reg new_reg">欢迎 {{ Auth::user()->name }}</a>
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
                <a href="{{ route('frontend.index') }}#activeInfo">活动详情</a>
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

<div class="clearfix"></div>
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
            if(floatLogin.innerHTML == "") {
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
