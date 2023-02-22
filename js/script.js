(function($) { 

	"use strict";
	
	/* ================ Revolution Slider. ================ */
	if($('.tp-banner').length > 0){
		$('.tp-banner').show().revolution({
			delay:6000,
	        startheight:700,
	        startwidth: 1170,
	        hideThumbs: 1000,
	        navigationType: 'none',
	        touchenabled: 'on',
	        onHoverStop: 'on',
	        navOffsetHorizontal: 0,
	        navOffsetVertical: 0,
	        dottedOverlay: 'none',
	        fullWidth: 'on'
		});
	}
	if($('.tp-banner-full').length > 0){
		$('.tp-banner-full').show().revolution({
			delay:6000,
	        hideThumbs: 1000,
	        navigationType: 'none',
	        touchenabled: 'on',
	        onHoverStop: 'on',
	        navOffsetHorizontal: 0,
	        navOffsetVertical: 0,
	        dottedOverlay: 'none',
	        fullScreen: 'on'
		});
	}	
	
	
	
	
	/* ================ testimonials ================ */
	$(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                700: {
                    items: 1,
                    nav: false
                },
                1170: {
                    items: 1,
                    nav: true,
                    loop: false
                }
            }
        });
	
	/* ================ Collaps for faqs  ================ */
	$('.collaps p').hide();
		$(document).on("click", '.collaps h4', function() {
			if( $(this).hasClass('active') ){
				$(this).next('p').slideUp();
				$(this).removeClass('active');
			} else {
				$(this).next('p').slideDown();
				$(this).addClass('active');
			}
		});

	
	
	/* ================ Counter ================ */
        $('.counter-item').appear(function() {
            $('.counter-number').countTo();
        });
		
		
	/* ================ Mobile Nav ================ */
	$('.fa-caret-down').click(function(e){
      e.preventDefault();
      $(this).next().slideToggle('');
	});



	
	});
	
})(jQuery);