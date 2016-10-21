@extends("frontend.layouts.master")

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/personal.css')) !!}
@endsection

@section("content")
    <!-- bindinfo -->
    <div class="bindinfo">
        <div class="content">
            <div class="infoList">
                <form method="post" action="{{ route("frontend.user.profile.update") }}" enctype="multipart/form-data"
                      id="fill-form">
                    {!! csrf_field() !!}
                    <div class="infoListLeft">
                        <div class="uploadImg">
                            <input type="file" accept="image/*" name="avatar" id="headImg" onchange="preview(this,$('#cover'))"
                                   class="input" />
                            <label for="headImg">
                                <div class="imgBox" id="imgBox">
                                    <img src="{{ asset($user->avatar) }}" alt="点击更换图片" width="600" height="auto" id="cover"
                                         onclick="$('#cover-img').click()">
                                </div>
                            </label>
                            <span style="color:red;">图片大小不要超过500KB</span>
                        </div>
                    </div>
                    <div class="infoListRight">
                        <p>真实姓名<input class="input" type="text" name="name" id="realName" 
                                      value="{{ $user->name }}"/><span>*</span></p>
                        <p>身份证号<input class="input" type="text" name="id_number" id="idnumber" 
                                      value="{{ $user->id_number }}"/><span>*</span>
                            <small>出于保护隐私目的不显示身份证号，如需修改请直接输入信息</small>
                        </p>
                        @unless($user->branch_id)
                            <div class="row">
                                <p>用户类型</p>
                                <div class="radioitem">
                                    <input class="input" type="radio" name="type" id="teashow" value="教师"
                                           @if($user->type == '教师') checked @endif/>
                                    <label for="teashow">教师</label>
                                </div>
                                <div class="radioitem">
                                    <input class="input" type="radio" name="type" id="stushow" value="学生"
                                           @if($user->type == '学生') checked @endif/>
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
                            <p><label for="school">所在大学</label>
                                <select name="university" id="school" style="width: 120px;height: 32px;margin-left: 15px"
                                        class="input">
                                </select><span>*</span>
                            </p>
                        @endunless
                        <p>
                            <label for="tel_work">办公电话</label>
                            <input class="input" type="tel" name="tel_work" id="tel_work" 
                                   value="{{ $user->tel_work }}"/><span>*</span>
                            <small>可填写自己常用的手机号</small>
                        </p>
                        <p>
                            <label for="tel">绑定手机</label>
                            <input class="input" type="tel" name="tel" id="tel" 
                                   value="{{ $user->tel }}"/><span>*</span>
                        </p>
                        <p>
                            <label for="email">绑定邮箱</label>
                            <input class="input" type="email" name="email" id="email"
                                    value="{{ $user->email }}"/><span>*</span>
                        </p>
                        <input type="submit" id="submit" class="submitBtn" value="提交"/>
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
        var province = $("#province1");
        $(function () {
            $("#province1 option[value={{ $user->province }}]").attr('selected', 'selected').trigger("change");
            $("#city1 option[value={{ $user->city }}]").attr('selected', 'selected');
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
                    $("#school option[value={{ $user->university }}]").attr('selected', 'selected');
                }
            });
        };
    </script>
    <script type="text/javascript">
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
    </script>
@endsection