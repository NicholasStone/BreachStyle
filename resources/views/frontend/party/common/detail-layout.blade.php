@extends('frontend.layouts.master')
@section('after-styles-end')
    {!! Html::style(asset('css/frontend/caseDetail.css')) !!}
    {!! Html::style(asset('css/frontend/comment.css')) !!}
    @yield('sub-styles')
@endsection
@section('content')
    <div class="caseDetail">
        <div class="content">
            <div class="title">
                <h3>{{ $application->name }}</h3>
                <p>来源 : <a href="#">{{ $university->province->name }}</a><span>/</span><a
                            href="#">{{ $university->name }}</a><span>/</span><a
                            href="{{ route('frontend.branch.show', $branch->id) }}">{{ $branch->name }}</a>
                </p>
                <div class="data">
                    <span><i class="icon iconfont">&#xe60e;</i>{{ $application->total_comment or 0 }}</span>
                    <span><i class="icon iconfont">&#xe609;</i>{{ $application->fancy }}</span>
                    <span><i class="icon iconfont">&#xe603;</i>{{ $application->created_at }}</span>
                    <i class="line"></i>
                </div>
            </div>
            <div class="article">
                @yield('article')
            </div>
            <div class="click" id="click">
                @unless(access()->guest() || !Auth::user()->user_id)
                    <a href="javascript:void(0);" id="fancy"><span class="icon iconfont">&#xe604;</span> 点赞</a>
                @section('after-scripts-end')
                    <script type="text/javascript">
                        $(function () {
                            $("#fancy").click(function () {
                                $.ajax({
                                    url: "{{ route('frontend.fancy', $application->id) }}",
                                    data: {
                                        _token: "{{ csrf_token() }}"
                                    },
                                    method: "get",
                                    success: function () {
                                        var fancy = $('#fancy-total');
                                        fancy.text(parseInt(fancy.text()) + 1);
                                    },
                                    error: function () {
                                        alert('您已赞过');
                                    }
                                })
                            });
                        })
                    </script>
                @endsection
                @endunless
                <p>
                    <d id="fancy-total">{{ $application->fancy }}</d>
                    次赞
                </p>
            </div>
        </div>
    </div>
    {{--@if(Auth::check() && Auth::user()->user_id)--}}
        {{--@include('frontend.party.common.comment')--}}
    {{--@endif--}}
@endsection