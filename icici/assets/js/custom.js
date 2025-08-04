$(document).ready(function(){

  $(".navbar-nav .nav-item.dropdown").hover(function() {
    $(".navbar").toggleClass("active");  
  });
  
  $(".home-banner-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    // fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".review-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".loan-offer-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });

});