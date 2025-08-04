
  $(document).ready(function(){
    
    $( "#search-button" ).click(function(e) {
      /*$("#main-menu").css("display","none");
      $("#desk-search").css("display","block");*/
      $("#main-menu").hide();
      $("#desk-search").show();
    });

    $( "#btn-close" ).click(function(e) {
      /*$("#desk-search").css("display","none");
      $("#main-menu").css("display","block");*/
      $("#desk-search").hide();
      $("#main-menu").show();
    });

    $( "#mob-search-icon" ).click(function(e) {
      	/*$("#main-menu").css("display","none");
    	$("#desk-search").css("display","block");*/
      	$("#main-menu").hide();
    	$("#desk-search").show();
    });
    //$( ".navbar" ).scrollTop(1000);

    $(window).scroll(function(){
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

      /*if ( scroll < 29 && width > 1000) 
      {
        $(".search").css({"padding" : "45px 0px 30px 0px"})
      }
      else if(width < 999)
      {
        $(".search").css({"padding" : "25px 12px"})
      }
      else
      {
        $(".search").css({"padding" : "30px 0px"}) 
      }*/

    })
  });