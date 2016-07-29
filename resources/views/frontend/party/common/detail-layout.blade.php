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
                <p>来源 : <a href="#">{{ $university->province->name }}</a><span>/</span><a href="#">{{ $university->name }}</a><span>/</span><a href="#">{{ $branch->name }}</a>
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
            <div class="click">
                @unless(access()->guest())
                    <a href="javascript:void(0);" id="fancy"><span class="icon iconfont">&#xe604;</span> 点赞</a>
                    @section('after-scripts-end')
                        <script type="text/javascript">
                            $(function () {
                                var url = "{{ route('frontend.fancy', $application->id) }}";
                                $("#fancy").click(function () {
                                    $.ajax({
                                        url: url,
                                        data: {
                                            _token: "{{ csrf_token() }}"
                                        },
                                        method: "get",
                                        success: function () {
                                            url = "{{ route('frontend.unfancy', $application->id) }}";
                                            this.css('background-color', 'red').css('color', '#fff').text('取消');
                                        }
                                    })
                                });
                            })
                        </script>
                    @endsection
                @endunless
                <p>{{ $application->fancy }}人已赞</p>
            </div>
        </div>
    </div>
    @include('frontend.party.common.comment')
@endsection