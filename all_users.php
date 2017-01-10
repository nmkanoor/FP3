<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Directory</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Directory of Users</h2>
	<table class="table">
		<thead>
			<tr>
				<th>Username</th>
				<th>e-Mail ID</th>
			</tr>
		</thead>
				<?php
				if($user->is_loggedin()) 
				{
					$sql = "SELECT `user_name`,`user_email`  FROM users";
					$result = $DB_con->query( $sql );
					echo "<tbody>";
					foreach ($result as $row) {
						echo "<tr>";
						echo " <td>" .  $row [ 'user_name' ] . " </td>";
						echo "<td>" . $row ['user_email' ] . " </td>";
						echo "</tr>";
					}
					echo "</tbody>";
				}
				else
				{			
					$user->redirect('index.php');
	
				}
				?>
			</table>
		</div>
	</body>
