<?php

	ob_start();
	session_start();
	include_once 'config.php';

	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$db = new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=utf8', $username, $password);
	}
	catch(Exception $e)
	{
		die('Error : ' . $e->getMessage());
	}

	$myusername = $_POST['myusername'];
	$mypassword = $_POST['mypassword'];
	$status = "Active";
	$date = date('Y-m-d h:i:s');

	class statusInfo {public $status;}

	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);

	$getData = $db->query("SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'");
	$getData -> setFetchMode(PDO::FETCH_CLASS, 'statusInfo');

	$count = $getData->rowCount();
	$getStatus = $getData->fetch();

	if($getStatus->status === "$restrict") {
		echo "<div class=\"login-error\"><div class=\"alert alert-danger alert-dismissible\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><strong>Sorry! You are only allowed to login once.</strong></div></div>";
	}

	else if($count == 1){

		echo "true";
		$_SESSION['username'] = 'myusername';
		$_SESSION['password'] = 'mypassword';

	$update=$db->query("UPDATE $tbl_name SET user_last_login='$date',status='$status' WHERE username='$myusername' and password='$mypassword'");
	}
	else {
		echo "<div class=\"login-error\"><div class=\"alert alert-danger alert-dismissible\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><strong>Login incorrect. Please try again or contact <a href=\"mailto:questions@client.com\" class=\"alert-link\">questions@client.com</a></strong>.</div></div>";
	}

	ob_end_flush();

?>
