var show = true;
$("#show-aside").click(function () {
    if (show) {
        showAside(true);
        show = false;
    } else {
        showAside(false);
        show = true;
    }
});
$(window).resize(function () {
    if ($(this).width() >= 768) {
        showAside(true);
    }
});

function showAside(sh) {
    if (sh) {
        $(".cj-aside").css("left", "0px");
    } else {
        $(".cj-aside").css("left", "-" + $(".cj-aside").width() + "px");
    }
}
