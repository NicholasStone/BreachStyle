<!-- searchBox -->
<div class="searchBox">
    <div class="mask">
        <div class="content">
            <form action="{{ route('frontend.search') }}">
                {!! csrf_field() !!}
                <ul>
                    <li class="Search">
                        <input type="text" name="keywords" id="searchContent" placeholder="请输入关键词.." value="{{ $keywords or ''}}" required/>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<!-- searchBox -->