@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style('css/frontend/create.css') !!}
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
                <li>
                    <a href="{{ route("frontend.course.create") }}"><span></span>发布微党课</a>
                </li>
                <li class="active">
                    <a href="{{ route("frontend.recommend.create") }}"><span></span>发布推荐展示</a>
                </li>
            </ul>
            <div class="crtDepart">
                <form action="{{ route('frontend.recommend.store') }}" method="post" enctype="multipart/form-data" id="application-form">
                    {!! csrf_field() !!}
                    <input type="text" name="video_token" id="video-token" readonly hidden value="{{ $video_token }}">
                    <div class="row">
                        <h4>推荐展示名称<span>*</span> : </h4>
                        <input type="text" name="name" id="courseName" placeholder="请输入课题名称" class="courseName" required title="请填写推荐展示标题" value="{{ old('name') }}"/>
                    </div>
                    <div class="row">
                        <h4>推荐展示简介<span>*</span> : </h4>
                        <textarea class="caseIntroduce" name="summary" required title="请填写简介">{{ old('summary') }}</textarea>
                    </div>
                    <div class="row">
                        <h4>上传视频 :</h4>
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
                        <h4>推荐展示说明<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="editor" name="detail" required title="请填写说明">
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
    @include('frontend.party.common.uploadVideo', ['server'=> route('frontend.recommend.upload'), 'required'=>false])
    <script>
        CKEDITOR.replace( 'detail' );
    </script>
@endsection