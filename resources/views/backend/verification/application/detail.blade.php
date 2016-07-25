@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('strings.backend.verification.application.title') }}</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl class="dl-horizontal">
                <dt>{{ trans('strings.backend.verification.application.name') }}</dt>
                <dd>{{ $name }}</dd>
                <dt>{{ trans('strings.backend.verification.application.type') }}</dt>
                <dd>{{ $type }}</dd>
                <dt>{{ trans('strings.backend.verification.application.branch') }}</dt>
                <dd>{{ $branch['name'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.university') }}</dt>
                <dd>{{ $branch['university'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.tel') }}</dt>
                <dd>{{ $branch['tel'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.summary') }}</dt>
                <dd>{{ $summary }}</dd>
                <dt>{{ trans('strings.backend.verification.application.detail') }}</dt>
                <dd>{!! $detail !!}</dd>
                <dt>{{ trans('strings.backend.verification.application.img') }}</dt>
                <dd><img src="{{ asset($img_hash) }}" alt="缩略图" class="thumbnail" width="50%" height="50%"></dd>
                <dt>{{ trans('strings.backend.verification.application.apply') }}</dt>
                <dd><img src="{{ asset($apply_hash) }}" alt="申请表" class="thumbnail" width="50%" height="50%"></dd>
            </dl>
            <div>
                <a href="{{ route('admin.verify.application.grant', $id) }}" class="btn bg-olive">通过</a>
                <a href="{{ route('admin.verify.application.deny', $id) }}" class="btn bg-maroon">驳回</a>
            </div>
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection

@section("after-scripts-end")
    {!! Html::script('//cdn.bootcss.com/zoom.js/0.0.1/zoom.min.js') !!}
@endsection