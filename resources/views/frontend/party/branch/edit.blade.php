@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style(asset('css/frontend/create.css')) !!}
@endsection

@section("content")
    <!-- createDepart -->
    <div class="create">
        <div class="content">
            <div class="crtDepart">
                <form action="{{ route('frontend.branch.edit', $id)}}" method="post" enctype="multipart/form-data"
                      id="application-form">
                    {!! csrf_field() !!}
                    <div class="uploadImg" onclick="$('#headImg').click()">
                        <input type="file" accept="image/*" name="avatar" id="headImg" value="{{ $avatar }}"
                               onchange="preview(this, $('#cover'))"/>
                        <label for="headImg">
                            <div class="imgBox" id="imgBox">
                                <img src="{{ asset($avatar) }}" alt="支部配图" id="cover">
                            </div>
                        </label>
                        <h4>党支部配图<span>*</span> : </h4>
                    </div>
                    <div class="row">
                        <h4>党支部名称<span>*</span> : </h4>
                        <input type="text" name="name" id="departName" placeholder="请输入党支部名称" class="departName"
                               required value="{{ $name }}"/>
                    </div>
                    <div class="row">
                        <h4>党支部类型:</h4>
                        <div class="radioitem">
                            <input type="radio" name="type" id="teashow" value="教师党支部" readonly
                                   @if($type == "教师党支部") checked @endif/><label for="teashow">教师党支部</label>
                        </div>
                        <div class="radioitem">
                            <input type="radio" name="type" id="stushow" value="学生党支部" readonly
                                   @if($type == "学生党支部") checked @endif/><label for="stushow">学生党支部</label>
                        </div>
                    </div>
                    <div class="row">
                        <h4>党支部书记简介<span>*</span> : </h4>
                        <textarea class="introduce" oninput="wordChange1()" id="intro" name="secretary_summary"
                                  style="width: 50%" required>{{ $secretary_summary }}</textarea>
                        <p class="count">还可以输入<span id="word">100</span>字</p>
                    </div>
                    <div class="row">
                        <h4>党员人数<span>*</span> : </h4>
                        <input type="text" name="total_membership" id="people" class="people"
                               value="{{ $total_membership }}" required/>
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
                        <textarea class="introduce" oninput="wordChange2()" id="summary" name="summary"
                                  required>{{ $summary }}</textarea>
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
    <script src="/vendor/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('detail', {
            language: 'zh-cn',
            uploadUrl: '{{ route("frontend.branch.image.drag") }}?_token={{ csrf_token() }}',
            filebrowserUploadUrl: '{{ route("frontend.branch.image") }}?_token={{ csrf_token() }}'
        });
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