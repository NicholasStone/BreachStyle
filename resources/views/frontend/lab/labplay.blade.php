@extends("frontend.party.common.detail-layout")

@section('article')
    <div style="text-align: center">
        <iframe src="http://playfile.enetedu.com/VideoPlay/Video?upFileID={{ $application->video_path }}&key={{ $key }}&width=800&height=600" width="800" height="800"></iframe>
    </div>
    <div style="margin-top: 50px;">
        {!! $application->detail !!}
    </div>
@endsection
