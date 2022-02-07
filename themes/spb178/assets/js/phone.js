

/* E-mail send function */
jQuery(document).ready(function () {
	jQuery("#form").submit(function () { //Change
		var th = jQuery(this);
		jQuery.ajax({
			type: "POST",
			url: "/mail.php", //Change
			data: th.serialize()
		}).done(function () {
			jQuery('#submit').text('Отправлено!').addClass('successSubmit');
			setTimeout(function () {
				// Done Functions
				th.trigger("reset");
				jQuery('#submit').text('Оставить заявку').removeClass('successSubmit');
				jQuery('#submit').attr('disabled', true).removeClass('activeSubmit');
				jQuery('#uAgree').removeClass('activeLink');
				jQuery(".mask").removeClass("active")
			}, 3000);
		});
		return false;
	});
});
