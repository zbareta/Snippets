<?php 
require_once("includes/db_connection.php");
require_once("includes/functions.php");
include("includes/login.php");

if(isset($_SESSION['login_user'])){
header("location: pretraga.php");}
?>

<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="includes/kickstart/js/kickstart.js"></script> <!-- KICKSTART -->
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="includes/kickstart/css/kickstart.css" media="all" />
</head>
<body>
<div id="content">
<form action="" method="post">
<table>
<tr>
	<td>
		<label>Korisničko ime:</label>
	</td>
	<td>
		<input id="name" name="username" placeholder="Korisničko ime" type="text">
	</td>
</tr>
<tr>
	<td>
		<label>Lozinka:</label>
	</td>
	<td>
		<input id="password" name="password" placeholder="Lozinka" type="password">
	</td>
</tr>
</table>
<br>
<input name="submit" type="submit" value=" Login ">
</form>
<span style="color:red"><?php echo $error; ?></span>

</div>
</body>
</html>