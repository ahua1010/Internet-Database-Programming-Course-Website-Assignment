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
                required: true
            }
        },

        messages: { 
            username: {
                required: "必填"
            },
            password: {
                required: "必填"
            }
        }
    });
});