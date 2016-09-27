@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('after-styles-end')
    <link href="//cdn.bootcss.com/video.js/5.13.0/alt/video-js-cdn.min.css" rel="stylesheet">
@endsection

@section('after-scripts-end')
    <script src="//cdn.bootcss.com/video.js/5.13.0/video.min.js"></script>
    <script src="//cdn.bootcss.com/video.js/5.13.0/ie8/videojs-ie8.min.js"></script>
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function () {
            var dialog = $("#dialog");
            var reasonFrom = $("#reason-from");
            $("#deny-btn").click(function () {
                reasonFrom.attr('action', "{{ route('admin.verify.application.deny', $id) }}");
                dialog.modal();
            });
            $("#delete-btn").click(function () {
                reasonFrom.attr('action', "{{ route('admin.verify.application.delete', $id) }}");
                dialog.modal();
            });
        });
    </script>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('strings.backend.verification.application.title') }}</h3>
            <p>
                当前文章状态：
                @if($deleted_at)
                    <span class="label label-danger">已删除</span>
                @else
                    @if($verification == 0)
                        <span class="label label-default">等待审核</span>
                    @elseif($verification == 1)
                        <span class="label label-success">已通过</span>
                    @elseif($verification == -1)
                        <span class="label label-warning">被驳回</span>
                    @endif
                @endif
            </p>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl class="dl-horizontal">
                <dt>{{ trans('strings.backend.verification.application.name') }}</dt>
                <dd>{{ $name }}</dd>
                <dt>{{ trans('strings.backend.verification.application.type') }}</dt>
                <dd>{{ $type }}</dd>
                <dt>{{ trans('strings.backend.verification.application.branch') }}</dt>
                <dd>{{ $branch['name'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.university') }}</dt>
                <dd>{{ $branch['university'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.tel') }}</dt>
                <dd>{{ $branch['tel'] }}</dd>
                @unless($type = "微党课")
                    <dt>{{ trans('strings.backend.verification.application.summary') }}</dt>
                    <dd>{{ $summary }}</dd>
                @endunless
                @if($course_lecturer)
                    <dt>讲师</dt>
                    <dd>{{ $course_lecturer }}</dd>
                @endif
                <dt>{{ trans('strings.backend.verification.application.detail') }}</dt>
                <dd>{!! $detail !!}</dd>
                <dt>{{ trans('strings.backend.verification.application.img') }}</dt>
                <dd><img src="{{ $img_hash }}" alt="缩略图" class="thumbnail" width="50%" height="50%"></dd>
                @if($video_hash)
                    <dt>{{ trans('strings.backend.verification.application.video') }}</dt>
                    <dd>
                        <video id="my-video" class="video-js" controls preload="auto" width="800"
                               poster="{{ $img_hash }}" data-setup="{}">
                            <source src="{{ $video_hash }}" type='video/mp4'>
                            <p class="vjs-no-js">
                                请开启您浏览器的JavaScript功能，或者请使用<a href="http://videojs.com/html5-video-support/"
                                                             target="_blank">支持HTML5</a>的浏览器
                            </p>
                        </video>
                        <script src="http://vjs.zencdn.net/5.11.6/video.js"></script>
                    </dd>
                @endif
                <dt>{{ trans('strings.backend.verification.application.apply') }}</dt>
                <dd><img src="{{ asset($apply_hash) }}" alt="申请表" class="thumbnail" width="50%" height="50%"></dd>
            </dl>
            <div>
                @if($deleted_at)
                    <a href="{{ route('admin.verify.application.restore', $id) }}" class="btn bg-olive btn-flat">恢复</a>
                @else
                    @if($verification < 1)
                        <a href="{{ route('admin.verify.application.grant', $id) }}"
                           class="btn bg-olive btn-flat">通过</a>
                    @endif
                    @if($verification != -1)
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
