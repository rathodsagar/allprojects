$(document).ready(function(){

	$('#nav-expander').on('click',function(e){
		e.preventDefault();
		$('body').toggleClass('nav-expanded');
	});
	$('#nav-close').on('click',function(e){
		e.preventDefault();
		$('body').removeClass('nav-expanded');
	});

	$( "#ninja-slider .ns-img" ).hover(function() {
		$("#ninja-slider-prev").css({"display":"block"}); 
		$("#ninja-slider-next").css({"display":"block"});
	});

	$("#ninja-slider")
	.mouseenter(function() {
	    // console.log('enter');
	    $("#ninja-slider-prev").css({"display":"block"}); 
		$("#ninja-slider-next").css({"display":"block"});
	})
	.mouseleave(function() {
		// console.log('exit'); 
		$("#ninja-slider-prev").css({"display":"none"}); 
		$("#ninja-slider-next").css({"display":"none"});
	});
	
	
    $("#btn-minus").on("click",function(){
        var now = $(".qty-valid > input").val();
        if ($.isNumeric(now)){
            if (parseInt(now) -1 > 0){ now--;}
            $(".qty-valid > input").val(now);
        }else{
            $(".qty-valid > input").val("1");
        }
    })            
    $("#btn-plus").on("click",function(){
        var now = $(".qty-valid > input").val();
        if ($.isNumeric(now)){
            $(".qty-valid > input").val(parseInt(now)+1);
        }else{
            $(".qty-valid > input").val("1");
        }
    })

    $("#order-success-alert").fadeOut(10000);


	$(document).scroll(function () {
	    var y = $(this).scrollTop();
	    if (y > 150) {
	        $('.scroll').fadeIn();
	    } 
	    else 
	    {
	       $('.scroll').fadeOut();
	    }	
	});

	$('.scroll #top').click(function(){
    	$('html, body').animate({scrollTop: 0}, 'slow');
	});


	/*$(document).ready(function(){
	   var bodyHeight = $("body").height(); 	
	   alert(bodyHeight);
	   var winHeight = $(window).height();
	   alert(winHeight);
	   $("body").css({"min-height": + winHeight});
	});*/

});