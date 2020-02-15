$(document).ready(function() {
	$('#myCarousel').carousel({
		interval: 2000
	});

	 $('#explore_our_merch_carousel').carousel({
        interval: 5000
    });

	 // ============ Responsive mobile menu and show multi menu ============
	$.fn.menumaker = function(options) {
		var cssmenu = $(this),
		settings = $.extend({
			format: "dropdown",
			sticky: false
		}, options);
		return this.each(function() {
			$(this).find(".button").on('click', function() {
				$(this).toggleClass('menu-opened');
				var mainmenu = $(this).next('ul');
				if (mainmenu.hasClass('open')) {
					mainmenu.slideToggle().removeClass('open');
				} else {
					mainmenu.slideToggle().addClass('open');
					if (settings.format === "dropdown") {
						mainmenu.find('ul').show();
					}
				}
			});
			cssmenu.find('li ul').parent().addClass('has-sub');
			multiTg = function() {
				cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
				cssmenu.find('.submenu-button').on('click', function() {
					$(this).toggleClass('submenu-opened');
					if ($(this).siblings('ul').hasClass('open')) {
						$(this).siblings('ul').removeClass('open').slideToggle();
					} else {
						$(this).siblings('ul').addClass('open').slideToggle();
					}
				});
			};
			if (settings.format === 'multitoggle') multiTg();
			else cssmenu.addClass('dropdown');
			if (settings.sticky === true) cssmenu.css('position', 'fixed');
			resizeFix = function() {
				var mediasize = 1000;
				if ($(window).width() > mediasize) {
					cssmenu.find('ul').show();
				}
				if ($(window).width() <= mediasize) {
					cssmenu.find('ul').hide().removeClass('open');
				}
			};
			resizeFix();
			return $(window).on('resize', resizeFix);
		});
	};

	$("#cssmenu").menumaker({
		format: "multitoggle"
	});
	// ============ End Responsive mobile menu and show multi menu ============

	// ============ Login/Register Panel ============
	$(".register a").on('click', function() {
		$("#login_panel, .register").hide(300);
		$("#register_panel").show("blind");
		// if ($("#register_panel")) {
		// 	$(".gamer_connect").css('background', 'transparent')
		// }
	});
});
