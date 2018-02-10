(function($) {
	
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
		questionsAccordion();
		hamburgerMenu();
		matchHeightContent();
		tabbedShows();
	}

	$(window).load(function() {
		init();
	});
	
	
})( jQuery );