<?php
/************************************************************
*	EMAP Web2Lead - One Click Email							*
*	Author: Fred Bradley <fred.bradley@emap.com>			*
*	Created: 17th February 2014								*
*	Last Modified: 28th March 2014							*
*	Last Author: Fred Bradley <fred.bradley@emap.com>		*
*	Copyright: EMAP <http://www.emap.com>					*
/************************************************************/

/*
 * Description of script
 ***********************
 Moray Souter wanted to create a system where EMAP could send an email to a list of prospects,
 then with the least amount of effect on their behalf get their details to a queue in SalesForce
 so one of our agents could call them back - imediately. 
 
 	* The script will submit the form automatically, using the JavaScript file. 
 	* The form sends data to SalesForce (sfdc).
 	* The submitted form contains a return url, so that the customer is directed to a branded site to confirm completion.

 
 This script relies on certain variables being parsed in the URL. 
 	* Some are static and defined in the PHP here.
 	* Others have default values so you can redeclare them in the URL
 	* Others, if not parsed in the URL will just remain blank! 

 Further Parameters Document
 ============================
 
 - http://www.fredbradley.co.uk/downloads/One+Click+Email+Documentation 
  
  
============================================================================================================================================



				IT REALLY IS PROBABLY BEST IF YOU DON'T FIDDLE AROUND TOO MUCH WITH THE BELOW!
				
					ANY QUESTIONS ASK FRED - fred.bradley@EMAP.com or hello@fredbradley.co.uk



============================================================================================================================================

  
 HERE ARE SOME VARIABLES THAT HAVE DEFAULT VALUES - so if you neglect to set these in your URL the script will still work, be it may not have the desired effect!
 ==========================================*/
 	// Get the confirmation 'thank you' page
	if (isset($_GET['confirmation'])) {
		$retURL = $_GET['confirmation'];
	} else {
		// Default to RetailWeekAwards confirmation page
		$retURL = "http://www.emap.com";
	}

	// Get the SalesForce campaign ID
	if (isset($_GET['sfdc_campaign_id'])) {
		$Campaign_ID = $_GET['sfdc_campaign_id'];
	} else {
		// Default to the Retail Week Awards Campaign ID
		$Campaign_ID = "701w00000013FMG"; // Changing
	}
	
	// Get the "Show" to parse to SalesForce
		// This can be any text - that will be a human readable reference for where the click has come from.
	if(isset($_GET['sfdc_show_c'])) {
		$show_c = $_GET['sfdc_show_c'];
	} else {
		$show_c = "One Click Email";
	}
	
	// Set the Lead Channel
	if (isset($_GET['sfdc_leadchannel_text'])) {
		$leadchannel = $_GET['sfdc_leadchannel_text'];
	} else {
		$leadchannel = "Call To Action";
	}
	
/*

 STEP TWO: Set the Static Variables
 	 - NB: these 'static' Variables may become less static after a SFDC migration in April.
 ====================================*/
 	$oid 				= $_GET['sfdc_org_id'];
 	$recordType 		= $_GET['sfdc_recordtype'];
 	$show_id 			= $_GET['sfdc_show_id'];
 	$leadchannel_id 	= $_GET['sfdc_leadchannel_id'];
 	$debug				= $_GET['debug'];
	$debugEmail 		= $_GET['debugEmail'];

/*
 STEP THREE: Assign the dynamic customer variables
 =================================================*/
	$first_name 		= $_GET['first_name'];
	$last_name 			= $_GET['last_name'];
	$email 				= $_GET['email'];
	$company 			= $_GET['company'];
	$telephone 			= $_GET['phone'];	 // NOTE: It has to be 'phone' - as that's what goes through into SalesForce - SalesForce doesn't recognise 'telephone'!

/*
 STEP FOUR: 
 =================*/
 if (isset($_GET['show_form'])) {
	 $input_type = "text";
 } else {
 	$input_type = "hidden";
 }


?>
<!DOCTYPE html>
<html>
<!-- LAST UPDATED: 28th March 2014 -->
<!-- LAST AUTHOR: Fred Bradley -->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
	<title>EMAP Events - "Call Me Back" form</title>
</head>
<body>

	<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" name="web2lead" id="web2lead">

		<input type="<?php echo $input_type; ?>" name="oid" value="<?php echo (isset($oid) ? $oid : ''); ?>">
		<input type="<?php echo $input_type; ?>" name="retURL" value="<?php echo (isset($retURL) ? $retURL : ''); ?>">
		
		<!--  ----------------------------------------------------------------------  -->
		  <input type="<?php echo $input_type; ?>" name="debug" value="<?php echo (isset($debug) ? $debug : '0'); ?>">                              
		  <input type="<?php echo $input_type; ?>" name="debugEmail" value="<?php echo (isset($debugEmail) ? $debugEmail : 'emap.eventsweb@emap.com'); ?>">                                         
		<!--  ----------------------------------------------------------------------  -->
		
		<input  id="first_name" value="<?php echo (isset($first_name) ? $first_name : ''); ?>" name="first_name" type="<?php echo $input_type; ?>" />
		<input  id="last_name" value="<?php echo (isset($last_name) ? $last_name : ''); ?>" name="last_name" type="<?php echo $input_type; ?>" />
		<input  id="email" value="<?php echo (isset($email) ? $email : ''); ?>" name="email" type="<?php echo $input_type; ?>" />
		      
		<input  id="company" value="<?php echo (isset($company) ? $company : ''); ?>" name="company" type="<?php echo $input_type; ?>" />
		<input  id="phone" value="<?php echo (isset($telephone) ? $telephone : ''); ?>" name="phone" type="<?php echo $input_type; ?>" />

		<input id="Campaign_ID" name="Campaign_ID" value="<?php echo (isset($Campaign_ID) ? $Campaign_ID : ''); ?>" type="<?php echo $input_type; ?>" />
		<input id="recordType" name="recordType" value="<?php echo (isset($recordType) ? $recordType : ''); ?>" type="<?php echo $input_type; ?>" />
		<input id="<?php echo $leadchannel_id; ?>" name="<?php echo $leadchannel_id; ?>" value="<?php echo $leadchannel; ?>" type="<?php echo $input_type; ?>" />
		<input id="<?php echo $show_id; ?>" name="<?php echo $show_id; ?>" value="<?php echo $show_c; ?>" type="<?php echo $input_type; ?>" />		
	</form>

	<script src="submit_form.js" defer></script>

</body>
</html>