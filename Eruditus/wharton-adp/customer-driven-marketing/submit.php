<?php

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
$phone=trim($_POST['code']).trim($_POST['mobile']);
$phone		= preg_replace("/[^0-9+]/","",$phone); 
$email=trim($_POST['email']);

//$country="XYZ";
//$workexp="XYZ";
$attenddate="XYZ";
$finance="XYZ";

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
if(empty($salutation) || empty($firstname) || empty($lastname) || empty($company) || empty($designation) || empty($phone) || empty($email) )
{
header("Location: index.php");
exit;
}
else
{
//echo "processing...";
$msg .= "<tr><td height='10' colspan='3'></td></tr>";
$msg .= "<tr><td height='2' colspan='3' bgcolor='#e5e5e5'></td></tr>";
$msg .= "<tr><td height='10' colspan='3'></td></tr>";
$msg .= "<tr><td bgcolor='#eaeaea' style='padding-left:3px;' colspan='3'><font face='helvetica' size='2' style='line-height:1.7' style='line-height:1.5' color='#000000'><b>Personal Information</b>:</font></b></td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Salutation</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $salutation </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>First Name</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $firstname </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Last Name</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $lastname </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Company</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $company </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Designation</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $designation </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Mobile Phone Number</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $phone </td></tr><br />";

$msg .= "<tr><td style='padding-left:5px;' width='200'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>Email</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'><b>:</b></font></td><td valign='top'><font face='helvetica' size='2' style='line-height:1.7' color='#000000'> $email </td></tr><br />";

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

$msg1 = "<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Thankyou</title>
<!--[if gte mso 9]>
<style>
#tableForOutlook {
  width:615px;
}
</style>
<![endif]-->
<style media='all' type='text/css'>
*{ margin: 0; padding: 0;}
img {display:block;}
table td { border-collapse: collapse; }

</style>
</head>
<body>
<!--[if (gte mso 9)|(IE)]>
<center>
<table>
<tr>
<td width='608'>
<![endif]-->

<!--[if (lte mso 9)|(IE)]>
<center>
<table>
<tr>
<td width='608'>
<![endif]-->
<table width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:608px; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; margin:0 auto;' align='center'>
<tr>
 <td height='20'>
 </td>
</tr>
  
  <tr>
    <td style='border:1px solid #a2a2a2;'>
    <table width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:608px; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666;' align='center'>
    <tr>
     <td height='30'>
     </td>
    </tr>
    <tr><td style='padding:0 0 0 20px;'>   <img src='http://www.eruditus.com/emailer/common/header_radical_1.png'  style='display:block; border: 0; width:100%;' />
                    
                    </td>
                    </tr>
 <tr>
    <td height='20'>&nbsp;</td>
  </tr>
 
 
   
  <tr>
    <td height='14'>&nbsp;</td>
  </tr>
  <tr>
       <td style='padding:0 14px;' align='center' height='14'>&nbsp;</td>
     </tr>
  <tr>
                	 <td style='padding:0 14px;'>

                     <table border='0' cellpadding='0' cellspacing='0' style='margin: 0; padding: 0; width:100%;' > 
                     	<tr>
                     		<td style='font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666;line-height:150%!important;'>Thanks for your interest in <span style='color:#b31524; font-weight:bold;'> MIT Radical Innovation program to be held in Dubai on 26th & 27th October 2015</span>. We will contact you shortly to discuss details. 
</td>
                             </tr>

  <tr>
   <td height='10'>
   </td>
  </tr>
  
  
  
  <tr>
                     		<td style='font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666;line-height:150%!important;'>If you have any queries on the program, please contact us at: <a href='mailto:anna.schebsdat@eruditus.com'>anna.schebsdat@eruditus.com</a>


</td>
                             </tr>
                             <tr>
                              <td height='20'>
                              
                              </td>
                             </tr>
                              
                              <tr>
   <td height='30'>&nbsp;</td>
  </tr>
    <tr>
   <td style='padding:0'> <img src='http://www.eruditus.com/emailer/mitthankyou/redborder.jpg'  style='display:block; border: 0; width:100%;' /></td>
  </tr>
  <tr>
   <td height='20'>&nbsp;</td>
  </tr>
  
   
  
   <tr>
   <td height='20'></td>
  </tr>
                     </table>
                	 </td>

                </tr>
   
     </table>

    </td>
  </tr>
  
 <tr>
     <td height='10'>&nbsp;</td>
   </tr>

</table>
<!--[if (lte mso 9)|(IE)]>
     </td>
    </tr>
  </table>
</center>
<![endif]-->

<!--[if (gte mso 9)|(IE)]>
     </td>
    </tr>
  </table>
</center>
<![endif]-->

</body>
</html>
";




$msg .= "</td></tr></table>";
$date=date('Y-m-d H:i:s');
$detect = new Mobile_Detect;
if($detect->isMobile() || $detect->isTablet())
{
	if(isset($campaign))
		$subject="Wharton - Customer Driven Marketing Query - [".$campaign."] [".$lead_source."] [".$country."] - M";
	else
		$subject="Wharton - Customer Driven Marketing Query - [".$lead_source."] [".$country."] - M";
}
else
{
	if(isset($campaign))
		$subject="Wharton - Customer Driven Marketing Query - [".$campaign."] [".$lead_source."] [".$country."]";
	else
		$subject="Wharton - Customer Driven Marketing Query - [".$lead_source."] [".$country."]";
}

/*$con=mysqli_connect("eruditusdb.db.7053204.hostedresource.com","eruditusdb","Q1w2e3!@#","eruditusdb") or die("cannot connect");
$query=mysqli_query($con,"INSERT INTO  wharton_adp_st(salutation,firstname,lastname,company,designation,city,country,phone,email,workexp,attenddate,finance,subject,date,source,medium,term,content,campaign,matchtype,network,creative,keyword,placement,random,copy,adposition,url) VALUES ('".$salutation."','".$firstname."','".$lastname."','".$company."','".$designation."','','".$country."','".$phone."','".$email."','','','','".$subject."','".$date."','".$source."','".$medium."','".$term."','".$content."','".$campaign."','".$matchtype."','".$network."','".$creative."','".$keyword."','".$placement."','".$random."','".$copy."','".$adposition."','".$url."')");
*/

$from="anna.schebsdat@eruditus.com";
$mailheaders ="From: $email\nContent-Type: text/html; charset=iso-8859-1";
$to = "ruchira.roy@eruditus.com,meera.raman@eruditus.com";
//$to = "cool.jigs@gmail.com";

mail($to,$subject, wordwrap($msg), $mailheaders);

//$mailheaders1 ="From: Eruditus Executive Education <$from>\nContent-Type: text/html; charset=iso-8859-1";
//mail($email, "MIT Professional Education's Radical Innovation By Prof. Sanjay Sarma - Thank You!", $msg1, $mailheaders1);

//header("Location: http://www.eruditus.com/programmes/tuck/strategy-is-innovation/thankyou.html");
}
?>

<form class="form-horizontal mCustomScrollbar" role="form" id="frm" name="frm" action="https://go.pardot.com/l/63132/2015-03-03/bzd9" method="POST">
			<input type="hidden" name="oid" value="00D90000000K0sz">
<input type="hidden" name="retURL" value="https://www.eruditus.com/programmes/wharton-adp/customer-driven-marketing/thankyou.html">
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