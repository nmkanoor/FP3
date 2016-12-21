<?php
require_once 'config.php';

if($user->is_loggedin()) 
{
	$sql = "SELECT `user_name`,`user_email`  FROM users";
	$result = $DB_con->query( $sql );
	foreach ($result as $row) {
		echo "User Name: " . $row[ 'user_name' ]. "<br/>" . "e-Mail Address: " . $row[ 'user_email' ] . "<br/>";
	}

}
else
{	
	$user->redirect('index.php');
	
}

?>
