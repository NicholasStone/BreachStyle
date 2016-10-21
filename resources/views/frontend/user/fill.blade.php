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
                            <span style="color:red;">图片大小不要超过500KB , 此图片将显示在 <b> 个人信息页 </b> , 如果您创建了支部，此图片将显示在支部首页的 <b> 支部书记位置 </b></span>
                        </div>
                    </div>
                    <div class="infoListRight">
                        <p>真实姓名<input class="input" type="text" name="name" id="realName" required
                                      value="{{ old('name') }}"/><span>*</span></p>
                        <p>身份证号<input class="input" type="text" name="id_number" id="idnumber" required
                                      value="{{ old('id_number') }}"/><span>*</span>
                        </p>
                        <div class="row">
                            <p>用户类型</p>
                            <div class="radioitem">
                                <input class="input" type="radio" name="type" id="teashow" value="教师"
                                       @if(old('type')=='教师') checked @endif/>
                                <label for="teashow">教师</label>
                            </div>
                            <div class="radioitem">
                                <input class="input" type="radio" name="type" id="stushow" value="学生"
                                       @if(old('type')=='学生') checked @endif/>
                                <label for="stushow">学生</label>
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
                        <p><label for="school">所在高校</label>
                            <select name="university" id="school" style="width: 120px;height: 32px;margin-left: 15px"
                                    class="input">
                            </select><span>*</span>
                        </p>
                        <p>
                            <label for="tel_work">办公电话</label><input class="input" type="tel" name="tel_work"
                                                                     id="tel_work" required
                                                                     value="{{ old('tel_work') }}"/><span>*</span>可填写自己常用的手机号
                        </p>
                        <p>
                            <label for="tel">绑定手机</label><input class="input" type="tel" name="tel" id="tel" required
                                                                value="{{ old('tel') }}"/><span>*</span>
                        </p>
                        <p>
                            <label for="email">绑定邮箱</label><input class="input" type="email" name="email" id="email"
                                                                  required value="{{ old('email') }}"/><span>*</span>
                        </p>
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
                html: true,
                text: "提交信息创建支部后，您的<b style='color:red'>用户类型、所在城市及所在高校</b>将<b style='color:red'><br>不能修改</br> .",
                type: "info",
                showCancelButton: true,
                cancelButtonText: "取消",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "确认提交"
            }, function () {
                $("#submit-button").click();
            })
        });
        var province = $("#province1");
        $(function () {
            @if(old('province'))
            $("#province1 option[value={{ old('province') }}]").attr('selected', 'selected').trigger("change");
            $("#city1 option[value={{ old('city') }}]").attr('selected', 'selected');
            @endif
        getUniversity();
        });
        province.on("change", function () {
            getUniversity();
        });
        var getUniversity = function () {
            $.ajax({
                url: "{{ route('sso.universities') }}",
                method: 'get',
                data: {
                    province: province.val(),
                    _token: "{{ csrf_token() }}"
                },
                success: function (data) {
                    var school = $("#school");
                    school.empty();
                    school.append($("<option>").text("—— 学校 ——").attr('selected', 'selected').attr('disabled', 'disabled'));
                    $.each(data, function (index, val) {
                        school.append($("<option>").val(val.name).text(val.name));
                    });
                    @if(old('province'))
                    $("#school option[value={{ old('university') }}]").attr('selected', 'selected');
                    @endif
                }
            });
        };

        var validate = function () {
            var validate = true;
            if ($("input[type=radio][name=type]:checked").length == 0) {
                validate = false;
            }
            $(".input").each(function () {
                if ($(this).val() == "" || $(this).val() == null) {
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
                    if ((aFiles[0].size / 1024).toFixed(2) > 500) {
                        swal("注意", "您上传的图片大于500KB", "error");
                        imgSelect.value = null;
                        return;
                    }
                    oFReader.readAsDataURL(aFiles[0]);
                }
            }
        })();
    </script>
@endsection