@extends("frontend.party.common.detail-layout")
@section('title')
{{ $application->name }}_
@endsection

@section('article')
    <div style="text-align: center">
        @include('frontend.party.common.video-player')
    </div>
    <div style="margin-top: 50px;">
        <h3>
            主讲人：{{ $application->course_lecturer }}
        </h3>
        <div>
            <p style="line-height: 3em">视频简介：</p>
            <p style="position:relative;margin-left: 5em;overflow-wrap: break-word">{{ $application->detail }}</p>
        </div>
    </div>
@endsection