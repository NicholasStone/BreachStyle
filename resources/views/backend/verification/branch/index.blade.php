@extends ('backend.layouts.master')

@section ('title', trans("labels.backend.verification.branch.management"))

@section('after-styles-end')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
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
                {{trans("labels.backend.verification.branch.management")}}
            </h3>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="box-info bg-info" style="padding: 10px 20px;">
                <div class="form-inline row">
                    <div class="form-group">
                        <label for="sr-only">支部名称</label>
                        <input type="text" name="branch_name" id="branch_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sr-only">支部类型</label>
                        <select name="branch_type" id="branch_type" class="form-control">
                            <option value="0">全部</option>
                            <option value="学生党支部">学生党支部</option>
                            <option value="教师党支部">教师党支部</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sr-only">审核状态</label>
                        <select class="form-control" id="status" name="status">
                            <option value="3" selected>全部</option>
                            <option value="0">未审核</option>
                            <option value="1">已通过</option>
                            <option value="-1">已驳回</option>
                            <option value="2">已删除</option>
                        </select>
                    </div>
                    <button id="search" class="btn btn-info">搜索</button>
                </div>
                </div>
            <hr>
            <div class="table-responsive">
                <table id="branchs-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>支部名称</th>
                        <th>支部类型</th>
                        <th>总人数</th>
                        <th>提交时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
            <br>
            <a target="_blank" href="{{ route("admin.verify.branch.excel") }}" class="btn btn-default btn-flat" id="excel">全部导出为Excel</a>
            <p style="color: red">因为数据量大，加载时间可能略长，请耐心等候，谢谢。</p>
        </div><!-- /.box-body -->
    </div><!--box-->
@stop

@section('after-scripts-end')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function() {
            var url = "{{ route('admin.verify.branch.search') }}" + "?status=" + $("#status").val();
            var table = $('#branchs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: url,
                    type: 'get'
                },
                columns: [
                    {data: 'name'},
                    {data: 'type'},
                    {data: 'total_membership'},
                    {data: 'created_at'},
                    {data: 'verify'},
                    {data: 'operations'}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
            $("#search").click(function () {
                url = "{{ route("admin.verify.branch.search") }}"+"?branch_name="+$("#branch_name").val()+
                        "&branch_type="+$("#branch_type").val()+"&status="+$("#status").val();
                table.ajax.url(url).load();
            });

            {{--$("#unhandled").click(function () {--}}
                {{--url = "{{ route("admin.verify.branch.get", ['v' => 1]) }}";--}}
                {{--table.ajax.url(url).load();--}}
            {{--});--}}
            {{--$("#denied").click(function () {--}}
                {{--url = "{{ route("admin.verify.branch.get", ['v' => 0]) }}";--}}
                {{--table.ajax.url(url).load();--}}
            {{--});--}}
        });
    </script>
@stop