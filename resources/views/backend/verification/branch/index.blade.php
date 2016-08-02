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

            <div class="box-tools pull-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        选项 <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:void (0);" id="denied">未通过</a></li>
                        <li><a href="javascript:void (0);" id="unhandled">已通过</a></li>
                    </ul>
                </div><!--btn group-->
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="branchs-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>支部名称</th>
                        <th>支部类型</th>
                        <th>总人数</th>
                        <th>提交时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
@stop

@section('after-scripts-end')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function() {
            var url = '{{ route("admin.verify.branch.get", 0) }}';
            var table = $('#branchs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: url,
                    type: 'post'
                },
                columns: [
                    {data: 'name'},
                    {data: 'type'},
                    {data: 'total_membership'},
                    {data: 'created_at'},
                    {data: 'operations'}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
            $("#unhandled").click(function () {
                url = "{{ route("admin.verify.branch.get", ['v' => 1]) }}";
                table.ajax.url(url).load();
            });
            $("#denied").click(function () {
                url = "{{ route("admin.verify.branch.get", ['v' => 0]) }}";
                table.ajax.url(url).load();
            });
        });
    </script>
@stop