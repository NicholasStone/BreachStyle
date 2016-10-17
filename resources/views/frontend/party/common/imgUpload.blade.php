<div class="row">
    <h4>上传报名表<span>*</span> : </h4>
    <p style="color: red; margin-bottom: 5px">请不要上传大于3M的图片</p>
    <input type="file" name="apply" id="apply" accept="image/*" class="casePreview" onchange="loadImageFile1()"
           value="{{ old('apply') }}"/>
    <label for="apply" id="apply-preview">
        <span>添加图片</span>
    </label>
    <p class="notes">下载活动报名表，填写完成并由高校党委主管部门盖章后，拍照或扫描成jpg格式，文件命名为"报名表.jpg"提交到活动官网。推荐成果需由学校审核后统一报送，每类成果限报两项。</p>
</div>
<div class="row">
    <h4>上传预览图<span>*</span> : </h4>
    <p style="color: red; margin-bottom: 5px">请不要上传大于3M的图片</p>
    <input type="file" name="img" id="img" accept="image/*" class="casePreview" onchange="loadImageFile2()" value="{{ old('img') }}"/>
    <label for="img" id="img-preview">
        <span>添加图片</span>
    </label>
    <p class="notes">支持jpg/png格式，RGB模式,最多上传1张图片，不要在图片上放置无关的东西</p>
</div>
<script type="text/javascript">
    var loadImageFile1 = (function () {
        if (window.FileReader) {
            var oPreviewImg = null,
                    oFReader = new window.FileReader(),
                    rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
            oFReader.onload = function (oFREvent) {
                if (!oPreviewImg) {
                    var newPreview = document.getElementById("apply-preview");
                    newPreview.innerHTML = "";
                    oPreviewImg = document.createElement('img');
                    newPreview.appendChild(oPreviewImg);
                    oPreviewImg.style.width = 200 + "px";
                }
                oPreviewImg.src = oFREvent.target.result;
            };
            return function () {
                var aFiles = document.getElementById("apply").files;
                if (aFiles.length === 0) {
                    return;
                }
                if (!rFilter.test(aFiles[0].type)) {
                    alert("你必须选择一个图片!");
                    return;
                }
                if((aFiles[0].size/1024).toFixed(2) > 500){
                    alert("您选择的图片大于500kb，请重新选择。");
                    return;
                }
                oFReader.readAsDataURL(aFiles[0]);
            }
        }
    })();
    var loadImageFile2 = (function () {
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
                var aFiles = document.getElementById("img").files;
                if (aFiles.length === 0) {
                    return;
                }
                if (!rFilter.test(aFiles[0].type)) {
                    alert("你必须选择一个图片!");
                    return;
                }
                if((aFiles[0].size/1024).toFixed(2) > 500){
                    alert("您选择的图片大于500kb，请重新选择。");
                    return;
                }
                oFReader.readAsDataURL(aFiles[0]);
            }
        }
    })();

</script>