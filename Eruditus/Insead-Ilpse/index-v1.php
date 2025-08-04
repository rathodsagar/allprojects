<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>INSEAD Leadership Programme for Senior Executives - India</title>
<!-- Tracking Code start-->
<!-- Google start-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-60731492-1', 'auto');
  ga('send', 'pageview');
 
</script>
<!--Google end-->
<!--fb remarketing start-->
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
<!--fb remarketing end-->
<!-- Tracking Code end-->
<script src="js/countries.js"></script>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!--  <link href="css/bootstrap.css" rel="stylesheet">  -->
<link href="css/style-v1.css?v=2.0.8" type="text/css" rel="stylesheet">
<script>
 function IsNumeric(sText)
            {
                var ValidChars = "0123456789.#@*_-\/|$%:,;<>";
                var IsNumber=true;
                var Char;
                for (i = 0; i < sText.length && IsNumber == true; i++) 
                  { 
                      Char = sText.charAt(i); 
                      if (ValidChars.indexOf(Char) != -1) 
                        {
                            IsNumber = "false";
                            alert ("Please enter characters only.");                        
                        }
                  }
               return IsNumber;   
            }//character validation

            function IsDrop(sText)
            {
                var ValidChars = "0123456789#@*_-\/|$%:;<>";
                var IsNumber=true;
                var Char;
                    
                for (i = 0; i < sText.length && IsNumber == true; i++) 
                  { 
                      Char = sText.charAt(i); 
                      if (ValidChars.indexOf(Char) != -1) 
                        {
                            IsNumber = "false";
                        }
                  }
               return IsNumber;   
            }//drop down validation
        
        /*  function IsDrop1(sText)
            {
                var ValidChars = "0123456789#@*_\|%:;<>.";
                var IsNumber=true;
                var Char;
                    
                for (i = 0; i < sText.length && IsNumber == true; i++) 
                  { 
                      Char = sText.charAt(i); 
                      if (ValidChars.indexOf(Char) != -1) 
                        {
                            IsNumber = "false";
                            alert ("Please selct the Country of Residence");
                        }
                  }
               return IsNumber;   
            } //residenceCountry drop down validation
            
            
            function IsDrop2(sText)
            {
                var ValidChars = "0123456789#@*_\|%:;<>.";
                var IsNumber=true;
                var Char;
                    
                for (i = 0; i < sText.length && IsNumber == true; i++) 
                  { 
                      Char = sText.charAt(i); 
                      if (ValidChars.indexOf(Char) != -1) 
                        {
                            IsNumber = "false";
                            alert ("Please selct the preferred Time for the Session");
                        }
                  }
               return IsNumber;   
            }// sessionTime drop down validation  */
            
        
            function IsChar(sText)
            {
                var ValidChars = "0123456789+ ";
                var IsNumber=true;
                var Char;
                
                for (i = 0; i < sText.length && IsNumber == true; i++) 
                  { 
                      Char = sText.charAt(i); 
                      if (ValidChars.indexOf(Char) == -1) 
                         {
                            IsNumber = "false";
                            alert ("Please enter numeric only.");                       
                         }
                  }
               return IsNumber;   
            }//number validation
             function IsCharCode(sText)
            {
                var ValidChars = "0123456789+";
                var IsNumber=true;
                var Char;
                
                for (i = 0; i < sText.length && IsNumber == true; i++) 
                  { 
                      Char = sText.charAt(i); 
                      if (ValidChars.indexOf(Char) == -1) 
                         {
                            IsNumber = "false";
                            alert ("Please enter numeric only.");                       
                         }
                  }
               return IsNumber;   
            }//number validation
			function IsCharMobile(sText)
            {
                var ValidChars = "0123456789";
                var IsNumber=true;
                var Char;
                
                for (i = 0; i < sText.length && IsNumber == true; i++) 
                  { 
                      Char = sText.charAt(i); 
                      if (ValidChars.indexOf(Char) == -1) 
                         {
                            IsNumber = "false";
                            alert ("Please enter numeric only.");                       
                         }
                  }
               return IsNumber;   
            }//number validation
            function IsChar1(sText)
            {
                var ValidChars = ".#@*_-\/|$%+-=:;<>";
                var IsNumber=true;
                var Char;
                
                for (i = 0; i < sText.length && IsNumber == true; i++) 
                  { 
                      Char = sText.charAt(i); 
                      if (ValidChars.indexOf(Char) == -1) 
                         {
                            IsNumber = "false";
                            alert ("Please enter in the given format only.");                       
                         }
                  }
               return IsNumber;   
            }//phone number validation
        //dont change the above code
                
        function validate()
        {
                  //title validation
          /*  if(document.frm.title.value=="blank")
            {
                alert("Please select the Title");
                return false;
                document.frm.title.focus();
            }//first name
            else (document.frm.title.value!="")
            {
                var mytext=document.frm.title.value;
                var number=IsDrop(mytext);
                if (number=="false")
                {
                    document.frm.title.value="";
                    document.frm.title.focus();
                    return false;
                }
            }//titlevalidation
            */
            
            if(document.frm.salutation.value=="")
            {
                alert("Please Select Salutation");
                return false;
                document.frm.salutation.focus();
            }//last name
            //first name validation
            if(myTrim(document.frm.first_name.value)=="")
            {
                alert("Please enter the First Name");
                return false;
                document.frm.first_name.focus();
            }//first name
            else (document.frm.first_name.value!="")
            {
                var mytext=document.frm.first_name.value;
                var number=IsNumeric(mytext);
                if (number=="false")
                {
                    document.frm.first_name.value="";
                    document.frm.first_name.focus();
                    return false;
                }
            }//first name validation
            
               //last name validation
            if(myTrim(document.frm.last_name.value)=="")
            {
                alert("Please enter the Last Name");
                return false;
                document.frm.last_name.focus();
            }//last name
            else (document.frm.last_name.value!="")
            {
                var mytext=document.frm.last_name.value;
                var number=IsNumeric(mytext);
                if (number=="false")
                {
                    document.frm.last_name.value="";
                    document.frm.last_name.focus();
                    return false;
                }
            }//last name validation
            
        if(myTrim(document.frm.company.value)=="")
            {
                alert("Please enter your Company name");
                return false;
                document.frm.company.focus();
            }//company
            else (document.frm.company.value!="")
            {
                var mytext=document.frm.company.value;
                var number=IsNumeric(mytext);
                if (number=="false")
                {
                    document.frm.company.value="";
                    document.frm.company.focus();
                    return false;
                }
            }//company validation
            
            
            if(myTrim(document.frm.title.value)=="")
            {
                alert("Please enter your Designation");
                return false;
                document.frm.title.focus();
            }//company
            else (document.frm.title.value!="")
            {
                var mytext=document.frm.title.value;
                var number=IsNumeric(mytext);
                if (number=="false")
                {
                    document.frm.title.value="";
                    document.frm.title.focus();
                    return false;
                }
            }//designation validation
        

               //city validation
            if(myTrim(document.frm.city.value)=="")
            {
                alert("Please enter your City");
                return false;
                document.frm.city.focus();
            }//city
            else (document.frm.city.value!="")
            {
                var mytext=document.frm.city.value;
                var number=IsNumeric(mytext);
                if (number=="false")
                {
                    document.frm.city.value="";
                    document.frm.city.focus();
                    return false;
                }
            }//city validation
        
         if(document.frm.country.value==-1 || document.frm.country.value=="")
            {
                alert("Please enter your Country");
                return false;
                document.frm.country.focus();
            }//last name
            else (document.frm.country.value!="")
            {
                var mytext=document.frm.country.value;
                var number=IsNumeric(mytext);
                if (number=="false")
                {
                    document.frm.country.value="";
                    document.frm.country.focus();
                    return false;
                }
            }//country validation
        
            if(document.frm.workexp.value=="")
            {
                alert("Please Select your Work Experience");
                return false;
                document.frm.workexp.focus();
            }//last name
            /*
			if(document.frm.attenddate.value=="")
            {
                alert("Please Select When are you planning to attend program?");
                return false;
                document.frm.attenddate.focus();
            }//last name
            if(document.frm.finance.value=="")
            {
                alert("Please Select How will you be financing your program");
                return false;
                document.frm.finance.focus();
            }*/
            
            //email    
            if(document.frm.email.value=="")
            {
                alert("Please specify your Email address.")
                document.frm.email.focus()
                ok=false
                return ok
            }
            else//email
            {
                var str =/[-a-zA-Z0-9_\.]+@[-a-zA-Z0-9]+\.[-a-zA-Z0-9\.]+/;
                var eflag = document.frm.email.value.match(str);
                if(eflag!=document.frm.email.value)
                {
                    alert("Please enter a valid Email Address.")
                    document.frm.email.focus();
                    document.frm.email.select();
                    return false;
                }
            }  //email validation
           
            //code validation
        
			if(document.frm.code.value=="")
            {
                alert("Please enter the country code");
                document.frm.code.focus();
                return false;
            }//phone
            else if(document.frm.code.value!="")
            {
                var mytext=document.frm.code.value;
                var number=IsCharCode(mytext);
                if (number=="false")
                {
                    document.frm.code.value="";
                    document.frm.code.select();
                   
                    return false;
                }
            }
			else (document.frm.code.value!="")
            {
				var mytext=document.frm.code.value;
				 var len=mytext.length;
				 if(len>4)
				 {
                alert("Country code Should be of only 3 Digits");
                document.frm.code.focus();
				 return false;
				 }
            }
            //code validation
            //phone validation
        if(document.frm.mobile.value=="")
            {
                alert("Please enter the Phone Number");
                document.frm.mobile.focus();
                return false;
            }//phone
            else (document.frm.mobile.value!="")
            {
                var mytext=document.frm.mobile.value;
                var number=IsCharMobile(mytext);
                if (number=="false")
                {
                    document.frm.mobile.value="";
                    document.frm.mobile.select();
                   
                    return false;
                }
            }//phone validation
			        
			trackEvent('click','INSEAD LP','FormSubmit','Form_Submit');
		   
            document.frm.action="submit.php";
            document.frm.submit();
        }//validate
        function myTrim(x) {
            return x.replace(/^\s+|\s+$/gm,'');
        }
    function alt_null()
	{
	document.getElementById("frm").reset();
	}  

	function trackEvent(event, category, action, label) {
		// ga('send', 'event', category, action, label);
		console.log('GA==' + event + '==' + category + '==' + action + '==' + label + '==' + interaction);
	}   
