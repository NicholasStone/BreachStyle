@extends ('backend.layouts.master')

@section ('title', "设置")

@section('after-styles-end')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
    {{ Html::style("//cdn.bootcss.com/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css") }}
    <style>
        #croppic {
            width: 80%;
            height: 300px;
            position: relative;
            margin: 50px 70px 20px;
            border: 3px solid #FFF;
            box-sizing: content-box;
            -moz-box-sizing: content-box;
            border-radius: 2px;
            background-image: url(data:image/png;base64,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);
            background-repeat: no-repeat;
            background-position: center;
            box-shadow: 8px 8px 0 rgba(0, 0, 0, 0.1)
        }

        .cropImgWrapper {
            cursor: -webkit-grab;
            cursor: grab
        }

        .cropImgWrapper:active {
            cursor: -webkit-grabbing;
            cursor: grabbing
        }

        .cropImgUpload {
            z-index: 2;
            position: absolute;
            height: 28px;
            display: block;
            top: -30px;
            right: -2px;
            font-family: sans-serif;
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            color: #FFF
        }

        .cropControls {
            z-index: 2;
            position: absolute;
            height: 30px;
            display: block;
            top: -1px;
            right: -1px;
            font-family: sans-serif;
            background-color: rgba(0, 0, 0, 0.35)
        }

        .cropControls i {
            display: block;
            float: left;
            margin: 0;
            cursor: pointer;
            background-image: url(data:image/png;base64,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);
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 20px;
            color: #FFF;
            font-size: 13px;
            font-weight: bold;
            font-style: normal
        }

        .cropControls i:hover {
            background-color: rgba(0, 0, 0, 0.7)
        }

        .cropControls i.cropControlZoomMuchIn {
            background-position: 0 0
        }

        .cropControls i.cropControlZoomIn {
            background-position: -30px 0
        }

        .cropControls i.cropControlZoomOut {
            background-position: -60px 0
        }

        .cropControls i.cropControlZoomMuchOut {
            background-position: -90px 0
        }

        .cropControls i.cropControlRotateLeft {
            background-position: -210px 0
        }

        .cropControls i.cropControlRotateRight {
            background-position: -240px 0
        }

        .cropControls i.cropControlCrop {
            background-position: -120px 0
        }

        .cropControls i.cropControlUpload {
            background-position: -150px 0
        }

        .cropControls i.cropControlReset {
            background-position: -180px 0
        }

        .cropControls i.cropControlRemoveCroppedImage {
            background-position: -180px 0
        }

        .cropControls i:last-child {
            margin-right: none;
        }

        #croppicModal {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: block;
            background: rgba(0, 0, 0, 0.8);
            z-index: 10000
        }

        .bubblingG {
            text-align: center;
            width: 80px;
            height: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -18px auto auto -40px;
            z-index: 2
        }

        .bubblingG span {
            display: inline-block;
            vertical-align: middle;
            width: 10px;
            height: 10px;
            margin: 25px auto;
            background: #FFF;
            box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.2);
            -moz-border-radius: 50px;
            -moz-animation: bubblingG 1s infinite alternate;
            -webkit-border-radius: 50px;
            -webkit-animation: bubblingG 1s infinite alternate;
            -ms-border-radius: 50px;
            -ms-animation: bubblingG 1s infinite alternate;
            -o-border-radius: 50px;
            -o-animation: bubblingG 1s infinite alternate;
            border-radius: 50px;
            animation: bubblingG 1s infinite alternate
        }

        #bubblingG_1 {
            -moz-animation-delay: 0s;
            -webkit-animation-delay: 0s;
            -ms-animation-delay: 0s;
            -o-animation-delay: 0s;
            animation-delay: 0s
        }

        #bubblingG_2 {
            -moz-animation-delay: .3s;
            -webkit-animation-delay: .3s;
            -ms-animation-delay: .3s;
            -o-animation-delay: .3s;
            animation-delay: .3s
        }

        #bubblingG_3 {
            -moz-animation-delay: .6s;
            -webkit-animation-delay: .6s;
            -ms-animation-delay: .6s;
            -o-animation-delay: .6s;
            animation-delay: .6s
        }

        @-moz-keyframes bubblingG {
            0% {
                width: 10px;
                height: 10px;
                background-color: #FFF;
                -moz-transform: translateY(0)
            }
            100% {
                width: 24px;
                height: 24px;
                background-color: #FFF;
                -moz-transform: translateY(-21px)
            }
        }

        @-webkit-keyframes bubblingG {
            0% {
                width: 10px;
                height: 10px;
                background-color: #FFF;
                -webkit-transform: translateY(0)
            }
            100% {
                width: 24px;
                height: 24px;
                background-color: #FFF;
                -webkit-transform: translateY(-21px)
            }
        }

        @-ms-keyframes bubblingG {

        0
        %
        {
            width: 10px
        ;
            height: 10px
        ;
            background-color: #FFF
        ;
            -ms-transform: translateY(0)
        }
        100
        %
        {
            width: 24px
        ;
            height: 24px
        ;
            background-color: #FFF
        ;
            -ms-transform: translateY(-21px)
        }
        }
        @-o-keyframes bubblingG {
            0% {
                width: 10px;
                height: 10px;
                background-color: #FFF;
                -o-transform: translateY(0)
            }
            100% {
                width: 24px;
                height: 24px;
                background-color: #FFF;
                -o-transform: translateY(-21px)
            }
        }

        @keyframes bubblingG {
            0% {
                width: 10px;
                height: 10px;
                background-color: #FFF;
                transform: translateY(0)
            }
            100% {
                width: 24px;
                height: 24px;
                background-color: #FFF;
                transform: translateY(-21px)
            }
        }
    </style>
