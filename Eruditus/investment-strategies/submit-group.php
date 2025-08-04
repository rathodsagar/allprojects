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



$firstname		=isset($_POST['first_name'])?$xssClean->clean_input(trim($_POST['first_name'])):'';
$email			=isset($_POST['email'])?$xssClean->clean_input(trim($_POST['email'])):'';
$company		=isset($_POST['company'])?$xssClean->clean_input(trim($_POST['company'])):'';
$designation	=isset($_POST['designation'])?$xssClean->clean_input(trim($_POST['designation'])):'';
$no_of_enroll	=isset($_POST['no_of_enroll'])?$xssClean->clean_input(trim($_POST['no_of_enroll'])):'';
$group_query	=isset($_POST['group_query'])?$xssClean->clean_input(trim($_POST['group_query'])):'';
$groupurl		=isset($_POST['url'])?$xssClean->clean_input(trim($_POST['url'])):''; 
if(empty($firstname) || empty($email) || empty($company) || empty($designation) ||  empty($no_of_enroll))
{
	$arrResponse = array('status'=>'failure','title'=>'Please provide all required details');
}
else
{
	//extract data from the post
	//set POST variables
	$url = 'https://www2.emeritus.org/l/134351/2019-09-06/56yf94';
	$arrUserData = array(
		'first_name'=>$firstname,
		'email'=>$email,
		'Company'=>$company,
		'job_title'=>$designation,
		'Group_Enrol_No_of_Enrolments'=>$no_of_enroll,
		'Group_Enrol_Query'=>$group_query.'  '.$groupurl,
	);
	
	//url-ify the data for the POST
	$fields_string = '';
	foreach($arrUserData as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');

	//open connection
	$ch = curl_init();
	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($arrUserData));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	//execute post
	$result = curl_exec($ch);
	//close connection
	curl_close($ch);

	$arrResponse = array('status'=>'success','title'=>'Your request has been submitted successfully.');
}
echo json_encode($arrResponse);
exit;
?>