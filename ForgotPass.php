<html>
<head>
<title>
WebCart
</title>
</head>
<link rel='stylesheet' type = 'text/css' href='default1.css'>
<body background=http://localhost/images2/Untitled.png>
<div id = 'topboxS'>
	<img src="http://localhost/images2/coollogo_com-32506606.png">
</div>
<?php
echo "<div id = 'middleboxFP'>";
	echo '<form method="POST" action="password.php">User Name:  <input type="text" name="user" size="40"><br><br>Email ID:  <input type="text" name="email" size="40"><br><br><input id="button" type="submit" name="submit"value="Submit"></form>';
echo "</div>";
?>
<div id = 'bottomboxS'>
	<p><b>Copyright : SRI RUPA, AMRITA SCHOOL OF ENGINEERING, AMRITAPURI</b>.</p>
</div>
<div id = boxlinks>
<a href="http://localhost/login.php?"><b>|Login|</b></a>
<a href="http://localhost/index.php?"><b>|Home|</b></a>
<a href="#"><b>|My Account|</b></a>
</div>

</body>
</html>