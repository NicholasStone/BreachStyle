@extends("frontend.layouts.master")

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/personal.css')) !!}
@endsection

@section("content")
    <!-- bindinfo -->
    <div class="bindinfo">
        <div class="content">
            <div class="infoList">
                <form method="post" action="{{ route("sso.complete") }}" enctype="multipart/form-data" id="fill-form">
                    {!! csrf_field() !!}
                    <div class="infoListLeft">
                        <div class="uploadImg">
                            <input type="file" accept="image/*" name="avatar" id="headImg" onchange="loadImageFile()"
                                   class="input" required/>
                            <label for="headImg">
                                <div class="imgBox" id="imgBox">
                                </div>
                            </label>
                            <h4>上传头像<span>*</span> : </h4>
                        </div>
                    </div>
                    <div class="infoListRight">
                        <p>真实姓名<input class="input" type="text" name="name" id="realName" required/><span>*</span></p>
                        <p>身份证号<input class="input" type="text" name="id_number" id="idnumber" required/><span>*</span>
                        </p>
                        <div class="row">
                            <p>用户类型</p>
                            <div class="radioitem">
                                <input class="input" type="radio" name="type" id="teashow" value="教师"
                                       checked="checked"/><label
                                        for="teashow">教师</label>
                            </div>
                            <div class="radioitem">
                                <input class="input" type="radio" name="type" id="stushow" value="学生"/><label
                                        for="stushow">学生</label>
                            </div>
                        </div>
                        <div class="row" data-toggle="distpicker">
                            <p>所在城市</p>
                            <div class="form-group">
                                <label class="sr-only" for="province1">省</label>
                                <select class="form-control input" id="province1" name="province"></select>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="city1">市</label>
                                <select class="form-control input" id="city1" name="city"></select>
                            </div>
                        </div>
                        <p><label for="school">所在大学</label>
                            <select name="university" id="school" style="width: 120px;height: 32px;margin-left: 15px"
                                    class="input">
                                @foreach($universities as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select><span>*</span></p>
                        <p><label for="tel_work">办公电话</label><input class="input" type="tel" name="tel_work"
                                                                    id="tel_work"
                                                                    required/><span>*</span></p>
                        <p><label for="tel">绑定手机</label><input class="input" type="tel" name="tel" id="tel"
                                                               required/><span>*</span>
                        </p>
                        <p><label for="email">绑定邮箱</label><input class="input" type="email" name="email" id="email"
                                                                 required/><span>*</span></p>
                        <input type="button" id="submit" class="submitBtn" value="提交"/>
                        <button type="submit" id="submit-button" hidden></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- bindinfo -->
@endsection

@section('after-scripts-end')
    {!! Html::script('//cdn.bootcss.com/distpicker/1.0.4/distpicker.data.min.js') !!}
    {!! Html::script('//cdn.bootcss.com/distpicker/1.0.4/distpicker.min.js') !!}
    <script type="text/javascript">
        $('#submit').click(function () {
            if (!validate()) {
                swal("请正确填写所有信息", "注意", "error");
                return;
            }
            swal({
                title: "注意",
                text: "提交信息后，除姓名及工作电话外，其他信息无法更改",
                type: "info",
                showCancelButton: true,
                cancelButtonText: "取消",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "确认提交"
            }, function () {
                $("#submit-button").click();
            })
        });
        $('#province1').change(function () {
            $.ajax({
                url: "{{ route('sso.universities') }}",
                method: 'get',
                data: {
                    province: $("#province1").val(),
                    _token: "{{ csrf_token() }}"
                },
                success: function (data) {
                    var school = $("#school");
                    school.empty();
                    $.each(data, function (index, val) {
                        console.log(val);
                        school.append($("<option>").val(val.name).text(val.name));
                    });
                }
            })
        });
        var validate = function () {
            var validate = true;
            $(".input").each(function () {
                if ($(this).val() == "") {
                    validate = false;
                    return false;
                }
            });
            return validate;
        }
    </script>
    <script type="text/javascript">
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
                    oFReader.readAsDataURL(aFiles[0]);
                }
            }
        })();
    </script>
@endsection