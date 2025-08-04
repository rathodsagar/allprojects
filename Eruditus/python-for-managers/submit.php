<?php
/*
	---------------------------------------------------
	Coding done by  Version 1.0
	---------------------------------------------------
*/
session_start();
require_once '../helpers.php';
require_once $absolute_path.'/common/xss_clean.php';
require_once $absolute_path.'/common/Mobile_Detect.php';
$detect 		= new Mobile_Detect;
$xssClean 		= new xssClean;

$salutation		=isset($_POST['salutation'])?$xssClean->clean_input(trim($_POST['salutation'])):'';
$firstname		=isset($_POST['first_name'])?$xssClean->clean_input(trim($_POST['first_name'])):'';
$lastname		=isset($_POST['last_name'])?$xssClean->clean_input(trim($_POST['last_name'])):'';
$company		=isset($_POST['company'])?$xssClean->clean_input(trim($_POST['company'])):'';;
$city			=isset($_POST['city'])?$xssClean->clean_input(trim($_POST['city'])):'';
$state			=isset($_POST['state'])?$xssClean->clean_input(trim($_POST['state'])):'';
$country		=isset($_POST['country'])?$xssClean->clean_input(trim($_POST['country'])):'';
$phone			=isset($_POST['mobile'])?$xssClean->clean_input(trim($_POST['mobile'])):'';
$email			=isset($_POST['email'])?$xssClean->clean_input(trim($_POST['email'])):'';
$workexp		=isset($_POST['workexp'])?$xssClean->clean_input(trim($_POST['workexp'])):'';
$attenddate		=isset($_POST['attenddate'])?$xssClean->clean_input(trim($_POST['attenddate'])):'';
$finance		=isset($_POST['finance'])?$xssClean->clean_input(trim($_POST['finance'])):'';
$designation	=isset($_POST['designation'])?$xssClean->clean_input(trim($_POST['designation'])):'';

if(is_numeric($workexp))
{
	$exp			= experience();
	$workexp 		= $exp[$workexp];
}

$source			=isset($_POST['utm_source'])?$xssClean->clean_input(trim($_POST['utm_source'])):'';
$medium			=isset($_POST['utm_medium'])?$xssClean->clean_input(trim($_POST['utm_medium'])):'';
$term			=isset($_POST['utm_term'])?$xssClean->clean_input(trim($_POST['utm_term'])):'';
$content		=isset($_POST['utm_content'])?$xssClean->clean_input(trim($_POST['utm_content'])):'';
$campaign		=isset($_POST['utm_campaign'])?$xssClean->clean_input(trim($_POST['utm_campaign'])):'';
$matchtype		=isset($_POST['matchtype'])?$xssClean->clean_input(trim($_POST['matchtype'])):'';
$network		=isset($_POST['network'])?$xssClean->clean_input(trim($_POST['network'])):'';
$creative		=isset($_POST['creative'])?$xssClean->clean_input(trim($_POST['creative'])):'';
$keyword		=isset($_POST['keyword'])?$xssClean->clean_input(trim($_POST['keyword'])):'';
$placement		=isset($_POST['placement'])?$xssClean->clean_input(trim($_POST['placement'])):'';
$random			=isset($_POST['random'])?$xssClean->clean_input(trim($_POST['random'])):'';
$copy			=isset($_POST['copy'])?$xssClean->clean_input(trim($_POST['copy'])):'';
$adposition		=isset($_POST['adposition'])?$xssClean->clean_input(trim($_POST['adposition'])):'';
$url			=isset($_POST['url'])?$xssClean->clean_input(trim($_POST['url'])):'';

$utm_campaign_id =isset($_POST['utm_campaign_id'])?$xssClean->clean_input(trim($_POST['utm_campaign_id'])):'';
$utm_ad_id   	 =isset($_POST['utm_ad_id'])?$xssClean->clean_input(trim($_POST['utm_ad_id'])):'';
$utm_placement	 =isset($_POST['utm_placement'])?$xssClean->clean_input(trim($_POST['utm_placement'])):'';
$utm_adset_id    =isset($_POST['utm_adset_id'])?$xssClean->clean_input(trim($_POST['utm_adset_id'])):'';
$gclid    		=isset($_POST['gclid'])?$xssClean->clean_input(trim($_POST['gclid'])):'';


