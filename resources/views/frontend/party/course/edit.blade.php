@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style(asset('css/frontend/create.css')) !!}
    {!! Html::style("//cdn.bootcss.com/webuploader/0.1.1/webuploader.css") !!}
    {!! Html::style(asset('css/frontend/uploadstyle.css')) !!}
@endsection

@section("content")
    <div class="create">
        <div class="content">
            <ul class="achieveNavList">
                <li>
                    <a href="{{ route("frontend.case.create") }}"><span></span>发布工作案例</a>
                </li>
                <li class="active">
                    <a href="{{ route("frontend.course.create") }}"><span></span>发布微党课</a>
                </li>
                <li>
                    <a href="{{ route("frontend.recommend.create") }}"><span></span>发布推荐展示</a>
                </li>
            </ul>

            <div class="crtDepart">
                <form method="post" action="{{ route('frontend.course.update', $id) }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <h4>微党课名称<span>*</span> : </h4>
                        <input type="text" name="name" id="courseName" placeholder="请输入微党课名称" class="courseName"
                               value="{{ $name }}"/>
                    </div>
                    <div class="row">
                        <h4>微党课讲师<span>*</span> : </h4>
                        <input type="text" name="course_lecturer" id="courseTeacher" class="courseTeacher"
                               value="{{ $course_lecturer }}"/>
                        <span class="note">(默认为视频上传者)</span>
                    </div>
                    <div class="row">
                        <h4>上传课程视频<span>*</span> :</h4>
                        <p style="color: red">视频格式为MP4，请使用<b><a href="http://www.firefox.com.cn/">火狐浏览器</a></b>上传视频，若视频未变则不需上传</p>
                        @include('frontend.party.common.video')
                    </div>
                    <div class="row">
                        <h4>微党课简介<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="summary" name="summary">{{ $summary or '在此编辑插入图片时请插入图片链接' }}</textarea>
                        </div>
                    </div>
                    @include("frontend.party.common.img-upload-edit")
                    <div class="submitBtn">
                        <input type="submit" name="submit" id="submit" value="确认提交"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection