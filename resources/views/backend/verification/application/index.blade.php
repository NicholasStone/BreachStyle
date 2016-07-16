@extends ('backend.layouts.master')

@section ('title', trans("labels.backend.verification.application.management"))

@section('after-styles-end')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@stop

@section('page-header')
    <h1>
        {{trans("labels.backend.verification.application.management")}}
        <small>{{ trans('labels.backend.access.users.active') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">
                {{trans("labels.backend.verification.application.management")}}
            </h3>

            {{--<div class="box-tools pull-right">--}}
            {{--@include('backend.access.includes.partials.header-buttons')--}}
            {{--</div><!--box-tools pull-right-->--}}
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>成果名称</th>
                        <th>成果类别</th>
                        <th>所在学校</th>
                        <th>申报联系人</th>
                        <th>申报时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
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
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.verify.application.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'name'},
                    {data: 'type'},
                    {data: 'user.school_name'},
                    {data: 'user.name'},
                    {data: 'created_at'},
                    {data: 'operations'}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>
@stop