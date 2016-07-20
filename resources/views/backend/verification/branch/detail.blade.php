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
            <dl class="dl-horizontal">
                <dt>{{ trans('strings.backend.verification.branch.name') }}</dt><dd>{{ $name }}</dd>
                <dt>{{ trans('strings.backend.verification.branch.creator') }}</dt><dd>{{ $creator['name'] }}</dd>
                <dt>{{ trans('strings.backend.verification.branch.type') }}</dt><dd>{{ $type }}</dd>
                <dt>{{ trans('strings.backend.verification.branch.school') }}</dt><dd>{{ $creator['school_name'] }}</dd>
                <dt>{{ trans('strings.backend.verification.branch.address') }}</dt><dd>{{ $address }}</dd>
                <dt>{{ trans('strings.backend.verification.branch.total-membership') }}</dt><dd>{{ $total_membership }}</dd>
                <dt>{{ trans('commons') }}</dt><dd>{{ $commons }}</dd>
            </dl>
            <img src="{{ asset('img/check.png') }}" alt="" style="position: absolute;top: 50px; right: 200px;">
            <div>
                <a href="{{ route('admin.verify.branch.grant', $id) }}" class="btn bg-olive">通过</a>
                <a href="{{ route('admin.verify.branch.deny', $id) }}" class="btn bg-maroon">驳回</a>
            </div>
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@stop