var countChecked = function () {
    var n = $("input:checked").length;
    $("ol").text("Số ghế bạn đã chọn: " + n + (n === 1 ? "" : ""));
    $("#price").html("Tổng tiền : " + (60000 * (n + (n === 1 ? "" : ""))) + "VND");
};
countChecked();

$("input[type=checkbox]").on("click", countChecked);


$("input").on("click", function () {
    var m = $("input:checked");
    $("#log").text("Số ghế :" + m.val());
});