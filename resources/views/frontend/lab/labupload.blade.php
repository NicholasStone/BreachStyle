@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style(asset('css/frontend/create.css')) !!}
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
                <form method="post" action="{{ route('frontend.course.store.lab') }}" enctype="multipart/form-data"
                      id="application-form">
                    {!! csrf_field() !!}
                    <div class="row">
                        <h4>微党课名称<span>*</span> : </h4>
                        <input type="text" name="name" id="courseName" placeholder="请输入微党课名称" class="courseName"
                               required title="请填写微党课名称" value="{{ old('name') }}"/>
                    </div>
                    <div class="row">
                        <h4>微党课讲师<span>*</span> : </h4>
                        <input type="text" name="course_lecturer" id="courseTeacher" class="courseTeacher" required
                               title="请填写微党课讲师" value="{{ old('course_lecturer') }}"/>
                        <span class="note">(默认为视频上传者)</span>
                    </div>
                    <div class="row">
                        <h4>上传课程视频<span>*</span> :</h4>
                        {{--<p style="color: red">请将已上传的优酷视频分享链接填至此处，请填入通用代码或html代码</p>--}}
                        {{--<input type="text" name="video_path" class="courseName" required title="请填写视频路径" value="{{ old('video_path') }}">--}}
                        <iframe  src="http://dxsupload.enetedu.com?strDataId={{ $strDataId }}&strKey={{ $strKey }}&strType=1&ResUrl={{ url('lab/upload') }}" width="900" height="200"></iframe>
                    </div>
                    <div class="row">
                        <h4>微党课简介<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="editor" name="summary" required title="请填写微党课简介">
                                {{ old('detail') ? old('detail') : '如需上传图片，请拖拽图片至此，右键单击已上传图片编辑，请不要超过300字'}}
                            </textarea>
                        </div>
                    </div>
                    @include("frontend.party.common.imgUpload")
                    @include("frontend.party.common.validate")
                </form>
            </div>
        </div>
    </div>
@endsection

@section("after-scripts-end")
    <script src="/vendor/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('summary', {
            language: 'zh-cn',
            uploadUrl: '{{ route("frontend.course.image.drag") }}?_token={{ csrf_token() }}',
            filebrowserUploadUrl: '{{ route("frontend.course.image") }}?_token={{ csrf_token() }}'
        });
    </script>

@endsection