$( document ).ready(function() 
{
	/*$('.video-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true,
		focusOnSelect: true,
	});*/
	$('a[href*="#"]')

	// Remove links that don't actually link to anything

	.not('[href="#"]')

	.not('[href="#0"]')

	.click(function(event) 
	{

		// On-page links

		if (

		location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')

		&&

		location.hostname == this.hostname

		) 
		{

			// Figure out element to scroll to

			var target = $(this.hash);

			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

			// Does a scroll target exist?

			if (target.length) 
			{

				// Only prevent default if animation is actually gonna happen

				event.preventDefault();

				$('html, body').animate({

				scrollTop: target.offset().top

				}, 1000, function() {

				// Callback after animation

				// Must change focus!

				var $target = $(target);

				$target.focus();

				if ($target.is(":focus")) 
				{ // Checking if the target was focused

				return false;

				} 
				else 
				{

				$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable

				$target.focus(); // Set focus again

				};

			});

			}

		}

	});
	$('#brand-slider').owlCarousel({
    	items: 8
    	/*dots: false,
    	loop: false,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        freeDrag: false*/
    });
    /*$('.owl-carousel').on("drag.owl.carousel", function (event) {
        trackEvent('click','EPM V1','Slide','Participant Speak');
    });*/
	/*$('#video-slider').owlCarousel({
	    items: 3,
	    margin: 10,
	    loop: true,
	    video: true,
	    center: true,
	    afterAction: function(current) {
	        current.find('video').get(0).play();
	    },
	    responsive: {
	      320: {
	        items: 1
	      },
	      500: {
	        items: 2
	      },
	      1024: {
	        items: 3
	      },
	    }
	});*/

	$('.rvs-container').rvslider();
	

});