$MIT_Email_Consent			=isset($_POST['terms'])?$xssClean->clean_input(trim($_POST['terms'])):'false';



$Phone_verified = '';
$email_verified = '';
$arr_email_status = array();


if(!empty($email))
{
	//$arr_email_status = getEmailStatus($email);
	//saveAPILog($con,'Email',json_encode($arr_email_status));
}

if(isset($arr_email_status['status']) && $arr_email_status['status'] == 'valid')
{
	$email_verified = 'YES';
}
else if(isset($arr_email_status['status']) && $arr_email_status['status'] == 'unknown')
{
	$email_verified = 'UN';
}
else if(isset($arr_email_status['status']) && $arr_email_status['status'] == 'accept_all')
{
	$email_verified = 'UN';
}
else{
	$email_verified = 'NO';
}

$agree = isset($_POST['agree'])?trim($_POST['agree']):'';
if(!empty($agree))
{
	$agree = 'Yes I Agree';
}

$lead_source 	= "";
$cp_source	 	= "";
if(!empty($source))
{
	
	$cp_source 		= strtolower($source);
	$isExists		= in_arrayi($cp_source,$arraySources);
	if($isExists)
	{
		$lead_source = $arraySources[$isExists];
	}
}


if(empty($lead_source))
	$lead_source = "Web";

$thankyoupage = "thank-you.php";
$lead_id 	  = '';

if($cp_source=="impactradius")
{
	$lead_id 	  = date('Ymdhis');
	$thankyoupage = "thank-you.php?lid=".$lead_id."&cid=".$term."&src=".$cp_source."&email=".$email;
}//


if(empty($firstname) || empty($lastname) || empty($country) || empty($workexp) ||  empty($phone) || empty($email) )
{
	header("Location: index.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Python for Managers (Online)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.text{
top: 170px;
position:absolute;
left:30px;
}
h2{
    color: #0080cc;
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
	background-color: #0080cc;
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
<form class="form-horizontal mCustomScrollbar" role="form" id="frm" name="frm" action="https://www2.emeritus.org/l/134351/2019-09-16/574yg4" method="post">
<input type="hidden" name="retURL" value="<?=$base_url ?>python-for-managers/<?php echo $thankyoupage;?>">						
<input type="hidden" name="lead_source" value="<?php echo $lead_source;?>">	
<input type="hidden" id="first_name" name="first_name" value="<?php echo $firstname;?>">				
<input type="hidden" id="last_name" name="last_name" value="<?php echo $lastname;?>">		
<input type="hidden" id="email" name="email" value="<?php echo $email;?>">
<input type="hidden" id="mobile" name="mobile" value="<?php echo $phone;?>">
<input type="hidden" id="country" name="Country" value="<?php echo $country;?>">
<input type="hidden" id="work_experience" name="work_experience" value="<?php echo $workexp;?>">
<input type="hidden" id="utm_campaign" name="utm_campaign" value="<?php echo $campaign;?>">
<input type="hidden" id="utm_content" name="utm_content" value="<?php echo $content;?>">
<input type="hidden" id="utm_medium" name="utm_medium" value="<?php echo $medium;?>">
<input type="hidden" id="utm_source" name="utm_source" value="<?php echo $source;?>">
<input type="hidden" id="utm_term" name="utm_term" value="<?php echo $term;?>">
<input type="hidden" id="media_id" name="media_id" value="<?php echo $lead_id;?>">
<input type="hidden" id="email_verified" name="Email_verified" value="<?php echo $email_verified;?>">
<input type="hidden" id="agree" name="agree" value="<?php echo $agree;?>">
<input type="hidden" id="utm_campaign_id" name="utm_campaign_id" value="<?php echo strip_tags($utm_campaign_id);?>">
<input type="hidden" id="utm_ad_id" name="utm_ad_id" value="<?php echo strip_tags($utm_ad_id);?>">
<input type="hidden" id="utm_placement" name="utm_placement" value="<?php echo strip_tags($utm_placement);?>">
<input type="hidden" id="utm_adset_id" name="utm_adset_id" value="<?php echo strip_tags($utm_adset_id);?>">
<input type="hidden" id="gclid" name="gclid" value="<?php echo strip_tags($gclid);?>">
</form>
<script>
document.frm.submit();
</script>
</body>
</html>
