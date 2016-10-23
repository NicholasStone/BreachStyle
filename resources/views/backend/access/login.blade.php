<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>支部风采 | 后台登录</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    {{ Html::style('//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css') }}
    <!-- Font Awesome -->
    {{ Html::style('//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css') }}
    <!-- Ionicons -->
    {{ Html::style('//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css') }}
    <!-- Theme style -->
    {{ Html::style('//cdn.bootcss.com/admin-lte/2.3.5/css/AdminLTE.min.css') }}
    <!-- iCheck -->
    {{ Html::style('//cdn.bootcss.com/iCheck/1.0.1/skins/square/blue.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{ Html::script('//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js')}}
    {{ Html::script('//cdn.bootcss.com/respond.js/1.4.2/respond.min.js')}}
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href=" {{ route('frontend.index') }} "><b>支部风采</b></a>
    </div>

    @include('includes.partials.messages')
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">请输入您的电子邮箱及密码</p>

        <form action="{{ route('auth.login') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                {{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => '用户名']) }}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> 自动登录
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->

        {{--<a href="#">I forgot my password</a><br>--}}

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
{{ Html::script('//cdn.bootcss.com/jquery/2.2.4/jquery.min.js') }}
<!-- Bootstrap 3.3.6 -->
{{ Html::script('//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js') }}
<!-- iCheck -->
{{ Html::script('//cdn.bootcss.com/iCheck/1.0.2/icheck.min.js') }}
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
