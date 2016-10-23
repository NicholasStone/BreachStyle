@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style('css/frontend/create.css') !!}
    {!! Html::style(asset('css/frontend/formcheck.css')) !!}

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
                <form action="{{ route('frontend.recommend.store') }}" method="post" enctype="multipart/form-data"
                      id="application-form">
                    {!! csrf_field() !!}
                    <div class="row">
                        <h4>推荐展示名称<span>*</span> : </h4>
                        <div>
                            <input type="text" name="name" id="courseName" placeholder="请输入课题名称" class="courseName"
                                   required
                                   title="请填写推荐展示标题" value="{{ old('name') }}"/>
                        </div>
                        <div class="status"></div>
                    </div>
                    <div class="row">
                        <h4>推荐展示简介<span>*</span> : </h4>
                        <div>
                        <textarea class="caseIntroduce" name="summary" required title="请填写简介" placeholder="请不要超过300字"
                                  maxlength="300">{{ old('summary') }}</textarea>
                        </div>
                        <div class="status"></div>
                    </div>
                    <div class="row">
                        <h4>上传视频 :</h4>
                        <p style="color: red">视频格式为MP4，且大小必须小于100M</p>
                        <iframe src="http://dxsupload.enetedu.com?strDataId={{ $strDataID }}&strKey={{ $strKey }}&strType=1&ResUrl={{ route('frontend.course.callback') }}"
                                width="900" height="300" frameborder="none"></iframe>
                    </div>
                    <div class="row">
                        <h4>推荐展示说明<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="editor" name="detail" required title="请填写说明">
                                {{ old('detail') ? old('detail') : '如需上传图片，请拖拽图片至此，右键单击已上传图片编辑'}}
                            </textarea>
                        </div>
                    </div>
                    @include("frontend.party.common.imgUpload")
                    <div class="submitBtn">
                        <input type="submit" name="submit" id="submit" value="确认提交"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("after-scripts-end")
    <script src="/vendor/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('detail', {
            language: 'zh-cn',
            uploadUrl: '{{ route("frontend.recommend.image.drag") }}?_token={{ csrf_token() }}',
            filebrowserUploadUrl: '{{ route("frontend.recommend.image") }}?_token={{ csrf_token() }}'
        });
    </script>
    @include('frontend.party.common.validate',[
        'rules' => [
            'apply' => [
                'required'=>true,
            ],
            'img' => [
                'required'=>true,
            ],
            'name' => [
                'required'=>true,
            ],
            'summary' => [
                'required'=>true,
            ],
        ],
        'messages'=>[
            'apply' => [
                'required'=>"(*请上传报名表)",
            ],
            'img' => [
                'required'=>"(*请上传预览图)",
            ],
            'name' => [
                'required'=>"*（推荐展示名称不能为空）",
            ],
            'summary' => [
                'required'=>"*（推荐展示简介不能为空）",
            ],
        ]
    ])
@endsection