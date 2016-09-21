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
                <form action="{{ route('frontend.branch.edit', $id)}}" method="post" enctype="multipart/form-data" id="application-form">
                    {!! csrf_field() !!}
                    <div class="uploadImg" onclick="$('#headImg').click()">
                        <input type="file" accept="image/*" name="avatar" id="headImg" value="{{ $avatar }}" onchange="preview(this, $('#cover'))"/>
                        <label for="headImg" >
                            <div class="imgBox" id="imgBox">
                                <img src="{{ asset($avatar) }}" alt="支部配图" id="cover">
                            </div>
                        </label>
                        <h4>党支部配图<span>*</span> : </h4>
                    </div>
                    <div class="row">
                        <h4>党支部名称<span>*</span> : </h4>
                        <input type="text" name="name" id="departName" placeholder="请输入党支部名称" class="departName" required value="{{ $name }}"/>
                    </div>
                    <div class="row">
                        <h4>党支部书记简介<span>*</span> : </h4>
                        <textarea class="introduce" oninput="wordChange1()" id="intro" name="secretary_summary" style="width: 50%" required>{{ $secretary_summary }}</textarea>
                        <p class="count">还可以输入<span id="word">100</span>字</p>
                    </div>
                    <div class="row">
                        <h4>党员人数<span>*</span> : </h4>
                        <input type="text" name="total_membership" id="people" class="people" value="{{ $total_membership }}" required/>
                    </div>
                    <div class="row">
                        <h4>手机号<span>*</span> : </h4>
                        <input type="text" name="tel" id="mobilePhone" class="mobile" value="{{ $tel }}" required/>
                    </div>
                    <div class="row">
                        <h4>通讯地址<span>*</span> : </h4>
                        <input type="text" name="address" id="address" class="address" value="{{ $address }}" required/>
                    </div>
                    <div class="row">
                        <h4>党支部摘要<span>*</span> : </h4>
                        <textarea class="introduce" oninput="wordChange2()" id="summary" name="summary" required>{{ $summary }}</textarea>
                    </div>
                    <div class="row">
                        <h4>党支部情况介绍<span>*</span> :</h4>
                        <div id="editor">
                            <textarea id="editor" name="detail" required>
                                {{ $detail }}
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <h4>党支部认证表<span>*</span> : </h4>
                        <input type="file" name="apply_img" id="apply-img" hidden
                               onchange="preview(this, $('#apply'))">
                        <img src='{{ asset($apply_img) }}' alt="点击更换图片" width="600" height="auto" id="apply"
                             onclick="$('#apply-img').click()">
                    </div>
                    <div class="submitBtn">
                        <input type="submit" name="submit" id="submit" value="确认修改"/>
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
        var preview = function (inp, img) {
            var objUrl = getObjectURL(inp.files[0]);
            if (objUrl) {
                img.attr("src", objUrl);
            }
        };
        function getObjectURL(file) {
            var url = null;
            if (window.createObjectURL != undefined) { // basic
                url = window.createObjectURL(file);
            } else if (window.URL != undefined) { // mozilla(firefox)
                url = window.URL.createObjectURL(file);
            } else if (window.webkitURL != undefined) { // webkit or chrome
                url = window.webkitURL.createObjectURL(file);
            }
            return url;
        }
        $("#application-form").submit(function (e) {
            var str = CKEDITOR.instances.editor.getData();
            str = str.replace("<br />", "");
            str = str.replace("<br>", "");
            str = str.replace('/(^/s*)|(/s*$)/g', "");
            if (!(apply.val() && avatar.val() && str)) {
                e.preventDefault();
                var alertMsg = str == "" ? '\n请填写简介' : '';
                sweetAlert('请上传图片', alertMsg, 'error');
            }
        });
//        var loadImageFile = (function () {
//            if (window.FileReader) {
//                var oPreviewImg = null,
//                        oFReader = new window.FileReader(),
//                        rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
//                oFReader.onload = function (oFREvent) {
//                    if (!oPreviewImg) {
//                        var newPreview = document.getElementById("imgBox");
//                        oPreviewImg = document.createElement('img');
//                        newPreview.appendChild(oPreviewImg);
//                    }
//                    oPreviewImg.src = oFREvent.target.result;
//                };
//                return function () {
//                    var aFiles = document.getElementById("headImg").files;
//                    if (aFiles.length === 0) {
//                        return;
//                    }
//                    if (!rFilter.test(aFiles[0].type)) {
//                        alert("你必须选择一个图片!");
//                        return;
//                    }
//                    oFReader.readAsDataURL(aFiles[0]);
//                }
//            }
//        })();
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
    </script>
@endsection