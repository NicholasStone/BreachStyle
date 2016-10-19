@extends("frontend.party.common.detail-layout")

@section('sub-styles')
    <link href="http://vjs.zencdn.net/5.11.6/video-js.css" rel="stylesheet">
@endsection


@section('article')
    <div style="text-align: center">
        {!! $application->video_path !!}
    </div>
    <div style="margin-top: 50px;">
        {!! $application->detail !!}
    </div>
@endsection