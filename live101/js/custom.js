$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
      $(".navbar").addClass("menu-scrolled");
    } else {
      $(".navbar").removeClass("menu-scrolled");
    }

    if (scroll > 500) {
      $("#contactStickySidebar").addClass("active");
      $("#topToBottom").addClass("active");
    } else {
      $("#contactStickySidebar").removeClass("active");
      $("#topToBottom").removeClass("active");
    }

    $("#topToBottom").click(function(){
      $('html').scrollTop(0);
      // $('html, body').scrollTop($("#divID").offset().top);
    });

    
    // let sectPosition = $("#redirectionTabs").offset().top;
    let sectPosition = $("#redirectionTabs").position().top;
    // console.log(sectPosition);

    if (scroll > sectPosition) {
      $("#stckyRedirectionTabs").addClass("active");
    } else {
      $("#stckyRedirectionTabs").removeClass("active");
    }

    
    /* var hashValue = window.location.hash;
    if (hashValue) {
        var hrefValue = $("[name='" + hashValue.replace("#", "") + "']");
        console.log(hrefValue.length);
        if (!hrefValue.length) {
            hrefValue = $(hashValue);
        }
        $("body, html").animate(
            {
                scrollTop: $(hrefValue).offset().top - 80,
            },500
        );
    } */
     
  });

  $(".filter-box-wrapper .dropdown-btn").click(function(){
    $(this).siblings(".options-wrapper").slideToggle();
    $(this).toggleClass("active");
  });

  $(".artists-card-list .wishlist").click(function(){
    $(this).toggleClass("active");
  });
  
  /* $(".navbar-nav .dropdown").hover(function(){
    $(this).toggleClass("open");
    $(this).find(".mega-menu").slideToggle();
  }); */

  $(".artist-categories-slider").slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    //autoplay: true,
    //autoplaySpeed: 1000,
    // centerMode: true,
    // variableWidth: false,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          arrows: false,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          arrows: false,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 2.2,
          arrows: false,
          // centerMode: true,
        },
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1.2,
          arrows: false,
          infinite: false,
          centerMode: true,
          // centerPadding: "30px",
        },
      },
    ],
  });

  $(".our-clients-slider").slick({
    slidesToShow: 6,
    infinite: true,
    //autoplay: true,
    //autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    centerMode: true,
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          rows: 2,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".yt-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".yt-slider-nav",
  });
  
  $(".yt-slider-nav").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".yt-slider",
    dots: true,
    // centerMode: true,
    // focusOnSelect: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          infinite: false,
          arrows: false,
          slidesToShow: 2.2,
          // centerMode: true,
        },
      },
      {
        breakpoint: 420,
        settings: {
          infinite: false,
          arrows: false,
          slidesToShow: 1.2,
          // centerMode: true,
        },
      },
    ],
  });

  $(".recent-artist-slider").slick({
    infinite: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    //autoplay: true,
    //autoplaySpeed: 1000,
    // centerMode: true,
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3.2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 2.5,
        },
      },
      {
        breakpoint: 420,
        settings: {
          arrows: false,
          slidesToShow: 2.2,
        },
      },
      {
        breakpoint: 360,
        settings: {
          arrows: false,
          slidesToShow: 1.2,
          centerMode: true,
        },
      },
    ],
  });

  $(".review-card-slider").slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    //autoplay: true,
    //autoplaySpeed: 1000,
    // centerMode: true,
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          infinite: false,
          // centerMode: true,
          arrows: false,
          slidesToShow: 1.2,
          // centerMode: true,
        },
      },
    ],
  });

  $(".trending-artists-slider").slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
    // centerMode: true,
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          infinite: false,
          // centerMode: true,
          slidesToShow: 3.2,
        },
      },
      {
        breakpoint: 992,
        settings: {
          infinite: false,
          // centerMode: true,
          arrows: false,
          slidesToShow: 2.2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          infinite: false,
          // centerMode: true,
          arrows: false,
          slidesToShow: 1.2,
        },
      },
    ],
  });

  $(".live-artists-slider").slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
    // centerMode: true,
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          infinite: false,
          // centerMode: true,
          slidesToShow: 3.2,
        },
      },
      {
        breakpoint: 992,
        settings: {
          infinite: false,
          // centerMode: true,
          arrows: false,
          slidesToShow: 2.2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          infinite: false,
          // centerMode: true,
          arrows: false,
          slidesToShow: 1.2,
        },
      },
    ],
  });

  $("#whyChooseSlider").slick({
    slidesToShow: 1.2,
    slidesToScroll: 1,
    autoplay: false,
    infinite: false,
    autoplaySpeed: 4000,
    dots: true,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 575,
        settings: {
          arrows: false,
          slidesToShow: 1.5,
        },
      },
      {
        breakpoint: 991,
        settings: "unslick",
      },
    ],
  });

  $(".how-it-works-slider").slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    // centerMode: true,
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3.2,
        },
      },
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          slidesToShow: 2.2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          infinite: false,
          // centerMode: true,
          arrows: false,
          slidesToShow: 1.2,
        },
      },
    ],
  });

  $(".latest-blogs-slider").slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    // centerMode: true,
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3.2,
        },
      },
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          slidesToShow: 2.2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          infinite: false,
          // centerMode: true,
          arrows: false,
          slidesToShow: 1.2,
        },
      },
    ],
  });

  $(".yt-shorts-slider").slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          infinite: false,
          // centerMode: true,
          slidesToShow: 3.2,
        },
      },
      {
        breakpoint: 992,
        settings: {
          infinite: false,
          // centerMode: true,
          arrows: false,
          slidesToShow: 2.2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          infinite: false,
          // centerMode: true,
          arrows: false,
          slidesToShow: 1.2,
        },
      },
    ],
  });

  $(".image-card-slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    infinite: false,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3.2,
        },
      },
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          slidesToShow: 2.2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          arrows: false,
          slidesToShow: 1.2,
        },
      },
    ],
  });

});
