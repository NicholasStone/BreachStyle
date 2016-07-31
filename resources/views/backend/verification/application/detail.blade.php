@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('after-styles-end')
    {!! Html::style('//cdn.bootcss.com/video.js/5.11.0/video-js.min.css') !!}
@endsection

@section('after-scripts-end')
    {!! Html::script('//cdn.bootcss.com/video.js/5.11.0/video.min.js') !!}
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
                <dd>{{ $branch['university']['name'] }}</dd>
                <dt>{{ trans('strings.backend.verification.application.tel') }}</dt>
                <dd>{{ $branch['tel'] }}</dd>
                @unless(empty($summary))
                    <dt>{{ trans('strings.backend.verification.application.summary') }}</dt>
                    <dd>{{ $summary }}</dd>
                @endunless
                <dt>{{ trans('strings.backend.verification.application.detail') }}</dt>
                <dd>{!! $detail !!}</dd>
                <dt>{{ trans('strings.backend.verification.application.img') }}</dt>
                <dd><img src="{{ asset($img_hash) }}" alt="缩略图" class="thumbnail" width="50%" height="50%"></dd>
                @if($video_hash)
                    <dt>{{ trans('strings.backend.verification.application.video') }}</dt>
                    <dd>
                        <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                               poster="{{ asset($img_hash) }}" data-setup="{}">
                            <source src="{{ asset($video_hash) }}" type='video/mp4'>
                            <p class="vjs-no-js">
                                请开启您浏览器的JavaScript功能，或者请使用<a href="http://videojs.com/html5-video-support/"
                                                             target="_blank">支持HTML5</a>的浏览器
                            </p>
                        </video>
                    </dd>
                @endif
                <dt>{{ trans('strings.backend.verification.application.apply') }}</dt>
                <dd><img src="{{ asset($apply_hash) }}" alt="申请表" class="thumbnail" width="50%" height="50%"></dd>
            </dl>
            @unless($verification)
                <div>
                    <a href="{{ route('admin.verify.application.grant', $id) }}" class="btn bg-olive">通过</a>
                    <a href="{{ route('admin.verify.application.deny', $id) }}" class="btn bg-maroon">驳回</a>
                </div>
            @endunless
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection
