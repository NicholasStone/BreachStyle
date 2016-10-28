@section('fit')
    @include('frontend.mobile.fit', ['route' => route('frontend.m.case') ])
@endsection
@section('meta')
<title>党支部工作案例_全国高校“两学一做”支部风采展示活动_中国大学生在线</title>
@endsection
<div class="caseList">
    <ul>
        @foreach($page as $item)
            <li class="type1">
                <a href="{{ route('frontend.case.show', $item->id) }}">
                    <div class="outBox">
                        <div class="top">
                            <div class="left" style="height: 9.5em">
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->summary }}</p>
                            </div>
                            <div class="right">
                                <div>
                                    <img src="{{ asset($item->img_hash) }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <span class="depart"><i class="icon iconfont">&#xe60a;</i>{{ $item->branch->name }}</span>
                            <span><i class="icon iconfont">&#xe60e;</i>{{ $item->total_comment }}</span>
                            <span><i class="icon iconfont">&#xe609;</i>{{ $item->fancy }}</span>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
