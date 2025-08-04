   

 $(document).ready(function(){

    $(".btnDownloadbottom").click(function() {
  $('html,body').animate({
      scrollTop: $("#frm").offset().top-100},
      1000);
});

// menu scroll
$('#slideNav').scrollTabs();


//country 
 populateCountries("country");
 populateCountries("country1");

//form validation
  var submitted = false;
  $("#frm").validate({ 
    rules: {
      salutation: {
        required: true,
      },
      first_name: {
        required: true,
        specialChar:true
      },
      last_name: {
        required: true,
        specialChar:true
      },
      city: {
        required: true,
        specialChar:true
      },
      country:{
        required: true,
        notEqual: "-1"
      },
      email:{
        required: true,
        email:true,
        customemail:true
      },
      code: {
        required: true,
        digits: true,
        rangelength: [2, 8],      
      },
      mobile: {
        required: true,
        digits: true,
        rangelength:  function(element){
              if($("#country").val()=='India'){
                return [10, 10];
              }
              else{
                return [5, 20];
              }
            },      
      },
      company: {
        required: true,
        specialChar:true
      },
      industry:{
        required: true,
      },
      title: {
        required: true,
        specialChar:true
      },
      workexp: {
        required: true,
      },
      finance: {
        required: true,
      },
    }, 
    messages: {
      salutation: {
        required: "Please provide salutation"
      },
      first_name: {
        required: "Please provide your first name",
        specialChar:"Please provide only alphanumeric values",
      },
      last_name: {
        required: "Please provide your last name",
        specialChar:"Please provide only alphanumeric values",
      },
      city:{
        required: "Please provide city name",
        specialChar:"Please provide only alphanumeric values",
      },
      country:{
        required: "Please provide country name",
        notEqual: "Please provide country name",
      },
      email:{
        required: "Please provide your email",
        email: "Please provide valid email",
        customemail: "Please provide valid email",
      },
      code: {
        required: "Please provide country code",
        digits: "Please provide only digits (0 - 9) in country code",
        rangelength: "Please provide valid country code",     
      },
      mobile: {
        required: "Please provide your phone no",
        digits: "Please provide only digits (0 - 9) in phone no",
        rangelength: "Please provide valid phone no",   
      },
      company:{
        required: "Please provide company name",
        specialChar:"Please provide only alphanumeric values",
      },
      industry:{
        required: "Please select industry",
        specialChar:"Please provide only alphanumeric values",
      },
      title:{
        required: 'Please provide designation',
      },
      workexp: {
        required: "Please provide work exp",
      },
      finance: {
        required: "Please provide financing program",
      }        
    },
    showErrors: function(errorMap, errorList) {
      if (submitted) {
        var summary = "You have the following errors: \n";
        $.each(errorList, function() { summary += " * " + this.message + "\n"; });
        var summary = "Please provide all required information";
        alert(summary);
        submitted = false;
      }
      this.defaultShowErrors();
    },          
    invalidHandler: function(form, validator) {
      submitted = true;
    },
     errorPlacement: function(error, element){
      //error.appendTo( element.siblings(".help-block") );
    },
    submitHandler: function(form){
      //$('#frm')[0].submit(); // 
      trackEvent('click','DBLP V180402M','FormSubmit','Form_Submit')
      form.action ='submit.php';
      var btn = $('input[type="submit"]');
      btn.val("Processing...");
      btn.attr("disabled",true);
      $("#frm").valid();
      form.submit();
      
    }
  });
                  
  //custom validation rule
  $.validator.addMethod("customemail", 
    function(value, element) {
      if ($.trim(value) != ""){
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      return pattern.test(value);
      }     
      else
      {
        return true;
      }
    }, 
    "Please provide valid email format"
  );
  
  jQuery.validator.addMethod("specialChar", function(value, element) {
     return this.optional(element) || /([0-9a-zA-Z\s])$/.test(value);
    }, "Please Fill Correct Value in Field.");

  jQuery.validator.addMethod("notEqual", function(value, element, param) {
    return this.optional(element) || value != param;
  },"Please select valid country");


//popup form validation 
  var submitted = false;
  $("#frm1").validate({ 
    rules: {
      salutation: {
        required: true,
      },
      first_name: {
        required: true,
        specialChar:true
      },
      last_name: {
        required: true,
        specialChar:true
      },
      city: {
        required: true,
        specialChar:true
      },
      country:{
        required: true,
        notEqual: "-1"
      },
      email:{
        required: true,
        email:true,
        customemail:true
      },
      code: {
        required: true,
        digits: true,
        rangelength: [2, 8],      
      },
      mobile: {
        required: true,
        digits: true,
        rangelength:  function(element){
              if($("#country").val()=='India'){
                return [10, 10];
              }
              else{
                return [5, 20];
              }
            },      
      },
      company: {
        required: true,
        specialChar:true
      },
      industry:{
        required: true,
      },
      title: {
        required: true,
        specialChar:true
      },
      workexp: {
        required: true,
      },
       finance: {
        required: true,
      },
    }, 
    messages: {
      salutation: {
        required: "Please provide salutation"
      },
      first_name: {
        required: "Please provide your first name",
        specialChar:"Please provide only alphanumeric values",
      },
      last_name: {
        required: "Please provide your last name",
        specialChar:"Please provide only alphanumeric values",
      },
      city:{
        required: "Please provide city name",
        specialChar:"Please provide only alphanumeric values",
      },
      country:{
        required: "Please provide country name",
        notEqual: "Please provide country name",
      },
      email:{
        required: "Please provide your email",
        email: "Please provide valid email",
        customemail: "Please provide valid email",
      },
      code: {
        required: "Please provide country code",
        digits: "Please provide only digits (0 - 9) in country code",
        rangelength: "Please provide valid country code",     
      },
      mobile: {
        required: "Please provide your phone no",
        digits: "Please provide only digits (0 - 9) in phone no",
        rangelength: "Please provide valid phone no",   
      },
      company:{
        required: "Please provide company name",
        specialChar:"Please provide only alphanumeric values",
      },
      industry:{
        required: "Please select industry",
        specialChar:"Please provide only alphanumeric values",
      },
      title:{
        required: 'Please provide designation',
      },
      workexp: {
        required: "Please provide work exp",
      } ,
      finance: {
        required: "Please provide work exp",
      }       
    },
    showErrors: function(errorMap, errorList) {
      if (submitted) {
        var summary = "You have the following errors: \n";
        $.each(errorList, function() { summary += " * " + this.message + "\n"; });
        var summary = "Please provide all required information";
        alert(summary);
        submitted = false;
      }
      this.defaultShowErrors();
    },          
    invalidHandler: function(form, validator) {
      submitted = true;
    },
     errorPlacement: function(error, element){
      //error.appendTo( element.siblings(".help-block") );
    },
    submitHandler: function(form){
      //$('#frm')[0].submit(); // 
      trackEvent('click','DBLP V180402M','FormSubmit','Form_Submit')
      form.action ='submit.php';
      var btn = $('input[type="submit"]');
      btn.val("Processing...");
      btn.attr("disabled",true);
      $("#frm-popup").valid();
      form.submit();
      
    }
  });
                  
  //custom validation rule
  $.validator.addMethod("customemail", 
    function(value, element) {
      if ($.trim(value) != ""){
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      return pattern.test(value);
      }     
      else
      {
        return true;
      }
    }, 
    "Please provide valid email format"
  );
  
  jQuery.validator.addMethod("specialChar", function(value, element) {
     return this.optional(element) || /([0-9a-zA-Z\s])$/.test(value);
    }, "Please Fill Correct Value in Field.");

  jQuery.validator.addMethod("notEqual", function(value, element, param) {
    return this.optional(element) || value != param;
  },"Please select valid country");
















// $('#first_name').on('input', function() {
//   var input=$(this);
//   var is_name=input.val();
//   if(is_name){input.removeClass("invalid").addClass("valid");}
//   else{input.removeClass("valid").addClass("invalid");}
// });

// $("#broucher_button").click(function(event){

//   var form_data=$("#frm").serializeArray();

//   var error_free=true;
//   for (var input in form_data){
//     alert(form_data[input]['name']);
//     var element=$("#"+form_data[input]['name']);
//     alert(element);
//     var valid=element.hasClass("valid");
//     var error_element=$("span", element.parent());
//     if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
//     else{error_element.removeClass("error_show").addClass("error");}
//   }
//   if (!error_free){
//     event.preventDefault(); 
//   }
//   else{
//     alert('No errors: Form will be submitted');
//   }
// });

 /*top menu*/
var hidWidth;
var scrollBarWidths = 40;

var widthOfList = function(){
  var itemsWidth = -50;
  $('.item').each(function(){
    var itemWidth = $(this).outerWidth();
    itemsWidth+=itemWidth;
  });
  //alert(itemsWidth);
  return itemsWidth;
};

var widthOfHidden = function(){
  return (($('.wrapper').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
};

var getLeftPosi = function(){
  //return $('.item:first-child').position().left;
  return $('.list').position().left;
};

var reAdjust = function(){
  if (($('.wrapper').outerWidth()) < widthOfList()) {
    $('.scroller-right').show();
  }
  else {
    $('.scroller-right').hide();
    /*
    var leftPos = $('.item:first-child').position().left;
  $('.item').animate({left:"-="+leftPos+"px"},'slow');
    */
  }
  
  if (getLeftPosi()<0) {
    $('.scroller-left').show();
  }
  else {
    $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
    $('.scroller-left').hide();
  }
}

reAdjust();

$(window).on('resize',function(e){  
    reAdjust();
});

$('.scroller-right').click(function() {
  
  $('.scroller-left').fadeIn('slow');
  $('.scroller-right').fadeOut('slow');
  
  $('.list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){
    //reAdjust();
  });   
});

$('.scroller-left').click(function() {
    //var leftPos = $('.item:first-child').position().left;
  //$('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
    //$('.scroller-left').hide();
  
  $('.scroller-right').fadeIn('slow');
  $('.scroller-left').fadeOut('slow');
  
    $('.list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){
    
    });
  
});    


/*top menu end*/
/*read more option*/
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
$('.read-more-content').addClass('hide')
$('.read-more-show, .read-more-hide').removeClass('hide')

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
  $(this).next('.read-more-content').removeClass('hide');
  $(this).addClass('hide');
  e.preventDefault();
});

