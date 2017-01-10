<?php
include_once 'config.php';
if(!$user->is_loggedin())
{
	$user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>welcome - <?php print($userRow['user_email']); ?></title>
</head>

<body>

<div class="header">
	<div class="left">
		<label><a href="http://www.google.com/">Google</a></label>
	</div>
	<div class="right">
	<label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label></div>
	</div>
	<div class="right">
	<label><a href="all_users.php"><i class="glyphicon glyphicon-log-out"></i>See Users</a></label></div>
	</div>
</div>
<div class="content">
Welcome <?php print($userRow['user_name']); ?>! What would you like to do today?
</div>
</body>
</html>