</script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head><body>
<header>
	<div class="container header-border">
		<div class="row pt">
			<div class="col-md-6 col-sm-6 col-xs-12 logo"> <img src="images/logo.png" class="img-responsive"> </div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="upcontact">
					<p>Email : <span style="color:#007056;"> <a href="mailto:ILPSIE@eruditus.com"> ILPSE@eruditus.com</a></span></p>
					<p>Phone : <span style="color:#007056;">+91 22 6162 3112 (India) </span></p>
					<p>Phone : <span style="color:#007056;">+971.4.4302011 (Dubai)</span></p>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container-fluid">
	<div class="row">
		<div class="banner"> <img src="images/banner2.jpg" class="mobile-res"/>
			<!-- <div class="row"> -->
				<!-- <div class="container"> -->
					<div class="col-md-6 col-sm-6 col-xs-12 dates">
						 <h3 style="color:#ffffff;">INSEAD Leadership Programme for Senior Executives (ILPSE)</h3>
						<p>August 2018 – July 2019<br>
							1 Year Modular Programme | World-Class Faculty | Alumni Status</p>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-5 form"> <a id="regis-form"></a>
						<form class="form-horizontal" role="form" id="frm" name="frm" method="POST">
							<h1>Register to Download Brochure</h1>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="col-sm-2">
										<select id="salutation" name="salutation" style="border-radius:0px;" class="form-control">
											<option value="Mr.">Mr.</option>
											<option value="Ms.">Ms.</option>
											<option value="Mrs.">Mrs.</option>
											<option value="Dr.">Dr.</option>
											<option value="Prof.">Prof.</option>
										</select>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
										<input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
										<input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" class="form-control" id="company" placeholder="Company Name" name="company">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" class="form-control" id="title" placeholder="Designation" name="title">
									</div>
								</div>
							</div>
							<div id="fields">
								<div class="form-group">
									<div class="col-sm-12">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input type="text" class="form-control" id="city" placeholder="City" name="city">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<select id="country" name="country" class="form-control">
											</select>
										</div>
									</div>
								</div>
								<div class="form-group"> </div>
								<div class="form-group">
									<div class="col-sm-12">
										<select  id="workexp" name="workexp" style="border-radius:0px;" title="Work Experience" class="form-control">
											<option value="">Work Experience</option>
											<option value="&lt; 10 Years">&lt; 10 Years</option>
											<option value="10-15 Years">10-15 Years</option>
											<option value="15-20 Years">15-20 Years</option>
											<option value="&gt; 20 Years">&gt; 20 Years</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="email" class="form-control" id="email" placeholder="Email Id" name="email">
									</div>
								</div>
								<div class="form-group"> 
									<!--<div class="col-sm-4">
                                        <input type="text" class="form-control" id="code" placeholder="Code" name="code">
                                    </div>-->
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="code" placeholder="Code" name="code" style="margin-bottom:0;">
										<p class="bt-text">(e.g +91)</p>
									</div>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="mobile" placeholder="Phone" name="mobile" style="margin-bottom:0;">
										<p class="bt-text">(e.g. 9861623112)</p>
									</div>
								</div>
							</div>
							<div class="form-group buttonsa">
								<div class="col-sm-12 text-center">
									<button type="button" class="btn btn-default btn_blue" onclick="return validate()">Download Brochure</button>
								</div>
							</div>
						</form>
					</div>
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="left-container">
					<p><strong>The INSEAD Leadership Programme for Senior Executives – India (ILPSE)</strong> is a one-year general management programme that will prepare you for senior management roles and provide a timely boost for your career. Over the 12 months of ILPSE, even as you pursue your current career, we enable you to learn from the best minds in business and from an outstanding peer group, and apply the new knowledge gained.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1 class="heading"><span class="left-arrow"></span>Why you should consider the programme</h1>
				<ul class="curriculum-info">
					<li><strong>One-year modular programme in leadership and general management</strong>, minimizing time away from work</li>
					<li><strong>INSEAD Global Alumni Status </strong>upon graduation, connecting you to an elite <strong>network of 55,000 Alumni </strong>across 174+ countries</li>
					<li>Modules across <strong>INSEAD’s global campuses in Fontainebleau, Singapore and Abu Dhabi,</strong> and in India</li>
					<li>Tailored 1-1 leadership coaching & support for <strong>career development</strong> </li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1 class="heading"><span class="left-arrow"></span>Comprehensive Curriculum</h1>
				<div class="curriculum-wrapper clearfix">
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 mob-mb-25">
						<div class="gray-box">
							<h3 class="head">Business Leadership & Personal Development</h3>
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
									<p style="padding:0 15px; font-size:14px;"><strong>Strategy</strong></p>
									<ul class="curriculum-info">
										<li>Business strategy & game theory</li>
										<li>Corporate & global strategy</li>
										<li>Private equity</li>
										<li>Macroeconomics</li>
										<li>Innovation Management</li>
										<li>Leading Digital Transformation</li>
									</ul>
									<p style="padding:0 15px; font-size:14px;"><strong>Organisation structure</strong></p>
									<ul class="curriculum-info">
										<li>Leading people and teams</li>
										<li>Leading organisations</li>
										<li>Managing strategic change</li>
									</ul>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
									<p style="padding:0 15px; font-size:14px;"><strong>Soft skills</strong></p>
									<ul class="curriculum-info">
										<li>Judgment & decision making</li>
										<li>Leadership communications </li>
										<li>Negotiation & influence</li>
										<li>Networking</li>
										<li>Coaching</li>
										<li>Enhancing emotional intelligence & self-awareness</li>
										<li>Workshop on unconscious group dynamics</li>
										<li>360&deg; feedback & group coaching</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="gray-box">
							<h3 class="head">General Management</h3>
							<p style="padding:0 15px; font-size:14px;"><strong>Core functional topics</strong></p>
							<ul class="curriculum-info">
								<li>Finance</li>
								<li>Marketing</li>
								<li>Operations & supply chain management</li>
								<li>Financial & management accounting</li>
							</ul>
							<p style="padding:0 15px; font-size:14px;"><strong>Advanced functional topics</strong></p>
							<ul class="curriculum-info">
								<li>Advanced marketing</li>
								<li>Advanced finance</li>
								<li>Advanced operations management</li>
							</ul>
							<p style="padding:0 15px; font-size:14px;"><strong>Entrepreneurship Boot Camp (Optional) 
							<br/>Capstone General Management Simulation </strong></p>
						</div>
					</div>
				</div>
                <div class="col-md-12 col-sm-12 text-center pt-15"> 
                    <a href="#frm">
                        <button class="btn btn-default btn-lg" onclick="trackEvent('click','INSEAD LP','ScrollUp','Download_Curriculum')">DOWNLOAD CURRICULUM</button>
                    </a>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1 class="heading"><span class="left-arrow"></span>Participant Eligibilty</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>Diversity in multiple aspects is an important part of the learning experience. Our participant mix reflects diversity across functions, industries, backgrounds, companies and life experiences. However, all participants have a few things in common such as:</p>
				<ul class="curriculum-info">
					<li>Proven leadership potential</li>
					<li>Strong achievement, drive and motivation</li>
					<li>Depth of business experience (minimum of 10 years; 16 years on average, with significant time in management)</li>
					<li>Recognised career progress</li>
					<li>Enthusiasm for learning and intellectual development.</li>
				</ul>
			</div>
            <div class="col-md-12 col-sm-12 text-center pt-10"> 
                <a href="#frm">
                    <button class="btn btn-default btn-lg" onclick="trackEvent('click','INSEAD LP','ScrollUp','Participant_Profile-DB')">DOWNLOAD BROCHURE</button>
                </a>
            </div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1 class="heading"><span class="left-arrow"></span>Past Participants Profiles</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 mb text-center"> <img src="images/Experiance-new18.jpg" class="responsive border"/> </div>
			<div class="col-sm-4 mb text-center"> <img src="images/Industry-new18.jpg" class="responsive border"/> </div>
			<div class="col-sm-4 mb text-center"> <img src="images/Function-new18.jpg" class="responsive border"/> </div>
            <div class="col-md-12 col-sm-12 text-center"> 
                <a href="#frm">
                    <button class="btn btn-default btn-lg" onclick="trackEvent('click','INSEAD LP','ScrollUp','Past_Participant_Profile-DB')">DOWNLOAD BROCHURE</button>
                </a>
            </div>
		</div>
		<div class="row"> 
			
			<!--<div class="col-sm-5 mb text-center"> <img src="images/piechart-4.jpg" class="responsive"/> </div>--> 
			
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1 class="heading"><span class="left-arrow"></span>Alumni Benefits</h1>
				<p>As an alumnus of INSEAD and a member of this global network, you will enjoy the following benefits and services:</p>
				<ul class="curriculum-info">
					<li>Directory services through the MyINSEAD alumni platform</li>
					<li>Internal social networking tool - INSEAD Global Network connecting to 55,000+ Alumni across 174+ countries</li>
					<li>Lifelong learning through access to the latest thinking and research from faculty, library
						services and online webinars</li>
					<li>Lifelong career development support through the Career Development Centre website</li>
					<li> 25% discount for INSEAD alumni on all INSEAD Open Enrolment Programmes for executives</li>
					<li>Lifelong access to your INSEAD mailbox </li>
				</ul>
			</div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center pt-10"> 
                <a href="#frm">
                    <button class="btn btn-default btn-lg" onclick="trackEvent('click','INSEAD LP','ScrollUp','Alumni_Benefits-DB')">DOWNLOAD BROCHURE</button>
                </a>
            </div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1 class="heading"><span class="left-arrow"></span>Programme Directors</h1>
				<div class="row" id="new-faculty">
					<div class="col-sm-6 col-md-3 col-xs-6">
						<div class="faculty-image"> <img src="images/V_Padmanabhan.jpg" class="responsive"/> </div>
						<div class="faculty-text">
							<p><strong>V. (Paddy) Padmanabhan</strong></p>
							<p class="position">Programme Director</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-xs-6">
						<div class="faculty-image"> <img src="images/Balagopal-Vissa.jpg" class="responsive"/> </div>
						<div class="faculty-text">
							<p><strong>Balagopal Vissa</strong></p>
							<p class="position">Programme Director</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1 class="heading"><span class="left-arrow"></span>Contributing Faculty: </h1>
				<ul class="no-list-style">
					
					<li class="sloan-list"><img src="images/Faculty_Neil_Bearden.jpg" class="responsive"/>
						<p class="head-br"><span>Neil Bearden</span></p>
						<p class="list-info"><span>Associate Professor of Decision Sciences</span></p>
					</li>
					
					<li class="sloan-list"><img src="images/Faculty_3.jpg" class="responsive"/>
						<p class="head-br"><span>Pushan Dutt</span></p>
						<p class="list-info"><span>Associate Professor of Economics Chair, Economics and Political Science Area</span></p>
					</li>
					<li class="sloan-list"><img src="images/Faculty_4.jpg" class="responsive"/>
						<p class="head-br"><span>Horacio Falcao</span></p>
						<p class="list-info"><span>Affiliate Professor of Decision Sciences</span></p>
					</li>
					
					<li class="sloan-list"><img src="images/Faculty_9.jpg" class="responsive"/>
						<p class="head-br"><span>Ian Woodward</span></p>
						<p class="list-info"><span>Affiliate Professor of Organisational Behaviour </span></p>
					</li>
					<li class="sloan-list"><img src="images/Faculty_Jay_Kim.jpg" class="responsive"/>
						<p class="head-br"><span>Jay Kim</span></p>
						<p class="list-info"><span>Associate Professor of Entrepreneurship and Family Enterprise</span></p>
					</li>
					<li class="sloan-list"><img src="images/Faculty_Jason_Davis.jpg" class="responsive"/>
						<p class="head-br"><span>Jason Davis</span></p>
						<p class="list-info"><span>Associate Professor of Entrepreneurship and Family Enterprise</span></p>
					</li>
					
					
					<li class="sloan-list"><img src="images/Chen_Guo_Li.jpg" class="responsive"/>
						<p class="head-br"><span>Chen Guo Li</span></p>
						<p class="list-info"><span>Associate Professor of Strategy</span></p>
					</li>
					<li class="sloan-list"><img src="images/Claude.jpg" class="responsive"/>
						<p class="head-br"><span>Jean Claude Noel</span></p>
						<p class="list-info"><span>Adjunct Clinical Professor</span></p>
					</li>
					
				</ul>
				<div class="clearfix"></div>
				<p><em>*Contributing faculty subject to change</em></p>
			</div>
            <div class="col-md-12 col-sm-12 text-center pt-10 mb-20"> 
                <a href="#frm">
                    <button class="btn btn-default btn-lg" onclick="trackEvent('click','INSEAD LP','ScrollUp','Faculty-DB')">DOWNLOAD BROCHURE</button>
                </a>
            </div>
		</div>
	</div>
	<div class="back-image">
		<div class="background">
			<div class="container">
				<!-- <div class="row"> -->
					<div class="col-sm-12">
						<h2 class="test-head"><span>Here's what some of our participants are saying about the programme</span></h2>
					</div>
					<div class="carousel slide" data-ride="carousel" id="quote-carousel"> 
						<!-- Bottom Carousel Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#quote-carousel" data-slide-to="0" class="active" onclick="trackEvent('click','INSEAD LP','Slide','Testimonials',true)"></li>
							<li data-target="#quote-carousel" data-slide-to="1" onclick="trackEvent('click','INSEAD LP','Slide','Testimonials',true)"></li>
							<li data-target="#quote-carousel" data-slide-to="2" onclick="trackEvent('click','INSEAD LP','Slide','Testimonials',true)"></li>
							<li data-target="#quote-carousel" data-slide-to="3" onclick="trackEvent('click','INSEAD LP','Slide','Testimonials',true)"></li>
							<li data-target="#quote-carousel" data-slide-to="4" onclick="trackEvent('click','INSEAD LP','Slide','Testimonials',true)"></li>
							<li data-target="#quote-carousel" data-slide-to="5" onclick="trackEvent('click','INSEAD LP','Slide','Testimonials',true)"></li>
						</ol>
						
						<!-- Carousel Slides / Quotes -->
						<div class="carousel-inner"> 
							
							<!-- Quote 1 -->
							<div class="item active">
								<blockquote>
									<div class="row">
										<div class="col-sm-12">
											<p><span class="quots">“</span> There is over 750 + years of collective work experience in the classroom from varied backgrounds/industries and to know each one’s professional journey is invaluable. Above all there is the possibility that you will make few friends which will last your life.<span class="quots">”</span> </p>
											<p class="text-right"><img src="images/test-logo1.jpg" class="responsive"/></p>
										</div>
									</div>
								</blockquote>
							</div>
							<!-- Quote 2 -->
							<div class="item">
								<blockquote>
									<div class="row">
										<div class="col-sm-12">
											<p><span class="quots">“</span> The learning I’ve had are very useful because from a general management perspective on how to look at things, how to plan your resources, how to plan your time is something that I am using on a day-to-day basis and that has added a lot of value to me in building my career and also in putting those learning into action on a regular basis.<span class="quots">”</span></p>
											<p class="text-right"><img src="images/test-logo2.jpg" class="responsive"/></p>
										</div>
									</div>
								</blockquote>
							</div>
							<!-- Quote 3 -->
							<div class="item">
								<blockquote>
									<div class="row">
										<div class="col-sm-12">
											<p><span class="quots">“</span> It’s been a fantastic experience learning from the world-class faculty and accomplished leaders from diverse backgrounds. There have been multiple opportunities for self-evaluating and working towards how to conduct myself and the business better.<span class="quots">”</span></p>
											<p class="text-right"><img src="images/test-logo3.jpg" class="responsive"/></p>
										</div>
									</div>
								</blockquote>
							</div>
							
							<!-- Quote 4 -->
							<div class="item">
								<blockquote>
									<div class="row">
										<div class="col-sm-12">
											<p><span class="quots">“</span> I chose ILPSE for its value and character. I personally feel that a person to grow needs diversity in experience. ILPSE by nature of design of the course gives you that – on one side it doubles you in the personal side of it, then it gets you out and you get into some kind of different experience which is completely on a framework or a concept. Another dimension is that you end up pushed in a group where people are very different and lot of wisdom is there. The kind of faculty it offers gets your wisdom in place faster.<span class="quots">”</span></p>
											<p class="text-right"><img src="images/test-logo4.jpg" class="responsive"/></p>
										</div>
									</div>
								</blockquote>
							</div>
							
							<!-- Quote 5 -->
							<div class="item">
								<blockquote>
									<div class="row">
										<div class="col-sm-12">
											<p><span class="quots">“</span> ILPSE has been a great learning experience in terms of increasing my awareness of the trends that are shaping the world around us. In terms of the curriculum, they have taken key business toolkit parameters like decision-making, and approached it from multiple aspects.<span class="quots">”</span></p>
											<p class="text-right"><img src="images/test-logo5.jpg" class="responsive"/></p>
										</div>
									</div>
								</blockquote>
							</div>
							
							<!-- Quote 6 -->
							<div class="item">
								<blockquote>
									<div class="row">
										<div class="col-sm-12">
											<p><span class="quots">“</span> The beauty of the programme is that it gives a very 360 degree approach to learning, in terms of, not only does it give you a lot of soft skills to work on but also a lot of frameworks for your professional life.<span class="quots">”</span> </p>
											<p class="text-right"><img src="images/test-logo6.jpg" class="responsive"/></p>
										</div>
									</div>
								</blockquote>
							</div>
						</div>
						
						<!-- Carousel Buttons Next/Prev --> 
						<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a> <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> 
                    </div>
				<!-- </div> -->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1 class="heading"><span class="left-arrow"></span>Calendar</h1>
                <div class="table-responsive  no-more-tables">
    				<table class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Module</th>
                                <th>Location</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title="Module">Integrated Immersion Week </td>
                                <td data-title="Location">Singapore</td>
                                <td data-title="Date">19-25 August 2018</td>
                            </tr>
                            <tr>
                                <td data-title="Module">Integrated Immersion Week</td>
                                <td data-title="Location">Abu Dhabi,UAE</td>
                                <td data-title="Date">22-30 September 2018</td>
                            </tr>
                            <tr>
                                <td data-title="Module">Core Functional Locations</td>
                                <td data-title="Location">Mumbai,India</td>
                                <td data-title="Date">22-30 November 2018</td>
                            </tr>
                            <tr>
                                <td data-title="Module">INSEAD India Entrepreneurship </td>
                                <td data-title="Location">Mumbai,India</td>
                                <td data-title="Date">1 December 2018</td>
                            </tr>
                            <tr>
                                <td data-title="Module">Online</td>
                                <td data-title="Location">Live Webinars</td>
                                <td data-title="Date">January 2019</td>
                            </tr>
                            <tr>
                                <td data-title="Module">Integrated Immersion Week</td>
                                <td data-title="Location">Singapore</td>
                                <td data-title="Date">10– 16 February 2019</td>
                            </tr>
                            <tr>
                                <td data-title="Module">Online</td>
                                <td data-title="Location">Live Webinars</td>
                                <td data-title="Date">March 2019</td>
                            </tr>
                            <tr>
                                <td data-title="Module">Advanced Functional Modules </td>
                                <td data-title="Location">Mumbai,India</td>
                                <td data-title="Date">20-26 April 2019</td>
                            </tr>
                            <tr>
                                <td data-title="Module">INSEAD India Business Dialogue </td>
                                <td data-title="Location">Mumbai,India</td>
                                <td data-title="Date">27 April 2019</td>
                            </tr>
                            <tr>
                                <td data-title="Module">Online</td>
                                <td data-title="Location">Live Webinars</td>
                                <td data-title="Date">June 2019</td>
                            </tr>                            
                            <tr>
                                <td data-title="Module">Integrated Immersion Week </td>
                                <td data-title="Location">Fontainebleau</td>
                                <td data-title="Date">21– 26 July 2019</td>
                            </tr>
                        </tbody>
    				</table>
                </div>
			</div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h1 class="heading"><span class="left-arrow"></span>Application Deadlines</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover location-table">
                        <thead>
                            <tr>
                                <th class="">Round</th>
                                <th class="">Date</th>
                                <th class="">Application Fees</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Round 1</td>
                                <td>24 Jan 2018</td>
                                <td>$300 SGD</td>
                            </tr>
                            <tr>
                                <td>Round 2</td>
                                <td>21 Feb 2018</td>
                                <td>$500 SGD</td>
                            </tr>
                            <tr>
                                <td>Round 3</td>
                                <td>21 Mar 2018</td>
                                <td>$700 SGD</td>
                            </tr>
                            <tr>
                                <td>Round 4</td>
                                <td>25 May 2018</td>
                                <td>$900 SGD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h1 class="heading"><span class="left-arrow"></span>Program Details</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover location-table ">
                        <thead>
                            <tr>
                                <th id="demo">Date</th>
                                <td><span>August 2018–July 2019</span></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th id="demo">Program Fees</th>
                                <td><span>$62,000 SGD</span></td>
                            </tr>
                            <tr>
                                <th id="demo">Location</th>
                                <td>
                                    <p>Multiple locations including:</p>
                                    <ul class="location">
                                        <li>&gt;&gt; Singapore</li>
                                        <li>&gt;&gt; Abu Dhabi,UAE</li>
                                        <li>&gt;&gt; Mumbai,India</li>
                                        <li>&gt;&gt; Fontainebleau</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center pt-20"> 
                <a href="#frm">
                    <button class="btn btn-default btn-lg" onclick="trackEvent('click','INSEAD LP','ScrollUp','Calendar-DB')">DOWNLOAD BROCHURE</button>
                </a>
            </div>
		</div>
		<div class="border-top"></div>
		<div class="row">
			<div class="col-sm-12"> <a href="http://www.eruditus.com/" target="_blank" onclick="trackEvent('click','INSEAD LP','Redirect','ERU Logo')"><img src="http://www.eruditus.com/programmes/wharton-adp/leading-people-in-organizations/images/program-partner.png" class="img-responsive pull-right"></a> </div>
		</div>
	</div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Tracking Code Start--> 
