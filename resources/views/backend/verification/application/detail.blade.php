@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('after-scripts-end')
    <script>
        $(function () {
            var dialog = $("#dialog");
            var reasonFrom = $("#reason-from");
            $("#deny-btn").click(function () {
                reasonFrom.attr('action', "{{ route('admin.verify.application.deny', $application->id) }}");
                dialog.modal();
            });
            $("#delete-btn").click(function () {
                reasonFrom.attr('action', "{{ route('admin.verify.application.delete', $application->id) }}");
                dialog.modal();
            });
            $("#source-video").click(function () {
                $.ajax({
                    url: "http://playfile.enetedu.com/VideoPlay/GetVideoUrlPath",
                    data: {
                        upFileID: "{{ $application->video_hash }}",
                        key: "{{ substr(md5('dxsfdy'.$application->video_hash),8,16) }}"
                    },
                    method: "post",
                    success: function (data) {
                        console.log(data);
                        if (data.Code == 1) {
                            window.open(data.VideoUrl);
                        } else {
                            $("#source-message").text(data.Message + "无法导出视频");
                        }
                    },
                    error: function () {
                        $("#source-message").text("视频服务器错误，无法导出视频");
                    }
                })
            })
        });
    </script>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <div class="col-sm-10">
                <h3 class="box-title">{{ trans('strings.backend.verification.application.title') }}</h3>
                <p>
                    当前文章状态：
                    @if($application->deleted_at)
                        <span class="label label-danger">已删除</span>
                        <span>{{ isset($application->notification) ? "删除原因 :".json_decode($application->notification->extra)->reason : '' }}</span>
                    @else
                        @if($application->verification == 0)
                            <span class="label label-default">等待审核</span>
                            <span>{{ isset($application->notification) ? "驳回原因 :".json_decode($application->notification->extra)->reason : ''}}</span>
                        @elseif($application->verification == 1)
                            <span class="label label-success">已通过</span>
                        @elseif($application->verification == -1)
                            <span class="label label-warning">被驳回</span>
                            <span>{{ isset($application->notification) ? "驳回原因 :".json_decode($application->notification->extra)->reason : '' }}</span>
                        @endif
                    @endif
                </p>
            </div>
            <div class="col-sm-2">
                <a type="button" href="{{ route('admin.verify.application') }}" class="btn bg-navy btn-flat pull-right">返回</a>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl class="dl-horizontal">
                <dt>{{ trans('strings.backend.verification.application.name') }}</dt>
                <dd>{{ $application->name }}</dd>
                <dt>{{ trans('strings.backend.verification.application.type') }}</dt>
                <dd>{{ $application->type }}</dd>
                <dt>{{ trans('strings.backend.verification.application.branch') }}</dt>
                <dd>{{ $application->branch->name }}</dd>
                <dt>{{ trans('strings.backend.verification.application.university') }}</dt>
                <dd>{{ $application->branch->university }}</dd>
                <dt>{{ trans('strings.backend.verification.application.tel') }}</dt>
                <dd>{{ $application->branch->tel }}</dd>
                @unless($application->type == "微党课")
                    <dt>{{ $application->type.trans('strings.backend.verification.application.summary') }}</dt>
                    <dd>{{ $application->summary }}</dd>
                @endunless
                @if($application->course_lecturer)
                    <dt>微党课讲师</dt>
                    <dd>{{ $application->course_lecturer }}</dd>
                @endif
                <dt>{{ $application->type.trans('strings.backend.verification.application.detail') }}</dt>
                <dd class="col-sm-8">{!! $application->detail !!}<!-- 防止提交内容中的注释影响网页显示 --></dd>
                <dt>{{ trans('strings.backend.verification.application.img') }}</dt>
                <dd><img src="{{ $application->img_hash }}" alt="缩略图" class="thumbnail" width="50%" height="50%"></dd>
                @if($application->video_hash)
                    <dt>{{ trans('strings.backend.verification.application.video') }}</dt>
                    <dd>
                        <iframe style="border: 0"
                                src="http://playfile.enetedu.com/VideoPlay/Video?upFileID={{ $application->video_hash }}&key={{ substr(md5('dxsfdy'.$application->video_hash),8,16) }}&width=800&height=600"
                                width="830" height="620" frameborder="none"></iframe>
                        <br>
                        <button id="source-video" class="btn bg-olive btn-flat">导出源视频</button>
                        <p style="color: red;margin: 10px;font-weight: bolder" id="source-message"></p>
                    </dd>
                @endif
                <dt>{{ trans('strings.backend.verification.application.apply') }}</dt>
                <dd><img src="{{ asset($application->apply_hash) }}" alt="申请表" class="thumbnail" width="50%"
                         height="50%"></dd>
            </dl>
            <div>
                @if($application->deleted_at)
                    <a href="{{ route('admin.verify.application.restore', $application->id) }}"
                       class="btn bg-olive btn-flat">恢复</a>
                @else
                    @if($application->verification < 1)
                        <a href="{{ route('admin.verify.application.grant', $application->id) }}"
                           class="btn bg-olive btn-flat">通过</a>
                    @endif
                    @if($application->verification != -1)
                        <button id="deny-btn" class="btn bg-orange btn-flat">驳回</button>
                    @endif
                    <button id="delete-btn" class="btn bg-maroon btn-flat">删除</button>
                @endif
            </div>
        </div><!-- /.box-body -->
    </div><!--box box-success-->

    <div class="modal fade" tabindex="-1" role="dialog" id="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">您正在执行一项重要操作</h4>
                </div>
                <div class="modal-body">
                    <form action="#" method="get" id="reason-from">
                        <div class="form-group">
                            <label for="reason">请输入您的理由：</label><br>
                            <textarea name="reason" id="reason" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">关闭</button>
                    <button class="btn btn-primary btn-flat" type="submit" form="reason-from">确定</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
