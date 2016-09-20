@extends ('backend.layouts.master')

@section ('title', trans("labels.backend.verification.application.management"))

@section('after-styles-end')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@stop

@section('page-header')
    <h1>
        {{trans("labels.backend.verification.application.management")}}
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">
                {{trans("labels.backend.verification.application.management")}}
            </h3>
            {{--<div class="box-tools pull-right">--}}
                {{--<div class="btn-group">--}}
                    {{--<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">--}}
                        {{--选项 <span class="caret"></span>--}}
                    {{--</button>--}}

                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="javascript:void (0);" id="unhandled">待审核</a></li>--}}
                        {{--<li><a href="javascript:void (0);" id="granted">已通过</a></li>--}}
                        {{--<li><a href="javascript:void (0);" id="denied">已驳回</a></li>--}}
                    {{--</ul>--}}
                {{--</div><!--btn group-->--}}
            {{--</div>--}}
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="box-info bg-info" style="padding: 10px 20px;">
                <div class="form-inline">
                    <div class="form-group">
                        <label for="sr-only">成果名称</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sr-only">成果类别</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sr-only">上传支部</label>
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info">搜索</button>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>成果名称</th>
                        <th>成果类别</th>
                        <th>上传支部</th>
                        <th>申报时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
            <br>
            <a target="_blank" href="{{ route("admin.verify.application.excel") }}" class="btn btn-default btn-flat" id="excel">全部导出为Excel</a>
            <p style="color: red">因为数据量大，加载时间可能略长，请耐心等候，谢谢。</p>
        </div><!-- /.box-body -->
    </div><!--box-->

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            {!! history()->renderType('User') !!}
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@stop

@section('after-scripts-end')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function () {
            var url = "{{ route("admin.verify.application.get", ['v' => 0]) }}";
            var table = $('#table').DataTable({
                processing: true,
                serverSide: true,
                searching: false,
                ajax: {
                    url: url,
                    type: 'post'
                },
                columns: [
                    {data: 'name'},
                    {data: 'type'},
                    {data: 'branch.name'},
                    {data: 'created_at'},
                    {data: 'operations'}
                ],
                order: [[0, "asc"]]
//                searchDelay: 500
            });
            $("#granted").click(function () {
                url = "{{ route("admin.verify.application.get", ['v' => 1]) }}";
                table.ajax.url(url).load();
            });
            $("#unhandled").click(function () {
                url = "{{ route("admin.verify.application.get", ['v' => 0]) }}";
                table.ajax.url(url).load();
            });
            $("#denied").click(function () {
                url = "{{ route("admin.verify.application.get", ['v' => -1]) }}";
                table.ajax.url(url).load();
            });
        });
    </script>
@stop