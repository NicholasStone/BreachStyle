<!-- searchBox -->
<div class="searchBox">
    <div class="mask">
        <div class="content">
            <form action="{{ route('frontend.search') }}">
                {{--{!! csrf_field() !!}--}}
                <ul>
                    <li class="Search">
                        <select name="typeNum" id="typeNum" class="selectList">
                            <option value="1">成果</option>
                            <option value="2">支部</option>
                            <option value="3">学校</option>
                        </select>
                        <input type="text" name="keywords" id="searchContent" placeholder="请输入关键词.." required/>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<!-- searchBox -->