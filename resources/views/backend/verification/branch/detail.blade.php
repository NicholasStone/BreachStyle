@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.verification.branch.management'))

@section('after-styles-end')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@stop

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.users.management') }}
        <small>{{ trans('labels.backend.access.users.active') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('strings.backend.verification.branch.title') }}</h3>
            <p>
                当前支部状态：
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
            <div class="row">
                <dl class="col-sm-12 col-md-6 dl-horizontal">
                    <dt>{{ trans('strings.backend.verification.branch.name') }}</dt>
                    <dd>{{ $name }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.type') }}</dt>
                    <dd>{{ $type }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.secretary') }}</dt>
                    <dd>{{ $secretary['name'] }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.tel') }}</dt>
                    <dd>{{ $tel }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.secretary-summary') }}</dt>
                    <dd>{{ $secretary_summary }}</dd>
                    <dt>所属学校</dt>
                    <dd>{{ $university }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.address') }}</dt>
                    <dd>{{ $address }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.total-membership') }}</dt>
                    <dd>{{ $total_membership }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.summary') }}</dt>
                    <dd>{{ $summary }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.detail') }}</dt>
                    <dd>{!! $detail!!}</dd>
                    <dt>申请表</dt>
                    <dd><img src="{{ asset($apply_img) }}" alt="配图" class="thumbnail"
                             style="width: 500px; height: auto;"></dd>
                </dl>
                <img src="{{ asset($avatar) }}" alt="配图" class="thumbnail col-cm-12 col-md-6"
                     style="width: 300px; height: auto;">
            </div>
            <div>
                @if($deleted_at)
                    <a href="{{ route('admin.verify.branch.restore', $id) }}" class="btn bg-olive btn-flat">恢复</a>
                @else
                    @if($verification < 1)
                        <a href="{{ route('admin.verify.branch.grant', $id) }}" class="btn bg-olive btn-flat">通过</a>
                    @endif
                    @if($verification != -1)
                        <button id="deny-btn" class="btn bg-orange btn-flat">驳回</button>
                    @endif
                    <button id="delete-btn" class="btn bg-maroon btn-flat">删除</button>
                @endif
                <button type="button" onclick="history.back()" class="btn bg-navy btn-flat pull-right">返回</button>
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
@stop

@section('after-scripts-end')
    {!! Html::script('//cdn.bootcss.com/video.js/5.11.0/video.min.js') !!}
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function () {
            var dialog = $("#dialog");
            var reasonFrom = $("#reason-from");
            $("#deny-btn").click(function () {
                reasonFrom.attr('action', "{{ route('admin.verify.branch.deny', $id) }}");
                dialog.modal();
            });
            $("#delete-btn").click(function () {
                reasonFrom.attr('action', "{{ route('admin.verify.branch.delete', $id) }}");
                dialog.modal();
            });
        });
    </script>
@endsection