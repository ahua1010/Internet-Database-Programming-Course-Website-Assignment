$(function() {
    $(".plus").on("click", function() {
        var tmp = parseInt($("input[name='quantity']").prop("value"));
        $("input[name='quantity']").prop("value", tmp + 1);
    })

    $(".minus").on("click", function() {
        var tmp = parseInt($("input[name='quantity']").prop("value"));
        if(tmp > 1)
            $("input[name='quantity']").prop("value", tmp - 1);
    })
})