<?php
	$oid = "00D20000000FbiK";
	$retURL = "https://www.retailweeklive.com/test-page-test";
	$first_name = $_GET['first_name'];
	$last_name = $_GET['last_name'];
	$email = $_GET['email'];
	$company = $_GET['company'];
	$telephone = $_GET['phone'];
	$Campaign_ID = "701w00000012fMtAAI";
	$recordType = "01220000000FtZX";
	$i_00N20000002MTDt = $_GET['00N20000002MTDt'];
	$debug = '0';
	$debugEmail = "fred.bradley@emap.com";


?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
	
</head>
<body>
	<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" name="web2lead" id="web2lead">

		<input type="hidden" name="oid" value="<?php echo (isset($oid) ? $oid : ''); ?>">
		<input type="hidden" name="retURL" value="<?php echo (isset($retURL) ? $retURL : ''); ?>">
		
		<!--  ----------------------------------------------------------------------  -->
		<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
		<!--  these lines if you wish to test in debug mode.                          -->
		  <input type="hidden" name="debug" value="<?php echo (isset($debug) ? $debug : '0'); ?>">                              
		  <input type="hidden" name="debugEmail" value="<?php echo (isset($debugEmail) ? $debugEmail : ''); ?>">                                         
		<!--  ----------------------------------------------------------------------  -->
		
		<input  id="first_name" value="<?php echo (isset($first_name) ? $first_name : ''); ?>" name="first_name" type="hidden" />
		<input  id="last_name" value="<?php echo (isset($last_name) ? $last_name : ''); ?>" name="last_name" type="hidden" />
		<input  id="email" value="<?php echo (isset($email) ? $email : ''); ?>" name="email" type="hidden" />
		      
		<input  id="company" value="<?php echo (isset($company) ? $company : ''); ?>" name="company" type="hidden" />
		<input  id="phone" value="<?php echo (isset($telephone) ? $telephone : ''); ?>" name="phone" type="hidden" />

		<input id="Campaign_ID" name="Campaign_ID" value="<?php echo (isset($Campaign_ID) ? $Campaign_ID : ''); ?>" type="hidden" />
		<input id="recordType" name="recordType" value="<?php echo (isset($recordType) ? $recordType : ''); ?>" type="hidden" />
		<input id="00N20000002MTDt" name="00N20000002MTDt" value="<?php echo (isset($i_00N20000002MTDt) ? $i_00N20000002MTDt : 'Call to Action'); ?>" type="hidden" />
				
	</form>
	<script src="submit_form.js" defer></script>

</body>
</html>