@extends("frontend.layouts.master")
@section('after-styles-end')
    {!! Html::style(asset('css/frontend/caseDetail.css')) !!}
    {!! Html::style(asset('css/frontend/comment.css')) !!}
@endsection
@section('content')
    <!-- casedetail -->
    <div class="caseDetail">
        <div class="content">
            <div class="title">
                <h3>这是一个很长很长的标题，你觉得是不是呢？</h3>
                <p>来源 : <a href="#">山西省</a><span>/</span><a href="#">太原理工大学</a><span>/</span><a href="#">太原理工大学信息工程学院电子工程系2016级党支部</a>
                </p>
                <div class="data">
                    <span><i class="icon iconfont">&#xe60e;</i>{{ $comment or 0 }}</span>
                    <span><i class="icon iconfont">&#xe609;</i>{{ $fancy or 0 }}</span>
                    <span><i class="icon iconfont">&#xe603;</i>{{ $fancy or time() }}</span>
                    <i class="line"></i>
                </div>
            </div>
            <div class="article">
                @yield('article')
            </div>
            <div class="click">
                @unless(access()->guest())
                    <a href="javascript:void(0);" id="fancy"><span class="icon iconfont">&#xe604;</span> 点赞</a>
                    <script type="text/javascript">
                        $(function () {
                            var url = "{{ route('frontend.fancy', $id) }}";
                            $("#fancy").click(function () {
                                $.ajax({
                                    url: url,
                                    data:{
                                        _token:"{{ csrf_token() }}"
                                    },
                                    method:"get",
                                    success:function () {
                                        url = "{{ route('frontend.unfancy', $id) }}";
                                        //TODO 更改样式
                                    }
                                })
                            });
                        })
                    </script>
                @endunless
                <p>{{ $fancy }}人已赞</p>
            </div>
        </div>
    </div>
    <!-- casedetail -->
    @include('frontend.party.common.comment')
@endsection