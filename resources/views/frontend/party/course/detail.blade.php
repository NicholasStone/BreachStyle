@extends("frontend.party.common.detail-layout")

@section('sub-styles')
    <link href="http://vjs.zencdn.net/5.11.6/video-js.css" rel="stylesheet">
@endsection


@section('article')
    <div style="text-align: center">
        <iframe src="http://playfile.enetedu.com/VideoPlay/Video?upFileID={{ $application->video_hash }}&key={{ substr(md5('dxsfdy'.$application->video_hash),8,16) }}&width=800&height=600"
                width="830" height="620" frameborder="none"></iframe>
    </div>
    <div style="margin-top: 50px;">
        {{ $application->detail }}
    </div>
@endsection