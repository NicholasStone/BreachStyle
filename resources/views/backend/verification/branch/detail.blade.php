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
                    <dd>{{ $university['name'] }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.address') }}</dt>
                    <dd>{{ $address }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.total-membership') }}</dt>
                    <dd>{{ $total_membership }}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.summary') }}</dt>
                    <dd>{!! $summary !!}</dd>
                    <dt>{{ trans('strings.backend.verification.branch.detail') }}</dt>
                    <dd>{!! $detail!!}</dd>
                </dl>
                <img src="{{ asset($avatar) }}" alt="配图" class="thumbnail col-cm-12 col-md-6"
                     style="width: 300px; height: auto;">
            </div>
            <div>
                @if($verification != 1)
                    <a href="{{ route('admin.verify.branch.grant', $id) }}" class="btn bg-olive">通过</a>
                @endif
                <a href="{{ route('admin.verify.branch.deny', $id) }}" class="btn bg-maroon">驳回</a>
            </div>
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@stop