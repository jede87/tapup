(function($) {

	// all Javascript code goes here
	jQuery(".button-collapse").sideNav();
	jQuery('.parallax').parallax();
	
	var scrollSpeed = 500;

	jQuery("#home").click(function (){
		jQuery('html, body').animate({
			scrollTop: jQuery("#home-container").offset().top - 120
		}, scrollSpeed);
	});

	jQuery("#about").click(function (){
		jQuery('html, body').animate({
			scrollTop: jQuery("#contactus").offset().top - 120
		}, scrollSpeed);
	});

	jQuery("#team").click(function (){
		jQuery('html, body').animate({
			scrollTop: jQuery("#team-container").offset().top - 120
		}, scrollSpeed);
	});
})(jQuery);
