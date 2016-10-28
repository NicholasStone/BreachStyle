@section('fit')
    @include('frontend.mobile.fit', ['route' => route('frontend.m.recommend') ])
@endsection
@section('meta')
<title>党支部推荐展示_全国高校“两学一做”支部风采展示活动_中国大学生在线</title>
@endsection
<ul class="recTeaList">
    @foreach($page as $item)
        <li>
            <a href="{{ route('frontend.recommend.show',$item->id) }}">
                <div class="imgBox">
                    <img src="{{ asset($item->img_hash) }}"/>
                    <span><i></i></span>
                </div>
                <div class="data">
                    <h3>{{ $item->name }}</h3>
                    <p class="department"><span
                                class="iconfont">&#xe60a;</span>{{ link_to(route('frontend.branch.show', $item->branch->id), $item->branch->name) }}
                    </p>
                    <p class="article"><i class="fa fa-file-text-o"
                                          aria-hidden="true"></i><span>{{ $item->summary }}</span>
                    </p>
                    <p class="datas">
                        <span class="review"><i class="iconfont">&#xe60e;</i> {{ $item->total_comment }}</span>
                        <span class="click"><i class="iconfont">&#xe609;</i> {{ $item->fancy }}</span>
                    </p>
                </div>
            </a>
        </li>
    @endforeach
</ul>
