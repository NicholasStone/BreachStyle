@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style(asset('css/frontend/create.css')) !!}
    {!! Html::style(asset('css/frontend/formcheck.css')) !!}
@endsection

@section('content')
    <div class="create">
        <div class="content">
            <ul class="achieveNavList">
                <li class="active">
                    <a href="{{ route("frontend.case.create") }}"><span></span>发布工作案例</a>
                </li>
                <li>
                    <a href="{{ route("frontend.course.create") }}"><span></span>发布微党课</a>
                </li>
                <li>
                    <a href="{{ route("frontend.recommend.create") }}"><span></span>发布推荐展示</a>
                </li>
            </ul>
            <div class="crtDepart">
                <form enctype="multipart/form-data" action="{{ route('frontend.case.store') }}" method="post"
                      id="application-form">
                    {!! csrf_field() !!}
                    <div class="row">
                        <h4>工作案例名称<span>*</span> : </h4>
                        <span>
                            <input type="text" name="name" id="caseName" placeholder="请输入案例名称" class="caseName"
                                   value="{{ old('name') }}" title="请填写案例名称"/>
                        </span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
                        <h4>工作案例简介<span>*</span> : </h4>
                        <div>
                        <textarea class="caseIntroduce" name="summary" placeholder="请不要超过300字" maxlength="300"
                                  title="请填写案例简介">{{ old('summary') }}</textarea>
                        </div>
                        <span class="status"></span>
                    </div>
                    <div class="row">
                        <h4>工作案例说明<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="editor" name="detail" required title="请填写案例说明">
                                {{ old('summary') ? old('detail') : '如需上传图片，请拖拽图片至此，右键单击已上传图片编辑'}}
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
            uploadUrl: '{{ route("frontend.case.image.drag") }}?_token={{ csrf_token() }}',
            filebrowserUploadUrl: '{{ route("frontend.case.image") }}?_token={{ csrf_token() }}'
        });
    </script>
    @include('frontend.party.common.validate',[
    'editor'=> false,
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
            'required'=>"*（案例名称不能为空）",
        ],
        'summary' => [
            'required'=>"*（案例简介不能为空）",
        ],
    ]
])
@endsection