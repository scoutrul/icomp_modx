$(function() {
	// MENU
	var mobileScreen = 990;
	var appScreen = $('#app').width();

	var menu = $('#menu');
	var burger = $('.burger');
	var lvl = $('#menu > li');

	burger.click(function() {
		$(this).toggleClass('active');
		menu.toggleClass('active');
	});

	lvl.children('.sub_nav').hide();

	function toggleUIbyScreenWidth() {
		$(window).resize(function() {
			appScreen = $('#app').width();
		});

		if (appScreen >= mobileScreen) {
			// desktop
			lvl.on('mouseenter', function() {
				$(this).toggleClass('active');
				$(this).children('.sub_nav').show();
			});
			lvl.on('mouseleave', function() {
				$(this).toggleClass('active');
				$(this).children('.sub_nav').hide();
			});
		} else {
			// mobile
			lvl.on('click', function(e) {
				if ($(this).hasClass('active')) {
					$(this).removeClass('active');
					lvl.children('.sub_nav').hide();
				} else {
					lvl.removeClass('active');
					$(this).addClass('active');
					lvl.children('.sub_nav').hide();
					$(this).children('.sub_nav').show();
				}
				e.preventDefault();
			});
		}
	}
	toggleUIbyScreenWidth();

	$('#send_form_button').on('click', function() {
		var ModalForm = $('#send-form');
		var name = $('#your_name').val();
		var tel = $('#your_tel').val();
		var email = $('#your_email').val();
		var theme = $('#your_theme').val();
		var msg = $('#your_message').val();
		var modalFooter = $('.modal-footer');
		var formGroup = $('.form-group');

		var dataString =
			'fromName=' + name + '&tel=' + tel + '&email=' + email + '&subject=' + theme + '&message=' + msg;

		//show loading
		
		var OK = (name && email && msg) || false;
		
		if (OK) {
			ModalForm.append("<div id='loader'></div>");
			$('#loader').addClass('loader');

			formGroup.hide();
			modalFooter.hide();
			$('.modal-title').hide();
			$('#send_form').hide();
			$.ajax({
				type: 'POST',
				url: 'feedback.html',
				data: dataString,
				dataType: 'html',
				success: function() {
					$('#loader').removeClass('loader');
					ModalForm.html("<div id='message_success'></div>");
					$('#message_success')
						.hide()
						.fadeIn(1500, function() {
							$('#message_success').append('<i class="icon-ok"></i>');
						})
						.html('<h2>Отправлено!</h2>')
						.append('<p>Скоро мы с вами свяжемся</p>');

				},
				error: function(XMLHttpRequest, textStatus, errorThrown) {
					ModalForm.removeClass('loader');
					ModalForm.html("<div id='message_success'></div>");
					$('#message_success').hide().fadeIn(1500, function() {
						$('#message_success')
							.append('<i class="icon-ok"></i>')
							.html('<h2>Техническая ошибка!</h2>')
							.append('<p>Пожалуйста, повторите позже или свяжитесь с нами по телефонам</p>');
					});
					
				}
			});
		}
		return false;
	});
});
