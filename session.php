<?php
session_start();
require_once 'class.user.php';
$session= newUSER();
if(!$session->is_loggedin())
	{
		$session->redirect('index.php');
	}
