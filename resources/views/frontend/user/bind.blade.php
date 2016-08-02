@extends("frontend.layouts.master")

@section("content")
    <!-- bindinfo -->
    <div class="bindinfo">
        <div class="content">
            <div class="infoList">
                <form action="{{ route('frontend.user.profile.bind') }}" method="post">
                    <div class="infoListLeft">
                        <div class="uploadImg">
                            <input type="file" accept="image/*" name="headImg" id="headImg" onchange="loadImageFile()"/>
                            <label for="headImg">
                                <div class="imgBox" id="imgBox">
                                </div>
                            </label>
                            <h4>上传头像<span>*</span> : </h4>
                        </div>
                    </div>
                    <div class="infoListRight">
                        <p>真实姓名<input type="type" name="name" id="realName" value=""/><span>*</span></p>
                        <p>身份证号<input type="type" name="id_number" id="idnumber" value=""/><span>*</span></p>
                        <div class="row">
                            <p>用户类型</p>
                            <div class="radioitem">
                                <input type="radio" name="type" id="teashow" value="教师" checked="checked"/><label
                                        for="teashow">教师</label>
                            </div>
                            <div class="radioitem">
                                <input type="radio" name="type" id="stushow" value="学生"/><label
                                        for="stushow">学生</label>
                            </div>
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
                        <p>所在大学<input type="text" name="university" id="school" value=""/><span>*</span></p>
                        <p>办公电话<input type="text" name="tel_work" id="telephone" value=""/><span>*</span></p>
                        <p>绑定手机<input type="text" name="tel" id="mobilephone" value=""/><span>*</span></p>
                        <p>绑定邮箱<input type="email" name="email" id="email" value=""/><span>*</span></p>
                        {!! csrf_field() !!}
                        <input type="submit" name="sub" id="sub" class="submitBtn" value="提交"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- bindinfo -->
@endsection

@section('after-scripts-end')
    {!! Html::script('//cdn.bootcss.com/distpicker/1.0.4/distpicker.data.min.js') !!}}
    {!! Html::script('//cdn.bootcss.com/distpicker/1.0.4/distpicker.min.js') !!}}
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