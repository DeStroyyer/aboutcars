<?php 
	session_start();
	$_SESSION["email"]= false;
	$_SESSION["password"]= false;
	$_SESSION["error_auth"] = false;
	header("Location: ".$_SERVER["HTTP_REFERER"]);
	exit;
 ?>