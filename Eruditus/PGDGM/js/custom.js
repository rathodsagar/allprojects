$(document).ready(function() 
{
    $(".navbar a, footer a[href='#home'], a[href='#2']").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            var theOffset = $(hash).offset().top;
            var finalOffset = parseFloat(theOffset);
            $('html, body').animate({
                scrollTop: finalOffset
            }, 900, function(evt) {
                window.location.hash = hash
            })
        }
    });
    
	$('#ChangeToggle').click(function() {
		$('#navbar-hamburger').toggleClass('hidden');
		$('#navbar-close').toggleClass('hidden');  
	});
	  
   	 var winWidth = $(window).outerWidth();
    $(window).scroll(function() {
        var winTop = $(window).scrollTop();
        if (winWidth >= 768 && winWidth <= 991) {
            if (winTop > 1000) {
                $("#CBS_Logo").css("display", "none");
                $("#download_brochure").css("display", "")
            } else {
                $("#CBS_Logo").css("display", "");
                $("#download_brochure").css("display", "none")
            }
        } else if (winWidth <= 767) {
            if (winTop > 1100) {
                $("#mob_download_icon").css("display", "block")
            } else {
                $("#mob_download_icon").css("display", "none")
            }
        } else {
            if (winTop > 600) {
                $("#CBS_Logo").css("display", "none");
                $("#download_brochure").css("display", "")
            } else {
                $("#CBS_Logo").css("display", "block");
                $("#download_brochure").css("display", "none")
            }
        }
    });
	if (winWidth <= 767) {
	 $('.navbar-collapse a').click(function (e) {
        $('.navbar-collapse').collapse('toggle');
		$('#ChangeToggle').trigger('click');
      });
	}
    $('.panel-group a').click(function() 
    {
       $('.panel-group a').removeClass('active');
	   if($(this).hasClass('collapsed'))
	   {
		    $(this).addClass('active');
	   }//
	   else{
		  $(this).removeClass('active');
	   }   
      
    });
	
	
	function resetFeatured(){
		var maxHeight = 0;
		$(".Course-Leader .item").css('height','auto');
		if ($(window).width() > 767) 
		{
			$(".Course-Leader .item").each(function(){
			   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
			});
			$(".Course-Leader .item").height(maxHeight+55);
		
		}//

	}
	
	/*function resetFaculty(){
		var maxHeight = 0;
		$(".faculty .item").css('height','auto');
		if ($(window).width() > 767) 
		{
			$(".faculty .item").each(function(){
			   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
			});
			$(".faculty .item").height(maxHeight+55);
		
		}//

	}*/
	
	
	
	var size_li = $("#logo-list li").length;
    var x=5;
    var y = size_li - x;
    $('#logo-list li:lt('+x+')').show();
    $('#logo-list li:gt(4)').hide();

	$('#loadMore').click(function () {
        x= (x+5 <= size_li) ? x+y : size_li;
        $('#logo-list li:lt('+x+')').fadeIn('slow');
        $('#loadMore').hide();
        $('#showLess').fadeIn();
    });
    
	$('#showLess').click(function () {
        //$('#logo-list li:lt('+x+')').fadeIn('hide');
        $('#logo-list li:gt(4)').fadeOut();
        $('#loadMore').fadeIn();
        $('#showLess').hide();
        x=5;
    });
	
	$(window).on('resize', function() {
		resetFeatured();
		// resetFaculty();
	});

	
	resetFeatured();
	// resetFaculty(); 

    /*var item_height = 0;
    $('.faculty .item').each(function() 
    {
        if(item_height < $(this).outerHeight()){
            item_height = $(this).outerHeight();
        };
    });
    $('.faculty .item').height(item_height);*/

    $('#journey-slider').owlCarousel({
        margin: 10,
        items: 2,
        stagePadding: 100,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: {
            200: {
                items: 1,
                margin: 23,
                stagePadding: 40
            },
            300: {
                items: 2,
                margin: 23,
                stagePadding: 40
            },
            400: {
                items: 2,
                margin: 10,
                stagePadding: 40
            },
            450: {
                items: 2,
                margin: 10,
                stagePadding: 50
            },
            505: {
                items: 2,
                margin: 10,
                stagePadding: 52
            },
            550: {
                items: 2,
                margin: 10,
                stagePadding: 58
            },
            600: {
                items: 2,
                margin: 10,
                stagePadding: 65
            },
            650: {
                items: 2,
                margin: 10,
                stagePadding: 68
            },
            700: {
                items: 3,
                margin: 10,
                stagePadding: 50
            },
            768: {
                items: 3,
                margin: 10,
                stagePadding: 100
            }
        }
    });
    $('#participant-slider').owlCarousel({
        margin: 10,
        items: 2,
        stagePadding: 100,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: {
            200: {
                items: 1,
                margin: 23,
                stagePadding: 40
            },
            300: {
                items: 2,
                margin: 23,
                stagePadding: 40
            },
            400: {
                items: 2,
                margin: 10,
                stagePadding: 40
            },
            450: {
                items: 2,
                margin: 10,
                stagePadding: 50
            },
            505: {
                items: 2,
                margin: 10,
                stagePadding: 52
            },
            550: {
                items: 2,
                margin: 10,
                stagePadding: 58
            },
            600: {
                items: 2,
                margin: 10,
                stagePadding: 65
            },
            650: {
                items: 2,
                margin: 10,
                stagePadding: 68
            },
            700: {
                items: 3,
                margin: 10,
                stagePadding: 50
            },
            768: {
                items: 3,
                margin: 10,
                stagePadding: 100
            }
        }
    });
    $('#client-slider').owlCarousel({
        margin: 10,
        items: 2,
        stagePadding: 100,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: {
            200: {
                items: 1,
                margin: 23,
                stagePadding: 40
            },
            300: {
                items: 2,
                margin: 23,
                stagePadding:30
            },
            400: {
                items: 2,
                margin: 10,
                stagePadding: 40
            },
            450: {
                items: 2,
                margin: 10,
                stagePadding: 50
            },
            505: {
                items: 2,
                margin: 10,
                stagePadding: 52
            },
            550: {
                items: 2,
                margin: 10,
                stagePadding: 58
            },
            600: {
                items: 2,
                margin: 10,
                stagePadding: 65
            },
            650: {
                items: 2,
                margin: 10,
                stagePadding: 68
            },
            700: {
                items: 3,
                margin: 10,
                stagePadding: 50
            },
            768: {
                items: 3,
                margin: 10,
                loop: true,
                stagePadding: 100
            }
        }
    });
    
    $("#faculty-slider").owlCarousel({
        items: 2,
        responsiveClass:true
    });

    $('#myCarousel.carousel').carousel({
        interval: 5000
    }).on('slide.bs.carousel', function (e) {
        var nextH = $(e.relatedTarget).height();
        $("#myCarousel .carousel-inner").find('.active').parent().animate({ height: nextH }, 500);
    });
    $('#TabCarousel.carousel').carousel({
        interval: 5000
    }).on('slide.bs.carousel', function (e) {
        var nextH = $(e.relatedTarget).height();
        $("#TabCarousel .carousel-inner").find('.active').parent().animate({ height: nextH }, 500);
    });
    $(".carousel").swipe({
        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') 
            {
                $(this).carousel('next');
                trackEvent('click','PGDGM V180301','Slide','Student Speak');
            }
            if (direction == 'right')
            { 
                $(this).carousel('prev');
                trackEvent('click','PGDGM V180301','Slide','Student Speak');
            }
        },
        allowPageScroll: "vertical"
    });

})
