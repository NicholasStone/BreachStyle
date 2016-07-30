    <div class="caseList">
        <ul>
            @foreach($page as $item)
            <li class="type1">
                <div class="outBox">
                    <div class="top">
                        <div class="left">
                            <h3>{{ link_to(route('frontend.case.show', $item->id), $item->name, ['style' => 'color:black']) }}</h3>
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
            </li>
            @endforeach
        </ul>
    </div>
