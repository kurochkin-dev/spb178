/* Open modal */
$(".butt").on("click", function () {
    $(".maskV").addClass("showV");
});

/* Function for close modal */
// function closeModal() {
// 	$(".maskV").removeClass("showV");
// }
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

// setTimeout(function () { 
// 	$('.maskV').addClass("showV");
// }, 2000
// );

setTimeout(function () {
        $('.maskV').addClass("showV");
    }, 15000
);