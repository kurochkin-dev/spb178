

/* E-mail send function */
$(document).ready(function () {
	$("#form").submit(function () { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "/mail.php", //Change
			data: th.serialize()
		}).done(function () {
			$('#submit').text('Отправлено!').addClass('successSubmit');
			setTimeout(function () {
				// Done Functions
				th.trigger("reset");
				$('#submit').text('Оставить заявку').removeClass('successSubmit');
				$('#submit').attr('disabled', true).removeClass('activeSubmit');
				$('#uAgree').removeClass('activeLink');
				$(".mask").removeClass("active")
			}, 3000);
		});
		return false;
	});
});
