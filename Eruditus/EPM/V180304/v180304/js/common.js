
$(document).ready(function(){
 
   $(".btnBrochure").click(function() {
    $('html,body').animate({
        scrollTop: $("#requestForm").offset().top-30},
        1000);
	});

    $(".btnBrochureMobile").click(function() {
    $('html,body').animate({
        scrollTop: $("#requestForm").offset().top-100},
        1000);
  });

  if ($('#first_name').hasClass('error')){
    $('label').css('visibility','visible');
  }
   

  //country  
  populateCountries("country");


  
    /*pie chart*/

  var chart = AmCharts.makeChart( "chartdiv", {

  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "36%",
    "value": 36,
    "color":'#35b97d',
  }, 
  {
    "title": "32%",
    "value": 32,
    "color":"#7dccb6"
  } ,

  {
    "title": "9%",
    "value": 9,
    "color":"#e5f7f7"
  } ,
  {
    "title": "2%",
    "value": 2,
    "color":"#4e4e4e"
  },
  {
    "title": "9%",
    "value": 9,
    "color":"#5c5c5c"
  } ,
   {
    "title": "9%",
    "value": 9,
    "color":"#939498"
  }  ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,
  "colorField": "color",
  "radius": "35%",
  "innerRadius": "50%",
  "labelText": "[[title]]",
  "export": {
    "enabled": false
  },
  "balloon": {
    "enabled": false
  }

 });

var chart = AmCharts.makeChart( "chartdiv2", {
  "type": "pie",
  "hideCredits":true,
  "theme": "light",
  "dataProvider": [ {
    "title": "2%",
    "value": 2,
    "color":'#227fbc',
  },
  { 
    "title" : "2%",
    "value" : 2,
    "color" : '#309dde'
  },
  {
    "title": "11%",
    "value": 11,
    "color":"#59c4f2"
  } ,
  {
    "title": "5%",
    "value": 5,
    "color":"#8ad9ff"
  } ,
 {
    "title": "2%",
    "value": 2,
    "color":"#bde4f5"
  } ,
   {
    "title": "2%",
    "value": 2,
    "color":"#f05553"
  },
  {
    "title": "2%",
    "value": 2,
    "color":"#f26671"
  } ,
    {
    "title": "7%",
    "value": 7,
    "color":"#f88686"
  } ,
   {
    "title": "9%",
    "value": 9,
    "color":"#f6a6a7"
  } ,
   {
    "title": "2%",
    "value": 2,
    "color":"#f5e2db"
  } ,
  {
    "title": "2%",
    "value": 2,
    "color":'#40b67c',
  }, {
    "title": "2%",
    "value": 2,
    "color":"#55c39e"
  },
  {
    "title": "11%",
    "value": 11,
    "color":"#7dccb6"
  } ,
  {
    "title": "2%",
    "value": 2,
    "color":"#9bd8d1"
  } ,
  {
    "title": "2%",
    "value": 2,
    "color":"#eff9fb"
  } ,
   {
    "title": "5%",
    "value": 5,
    "color":"#464646"
  },
  {
    "title": "25%",
    "value": 25,
    "color":"#5c5c5c"
  },
  {
    "title": "2%",
    "value": 2,
    "color":"#95969b"
  } ,
  {
    "title": "2%",
    "value":2,
    "color":"#adadb5"
  }  ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius":12,
  "colorField": "color",
  "radius": "35%",
  "innerRadius": "50%",
  "labelText": "[[title]]",
  "export": {
    "enabled": false
  },
   "balloon": {
    "enabled": false
  }
 });

var chart = AmCharts.makeChart( "chartdiv3", {
  "type": "pie",
  "hideCredits":true,
  "theme": "light",
  "dataProvider": [ {
    "title": "34%",
    "value": 34,
    "color":'#1a81c4',
  }, {
    "title": "21%",
    "value": 21,
    "color":"#ef544f"
  },
  {
    "title": "45%",
    "value": 45,
    "color":"#37b97d"
  } 
  
   ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius":3,
  "colorField": "color",
  "radius": "35%",
  "innerRadius": "50%",
  "labelText": "[[title]]",
  "export": {
    "enabled": false
  },
   "balloon": {
    "enabled": false
  }
 });

 /*pie chart for Mobile*/
  var chart = AmCharts.makeChart( "chartdivMobile", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "36%",
    "value": 36,
    "color":'#35b97d',
  }, 
  {
    "title": "32%",
    "value": 32,
    "color":"#7dccb6"
  } ,

  {
    "title": "9%",
    "value": 9,
    "color":"#e5f7f7"
  } ,
  {
    "title": "2%",
    "value": 2,
    "color":"#4e4e4e"
  },
  {
    "title": "9%",
    "value": 9,
    "color":"#5c5c5c"
  } ,
   {
    "title": "9%",
    "value": 9,
    "color":"#939498"
  }   ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,
  "colorField": "color",
  "radius": "30%",
  "innerRadius": "45%",
  "labelText": "[[title]]",
  "export": {
    "enabled": false
  },
  "balloon": {
    "enabled": false
  }
 });

var chart = AmCharts.makeChart( "chartdivMobile2", {
  "type": "pie",
  "hideCredits":true,
  "theme": "light",
  "dataProvider": [{
    "title": "2%",
    "value": 2,
    "color":'#227fbc',
  },
  { 
    "title" : "2%",
    "value" : 2,
    "color" : '#309dde'
  },
  {
    "title": "11%",
    "value": 11,
    "color":"#59c4f2"
  } ,
  {
    "title": "5%",
    "value": 5,
    "color":"#8ad9ff"
  } ,
 {
    "title": "2%",
    "value": 2,
    "color":"#bde4f5"
  } ,
   {
    "title": "2%",
    "value": 2,
    "color":"#f05553"
  },
  {
    "title": "2%",
    "value": 2,
    "color":"#f26671"
  } ,
    {
    "title": "7%",
    "value": 7,
    "color":"#f88686"
  } ,
   {
    "title": "9%",
    "value": 9,
    "color":"#f6a6a7"
  } ,
   {
    "title": "2%",
    "value": 2,
    "color":"#f5e2db"
  } ,
  {
    "title": "2%",
    "value": 2,
    "color":'#40b67c',
  }, {
    "title": "2%",
    "value": 2,
    "color":"#55c39e"
  },
  {
    "title": "11%",
    "value": 11,
    "color":"#7dccb6"
  } ,
  {
    "title": "2%",
    "value": 2,
    "color":"#9bd8d1"
  } ,
  {
    "title": "2%",
    "value": 2,
    "color":"#eff9fb"
  } ,
   {
    "title": "5%",
    "value": 5,
    "color":"#464646"
  },
  {
    "title": "25%",
    "value": 25,
    "color":"#5c5c5c"
  },
  {
    "title": "2%",
    "value": 2,
    "color":"#95969b"
  } ,
  {
    "title": "2%",
    "value":2,
    "color":"#adadb5"
  }  ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius":12,
  "colorField": "color",
  "radius": "30%",
  "innerRadius": "45%",
  "labelText": "[[title]]",
  "export": {
    "enabled": false
  },
  "balloon": {
    "enabled": false
  }
 });

var chart = AmCharts.makeChart( "chartdivMobile3", {
  "type": "pie",
  "hideCredits":true,
  "theme": "light",
  "dataProvider": [ {
    "title": "34%",
    "value": 34,
    "color":'#1a81c4',
  }, {
    "title": "21%",
    "value": 21,
    "color":"#ef544f"
  },
  {
    "title": "45%",
    "value": 45,
    "color":"#37b97d"
  } 
  
   ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius":3,
  "colorField": "color",
  "radius": "30%",
  "innerRadius": "45%",
  "labelText": "[[title]]",
  "export": {
    "enabled": false
  },
  "balloon": {
    "enabled": false
  }
 });

$('.carousel').carousel({
  interval: 2000,
  interval:false
})

$('.owl-carousel').owlCarousel({
              loop:false,
              margin:10,
              responsiveClass:true,
              responsive:{
                  0:{
                      items:1,
                      nav:false,
                      dots:true,
                      
                  },
                  600:{
                      items:2,
                      nav:false,
                      dots:true,
                      
                  },
                  1000:{
                      items:3,
                      nav:false,
                      dots:true,
                      autoplay:true,
					autoplayTimeout:5000,
					autoplayHoverPause:false
                  }
              }
          });


 //populateCountries("countryPop");

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
       designation: {
        required: true       
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
    }, 
    messages: {
      salutation: {
        required: "Please provide salutation"
      },
      first_name: {
        required: "Please provide your First Name",
        specialChar:"Please provide only alphanumeric values",
      },
      last_name: {
        required: "Please provide your Last Name",
        specialChar:"Please provide only alphanumeric values",
      },
      city:{
        required: "Please provide city Name",
        specialChar:"Please provide only alphanumeric values",
      },
      country:{
        required: "Please provide Country Name",
        notEqual: "Please provide Country Name",
      },
      designation:{
        required: "Please provide Designation",
        notEqual: "Please provide Designation",
      },
      email:{
        required: "Please provide your email",
        email: "Please provide valid email",
        customemail: "Please provide valid email",
      },
      code: {
        required: "Country Code",
        digits: "Please provide only digits (0 - 9) in country code",
        rangelength: "Please provide valid country code",     
      },
      mobile: {
        required: "Your Contact Number",
        digits: "Please provide only digits (0 - 9) in Contact Number",
        rangelength: "Please provide valid Contact Number",   
      },
      company:{
        required: "Please provide Company Name",
        specialChar:"Please provide only alphanumeric values",
      },
      industry:{
        required: "Please select Industry",
        specialChar:"Please provide only alphanumeric values",
      },
      title:{
        required: 'Please provide Designation',
		specialChar:"Please provide only alphanumeric values",
      },
      workexp: {
        required: "Please provide Work Exp",
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
      trackEvent('click','DBLP v180304','FormSubmit','Form_Submit')
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

function trackEvent(event, category, action, label) {
    ga('send', 'event', category, action, label);
    console.log('GA==' + event + '==' + category + '==' + action + '==' + label );
  } 