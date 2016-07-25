@include("frontend.layouts.master")

@section('content')

    @unless($self)
        <!-- searchBox -->
        <div class="searchBox">
            <div class="mask">
                <div class="content">
                    <ul>
                        <li class="selectSchool">
                            <form>
                                <input type="text" name="school" id="school" placeholder="选择大学"/>
                            </form>
                        </li>
                        <li class="selectDepart">
                            <form>
                                <select value="type">
                                    <option value="default">选择支部类型</option>
                                    <option value="teacher">教师党支部</option>
                                    <option value="student">学生党支部</option>
                                </select>
                            </form>
                        </li>
                        <li class="Search">
                            <form>
                                <input type="text" name="searchContent" id="searchContent" placeholder="请输入关键词.."/>
                                <button type="submit" class="iconfont">&#xe619;</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- searchBox -->
    @endunless

    <div class="clearfix"></div>

    <!-- achievement List -->
    <div class="achievementList">
        <div class="content">
            <div class="nav">
                <div class="NavList">
                    <ul>
                        <li @if($type == '工作案例') class="active" @endif>
                            <a href="#">支部工作案例</a>
                            <span></span>
                        </li>
                        <li @if($type == '微党课') class="active" @endif>
                            <a href="#">微党课</a>
                            <span></span>
                        </li>
                        <li @if($type == '教师党支部推荐展示') class="active" @endif>
                            <a href="#">教师党支部推荐展示</a>
                            <span></span>
                        </li>
                        <li @if($type == '学生党支部推荐展示') class="active" @endif>
                            <a href="#">学生党支部推荐展示</a>
                            <span></span>
                        </li>
                    </ul>
                </div>
                <div class="rank">
                    <p>排序 :
                        <a href="#" class="active">时间</a><span> | </span>
                        <a href="#">人气</a><span> | </span>
                        <a href="#">评论</a>
                    </p>
                </div>
            </div>
            <div class="mainList">
                <div class="caseList">
                    <ul>
                        @yield('list')
                    </ul>
                </div>

                <div class="page">
                    <div class="pageList">
                        <ul>
                            <li class="first">
                                <a href="#">首页</a>
                            </li>
                            <li class="prev">
                                <a href="#">上一页</a>
                            </li>
                            <li class="pages active">
                                <a href="#">1</a>
                            </li>
                            <li class="pages">
                                <a href="#">2</a>
                            </li>
                            <li class="pages">
                                <a href="#">3</a>
                            </li>
                            <li class="pages">
                                <a href="#">4</a>
                            </li>
                            <li class="pages">
                                <a href="#">5</a>
                            </li>
                            <li class="next">
                                <a href="#">下一页</a>
                            </li>
                            <li class="last">
                                <a href="#">尾页</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- achievement List -->
@endsection