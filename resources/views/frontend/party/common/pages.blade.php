@unless($page->lastPage() == 1)
    <div class="page">
        <div class="pageList">
            <ul>
                <li class="first">
                    <a href="{{ $page->url(1) }}">首页</a>
                </li>
                <li class="prev">
                    <a href="{{ $page->previousPageUrl() }}">上一页</a>
                </li>
                @for($i = $page->currentPage() - 2; $i <= $page->currentPage() + 5; $i++)
                    @if($i > 0)
                    <li class="pages @if($page->currentPage() == $i) active @endif">
                        <a href="{{ $page->url($i) }}">{{ $i }}</a>
                    </li>
                    @endif
                @endfor
                <li class="next">
                    <a href="{{ $page->nextPageUrl() }}">下一页</a>
                </li>
                <li class="last">
                    <a href="{{ $page->lastPage() }}">尾页</a>
                </li>
            </ul>
        </div>
    </div>
@endunless
