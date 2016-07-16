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
                <dt>{{ trans('strings.backend.verification.application.school') }}</dt><dd>{{ $user['school_name'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.user') }}</dt><dd>{{ $user['name'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.dept') }}</dt><dd>{{ $user['college_name'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.tel') }}</dt><dd>{{ $user['tel'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.email') }}</dt><dd>{{ $user['email'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.common') }}</dt><dd>{{ $commons }}</dd>
                <dt>{{ trans('strings.backend.verification.application.summary') }}</dt><dd>{{ $summary }}</dd>
            </dl>
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection