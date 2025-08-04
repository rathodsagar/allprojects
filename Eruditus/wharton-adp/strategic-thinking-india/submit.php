<?

/*
	---------------------------------------------------
	Coding done by  Version 1.0
	---------------------------------------------------
*/
require_once 'Mobile_Detect.php';
$salutation=trim($_POST['salutation']);
$firstname=trim($_POST['first_name']);
$lastname=trim($_POST['last_name']);
$company=trim($_POST['company']);
$designation=trim($_POST['title']);
$city=trim($_POST['city']);
$country=trim($_POST['country']);
$workexp=trim($_POST['workexp']);
$attenddate=trim($_POST['attenddate']);
$finance=trim($_POST['finance']);
$phone=trim($_POST['mobile']);
$phone		= preg_replace("/[^0-9+]/","",$phone); 
$email=trim($_POST['email']);

if(empty($attenddate) || empty($finance))
{
$attenddate= "XYZ";
$finance= "XYZ";

}


$source=trim($_POST['utm_source']);
$medium=trim($_POST['utm_medium']);
$term=trim($_POST['utm_term']);
$content=trim($_POST['utm_content']);
$campaign=trim($_POST['utm_campaign']);

$matchtype=trim($_POST['matchtype']);
$network=trim($_POST['network']);
$creative=trim($_POST['creative']);
$keyword=trim($_POST['keyword']);
$placement=trim($_POST['placement']);
$random=trim($_POST['random']);
$copy=trim($_POST['copy']);
$adposition=trim($_POST['adposition']);
$url=trim($_POST['url']);



$agree = isset($_POST['agree'])?trim($_POST['agree']):'';
if(!empty($agree))
{
	$agree = 'Yes I Agree';
}

$lead_source = "";
if(!empty($source))
{
	$arraySources	= array('Web','REFEREE-Programme', 'Advertisement', 'Facebook', 'LinkedIn', 'HeadHonchos', 'Naukri', 'Employee Referral', 'Public Relations', 'External Referral', 'Partner', 'Seminar - Internal', 'Seminar - Partner', 'Trade Show', 'Web', 'Word of mouth', 'Other', 'VCCircle', 'EruditusEmailer', 'Headhonchos Direct', 'Shine.com Emailer', 'Yatra.com Emailer', 'ET.Com Emailer', 'India Club', 'Gulf Talent', 'Arabian Business', 'NaukriGulf', 'Gulf News', 'Fundoo-Finance', 'Fundoo-BFSI', 'Indiainfoline', 'Money Control', 'Bayt', 'DIC', 'Shiksha', 'Fundoo-HR', 'IIM Jobs', 'Fundoo-CIO', 'Zawya', 'Monster', 'Google', 'Bluesteps', 'Twitter', 'Timesjobs', 'Business Standard', 'Forbes', 'ValueDirect', 'AdCanopus', 'PolyValent', 'HBS-SELPME', 'Opicle media', 'Tunica Labs', 'Google Search', 'Trade Briefs', 'Proformics', 'Adsizzlers', 'Icubes', 'MorrisMedia', 'Bigtrunk', 'BaytMedia', 'DigitalMailers', 'Adready', 'Intellect ads', 'EMERITUSEmailer', 'MediaMath', 'CNNMoney', 'CNNInternational', 'CNNInternationalFacebook', 'BBC.com', 'LiveMint', 'Firstpost', 'MonsterGulf', 'Keystone', 'MEALeads', 'Leads_DB', 'INSEADLeads', 'Chat', 'Outbrain', 'Taboola', 'Reddit', 'Whitedwarf', 'Mercado', 'FirstOption', 'hrKatha', 'VantageCircle','ImpactRadius','Bing','Way2sms','ARM','SVG');
	
	$cp_source 		= strtolower($source);
	$isExists		= array_search(strtolower($cp_source), array_map('strtolower', $arraySources));
	if($isExists)
	{
		$lead_source = $arraySources[$isExists];
	}
}


if(empty($lead_source))
	$lead_source = "Web";


//echo "<pre>"; print_r($_POST);
if(empty($salutation) || empty($firstname) || empty($lastname) || empty($company) || empty($designation) || empty($city) || empty($country) || empty($workexp) || empty($attenddate) || empty($finance) || empty($phone) || empty($email) )
{
header("Location: index.php");
exit;
}
else
{
echo "processing...";
$msg .= "<tr><td height='10' colspan='3'></td></tr>";
$msg .= "<tr><td height='2' colspan='3' bgcolor='#e5e5e5'></td></tr>";
$msg .= "<tr><td height='10' colspan='3'></td></tr>";
$msg .= "<tr><td bgcolor='#eaeaea' style='padding-left:3px;' colspan='3'><font face='helvetica' size='2' style='line-height:1.7' style='line-height:1.5' color='#000000'><b>Personal Information</b>:</font></b></td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Salutation</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $salutation </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>First Name</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $firstname </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Last Name</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $lastname </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Company</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $company </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Designation</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $designation </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>City</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $city </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Country</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $country </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Work Experience</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $workexp </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>When are you planning to attend program</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $attenddate </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>How will you be financing your program</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $finance </td></tr><br />";


$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Mobile Phone Number</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $phone </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Email</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $email </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Agree</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $agree </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Source</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $source </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Medium</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $medium </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Term</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $term </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Content</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $content </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Campaign</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $campaign </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Matchtype</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $matchtype </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Network</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $network </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Creative</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $creative </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Keyword</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $keyword </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Placement</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $placement </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Random</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $random </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Copy</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $copy </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Adposition</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $adposition </td></tr><br />";

$msg1 .= "<table width='600' cellpadding='10' style='border:1px solid #CCC;'>
	<tr>
    	<td>
        	<table width='100%' cellpadding='10' cellspacing='0' border='0'>
            	<tr>
                	<td bgcolor='#f0f0f0'><img src='http://www.ifebp.org/SiteCollectionImages/Logos/whartonLogo.gif' width='275' height='87' alt='' />
                    </td>
              </tr>
                <tr>
                  <td height='10'></td>
                </tr>
                <tr>
                  <td><font face='Arial, Helvetica, sans-serif' size='2' color='#666666'>Thanks for your interest in <strong>Wharton&acute;s Accelerated Development Program (ADP)</strong>.</font></td>
                </tr>
                <tr>
               	  <td><font face='Arial, Helvetica, sans-serif' size='2' color='#666666'>One of our Program Advisors will reach out to you shortly to discuss the program details.</font>
                    </td>
                </tr>
                <tr>
                  <td height='10'></td>
                </tr>
                <tr>
                  <td><font face='Arial, Helvetica, sans-serif' size='2' color='#666666'>Best Regards,<br />
                    The Wharton ADP Team</font></td>
                </tr>
                <tr>
               	  <td align='right' style='border-top:solid 1px #cccccc;'><img src='http://www.eruditus.com/programmes/wharton-adp/images/program_partner-old.png' alt='Program Partner: Eruditus Executive Education' width='287' height='70' border='0' />
                    </td>
              </tr>
          </table>
        </td>
    </tr>
</table>";




$msg .= "</td></tr></table>";
$date=date('Y-m-d H:i:s');
$detect = new Mobile_Detect;

if($detect->isMobile() || $detect->isTablet())
{
	if(!empty($campaign))
		$subject="Wharton ADP[Strategic Leadership India] - [".$campaign."] [".$lead_source."] [".$country."]- M";
	else 
		$subject="Wharton ADP[Strategic Leadership India] - [".$lead_source."] [".$country."]- M";
}
else
{
	if(!empty($campaign))
		$subject="Wharton ADP[Strategic Leadership India] - [".$campaign."] [".$lead_source."] [".$country."]";
	else
		$subject="Wharton ADP[Strategic Leadership India] - [".$lead_source."] [".$country."]";
}

/*
$con=mysqli_connect("eruditusdb.db.7053204.hostedresource.com","eruditusdb","Q1w2e3!@#","eruditusdb") or die("cannot connect");
$query=mysqli_query($con,"INSERT INTO  wharton_adp_st(salutation,firstname,lastname,company,designation,city,country,phone,email,workexp,attenddate,finance,subject,date,source,medium,term,content,campaign,matchtype,network,creative,keyword,placement,random,copy,adposition,url) VALUES ('".$salutation."','".$firstname."','".$lastname."','".$company."','".$designation."','".$city."','".$country."','".$phone."','".$email."','".$workexp."','".$attenddate."','".$finance."','".$subject."','".$date."','".$source."','".$medium."','".$term."','".$content."','".$campaign."','".$matchtype."','".$network."','".$creative."','".$keyword."','".$placement."','".$random."','".$copy."','".$adposition."','".$url."')");
*/

$from="Wharton_ADP@eruditus.com";
$mailheaders ="From: $email\nContent-Type: text/html; charset=iso-8859-1";
$to = "ruchira.roy@eruditus.com,meera.raman@eruditus.com";
//$to = "cool.jigs@gmail.com";

mail($to, $subject, wordwrap($msg), $mailheaders);
//mail($cc,"Columbia EPM Query.", $msg, $mailheaders);


//$mailheaders1 ="From: $from\nContent-Type: text/html; charset=iso-8859-1";
//mail($email, "Wharton ADP Program - Thank You!", $msg1, $mailheaders1);

//header("Location: thankyou.html");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Strategic-Thinking-Leadership</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.text{
top: 170px;
position:absolute;
left:30px;
}
h2{
    color: #bd7a05;
    font-size: 17px;
	font-weight:normal;
}
#loading{
	background-color: #ffffff;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 1;
	margin-top: 0px;
	top: 0px;
}
#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
	}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 150px;
	width: 150px;
	margin-top: -75px;
	margin-left: -75px;
    -moz-border-radius: 50% 50% 50% 50%;
	-webkit-border-radius: 50% 50% 50% 50%;
	border-radius: 50% 50% 50% 50%;

}
.object{
	width: 15px;
    height: 15px;
	background-color: #012d78;
	position: absolute;
	-moz-border-radius: 50% 50% 50% 50%;
	-webkit-border-radius: 50% 50% 50% 50%;
	border-radius: 50% 50% 50% 50%;
	-webkit-animation: animate 0.8s infinite;
	animation: animate 0.8s infinite;
	}


