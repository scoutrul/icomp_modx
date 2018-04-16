$(function() {
	// MENU
	var mobileScreen = 990;
	var appScreen = $('#app').width();

	console.log(appScreen);

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
			console.log(appScreen);
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
});
