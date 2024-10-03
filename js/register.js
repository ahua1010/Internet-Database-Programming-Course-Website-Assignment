$(document).ready(function ($) {
    $("#form1").validate({
        submitHandler: function (form) {
            form.submit();
        },
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                rangelength:[8,20]
            },
            pwd_check: {
                required: true,
                equalTo:"#password"
            },
            email: {
                required: true,
                email: true
            }
        },

        messages: { 
            username: {
                required: "必填"
            },
            password: {
                required: "必填",
                rangelength: $.validator.format("請輸入長度在8到20之間的字符串")

            },
            pwd_check: {
                required: "必填",
                equalTo:"與密碼不符"
            },
            email: {
                required: "必填",
                email: "請輸入正確的email格式"
            }
        }
    });
});