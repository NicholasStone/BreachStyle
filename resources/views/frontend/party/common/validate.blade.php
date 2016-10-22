{{ Html::script('//cdn.bootcss.com/jquery-validate/1.15.1/jquery.validate.js') }}
<script>
//    $("#application-form").submit(function (e) {
//        var apply = $("#apply");
//        var img = $("#img");
//        var str = CKEDITOR.instances.editor.getData();
//        str = str.replace("<br />", "");
//        str = str.replace("<br>", "");
//        str = str.replace('/(^/s*)|(/s*$)/g', "");
//        if (!(apply.val() && img.val() && str)) {
//            e.preventDefault();
//            var alertMsg = apply.val() == "" ? '请上传申请图片' : '';
//            alertMsg += img.val() == "" ? '\n请上传封面/预览图' : "";
//            alertMsg += str == "" ? '\n请填写说明或简介' : '';
//            sweetAlert('完整填写所有信息', alertMsg, 'error');
//        }
//    })
    /*表单验证-start*/
    $.validator.setDefaults({
        ignore: []
    });
    $("#application-form").validate({
        rules: {!! json_encode($rules) !!},
        messages: {!! json_encode($messages) !!},
        // the errorPlacement has to take the table layout into account
        errorPlacement: function(error, element) {
            if(element.is(":radio"))
                error.appendTo(element.parent().next().next());
            else if(element.is(":checkbox"))
                error.appendTo(element.next());
            else
                error.appendTo(element.parent().next());
        },
        // set this class to error-labels to indicate valid fields
        success: function(label) {
            // set   as text for IE
            label.html(" ").addClass("checked");
        },
        highlight: function(element, errorClass) {
            $(element).parent().next().find("." + errorClass).removeClass("checked");
        }
    });
    /*表单验证-end*/
</script>