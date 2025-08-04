<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" href="" type="image/x-icon">
<title>Berkeley Program on Data Science & Analytics (BPDSA)</title>
<meta name='description' content="Data science and data analytics are at the core of every modern globalized industry. Working in today's technology-centric workforce not only requires superior leadership skills, but the ability to translate data problems into the bigger picture for the organization.">
<meta name="keywords" content="%%keywords%%">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="assets/css/style-new.css" rel="stylesheet">
<link href="assets/css/responsive-new.css" rel="stylesheet">
<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=360602,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
/* DO NOT EDIT BELOW THIS LINE */
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-60731492-1', 'auto');
   ga('set', 'anonymizeIp', true); 
  ga('send', 'pageview');
</script>
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '1576886305931743']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript>
<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1576886305931743&amp;ev=PixelInitialized" />
</noscript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>
<link rel="stylesheet" href="https://eruditus.com/programmes/common/css/gdpr.css">
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="f2014177-a012-4cb5-9444-44a12158f8f8" type="text/javascript" async></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<script>
function trackEvent(event, category, action, label) {
    ga('send', 'event', category, action, label);
    console.log('GA==' + event + '==' + category + '==' + action + '==' + label );
}
$(document).ready(function (){
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
				mobile_validation: true,
				mobile_format:true	
			},
			company: {
				required: true,
				specialChar:true
			},
			title: {
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
			industry:{
				required: true,
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
				mobile_format: "Please provide valid phone no",
				mobile_validation: "Please provide valid phone no",		
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
				required: "Please provide work experience",
			}				
		},
		/*showErrors: function(errorMap, errorList) {
			if (submitted) {
				//var summary = "You have the following errors: \n";
				//$.each(errorList, function() { summary += " * " + this.message + "\n"; });
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
		},*/
		submitHandler: function(form){
			//$('#frm')[0].submit(); // 
			trackEvent('click','BPDSA LP','FormSubmit','Form_Submit')
			form.action ='submit.php';
			var btn = $('input[type="submit"]');
			btn.val("Processing...");
			btn.attr("disabled",true);
			form.submit();
			
		}
	});
	
	jQuery.validator.addMethod("mobile_validation", function(value, element) {
	    var mob_no_val = $("#mobile").val();
		mob_no = mob_no_val.split(" ");
		
		var country = $("#country").val().trim();
		if(typeof mob_no[1] !== 'undefined')
		{
			if(country=="India" && mob_no[1].length=="10")
			{
				return true;
			}
			else if(country !="India" && mob_no[1].length>="5" &&  mob_no[1].length<="25")
			{
				return true;
			}
			else{
				return false;
			}
		}
		else
		{
			if(country=="India" && mob_no_val.length >="10" && mob_no_val.length<="13")
			{
				return true;
			}
			else if(country !="India" && mob_no_val.length>="5" && mob_no_val.length<="25")
			{
				return true;
			}
			else{
				return false;
			}
		}
		
	}, "please enter valid number");
	
	jQuery.validator.addMethod("mobile_format", function(value, element) {
		 return this.optional(element) || /([0-9\+\s])$/.test(value);
	}, "Please provide valid format.");
									
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
</script>
</head>
<body>
  <section class="header p-t-b-20 ">
       <div class="container-fluid">
           <div class="row">
                <div class="col-md-3 col-sm-5">
                    <a href="" onclick="trackEvent('click','BPDSA LP','Reload','Berkeley Logo')">
                        <img src="assets/images/Berkeley_logo.png" class="img-fluid" alt="Berkeley Program on Data Science & Analytics" title="Berkeley Program on Data Science & Analytics">
                    </a>
                </div>
                <div class="col-md-5 col-sm-1">
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="info">
                        <p>Email : bpdsa_berkeley@eruditus.com</p>
                        <p>Phone : &nbsp;+91 90290 07437 (India) / +971 44302011 (Dubai) / </p>
                        <p>+65 68714030 (Singapore) / +1(646) 713-0918 (US)</p>
                    </div>
                </div>
            </div>
       </div>
     </section>

    <section>
		<div class="banner">
			<div class="container">
            	<div class="row div-bottom">
            		<div class="col-lg-7 col-md-7 col-sm-12">
            			<div class="bannerText">
							<div class="bannerHeading">
								<h3>Berkeley Program on Data Science & Analytics (BPDSA)</h3>
								<p>November 2018 - March 2019 <br/>
								<span class="fees">Program Fees: $29,000  |  </span>Locations: Berkeley, Online</p>
							</div>
						</div>
            		</div>
            	</div>
            </div>
		</div>
	</section>
	<section id="Programme-Overview" class="contact-section">
		<div class="container">
	        <div id="main-content" class="main">
				<div class="row">
	                <div class="col-lg-5 col-md-5 col-sm-12 order-md-2 order-sm-1">
		                <div id="sidebar" class="sidebar">
					        <div class="sidebar__inner">
					            <div class="requestForm">
								   	<h3 class="m-b-20">Request More info</h3>
									<form class="" role="form" id="frm" name="frm" method="POST" action="submit.php">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-55 rm-mob-pr">
												<div class="form-group first_name">
													<div class="form-group moreControls">
														<select class="form-control" name="salutation" id="salutation">
															<option value="Mr.">Mr.</option>
															<option value="Ms.">Ms.</option>
															<option value="Mrs.">Mrs.</option>
															<option value="Dr.">Dr.</option>
															<option value="Prof.">Prof.</option>
														</select>
														<span></span>                       
													  	<input class="form-control" type="text" id="first_name" placeholder="First Name" name="first_name">
													</div>
													<span id="error_name" class="text-danger"></span>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-41 rm-mob-pr add-mob-pl-5">
												<div class="form-group last_name">
												  <input class="form-control" type="text" placeholder="Last Name" name="last_name" id="last_name"> 
													<div id="errFirst"></div>  
												</div>
											</div>
										</div>
										<div class='row'>
			                                <div class='col-md-12'>
			                                    <div class='form-group company_name'>
			                                        <select id="country" name="country" class="form-control" data-country="US">
			                                        </select>
			                                    </div>
			                                </div>
											<div class='col-md-12'>
												<div class='form-group email'>
													<input type="tel" class="form-control bfh-phone" id="mobile" name="mobile" data-country="country"  placeholder="Mobile" >
			                                       <span id="mobile_err"></span>
												</div>
			                                </div>
			                            </div>	
										<div class='row'>
			                                <div class='col-md-12'>
			                                	<div class="form-group select_country">
			                                       <input type="email" class="form-control" id="email" placeholder="Email Id" name="email">
			                                	</div>
			                                </div>
										</div>
										<div class="row">
											<div class="col-md-12">
											 	<div class="form-group company_name">
													<input class="form-control" type="text" placeholder="Company Name" name="company" id="company">   
													<div id="errFirst"></div>     
											  	</div>
											</div>
											<div class="col-md-12">
												<div class="form-group select_country">
													<input class="form-control" type="text" placeholder="Designation" name="title" id="title">   
													<div id="errFirst"></div>     
												</div>
											</div>
										</div>
										<div class="row">	
											<div class="col-md-12">
												<div class="box-label">
													<div class="title">Work Experience</div>
													<div class="form-check-inline">
														<label class="form-check-label btn btn-radio">
															<input type="radio" class="form-check-input" name="workexp" value="&lt; 10 Years">&lt; 10 Years
														</label>
													</div>
													<div class="form-check-inline">
														<label class="form-check-label btn btn-radio">
															<input type="radio" class="form-check-input" name="workexp" value="10-15 Years">10-15 Years
														</label>
													</div>
													<div class="form-check-inline">
														<label class="form-check-label btn btn-radio">
															<input type="radio" class="form-check-input" name="workexp" value="15-20 Years">15-20 Years
														</label>
													</div>
													<div class="form-check-inline">
														<label class="form-check-label btn btn-radio">
															<input type="radio" class="form-check-input" name="workexp" value="&gt; 20 Years">&gt; 20 Years
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
										  	<div class="form-group" id="gdpr-consent" style="display:none;">
											  	<div class="col-sm-12">
													<label class="checkbox-inline">
													  <input type="checkbox" value="true" name="agree" id="agree">I would like to receive email &amp; other communications from Eruditus &amp; its university partners about this course and other relevant courses.
													</label>
												</div>
											</div>
										</div>
										<div class="row"> 
										  	<div class="col-md-12">
											   <!-- <button type="button" class="btn btn-primary col-xs-12 btnOrange">Download Brochure</button> -->
											   <input type="submit" class="btn btn-primary col-sm-12 btnOrange" value="Download Brochure" >
											</div>
										</div>
										<p style="margin:10px 0 0 0;"><small>Please read our <a href="https://www.eruditus.com/privacy-policy" target="_blank" class="privacy" style="text-decoration:none;color:#003161;font-weight:800;">Privacy Policy</a></small></p>
									</form>
								</div>
					        </div>
					    </div>
				    </div>
				    <div class="col-lg-7 col-md-7 col-sm-12 order-md-1 order-sm-2">
	                	<div id="content">
		                    <div class="paraGraph">
		                        <h5 class="p-t-b-18"><span class="fa fa-play"></span>Program Overview</h5>
		                         <div class="content">
		                            <p style="margin:0px;padding-bottom:0px">Data science and data analytics are at the core of every modern globalized industry. Working in today's technology-centric workforce not only requires superior leadership skills, but the ability to translate data problems into the bigger picture for the organization.
									<br class="hide-mob">
									<br class="hide-mob"> 
									The Berkeley Program on Data Science and Analytics (BPDSA) is a 5-month learning journey into the world of applied data science and analytics. The program will prepare you with the tools to build and lead data science teams through data-driven decision-making. You will learn how to promote a data-driven culture, how to translate business problems, and how to lead a team with a diverse set of skill sets towards solving these problems.
									<br class="hide-mob">
									<br class="hide-mob"> 
									Participants graduate with Certificate of Excellence in Data Science and Analytics.
									<br class="hide-mob">							
									</p>
		                        </div>
		                    </div>
		                </div>
	                </div>
				</div>
			</div>
		</div>
    </section>	
	<section id="Curriculum" class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 no-paddr">
					<div class="paraGraph">
						<h5 class="p-t-b-18"><span class="fa fa-play"></span>Program Curriculum</h5>
						<div class="content">
							<p class="module">Module I</p>
							<p class="module_data"> 
								<i class="fa fa-calendar module_calender" aria-hidden="true"></i> &nbsp; Nov 26 - 30, 2018 <span class="module-padding">&nbsp;</span>
								<i class="fa fa-map-marker module_calender" aria-hidden="true"></i> Berkeley Campus	
							</p>
							<div class="row">
								<div class="col-lg-6 col-sm-12">
									<p class="module-type"><strong>A. Economic Analysis for Decision Making:</strong></p>
									<ul>   
										<li>Tools for competitive advantage</li>
										<li>Product-line pricing analysis</li>
										<li>Decision making under uncertainty</li>
										<li>Designing effective incentives</li>
									</ul>
								</div>
								<div class="col-lg-6 col-sm-12">
									<p class="module-type"><strong>B. Data and Decisions:</strong></p>	
									<ul>   
										<li>Statistical analysis in managerial decision making</li>
										<li>Statistical methods to solve business problems</li>
										<li>Effective data visualization</li>
									</ul>
								</div>
							
							</div>
						 </div>
						
						 <div class="content-mobile">
							<p class="module">Module II</p>
							<p class="module_data"> <i class="fa fa-calendar module_calender" aria-hidden="true"></i>  &nbsp; Weeks of Dec 10, Dec 17 (2018) &amp; Jan 7 (2019)
							</p>
							<p class="module_data"> 
								<i class="fa fa-desktop module_calender" aria-hidden="true"></i> &nbsp; Online
							</p>
							<div class="row">
								<div class="col-lg-6 col-sm-12">
									<p class="module-type"><strong>A. Applications with Live Case Studies/Debrief by faculty</strong></p>
								</div>								
							</div>
						</div>
						
						
						<div class="content">
							<p class="module">Module III</p>
							<p class="module_data"> 
								<i class="fa fa-calendar module_calender" aria-hidden="true"></i> &nbsp; Jan 14 - 18, 2019<span class="module-padding"> &nbsp;</span>
								<i class="fa fa-map-marker module_calender" aria-hidden="true"></i> Berkeley Campus	
							</p>
							<div class="row">
								<div class="col-lg-6 col-sm-12">
									<p class="module-type"><strong>A. Inference and measurement:</strong></p>
									<ul>   
										<li>Micro-econometric data analysis</li>
										<li>A/B Testing</li>
										<li>Experiments to increase profits</li>
									</ul>
								</div>
								<div class="col-lg-6 col-sm-12">
									<p class="module-type"><strong>B. Forecasting and trends:</strong></p>	
									<ul>   
										<li>Predictive analysis</li>
										<li>Time Series forecasting and analysis</li>
									</ul>
								</div>
							</div>
						</div>
						
						 <div class="content-mobile">
							<p class="module">Module IV
							</p>
							<p class="module_data"> <i class="fa fa-calendar module_calender" aria-hidden="true"></i>  &nbsp; Weeks of Feb 4, Feb 18 (2019) & Mar 4 (2019)
							</p>
							<p class="module_data"> 
								<i class="fa fa-desktop module_calender" aria-hidden="true"></i> &nbsp; Online		
							</p>
							<div class="row">
								<div class="col-lg-6 col-sm-12">
									<p class="module-type"><strong>A.  Feedback on Group Projects</strong>
									</p>
								</div>	
								<div class="col-lg-6 col-sm-12">
									<p class="module-type"><strong>B.  Faculty check-in & Coaching</strong>
									</p>
								</div>										
							</div>
						</div>
						
						<div class="content">
							<p class="module">Module V
							</p>
							<p class="module_data"> 
								<i class="fa fa-calendar module_calender" aria-hidden="true"></i> &nbsp; Mar 18-21, 2019<span class="module-padding"> &nbsp;</span>
								<i class="fa fa-map-marker module_calender" aria-hidden="true"></i> Berkeley Campus		
							</p>
							<div class="row">
								<div class="col-lg-6 col-sm-12">
									<p class="module-type"><strong>A. Machine Learning and Artificial Intelligence:</strong></p>
									<ul>   
										<li>Leverage ML and AI for business insights from big data</li>
										<li>Tools for Supervised Learning Methods</li>
										<li>Tools for Unsupervised Learning Methods</li>
									</ul>
								</div>
								<div class="col-lg-6 col-sm-12">
									<p class="module-type"><strong>B. Assembling a Data Science Team:</strong></p>	
									<ul>   
										<li>Mapping of resources from expert backgrounds to solve problems</li>
										<li>Design a tech eco-system which complements the data science team</li>
									</ul>
								</div>
							
							</div>
						</div>
						
						<div class="content">
							<p class="module">Applications </p>
							<ul>   
								<li>Application to Banking, Healthcare, Insurance, Retail, Public Policy, and more</li>
								<li>Application to Marketing, Business Development, Product, Finance, and more</li>
								<li>Industry Panels, including leaders from Silicon Valley Hi-Tech companies</li>
								<li>Capstone Project Presentations</li>
							</ul>
						</div>

						<div class="content no-bordr">
							<p class="module">Guest Speakers and Visits:</p>
							<p>Hear from leading practitioners in the Silicon Valley innovation ecosystem and conduct site visits to startups, accelerator labs and innovative enterprise firms.</p>
							<p class="module-type">
								<strong>Past guest speakers have included:</strong>
							</p>
							<div class="m-b-15">
								<ul>   
									<li>Samba Natarajan, CEO, Group Digital Life, SingTel HQ, Singapore</li>
									<li>Sam Kumar, Managing Director Analytics, Standard Chartered</li>
									<li>Zoher Karu, Managing Director, Head of Data & Analytics, CITI</li>
									<li>George Ng, Co-Founder & CTO, Cyence</li>
									<li>Jim Oliver, VP Advanced Analytics, Business Intelligence, and Decision Sciences, Sam’s Club</li>
									<li>Kane Sweeney, Head of Market Design, UBER</li>
								</ul>
							</div>
							<p class="module-type">
								<strong>Past site visits have included:</strong>
							</p>
							<ul>
								<li>SingTel HQ, Singapore</li>
								<li>AirbnB HQ, San Francisco</li>
								<li>Optimizely HQ, San Francisco</li>
								<li>Oakland A’s HQ, Oakland</li>
							</ul>
							<div class="buttonSection p-t-10 clearfix">
							  	<span>*Note topics are subject to change</span>
							 	<a href="#reqform" onclick="trackEvent('click','BPDSA LP','ScrollUp','Curriculum-DB')">
									<button type="button" class="btn btn-primary col-sm-12 btnDownload float-right btnBrochure d-sm-none d-xs-none">Download Curriculum</button>
							  	</a>
							  	<a href="#reqform" onclick="trackEvent('click','BPDSA LP','ScrollUp','Curriculum-DB')">	
									<button type="button" class="btn btn-primary col-sm-12 btnDownload float-right btnBrochureMobile " >Download Curriculum</button>
							  	</a>
						  	</div>
						</div>
					</div><!--paraGraph end-->
				</div>
			</div>
		</div>
	</section>

	<!-- <section id="Guest-Speakers" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-paddr">
                    <div class="paraGraph">
                        <h5 class="p-t-b-18"><span class="fa fa-play"></span>Guest Speakers and Visits:</h5>
                        <div class="content">
							<p>Hear from leading practitioners in the Silicon Valley innovation ecosystem and conduct site visits to startups, accelerator labs and innovative enterprise firms.</p>
							<p class="module-type">
								<strong>Past guest speakers have included:</strong>
							</p>
							<div class="m-b-15">
								<ul>   
									<li>Samba Natarajan, CEO, Group Digital Life, SingTel HQ, Singapore</li>
									<li>Sam Kumar, Managing Director Analytics, Standard Chartered</li>
									<li>Zoher Karu, Managing Director, Head of Data & Analytics, CITI</li>
									<li>George Ng, Co-Founder & CTO, Cyence</li>
									<li>Jim Oliver, VP Advanced Analytics, Business Intelligence, and Decision Sciences, Sam’s Club</li>
									<li>Kane Sweeney, Head of Market Design, UBER</li>
								</ul>
							</div>
							<p class="module-type">
								<strong>Past site visits have included:</strong>
							</p>
							<ul>
								<li>SingTel HQ, Singapore</li>
								<li>AirbnB HQ, San Francisco</li>
								<li>Optimizely HQ, San Francisco</li>
								<li>Oakland A’s HQ, Oakland</li>
							</ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

	<section id="Key-Takeaways" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-paddr">
                    <div class="paraGraph">
                        <h5 class="p-t-b-18"><span class="fa fa-play"></span>Key Takeaways</h5>
                         <div class="content">
                            <ul>   
								<li>Implement best practices for assembling and leading data science teams</li>
								<li>Apply relevant industry data science methods</li>
								<li>Drive data-driven business decisions across the organization</li>
								<li>Build a data-driven culture and data-driven policy</li>
								<li>Participants graduate with Alumni Benefits</li>
							 </ul>
                         </div>
                    </div><!--paraGraph end-->
                </div>
            </div>
        </div>
    </section>
	
	
	<section id="Who It's For" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-paddr">
                    <div class="paraGraph">
                        <h5 class="p-t-b-18"><span class="fa fa-play"></span>Who It's For</h5>
                         <div class="content">
                            <ul>   
								<li>Directors, VPs</li>
								<li>Senior Managers</li>
								<li>Functional Business Managers and Business Heads</li>
								<li>Leadership Roles with Oversight of Data Science Teams</li>
								<li>Those with a need to Understand Data Analytics</li>
							 </ul>
                         </div>
                    </div><!--paraGraph end-->
                </div>
            </div>
        </div>
    </section>
	
	<section id="Requirements" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-paddr">
                    <div class="paraGraph">
                        <h5 class="p-t-b-18"><span class="fa fa-play"></span>Requirements</h5>
                         <div class="content">
                            <ul>   
								<li>Undergraduate degree</li>
								<li>Fluency in written and spoken English</li>
								<li>Minimum 8 years of professional work experience</li>
							 </ul>
							 
							<div class="buttonSection p-t-10  clearfix">
								<a href="#reqform" onclick="trackEvent('click','BPDSA LP','ScrollUp','Requirements-DB')">
									<button type="button" class="btn btn-primary col-sm-12 btnDownload float-right btnBrochure d-sm-none d-xs-none">Download Brochure</button>
								  </a>
								  <a href="#reqform" onclick="trackEvent('click','BPDSA LP','ScrollUp','Requirements-DB')">	
									<button type="button" class="btn btn-primary col-sm-12 btnDownload float-right btnBrochureMobile " >Download Brochure</button>
								  </a>
							</div> 
                         </div>
                    </div><!--paraGraph end-->
                </div>
            </div>
        </div>
    </section>
	
	
	<section id="Certificate" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-paddr">
                    <div class="paraGraph">
                        <h5 class="p-t-b-18"><span class="fa fa-play"></span>Certificate of Excellence in Data Science and Analytics</h5>
                         <div class="content">
							<div class="row clearfix">
									<div class="col-lg-4 col-sm-12">
										<p class="module"><strong>Alumni Benefits & Events</strong></p>
										<ul>   
											<li>Ability to join local alumni chapters or clubs in your region</li>
											<li>Lifelong access to a 39,000+ network of distinguished Berkeley-Haas Alumni</li>
											<li>Invitations to Berkeley Executive Education networking events</li>
										</ul>
									</div>
									
									<div class="col-lg-4 col-sm-12">
										<p class="module"><strong>Berkeley Resources</strong></p>
										<ul>   
											<li>Access to the UC Berkeley Long Business Library</li>
											<li>Video portal, Haas insights to research highlights, industry speakers</li>
											<li>15% discount to all future Executive Education programs</li>
										</ul>									
									</div>
									
									<div class="col-lg-4 col-sm-12">
										<p class="module"><strong>News & Communication</strong></p>	
										<ul>   
											<li>One-year digital subscription to the California Management Review</li>
											<li>Berkeley-Haas Alumni newsletter</li>
											<li>A Berkeley-Haas email forwarding address</li>
										</ul>
									</div>
								
								</div>
								
								<div class="buttonSection p-t-10  clearfix">						
									<a href="#reqform" onclick="trackEvent('click','BPDSA LP','ScrollUp','Certificate-DB')">
										<button type="button" class="btn btn-primary col-sm-12 btnDownload float-right btnBrochure d-sm-none d-xs-none">Download Brochure</button>
									  </a>
									  <a href="#reqform" onclick="trackEvent('click','BPDSA LP','ScrollUp','Certificate-DB')">	
										<button type="button" class="btn btn-primary col-sm-12 btnDownload float-right btnBrochureMobile " >Download Brochure</button>
									  </a>
								</div> 
						   
                         </div>
                    </div><!--paraGraph end-->
                </div>
            </div>
        </div>
    </section>
	
	
	<section id="Faculty-Directors" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-paddr">
                    <div class="paraGraph">
                        <h5 class="p-t-b-18"><span class="fa fa-play"></span>Faculty Directors</h5>
                         <div class="content">
							<div class="row clearfix">
									<div class="col-lg-4 col-sm-6 col-xs-12">
										<div class="row p-t-b1">
											<div class="col-xs-4">
												<img src="assets/images/kariv.png" class="img-fluid">
											</div>
											<div class="col-xs-7 faculty">
												<h4>Shachar Kariv</h4>
												<p>Faculty Director</p>
											</div>										
										</div>
									</div>
									
									<div class="col-lg-4 col-sm-6 col-xs-12">
										<div class="row p-t-b">
											<div class="col-xs-4">
												<img src="assets/images/steve.png" class="img-fluid">
											</div>
											<div class="col-xs-7 faculty">
												<h4>Steve Tadelis</h4>
												<p>Co - Faculty Director</p>
											</div>										
										</div>
									</div>
									
								</div>
						   
                         </div>
                    </div><!--paraGraph end-->
                </div>
            </div>
        </div>
    </section>
	
	<section id="Additional-Faculty" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-paddr">
                    <div class="paraGraph">
                        <h5 class="p-t-b-18"><span class="fa fa-play"></span>Additional Faculty</h5>
                         <div class="content">
							<div class="row p-l-r-15 clearfix">
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<div class="row div-center">
										<div class="col-xs-4">
											<img src="assets/images/lucas_davis.png" alt="Lucas Davis" title="Lucas Davis" class="img-fluid">
										</div>
										<div class="col-xs-7 faculty">
											<h4>Lucas Davis</h4>
											<p>Associate Professor</p>
										</div>										
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<div class="row div-center">
										<div class="col-xs-4">
											<img src="assets/images/frederico_finan.png" alt="Frederico Finan" title="Frederico Finan" class="img-fluid">
										</div>
										<div class="col-xs-7 faculty">
											<h4>Frederico Finan</h4>
											<p>Associate Professor</p>
										</div>										
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<div class="row div-center">
										<div class="col-xs-4">
											<img src="assets/images/jonathan_kolstad.png" alt="Jonathan Kolstad" title="Jonathan Kolstad" class="img-fluid">
										</div>
										<div class="col-xs-7 faculty">
											<h4>Jonathan Kolstad</h4>
											<p>Associate Professor</p>
										</div>										
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<div class="row div-center">
										<div class="col-xs-4">
											<img src="assets/images/richard_stanton.png" alt="Richard Stanton" title="Richard Stanton" class="img-fluid">
										</div>
										<div class="col-xs-7 faculty">
											<h4>Richard Stanton</h4>
											<p>Professor</p>
										</div>										
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<div class="row div-center">
										<div class="col-xs-4">
											<img src="assets/images/edward_miguel.png" alt="Edward Miguel" title="Edward Miguel" class="img-fluid">
										</div>
										<div class="col-xs-7 faculty">
											<h4>Edward Miguel</h4>
											<p>Oxfam Professor in Environmental and Resource Economics</p>
										</div>										
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<div class="row div-center">
										<div class="col-xs-4">
											<img src="assets/images/supreet_kaur.png" alt="Supreet Kaur" title="Supreet Kaur" class="img-fluid">
										</div>
										<div class="col-xs-7 faculty">
											<h4>Supreet Kaur</h4>
											<p>Assistant Professor</p>
										</div>										
									</div>
								</div>
							</div>						   
                         </div>
                    </div><!--paraGraph end-->
                </div>
            </div>
        </div>
    </section>
	
	<section id="Application-Deadline" class="contact-section">		
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-12 no-paddr">
                    <div class="container no-padd">							
						<p class="module">Fees USD 29,000</p>
                         <div class="content feeSection">							
							<div class="row clearfix">
									<p class="fees-description">Inclusions: Program Materials <br/>
									Exclusions: Travel Costs, Accommodation in Berkeley  & Evening Meals
									</p>
									<div class="col-lg-8 col-sm-12">
									<h3>Application Deadlines</h3>	
										<div class="row p-t-b1">
											<div class="col-lg-10 col-sm-12 col-xs-12 no-padd">
												<div class="col-lg-12 col-sm-12 no-padd ">
													<ul class="feeSection">
														<li class="fees">First Deadline: August 6, 2018 </li>
														<li class="right-section">Second Deadline: September 3, 2018</li>	
													</ul>
													
													<ul class="feeSection">
														<li class="fees">Third Deadline: October 1, 2018</li>
														<li class="right-section">Fourth Deadline: October 29, 2018</li>	
													</ul>
												</div>												
											</div>
										</div>
									</div>	
									
								</div>
								
								<div class="buttonSection p-t-10  clearfix">						
									<a href="#reqform" onclick="trackEvent('click','BPDSA LP','ScrollUp','Fees-DB')">
										<button type="button" class="btn btn-primary col-sm-12 btnDownload float-right btnBrochure d-sm-none d-xs-none">Download Brochure</button>
									  </a>
									  <a href="#reqform" onclick="trackEvent('click','BPDSA LP','ScrollUp','Fees-DB')">	
										<button type="button" class="btn btn-primary col-sm-12 btnDownload float-right btnBrochureMobile " >Download Brochure</button>
									  </a>
								</div> 
                         </div>
                    </div><!--paraGraph end-->
                </div>
            </div>
        </div>	
	</section>
	
	<section>
		<div class="container content">
           <div class="">
			<div class="row footerSection p-t-b-20">              
              <div class="col-md-8 col-sm-12 col-xs-12 ">
                <p class="headline m-b-15">Connect with a program advisor for a 1-1 session</p>
                <div class="contactInfo">
                  <p>Email: <a href="mailto:bpdsa_berkeley@eruditus.com" target="_top">bpdsa_berkeley@eruditus.com</a></p>
                  <p>Phone: +91 90290 07437 (India) / +971 44302011 (Dubai) / +65 68714030 (Singapore) / +1(646) 713-0918 (US)</p>                          
                </div>
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12 partnerLogo m-t-30">
                  <p>Program Partner</p><a href="https://www.eruditus.com" onclick="trackEvent('click','BPDSA LP','Redirect','ERU Logo')"><img src="assets/images/footer-logo.jpg" class="img-fluid" alt="Eruditus Executive Educational" title="Eruditus Executive Educational">
              </a></div>
			</div>
		   </div>
	</section>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0071/5326.js" async="async"></script>
