@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style(asset('css/frontend/create.css')) !!}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
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
                        <input type="text" name="name" id="caseName" placeholder="请输入案例名称" class="caseName"
                               value="{{ old('name') or '' }}" required title="请填写案例名称"/>
                    </div>
                    <div class="row">
                        <h4>工作案例简介<span>*</span> : </h4>
                        <textarea class="caseIntroduce" name="summary" required placeholder="请不要超过300字" maxlength="300"
                                  title="请填写案例简介">{{ old('summary') or '' }}</textarea>
                    </div>
                    <div class="row">
                        <h4>工作案例说明<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="editor" name="detail" required title="请填写案例说明">
                                {{ old('summary') ? old('detail') : '在此插入图片时请插入图片链接'}}
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
    <script>
        CKEDITOR.replace('detail');
    </script>
@endsection