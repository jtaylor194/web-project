<?php
session_start();
$username = $_SESSION["username"];
?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="./assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="login-form.php">Logout</a></span>
		</div>
		<div class="page-content">Welcome <?php echo $username;?></div>
	</div>
</BODY>
</HTML>