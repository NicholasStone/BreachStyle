{{ Html::script('//cdn.bootcss.com/jquery-validate/1.15.1/jquery.validate.js') }}
<script>
    var application = $("#application-form");
    @if($editor)
    application.submit(function (e) {
        if (CKEDITOR == undefined) {
            return;
        }
        var str = CKEDITOR.instances.editor.getData();
        str = str.replace("<br />", "");
        str = str.replace("<br>", "");
        str = str.replace('/(^/s*)|(/s*$)/g', "");
        if (!str) {
            e.preventDefault();
            alertMsg = str == "" ? '请填写简介' : '';
            sweetAlert('抱歉，您的输入有误', alertMsg, 'error');
        }
    });
    @endif
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
    application.validate({
        rules: {!! json_encode($rules) !!},
        messages: {!! json_encode($messages) !!},
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
                allowEscapeKey:false
            });
        }
    })
</script>