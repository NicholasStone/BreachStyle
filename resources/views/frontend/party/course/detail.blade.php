@extends("frontend.party.common.detail-layout")

@section('sub-styles')
    <link href="http://vjs.zencdn.net/5.11.6/video-js.css" rel="stylesheet">
@endsection


@section('article')
    <video id="my-video" class="video-js" controls preload="auto" style="width: 100%; height: 640px"
           poster="{{ asset($application->img_hash) }}" data-setup="{}">
        <source src="{{ asset($application->video_hash) }}" type='video/mp4'>
        <p class="vjs-no-js">
            请开启您的浏览器的JavaScript功能，或使用<a href="http://videojs.com/html5-video-support/" target="_blank">支持HTML5技术的浏览器</a>
        </p>
    </video>
    <script src="http://vjs.zencdn.net/5.11.6/video.js"></script>
    <div style="margin-top: 50px;">
        {!! $application->detail !!}
    </div>
@endsection