@stop

@section('page-header')
    <h1>
        {{ trans("labels.backend.verification.branch.management") }}
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">
                链接管理
            </h3>

        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                {{ Form::open(['route' => ['admin.setting.frontend.index'], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}

                {!! csrf_field() !!}
                <div class="form-group">
                    {{ Form::label('enroll', "报名表下载链接", ['class' => 'col-lg-2 control-label', 'placeholder' => "报名表下载链接"]) }}

                    <div class="col-lg-9">
                        {{ Form::text('enroll', null,['class' => 'form-control', 'placeholder' => '请在此输入文件下载链接地址,如果不改变请留空']) }}
                    </div><!--col-lg-10-->
                </div>
                <div class="form-group">
                    {{ Form::label('notice',"活动通知下载链接", ['class' => 'col-lg-2 control-label', 'placeholder' => "报名表下载链接"]) }}

                    <div class="col-lg-9">
                        {{ Form::text('notice', null,['class' => 'form-control', 'placeholder' => '请在此输入文件下载链接地址,如果不改变请留空']) }}
                    </div><!--col-lg-10-->
                </div>
                <div class="form-group">
                    {{--<div class="from-group">--}}
                    {{--{{ Form::label('verification', "党支部认证表", ['class' => 'col-lg-2 control-label', 'placeholder' => "报名表下载链接"]) }}--}}

                    {{--{{ Form::file('verification', ['style' => 'display:none','placeholder' => '点击此处上传文件']) }}--}}
                    {{--<div class="col-lg-9">--}}
                    {{--<div class="input-group">--}}
                    {{--<input type="text" id="cover" class="form-control">--}}
                    {{--<span class="input-group-btn">--}}
                    {{--<button class="btn btn-default" type="button" id="cover-btn" onclick="$('#verification').click()">选择文件</button>--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--</div><!--col-lg-10-->--}}
                    {{--</div>--}}
                    <div class="col-lg-9 col-lg-offset-1">
                        <button class="btn btn-success">提交</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>

        </div><!-- /.box-body -->
    </div><!--box-->

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">
                轮播管理
            </h3>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>链接</th>
                        <th>图片</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
            @if($count < 6)
                <div class="col-md-6 col-sm-12">
                    <div id="croppic"></div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form action="{{ route('admin.setting.store') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="link">图片链接</label>
                            <input type="text" name="link" id="link" placeholder="请输入类似于 http://example.com/ 的网址"
                                   class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">提交</button>
                    </form>
                </div>
            @endif
        </div>
    </div>

    <div class="box box-success">
        <div class="box-header with-border">
            <div class="box-title">
                <h3>热度图管理</h3>
            </div>
        </div>
        <div class="box-body">
            {{ Form::open(['route' => ['admin.setting.map'], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
            {!! csrf_field() !!}
            <div class="form-group">
                {{ Form::label('map',"热度图开关", ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-9">
                    {{ Form::checkbox('map') }}
                </div><!--col-lg-10-->
            </div>
            <div class="form-group">
                {{ Form::label('exhibition',"首页成果展示", ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-9">
                    {{ Form::checkbox('exhibition') }}
                </div><!--col-lg-10-->
            </div>
            <div class="form-group">
                {{ Form::label('slider',"移动端首页图", ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-9">
                    {{ Form::checkbox('slider') }}
                </div><!--col-lg-10-->
            </div>
            {{ Form::close() }}
        </div>
    </div>
@stop

@section('after-scripts-end')
    {{ Html::script("//cdn.bootcss.com/croppic/1.0.3/croppic.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}
    {{ Html::script("//cdn.bootcss.com/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js") }}
    <script>
        $("#slider").bootstrapSwitch({
            state:{{ $slider->value }},
            onSwitchChange: function () {
                $.get({
                    url: "{{ route('admin.setting.slider') }}",
                    data: {
                        _token: "{{ csrf_token() }}"
                    }
                })
            }
        });
        $("#map").bootstrapSwitch({
            state:{{ $map->value }},
            onSwitchChange: function () {
                $.get({
                    url: "{{ route('admin.setting.map') }}",
                    data: {
                        _token: "{{ csrf_token() }}"
                    }
                })
            }
        });
        $("#exhibition").bootstrapSwitch({
            state:{{ $exhibition->value }},
            onSwitchChange: function () {
                $.get({
                    url: "{{ route('admin.setting.exhibition') }}",
                    data: {
                        _token: "{{ csrf_token() }}"
                    }
                })
            }
        });
    </script>
    <script>
        $("#verification").change(function () {
            $("#cover").val($(this).val())
        });
        @if($count < 6)
        $(function () {
            var eyeCandy = $('#croppic');
            var croppedOptions = {
                uploadUrl: '{{ route('admin.setting.upload') }}',
                cropUrl: '{{ route('admin.setting.crop') }}',
                cropData: {
                    'width': eyeCandy.width(),
                    'height': eyeCandy.height()
                }
            };
            var cropperBox = new Croppic('croppic', croppedOptions);
        });
        @endif
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("admin.setting.get") }}',
                type: 'post',
                data: {
                    '_token': "{{ csrf_token() }}"
                }
            },
            columns: [
                {data: 'link'},
                {data: 'path'},
                {data: "operations"}
            ],
            order: [[0, "asc"]],
            searchDelay: 500
        });
    </script>
@stop