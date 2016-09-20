@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.comments.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.comments.label') }}</h3>
        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table id="comments-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>{{ trans('labels.backend.comments.table.id') }}</th>
                        <th>{{ trans('labels.backend.comments.table.user_name') }}</th>
                        <th>{{ trans('labels.backend.comments.table.application_name') }}</th>
                        <th>{{ trans('labels.backend.comments.table.content') }}</th>
                        <th>{{ trans('labels.backend.comments.table.time') }}</th>
                        <th>{{ trans('labels.backend.comments.table.delete') }}</th>
                    </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>
@endsection


@section('after-scripts-end')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function () {
            $('#comments-table').DataTable({
                processing: true,
                serverSide: true,
//                searching:false,
                data: {status: 1, trashed: 0},
                ajax: {
                    {{--url: '{{ route("admin.comments.get") }}',--}}
                    type: 'get',
                    data: {status: 1, trashed: false}
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'confirmed', name: 'confirmed'},
                    {data: 'roles', name: 'roles'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'actions', name: 'actions'}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>
@endsection