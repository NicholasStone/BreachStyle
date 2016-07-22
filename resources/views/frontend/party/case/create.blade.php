@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style('//cdn.bootcss.com/froala-editor/1.2.2/css/froala_editor.min.css') !!}
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
                <li >
                    <a href="{{ route("frontend.recommend.create") }}"><span></span>发布推荐展示</a>
                </li>
            </ul>
            <div class="crtDepart">
                <form enctype="multipart/form-data">
                    <div class="row">
                        <h4>工作案例名称<span>*</span> : </h4>
                        <input type="text" name="caseName" id="caseName" placeholder="请输入党支部名称" class="caseName" />
                    </div>
                    <div class="row">
                        <h4>工作案例简介<span>*</span> : </h4>
                        <textarea class="caseIntroduce"></textarea>
                    </div>
                    <div class="row">
                        <h4>工作案例说明<span>*</span> :</h4>
                        <div id="editor">
                            <div id='edit'>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4>上传报名表<span>*</span> : </h4>
                        <input type="file" name="caseEntry" id="caseEntry" accept="image/*" class="casePreview" onchange="uploadEntry()"/>
                        <label for="caseEntry">
                            <span>添加图片</span>
                        </label>
                        <p class="notes">下载活动报名表，填写完成并由高校党委主管部门盖章后，拍照或扫描成jpg格式，文件命名为"报名表.jpg"提交到活动官网。推荐成果需由学校审核后统一报送，每类成果限报两项。</p>
                    </div>
                    <div class="row">
                        <h4>上传预览图<span>*</span> : </h4>
                        <input type="file" name="casePreview" id="casePreview" accept="image/*" class="casePreview" onchange="uploadPreview()"/>
                        <label for="casePreview">
                            <span>添加图片</span>
                        </label>
                        <p class="notes">支持jpg/png格式，RGB模式,最多上传1张图片，不要在图片上放置无关的东西</p>
                    </div>
                    <div class="row">
                        <h4>是否为推荐展示:</h4>
                        <div class="radioitem">
                            <input type="radio" name="show" id="teashow" value="tea" /><label for="teashow">教师党支部推荐展示</label>
                        </div>
                        <div class="radioitem">
                            <input type="radio" name="show" id="stushow" value="stu" /><label for="stushow">学生党支部推荐展示</label>
                        </div>
                    </div>
                    <div class="submitBtn">
                        <input type="submit" name="submit" id="submit" value="确认提交" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("after-scripts-end")
    {!! Html::script('//cdn.bootcss.com/froala-editor/1.2.2/js/froala_editor.min.js') !!}
    {!! Html::script('//cdn.bootcss.com/froala-editor/1.2.2/js/plugins/video.min.js') !!}
    <script>
        function uploadPreview(){
            var casePreview = document.getElementById("casePreview").files;
            alert("已选择 " + casePreview[0].name);
        }
        function uploadEntry(){
            var caseEntry = document.getElementById("caseEntry").files;
            alert("已选择 " + caseEntry[0].name);
        }
        $(function() {
            $('#edit').editable({
                inlineMode: false,
                alwaysBlank: true
            })
        });
    </script>
@endsection