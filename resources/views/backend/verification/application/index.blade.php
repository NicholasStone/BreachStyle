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
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="box-info bg-info" style="padding: 10px 20px;">
                <div class="form-inline row">
                    <div class="form-group">
                        <label for="sr-only">成果名称</label>
                        <input type="text" name="application_name" id="application_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sr-only">学校</label>
                        <input type="text" name="university_name" id="university_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sr-only">上传支部</label>
                        <input type="text" name="branch_name" id="branch_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sr-only">审核状态</label>
                        <select class="form-control" id="status" name="status">
                            <option value="3" selected>全部</option>
                            <option value="-1">驳回</option>
                            <option value="0">待审核</option>
                            <option value="1">通过</option>
                            <option value="2">已删除</option>
                        </select>
                    </div>
                    <button id="search" class="btn btn-info">搜索</button>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>成果名称</th>
                        <th>成果类别</th>
                        <th>学校</th>
                        <th>上传支部</th>
                        <th>申报时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
            <br>
            <a target="_blank" href="{{ route("admin.verify.application.excel") }}" class="btn btn-default btn-flat"
               id="excel">全部导出为Excel</a>
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
            var url = "{{ route('admin.verify.application.search') }}" + "?status=" + $("#status").val();
            var table = $('#table').DataTable({
                locale: 'zh-CN',
                processing: true,
                serverSide: true,
                searching: true,
                ajax: {
                    url: url,
                    type: 'get'
                },
                columns: [
                    {data: 'name'},
                    {data: 'type'},
                    {data: 'branch.university'},
                    {data: 'branch.name'},
                    {data: 'created_at'},
                    {data: 'verify'},
                    {data: 'operations'}
                ],
                order: []
//                searchDelay: 500
            });

            $("#search").click(function () {
                url = "{{ route('admin.verify.application.search') }}" + "?application_name=" + $("#application_name").val()
                        + "&branch_name=" + $("#branch_name").val() + "&university_name=" + $("#university_name").val() +
                        "&status=" + $("#status").val();

                table.ajax.url(url).load();
            });

            {{--$("#granted").click(function () {--}}
            {{--url = "{{ route("admin.verify.application.get", ['v' => 1]) }}";--}}
            {{--table.ajax.url(url).load();--}}
            {{--});--}}
            {{--$("#unhandled").click(function () {--}}
            {{--url = "{{ route("admin.verify.application.get", ['v' => 0]) }}";--}}
            {{--table.ajax.url(url).load();--}}
            {{--});--}}
            {{--$("#denied").click(function () {--}}
            {{--url = "{{ route("admin.verify.application.get", ['v' => -1]) }}";--}}
            {{--table.ajax.url(url).load();--}}
            {{--});--}}
        });
    </script>
@stop