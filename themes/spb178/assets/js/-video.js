/* Open modal */
jQuery(".butt").on("click", function () {
	jQuery(".maskV").addClass("show");
});

/* Function for close modal */
// function closeModal() {
// 	jQuery(".maskV").removeClass("show");
// }
/* Modal close */
jQuery(".close, .maskV").on("click", function () {
	jQuery(".maskV").removeClass("show");
});

/* Close modal on Esc */
jQuery(document).keyup(function (e) {
	if (e.keyCode == 27) {
		jQuery(".maskV").removeClass("show");
	}
});

// setTimeout(function () { 
// 	jQuery('.maskV').addClass("show");
// }, 2000
// );

	setTimeout(function () { 
		jQuery('.maskV').addClass("show");
	}, 2000
	);