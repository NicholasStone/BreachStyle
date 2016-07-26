<!-- searchBox -->
<div class="searchBox">
    <div class="mask">
        <div class="content">
            <form action="{{ route('frontend.search') }}">
                {!! csrf_field() !!}
                <ul>
                    <li class="selectSchool">
                        <input type="text" name="search_university" id="school" placeholder="选择大学" value="{{ $search_university or '' }}"/>
                    </li>
                    <li class="selectDepart">
                        <select name="search_type">
                            <option>选择支部类型</option>
                            {{-- */$branch_type = ''; /* --}}
                            @unless($type == '学生党支部推荐展示')
                                <option value="教师党支部" @if($branch_type == '教师党支部') selected @endif>教师党支部</option>@endunless
                            @unless($type == '教师党支部推荐展示')
                                <option value="学生党支部" @if($branch_type == '学生党支部') selected @endif>学生党支部</option>@endunless
                        </select>
                    </li>
                    <li class="Search">
                        <input type="text" name="keyWords" id="searchContent" placeholder="请输入关键词.." value="{{ $keyWords or ''}}"/>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<!-- searchBox -->