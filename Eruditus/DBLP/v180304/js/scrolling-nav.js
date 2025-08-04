//jQuery to collapse the navbar on scroll
// $(window).scroll(function() {
//     if ($(".navbar").offset().top > 300) {
//         $(".navbar-fixed-top").addClass("top-nav-collapse");
//     } else {
//         $(".navbar-fixed-top").removeClass("top-nav-collapse");
//     }
// });
 $(window).scroll(function() { 
    var bannerHight = $(".banner").height();  
    var headerHight = $(".header").height();    
    var scroll = $(window).scrollTop();
     if (scroll >= bannerHight + headerHight) {
      $(".navbar-fixed-top").addClass("top-nav-collapse");
    }else{
      $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
    
  });


  $(window).scroll(function() {    
   
    /*$(".collapse ul.nav li a").click(function() {
     $(this).parent().addClass('active').siblings().removeClass('active');

    });*/
  
    // add class active to nav a on scroll
  var scrollPos = $(document).scrollTop() + 100;
  $('.collapse ul.nav li a').each(function () {
    var currLink = $(this);
    var refElement = $(currLink.attr("href"));
    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
      $('.collapse ul.nav li a').removeClass("active");
      currLink.addClass("active");
    }
  });
  });
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
// add class active to nav a on scroll
  
