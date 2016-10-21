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