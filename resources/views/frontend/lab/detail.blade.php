@extends("frontend.party.common.detail-layout")

@section('article')
    <div style="text-align: center">
        {!! $application->video_path !!}
    </div>
    <div style="margin-top: 50px;">
        {!! $application->detail !!}
    </div>
@endsection