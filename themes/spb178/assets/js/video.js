/* Open modal */
jQuery(".butt").on("click", function () {
    jQuery(".maskV").addClass("showV");
});

/* Modal close */
jQuery(".close, .maskV").on("click", function () {
    jQuery(".maskV").removeClass("showV");
});

/* Close modal on Esc */
jQuery(document).keyup(function (e) {
    if (e.keyCode == 27) {
        jQuery(".maskV").removeClass("showV");
    }
});

if (document.documentElement.clientWidth > 879) {
    setTimeout(function () {
            jQuery('.maskV').addClass("showV");
        }, 4000
    );
}


