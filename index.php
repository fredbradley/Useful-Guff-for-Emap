<?php 

$unix = time();

echo date("Y-m-d H:i:s", $unix);


exit();
$user = $_GET['user'];

//Sanatize $user 
	$user = trim($user);
	echo "Input: ".$user;
	if (strpos($user,'@') !== false) {
		$username = $user;
		$user = substr($username, 1);
		
	} else {
		$username = "@".$user;
	}

echo "<hr />";
echo "Username: ".$username."<br />";
echo "User: ".$user;
