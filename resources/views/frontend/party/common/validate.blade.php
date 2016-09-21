<div class="submitBtn">
    <input type="submit" name="submit" id="submit" value="确认提交"/>
</div>
<script>
    $("#application-form").submit(function (e) {
        var apply = $("#apply");
        var img = $("#img");
        var str = CKEDITOR.instances.editor.getData();
        str = str.replace("<br />", "");
        str = str.replace("<br>", "");
        str = str.replace('/(^/s*)|(/s*$)/g', "");
        if (!(apply.val() && img.val() && str)) {
            e.preventDefault();
            var alertMsg = apply.val() == "" ? '请上传申请图片' : '';
            alertMsg += img.val() == "" ? '\n请上传封面' : "";
            alertMsg += str == "" ? '\n请填写说明或简介' : '';
            sweetAlert('请上传图片', alertMsg, 'error');
        }
    })
</script>