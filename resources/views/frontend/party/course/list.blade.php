<div class="caseList">
    <ul>
        @foreach($page as $item)
            <li>
                <a href="{{ route('frontend.course.show', $item->id) }}">
                    <div class="outBox">
                        <div class="vedioImg">
                            <img src="{{ asset($item->img_hash) }}"/>
                        </div>
                        <h3>{{ $item->name }}</h3>
                        <span class="author"><i class="icon iconfont">&#xe60a;</i>{{ $item->branch->name }}</span>
                        <p>{{ $item->detail }}</p>
                        <div class="data">
                            <span class="review"><i class="icon iconfont">&#xe60e;</i> {{ $item->total_comment }}</span>
                            <span class="like"><i class="icon iconfont">&#xe609;</i> {{ $item->fancy }}</span>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
