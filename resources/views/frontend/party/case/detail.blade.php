@extends("frontend.party.common.detail-layout")
@section('meta')
<title>{{ $application-name }}</title>
@endsection
@section('article')
    {!! $application->detail !!}
@endsection