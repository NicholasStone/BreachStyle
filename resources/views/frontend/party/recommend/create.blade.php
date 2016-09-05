@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style('css/frontend/create.css') !!}
    {!! Html::style("//cdn.bootcss.com/webuploader/0.1.1/webuploader.css") !!}
    {!! Html::style(asset('css/frontend/uploadstyle.css')) !!}
    @include('UEditor::head')
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
                <form action="{{ route('frontend.recommend.store') }}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <h4>推荐展示名称<span>*</span> : </h4>
                        <input type="text" name="name" id="courseName" placeholder="请输入课题名称" class="courseName" />
                    </div>
                    <div class="row">
                        <h4>推荐展示简介<span>*</span> : </h4>
                        <textarea class="caseIntroduce" name="summary"></textarea>
                    </div>
                    <div class="row">
                        <h4>上传报名表<span>*</span> : </h4>
                        <input type="file" name="apply" id="entry" accept="image/*" class="casePreview" onchange="uploadEntry()"/>
                        <label for="entry">
                            <span>添加图片</span>
                        </label>
                        <p class="notes">下载活动报名表，填写完成并由高校党委主管部门盖章后，拍照或扫描成jpg格式，文件命名为"报名表.jpg"提交到活动官网。推荐成果需由学校审核后统一报送，每类成果限报两项。</p>
                    </div>
                    <div class="row">
                        <h4>推荐展示预览图<span>*</span> : </h4>
                        <input type="file" name="img" id="showPreview" accept="image/*" class="casePreview" onchange="uploadPreview()"/>
                        <label for="showPreview">
                            <span>添加图片</span>
                        </label>
                        <p class="notes">支持jpg/png格式，RGB模式,最多上传1张图片，不要在图片上放置无关的东西</p>
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
                            <textarea id="detail" name="detail">
                                {{ $summary or '在此编辑插入图片时请插入图片链接' }}
                            </textarea>
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
    {!! Html::script('//cdn.bootcss.com/webuploader/0.1.1/webuploader.min.js') !!}
    @include('frontend.party.common.uploadVideo', ['server'=> route('frontend.recommend.upload')])
    <script type="text/javascript">
        var ue = UE.getEditor('detail', {
            autoHeight: true,
            maximumWords: 3000
        });
        ue.ready(function () {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });
    </script>
    <script>
        function uploadEntry(){
            var entry = document.getElementById("entry").files;
            alert("已选择 " + entry[0].name);
        }
        function uploadPreview(){
            var casePreview = document.getElementById("showPreview").files;
            alert("已选择 " + casePreview[0].name);
        }
        $(function() {
            $('#edit').editable({
                inlineMode: false,
                alwaysBlank: true
            })
        });
    </script>
@endsection