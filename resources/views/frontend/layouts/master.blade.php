<!DOCTYPE html>
{{--<html lang="en" xmlns:wb=“http://open.weibo.com/wb”>--}}
<html lang="en">
<head>
    @yield('fit')
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="_token" content="{{ csrf_token() }}"/>

    <title>@yield('title', app_name())</title>

    <!-- Meta -->

@yield('meta')

<!-- Styles -->
    @yield('before-styles-end')
    {!! Html::style("//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css") !!}
    {!! Html::style("//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css") !!}
    {!! Html::style(asset('css/frontend/style.css'))!!}
    {!! Html::style(asset('css/frontend/iconfont.css'))!!}

    @yield('after-styles-end')
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ieAdaptation.css"/>
    <![endif]-->
    {!! Html::script("//cdn.bootcss.com/html5shiv/r29/html5.min.js") !!}
    {!! Html::script("//cdn.bootcss.com/jquery/2.1.1/jquery.min.js") !!}
    {!! Html::script("//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js") !!}
</head>
<body>
@include('frontend.includes.nav')
@yield('content')
@include('frontend.includes.footer')
@yield('before-scripts-end')
@include("sweet::alert")
@yield('after-scripts-end')
{{--@include('frontend.includes.google-analytics')--}}
</body>
</html>