<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0071/5326.js" async="async"></script>
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

<!-- Google Code for Remarketing Tag end--> 
<!-- Linkedin insight tag start--> 
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
<!-- Linkedin insight tag start--> 
<!-- Tracking Code end-->
</body>
<script>

            //populateCountries("country", "state");
            populateCountries("country");
        </script>
<script>

$('#top').click(function(){
    $('html,body').animate({
        scrollTop: 0
    }, 1000);
});
</script>
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
<script type="text/javascript">
	$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 8000,

  });
});
</script>
<!--intercom code-->
<script>
  window.intercomSettings = {
    app_id: "zbmolamk"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/zbmolamk';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
<!-- end Pardot Website Tracking code -->
<script>$('a[href*="#"]')

  // Remove links that don't actually link to anything

  .not('[href="#"]')

  .not('[href="#0"]')

  .click(function(event) {

    // On-page links

    if (

      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')

      &&

      location.hostname == this.hostname

    ) {

      // Figure out element to scroll to

      var target = $(this.hash);

      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      // Does a scroll target exist?

      if (target.length) {

        // Only prevent default if animation is actually gonna happen

        event.preventDefault();

        $('html, body').animate({

          scrollTop: target.offset().top

        }, 1000, function() {

          // Callback after animation

          // Must change focus!

          var $target = $(target);

          $target.focus();

          if ($target.is(":focus")) { // Checking if the target was focused

            return false;

          } else {

            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable

            $target.focus(); // Set focus again

          };

        });

      }

    }

  });

 </script>
</html>