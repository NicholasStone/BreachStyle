@extends('frontend.mobile.master')
@section('main-content')
    <!--content-->
    @if( isset($sliders_switch) && $sliders_switch->value && isset($sliders))
        @include('frontend.mobile.slider')
    @endif
    <div class="content" id="main-content">
        <div id="wrapper">
            <ul class="index-main-ul" id="main-list">
            </ul>
        </div>

    </div>
    <!--content-->
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swipeslider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/pullToRefresh.css') }}"/>
    <link href="//cdn.bootcss.com/unslider/2.0.3/css/unslider.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/unslider/2.0.3/css/unslider-dots.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="//cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/iScroll/5.2.0/iscroll-lite.min.js"></script>
    {{ Html::script('/js/jquery.event.move.min.js') }}
    {{ Html::script('/js/jquery.event.swipe.js') }}
    {{ Html::script('/js/pullToRefresh.js') }}
    {{ Html::script('//cdn.bootcss.com/unslider/2.0.3/js/unslider-min.js') }}
    <script type="text/javascript">
        refresher.init({
            id: "wrapper",
            pullDownAction: Refresh,
            pullUpAction: Load
        });
        function Refresh() {
            console.log("refresh");
//                    var el, li, i;
//                    el =document.querySelector("#wrapper ul");
//                    el.innerHTML='';
//                    for (i=0; i<11; i++) {
//                        li = document.createElement('li');
//                        li.appendChild(document.createTextNode('async row ' + (++generatedCount)));
//                        el.insertBefore(li, el.childNodes[0]);
//                    }
//                    wrapper.refresh();/****remember to refresh after  action completed！ ---yourId.refresh(); ----| ****/
//                    for(var i=0;i<document.querySelectorAll("#wrapper ul li").length;i++){
//                        document.querySelectorAll("#wrapper ul li")[i].colorfulBg(); }

        }

        function Load() {
            console.log("load");
//                    var el, li, i;
//                    el =document.querySelector("#wrapper ul");
//                    for (i=0; i<2; i++) {
//                        li = document.createElement('li');
//                        li.appendChild(document.createTextNode('async row ' + (++generatedCount)));
//                        el.appendChild(li, el.childNodes[0]);
//                    }
//                    wrapper.refresh();/****remember to refresh after action completed！！！   ---id.refresh(); --- ****/
//                    for(var i=0;i<document.querySelectorAll("#wrapper ul li").length;i++){
//                        document.querySelectorAll("#wrapper ul li")[i].colorfulBg(); }
        }

        var counter = 0;
        var newContent = function () {
            var result = '';
            $.ajax({
                type: 'post',
                url: '{{ route('frontend.m.index', $type) }}',
                dataType: 'json',
                data: {
                    'counter': counter,
                    '_token': "{{ csrf_token() }}"
                },
                success: function (data) {
                    data.lists.forEach(function (e) {
                        result +=
                                '<li class="index-list">' +
                                '<a href="' + e.url + '">' +
                                '<div class="index-list-top">' +
                                '<div class="list-top-left">' +
                                '<h5>' + e.name + '</h5>' +
                                '</div>' +
                                '<div class="list-top-right">' +
                                '<img src="' + e.img_hash + '">' +
                                '</div>' +
                                '</div>' +
                                '</a>' +
                                '<div class="index-list-bottom">' +
                                '<div class="list-bottom-left">' +
                                '<div><i class="fa fa-user" aria-hidden="true"></i></div>' +
                                '<span><a href="' + e.branch.url + '">' + e.branch.name + '</a></span>' +
                                '</div>' +
                                '<div class="list-bottom-right">' +
                                '<div class="index-zan"><i class="fa fa-heart-o" aria-hidden="true"></i> ' + e.fancy + '</div>' +
                                '<div class="index-message"><i class="fa fa-commenting-o" aria-hidden="true"></i> ' + e.total_comment + '</div>' +
                                '</div>' +
                                '</div>' +
                                '</li>';
                    });
                },
                error: function () {
                }
            });
            return result;
        };
    </script>
@endsection