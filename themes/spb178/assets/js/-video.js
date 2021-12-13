/* Open modal */
$(".butt").on("click", function () {
	$(".maskV").addClass("show");
});

/* Function for close modal */
// function closeModal() {
// 	$(".maskV").removeClass("show");
// }
/* Modal close */
$(".close, .maskV").on("click", function () {
	$(".maskV").removeClass("show");
});

/* Close modal on Esc */
$(document).keyup(function (e) {
	if (e.keyCode == 27) {
		$(".maskV").removeClass("show");
	}
});

// setTimeout(function () { 
// 	$('.maskV').addClass("show");
// }, 2000
// );

	setTimeout(function () { 
		$('.maskV').addClass("show");
	}, 2000
	);