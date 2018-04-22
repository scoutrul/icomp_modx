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

	$('#send_form').on('click', function() {
		var name = $('#your_name').val();
		var tel = $('#your_tel').val();
		var email = $('#your_email').val();
		var theme = $('#your_theme').val();
		var msg = $('#your_message').val();

		var dataString = 'fromName=' + name + '&tel=' + tel + '&from=' + email + '&subject=' + theme + '&message=' + msg;
		
		console.log('sending', dataString);
		
		$.ajax({
			type: 'POST',
			url: '/feedback.html', 
			data: dataString,
			dataType: 'html',
			success: function() {
				$('#send-form').html("<div id='message'></div>");
				$('#message')
					.html('<h2>Вопрос отправлен!</h2>')
					.append('<p>Скоро мы с вами свяжемся.</p>')
					.hide()
					.fadeIn(1500, function() {
						$('#message').append('<i class="icon-ok"></i>');
					});
				$('.modal-title').hide();
				$('#send_form').hide();
			}
		});
		return false;
	});
});
