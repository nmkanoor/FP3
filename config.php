<?php
session_start();
$DB_host = "sql2.njit.edu";
$DB_user = "nk352";
$DB_pass = "KACSleed5";
$DB_name = "nk352";
try
{  	
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

include_once 'class.user.php';
$user = new USER($DB_con);
?>
