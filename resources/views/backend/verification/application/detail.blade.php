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
                <dt>{{ trans('strings.backend.verification.application.name') }}</dt><dd>{{ $name }}</dd>
                <dt>{{ trans('strings.backend.verification.application.type') }}</dt><dd>{{ $type }}</dd>
                <dt>{{ trans('strings.backend.verification.application.university') }}</dt><dd>{{ $branch['university'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.user') }}</dt><dd>{{ $branch['secretary'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.tel') }}</dt><dd>{{ $branch['tel'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.summary') }}</dt><dd>{{ $summary }}</dd>
                <dt>{{ trans('strings.backend.verification.application.detail') }}</dt><dd>{{ $detail }}</dd>
            </dl>
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection