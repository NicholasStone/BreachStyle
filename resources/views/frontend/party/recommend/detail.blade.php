@extends("frontend.party.common.detail-layout")
@section('title')
{{ $application->name }}_
@endsection
@section('sub-styles')
    <link href="http://vjs.zencdn.net/5.11.6/video-js.css" rel="stylesheet">
@endsection

@section('article')
    @if($application->video_hash)
        <div style="text-align: center">
            @include('frontend.party.common.video-player')
        </div>
    @endif
    {!! $application->detail !!}
@endsection