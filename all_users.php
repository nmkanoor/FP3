<?php
require_once 'config.php';

if($user->is_loggedin()) 
{
	$sql = "SELECT `user_name` FROM users";
	$result = $DB_con->query( $sql );
	foreach ($result as $row) {
		echo "User Name: " . $row[ 'user_name' ]. "<br/>";
	}

}
else
{	
	$user->redirect('index.php');
	
}

?>