// Changes contributed by @diego-rzg
$('.read-more-hide').on('click', function(e) {
  var p = $(this).parent('.read-more-content');
  p.addClass('hide');
  p.prev('.read-more-show').removeClass('hide'); // Hide only the preceding "Read More"
  e.preventDefault();
});
$('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
    var $old_tab = $($(e.target).attr("href"));
    var $new_tab = $($(e.relatedTarget).attr("href"));

    if($new_tab.index() < $old_tab.index()){
      $old_tab.css('position', 'relative').css("right", "0").show();
      $old_tab.animate({"right":"-100%"}, 300, function () {
        $old_tab.css("right", 0).removeAttr("style");
      });
    }
    else {
      $old_tab.css('position', 'relative').css("left", "0").show();
      $old_tab.animate({"left":"-100%"}, 300, function () {
        $old_tab.css("left", 0).removeAttr("style");
      });
    }
  });

  $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    var $new_tab = $($(e.target).attr("href"));
    var $old_tab = $($(e.relatedTarget).attr("href"));

    if($new_tab.index() > $old_tab.index()){
      $new_tab.css('position', 'relative').css("right", "-2500px");
      $new_tab.animate({"right":"0"}, 500);
    }
    else {
      $new_tab.css('position', 'relative').css("left", "-2500px");
      $new_tab.animate({"left":"0"}, 500);
    }
  });

  // $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  //   // your code on active tab shown
  // });

