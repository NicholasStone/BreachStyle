@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style(asset('css/frontend/create.css')) !!}
    {!! Html::style("//cdn.bootcss.com/webuploader/0.1.1/webuploader.css") !!}
    {!! Html::style(asset('css/frontend/uploadstyle.css')) !!}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
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
                <form method="post" action="{{ route('frontend.course.store') }}" enctype="multipart/form-data"
                      id="application-form">
                    {!! csrf_field() !!}
                    <input type="text" name="video_token" id="video-token" readonly hidden value="{{ $video_token }}">
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
                        <p style="color: red">视频格式为MP4，且大小必须小于100M</p>
                        <div id="wrapper">
                            <div id="container">
                                <div id="uploader">
                                    <div class="queueList">
                                        <div id="dndArea" class="placeholder">
                                            <div id="filePicker"></div>
                                        </div>
                                    </div>
                                    <div class="statusBar" style="display:none;">
                                        <div class="progress">
                                            <span class="text">0%</span>
                                            <span class="percentage"></span>
                                        </div>
                                        <div class="info"></div>
                                        <div class="btns">
                                            <div id="filePicker2"></div>
                                            <div class="uploadBtn">开始上传</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4>微党课简介<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="editor" name="summary" required title="请填写微党课简介">
                                {{ old('detail') ? old('detail') : '在此插入图片时请插入图片链接'}}
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
    {!! Html::script('//cdn.bootcss.com/webuploader/0.1.1/webuploader.min.js') !!}
    @include('frontend.party.common.uploadVideo', ['server'=> route('frontend.course.upload'), 'required' => true])
    <script>
        CKEDITOR.replace( 'summary' );
    </script>

@endsection