<?php 
use Phppot\Member;

session_start();
?>
<HTML>
<HEAD>
<TITLE>user-registration</TITLE>
<link href="./assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="./vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
	<?php require_once "login-form.php";?>
	</div>
</BODY>
</HTML>