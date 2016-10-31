@extends('frontend.mobile.master')
@section('main-content')
<!--content-->
@if( isset($sliders_switch) && $sliders_switch->value && isset($sliders))
    @include('frontend.mobile.slider')
@endif
<div class="content">
    <ul class="index-main-ul" id="main-list">
    </ul>
</div>
<!--content-->
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swipeslider.css') }}"/>
    <link href="//cdn.bootcss.com/unslider/2.0.3/css/unslider.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/unslider/2.0.3/css/unslider-dots.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/dropload.css') }}"/>
@endsection

@section('scripts')
    <script src="//cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    {{ Html::script('/js/jquery.event.move.min.js') }}
    {{ Html::script('/js/jquery.event.swipe.js') }}
    {{ Html::script('/js/dropload.min.js') }}
    {{ Html::script('//cdn.bootcss.com/unslider/2.0.3/js/unslider-min.js') }}
    <script type="text/javascript">
        $(function(){
            var counter = 0;
            var num = 7;
            var pageStart = 0,pageEnd = 0;

            // dropload
            $('#main-list').dropload({
                scrollArea : window,
                domUp : {
                    domClass   : 'dropload-up',
                    domRefresh : '<div class="dropload-refresh">↓下拉刷新-自定义内容</div>',
                    domUpdate  : '<div class="dropload-update">↑释放更新-自定义内容</div>',
                    domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>'
                },
                domDown : {
                    domClass   : 'dropload-down',
                    domRefresh : '<div class="dropload-refresh">↑上拉加载更多-自定义内容</div>',
                    domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
                    domNoData  : '<div class="dropload-noData">暂无数据-自定义内容</div>'
                },
                loadUpFn : function(me){
                    $.ajax({
                        type: 'post',
                        url: '{{ route('frontend.m.index', $type)  }}',
                        dataType: 'json',
                        success: function(data){
                            var result = '';
                            for(var i = 0; i < data.lists.length; i++){
//                                result +=   '<a class="item opacity" href="'+data.lists[i].link+'">'
//                                        +'<img src="'+data.lists[i].pic+'" alt="">'
//                                        +'<h3>'+data.lists[i].title+'</h3>'
//                                        +'<span class="date">'+data.lists[i].date+'</span>'
//                                        +'</a>';
                                result +=
                                    '<li class="index-list">' +
                                        '<a href="'+''+'">' +
                                        '<div class="index-list-top">' +
                                            '<div class="list-top-left">' +
                                                '<h5>' + '' +'</h5>' +
                                            '</div>' +
                                            '<div class="list-top-right">' +
                                                '<img src="'+'">' +
                                            '</div>' +
                                        '</div>' +
                                        '</a>' +
                                        '<div class="index-list-bottom">' +
                                            '<div class="list-bottom-left">' +
                                                '<div><i class="fa fa-user" aria-hidden="true"></i></div>' +
                                                '<span><a href="'+'">'+'</a></span>' +
                                            '</div>' +
                                            '<div class="list-bottom-right">' +
                                                '<div class="index-zan"><i class="fa fa-heart-o" aria-hidden="true"></i> '+'</div>' +
                                                '<div class="index-message"><i class="fa fa-commenting-o" aria-hidden="true"></i> '+'</div>' +
                                            '</div>' +
                                        '</div>'+
                                    '</li>';
                            }
                            // 为了测试，延迟1秒加载
                            setTimeout(function(){
                                $('.lists').html(result);
                                // 每次数据加载完，必须重置
                                me.resetload();
                                // 重置索引值，重新拼接more.json数据
                                counter = 0;
                                // 解锁
                                me.unlock();
                                me.noData(false);
                            },1000);
                        },
//                        error: function(xhr, type){
//                            alert('Ajax error!');
//                            // 即使加载出错，也得重置
//                            me.resetload();
//                        }
                    });
                },
                loadDownFn : function(me){
                    $.ajax({
                        type: 'post',
                        url: '{{ route('frontend.m.index', $type) }}',
                        dataType: 'json',
                        success: function(data){
                            var result = '';
                            counter++;
                            pageEnd = num * counter;
                            pageStart = pageEnd - num;

                            for(var i = pageStart; i < pageEnd; i++){
                                result +=   '<a class="item opacity" href="'+data.lists[i].link+'">'
                                        +'<img src="'+data.lists[i].pic+'" alt="">'
                                        +'<h3>'+data.lists[i].title+'</h3>'
                                        +'<span class="date">'+data.lists[i].date+'</span>'
                                        +'</a>';
                                if((i + 1) >= data.lists.length){
                                    // 锁定
                                    me.lock();
                                    // 无数据
                                    me.noData();
                                    break;
                                }
                            }
                            // 为了测试，延迟1秒加载
                            setTimeout(function(){
                                $('.lists').append(result);
                                // 每次数据加载完，必须重置
                                me.resetload();
                            },1000);
                        },
//                        error: function(xhr, type){
//                            alert('Ajax error!');
//                            // 即使加载出错，也得重置
//                            me.resetload();
//                        }
                    });
                },
                threshold : 50
            });
        });
    </script>
@endsection