/*sticky header*/
 /* $(window).scroll(function() {  
    var bannerHight = $(".banner").height();  
    var scroll = $(window).scrollTop();
     if (scroll > bannerHight) {
      $("#topMenu").addClass("sticky");
    }else{
      $("#topMenu").removeClass("sticky");
    }
    
  });*/

  $(window).scroll(function(){
    if ($(window).scrollTop() > 100) {
        $('#topMenu').addClass('fixed-header');
       
    }
    else {
        $('#topMenu').removeClass('fixed-header');
       
    }
});

 


/*scroll to top on menu click*/
    $(".owl-carousel-tab .item a").click(function() {
    $('html,body').animate({
        scrollTop: $(".mobilePage").offset().top},
        2000);

});

/*brochure button on overview page*/
    $(".btnBrochure").click(function() {
    $('html,body').animate({
        scrollTop: $("#requestForm").offset().top-80},
        1000);
});






    /*pie chart*/
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "America",
    "value": 2,
    "color":'#52a3d1',
  }, {
    "title": "Australia",
    "value": 9,
    "color":"#66add6"
  },
  {
    "title": "APAC",
    "value": 9,
    "color":"#9bc9e5"
  } ,
  {
    "title": "Asia",
    "value": 39,
    "color":"#d2f0f5"
  } ,
  {
    "title": "Europe",
    "value": 82,
    "color":"#4ddce0"
  } ,
   {
    "title": "Middle East",
    "value": 9,
    "color":"#7ee6ed"
  }  ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,
  "colorField": "color",
  "radius": "38%",
  "innerRadius": "55%",
  "labelText": "[[value]]",
  "export": {
    "enabled": false
  }
 });

