/*
Author       : Dreamguys
Template Name: Dreams LMS - Bootstrap Template
Version      : 1.0
*/

(function ($) {
	"use strict";

	// Stick Sidebar

	if ($(window).width() > 767) {
		if ($('.theiaStickySidebar').length > 0) {
			$('.theiaStickySidebar').theiaStickySidebar({
				// Settings
				additionalMarginTop: 70
			});
		}
	}

	if ($('.toggle-password').length > 0) {
		$(document).on('click', '.toggle-password', function () {
			$(this).toggleClass("feather-eye feather-eye-off");
			var input = $(".pass-input");
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});
	}

	// Sidebar

// 	if ($(window).width() <= 991) {
// 		var Sidemenu = function () {
// 			this.$menuItem = $('.main-nav a');
// 		};

// 		function init() {
// 			var $this = Sidemenu;
// 			$('.main-nav a').on('click', function (e) {
// 				if ($(this).parent().hasClass('has-submenu')) {
// 					e.preventDefault();
// 				}
// 				if (!$(this).hasClass('submenu')) {
// 					$('ul', $(this).parents('ul:first')).slideUp(350);
// 					$('a', $(this).parents('ul:first')).removeClass('submenu');
// 					$(this).next('ul').slideDown(350);
// 					$(this).addClass('submenu');
// 				} else if ($(this).hasClass('submenu')) {
// 					$(this).removeClass('submenu');
// 					$(this).next('ul').slideUp(350);
// 				}
// 			});
// 		}

// 		// Sidebar Initiate

// 		init();
// 	}

	// Icon Btn

	$('.course-share .fa-heart').on('click', function (e) {
		e.preventDefault();
		$(this).toggleClass('color-active');
	});

	// Toggle

	if ($('#edit-rating').length > 0) {
		$('#edit-rating').on('click', function () {
			$('.publish-rate').toggle('1000');
			$('.stip-grp').toggle('1000');
		});
	}

	// JQuery counterUp

	if ($('.course-count .counterUp').length > 0) {
		$('.course-count .counterUp, .course-inner-content h4 span, .rate-head span').counterUp({
			delay: 15,
			time: 1500
		});
	}

	// Mobile menu sidebar overlay

	$('.header-fixed').append('<div class="sidebar-overlay"></div>');
	$(document).on('click', '#mobile_btn', function () {
		$('main-wrapper').toggleClass('slide-nav');
		$('.sidebar-overlay').toggleClass('opened');
		$('html').addClass('menu-opened');
		return false;
	});

	$(document).on('click', '.sidebar-overlay', function () {
		$('html').removeClass('menu-opened');
		$(this).removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
	});

	$(document).on('click', '#menu_close', function () {
		$('html').removeClass('menu-opened');
		$('.sidebar-overlay').removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
	});

	// Select 2

	if ($('.select').length > 0) {
		$('.select').select2({
			minimumResultsForSearch: -1,
			width: '100%'
		});
	}

	// tooltip

	$(document).ready(function () {
		$('[data-bs-toggle="tooltip"]').tooltip();
	});

	//feather.replace()


	// Home popular mentor slider

	if ($('.owl-carousel.mentoring-course').length > 0) {
		var owl = $('.owl-carousel.mentoring-course');
		owl.owlCarousel({
			margin: 25,
			nav: false,
			nav: true,
			loop: true,
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 3
				},
				1170: {
					items: 4
				}
			}
		});
	}

	// Treand Course

	if ($('.owl-carousel.trending-course').length > 0) {
		var owl = $('.owl-carousel.trending-course');
		owl.owlCarousel({
			margin: 24,
			nav: false,
			nav: true,
			loop: true,
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 2
				},
				1170: {
					items: 3
				}
			}
		});
	}

	// Leading Companies

	if ($('.owl-carousel.lead-group-slider').length > 0) {
		var owl = $('.owl-carousel.lead-group-slider');
		owl.owlCarousel({
			margin: 24,
			nav: false,
			nav: true,
			loop: true,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 4
				},
				1170: {
					items: 6
				}
			}
		});
	}

	// Feature Instructors

	if ($('.owl-carousel.instructors-course').length > 0) {
		var owl = $('.owl-carousel.instructors-course');
		owl.owlCarousel({
			margin: 24,
			nav: false,
			nav: true,
			loop: true,
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 2
				},
				1170: {
					items: 4
				}
			}
		});
	}

	// Latest Blogs

	if ($('.owl-carousel.blogs-slide').length > 0) {
		var owl = $('.owl-carousel.blogs-slide');
		owl.owlCarousel({
			margin: 24,
			nav: false,
			nav: true,
			loop: true,
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 2
				},
				1170: {
					items: 4
				}
			}
		});
	}

	// Login Slide

	if ($('.owl-carousel.login-slide').length > 0) {
		var owl = $('.owl-carousel.login-slide');
		owl.owlCarousel({
			margin: 24,
			nav: false,
			nav: true,
			loop: true,
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 1
				},
				1170: {
					items: 1
				}
			}
		});
	}

	// Slick testimonial three

	if ($('.mentor-testimonial.lazy').length > 0) {
		$(".mentor-testimonial.lazy").slick({
			lazyLoad: 'ondemand',
			infinite: true
		});
	}

	// Home header

	$(window).scroll(function () {
		var sticky = $('.scroll-sticky'),
			scroll = $(window).scrollTop(),
			logo = $('#Logoid');

		if (scroll >= 120) sticky.addClass('add-header-bg'); 
		else sticky.removeClass('add-header-bg'); 
	});

	// Timer countdown

	if ($('.countdown-container').length > 0) {
		const daysEl = document.getElementById("days");
		const hoursEl = document.getElementById("hours");
		const minsEl = document.getElementById("mins");

		const newYears = "1 Jan 2023";

		function countdown() {
			const newYearsDate = new Date(newYears);
			const currentDate = new Date();

			const totalSeconds = (newYearsDate - currentDate) / 1000;

			const days = Math.floor(totalSeconds / 3600 / 24);
			const hours = Math.floor(totalSeconds / 3600) % 24;
			const mins = Math.floor(totalSeconds / 60) % 60;

			daysEl.innerHTML = days;
			hoursEl.innerHTML = formatTime(hours);
			minsEl.innerHTML = formatTime(mins);
		}

		function formatTime(time) {
			return time < 10 ? `0${time}` : time;
		}

		// initial call
		countdown();

		setInterval(countdown, 1000);
	}

	// Circle Progress Bar

	// 

	// Fade in scroll

	if ($('.main-wrapper .aos').length > 0) {
		AOS.init({
			duration: 1200,
			once: true
		});
	}

	// Content div min height set

	function resizeInnerDiv() {
		var height = $(window).height();
		var header_height = $(".header").height();
		var footer_height = $(".footer").height();
		var setheight = height - header_height;
		var trueheight = setheight - footer_height;
		$(".content").css("min-height", trueheight);
	}

	if ($('.content').length > 0) {
		resizeInnerDiv();
	}

	$(window).resize(function () {
		if ($('.content').length > 0) {
			resizeInnerDiv();
		}
	});

	// Wizard


})(jQuery);