/*(function ($) {
	$(document).ready(function() {

		if($(window).width() > 740) {
			// hide .navbar first
			$(".navbar").hide();
		}
		
		// fade in .navbar
		$(function () {
			$(window).scroll(function () {
				if($(window).width() > 740) {
		            // set distance user needs to scroll before we fadeIn navbar
		            if ($(this).scrollTop() > 40) {
		            	$('.navbar').fadeIn();
		            } else {
		            	$('.navbar').fadeOut();
		            }
	        	}
	        });
		});

	});
}(jQuery));