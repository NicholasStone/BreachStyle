@extends("frontend.party.common.detail-layout")

@section('sub-styles')
    {{ Html::style('//cdn.bootcss.com/video.js/5.11.0/video-js.min.css') }}
@endsection

@section('after-scripts-end')
    {{ Html::script('//cdn.bootcss.com/video.js/5.11.0/video.min.js') }}
@endsection

@section('article')
    <video id="my-video" class="video-js" controls preload="auto" style="width: 100%; height: 640px"
           poster="{{ asset($application->img_hash) }}" data-setup="{}">
        <source src="{{ asset($application->video_hash) }}" type='video/mp4'>
        <p class="vjs-no-js">
            请开启您的浏览器的JavaScript功能，或使用<a href="http://videojs.com/html5-video-support/" target="_blank">支持HTML5技术的浏览器</a>
        </p>
    </video>
    <div style="margin-top: 50px;">
        {!! $application->detail !!}
    </div>
@endsection