@extends("frontend.layouts.master")

@section("after-styles-end")
    {!! Html::style(asset('css/frontend/create.css')) !!}
    {!! Html::style(asset('css/frontend/formcheck.css')) !!}
@endsection

@section("content")
    <!-- createDepart -->
    <div class="create">
        <div class="content">
            <div class="crtDepart">
                <form action="{{ route('frontend.branch.edit', $id)}}" method="post" enctype="multipart/form-data"
                      id="application-form">
                    {!! csrf_field() !!}
                    <div class="uploadImg">
                        <input type="file" accept="image/*" name="avatar" id="headImg" value="{{ $avatar }}"
                               onchange="preview(this, $('#cover'))"/>
                        <label for="headImg">
                            <div class="imgBox" id="imgBox">
                                <img src="{{ asset($avatar) }}" alt="支部配图" id="cover" onclick="$('#headImg').click()">
                            </div>
                        </label>
                        <h4>党支部配图<span>*</span> : </h4>
                    </div>
                    <div class="row">
                        <div>
                            <h4>党支部名称<span>*</span> : </h4>
                            <input type="text" name="name" style="width:40em" id="departName" placeholder="请输入党支部名称"
                                   class="departName"
                                   required value="{{ $name }}"/>
                        </div>
                        <div class="status"></div>
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
                        <div class="status"></div>
                    </div>
                    <div class="row">
                        <h4>党支部书记简介<span>*</span> : </h4>
                        <span>
                        <textarea class="introduce" oninput="wordChange1()" id="intro" name="secretary_summary"
                                  style="width: 50%" required>{{ $secretary_summary }}</textarea>
                            </span>
                        <span class="status"></span>
                        <p class="count">还可以输入<span id="word">100</span>字</p>
                    </div>
                    <div class="row">
                        <h4>党员人数<span>*</span> : </h4>
                        <span>
                        <input type="text" name="total_membership" id="people" class="people"
                               value="{{ $total_membership }}" required/>
                            </span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
                        <h4>手机号<span>*</span> : </h4>
                        <span>
                        <input type="text" name="tel" id="mobilePhone" class="mobile" value="{{ $tel }}" required/>
                            </span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
                        <h4>通讯地址<span>*</span> : </h4>
                        <span>
                        <input type="text" name="address" id="address" class="address" value="{{ $address }}" required/>
                            </span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
                        <h4>党支部摘要<span>*</span> : </h4>
                        <span>
                        <textarea class="introduce" oninput="wordChange2()" id="summary" name="summary"
                                  required>{{ $summary }}</textarea>
                            </span>
                        <span class="status"></span>
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
                        <input type="file" name="apply" id="apply-img" hidden accept="image/jpeg,image/png"
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
        function imgAttr(imgUrl) {
            var tmpImg = new Image;
            tmpImg.src = imgUrl;
            return tmpImg;
        }
        var preview = function (inp, img) {
            if ((inp.files[0].size / 1024).toFixed(2) > 500) {
                swal("抱歉", "您选择的图片大于500kb，请重新选择。", "error");
                inp.value = null;
                return;
            }
            var objUrl = getObjectURL(inp.files[0]);
            var tmp = imgAttr(objUrl);
            tmp.onload = function () {
                if (tmp.width > 1000 && tmp.height > 80) {
                    swal("抱歉", "您选择的图片尺寸过大！(请选择宽度小于1000像素，高度小于1500像素的图片！)", 'error');
                    inp.value = null;
                    return;
                }
            };
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
    @include('frontend.party.common.validate',[
        'editor' => 'true',
        'rules' => [
            'tel' => [
                'mobile' => 'true'
            ]
        ],
        'messages' => [
            'tel' => [
                'mobile' => '(请填入正确的手机号)'
            ]
        ]
    ])
@endsection