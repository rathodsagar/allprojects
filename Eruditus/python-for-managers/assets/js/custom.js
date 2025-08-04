$('a[href^="#"]').not('[href="#"]')
      .not('[href="#myCarousel"]')
      .not('[href="#collapseOne"]')
      .not('[href="#0"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        }); 
 $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });   

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 850) {
        $(".fix-me").slideDown(300);
    } else {
        $(".fix-me").slideUp(300);
    }
});

// swipe tab
 var swiper = new Swiper('.s1', {
      pagination: '.page1',
      slidesPerView: 1,
      autoHeight: true, //enable auto height
      //calculateHeight:true,
      paginationClickable: true,
      loop: false,
        paginationBulletRender: function (index, className) {
        var tabsName = ['Years of Work Experience', 'Representative Industries'];
        if ( index === (tabsName.length - 1) ) {
                  return  '<span class="' + className + '">'
                      + tabsName[index] + '</span>'
                      + '<div class="active-mark "></div>';
        }
        return '<span class="' + className + '">' + tabsName[index] + '</span>';
            }
    });

//chart1
         google.load("visualization", "1", {packages:["corechart"]});
         google.setOnLoadCallback(drawChart1);
         function drawChart1() 
         {
          var data = google.visualization.arrayToDataTable([
           ['Task', 'Years of Work Experience'],    
           ['1-5 yrs', 13],
           ['6-10 yrs',     26],
           ['11-15 yrs',    23],
           ['16-20 yrs',      26],
           ['21-25 yrs',  6],
           ['>26 yrs',  6]  
           ]);
          var options = {    
           colors: ['#0081CC', '#F58557', '#777572', '#F6B344', '#355777', '#99cc33'],
           legend: { position: "none" },
           pieHole: 0.4,
           chartArea:{top:10,bottom:10},
           sliceVisibilityThreshold: 0,
           tooltip: {
            text: 'percentage'
          }
        };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }

         //chart2
         google.load("visualization", "2", {packages:["corechart"]});
         google.setOnLoadCallback(drawChart2);
         function drawChart2() 
         {
          var data2 = google.visualization.arrayToDataTable([
           ['Task', 'Job Functions'],    
           ['Banking & Financial Services', 33],
           ['Others*',     37],
           ['Consulting',    9],
           ['Healthcare',      8],
           ['IT Services',  7],
           ['Retail',  6]  
           ]);
          var options2 = {    
              colors: ['#0081CC', '#F58557', '#777572', '#F6B344', '#355777', '#99cc33'],
            legend: { position: "none" },
            chartArea:{top:10,bottom:10},
            pieHole: 0.4,
            sliceVisibilityThreshold: 0,
            tooltip: {
              text: 'percentage'
            }
          };

          var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
          chart2.draw(data2, options2);
        }



$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 960) {
    $('.download-bro-btn').fadeIn();
  } else {
    $('.download-bro-btn').fadeOut();
  }
});

$(window).on('resize', function () {
    $('.dow-btn').toggleClass('download-bro-btn', $(window).width() < 768);
    
    $('#btn-down').text($(window).width())
}).trigger('resize')

function resetHeight()
      {
      var maxHeight = 0;
      $("#who-test .who-test-text").each(function(){
          if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
      });
      $("#who-test .who-test-text").height(maxHeight);
      }
      $(window).on('resize', function() {
         resetHeight()
      });
resetHeight();

//  $('.who-test-text').slick({
//      infinite: true,
//   autoplay: true,
//   speed:100,
//     dots: false,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     prevArrow: false,
//     nextArrow: false
// });

 $('.faculty-test').slick({
    infinite: true,
  autoplay: true,
  speed:100,
    dots: true,
    adaptiveHeight: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: false,
    nextArrow: false
}); 


$('.video-slider').slick({
    autoplay: true,
    infinite: false,
    dots: true,
    arrows: true,
    slidesToShow: 1,
     slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      }
    }
    ]
  }); 


$(function () {
  var num = $("#module-list").find("li").length;
    x=4;
    $('#module-list li').slice(0, 4).show();
    $('#loadMore').on('click', function (e) {
        e.preventDefault();
        x = x+num;
        if(x >= num )
        {
          $("#loadMore").hide();
          $("#showLess").css('display', 'inline-block');
        }
        $('#module-list li').slice(0, x).slideDown();
    });
});
$('#showLess').on('click', function(){
    $('#module-list li:gt(3)').slideUp();
    $(this).hide();
        $("#loadMore").css('display', 'inline-block');
}); 


