$(document).ready(function ($) {
    $("#form").validate({
        submitHandler: function (form) {
            form.submit();
        },
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 8
            },
            mail: {
                required: true,
                email: true
            }
        },

        messages: { 
            username: {
                required: "　必填"
            },
            password: {
                required: "　必填",
                minlength: "　最少8個字元"
            },
            mail: {
                required: "　必填",
                email: "　請輸入正確的email格式"
            }
        }
    });
});