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
                <form id="signupform" autocomplete="off" method="post" action="{{ route("sso.complete") }}"
                      enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="infoListLeft">
                        <div class="uploadImg">
                            <input type="file" style="display: none" accept="image/jpeg,image/png"
                                   name="avatar" id="headImg" onchange="loadImageFile()"/>
                            <label for="headImg">
                                <div class="imgBox" id="imgBox"></div>
                            </label>
                            <h4>上传头像<span>*</span> : </h4>
                            <div style="color:red;margin-top: 50px;">
                                图片大小不要超过500KB ，并且尺寸不大于 1000px &times; 1500px。
                                <br>
                                此图片将显示在 <b> 个人信息页 </b> 。
                                如果您创建了支部，此图片将显示在支部首页的 <b> 支部书记位置 </b>。
                                <br>
                                提交信息创建支部后，您的<b>用户类型、所在城市及所在高校</b>将<b>不能修改</b>。
                            </div>
                        </div>
                        <span class="status head"></span>
                    </div>
                    <div class="infoListRight">
                        <div class="Row">
                            <p>
                                真实姓名<input type="text" name="name" id="name" value="{{ old('name') }}"/><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
                        <div class="Row">
                            <p>身份证号<input type="text" name="id_number" id="id_number" value="{{ old('id_number') }}"/><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
                        <div class="row">
                            <p>用户类型</p>
                            <div class="radioitem">
                                <input type="radio" name="type" id="teashow" value="教师"/><label
                                        for="teashow">教师</label>
                            </div>
                            <div class="radioitem">
                                <input type="radio" name="type" id="stushow" value="学生"/><label
                                        for="stushow">学生</label>

                            </div>
                            <span style="margin-left: 54px; color: #e34e3f;line-height: 3em">*</span>
                            <small class="status"></small>
                        </div>
                        <div class="row" data-toggle="distpicker">
                            <p>所在城市</p>
                            <div class="form-group">
                                <label class="sr-only" for="province1">省</label>
                                <select class="form-control" id="province1" name="province"></select>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="city1">市</label>
                                <select class="form-control" id="city1" name="city"></select>
                            </div>
                        </div>
                        <div class="Row">
                            <p>
                                所在高校
                                <select name="university" id="school" style="width: 120px;height: 32px;margin-left: 15px" class="input">
                                </select><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
                        <div class="Row">
                            <p>
                                办公电话
                                <input type="text" name="tel_work" id="telephone" value="{{ old('tel_work') }}"/><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
                        <small>可填写自己常用的手机号</small>
                        <div class="Row">
                            <p>
                                绑定手机
                                <input type="text" name="tel" id="mobilephone" value="{{ old('tel') }}"/><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
                        <div class="Row">
                            <p>
                                绑定邮箱
                                <input type="text" name="email" id="email" value="{{ old('email') }}"/><span>*</span>
                            </p>
                            <p class="status"></p>
                        </div>
                        <input type="submit" name="sub" id="submit" class="submitBtn" value="提交"/>
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
    {!! Html::script('//cdn.bootcss.com/jquery-validate/1.15.1/jquery.validate.min.js') !!}
    <script type="text/javascript">
        $(function () {
            /*表单验证-start*/
            $.validator.setDefaults({
                ignore: []
            });
            $.validator.addMethod("isIdCardNo", function (value, element) {
                return this.optional(element) || isIdCardNo(value);
            }, "请正确输入您的身份证号码");
            //增加身份证验证
            $.validator.addMethod("isTel", function (value, element) {
                var tel = /^\d{3,4}-?\d{7,9}$/; //电话号码格式010-12345678 、
                var mob = /^1[34578]\d{9}$/;
                return this.optional(element) || (tel.test(value)) || (mob.test(value));
            }, "请正确填写您的电话号码");
            $.validator.addMethod("mobile", function (value, element) {
                var length = value.length;
                var mobile = /^1[34578]\d{9}$/;
                return (length == 11 && mobile.exec(value)) ? true : false;
            }, "请正确填写您的手机号码");
            var form = $("#signupform");
            form.validate({
                rules: {
                    avatar: {
                        required: true
                    },
                    type: {
                        required: true
                    },
                    name: {
                        required: true
                    },
                    id_number: {
                        required: true,
                        isIdCardNo: true
                    },
                    university: {
                        required: true
                    },
                    tel_work: {
                        required: true,
                        isTel: true
                    },
                    tel: {
                        required: true,
                        mobile: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    avatar: {
                        required: "(请上传头像)"
                    },
                    type: {
                        required: "(请选择类型)"
                    },
                    name: {
                        required: "(真实姓名不能为空)"
                    },

                    id_number: {
                        required: "(请填写身份证号码)",
                        isIdCardNo: "(请正确填写身份证号码)"
                    },
                    university: {
                        required: "(请选择学校)"
                    },
                    tel_work: {
                        required: "(请输入办公号码)",
                        isTel: "(请正确填写您的办公号码)"
                    },
                    tel: {
                        required: "(请输入手机号)",
                        minlength: "(确认手机不能小于11个字符)",
                        mobile: "(请正确填写您的手机号码)"
                    },
                    email: {
                        required: "(邮箱不能为空)",
                        email: "(邮箱格式不正确)"
                    }
                },
                // the errorPlacement has to take the table layout into account
                errorPlacement: function (error, element) {
                    if (element.is(":radio"))
                        error.appendTo(element.parent().next().next());
                    else if (element.is(":checkbox"))
                        error.appendTo(element.next());
                    else
                        error.appendTo(element.parent().next());
                },
                // set this class to error-labels to indicate valid fields
                success: function (label) {
                    // set   as text for IE
                    label.html(" ").addClass("checked");
                },
                highlight: function (element, errorClass) {
                    $(element).parent().next().find("." + errorClass).removeClass("checked");
                }
            });
            form.submit(function (e) {
                if (form.valid()) {
                    swal({
                        title: "正在提交",
                        text: "系统正在提交您所填写的信息，请稍后",
                        type: "info",
                        showCancelButton: false,
                        showConfirmButton: false,
                        allowEscapeKey:false
                    });
                }
            })
            function isIdCardNo(num) {
                var factorArr = [7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1];
                var parityBit = ["1", "0", "X", "9", "8", "7", "6", "5", "4", "3", "2"];
                var varArray = [];
                var intValue;
                var lngProduct = 0;
                var intCheckDigit;
                var intStrLen = num.length;
                var id_number = num;
                // initialize
                if ((intStrLen != 15) && (intStrLen != 18)) {
                    return false;
                }
                // check and set value
                for (i = 0; i < intStrLen; i++) {
                    varArray[i] = id_number.charAt(i);
                    if ((varArray[i] < '0' || varArray[i] > '9') && (i != 17)) {
                        return false;
                    } else if (i < 17) {
                        varArray[i] = varArray[i] * factorArr[i];
                    }
                }
                if (intStrLen == 18) {
                    //check date
                    var date8 = id_number.substring(6, 14);
                    if (isDate8(date8) == false) {
                        return false;
                    }
                    // calculate the sum of the products
                    for (i = 0; i < 17; i++) {
                        lngProduct = lngProduct + varArray[i];
                    }
                    // calculate the check digit
                    intCheckDigit = parityBit[lngProduct % 11];
                    // check last digit
                    if (varArray[17] != intCheckDigit) {
                        return false;
                    }
                } else { //length is 15
                    //check date
                    var date6 = id_number.substring(6, 12);
                    if (isDate6(date6) == false) {
                        return false;
                    }
                }
                return true;
            }

            function isDate6(sDate) {
                if (!/^[0-9]{6}$/.test(sDate)) {
                    return false;
                }
                var year, month, day;
                year = sDate.substring(0, 4);
                month = sDate.substring(4, 6);
                if (year < 1700 || year > 2500) return false
                if (month < 1 || month > 12) return false
                return true
            }

            function isDate8(sDate) {
                if (!/^[0-9]{8}$/.test(sDate)) {
                    return false;
                }
                var year, month, day;
                year = sDate.substring(0, 4);
                month = sDate.substring(4, 6);
                day = sDate.substring(6, 8);
                var iaMonthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
                if (year < 1700 || year > 2500) return false
                if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) iaMonthDays[1] = 29;
                if (month < 1 || month > 12) return false
                if (day < 1 || day > iaMonthDays[month - 1]) return false
                return true
            }

            /*表单验证-end*/
        });
        /*获取元素实际样式-start*/
        function imgAttr(imgUrl) {
            var tmpImg = new Image;
            tmpImg.src = imgUrl;
            return tmpImg;
        }
        /*获取元素实际样式-end*/
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
                    var temURL = window.URL.createObjectURL(aFiles[0]);
                    var tmp = imgAttr(temURL);
                    tmp.onload = function () {
                        var width = tmp.width;
                        var height = tmp.height;
                        if ((aFiles[0].size / 1024).toFixed(2) > 500) {
                            swal("抱歉", "您选择的图片大于500kb，请重新选择。", "error");
                            imgSelect.value = null;
                            return;
                        }
                        if (width > 1000 && height > 1500) {
                            swal("抱歉", "您选择的图片尺寸过大！(请选择宽度小于1000像素，高度小于1500像素的图片！)", "error");
                            return false;
                        }
                        if (aFiles.length === 0) {
                            return;
                        }
                        oFReader.readAsDataURL(aFiles[0]);
                    }
                }
            }
        })();
        var province = $("#province1");
        $(function () {
            @if(old('province'))
            $("#province1 option[value={{ old('province') }}]").attr('selected', 'selected').trigger("change");
            $("#city1 option[value={{ old('city') }}]").attr('selected', 'selected');
            $("input[name=type][value={{ old('type') }}]").attr('checked', 'checked');
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
    </script>
@endsection