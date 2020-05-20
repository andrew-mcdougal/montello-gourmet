(function($) {

	function shopNewsShow() {
		$('.shop-news-box').slideDown('slow');
	}

	function homeAccordion() {
		var $accordionContainer = $('.accordion-container');
		var $accordionOpen = $('.accordion-open');

		// open accordion container
		$accordionOpen.click(function() {
			$accordionContainer.slideToggle('slow');
		});

		$(".accordion-container").accordion({
			collapsible: true,
			active: 'none',
			heightStyle: 'content'
		});
	}

	function homeslides() {
		$(".your-class").slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			infinite: true,
			arrows: false,
			dots: true,

			// responsive
			responsive: [{

				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}

			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			}]
		});
	}

	function homeTestimonials() {
		$('.testimonial-slides').slick({
			arrows: false,
			dots: true,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed: 7000,
		});
	}


	
	function questionsAccordion() {
		$( ".questions" ).accordion({
			header: ".question"
		});
	}

	function hamburgerMenu() {
		$('.hamburger').click(function() {
			$(this).toggleClass('is-active');
			$('.mobile-main-nav').slideToggle('fast');
		});
	}

	function matchHeightContent() {
		$('.height-matched').matchHeight();
	}

	function tabbedShows() {
		$( "#tabs" ).tabs();
	}

	function init() {
		//homeslides();
		questionsAccordion();
		hamburgerMenu();
		//matchHeightContent();
		tabbedShows();
	}

	$(window).on('load', function() {
		//init();
		homeAccordion();
		setTimeout(homeTestimonials, 200);
		setTimeout(homeslides, 200);
		//setTimeout(shopNewsShow, 5000);
	});
	
	
})( jQuery );