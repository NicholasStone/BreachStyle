@foreach($applications as $item)
    <ul class="recTeaList">
        <li>
            <div class="imgBox">
                <img src="{{ asset($item->img_hash) }}"/>
                <span><i></i></span>
            </div>
            <div class="data">
                <h3>{{ link_to(route('',$item->id),$item->name) }}</h3>
                <p class="department"><span
                            class="iconfont">&#xe60a;</span>{{ link_to(route('frontend.branch.show', $item->branch->id), $item->branch->name) }}
                </p>
                <p class="article"><i class="iconfont">&#xe61b;</i><span>{!! $item->detail !!}</span>
                </p>
                <p class="datas">
                    <span class="review"><i class="iconfont">&#xe60e;</i> {{ $item->funcy }}</span>
                    <span class="click"><i class="iconfont">&#xe609;</i>{{ $item->comment }}</span>
                </p>
            </div>
        </li>
    </ul>
@endforeach