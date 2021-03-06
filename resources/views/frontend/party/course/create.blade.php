@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style(asset('css/frontend/create.css')) !!}
    {!! Html::style(asset('css/frontend/formcheck.css')) !!}
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
                <form id="application-form" method="post" action="{{ route('frontend.course.store') }}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
							<span>
								<h4>微党课名称<span>*</span> : </h4>
								<input type="text" name="name" id="courseName" placeholder="请输入微党课名称" class="courseName"
                                       value="{{ old('name') }}"/>
							</span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
							<span>
							<h4>微党课讲师<span>*</span> : </h4>
							<input type="text" id="courseTeacher" class="courseTeacher"
                                   value="{{ old('course_lecturer') }}" name="course_lecturer"/>
							<span class="note">(默认为视频上传者)</span>
							</span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
                        <h4>上传课程视频<span>*</span> :</h4>
                        @include('frontend.party.common.video')
                    </div>
                    <div class="row">
                        <h4>微党课简介<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="editor" name="summary" maxlength="300" required title="请填写微党课简介">{{ old('summary') }}</textarea>
                        </div>
                    </div>
                    @include("frontend.party.common.imgUpload")
                    <div class="submitBtn">
                        <input type="button" name="submit" id="submit" value="确认提交"/>
                        <button type="submit" id="submit-btn"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("after-scripts-end")
    <script>
        $("#submit").on('click', function () {
            $.ajax({
                url: "{{ route('frontend.course.upload.verify') }}",
                method: "post",
                data: {
                    strDataID: $("#strDataID").val(),
                    strKey: $("#strKey").val(),
                    _token: "{{ csrf_token() }}"
                },
                success: function (data) {
                    if (data.upload) {
                        $("#submit-btn").click();
                    } else {
                        swal("抱歉", "请先上传视频", "error");
                    }
                }
            })
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
            'course_lecturer' => [
                'required'=>true,
            ],
            'summary'=>[
                'required'=>true
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
                'required'=>"*（微党课名称不能为空）",
            ],
            'course_lecturer' => [
                'required'=>"*（微党课讲师不能为空）",
            ],
            'summary' => [
                'required' => "*(微党课简介不能为空)"
            ]
        ]
    ])
@endsection