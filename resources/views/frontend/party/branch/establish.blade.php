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
                <form id="application-form" autocomplete="off" action="{{ route('frontend.branch.create') }}"
                      method="post"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="uploadImg">
							<span>
								<input type="file" accept="image/*" name="avatar" id="headImg"
                                       onchange="loadImageFile()"/>
								<label for="headImg">
								<div class="imgBox" id="imgBox"></div>
								</label>
								<h4>党支部配图<span>*</span> : </h4>
							</span>
                        <span class="status" id="picture"></span>
                    </div>
                    <div class="row">
							<span>
								<h4>党支部名称<span>*</span> : </h4>
							<input type="text" name="name" id="departName" placeholder="请输入党支部名称" class="departName"
                                   style="width: 30em"
                                   value="{{ old('name') }}"/>
							</span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
                        <h4>党支部类型:</h4>
                        <div class="radioitem">
                            <input type="radio" name="type" id="teashow" value="教师党支部"/><label
                                    for="teashow">教师党支部</label>
                        </div>
                        <div class="radioitem">
                            <input type="radio" name="type" id="stushow" value="学生党支部"/><label
                                    for="stushow">学生党支部</label>
                        </div>
                        <div class="status"></div>
                    </div>
                    <div class="row">
							<span>
								<h4>所在学校<span>*</span> : </h4>
							<input type="text" name="university" id="school" class="school" readonly style="width: 20em"
                                   value="{{ $user->university }}"/>
							</span>
                        <span class="status"></span>

                    </div>
                    <div class="row">
							<span>
								<h4>党支部书记名称<span>*</span> : </h4>
							<input type="text" name="secretary" id="leader" class="leader" readonly
                                   value="{{ $user->name }}"/>
							<span class="note">默认创建党支部者为党支部书记</span>
							</span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
							<span>
								<h4>党支部书记简介<span>*</span> : </h4>
                                <!--<textarea class="introduce" name="introduce" oninput="wordChange()" id="intro"></textarea>-->
							<textarea id="introduce" name="secretary_summary" maxlength="100"
                                      oninput="wordChange()">{{ old('secretary_summary') }}</textarea>
							<p class="tips" id="introduce-note">还可以输入<span id="word">100</span>字</p>
							</span>
                        <span class="status"></span>

                    </div>
                    <div class="row">
							<span>
								<h4>党员人数<span>*</span> : </h4>
							<input type="text" name="total_membership" id="people" class="people"
                                   value="{{ old('total_membership') }}"/>
							</span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
							<span>
								<h4>手机号<span>*</span> : </h4>
							<input type="text" name="tel" id="mobilePhone" class="mobile" value="{{ old('tel') }}"/>
							</span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
							<span>
								<h4>通讯地址<span>*</span> : </h4>
							<input type="text" name="address" id="address" class="address"
                                   value="{{ old('address') }}"/>
							</span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
                        <h4>党支部摘要<span>*</span> : </h4>
                        <div>
                        <textarea class="introduce" id="summary" name="summary"
                                  required>{{ old('summary') }}</textarea>
                        </div>
                        <div class="status"></div>
                    </div>
                    <div class="row">
                        <span>
                            <h4>党支部情况介绍<span>*</span> :</h4>
                            <div id="editor">
                            <textarea id="editor" name="detail" required>
                                {{ old('detail') ? old('detail') : '如需上传图片，请拖拽图片至此，右键单击已上传图片编辑'}}
                            </textarea>
                            </div>
                        </span>
                        <span class="status"></span>
                    </div>
                    <div class="row">
							<span>
								<h4>党支部认证表<span>*</span> : </h4>
								<input type="file" name="apply" id="departCertify" accept="image/*" class="casePreview"
                                       onchange="uploadCertify()"/>
								<label for="departCertify" id="img-preview">
								<span>添加图片</span>
								</label>
							</span>
                        <span class="status"></span>
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
    <script src="/vendor/ckeditor/ckeditor.js"></script>
    {{ Html::script('//cdn.bootcss.com/jquery-validate/1.15.1/jquery.validate.js') }}
    <script>
        @if (old('type'))
        $(function () {
            $("#application-form input[type=radio][value={{ old('type') }}]").attr('selected', 'selected');
        });
        @endif
        CKEDITOR.replace('detail', {
            language: 'zh-cn',
            uploadUrl: '{{ route("frontend.branch.image.drag") }}?_token={{ csrf_token() }}',
            filebrowserUploadUrl: '{{ route("frontend.branch.image") }}?_token={{ csrf_token() }}'
        });

        $.validator.setDefaults({
            ignore: []
        });
        $.validator.addMethod("mobile", function (value, element) {
            var length = value.length;
            var mobile = /^1[34578]\d{9}$/;
            return (length == 11 && mobile.exec(value)) ? true : false;
        }, "请正确填写您的手机号码");
        var application = $("#application-form");
        application.validate({
            rules: {
                avatar: {
                    required: true
                },
                name: {
                    required: true
                },
                type: {
                    required: true
                },
                summary: {
                    required: true
                },
                secretary_summary: {
                    required: true
                },
                total_membership: {
                    required: true,
                    digits: true
                },
                tel: {
                    required: true,
                    minlength: 11,
                    mobile: true
                },
                address: {
                    required: true
                },
                apply: {
                    required: true
                }
            },
            messages: {
                avatar: {
                    required: "*请上传配图"
                },
                name: {
                    required: "*请选择支部类型"
                },
                type: {
                    required: "*党支部名称不能为空"
                },
                summary: {
                    required: "*请填写党支部摘要"
                },
                secretary_summary: {
                    required: "*请填写支部书记简介"
                },
                total_membership: {
                    required: "*请填写党员人数",
                    digits: "*请填入合法的数字"
                },
                tel: {
                    required: "*请输入手机号",
                    minlength: "*确认手机不能小于11个字符",
                    mobile: "*请正确填写您的手机号码"
                },
                address: {
                    required: "*通讯地址不能为空"
                },
                apply: {
                    required: '*请选择认证表'
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
        /*表单验证-end*/
        application.submit(function (e) {
            if (application.valid()) {
                swal({
                    title: "正在提交",
                    text: "系统正在提交您所填写的信息，请稍后",
                    type: "info",
                    showCancelButton: false,
                    showConfirmButton: false,
                    allowEscapeKey: false
                });
            }
        })
        /*获取元素实际样式-start*/
        function imgAttr(imgUrl) {
            var tmpImg = new Image;
            tmpImg.src = imgUrl;
            return tmpImg;
        }
        /*获取元素实际样式-end*/
        function wordChange() {
            var intro = document.getElementById('introduce');
            var word = document.getElementById('word');
            var tips = document.getElementById('introduce-note');
            if (intro.value.length >= 100) {
                swal("抱歉", "超出字符限制", "error");
//                word.innerHTML = 0;
                tips.innerHTML = "<b style='color:red;'>已超出最大字数限制</b>";
            } else {
                tips.innerHTML = '还可以输入<span id="word">' + (100 - intro.value.length) + '</span>字';
            }
        }

        var uploadCertify = (function () {
            if (window.FileReader) {
                var oPreviewImg = null,
                    oFReader = new window.FileReader(),
                    rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
                oFReader.onload = function (oFREvent) {
                    if (!oPreviewImg) {
                        var newPreview = document.getElementById("img-preview");
                        newPreview.innerHTML = "";
                        oPreviewImg = document.createElement('img');
                        newPreview.appendChild(oPreviewImg);
                        oPreviewImg.style.width = 200 + "px";
                    }
                    oPreviewImg.src = oFREvent.target.result;
                };
                return function () {
                    var aFiles = document.getElementById("departCertify").files;
                    var temURL = window.URL.createObjectURL(aFiles[0]);
                    var tmp = imgAttr(temURL);
                    tmp.onload = function () {
                        var width = tmp.width;
                        var height = tmp.height;
                        if (width > 1000 && height > 80) {
                            swal("抱歉", "您选择的图片尺寸过大！(请选择宽度小于1000像素，高度小于1500像素的图片！)", 'error');
                            return false;
                        }
                        if (aFiles.length === 0) {
                            return;
                        }
                        if (!rFilter.test(aFiles[0].type)) {
                            swal("抱歉", "您必须选择一个文件", "error");
                            return;
                        }
                        if ((aFiles[0].size / 1024).toFixed(2) > 500) {
                            swal("抱歉", "您选择的图片大于500kb，请重新选择。", "error");
                            return;
                        }
                        oFReader.readAsDataURL(aFiles[0]);
                    }
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
                    var temURL = window.URL.createObjectURL(aFiles[0]);
                    var tmp = imgAttr(temURL);
                    tmp.onload = function () {
                        var width = tmp.width;
                        var height = tmp.height;
                        if (width > 1000 && height > 1500) {
                            swal("抱歉", "您选择的图片尺寸过大！(请选择宽度小于1000像素，高度小于1500像素的图片！)", 'error');
                            return false;
                        }
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
            }
        })();
    </script>
@endsection