<script src="//www.eruditus.com/programmes/common/js/countries-code.js"></script>
<script src="assets/js/stickybar.js"></script>
<script src="assets/js/custom.js"></script>
<!-- Google Code for Remarketing Tag --> 
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
---------------------------------------------------> 
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 991259245;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script> 
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<script src="//www.eruditus.com/programmes/common/js/gdpr.js" ></script>
<noscript>
<div style="display:inline;"> <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/991259245/?value=0&amp;guid=ON&amp;script=0"/> </div>
</noscript>
<script type="text/javascript">
  _bizo_data_partner_id = "7688";
</script> 
<script type="text/javascript">
(function() {
  var s = document.getElementsByTagName("script")[0];
  var b = document.createElement("script");
  b.type = "text/javascript";
  b.async = true;
  b.src = (window.location.protocol === "https:" ? "https://sjs" : "http://js") + ".bizographics.com/insight.min.js";
  s.parentNode.insertBefore(b, s);
})();
</script>
<noscript>
<img height="1" width="1" alt="" style="display:none;" src="//www.bizographics.com/collect/?pid=7688&fmt=gif" />
</noscript>
</body>
<script>
 populateCountries("country",'mobile');
 $("select").change();
</script>
<!--intercom code-->
<script>
  window.intercomSettings = {
    app_id: "zbmolamk"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/zbmolamk';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
<!-- begin Pardot Website Tracking code -->
<script type="text/javascript">
piAId = '64132';
piCId = '2042';
(function() {
	function async_load(){
		var s = document.createElement('script'); s.type = 'text/javascript';
		s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
		var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
	}
	if(window.attachEvent) { window.attachEvent('onload', async_load); }
	else { window.addEventListener('load', async_load, false); }
})();
</script>
<!-- end Pardot Website Tracking code -->
</body>
</html>