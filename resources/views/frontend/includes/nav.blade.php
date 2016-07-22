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
                    <form>
                        <input type="text" name="search" id="search" placeholder="搜索关键字"/>
                        <input type="submit" name="sub" id="sub" value=""/>
                    </form>
                </li>
                <li class="login">
                    <a href="javascript:;" class="loginBtn" id="login">登录</a>
                    <a href="http://uzone.univs.cn/signup.jsp" class="reg">注册</a>
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
        <img src="img/banner.jpg"/>
    </div>
</div>
<!-- banner -->

<div class="clearfix"></div>

<!-- mainNav -->
<div class="mainNav">
    <div class="content">
        <ul>
            <li class="nav">
                <a href="javascript:;">首页</a>
            </li>
            <li class="nav">
                <a href="{{ route('frontend.index') }}">活动详情</a>
            </li>
            <li class="nav">
                <a href="#activeInfo">参与党支部</a>
            </li>
            <li class="nav">
                <a href="#require">热度榜</a>
            </li>
            <li class="nav">
                <a href="javascript:;">成果展示</a>
            </li>
            <li class="upload">
                <a href="javascript:;"><span>上传成果</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- mainNav -->

<div class="clearfix"></div>
<script>
    window.onload = function () {
        document.domain = "univs.cn";
    }
    var loginBtn = document.getElementById('login');
    var floatLogin = document.createElement('div');
    var box = document.getElementsByTagName("body")[0];
    function loginSuccess() {
        $.get({
            url: "{{ route("frontend.auth.token") }}",
            success: function (data) {
                $.get({
                    url: "http://uzone.univs.cn/checkSSOLogin.action",
                    data: data,
                    success: function (data) {
                        $.post({
                            url: "{{ route('auth.sso-auth') }}",
                            data:data
                        })
                    }
                })
            }
        });
    }
    function closeLoginFrame() {
        floatLogin.remove();
    }
    loginBtn.addEventListener('click', function () {
        floatLogin.className = "floatLogin";
        box.appendChild(floatLogin);
        var iFrame = document.createElement("iframe");
        iFrame.src = "http://uzone.univs.cn/sso.action";
        floatLogin.appendChild(iFrame);
        iFrame.style.width = "490px";
        iFrame.style.height = "337px";
        iFrame.style.border = "none";
    });
</script>