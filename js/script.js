$(document).ready(function () {

	// wow initiation
	new WOW().init();

	// Navigation Bar Toggle
	$('#navbar-toggler').click(function () {
		$('.navbar-collapse').slideToggle(400);
	});

	// Navbar Background Change On Scroll
	$(window).scroll(function () {
		let pos = $(window).scrollTop();
		if (pos >= 100) {
			$('.navbar').addClass('change-navbar');
		} else {
			$('.navbar').removeClass('change-navbar');
		}
	});

	// Team Carousel 
	$('.team .owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		autoplay: true,
		dots: true,
		nav: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});

	// Work Carousel 
	$('.work .owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		autoplay: true,
		dots: true,
		nav: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});

	// FAQ Accordion
	$('.faq-head').each(function () {
		$(this).click(function () {
			$(this).next().toggleClass('show-faq-content');
			let icon = $(this).children('span').children("i").attr('class');

			if (icon == "fas fa-plus") {
				$(this).children('span').html('<i class = "fas fa-minus"></i>');
			} else {
				$(this).children('span').html('<i class = "fas fa-plus"></i>');
			}
		});
	});

	// Testimonial Carousel 
	$('.testimonial .owl-carousel').owlCarousel({
		loop: true,
		autoplay: true,
		dots: true,
		nav: false,
		items: 1
	});

});