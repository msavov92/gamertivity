$(document).ready(function() {
	var percent = 0,
	bar = $('.transition-timer-carousel-progress-bar'),
	crsl = $('#myCarousel');
	function progressBarCarousel() {
		bar.css({width:percent+'%'});
		percent = percent +0.5;
		if (percent>100) {
			percent=0;
			crsl.carousel('next');
		}
	}
	crsl.carousel({
		interval: false,
		pause: true,
	});
	var barInterval = setInterval(progressBarCarousel, 30);
	crsl.hover(
		function(){
			clearInterval(barInterval);
		},
		function(){
			barInterval = setInterval(progressBarCarousel, 30);
		})

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

	// ============ Login / Register Panel ============
	$(".register a").on('click', function() {
		$("#login_panel, .register").fadeOut(300);
		$("#register_panel").fadeIn(300);
		if($("#register_panel")) {
			$('.gamer_connect').css('height', '550px')
		}
	});

	// ============ Sticky navigation ============
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > 0) {
			$('.black_wrap').addClass('sticky');
		} else {
			$('.black_wrap').removeClass('sticky');
		}
	});
	$('.search_bar_icon > a').on('click', function() {
		$('.search_bar input').toggle('bounce', 400)
	});

	// Close all collapse

	// Gallery Filter
	 $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        if(value == "all") {
            $('.filter').fadeIn('1500');
        }
        else {
            $(".filter").not('.'+value).fadeOut('3000');
            $('.filter').filter('.'+value).fadeIn('3000');
        }
    });

    if ($(".filter-button").removeClass("active")) {
		$(this).removeClass("active");
	}
	$(this).addClass("active");

	$('header#profile .right img').on('click', function() {
		$('header#profile .profile_menu').toggleClass('show_profile_navigation');
	});

	$('#news .top_news a article i').on('click', function() {
		$(this).toggleClass('like');
		if($(this).hasClass('like') == true) {
			alert("Вие, успешно добавихте в Любими.")
		} else {
			var $confirm = confirm('Сигурни ли сте, че искате да изтриете това');
			if($confirm == true) {
				$(this).removeClass('like')
			} else {
				$(this).addClass('like')
			}
		}
	});
});
