@extends ('backend.layouts.master')

@section ('title', "设置")

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
                高校管理
            </h3>

        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>名称</th>
                        <th>省份</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
            <div>
                <form action="{{ route('admin.university.store') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">学校名称</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="province">所在地</label>
                        <select name="province" id="province" class="form-control">
                            @foreach($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">提交</button>
                </form>
            </div>
            <br>
            <div>
                <a class="btn btn-primary" href="{{ route("admin.university.excel") }}">导出参与高校列表</a>
            </div>
        </div><!-- /.box-body -->
    </div><!--box-->
@stop

@section('after-scripts-end')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("admin.university.get") }}',
                type: 'post',
                data: {
                    '_token': "{{ csrf_token() }}"
                }
            },
            columns: [
                {data: 'name'},
                {data: 'province.name'},
                {data: "operations"}
            ],
            order: [[0, "asc"]],
            searchDelay: 500
        });
    </script>
@stop