<?php
require_once 'config.php';
if($user->is_loggedin()) 
{
	$user->logout();
	header("location:index.php");
}
?>

