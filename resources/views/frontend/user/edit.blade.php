@extends("frontend.layouts.master")

@section('after-styles-end')
    {!! Html::style(asset('css/frontend/personal.css')) !!}
    {!! Html::style(asset('css/frontend/formcheck.css')) !!}
@endsection

@section("content")
    <!-- bindinfo -->
    <div class="bindinfo">
        <div class="content">
            <div class="infoList">
                <form method="post" action="{{ route("frontend.user.profile.update") }}" enctype="multipart/form-data"
                      id="application-form">
                    {!! csrf_field() !!}
                    <div class="infoListLeft">
                        <div class="uploadImg">
                            <input type="file" accept="image/jpeg,image/png" name="avatar" id="headImg"
                                   onchange="preview(this,$('#cover'))"
                                   class="input"/>
                            <label for="headImg">
                                <div class="imgBox" id="imgBox">
                                    <img src="{{ asset($user->avatar) }}" alt="点击更换图片" width="600" height="auto"
                                         id="cover"
                                         onclick="$('#cover-img').click()">
                                </div>
                            </label>
                            <div style="color:red;margin-top: 50px;">
                                图片大小不要超过500KB 。并且尺寸不大于 1000px &times; 1500px。
                            </div>
                        </div>
                    </div>
                    <div class="infoListRight">
                        <div class="Row">
                            <p>
                                真实姓名<input type="text" name="name" id="name" value="{{ $user->name  }}"/><span>*</span>
                            </p>
                        </div>
                        <div class="Row">
                            <p>身份证号<input type="text" name="id_number" id="id_number"/><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
                        <small>处于保护隐私目的身份证号不在此显示，如需修改请写入新身份证号即可</small>
                        @unless($user->branch_id)
                            <div class="row">
                                <p>用户类型</p>
                                <div class="radioitem">
                                    <input class="input" type="radio" name="type" id="teashow" value="教师"/>
                                    <label for="teashow">教师</label>
                                </div>
                                <div class="radioitem">
                                    <input class="input" type="radio" name="type" id="stushow" value="学生"/>
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
                            <div class="Row">
                                <p>
                                    所在高校
                                    <select name="university" id="school"
                                            style="width: 120px;height: 32px;margin-left: 15px" class="input">
                                    </select><span>*</span>
                                </p>
                            </div>
                        @endunless
                        <div class="Row">
                            <p>
                                办公电话
                                <input type="text" name="tel_work" id="telephone"
                                       value="{{ $user->tel_work }}"/><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
                        <small>可填写自己常用的手机号</small>
                        <div class="Row">
                            <p>
                                绑定手机
                                <input type="text" name="tel" id="mobilephone" value="{{ $user->tel }}"/><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
                        <div class="Row">
                            <p>
                                绑定邮箱
                                <input type="text" name="email" id="email" value="{{ $user->email }}"/><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
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
    @include('frontend.party.common.validate',[
        "rules" => [
            'id_number'=> [
                'isIdCardNo' => true,
            ],
            'tel' => [
                'mobile' => true,
            ],
            'tel_work'=>[
                'isTel' => true
            ],
            'email' => [
                'email' => true
            ]
        ],
        "messages" => [
            'id_number' => [
                 'isIdCardNo' => "(请填写正确的身份证号码)",
            ],
            'tel' => [
                'mobile' => "(请填写正确的手机号)",
            ],
            'tel_work' => [
                'isTel'=>"(请填写正确的号码)"
            ],
            'email' => [
                'email' => '(请填入正确的电子邮箱)'
            ]
        ]
    ])
    <script type="text/javascript">
                @unless($user->branch_id)
        var province = $("#province1");
        $(function () {
            $("#province1 option[value={{ $user->province }}]").attr('selected', 'selected').trigger("change");
            $("#city1 option[value={{ $user->city }}]").attr('selected', 'selected');
            $("input[name=type][value={{ $user->type }}]").attr('checked', 'checked');
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
                @endunless
        var preview = function (inp, img) {
                    var file = inp.files[0];
                    if (file.size / 1024 > 500) {
                        swal('抱歉', '图片文件大小超过500kB', 'error');
                        inp.value = null;
                        return;
                    }
                    var objUrl = getObjectURL(file);
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