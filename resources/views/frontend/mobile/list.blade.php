@extends('frontend.mobile.master')
@section('main-content')
    <!--content-->
    @if( isset($sliders_switch) && $sliders_switch->value && isset($sliders))
        @include('frontend.mobile.slider')
    @endif
    <div class="content" id="main-content">
        <div id="wrapper">
            <ul class="index-main-ul" id="main-list"></ul>
        </div>
        <div id="load">
            <button type="button" id="load-more" class="loader">点击加载</button>
            <div class="spinner" hidden="hidden" id="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
            <div id="load-info" hidden="hidden"></div>
        </div>
    </div>
    <!--content-->
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swipeslider.css') }}"/>
    <link href="//cdn.bootcss.com/unslider/2.0.3/css/unslider.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/unslider/2.0.3/css/unslider-dots.css" rel="stylesheet">
    <style>
        #load {
            position: relative;
            left: 30%;
            width: 40%;
            height: 40px;
            margin-bottom: 20px;
        }

        #load-info {
            text-align: center;
            color: #e43e2f;
        }

        #load-more {
            background-color: #e43e2f;
            color: #f8e9c9;
            border: none;
            width: 100%;
            height: 100%;
            border-radius: 20px;
        }

        .spinner {
            margin-top: 5px;
            text-align: center;
        }

        .spinner > div {
            width: 18px;
            height: 18px;
            background-color: #e43e2f;

            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes sk-bouncedelay {
            0%, 80%, 100% {
                -webkit-transform: scale(0)
            }
            40% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes sk-bouncedelay {
            0%, 80%, 100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript">
        var Loader = {
            counter: 0,
            result: '',
            load: function () {
                this.loader();
                if (this.result) {
                    $("#main-list").append(this.result);
                    this.counter++;
                    this.result = '';
                    return true;
                } else {
                    return false;
                }
            },
            loader: function () {
                $.ajax({
                    type: 'post',
                    url: '{{ route('frontend.m.index', $type) }}',
                    dataType: 'json',
                    async: false,
                    data: {
                        'counter': Loader.counter,
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function (data) {
                        Loader.render(data);
                    },
                    error: function () {
                        Loader.result = false;
                    }
                });
            },
            render: function (data) {
                $.each(data.lists, function (i, e) {
                    Loader.result +=
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
            }
        };
        var loading = function () {
            $("#load-more").hide();
            $("#spinner").show();
        };
        var loadEnd = function (success) {
            var info = $("#load-info");
            var notice = '';
            if (success) {
                notice = "加载成功";
            } else {
                notice = "加载失败，请稍后再试";
            }
            $("#spinner").hide();
            info.text(notice).show();
            setTimeout(function () {
                info.hide();
                $("#load-more").fadeIn("slow");
            }, 1000);
        };
        var loadBtn = $("#load-more");
        loadBtn.click(function () {
            loading();
            loadEnd(Loader.load());
        });
        loadBtn.trigger("click");
    </script>
@endsection