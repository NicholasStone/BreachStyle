<div class="row">
    <h4>报名表<span>*</span> : </h4>
    <input type="file" name="apply" id="apply-img" hidden accept="image/*"
           onchange="preview(this, $('#apply'))">
    <img src="{{ asset($apply_hash) }}" alt="点击更换图片" width="600" height="auto" id="apply"
         onclick="$('#apply-img').click()">
</div>
<div class="row">
    <h4>预览图<span>*</span> : </h4>
    <input type="file" name="img" id="cover-img" hidden accept="image/*"
           onchange="preview(this,$('#cover'))">
    <img src="{{ asset($img_hash) }}" alt="点击更换图片" width="600" height="auto" id="cover"
         onclick="$('#cover-img').click()">
</div>
<script type="text/javascript">
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
                return false;
            }
        };
        if (loadImg && objUrl) {
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