var chart = AmCharts.makeChart( "chartdiv2", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Advertising",
    "value": 2,
    "color":'#52a3d1',
  }, {
    "title": "Education",
    "value": 9,
    "color":"#66add6"
  },
  {
    "title": "Agriculture",
    "value": 9,
    "color":"#9bc9e5"
  } ,
  {
    "title": "Banking",
    "value": 39,
    "color":"#eefcfe"
  } ,
  {
    "title": "Energy",
    "value": 82,
    "color":"#9bc9e5"
  } ,
   {
    "title": "Fashion",
    "value": 9,
    "color":"#7ee6ed"
  } ,
  {
    "title": "Finance",
    "value": 3,
    "color":'#f1aad5',
  }, {
    "title": "Agriculture",
    "value": 2,
    "color":"#f6b3da"
  },
  {
    "title": "Education",
    "value": 3,
    "color":"#f9c0e0"
  } ,
  {
    "title": "Advertising",
    "value": 9,
    "color":"#f6b3da"
  } ,
  {
    "title": "Energy",
    "value": 82,
    "color":"#fbd1e9"
  } ,
   {
    "title": "Banking",
    "value": 9,
    "color":"#f1e2e8"
  }  ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius":12,
  "colorField": "color",
  "radius": "38%",
  "innerRadius": "55%",
  "labelText": "[[value]]",
  "export": {
    "enabled": false
  }
 });

var chart = AmCharts.makeChart( "chartdiv3", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "10-15 Years",
    "value": 34,
    "color":'#00bfee',
  }, {
    "title": "15-20 Years",
    "value": 21,
    "color":"#f9a7d4"
  },
  {
    "title": "> 20 Years",
    "value": 45,
    "color":"#24dde0"
  } ,
  
   ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius":3,
  "colorField": "color",
  "radius": "38%",
  "innerRadius": "55%",
  "labelText": "[[value]]",
  "export": {
    "enabled": false
  }
 });


/*top navigation */
$('.owl-carousel-tab').owlCarousel({
      loop:true,
      // margin:0,
      stagePadding: 20,
      // center: true,
      responsiveClass:true,
      navText : ["",""],
      rewindNav : true,
      responsive:{
          0:{
              items:3,
              nav:false
          },
          600:{
              items:3,
              nav:false
          },
          1000:{
              items:3,
              nav:false,
              loop:true              
          }
      }
  })





  /*active panel*/
  $('#topMenu .owl-item a').on("click", function() {
      var active_id=$(this).attr("data-id");
    if ($('.tab-content .tab-pane').hasClass('in')){
       // alert(active_id);      
          $('.nav-link').removeClass('active');
         $(this).addClass('active');
        
         //$('#topMenu .owl-item a').addClass('active2');
      } 
  }); 


 
});
$(function(){
 var hash = window.location.hash;
 hash && $('ul.nav span a[href="' + hash + '"]').tab('show');

 $('.nav-tabs span a').click(function (e) {
   $(this).tab('show');
   var scrollmem = $('body').scrollTop();
   window.location.hash = this.hash;
   $('html,body').scrollTop(scrollmem);
 });
});





  // Function that is used for click event and page load
function loadTab() {
    $("ul.tabs li").removeClass("active");
    $(this).addClass("active");
    $(".tab_content").hide();
    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
}

  // set up Click Event
$("ul.tabs li").click( loadTab );

var tab = window.location.hash;

  // check to see if there was a tab in the location, and if
  //    so, call loadTab if from the context of the proper <li>.
if( $("ul.tabs li:has(a[href=" + tab + "])").length ) {
    loadTab.call($("ul.tabs li:has(a[href=" + tab + "])")[0]);
}
    $('#slideNav').scrollTabs({
      scroll_distance: 350,
      scroll_duration: 350,
      left_arrow_size: 26,
      right_arrow_size: 26,
      click_callback: function(e){
        var val = $(this).attr('rel');
        if(val){
          window.location.href = val;
        }
      }
    });
 /*form validation*/

// function validatephone(phone) 
// {
//     var maintainplus = '';
//     var numval = phone.value
//     if ( numval.charAt(0)=='+' )
//     {
//         var maintainplus = '';
//     }
//     curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
//     phone.value = maintainplus + curphonevar;
//     var maintainplus = '';
//     phone.focus;
// }
// // validates text only
// function Validate(txt) {
//     txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
// }
// // validate email
// function email_validate(email)
// {
// var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

//     if(regMail.test(email) == false)
//     {
//     document.getElementById("status").innerHTML    = "<span class='warning'>Email address is not valid yet.</span>";
//     }
//     else
//     {
//     document.getElementById("status").innerHTML = "<span class='valid'>Thanks, you have entered a valid Email address!</span>"; 
//     }
// }


function trackEvent(event, category, action, label) {
    ga('send', 'event', category, action, label);
    console.log('GA==' + event + '==' + category + '==' + action + '==' + label );
  } 

// function validation_new(){
//   var first_name = $('#first_name').val();
//     if($('#first_name').val() == ""){
//        $('#error_name').html("Please provide your first name");
//     }else if( /[^a-zA-Z0-9]/.test( first_name )){
//       $('#error_name').html("Please provide only alphanumeric values");
//     }else{
//        $('#error_name').html("");
//     }




// }



