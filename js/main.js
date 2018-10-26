$(function() {
	
	$('#js-sign-form').submit(function(e) {
		e.preventDefault();

		var login 	 = $.trim( $('#login').val() );
		var password = $.trim( $('#password').val() );

		if (login == '' || password == '') {
			$("#js-profile-img").attr('src', '/img/user-error.png');
		} else {
			$("#js-profile-img").attr('src', '/img/user-ok.png');
			$(this).unbind().submit();
		}

	});


});