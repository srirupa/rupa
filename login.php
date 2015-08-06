<?php
	session_start();
?>

<html>
<head>
<title>
SHOP SWIPE
</title>
</head>
<link rel='stylesheet' type = 'text/css' href='default1.css'>
<body background=http://localhost/images2/Untitled.png>
<div id = 'topboxS'>
	<img src="http://localhost/images2/coollogo_com-32506606.png">
</div>
<?php
echo "<div id = 'middleboxL'>";
	echo '<form method="POST" action="login_check.php">User Name:  <input type="text" name="user" size="40"><br><br>Password:  <input type="password" name="password" size="40"><br><br><input id="button" type="submit" name="submit"value="Log-In"></form>';
	echo '<a href ="http://localhost/ForgotPass.php?">Forgot Password</a>';
	echo '<br />';
	echo '<br />';
	echo '<a href="http://localhost/register.php?"><button type="button">Register</button></a>';
echo '</div>';
?>
<div id = 'bottomboxS'>
	<p><b>Copyright : SRI RUPA, AMRITA SCHOOL OF ENGINEERING, AMRITAPURI</b>.</p>
</div>
<div id = boxlinks>
<a href="http://localhost/index.php?"><b> |Home| </b></a>
<?php
	if($_SESSION['login'] == 0)
	{
?>
<a href="http://localhost/login.php?"><b> |Login| </b></a>
<?php
	}
else
	{
?>
<a href="http://localhost/logout.php?"><b> |Logout| </b></a>
<a href="#"><b> |My Account| </b></a>
<?php
	}
?>
</div>

</html>