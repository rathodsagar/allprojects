$(document).ready(function() {
    /*var interval = setInterval(function() {
        if (document.readyState === 'complete') {
            clearInterval(interval);
            $('#loader-bg').remove().animate()
        }
    }, 100);*/

    /*$( "#menu li a" ).hover(function() 
    {
      //alert("sagar");
      $("#menu li").addClass("open"); //mega-dropdown-menu
    });*/

    /*$("#menu li a").mouseover(function()
    {
        $("#menu li").addClass("open");
    });
    $("#menu li a").mouseout(function()
    {
        $("#menu li").removeClass("open");
    });*/

    $(".dropdown").hover(
      function() 
      {
        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true); //.slideDown("400")
        $(this).toggleClass('open');        
      },
      function() 
      {
          $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true); //.slideUp("400")
          $(this).toggleClass('open');       
      }
    );

    $( "#search-button" ).click(function(e) {
      $("#main-menu").hide();
      $("#desk-search").show();
    });

    $( "#btn-close" ).click(function(e) {
      $("#desk-search").hide();
      $("#main-menu").show();
    });
    
    $( "#mob-search-icon" ).click(function(e) {
      $("#main-menu").hide();
      $("#desk-search").show();
    });

    $(window).scroll(function()
    {
      var width = $(window).width();
      var scroll = $(window).scrollTop();

      if (scroll > 30) {
        // alert(">300");
        $(".navbar").css({"background" : "#ffffff","box-shadow" : "0px 1px 5px #888888","animation" : "slow 500ms ease-in-out","-webkit-animation" : "slow 500ms ease-in-out","-o-animation" : "slow 900ms ease-in-out"});
        $(".navbar-nav").css({"padding" : "15px 15px"});
        $(".navbar-brand .desk-logo").css({"width" : "69px"});
        $(".search").addClass("active"); 
      }
      else
      {
        // alert("<300");
        $(".navbar").css({"background":"transparent","box-shadow": "none","animation" : "none"}); 
        $(".navbar-nav").css({"padding" : "0px"});
        $(".navbar-brand .desk-logo").css({"width" : "auto"});  
        $(".search").removeClass("active"); 
      }
    });
})