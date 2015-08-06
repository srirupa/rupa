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
require_once('variables.php');
	
	
	if(isset( $_POST['user']))
	{
		$selusr = $_POST['user'];
	}
	if(isset( $_POST['email']))
	{
		$selemail = $_POST['email'];
	}
	 $sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
	 if(!$sqlcon)
			{
				die("Error in connecting database");
			}
	 $sql = "select password from users where UserName=" . "'" . $selusr . "'" . "AND EmailId=" . "'" . $selemail . "'";
	 $result = $sqlcon -> query($sql);
	 $row = $result -> fetch_assoc();
	 if($row)
	 {
		echo "<div id='password'>";
		echo 'Your password is: ';
		echo "'";
		echo $row['password'];
		echo "'";
		echo "</div>";
	 }
	$sqlcon->close();
?>
<div id = 'bottomboxS'>
	<p><b>Copyright : SRI RUPA, AMRITA SCHOOL OF ENGINEERING, AMRITAPURI</b>.</p>
</div>
<div id = boxlinks>
<a href="http://localhost/index.php?"><b>|Home|</b></a>
<a href="http://localhost/login.php?"><b>|Login|</b></a>
<a href="#"><b>|My Account|</b></a>
</div>

</body>
</html>