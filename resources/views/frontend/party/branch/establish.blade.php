@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style(asset('css/frontend/create.css')) !!}
    {{--@include('UEditor::head')--}}
@endsection

@section("content")
    <!-- createDepart -->
    <div class="create">
        <div class="content">
            <div class="crtDepart">
                <form action="{{ route('frontend.branch.create') }}" method="post" enctype="multipart/form-data" id="application-form">
                    {!! csrf_field() !!}
                    <div class="uploadImg">
                        <input type="file" accept="image/*" name="avatar" id="headImg" onchange="loadImageFile()" value="{{ old('avatar') }}"/>
                        <label for="headImg">
                            <div class="imgBox" id="imgBox">

                            </div>
                        </label>
                        <h4>党支部配图<span>*</span> : </h4>
                        <p style="color: red;">请不要上传大于500KB的图片</p>
                    </div>
                    <div class="row">
                        <h4>党支部名称<span>*</span> : </h4>
                        <input type="text" name="name" id="departName" placeholder="请输入党支部名称" class="departName" required value="{{ old('name') }}"/>
                    </div>
                    <div class="row">
                        <h4>党支部类型:</h4>
                        <div class="radioitem">
                            <input type="radio" name="type" id="teashow" value="教师党支部" readonly
                                   @if($user->type == "教师") checked @endif/><label for="teashow">教师党支部</label>
                        </div>
                        <div class="radioitem">
                            <input type="radio" name="type" id="stushow" value="学生党支部" readonly
                                   @if($user->type == "学生") checked @endif/><label for="stushow">学生党支部</label>
                        </div>
                    </div>
                    <div class="row">
                        <h4>所在学校<span>*</span> : </h4>
                        <input type="text" name="university" id="school" class="school" readonly
                               value="{{ $user->university }}" required/>
                    </div>
                    <div class="row">
                        <h4>党支部书记名称<span>*</span> : </h4>
                        <input type="text" name="secretary" id="leader" class="leader" readonly
                               value="{{ $user->name }}" required/>
                        <span class="note">默认创建党支部者为党支部书记</span>
                    </div>
                    <div class="row">
                        <h4>党支部书记简介<span>*</span> : </h4>
                        <textarea class="introduce" oninput="wordChange1()" id="intro" name="secretary_summary" required>{{ old('secretary_summary') }}</textarea>
                        <p class="count">还可以输入<span id="word">100</span>字</p>

                    </div>
                    <div class="row">
                        <h4>党员人数<span>*</span> : </h4>
                        <input type="text" name="total_membership" id="people" class="people" value="{{ old('total_membership') }}" required/>
                    </div>
                    <div class="row">
                        <h4>手机号<span>*</span> : </h4>
                        <input type="text" name="tel" id="mobilePhone" class="mobile" value="{{ old('tel') }}" required/>
                    </div>
                    <div class="row">
                        <h4>通讯地址<span>*</span> : </h4>
                        <input type="text" name="address" id="address" class="address" value="{{ old('address') }}" required/>
                    </div>
                    <div class="row">
                        <h4>党支部摘要<span>*</span> : </h4>
                        <textarea class="introduce" oninput="wordChange2()" id="summary" name="summary" required>{{ old('summary') }}</textarea>
                    </div>
                    <div class="row">
                        <h4>党支部情况介绍<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="editor" name="detail" required>
                                {{ old('detail') ? old('detail') : '在此插入图片时请插入图片链接'}}
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <h4>党支部认证表<span>*</span> : </h4>
                        <p style="color: red;">请不要上传大于500KB的图片</p>
                        <input type="file" name="apply" id="apply" accept="image/*" class="casePreview" onchange="loadImageFile1()" value="{{ old('apply') }}"/>
                        <label for="apply" id="apply-preview">
                            <span>添加图片</span>
                        </label>
                    </div>
                    <div class="submitBtn">
                        <input type="submit" name="submit" id="submit" value="确认创建"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- createDepart -->
@endsection

@section("after-scripts-end")
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'detail' );
        $("#application-form").submit(function (e) {
            var apply = $("#apply");
            var avatar = $('#headImg');
            var str = CKEDITOR.instances.editor.getData();
            str = str.replace("<br />", "");
            str = str.replace("<br>", "");
            str = str.replace('/(^/s*)|(/s*$)/g', "");
            if (!(apply.val() && avatar.val() && str)) {
                e.preventDefault();
                var alertMsg = apply.val() == "" ? '请上传认证表' : '';
                alertMsg += avatar.val() == "" ? '\n请上传支部配图' : "";
                alertMsg += str == "" ? '\n请填写说明或简介' : '';
                sweetAlert('请上传图片', alertMsg, 'error');
            }
        })
        function wordChange1() {
            var intro = document.getElementById('intro');
            var word = document.getElementById('word');
            if (intro.value.length >= 100) {
                alert("超出字符限制");
                word.innerHTML = 0;
            }
            word.innerHTML = (100 - intro.value.length);
        }

        function wordChange2() {
            var intro = document.getElementById('intro');
            var word = document.getElementById('word');
            if (intro.value.length >= 100) {
                alert("超出字符限制");
                word.innerHTML = 0;
            }
            word.innerHTML = (100 - intro.value.length);
        }

        var loadImageFile1 = (function() {
            if (window.FileReader) {
                var oPreviewImg = null,
                        oFReader = new window.FileReader(),
                        rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
                oFReader.onload = function(oFREvent) {
                    if (!oPreviewImg) {
                        var newPreview = document.getElementById("apply-preview");
                        newPreview.innerHTML = "";
                        oPreviewImg = document.createElement('img');
                        newPreview.appendChild(oPreviewImg);
                        oPreviewImg.style.width = 200+"px";
                    }
                    oPreviewImg.src = oFREvent.target.result;
                };
                return function() {
                    var aFiles = document.getElementById("apply").files;
                    if (aFiles.length === 0) {
                        return;
                    }
                    if (!rFilter.test(aFiles[0].type)) {
                        alert("你必须选择一个图片!");
                        return;
                    }
                    if((aFiles[0].size/1024).toFixed(2) > 500){
                        alert("您选择的图片大于500kb，请重新选择。");
                        return;
                    }
                    oFReader.readAsDataURL(aFiles[0]);
                }
            }
        })();

        var imgSelect = document.getElementById("headImg");
        var loadImageFile = (function () {
            if (window.FileReader) {
                var oPreviewImg = null,
                        oFReader = new window.FileReader(),
                        rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
                oFReader.onload = function (oFREvent) {
                    if (!oPreviewImg) {
                        var newPreview = document.getElementById("imgBox");
                        oPreviewImg = document.createElement('img');
                        newPreview.appendChild(oPreviewImg);
                    }
                    oPreviewImg.src = oFREvent.target.result;
                };
                return function () {
                    var aFiles = document.getElementById("headImg").files;
                    if (aFiles.length === 0) {
                        return;
                    }
                    if (!rFilter.test(aFiles[0].type)) {
                        alert("你必须选择一个图片!");
                        return;
                    }
                    if((aFiles[0].size/1024).toFixed(2) > 500){
                        alert("您选择的图片大于500kb，请重新选择。");
                        return;
                    }
                    oFReader.readAsDataURL(aFiles[0]);
                }
            }
        })();
    </script>
@endsection