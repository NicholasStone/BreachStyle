@extends("frontend.party.common.detail-layout")
@section('title')
{{ $application->name }}_
@endsection
@section('article')
    {!! $application->detail !!}
@endsection