#object_one {
	top: 19px;
	left: 19px;	

	}
#object_two {
	top: 0px;
	left: 65px; 
	-webkit-animation-delay: 0.1s; 
    animation-delay: 0.1s;

	}
#object_three {
	top: 19px;
	left: 111px; 	
	-webkit-animation-delay: 0.2s; 
    animation-delay: 0.2s; 

	}
#object_four {
	top: 65px;
	left: 130px; 
	-webkit-animation-delay: 0.3s; 
    animation-delay: 0.3s; 
}
#object_five {
	top: 111px;
	left: 111px; 
	-webkit-animation-delay: 0.4s; 
    animation-delay: 0.4s; 
}
#object_six {
	top: 130px;
	left: 65px;
	-webkit-animation-delay: 0.5s; 
    animation-delay: 0.5s; 
}
#object_seven {
	top: 111px;
	left: 19px;
	-webkit-animation-delay: 0.6s; 
    animation-delay: 0.6s; 
}
#object_eight {
	top: 65px;
	left: 0px;
	 -webkit-animation-delay: 0.7s; 
    animation-delay: 0.7s; 
}




@-webkit-keyframes animate {
 
  25% {
	-ms-transform: scale(1.5); 
   	-webkit-transform: scale(1.5);   
    transform: scale(1.5);  
	  }


  75% {
	-ms-transform: scale(0); 
   	-webkit-transform: scale(0);  
    transform: scale(0);  
	  }


}

@keyframes animate {
  50% {
	-ms-transform: scale(1.5,1.5); 
   	-webkit-transform: scale(1.5,1.5); 
    transform: scale(1.5,1.5); 
	  }
 
  100% {
	-ms-transform: scale(1,1); 
   	-webkit-transform: scale(1,1); 
    transform: scale(1,1); 
	  }
  
}


</style>
</head>
<body>
<div id="loading">
  
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_four"></div>
<div class="object" id="object_five"></div>
<div class="object" id="object_six"></div>
<div class="object" id="object_seven"></div>
<div class="object" id="object_eight"></div>
<center class="text"> <h2>Please wait...</h2></center>
</div>
</div>
 
</div>

<form class="form-horizontal mCustomScrollbar" role="form" id="frm" name="frm" action="https://www2.eruditus.com/l/63132/2016-02-04/y6jqv" method="POST">
			<input type="hidden" name="oid" value="00D90000000K0sz">
<input type="hidden" name="retURL" value="https://www.eruditus.com/programmes/wharton-adp/strategic-thinking-india/thankyou.html">
<input type="hidden" name="00N90000002EM3X" value="Wharton OEP" />
<input type="hidden" name="lead_source" value="<?php echo $lead_source;?>">
<input type="hidden" name="00N9000000CnNnc" value="Web to Lead" />			
   
	<input type="hidden" id="salutation" name="salutation" value="<?php echo $salutation;?>">	
   
      <input type="hidden" id="first_name" name="first_name" value="<?php echo $firstname;?>">
    
      <input type="hidden" id="last_name" name="last_name" value="<?php echo $lastname;?>">

      <input type="hidden" id="company" name="company" value="<?php echo $company;?>">
     
	  <input type="hidden" id="title" name="title" value="<?php echo $designation;?>">
  

 
      <input type="hidden" id="city" name="city" value="<?php echo $city;?>">
    

   
  
      <input type="hidden" id="country" name="country" value="<?php echo $country;?>">
	
	  <input type="hidden" id="00N9000000CnMwU" name="00N9000000CnMwU" value="<?php echo $workexp;?>">
	  <input type="hidden" id="00N9000000CnO4C" name="00N9000000CnO4C" value="<?php echo $attenddate;?>">
	  <input type="hidden" id="00N9000000CnO3x" name="00N9000000CnO3x" value="<?php echo $finance;?>">
      <input type="hidden" id="email" name="email" value="<?php echo $email;?>">
 	  <input type="hidden" id="00N9000000CnO4C" name="00N9000000ESGrj" value="<?php echo $campaign;?>">
	  <input type="hidden" id="00N9000000CnO3x" name="00N9000000ESGrt" value="<?php echo $placement;?>">
	  
      <input type="hidden" id="mobile" name="mobile" value="<?php echo $phone;?>">
	   <input type="hidden" id="agree" name="agree" value="<?php echo $agree;?>">
      
</form>
<script>
document.frm.submit();
</script>
</body>
</html>