$(function () {
  var num = $("#module-list2").find("li").length;
    x=4;
    $('#module-list2 li').slice(0, 4).show();
    $('#loadMore2').on('click', function (e) {
        e.preventDefault();
        x = x+num;
        if(x >= num )
        {
          $("#loadMore2").hide();
          $("#showLess2").css('display', 'inline-block');
        }
        $('#module-list2 li').slice(0, x).slideDown();
    });
});
$('#showLess2').on('click', function(){
    $('#module-list2 li:gt(3)').slideUp();
    $(this).hide();
        $("#loadMore2").css('display', 'inline-block');
}); 



$(".vpop").on('click', function(e) {
  e.preventDefault();
  $("#video-popup-overlay,#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();
  
  var srchref='',autoplay='',id=$(this).data('id');
  if($(this).data('type') == 'vimeo') var srchref="//player.vimeo.com/video/";
  else if($(this).data('type') == 'youtube') var srchref="https://www.youtube.com/embed/";
  
  if($(this).data('autoplay') == true) autoplay = '?autoplay=1';
  
  $("#video-popup-iframe").attr('src', srchref+id+autoplay);
  
  $("#video-popup-iframe").on('load', function() {
    $("#video-popup-container").show();
  });
});

$(".vpop1").on('click', function(e) {
  e.preventDefault();
  $("#video-popup-overlay1,#video-popup-iframe-container1,#video-popup-container1,#video-popup-close1").show();
  
  var srchref='',autoplay='',id=$(this).data('id');
  if($(this).data('type') == 'vimeo') var srchref="//player.vimeo.com/video/";
  else if($(this).data('type') == 'youtube') var srchref="https://www.youtube.com/embed/";
  
  if($(this).data('autoplay') == true) autoplay = '?autoplay=1';
  
  $("#video-popup-iframe1").attr('src', srchref+id+autoplay);
  
  $("#video-popup-iframe1").on('load', function() {
    $("#video-popup-container1").show();
  });
});


$(".vpop2").on('click', function(e) {
  e.preventDefault();
  $("#video-popup-overlay2,#video-popup-iframe-container2,#video-popup-container2,#video-popup-close2").show();
  
  var srchref='',autoplay='',id=$(this).data('id');
  if($(this).data('type') == 'vimeo') var srchref="//player.vimeo.com/video/";
  else if($(this).data('type') == 'youtube') var srchref="https://www.youtube.com/embed/";
  
  if($(this).data('autoplay') == true) autoplay = '?autoplay=1';
  
  $("#video-popup-iframe2").attr('src', srchref+id+autoplay);
  
  $("#video-popup-iframe2").on('load', function() {
    $("#video-popup-container2").show();
  });
});

$(".vpop3").on('click', function(e) {
  e.preventDefault();
  $("#video-popup-overlay3,#video-popup-iframe-container3,#video-popup-container3,#video-popup-close3").show();
  
  var srchref='',autoplay='',id=$(this).data('id');
  if($(this).data('type') == 'vimeo') var srchref="//player.vimeo.com/video/";
  else if($(this).data('type') == 'youtube') var srchref="https://www.youtube.com/embed/";
  
  if($(this).data('autoplay') == true) autoplay = '?autoplay=1';
  
  $("#video-popup-iframe3").attr('src', srchref+id+autoplay);
  
  $("#video-popup-iframe3").on('load', function() {
    $("#video-popup-container3").show();
  });
});

$("#video-popup-close, #video-popup-overlay,#video-popup-close1, #video-popup-overlay1,#video-popup-close2, #video-popup-overlay2,#video-popup-close3, #video-popup-overlay3").on('click', function(e) {
  $("#video-popup-iframe-container,#video-popup-container,#video-popup-close,#video-popup-overlay").hide();
  $("#video-popup-iframe-container1,#video-popup-container1,#video-popup-close1,#video-popup-overlay1").hide();
  $("#video-popup-iframe-container2,#video-popup-container2,#video-popup-close2,#video-popup-overlay2").hide();
  $("#video-popup-iframe-container3,#video-popup-container3,#video-popup-close3,#video-popup-overlay3").hide();
  $("#video-popup-iframe").attr('src', '');
  $("#video-popup-iframe1").attr('src', '');
  $("#video-popup-iframe2").attr('src', '');
  $("#video-popup-iframe3").attr('src', '');
});

/* 
minified

$(".vpop").on("click",function(o){o.preventDefault(),$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();var p="",e="",i=$(this).data("id");if("vimeo"==$(this).data("type"))var p="//player.vimeo.com/video/";else if("youtube"==$(this).data("type"))var p="https://www.youtube.com/embed/";1==$(this).data("autoplay")&&(e="?autoplay=1"),$("#video-popup-iframe").attr("src",p+i+e),$("#video-popup-iframe").on("load",function(){$("#video-popup-overlay, #video-popup-container").show()})}),$("#video-popup-close, #video-popup-overlay").on("click",function(o){$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").hide(),$("#video-popup-iframe").attr("src","")});
*/