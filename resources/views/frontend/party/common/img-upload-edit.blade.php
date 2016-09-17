<div class="row">
    <h4>报名表<span>*</span> : </h4>
    <input type="file" name="apply" id="apply-img" hidden
           onchange="preview(this, $('#apply'))">
    <img src="{{ asset($apply_hash) }}" alt="点击更换图片" width="600" height="auto" id="apply"
         onclick="$('#apply-img').click()">
    <p class="notes">
        下载活动报名表，填写完成并由高校党委主管部门盖章后，拍照或扫描成jpg格式，文件命名为"报名表.jpg"提交到活动官网。推荐成果需由学校审核后统一报送，每类成果限报两项。</p>
</div>
<div class="row">
    <h4>预览图<span>*</span> : </h4>
    <input type="file" name="img" id="cover-img" hidden onchange="preview(this,$('#cover'))">
    <img src="{{ asset($img_hash) }}" alt="点击更换图片" width="600" height="auto" id="cover"
         onclick="$('#cover-img').click()">
    <p class="notes">支持jpg/png格式，RGB模式,最多上传1张图片，不要在图片上放置无关的东西</p>
</div>
<script type="text/javascript">
    var preview = function (inp, img) {
        var objUrl = getObjectURL(inp.files[0]);
        console.log("objUrl = " + objUrl);
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