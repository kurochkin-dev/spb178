/* Open modal */
$(".butt").on("click", function () {
    $(".maskV").addClass("showV");
});

/* Modal close */
$(".close, .maskV").on("click", function () {
    $(".maskV").removeClass("showV");
});

/* Close modal on Esc */
$(document).keyup(function (e) {
    if (e.keyCode == 27) {
        $(".maskV").removeClass("showV");
    }
});

if (document.documentElement.clientWidth > 879) {
    setTimeout(function () {
            $('.maskV').addClass("showV");
        }, 4000
    );
}


