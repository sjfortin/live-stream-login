<?php
include_once 'config.php';
 
$myusername = $_POST['myusername']; 
$reset = ""; 
 
try {

    $db = new PDO('mysql:host='.$host.';dbname='.
	$db_name.';charset=utf8', $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE $tbl_name SET status='$reset' WHERE username='$myusername'";

    $sth = $db->prepare($query);
    $sth->execute();
    header("Location: main_login.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$db = null;
?>