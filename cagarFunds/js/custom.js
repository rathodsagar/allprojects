$(document).ready(function() 
{
    /*$('.form-control').on('focus blur', function (e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');*/

    $('input,select').blur(function()
    {
        if( $(this).val().length > 0 ) {
            $(this).addClass('valid');
        }//
        else{
             $(this).removeClass('valid');
        }
    });

    $("#openNav").click(function()
    {
        $(".sidenav").addClass("open");
        // $("html").css("overflow","hidden");
    });
    $("#closeNav").click(function()
    {
        $(".sidenav").removeClass("open");
        // $("html").css("overflow","auto");
    });
    /*$("#openDropdown").click(function()
    {

    }*/
    var winWidth = $(window).outerWidth();
    // alert(winWidth);
    /*$(window).resize(function()
    {*/
        if (winWidth > 1025)
        {
            $(".menu .dropdown").hover(function() 
            {
                $(this).toggleClass('open');
            }); 
        }
    /*});*/

    $('#main_slider').owlCarousel({
        items:1,
        dots: true,
        nav: true,
        navText: ["<img src='images/right-arrow-grey.png' alt='left Arrow' title='left Arrow' class='img-responsive'>","<img src='images/right-arrow-grey.png' alt='Right Arrow' title='Right Arrow' class='img-responsive'>"],
        loop: false
    });
	
    $('#banner-slider').owlCarousel({
		items:3,
	    stagePadding: 120,
	    margin:30,
	    dots: false,
	    responsive:{
	        0:{
	            items:1,
	            stagePadding: 50
	        },
	        500:{
	            items:1
	        },
	        600:{
	            items:1,
	            stagePadding: 140
	        },
	        700:{
	            items:2,
	            stagePadding: 80
	        },
	        1024:{
	            items:3
	        }
	    }
	});
    
    $('#testimonial_slider').owlCarousel({
        items:1,
        dots: true,
        nav: true,
        navText: ["<img src='images/home/testimonial/right-arrow-white.png' alt='left Arrow' title='left Arrow' class='img-responsive'>","<img src='images/home/testimonial/right-arrow-white.png' alt='Right Arrow' title='Right Arrow' class='img-responsive'>"],
        loop: false
    });
    
    $('#testimonial_slider-2').owlCarousel({
        items:1,
        dots: false,
        nav: true,
        navText: ["<img src='images/right-arrow-grey.png' alt='left Arrow' title='left Arrow' class='img-responsive'>","<img src='images/right-arrow-grey.png' alt='Right Arrow' title='Right Arrow' class='img-responsive'>"],
        loop: false
    });
	
    $('#client-slider').owlCarousel({
        margin: 10,
        items: 2,
        stagePadding: 100,
        // autoplay: true,
        // autoplaySpeed: 4000,
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
	
    $('#icon_slider').owlCarousel({
        items: 5,
        dots: false,
        nav: true,
        navText: ["<img src='images/right-arrow-darkgrey.png' alt='left Arrow' title='left Arrow' class='img-responsive'>","<img src='images/right-arrow-darkgrey.png' alt='Right Arrow' title='Right Arrow' class='img-responsive'>"],
        responsive: {
            200: {
                items: 1
            },
            300: {
                items: 1
            },
            400: {
                items: 2
            },
            600: {
                items: 3
            },
            850: {
                items: 4
            },
            992: {
                items: 5
            }
        }
	});
    
    $('#icon_slider-2').owlCarousel({
        items: 4,
        dots: false,
        nav: true,
        navText: ["<img src='images/right-arrow-darkgrey.png' alt='left Arrow' title='left Arrow' class='img-responsive'>","<img src='images/right-arrow-darkgrey.png' alt='Right Arrow' title='Right Arrow' class='img-responsive'>"],
        responsive: {
            200: {
                items: 1
            },
            300: {
                items: 1
            },
            400: {
                items: 2
            },
            600: {
                items: 3
            },
            850: {
                items: 4
            },
            992: {
                items: 5
            }
        }
    });
	
    /*$('#box_slider').owlCarousel({
		items: 4,
        dots: false,
        nav: true,
        navText: ["<img src='images/right-arrow-darkgrey.png' alt='left Arrow' title='left Arrow' class='img-responsive'>","<img src='images/right-arrow-darkgrey.png' alt='Right Arrow' title='Right Arrow' class='img-responsive'>"],
        responsive: {
            200: {
                items: 1
            },
            300: {
                items: 1
            },
            400: {
                items: 2
            },
            600: {
                items: 3
            },
            850: {
                items: 4
            },
            992: {
                items: 5
            }
        }
	});*/
    $('#box_slider').owlCarousel({
        items:4,
        margin:60,
        dots: false,
        responsive:{
            0:{
                items:1,
                stagePadding: 50
            },
            500:{
                items:1
            },
            600:{
                items:1,
                stagePadding: 140
            },
            700:{
                items:2,
                stagePadding: 80
            },
            1024:{
                items:4
            }
        }
    });
	
    $('#publication_slider').owlCarousel({
		items: 3,
		margin: 100,
        dots: false,
        nav: true,
        navText: ["<img src='images/press_media/right-arrow-grey.png' alt='left Arrow' title='left Arrow' class='img-responsive'>","<img src='images/press_media/right-arrow-grey.png' alt='Right Arrow' title='Right Arrow' class='img-responsive'>"],
        responsive: {
            200: {
                items: 1
            },
            300: {
                items: 1,
                margin: 0
            },
            700: {
                items: 2,
                margin: 30
            },
            900: {
                items: 2,
                margin: 50
            },
            1100: {
                items: 3,
                margin: 50
            },
            1200: {
                items: 3
            }
        }
	});

	var size_li = $("#logo-list li").length;
    var x=5;
    var y = size_li - x;
    
    $('#logo-list li:lt('+x+')').show();
    $('#logo-list li:gt(4)').hide();

    $('#loadMore').click(function () {
        x= (x+5 <= size_li) ? x+y : size_li;
        $('#logo-list li:lt('+x+')').fadeIn('slow');
        $('#loadMore').hide();
        $('#showLess').fadeIn('slow');
    });
    $('#showLess').click(function () {
        //$('#logo-list li:lt('+x+')').fadeIn('hide');
        $('#logo-list li:gt(4)').fadeOut();
        $('#loadMore').fadeIn();
        $('#showLess').hide();
        x=5;
    });


    function resetHeight()
    {
        var maxHeight = 0;
        $(".services-cards .item, .sip-container .sip-box .item").each(function()
        {
            if ($(this).height() > maxHeight)
            { 
                maxHeight = $(this).height(); 
            }
        });
        $(".services-cards .item").height(maxHeight);
    }

    resetHeight();

    function Heightreset()
    {
        var maxHeight = 0;
        $(".services-cards .item, .sip-container .sip-box .item").each(function()
        {
            if ($(this).height() > maxHeight)
            { 
                maxHeight = $(this).height(); 
            }
        });
        $(".sip-container .sip-box .item").height(maxHeight);
    }

    Heightreset();    

    

    // fullpage customization
    $('#fullpage').fullpage({

        // sectionsColor: ['#B8AE9C', '#348899', '#F2AE72', '#5C832F', '#B8B89F'],
        sectionSelector: '.vertical-scrolling',
        // slideSelector: '.horizontal-scrolling',
        navigation: true,
        // slidesNavigation: true,
        controlArrows: false,
        // anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection'],
        // menu: '#menu',
         onLeave: function(index, nextIndex, direction) {
            if (nextIndex == 2) {
                $('header.section-container').hide();
            }
            else if( nextIndex == 1)
            {
               $('header.section-container').show(); 
            }
         }
    }); 

});



$(window).on('resize', function() 
{
    if ($(window).width() > 767) 
    {
        resetHeight();
        Heightreset();
    }
    else
    {
        $(".services-cards .item").css('height','auto');
        $(".sip-container .sip-box .item").css('height','auto');
    }
});

/*$(function()
{
    var current = location.pathname;
    $('.menu .navbar-nav>li>a').each(function()
    {
        var $this = $(this);
        alert($this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1)
        {
            $this.addClass('active');
        }
    })
})*/

